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
        return $list;
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
    function insertContenue($idCat,$titre,$description,$photo){
        if($idCat =! null){
            $data = array(
                'idCategorie' =>   $idCat,
                'titre' => $titre,
                'description' => $description,
                'photo' => $photo
            );
            $this->db->insert('contenue',$data);
        }
        else{
            $idCat = 1;
            $data = array(
                'idCategorie' =>   $idCat,
                'titre' => $titre,
                'description' => $description,
                'photo' => $photo
            );
            $this->db->insert('contenue',$data);
        }
        
    }
    function updateEtatUser($id){
        $this->db->set('etat',1);
        $this->db->where('id',$id);
        $this->db->update('simpleuser');
    }
    function listeCategorie (){
        $req = "select * from categorie";
        $query = $this->db->query($req);
        foreach ($query->result_array() as $row ){
            $list[] = $row;
        }
        return $list;
    }
    function listeContenue(){
        $req = "select * from contenue";
        $query = $this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
    function listeContenueTitre($titre){
        $req = "select * from contenue where url='".$titre."'";
        // var_dump($req);
        $query = $this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list[0];
    }
    function listeCommentaire(){
        $req = "select * from commentaire";
        $query = $this->db->query($req);
        $list = array();
        foreach ($query->result_array() as $row){
            $list[] = $row;
        }
        return $list;
    }
  
}
?>

