<?php


class Sets extends CSV_Model
{
    // Sets Id
    public $id;
    // Sets name
    public $name;
    // Sets helmId
    public $helmId;
    // Sets chestId
    public $chestId;
    // Sets primaryId
    public $primaryId;
    // Sets secondaryId
    public $secondaryId;

    function __construct()
    {
        parent::__construct(APPPATH . "../data/Sets.csv", "id", "sets");
    }
}