<?php
namespace MIET\STAT;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class STATManager
{
    const IBLOCK_CODE_STAT = 'stat';
    const IBLOCK_CODE_DEPARTMENTS = 'departments';

    public static function GetSTAT(
        $arOrder = array('SORT' => 'ASC'),
        $arFilter = array(),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = array('ID', 'NAME')
    )
    {
        $elements = array();
        //Получаем ID инфоблока STAT по его символьному коду
        $rsIblock = \CIBlock::GetList(
            array(),
            array('CODE' => self::IBLOCK_CODE_STAT, 'SITE_ID' =>
                SITE_ID)
        );
        $arIblock = $rsIblock->GetNext();
        $arFilter['IBLOCK_ID'] = $arIblock['ID'];
        $rsElements = \CIBlockElement::GetList(
            $arOrder, //массив полей сортировки элементов и её            направления
            $arFilter, //массив полей фильтра элементов и их значений
            $arGroupBy, //массив полей для группировки элементов
            $arNavStartParams, //параметры для постраничной навигации и ограничения количества выводимых элементов
            $arSelectFields //массив возвращаемых полей элементов
        );
        while ($arElements = $rsElements->Fetch()) {
            //Получение информации о файле с регламентом расчета  показателя: ссылка на файл на сервере, название файла и т.д.
            foreach ($arElements['PROPERTY_REGULATIONS_VALUE'] as $key
            => $idFileRegulation) {
                $arElements['PROPERTY_REGULATIONS_VALUE'][$key] =
                    \CFile::GetFileArray($idFileRegulation);
            }
            $elements[] = $arElements;
        }
        return $elements;
    }

    public static function GetSTATEmployee($idEmployee)
    {
        if (!$idEmployee) {
            return array();
        }
        //Получаем список всех подразделений сотрудника
        $arDepartmentsUser = UserTable::getList(array(
            'select' => array(
                'UF_DEPARTMENT'
            ),
            'filter' => array(
                'ID' => $idEmployee
            )
        ))->fetch();
        //Получаем список всех STAT данных подразделений
        return self::GetSTAT(
            array('NAME' => 'asc'),
            array('PROPERTY_DEPARTMENT.ID' => $arDepartmentsUser),
            false,
            false,
            array('ID', 'NAME', 'PROPERTY_INDICATOR_TYPE',
                'PROPERTY_WEIGHT', 'PROPERTY_REGULATIONS')
        );
    }

    public static function SetSTATEmployee($idEmployee, $period,
                                          $arSTATValues)
    {
        if (!$idEmployee || !is_array($arSTATValues) ||
            !count($arSTATValues)
        ) {
            return array();
        }
        global $USER;
        //Получаем объект подключения к БД
        $db = Application::getConnection();
        //Начинаем транзакцию
        $db->startTransaction();

        foreach ($arSTATValues as $STAT => $STATValue) {
            $arValue = array(
                'UF_VALUE' => $STATValue,
                'UF_BRAND' => $STAT,
                'UF_EMPLOYEE' => $idEmployee,
                'UF_CREATED_BY' => $USER->GetID(),
                'UF_CREATED' => new
                \Bitrix\Main\Type\DateTime(date('d.m.Y') . ' 00:00:00'),
                'UF_PERIOD' => new
                \Bitrix\Main\Type\DateTime($period . ' 00:00:00')
            );
            $result = STATEmployeeTable::add($arValue);
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }
        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        }
    }

    public static function GetSTATEmployeeValue($idSTAT, $idEmployee, $period)
    {
        return STATEmployeeTable:: getList(array(
            "select" => array("ID", "UF_VALUE"),
            "filter" => array(
                "UF_EMPLOYEE" => $idEmployee,
                "UF_BRAND" => $idSTAT,
                "UF_PERIOD" => \Bitrix\Main\Type\DateTime::createFromUserTime($period),
            )
        ))->fetch();
    }
}