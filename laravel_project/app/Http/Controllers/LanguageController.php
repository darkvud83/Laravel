<?php
namespace App\Http\Controllers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageController
 *
 * @author helingen
 */
class LanguageController extends BaseController {
    //put your code here
    public function chooser() {
        
      \Session::set('locale', \Input::get('locale'));
        return \Redirect::back();
    
        
    }
}
