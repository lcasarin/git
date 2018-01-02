<?php
$images = scandir("images");
//var_dump($images);
$data = array();

foreach ($images as $img) {
  if (!in_array($img, array(".", "..")))
  {
$filename = "images" . DIRECTORY_SEPARATOR . $img;
$info = pathinfo($filename);
$info["size"] = filesize($filename);
$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
// no linux não precisa dessa funcao str_replace
$info["URL"] = "http://localhost/php7/DIR/".str_replace("\\", "/", $filename);
// var_dump($info);
//array_push e para inserir no Array
array_push($data, $info);
  }
}
echo json_encode($data);
?>
