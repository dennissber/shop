<?php
if(isset($id)) {
	switch ($_GET[r]) {
		case 'product':
			include 'files/product.php';
			break;
		
		default:
			include 'files/products.php';
			break;
	}
}

