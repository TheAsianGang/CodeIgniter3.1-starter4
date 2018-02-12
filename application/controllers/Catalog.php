<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catalog
 *
 * @author Owner
 */
class Catalog extends Application {
    //put your code here
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $accessories = $this->Accessories->all();
        $categories = $this->Categories->all();
        
        $this->data['accessories'] = $accessories;
        $this->data['categories'] = $categories;
        
        $this->data['pagebody'] = 'catalog';
        $this->data['pagetitle'] = 'catalogue';
        $this->render();
    }
}
