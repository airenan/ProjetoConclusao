<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'login';
	$conexao = new mysqli ($servidor,$usuario,$senha,$banco);
	if ($conexao -> connect_error){
		die ("Conexão deu ruim".$conexao -> connect_error);
	}