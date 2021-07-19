<?php 
    //Modelo Query URL para controle de rotas.
    class Core{
        public function start($urlGet)
        {
            if(isset($urlGet['pagina']) and $urlGet['pagina'] == 'sobre'){          
                $controller = ucfirst($urlGet['pagina'].'Controller');
                echo ' Exemplo de controle do tipo sobre<br>';
            } else if($urlGet['pagina'] == 'servico'){
                echo '  Exemplo de controle do tipo servico<br>';
            } else {
                $controller = 'HomeController';
            }

            $acao = 'index';

            if(!class_exists($controller))
            {
                $controller = 'ErroController';
                var_dump($urlGet);
            }

            // callback para criar um objeto, chamando um método.
            call_user_func_array(array(new $controller, $acao), array());

        }
    }