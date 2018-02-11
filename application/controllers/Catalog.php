<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Catalog extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $categories = $this->categories->all();
            $accessories = $this->accessories->all();
            $this->data['accessories'] = $accessories;
            $this->data['categories'] = $categories;
            
            $this->data['pagebody'] = 'catalog';
            $this->data['pagetitle'] = 'Accessory Catalog';
            $this->render();
	}

}