<?php
/**
 * Created by PhpStorm.
 * User: brice
 * Date: 11/02/2019
 * Time: 10:59
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response("First symfony controller");
    }
}