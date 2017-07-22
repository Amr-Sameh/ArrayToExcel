<?php

/**
 * Created by PhpStorm.
 * User: PC - MeiR
 * Date: 7/22/2017
 * Time: 7:29 PM
 *
 *
 * ====================================================================================
 * =                                                                                  =
 * =   PHPExcel library source : https://github.com/PHPOffice/PHPExcel                =
 * =                                                                                  =
 * ====================================================================================
 */
include "PHPExcel/Classes/PHPExcel.php";
include "PHPExcel/Classes/PHPExcel/Writer/Excel2007.php";
class ArrayToExcel
{
private $excelFile ;
private $excelFileWriter;
private $DataArray;
private static $instance;


public static  function GetInstance(){
    if (!isset(self::$instance))
        self::$instance = new ArrayToExcel();
    return self::$instance;
}

public function setDataArray($DataArray){
    $this->DataArray=$DataArray;
}

private function __construct()
{
    $this->excelFile = new PHPExcel();
    $this->excelFileWriter = new PHPExcel_Writer_Excel2007();
}

public function Parse(){
    

}



}