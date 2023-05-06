<?php

namespace App\Controllers;

class LegalAge extends BaseController
{
    public function age($sex, $age)
    {
        if ($age >= 18)
        echo $sex, $age;
    }
}
