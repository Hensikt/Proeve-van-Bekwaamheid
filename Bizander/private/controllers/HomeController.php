<?php
/**
 * Created by PhpStorm.
 * User: hensikt
 * Date: 2019-06-26
 * Time: 14:31
 */

class HomeController {

    function homepage(){

        require __DIR__ . "/../includes/functions.php";
        require __DIR__ . "/../models/models.php";
        require __DIR__ . "/../views/header.php";
        require __DIR__ . "/../views/homepage.php";
        require __DIR__ . "/../views/footer.php";

    }

}