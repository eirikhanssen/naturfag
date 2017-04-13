<?php
include '../../../inc/functions.php';
$title = "1 - Let og finn";
$depth = 3;
$h1 = $title;
$pageClass = "let-og-finn kap-1";
?>
<?php theHeader($depth, $title, $h1, $pageClass); ?>

<div class="row">
	<div class="col-xd-10 col-xs-10">

    <h2>Hvor mange ord finner du?</h2>

    <!--<ol>
        <li>romskip</li>
        <li>humle</li>
        <li>katt</li>
        <li>krokus</li>
        <li>selje</li>
        <li>bjørk</li>
        <li>Samir</li>
        <li>Jenny</li>
        <li>sukkererter</li>
    </ol>-->
    	<div class="row">
    	   <div class="col-xs-12 col-xd-12">
                <object type="image/svg+xml" data="<?php theRoot($depth); ?>media/interactive/oversiktsbilde-kapittel01.svg">
                    <p>Your browser does not support SVG</p>p>
                </object>
           </div><!-- .col -->
        </div><!-- div.row -->

	</div><!-- .col-->

	<div class="col-xd-2 col-xs-2">
		<?php theChapterMenu($depth); ?>
	</div><!-- .col-xd-4  -->
</div><!-- .row -->



<?php theFooter($depth); ?>