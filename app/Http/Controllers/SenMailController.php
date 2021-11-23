<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenMailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass(); 
        $objDemo->nguoi_nhan = 'Tài Thạch';
        $objDemo->noi_sinh = 'Trà Vinh';
        $objDemo->nam_sinh = '1999';
        $objDemo->nguoi_gui = 'Mr serect';

        Mail::to("taithach28@gmail.com")->send(new GuiMail($objDemo));
    }
}
