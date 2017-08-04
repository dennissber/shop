<?php require_once '/html/function.php';
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html>
<html lang="en">
 	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="/css/style.css">
		<div class="conteiner">
				<div class="row">
					<div class="col-md-4">
						<div class="logo">
							<img src="">
						</div>
					</div>
						<div class="col-md-5">
							<div class="menu">
								<? viewMenu($pages) ?>
							</div>
						</div>
						<div class="col-md-3"></div>
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