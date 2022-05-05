<?php 

namespace App\Controller\Pages;
use \App\Utils\View;
use \App\Model\Entity\OrganizationModel;

class Home extends Page{
    // this method returns the view of home page
    // @return string;

    public static function getHome(){
        $obOrganization = new OrganizationModel;

        //home's view
        $content = View::render('pages/home',[
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);
        // return page's view
        return parent::getPage('DEV - TESTE - HOME', $content);
    }
}