<?php 

namespace App\Controller\Pages;
use \App\Utils\View;

class Home extends Page{
    // this method returns the view of home page
    // @return string;

    public static function getHome(){
        //home's view
        $content = View::render('pages/home',[
            'name' => ' DEV - TESTE',
            'description' => 'Modelo MVC em php puro',
            'site' => 'https://www.youtube.com/watch?v=TmeyoTNu748'
        ]);
        // return page's view
        return parent::getPage('DEV - TESTE - HOME', $content);
    }
}