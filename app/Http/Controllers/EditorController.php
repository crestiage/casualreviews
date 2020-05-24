<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class EditorController extends Controller
{

    function index(){
        
        return view("editor/editor", 
        ["data" => array(
            "templateConfig" => $this->getTemplateConfig()
        )]);
    }

    private function getTemplateConfig(){
        $templateConfig = array("templateConfig" => array(
            "display_navbar_only" => "true"
        ));
        return $templateConfig;
    }

}


?>