<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    

	public function listeUtilisateur(){
        $this->load->model('Fonction');
        $data['listeUser'] = $this->Fonction->listeUser();
        $data['vue'] = "listeUtilisateur";
        $this->load->view('index',$data);
    }
}
