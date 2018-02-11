<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categories
 *
 * @author Owner
 */
class Categories extends CSV_Model
{
    //put your code here
    public $id;
    public $name;
    public $desc;
    
    function __construct()
    {
        parent::__construct(APPATH . "..data/Categories.csv", "id", "categories");
    }
}
