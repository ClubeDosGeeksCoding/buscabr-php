# buscabr-php
O buscaBR foi proposto por Fred Jorge em 2007, melhorado por Marcos Rodrigues em 2010 e por Gabriel Sobrinho em 2011. Apesar da complexidade do idioma português o buscaBR conta com regras simples, e pode ser facilmente implementado em qualquer linguagem. <a href="http://clubedosgeeks.com.br/artigos/busca-fonetica-com-javascript-e-buscabr" target="_blank">Leia mais.</a> E esta biblioteca serve para facilitar o uso do algoritmo.

## Instalação
1 - Faça download da biblioteca <a href="https://github.com/ClubeDosGeeksCoding/buscabr-php/archive/master.zip">Aqui</a>;
2 - Extraia os arquivos para o diretório do seu projeto;
3 - Requisite o arquivo da biblioteca e a use da saguinte maneira:
```php
  require_once('buscabr-php/BuscaBR.class.php');
  //Usando lib
  echo BuscaBR::encode("Clube dos Geeks"); //CRB D JK
```

## Teste
Este algoritmo também foi implementado em <a href="https://github.com/jayralencar/buscaBR.js" target="_blank">JavasScript</a>. E você pode testa-la <a href="http://clubedosgeeks.com.br/buscabr/" target="_blank">AQUI</a>

## Aplicações reais
Você pode usar este algoritmo em cadastros de pessoas por exemplo, para indexar os registros e facilitar a pesquisa. Digamos que no banco de dados da sua aplicação tenha uma pessoa cadastrada com o nome <strong>Walter</strong>, mas o usuário esteja digitando <strong>Valter</strong>, que têm escrita diferente, mas pronuncia fonética igual. Será mais fácil de encontrar se o dado estiver indexado fonéticamente.

## Desenvolvedores
<a href="//jayralencar.com.br" target="_blank"><img height="150" src="http://jayralencar.com.br/wp-content/uploads/2015/04/logo_pequeno.fw_.png" ></a>
<a href="//clubedosgeeks.com.br" target="_blank"><img height="150" src="http://clubedosgeeks.com.br/wp-content/uploads/2015/10/cdg_black.png"></a>
