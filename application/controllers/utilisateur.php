<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {


	public function contenu($id)
	{
		$this->load->helper('url_helper');
		$this->load->view('v_entete');
		$this->load->view('v_onglets');

		switch ($id) {
		  case 'accueil':
		    $this->load->view('v_accueil');
		    break;
		    case 'client':
		      $this->load->view('v_client');
					$this->load->view('v_avis');
		      break;
				case 'inscription':
 					$this->load->view('v_inscription');
			     break;
           case 'inscription2':
   					$this->load->model('main_model');
   			    $this->main_model->insereAcheteur($id);
   			     break;
				case 'connexion':
 				   $this->load->view('v_connexion');
 				   break;

					

		}



		//$this->load->view('');

		$this->load->view('v_footer');
	}
/*
	function InsertionClient($id) {
			$this->load->model('main_model');
	    $this->main_model->insereAcheteur($id);
	    $this->load->view('v_contact');
	}

*/

	public function index()
	{
		$this->load->helper('url_helper');
		$this->load->view('v_entete');
		$this->load->view('v_onglets');
		$this->load->view('v_avis');
		$this->load->view('v_footer');
	}


}
