<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $t1 = time();

        $data = [];
        $data['t1'] = $t1;
        return view('welcome_message',$data);
    }
}
