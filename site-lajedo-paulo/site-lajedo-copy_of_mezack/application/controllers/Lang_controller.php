<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lang_controller extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url_helper'); 
        
   }
	//só usamos a função index
	 public function index($lang="portugues"){
         //Load form helper
         $data['language'] = 'portugues'; //data é um vetor que contem as infos que vamos usar na página
         $this->lang->load('portugues_lang','portugues'); // carregando português como padrão
         
         if(isset($lang)){ 
            $data['language'] = $lang;//data recebendo o valor da linguagem
            if($lang == "english"){ //comparação pra saber se é ingles
               $this->lang->load('english_lang','english'); //Carrega o arquivo que contém as mensagens em ingles
               // o arquivo é /aplication/language/english
            }else{
               if($lang == "espanol"){//comparação pra saber se é espanhol
                  $this->lang->load('espanol_lang','espanol');//Carrega o arquivo que contém as msg em espanhol
               // o arquivo é /aplication/language/espanol
               }else{//se não for nenhum carrega português
                  $this->lang->load('portugues_lang','portugues');//Carrega o arquivo que contém as msg em pt
               // o arquivo é /aplication/language/portugues
               }
            }  
         }else{
            $data['language'] = 'portugues';
            $this->lang->load('portugues_lang','portugues');
         }
         
         //Fetch the message from language file.
         $data['msg'] = $this->lang->line('msg'); //carrega para o vetor data os valores de cada msg usada na pag
         $data['titulo'] = $this->lang->line('titulo');
         $data['painel'] = $this->lang->line('painel');
         $data['vez'] = $this->lang->line('vez');
		 
         
         //carrega a view e manda o vetor com as msgs
         $this->load->view('jogo', $data);
      }
}
