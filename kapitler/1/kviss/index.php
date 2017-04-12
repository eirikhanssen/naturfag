<?php
include '../../../inc/functions.php';
$title = "Kviss";
$depth = 3;
$h1 = $title;
$pageClass = "snutter kap-1";
?>
<?php theHeader($depth, $title, $h1, $pageClass); ?>

<div class="row">
	<div class="col-xd-10 col-xs-10">

    	<div class="row">

    		<div class="col-xs-10">
    		<!-- content begin -->
   
			<ul class="thumblinks">
				<li><a href="natur.php"><img alt="natur-kviss" src="<?php theRoot($depth); ?>media/svg/q.svg"><span>Natur-kviss</span></a></li>
				<li><a href="fortelling.php"><img alt="fortelling-kviss" src="<?php theRoot($depth); ?>media/svg/q.svg"><span>Fortelling-kviss</span></a></li>
			</ul>

			<!-- content end -->
           </div><!-- .col -->
        </div><!-- div.row -->

	</div><!-- .col-->

	<div class="col-xd-2 col-xs-2">
		<?php theChapterMenu($depth); ?>
	</div><!-- .col-xd-4  -->
</div><!-- .row -->


<?php theFooter($depth); ?>












                