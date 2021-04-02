<?php 

	require_once("config.php");
/*	

	// Listando um usuário da tabela db  
	
	$root = new Usuario();
	$root->loadByid(15);
	
	echo $root;
*/
	
/*
	// Lista usuarios da tabela db  
	
	$lista = Usuario::getList();
	
	print_r($lista);
	//echo $lista; 
	
*/

/*
	// Lista por pesquisa de login 

	$search = Usuario::search("Cl");

	print_r($search);

*/

/*
	// Lista usuarios autenticado 
	
	$usuario = new Usuario();
	$usuario->login("Clien1","UUhh555457$$#DD");
	
	echo $usuario;
	
*/

/*

	// Iserindo usuario e informando seus dados.
	
	$aluno = new Usuario();
	$aluno->setDeslogin("Watney");
	$aluno->setDesenha("123");

	$aluno->insert();

	echo $aluno;
	
*/

/*
	// Inserindo Usando método construtor.
		
	$aluno = new Usuario("user18","@3rsss");

	$aluno->insert();

	echo $aluno;

*/

/*
	// Editando campos da tabela e informando na tela.
	
	$usuario = new Usuario();
	$usuario->loadByid(16);
	$usuario->update("user16","161616");

	echo $usuario;
*/

	// Remove usuário da tabela.
	
	$cliente = new Usuario();
	$cliente->loadByid(18);
	$cliente->remover();
	
	echo $cliente;
	
*/
/*
	
	$sql = new Sql();
	
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	
	echo json_encode($usuarios);
	
*/	

/*		
	$user = new Usuario();
	
	$user->loadId(13);
	
	echo $user;
*/	

/*

	$result = Usuario::searche("wa");

	echo json_encode($result);
*/

/*
	$autenticar = new Usuario();
	$autenticar->login("Watney","123");
	
	echo $autenticar;
*/	

/*
	$list = Usuario::getList();

	echo json_encode($list);
*/	




?>


























