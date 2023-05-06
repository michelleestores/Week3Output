<?php

namespace App\Controllers;

class ZipCode extends BaseController
{
    public function city($zip){
        $municipality = array (

        '4100' => 'Cavite City',
        '4101' => 'Sangley Point Naval Base',
        '4102' => 'Bacoor, Cavite',
        '4103' => 'Imus, Cavite',
        '4104' => 'Kawit, Cavite',
        '4105' => 'Noveleta, Cavite',
        '4106' => 'Rosario, Cavite',
        '4107' => 'General Trias City',
        '4108' => 'Tanza, Cavite',
        '4109' => 'Trece Martires City',
        '4110' => 'Naic, Cavite',
        '4111' => 'Ternate, Cavite',
        '4112' => 'Maragondon, Cavite',
        '4113' => 'Magallanes, Cavite',
        '4114' => 'Dasmariñas City',
        '4115' => 'Dasmariñas Resettlement Area',
        '4116' => 'Carmona, Cavite',
        '4117' => 'Gen. Mariano Alvarez (GMA)',
        '4118' => 'Silang, Cavite' ,
        '4119' => 'Amadeo, Cavite',
        '4120' => 'Tagaytay City, Cavite',
        '4121' => 'Mendez, Cavite',
        '4122' => 'Indang, Cavite',
        '4124' => 'Gen. Emilio Aguinaldo, Cavite',
        );
        if (isset($municipality[$zip])){
            $city = $municipality[$zip];
        }
        echo $city;
    }
}
