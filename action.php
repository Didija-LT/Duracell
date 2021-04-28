<?php

//action.php

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['ref'] == $_POST["ref"])
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['quantite'] = $_SESSION["shopping_cart"][$keys]['quantite'] + $_POST["quantite"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'ref'               =>     $_POST["ref"],  
					'name'             =>     $_POST["name"],  
					'price'            =>     $_POST["price"],  
					'shipping'         =>    $_POST["shipping"],
					'quantite'         =>     $_POST["quantite"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'ref'               =>     $_POST["ref"],  
				'name'             =>     $_POST["name"],  
				'price'            =>     $_POST["price"],  
				'shipping'         =>     $_POST["shipping"],
				'quantite'         =>     $_POST["quantite"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["ref"] == $_POST["ref"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
	}
}

?>