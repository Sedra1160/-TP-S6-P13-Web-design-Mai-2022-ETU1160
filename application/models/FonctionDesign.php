<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class FonctionDesign extends CI_Model {

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
    function listeContenueCategorie($id){
        $data = array( 'idCategorie' => $id );
        $this->db->select('*');
        $this->db->from('contenue');
        $this->db->where($data);
        $query =  $this->db->get();
        $array = $query->row_array();
        return $array;
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

