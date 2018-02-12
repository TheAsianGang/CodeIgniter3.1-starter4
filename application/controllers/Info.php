<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Info extends Application
{
    public function index()
    {
        header("Content-type: application/json");
        echo json_encode("Scenario: PUBG");
    }
    
    public function category($key = NULL)
    {
        $categories = $this->Categories->all();
        if ($key != NULL)
        {
            foreach($categories as $row)
            {
                if(!strcmp($row->id, $key))
                {
                    header("Content-type: application/json");
                    echo json_encode($row);
                }
            }
        }
        else
        {
            header("Content-type: application/json");
            echo json_encode($categories);
        }
    }
    
    public function catalog($key = NULL)
    {
        $accessories = $this->Accessories->all();
        if ($key != NULL)
        {
            foreach($accessories as $row)
            {
                if(!strcmp($row->id, $key))
                {
                    header("Content-type: application/json");
                    echo json_encode($row);
                }
            }
        }
        else
        {
            header("Content-type: application/json");
            echo json_encode($accessories);
        }
    }
    
    public function bundle($key = NULL)
    {
        $sets = $this->Sets->all();
        if ($key != NULL)
        {
            foreach($sets as $row)
            {
                if(!strcmp($row->id, $key))
                {
                    header("Content-type: application/json");
                    echo json_encode($row);
                }
            }
        }
        else
        {
            header("Content-type: application/json");
            echo json_encode($sets);
        }
    }
}