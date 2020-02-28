<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
class SweetalertController extends Controller
{
    //
    public function notification($type)
    {
        switch ($type) {
            case 'message':
                Alert::message('Hello Investmentnovel','Message');
                break;
            case 'basic':
                Alert::basic('Welcome Investmentnovel','Basic');
                break;
            case 'info':
                Alert::info('Mail Sent','Info');
                break;
            case 'success':
                Alert::success('Your message has been successfully sent', 'Success');
                break;
            case 'error':
                Alert::error('Something went wrong','Error');
                break;
            case 'warning':
                Alert::warning('Please activate your account','Warning');
                break;
            default:
                break;
        }
        return view('sweetalert');
    }
}
