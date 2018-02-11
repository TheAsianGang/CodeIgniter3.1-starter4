<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

    class Categories extends CSV_Model {
          // categories Id
    public $id;
    // categories name
    public $name;
    // categories description
    public $desc;

        function __construct()
        {
            parent::__construct(APPPATH . "../data/Categories.csv", "id", "categories");
        }
        
        function all()
        {
            
        }
    }
