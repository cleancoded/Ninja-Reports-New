<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('dashboard/home');
    }

    public function seo_audit(){
        return view('dashboard/seo_audit');
    }

    public function seo_analysis(){
        return view('dashboard/seo_analysis');
    }
    public function audit(){
        return view('dashboard/audit');
    }
}
