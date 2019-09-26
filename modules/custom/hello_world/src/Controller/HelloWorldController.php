<?php
/**
* @file
* Contains \Drupal\hello_world\Controller\HelloWorldController
*/
namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
class HelloWorldController extends ControllerBase {
   public function hello(){
       $tekijaNimi = 'Mega Lexi! ';
       $teksti = '<h1>Mahtava meininki</h1><p>Tämä on ensimmäinen moduulini.</p>';
       return array(
           '#title' => 'Hello world',
           '#markup' => $teksti . '(tekijänä: ' . $tekijaNimi . ' &copy;)'
       );

    }



    public function uutinen(){
        $tekijaNimi = 'Alex';
        $uutinen = '<h1>Tähän tulee otsikko</h1><p> ja jatkuu leipänä tässä.</p>';
        return function
  
  
  
    }


}
?>