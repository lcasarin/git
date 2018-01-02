
 <?php

 require_once("config.php");
// Carrega um Usuário
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega uma lista de usuarios
// Quando um metodo e static é so chamar com o nome da classe e o nome da funcao
// $lista = Usuario::getList();
// echo json_encode($lista);

 // $sql = new Sql();
 // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
 // echo json_encode($usuarios);

 //Carrega uma lista de usuarios buscando pelo login
 // $search = Usuario::search("l");
 // echo json_encode($search);

 //Carrega um usuario usando o login e a senha
 $usuario = new Usuario();
 $usuario->login("lmarquezini", "x");
 echo $usuario;
 ?>
