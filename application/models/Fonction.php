<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Fonction extends CI_Model {

    function verification ($email,$mdp){
        $data = array (
        'email' => $email,
        'mdp' => sha1($mdp)
        );
        $this->db->select('*');
        $this->db->where($data);
        $this->db->from('superuser');
        $query = $this->db->get();
        $array = $query->row_array();
        $isa = $query->num_rows();
        return $isa;
    }
    function listeUser(){
        $req="select * from simpleuser where etat = 0";
        $query = $this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        // var_dump($list);
        return $list;
        // $data = array (
        //     'etat' => '0'
        // );
        // $this->db->select('*');
        // $this->db->from('simpleuser');
        // $this->db->where($data);
        // $query = $this->db->get();
        // $array = $query->row_array();
        // var_dump($this->db->last_query());
        // var_dump($array);
        // return $array;
    }
    
    function traitementInscription($nom,$prenom,$email,$mdp){
        $login = "null";
        $etat = 0;
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mdp' => $mdp,
            'etat' => $etat
        );
        $this->db->insert('simpleuser',$data);
    }
    function updateEtatUser($id){
        $this->db->set('etat',1);
        $this->db->where('id',$id);
        $this->db->update('simpleuser');
    }
  
}
?>

