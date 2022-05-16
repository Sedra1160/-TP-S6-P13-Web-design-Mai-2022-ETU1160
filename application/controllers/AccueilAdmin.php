<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccueilAdmin extends CI_Controller {

	public function traitementLogin(){
        $this->load->model('Fonction');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $data['vue'] = "dashboard";
        if ($this->Fonction->verification($email,$mdp) > 0){
            $this->load->library('session');
            $this->session->set_userdata("superuser",$email);
            $data['usersuper']=$this->session->userdata("superuser");
            $data['output'] = "contenue";
            $this->load->view('templateAdmin',$data);
        }
        if ($this->Fonction->verification($email,$mdp) == 0){
            $this->load->view('login');
        }
	}		
    public function traitementInscription(){
        $this->load->model('Fonction');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $this->Fonction->traitementInscription($nom,$prenom,$email,$mdp);
        $this->load->view('login');
    }
    public function decoAdmin(){
        $this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('login');
    }
}
