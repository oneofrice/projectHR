<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class DataController extends Controller
{
    public $check_array = array();

    public function postData()
    {
        $array['city'] = $_GET['city'];
        $array['enrollment'] = $_GET['enrollment'];
        $array['edu_level'] = $_GET['edu_level'];
        $array['major'] = $_GET['major'];
        $array['experience'] = $_GET['experience'];
        $array['company_t'] = $_GET['company_t'];
        $array['company_s'] = $_GET['company_s'];
        $array['last_job'] = $_GET['last_job'];
        $array['gender'] = $_GET['gender'];
        $array['exp'] = $_GET['exp'];

        $new_array = json_encode($array);
        return $new_array;
    }


}
