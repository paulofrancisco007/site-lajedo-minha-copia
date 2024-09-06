<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
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
         $data['acindex'] = 'active';
         $data['acvisitar'] = '';
         $data['acsitio'] = '';
         $data['acmuseu'] = '';
         $data['acfals'] = '';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = '';
         $data['pag'] = 'index';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');

         $data['titulocarrossel'] = $this->lang->line('titulocarrossel');
         $data['carrosseltituloum'] = $this->lang->line('carrosseltituloum');
         $data['carrosseltitulodois'] = $this->lang->line('carrosseltitulodois');
         $data['carrosseltitulotres'] = $this->lang->line('carrosseltitulotres');

         $data['textolajedo'] = $this->lang->line('textolajedo');
         $data['titulomuseulaje'] = $this->lang->line('titulomuseulaje');
         $data['textomuseulaje'] = $this->lang->line('textomuseulaje');
         $data['titulofalslaje'] = $this->lang->line('titulofalslaje');
         $data['textofalslaje'] = $this->lang->line('textofalslaje');
         $data['saibamais'] = $this->lang->line('saibamais');

         $data['nomedalingua'] = $lang;
		 
         
         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('index', $data);
         $this->load->view('includes/footer', $data);
      }

      public function visitar($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = 'active';
         $data['acsitio'] = '';
         $data['acmuseu'] = '';
         $data['acfals'] = '';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = '';
         $data['pag'] = 'visitar';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');
         
         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');


         $data['locvisitar1'] = $this->lang->line('locvisitar1');
         $data['locvisitar2'] = $this->lang->line('locvisitar2');
         $data['titulovisitar'] = $this->lang->line('titulovisitar');
         $data['titulofuncio'] = $this->lang->line('titulofuncio');
         $data['textofuncio1'] = $this->lang->line('textofuncio1');
         $data['textofuncio2'] = $this->lang->line('textofuncio2');
         $data['titulopreco'] = $this->lang->line('titulopreco');
         $data['textopreco1'] = $this->lang->line('textopreco1');
         $data['textopreco2'] = $this->lang->line('textopreco2');
         $data['textopreco3'] = $this->lang->line('textopreco3');
         $data['textopreco4'] = $this->lang->line('textopreco4');
         $data['textopreco5'] = $this->lang->line('textopreco5');
         $data['textopreco6'] = $this->lang->line('textopreco6');
         $data['tituloorientacao'] = $this->lang->line('tituloorientacao');
         $data['textoorientacao1'] = $this->lang->line('textoorientacao1');
         $data['textoorientacao2'] = $this->lang->line('textoorientacao2');
         $data['titulolocali'] = $this->lang->line('titulolocali');
         $data['textolocali1'] = $this->lang->line('textolocali1');
         $data['textolocali2'] = $this->lang->line('textolocali2');

         $data['nomedalingua'] = $lang;

         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('visitar', $data);
         $this->load->view('includes/footer', $data);
      }

      public function sitio($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = '';
         $data['acsitio'] = 'active';
         $data['acmuseu'] = '';
         $data['acfals'] = '';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = '';
         $data['pag'] = 'sitio';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');

         $data['locsitio1'] = $this->lang->line('locsitio1');
         $data['locsitio2'] = $this->lang->line('locsitio2');
         $data['titulositio'] = $this->lang->line('titulositio');
         $data['titulosobresitio'] = $this->lang->line('titulosobresitio');
         $data['textosobresitio1'] = $this->lang->line('textosobresitio1');
         $data['textosobresitio2'] = $this->lang->line('textosobresitio2');
         $data['textosobresitio3'] = $this->lang->line('textosobresitio3');
         $data['textosobresitio4'] = $this->lang->line('textosobresitio4');
         $data['titulomapa'] = $this->lang->line('titulomapa');
         $data['textomapa1'] = $this->lang->line('textomapa1');
         $data['textomapa2'] = $this->lang->line('textomapa2');
         $data['textomapa3'] = $this->lang->line('textomapa3');
         $data['textomapa4'] = $this->lang->line('textomapa4');
         $data['textomapa5'] = $this->lang->line('textomapa5');
         $data['textomapa6'] = $this->lang->line('textomapa6');
         $data['textomapa7'] = $this->lang->line('textomapa7');
         $data['textomapa8'] = $this->lang->line('textomapa8');
         $data['titulogaleria'] = $this->lang->line('titulogaleria');
         $data['itemgaleria1'] = $this->lang->line('itemgaleria1');
         $data['itemgaleria2'] = $this->lang->line('itemgaleria2');
         $data['itemgaleria3'] = $this->lang->line('itemgaleria3');
         $data['itemgaleria4'] = $this->lang->line('itemgaleria4');
         $data['itemgaleria5'] = $this->lang->line('itemgaleria5');
         $data['itemgaleria6'] = $this->lang->line('itemgaleria6');
         $data['itemgaleria7'] = $this->lang->line('itemgaleria7');
         $data['itemgaleria8'] = $this->lang->line('itemgaleria8');
         $data['itemgaleria9'] = $this->lang->line('itemgaleria9');

         $data['nomedalingua'] = $lang;

         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('sitio', $data);
         $this->load->view('includes/footer', $data);
      }

      public function museu($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = '';
         $data['acsitio'] = '';
         $data['acmuseu'] = 'active';
         $data['acfals'] = '';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = '';
         $data['pag'] = 'museu';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');
         
         $data['locmuseu1'] = $this->lang->line('locmuseu1');
         $data['locmuseu2'] = $this->lang->line('locmuseu2');
         $data['titulomuseu'] = $this->lang->line('titulomuseu');
         $data['titulosobremuseu'] = $this->lang->line('titulosobremuseu');
         $data['textosobremuseu1'] = $this->lang->line('textosobremuseu1');
         $data['textosobremuseu2'] = $this->lang->line('textosobremuseu2');
         $data['textosobremuseu3'] = $this->lang->line('textosobremuseu3');
         $data['textosobremuseu4'] = $this->lang->line('textosobremuseu4');
         $data['tituloacervo'] = $this->lang->line('tituloacervo');
         $data['itemacervo1'] = $this->lang->line('itemacervo1');
         $data['itemacervo2'] = $this->lang->line('itemacervo2');
         $data['itemacervo3'] = $this->lang->line('itemacervo3');
         $data['itemacervo4'] = $this->lang->line('itemacervo4');
         $data['itemacervo5'] = $this->lang->line('itemacervo5');
         $data['itemacervo6'] = $this->lang->line('itemacervo6');
         $data['itemacervo7'] = $this->lang->line('itemacervo7');
         $data['itemacervo8'] = $this->lang->line('itemacervo8');
         $data['itemacervo9'] = $this->lang->line('itemacervo9');

         $data['nomedalingua'] = $lang;
       
         
         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('museu', $data);
         $this->load->view('includes/footer', $data);
      }
  
      public function fals($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = '';
         $data['acsitio'] = '';
         $data['acmuseu'] = '';
         $data['acfals'] = 'active';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = '';
         $data['pag'] = 'fals';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');

         $data['locfals1'] = $this->lang->line('locfals1');
         $data['titulofals'] = $this->lang->line('titulofals');
         $data['titulosobrefals'] = $this->lang->line('titulosobrefals');
         $data['textosobrefals1'] = $this->lang->line('textosobrefals1');
         $data['textosobrefals2'] = $this->lang->line('textosobrefals2');
         $data['textosobrefals3'] = $this->lang->line('textosobrefals3');
         $data['textosobrefals4'] = $this->lang->line('textosobrefals4');
         $data['tituloguia'] = $this->lang->line('tituloguia');
         $data['titulodiretoria'] = $this->lang->line('titulodiretoria');
         $data['nomedalingua'] = $lang;

         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('fals', $data);
         $this->load->view('includes/footer', $data);
      }

      public function turismo($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = '';
         $data['acsitio'] = '';
         $data['acmuseu'] = '';
         $data['acfals'] = '';
         $data['acturismo'] = 'active';
         $data['acpublicacoes'] = '';
         $data['pag'] = 'turismo';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');

         $data['locturismo1'] = $this->lang->line('locturismo1');
         $data['locturismo2'] = $this->lang->line('locturismo2');
         $data['tituloturismo'] = $this->lang->line('tituloturismo');
         $data['textoturismo'] = $this->lang->line('textoturismo');


         $data['nomedalingua'] = $lang;

         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('turismo', $data);
         $this->load->view('includes/footer', $data);
      }
      public function pesquisas($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = '';
         $data['acsitio'] = '';
         $data['acmuseu'] = '';
         $data['acfals'] = '';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = 'active';
         $data['pag'] = 'publicacoes';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');

         $data['locpesquisa1'] = $this->lang->line('locpesquisa1');
         $data['locpesquisa2'] = $this->lang->line('locpesquisa2');
         $data['titulopesquisa'] = $this->lang->line('titulopesquisa');
         $data['textopesquisa'] = $this->lang->line('textopesquisa');


         $data['nomedalingua'] = $lang;

         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('pesquisas', $data);
         $this->load->view('includes/footer', $data);
      }

      public function parcerias($lang="portugues"){
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
         $data['acindex'] = '';
         $data['acvisitar'] = '';
         $data['acsitio'] = '';
         $data['acmuseu'] = '';
         $data['acfals'] = '';
         $data['acturismo'] = '';
         $data['acpublicacoes'] = 'active';
         $data['pag'] = 'publicacoes';

         $data['home'] = $this->lang->line('home');
         $data['visitar'] = $this->lang->line('visitar');
         $data['sitio'] = $this->lang->line('sitio');
         $data['museu'] = $this->lang->line('museu');
         $data['turismo'] = $this->lang->line('turismo');
         $data['pesquisas'] = $this->lang->line('pesquisas');

         $data['titulofooter1'] = $this->lang->line('titulofooter1');
         $data['textofooter1'] = $this->lang->line('textofooter1');
         $data['telefonefooter'] = $this->lang->line('telefonefooter');
         $data['emailfooter'] = $this->lang->line('emailfooter');
         $data['instagramfooter'] = $this->lang->line('instagramfooter');
         $data['textofinalfooter'] = $this->lang->line('textofinalfooter');

         $data['locparcerias1'] = $this->lang->line('locparcerias1');
         $data['locparcerias2'] = $this->lang->line('locparcerias2');
         $data['tituloparcerias'] = $this->lang->line('tituloparcerias');
         $data['textoparcerias'] = $this->lang->line('textoparcerias');
         $data['textohotellajedo'] = $this->lang->line('textohotellajedo');
         $data['textoifrn'] = $this->lang->line('textoifrn');
         $data['textohotelchapadao'] = $this->lang->line('textohotelchapadao');
         $data['textochurrascariadoboi'] = $this->lang->line('textochurrascariadoboi');


         $data['nomedalingua'] = $lang;

         //carrega a view e manda o vetor com as msgs
         $this->load->view('includes/header', $data);
         $this->load->view('parcerias', $data);
         $this->load->view('includes/footer', $data);
      }
}
