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

    /**
     * @Route("/article/Populous")
     */
    //public function read(){
    //    return new Response("Voici le premier article");
    //}

    /**
     * @Route("/article/{content}")
     */
    public function read($content){
        return new Response("Voici le premier article ".$content);
    }

}