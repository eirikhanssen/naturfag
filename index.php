<?php
include 'inc/functions.php';
$title = "Naturfag";
$depth = 0;
$h1 = $title;
$pageClass = "forside";
?>
<?php theHeader($depth, $title, $h1, $pageClass); ?>
<div class="row">
	<div class="col-xd-8 col-xs-12"></div>
	<div class="col-xd-4 col-xs-12">
		<ul class="nav nav-pills nav-stacked">
		    <li role="presentation" class="menu-kort"><a href="kapitler/1/kort">Kapittel 1</a></li>
		</ul>
	</div><!-- .col-xd-4  -->
</div>
<?php theFooter($depth); ?>