<?php

/**
 * Created by PhpStorm.
 * User: kimdongwon
 * Date: 2017-09-28
 * Time: 6:56 PM
 */

class Golf extends Application{

    function __construct() {

        parent::__construct();

    }

    public function index(){

        $this -> show(6);

    }
}