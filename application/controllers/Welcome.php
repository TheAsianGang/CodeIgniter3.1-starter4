<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
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
            $sets = $this->Sets->all();
            $this->data['sets'] = $sets;
            $setOne = $this->Sets->get(0);
            $this->data['name'] = $setOne->name;
            
            //Retrieves all image paths and adds it to controller for use in view
            $this->data['helmId'] = $this->Accessories->get($setOne->helmId)->imagepath;
            $this->data['chestId'] = $this->Accessories->get($setOne->chestId)->imagepath;
            $this->data['primaryId'] = $this->Accessories->get($setOne->primaryId)->imagepath;
            $this->data['secondaryId'] = $this->Accessories->get($setOne->secondaryId)->imagepath;
            
            //Calculates damage of each accessory in set and adds it to controller for use in view
            $this->data['damageStat'] = $this->Accessories->get($setOne->helmId)->damage
                    + $this->Accessories->get($setOne->chestId)->damage
                    + $this->Accessories->get($setOne->primaryId)->damage
                    + $this->Accessories->get($setOne->secondaryId)->damage;
            
            //Calculates protection of each accessory in set and adds it to controller for use in view
            $this->data['protectionStat'] = $this->Accessories->get($setOne->helmId)->protection
                    + $this->Accessories->get($setOne->chestId)->protection
                    + $this->Accessories->get($setOne->primaryId)->protection
                    + $this->Accessories->get($setOne->secondaryId)->protection;
            
            //Calculates weight of each accessory in set and adds it to controller for use in view
            $this->data['weightStat'] = $this->Accessories->get($setOne->helmId)->weight
                    + $this->Accessories->get($setOne->chestId)->weight
                    + $this->Accessories->get($setOne->primaryId)->weight
                    + $this->Accessories->get($setOne->secondaryId)->weight;
            
            $this->data['pagebody'] = 'welcome_message';
            $this->data['pagetitle'] = 'Set View';
            $this->render();
	}

        /*
         * Same function as above, but takes the id that
         * was retrieved by Index() as a parameter. User
         * can make set selection from list
         */
        public function set($id)
	{
            $sets = $this->Sets->all();
            $this->data['sets'] = $sets;
            $setOne = $this->Sets->get($id);
            $this->data['name'] = $setOne->name;
            
            $this->data['helmId'] = $this->Accessories->get($setOne->helmId)->imagepath;
            $this->data['chestId'] = $this->Accessories->get($setOne->chestId)->imagepath;
            $this->data['primaryId'] = $this->Accessories->get($setOne->primaryId)->imagepath;
            $this->data['secondaryId'] = $this->Accessories->get($setOne->secondaryId)->imagepath;
            
            $this->data['damageStat'] = $this->Accessories->get($setOne->helmId)->damage
                    + $this->Accessories->get($setOne->chestId)->damage
                    + $this->Accessories->get($setOne->primaryId)->damage
                    + $this->Accessories->get($setOne->secondaryId)->damage;
            
            $this->data['protectionStat'] = $this->Accessories->get($setOne->helmId)->protection
                    + $this->Accessories->get($setOne->chestId)->protection
                    + $this->Accessories->get($setOne->primaryId)->protection
                    + $this->Accessories->get($setOne->secondaryId)->protection;
            
            $this->data['weightStat'] = $this->Accessories->get($setOne->helmId)->weight
                    + $this->Accessories->get($setOne->chestId)->weight
                    + $this->Accessories->get($setOne->primaryId)->weight
                    + $this->Accessories->get($setOne->secondaryId)->weight;
            
            $this->data['pagebody'] = 'welcome_message';
            $this->data['pagetitle'] = 'Set View';
            $this->render();
	}
}
