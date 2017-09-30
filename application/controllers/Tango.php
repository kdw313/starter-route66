<?php
/**
 * Created by PhpStorm.
 * User: kimdongwon
 * Date: 2017-09-28
 * Time: 2:26 PM
 */
class Tango extends Application{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * index of Able.php
     */
    public function index(){

        $this->show(5);

    }

}