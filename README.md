# Login-Log
Projeto para processo seletivo

### Para que serve esse projeto? ###

* O projeto consiste em uma pequena tela de login que leva ao log de acessos dessa mesma tela de login.

### Como começar? ###

* Para começar, é preciso configurar o banco conforme previamente indicado.
* dbname = root;
* tabelas = usuario, log_acesso; (relacionadas através da chave estrangeira idusuario).

### Características ###

* Foi utilizado o framework bootstrap para confecção da interface.
* As validações e envios de formulário foram feitos através de jQuery.
* Foram feitos tratamentos de cadastro (usuário duplicado), de login (usuário inexistente, senha incorreta) 
e encriptação de senha md5.# Login-Log
