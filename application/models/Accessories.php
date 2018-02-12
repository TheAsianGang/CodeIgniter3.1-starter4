<?php
class Accessories extends CSV_Model
{
    // Accessories Id
    public $id;
    // Accessories category Id
    public $catId;
    // Accessories image path
    public $imagepath;
    // Accessores damage
    public $damage;
    // Accessories protection
    public $protection;
    // Accessories weight
    public $weight;

    function __construct()
    {
        parent::__construct(APPPATH . "../data/Accessories.csv", "id", "accessories");
    }
}
