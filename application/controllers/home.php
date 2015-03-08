<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

   /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -  
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $dados = array(
            'titulo' => 'Título',
            'conteudo' => 'principal_view',
        );

        $this->load->view('layout', $dados);
    }



    public function logar()
    {
        $usuario = $this->input->post("usuario");
        $senha = sha1($this->input->post("senha"));
        //Código sha1  da senha 123456 7c4a8d09ca3762af61e59520943dc26494f8941b
        //O usuário no exemplo aqui será usuario@email.com.br
        //Mas em um projeto real, você trará isto do banco de dados.
        //Se o usuário e senha combinarem, então basta eu redirecionar para a url base, pois agora o usuário irá passa
        //pela verificação que checa se ele está logado.
        if ($usuario == "usuario@email.com.br" && $senha == '7c4a8d09ca3762af61e59520943dc26494f8941b')
        {
            $this->session->set_userdata("logado", 1);
            redirect(base_url());
        }
        else
        {
            //caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
            $dados['erro'] = "Usuário/Senha incorretos";
            $this->load->view("v_login", $dados);
        }
    }


    /*
        * Aqui eu destruo a variável logado na sessão e redireciono para a url base. Como esta variável não existe mais, o usuário
        * será direcionado novamente para a tela de login.
        */

    public function logout()
    {
       $this->session->unset_userdata("logado");
       redirect(base_url());
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */