<?php

//define('NAMA', 'Daffa Gimnastiar Kurnia Irawan');
//echo NAMA;

//echo "<br>";

//const UMUR = 21;
//echo UMUR;

//class Coba {
//    const NAMA = 'Daffa';
//}

//echo Coba::NAMA;



//echo __FILE__;


//function coba() {
//    return __function__;
//}

//echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;







?>