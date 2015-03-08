<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Clientespf extends MY_Controller
{
    public function index()
    {
        $dados = array(
            'titulo' => 'Título',
            'conteudo' => 'clientespf_view',
        );
        
        $this->load->view('layout', $dados);
    }
}