<?php 
    //Modelo Query URL para controle de rotas.
    class Core{
        public function start($urlGet)
        {
            if(isset($urlGet['pagina'])){          
                $controller = ucfirst($urlGet['pagina'].'Controller');
            } else {
                $controller = 'HomeController';
            }

            $acao = 'index';

            if(!class_exists($controller))
            {
                $controller = 'ErroController';
            }

            // callback para criar um objeto, chamando um método.
            call_user_func_array(array(new $controller, $acao), array());



        }
    }