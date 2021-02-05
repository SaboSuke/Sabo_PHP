<?php
/** User: Sabo */

namespace app\core;

/** 
 * Class Controller
 * 
 * @author Essam Abed <abedissam95@gmail.com>
 * @package app\core
*/

class Controller{
    
    /**
     * Controller constructor
     * 
     */
    public function __construct(){
        //
    }

    public function render($view, $params = []){
        return Application::$app->router->renderView($view, $params);
    }

}