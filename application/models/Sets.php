<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sets
 *
 * @author Owner
 */
class Sets extends CSV_Model
{
    //put your code here
    public $id;
    public $name;
    public $helmId;
    public $chestId;
    public $primaryId;
    public $secondaryId;
    
    function __construct()
    {
        parent::__construct(APPATH . "../data/Sets.csv", "id", "sets");
    }
}
