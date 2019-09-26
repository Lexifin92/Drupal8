<?php
// @file
// Contains \Drupal\hello_world\Contoller\HelloWorldContoroller



namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase{
    public function hello(){
        $tekijanNimi = 'Alex <3';
        $teksti = '<h1> HURRAA!!! </h1><p> Tämä on eka moduulini <3 <3</p>';
        return array(
            '#title' => 'Hello World',
            '#markup' => $teksti . '(tekijänä: ' . $tekijanNimi . ' &copy;)'
        );
    }
}











?>