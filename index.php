<?php

// AULA 1
// header('Content-type: image/jpg');
// readfile('img.jpg');
// die();

// AULA 2
// comportamento da variavel estatica dentro de uma funcao

// AULA 3
// controle do buffer
// ob_start();
// ob_end_flush();
// ob_end_clean();

// AULA 4
// variavel de variavel
// ler da direita para a esquerda

// $Bar = "a";
// $Foo = "Bar";
// $World = "Foo";
// $Hello = "World";
// $a = "Hello";

// echo $a;
// echo '<br />';
// echo $$a;
// echo '<br />';
// echo $$$a;
// echo '<br />';
// echo $$$$a;
// echo '<br />';
// echo $$$$$a;

// AULA 5
// recursividade
// como foi definida uma variavel estatica é possivel definir quantas vezes vai chamar a funcao em vez de infinito

// function testes()
// {
//     static $i = 0;
//     echo 'chamando a funcao';
//     $i++;
//     if ($i < 3) {
//         testes();
//     }
// }

// testes();

// AULA 6
// funcao dentro de variavel e dentro de outra funcao

// function one()
// {
//     $func = function () {
//         echo 'Ola Mundo';
//     };
//     $func();
// }

// $funcao = 'one';
// call_user_func($funcao);

// se essa variavel for uma funcao
// if (is_callable($func)) {
//     echo 'Ola mundo';
// }

// AULA 7
// instanceof

// class A
// {
// }
// class B
// {
// }

// $a = new A;
// $b = new B;

// if ($a instanceof A) {
//     echo 'A variavel "a" faz referência a classe A';
// }

// AULA 8
// regex - expressões regulares
// verificando partes de uma string
// verificando parametros de um input com cpf

// $teste = "Gabriel";

// if (preg_match('/el/', $teste)) {
//     echo 'encontrado';
// }

// preg_match('/(.*?)bri(.*)/', $teste, $retorno);
// print_r($retorno[0]);

// function cpfValido($cpf)
// {
//     $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
//     return preg_match($expressao, $cpf);
// }

// if (isset($_POST['acao'])) {
//     $cpf = $_POST['cpf'];

//     if (cpfValido($cpf)) {
//         echo 'o cpf é válido!';
//     } else {
//         echo 'o cpf não é válido!';
//     }
// }

// ? >

// <form method="post">
// <input type="text" name="cpf">
// <input name="acao" type="submit" />
// </form>

// AULA 9
// regex - expressões regulares no html

// $str = '<div class="teste">
// <h2>Olá mundo!<h2/>
// </div><div class="teste2"><h2>outra frase</h2></div>';

// preg_match_all('/<div class="(.*?)">(.*?)<\/div>/s', $str, $matches);

// echo htmlentities($matches[2][1]);

// $str = 'Gui
// ok';

// o i cancela o case sensitive
// o si é pra habilitar o case sensitive
// \r\n permitir quebra de linha
// duas barras é pra dizer que não é um caractér do pregmatch

// if (preg_match('/gui\\r\\nok/si', $str)) {
//     echo 'ok';
// }

// DATA E HORA AVANÇADOS

// $date = DateTime::createFromFormat('d/m/Y', '25/05/1993');
// echo $date->format('Y-m-d');

// date_default_timezone_set('America/Sao_Paulo');
// echo date('d/m/Y H:i:s', strtotime('1993-05-25 19:00:00'));
// echo date('d/m/Y H:i:s', time() + 60 * 60 * 24);

// OPERADOR TERNÁRIO

// ? se
// : senão

// $nome = "Gabriel";
// $mensagem = 'Olá ' . ($nome == 'Gabriel' ? $nome : 'Visitante');

// echo $mensagem;

// $postRequest = (isset($_POST['algo']) ? $_POST['algo'] : 'não existe post');

// echo $postRequest;

// BITWISE

// https://www.w3resource.com/php/operators/bitwise-operators.php

// pode ser usado dentro do echo (dificilmente ira usar)

// $x = 13;
// $y = 22;
// echo $x & $y;

// CACHE
// serve para recuperar mais rapidamente uma informação do servidor sem fazer uma nova requisição

// include('Cache.php');
// $cache = new Cache;
// echo $cache->readCache()->conteudo;

// CAST
// é nada mais que um parse

// $numero = (string)'19';
// var_dump($numero);
// echo '</br>';
// $numero = intval('19');
// var_dump($numero);

// VARIAVEIS EXTERNAS
// para usar voce precisa definir uma funcao como uma variavel

// $nome1 = "Gabriel";
// $nome2 = "Guilherme";

// $teste = function () use ($nome1, $nome2) {
//     echo $nome1;
//     echo '<br/>';
//     echo $nome2;
// };

// $teste();

// VARIAVEIS GLOBAIS

// $nome = "Guilherme";

// class teste
// {
//     function __construct()
//     {
//         global $nome;
//         echo $nome;
//     }
// }

// new teste();

// VARIAVEIS COMO REFERENCIA

// $nome = "Guilherme";
// function teste(&$nome)
// {
//     $nome = "João";
// }

// teste($nome);
// echo $nome;

// AQUI TORNAMOS AS VARIAVEIS REFERENTES COM &, 
// QUANDO ALTERARMOS O VALOR DE UMA VARIAVEL O VALOR SERÁ TAMBEM ATRIBUIDO A OUTRA REFERENTE

// $nome = "Gabriel";

// $teste = &$nome;

// $teste = "João";
// $nome = "Felipe";

// echo $teste;

// VARIAVEIS EXTERNAS COMO REFERENCIA

// class Classe1
// {
//     public function index()
//     {
//         echo 'chamando a classe1';
//     }
// }

// class Classe2
// {
//     public function index()
//     {
//         echo 'chamando a classe2';
//     }

//     public function callback($func)
//     {
//         $func();
//     }
// }

// $class1 = new Classe1();
// $class2 = new Classe2();

// $class2->callback(function () use ($class1) {
//     $class1->index();
// });

// MULTIPLAS VARIAVEIS EM UMA LINHA

// $n1 = $n2 = $n3 = function () {
//     echo 'oi';
// };

// $n1();

// TEMPLATES

// include('Template.php');
// $template = new template();
// $template->render(['titulo' => 'meu titulo', 'nome' => 'Gabriel', 'idade' => 28], 'sobre.phtml');

// INI SET

// para personalizar o tempo de execução
// ini_set('max_execution_time', 0);
// para personalizar o limite de memoria
// ini_set('memory_limit', '-1');

// ARRAY EM CONSTANTES

// define('DADOS', array('host' => 'localhost', 'dbname' => 'devweb', 'user' => 'root', 'password' => '909090'));
// print_r(DADOS);

// CLASSES ANONIMAS
// é criado uma classe temporaria dentro dos parametros

// class Utils
// {
//     public function printMsg($msg)
//     {
//         $msg->showMsg();
//     }
// }

// $utils = new Utils();
// $utils->printMsg(new class
// {
//     public function showMsg()
//     {
//         echo 'Olá Mundo!';
//     }
// });

// LOGS
// date_default_timezone_set('America/Sao_Paulo');
// $nome = 'Gabe';
// if ($nome == 'Gabe') {
//     echo 'log criado com sucesso!';
//     error_log(date('d/m/Y H:i:s') . ' Não é isso que eu quero!' . "\n", 3, 'meuarquivodelog');
// }


// SPACESHIP OPERATOR

// function teste()
// {
//     $um = 8 <=> 7;
//     $dois = 'a' <=> 'z';
//     return $um . '<br/>' . $dois;
// }

// echo teste();

// CLOSURE 
// is_callable é usado para verificar se uma variavel é uma funcao
// instanceof é para saber se essa variavel é uma estancia de uma funcao callback(closure)
// o bindTo é um metodo da classe Closure que serve para trazer..

// class Ola
// {
//     public function sendMessage($n)
//     {
//         if ($n instanceof Closure) {
//             $n = $n->bindTo($this);
//             $n();
//         }
//     }

//     public function algo()
//     {
//         echo 'Estou chamando algo!';
//     }
// }

// $teste = new Ola;
// $teste->sendMessage(function () {
//     $this->algo();
// });

// OP LOGICOS
// voce pode usar o and em vez do && e etc, or em vez de || e etc
// https://www.php.net/manual/pt_BR/language.operators.logical.php

// NULL COALESCE OPERATOR

// $valor = null ?? 'era verdade';
// echo $valor;

// Nullable Types

// function Teste(): ?string
// {
//     return 9;
// }

// var_dump(Teste());
