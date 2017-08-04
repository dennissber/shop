<?php
if(isset($_GET['r'])) {
	switch ($_GET['r']) {
		case 'product':
			include 'product.php';
			break;
		case 'pages':
			include 'page.php';
			break;
		
		default:
			include 'products.php';
			break;
	}

} else {
	include 'products.php';
}

