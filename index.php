<?php require_once 'html/function.php';
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html>
<html lang="en">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<div class="conteiner">
				<div class="row">
					<div class="col-md-12">
						<? viewMenu($pages) ?>
					</div>
				</div>
				<div class="row">
	<div class="col-md-3">
	<? $categori = makeTree($categories);
		viewCategories($categori);
	 ?>
	</div>
<div class="col-md-9"><? require_once 'html/content.php'; ?></div>
		</div>
		</div>

<footer></footer>
</html>