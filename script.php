<?php

$connect = mysqli_connect("localhost", "root", "", "boutique");
$filename = "products.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);

foreach ($array as $rows) {

  foreach ($rows["category"] as $value) {
    $sqlcat = " INSERT INTO category (id_ctg,name)  VALUES ( '" . $value["id"] . "', '" . $value["name"] . "') ";
  }

  mysqli_query($connect, $sqlcat);
}
$array = json_decode($data, true);
foreach ($array as $rows) {
  $sql = " INSERT INTO products (ref,name,type,price,shipping,descreption,manufac,imgLnk) VALUES 
      ( '"
    . $rows["ref"] . "','"
    . $rows["name"] . "', '"
    . $rows["type"] . "', '"
    . $rows["price"] . "', '"
    . $rows["shipping"] . "', '"
    . $rows["description"] . "','"
    . $rows["manufacturer"] . "','"
    . $rows["image"] . "') ";


  mysqli_query($connect, $sql);;
}
foreach ($array as $rows) {
  foreach ($rows["category"] as $value) {
    $sqlcat_prod = " INSERT INTO prod_catg(ref,id_cat) VALUES('" . $rows["ref"] . "','" . $value["id"] . "')";
  }
  mysqli_query($connect, $sqlcat_prod);
}

