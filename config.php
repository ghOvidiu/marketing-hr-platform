<?php

    if(!isset($_SESSION))
    {
        session_start();
    }


    require_once "Facebook/autoload.php";

    $FB = new \Facebook\Facebook([

        'app_id'=>'853084181689666',
        'app_secret'=>'37f8b33c7a8002587ef6c0085feeb6aa',
        'default_graph_version'=>'v3.2'

    ]);

    $helper=$FB->getRedirectLoginHelper();
?>