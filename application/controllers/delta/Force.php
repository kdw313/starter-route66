<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: kimdongwon
 * Date: 2017-09-28
 * Time: 6:37 PM
 */

class Force extends Application{

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->show(4);
    }

}