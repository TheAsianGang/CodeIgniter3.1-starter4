<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accessories
 *
 * @author Owner
 */
class Accessories extends CSV_Model{
    //put your code here
    
    public $id;
    public $catId;
    public $imagepath;
    public $name;
    public $damage;
    public $protection;
    public $weight;
    
    public function __construct()
    {
        parent::__construct('../data/Accessories.csv', 'id');
    }
}
