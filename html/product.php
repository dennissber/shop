<?php
include_once './data/products.php';
$id = $_GET['id'];
if (isset($id)) {
	foreach ($products as $key => $product) {
		if ($key==$id) {
			$tovar = $product;
			break;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
 	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

 	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<h1><? echo $tovar->name ?></h1>
  			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="/files/images/product.jpg" width="100%" height="100%">
			</div>
			<div class="col-md-4">
				
					<div><? echo $tovar->name ?></div>
					<div class="price">
                        <?php if(count($tovar->variants) > 1) :?>
                        	<label>Цена товара:</label>
                            <select name="variant">
                                <?foreach ($tovar->variants as $variant) :?>
                                    <option><?php echo $variant->name ?> <?php echo ceil($variant->price) ?> грн.</option>
                                <?php endforeach;?>
                            </select>
                        <?php else:?>
                            <span class="label label-info"><?php echo ceil($tovar->variant->price) ?> грн.</span>
                        <?php endif;?>
                    </div>
					<div>
						<label>Описание товара:</label><? echo $tovar->description; ?>
					</div>
			</div>
			<div class="col-md-4">
				<button>Купить</button>
			</div>
		</div>
	</div>




</html>