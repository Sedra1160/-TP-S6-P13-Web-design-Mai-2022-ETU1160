<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

	public function index()
	{
        $this->load->model('Fonction');
        $data['listeContenue'] = $this->Fonction->listeContenue();
        $this->load->view('articles',$data);
	}	
    public function ficheArticle($url){
		$this->load->model('Fonction');
		$data['contenueInd'] = $this->Fonction->listeContenueTitre($url);		 
		// var_dump($data['contenueInd']);
		if($url == $data['contenueInd']['url']){
			$this->load->view('ficheArticle',$data);
		}
		
	}	
}
