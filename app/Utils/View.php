<?php

namespace App\Utils;

class View 
{
    //this method is responsible to returns view's content
    // @param string $view
    // @return string


    private static function getContentView($view){
        $file = __DIR__.'/../../resources/views/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : ''; /* if views files exists will be returned, if not, it won't be returned */ 
    }

    //this method is responsible to returns a rendered view's content
    // @param string $view
    // @return array $vars (string/numeric)
    
    public static function render($view, $vars = []){
      //view content
      $contentView = self::getContentView($view);

      //returns variable's arrays  
      $keys = array_keys($vars);
      $keys =  array_map(function($item){
        return'{{'.$item.'}}';
      },$keys);

    //   echo "<pre>";
    //   print_r($keys);
    //   echo "</pre>"; exit ;

      return str_replace($keys,array_values($vars),$contentView);
    }

}