<?php
$name = "images";
if (!is_dir($name))
{
  //cria diretório
  mkdir($name);
  echo "Diretório $name criado com sucesso!";
} else {
  // remove diretório
  rmdir($name);
  echo "Já existe o diretório: $name foi removido!";
}
?>
