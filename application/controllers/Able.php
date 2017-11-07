<?php
/**
 * Created by PhpStorm.
 * User: kimdongwon
 * Date: 2017-09-28
 * Time: 2:26 PM
 * git test
 */
class Able extends Application{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * index of Able.php
     */
    public function index(){

        $this->show(1);



    }

}