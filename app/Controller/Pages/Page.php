<?php 

namespace App\Controller\Pages;
use \App\Utils\View;

class Page {
    //this method is responsible for rendering the top of the page
    //@return string
    private static function getHeader(){
        return View::render('pages/header');
    }

     //this method is responsible for rendering the bottom of the page
    //@return string
    private static function getFooter(){
        return View::render('pages/footer');
    }

    // this method returns the view of our generic page
    // @return string;

    public static function getPage($title, $content){
        return View::render('pages/page',[
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter(),
        ]);
    }
}