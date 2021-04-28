<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-1.11.1.js"></script>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet " href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/209f8ed90c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.min.js"></script>
    <title>panier</title>
</head>
<body>
  <div class="menu fixed">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Duracell</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Accueil <span class="sr-only"></span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="inscriver" href="inscription.php">inscrivez-vous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" connexion.php ">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="panier.php">Voir votre panier</a>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;

echo $output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th >Name</th>  
            <th >Quantity</th>  
            <th >Price</th>  
		      	<th >shipping</th> 
            <th >Total</th>  
            <th >Action</th>  
        </tr>
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
	 	echo $output .= '
		<tr>
			<td>'.$values["name"].'</td>
			<td>'.number_format($values["quantite"]).'</td>
			<td align="right">$ '.$values["price"].'</td>
			<td align="right">$'.$values["shipping"] .'</td>
			<td align="right">$ '.$values["quantity"] * $values["price"].'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["ref"].'">Remove</button></td>
		</tr>
		';
		$total_price = $total_price + (($values["quantity"]) * $values["price"]) + $values["shipping"];
		$total_item = $total_item + 1;
	}
 	echo $output .= '
	<tr>  
        <td colspan="4" align="right">Total</td> 
		
        <td align="right" >$ '.number_format($total_price, 2).'</td>  
         
    </tr>
	';
}
else
{
 	echo $output .= '
    <tr>
    	<td colspan="5" align="center">
    		votre panier est vide!
    	</td>
    </tr>
    ';
}
  echo $output .= '</table></div>';
  $data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'dh' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);


?>

   <div class="link-social" align="center"><span>SUIVEZ-NOUS</span>
    <ul class="liste-inline">
      <li>
        <a href="https://twitter.com/LTinass" target="_blank">
      <i class="fab fa-twitter"></i>
       </li>
       <li>
      <a href="https://www.facebook.com/profile.php?id=100004948273726" target="_blank">
         <i class="fab fa-facebook"></i>
        </a>
       </li>
       <li>
       <a href="https://www.instagram.com/lallajassmine/?hl=fr"   target="_blank">
       <i class="fab fa-instagram"></i>
         </a>
         </li>
    
    </ul>
    </div>


   

  

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="jquery-3.6.0.js"> </script>
 
    
   
</body>
</html>