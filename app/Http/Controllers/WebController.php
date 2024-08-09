<?php

namespace App\Http\Controllers;

use App\Models\TemplateModel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function tampiltemplate(){
        $templates = TemplateModel::paginate(10);
        return view("administrator.modul-web.templatewebsite", compact(['templates']));
    }
}
