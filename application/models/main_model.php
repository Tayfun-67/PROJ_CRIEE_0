<?php
class Main_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

function insereAcheteur(){

  $this->load->database();

    $login=$this->input->post('login');
    $pwd=$this->input->post('pwd');
    $raisonSocialEntreprise=$this->input->post('raisonSocialEntreprise');
    $numRueAcheteur=$this->input->post('numRueAcheteur');
    $RueAcheteur=$this->input->post('RueAcheteur');
    $CPAcheteur=$this->input->post('CPAcheteur');
    $VilleAcheteur=$this->input->post('VilleAcheteur');
    $numHabitation=$this->input->post('numHabitation');
    $id = array(
            'login'=>$login,
            'pwd' => $pwd,
            'raisonSocialEntreprise' => $raisonSocialEntreprise,
            'numRueAcheteur' => $numRueAcheteur,
            'RueAcheteur' =>$RueAcheteur,
            'CPAcheteur' =>$CPAcheteur,
            'VilleAcheteur' =>$VilleAcheteur,
            'numHabitation' =>$numHabitation
    );
    $this->db->set($id);
    $this->db->insert('ACHETEUR',$id);

}


}
?>
