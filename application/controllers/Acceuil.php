<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

	public function traitementLogin(){
        $this->load->view('index');
        // $this->load->model('Fonction');
        // $email = $this->input->post('email');
        // $mdp = $this->input->post('mdp');
        // if ($this->Fonction->verification($email,$mdp) > 0)$this->load->view('index');
        // if ($this->Fonction->verification($email,$mdp) == 0)$this->load->view('login');
	}		
    public function traitementInscription(){
        // $this->load->model('Fonction');
        // $nom = $this->input->post('nom');
        // $prenom = $this->input->post('prenom');
        // $email = $this->input->post('email');
        // $mdp = $this->input->post('mdp');
        // $this->Fonction->traitementInscription($nom,$prenom,$email,$mdp);
        // $this->load->view('login');
        $this->load->view('index');
    }
}
