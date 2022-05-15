<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('FonctionDesign');
		$data['listeCategorie'] = $this->FonctionDesign->listeCategorie();
		$data['listeContenue'] = $this->FonctionDesign->listeContenue();
		$data['listeCommentaire'] = $this->FonctionDesign->listeCommentaire();
		$this->load->view('index',$data);			
	}		
}
