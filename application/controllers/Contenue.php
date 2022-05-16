<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenue extends CI_Controller {

	public function index()
	{
        $this->load->model('Fonction');
        $data['listeContenue'] = $this->Fonction->listeContenue();
        $data['vue'] = "contenue";
		$this->load->view('templateAdmin',$data);
	}		
    public function AjoutContenue(){
        $data['vue'] = "ajoutContenue";
		$this->load->view('templateAdmin',$data);
    }
}
    