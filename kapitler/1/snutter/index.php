<?php
include '../../../inc/functions.php';
$title = "Snutter";
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
				<li><a href="hestehov.php"><img src="<?php theRoot($depth); ?>media/img/NAT8599_hestehov_m_iskrystaller_eirikhanssen.jpg" alt=""/><span>Hestehov</span></a></li>
				<li><a href="krokus.php"><img src="<?php theRoot($depth); ?>media/img/NAT8841_krokus_bla_naerbilde_eirik.jpg" alt=""><span>Krokus</span></a></li>
				<li><a href="bokfink.php"><img src="<?php theRoot($depth); ?>media/img/639px-Chaffinch_RWD2.jpg" alt=""><span>Bokfink</span></a></li>
				<li><a href="selje.php"><img src="<?php theRoot($depth); ?>media/img/NAT8667_to_gåsunger.jpg" alt="gåsunger"><span>Selje</span></a></li>
			</ul>

			<!-- content end -->
           </div><!-- .col -->
        </div><!-- div.row -->

	</div><!-- .col-->

	<div class="col-xd-2 col-xs-2">
		<?php theChapterMenu(0); ?>
	</div><!-- .col-xd-4  -->
</div><!-- .row -->


<?php theFooter($depth); ?>