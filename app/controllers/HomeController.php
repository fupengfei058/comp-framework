<?php
/**
 * \HomeController
 */
class HomeController extends BaseController
{
    public function home()
    {
        Stu::test();
        require dirname(__FILE__).'/../views/home.php';
    }
}