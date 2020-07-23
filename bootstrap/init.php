<?php
//Start Session 
if(!isset($_SESSION)){

    session_start();
}

//Load environment Variables
require __DIR__ . '/../app/config/_env.php';