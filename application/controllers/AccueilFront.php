<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilFront extends CI_Controller {

	public function index()
	{
		$this->load->model('Fonction');
		$data['listeCategorie'] = $this->Fonction->listeCategorie();
		$data['listeContenue'] = $this->Fonction->listeContenue();
		$data['listeCommentaire'] = $this->Fonction->listeCommentaire();
		$this->load->view('templateFront',$data);			
	}	
}
