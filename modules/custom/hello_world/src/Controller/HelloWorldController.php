<?php
/**
* @file
* Contains \Drupal\hello_world\Controller\HelloWorldController
*/
namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
class HelloWorldController extends ControllerBase {
   public function hello(){
       $tekijaNimi = 'Jutta Hyrskylahti';
       $teksti = '<h1>Mahtava meininki</h1><p>Tämä on ensimmäinen moduulini.</p>';
       return array(
           '#title' => 'Hello world',
           '#markup' => $teksti . '(tekijänä: ' . $tekijaNimi . ' &copy;)'
       );
   }
}
?>