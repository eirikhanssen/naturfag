<?php
include '../../../inc/functions.php';
$title = "Kviss";
$depth = 3;
$h1 = $title;
$pageClass = "snutter kviss kap-1";
?>
<?php theHeader($depth, $title, $h1, $pageClass); ?>

<div class="row">
	<div class="col-xd-10 col-xs-10">

    	<div class="row">

    		<div class="col-xs-10">
    		<!-- content begin -->
   

	<form action="">
		<fieldset>
			
<section>
	<p class="q">Se på bildet av krokus og humla. Hva er det gule støvet?</p>
	<img src="http://verdalsbilder.no/cpg1410/albums/userpics/10004/Innsekt_-_bie_paa_krokus_i_april.JPG"/>
	<label for="hva_er_gule_støvet_maling">Maling<input type="radio" id="hva_er_gule_støvet_maling" name="hva_er_gule_støvet"></label>
	<label for="hva_er_gule_støvet_mel">Mel<input type="radio" id="hva_er_gule_støvet_mel" name="hva_er_gule_støvet"></label>
	<label for="hva_er_gule_støvet_pollen">Blomsterstøv (pollen)<input type="radio" id="hva_er_gule_støvet_pollen" name="hva_er_gule_støvet"></label>
</section>

<section>
	<p class="q">Hva er krokus?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="hva_er_krokus_lus">Lus<input type="radio" id="hva_er_krokus_lus" name="hva_er_krokus_lus"></label>
	<label for="hva_er_krokus_krokete_mann">Krokete mann<input type="radio" id="hva_er_krokus_krokete_mann" name="hva_er_krokus_krokete_mann"></label>
	<label for="hva_er_krokus_blomst">Blomst<input type="radio" id="hva_er_krokus_blomst" name="hva_er_krokus_blomst"></label>
</section>

<section>
	<p class="q">Hva er pollen?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/
	<label for="hva_er_pollen_støv">Støv fra hannblomster<input type="radio" id="hva_er_pollen_støv" name="hva_er_pollen_støv"></label>
	<label for="hva_er_pollen_politi">Politi<input type="radio" id="hva_er_pollen_politi" name="hva_er_pollen_politi"></label>
	<label for="hva_er_pollen_bor_i_polen">Noen som bor i Polen<input type="radio" id="hva_er_pollen_bor_i_polen" name="hva_er_pollen_bor_i_polen"></label>
</section>


<section>
	<p class="q">Hva er en gul hestehov?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/
	<label for="hva_er_en_gul_hestehov_hest">En hest<input type="radio" id="hva_er_en_gul_hestehov_hest" name="hva_er_en_gul_hestehov_hest"></label>
	<label for="hva_er_en_gul_hestehov_hode">Et hode<input type="radio" id="hva_er_en_gul_hestehov_hode" name="hva_er_en_gul_hestehov_hode"></label>
	<label for="hva_er_en_gul_hestehov_blomst">En gul blomst<input type="radio" id="hva_er_en_gul_hestehov_blomst" name="hva_er_en_gul_hestehov_blomst"></label>
</section>

<section>
	<p class="q">Selja har noe som humla liker. Hva er det?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/
	<label for="selja_liker_hår">Pent hår<input type="radio" id="selja_liker_hår" name="selja_liker_hår"></label>
	<label for="selja_liker_nektar_og_pollen">Nektar og pollen<input type="radio" id="selja_liker_nektar_og_pollen" name="selja_liker_nektar_og_pollen"></label>
	<label for="selja_liker_jaja">Den sier ja ja<input type="radio" id="selja_liker_jaja" name="selja_liker_jaja"></label>
</section>

<section>
	<p class="q">Hva er nektar?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/
	<label for="hva_er_nektar_saft">Søt saft som humla spiser<input type="radio" id="hva_er_nektar_saft" name="hva_er_nektar_saft"></label>
	<label for="hva_er_nektar_gutt">En gutt som nekter å spise is<input type="radio" id="hva_er_nektar_gutt" name="hva_er_nektar_gutt"></label>
	<label for="hva_er_nektar_avatar">En avatar<input type="radio" id="hva_er_nektar_avatar" name="hva_er_nektar_avatar"></label>
</section>

<section>
	<p class="q">Hva er dette?</p>
	<img src="<?php theRoot($depth); ?>media/img/NAT8667_to_gåsunger.jpg" alt="hårete og myk blomst">
	<label for="selje_hannblomst_hva_er_dette_godteri">Godteri for Jenny og Samir<input type="radio" id="selje_hannblomst_hva_er_dette_godteri" name="selje_hannblomst_hva_er_dette_godteri"></label>
	<label for="selje_hannblomst_hva_er_dette_kost">En kost å feie med<input type="radio" id="selje_hannblomst_hva_er_dette_kost" name="selje_hannblomst_hva_er_dette_kost"></label>
	<label for="selje_hannblomst_hva_er_dette_hannblomst">En hannblomst fra selja<input type="radio" id="selje_hannblomst_hva_er_dette_hannblomst" name="selje_hannblomst_hva_er_dette_hannblomst"></label>
</section>

<section>
	<p class="q">Hva er dette?</p>
	<img src="<?php theRoot($depth); ?>media/img/NAT9099_pollenbærere.jpg" alt="noen hvite stilker med gule knopper">
	<label for="pollenbærere_hva_er_dette_pollenbærere">Pollen-bærere<input type="radio" id="pollenbærere_hva_er_dette_pollenbærere" name="pollenbærere_hva_er_dette_pollenbærere"></label>
	<label for="pollenbærere_hva_er_dette_køller">Hockey-køller<input type="radio" id="pollenbærere_hva_er_dette_køller" name="pollenbærere_hva_er_dette_køller"></label>
	<label for="pollenbærere_hva_er_dette_pinne">Kjærlighet på pinne<input type="radio" id="pollenbærere_hva_er_dette_pinne" name="pollenbærere_hva_er_dette_pinne"></label>
</section>

<section>
	<p class="q">Hva er dette?</p>
	<img src="<?php theRoot($depth); ?>media/img/selje_hann_saft.jpg" alt="Små runde gjennomsiktige kuler med væske som pipler ut i blomsten">
	<label for="saftbeholdere_hva_er_dette_grønne_oliven">Grønne oliven<input type="radio" id="saftbeholdere_hva_er_dette_grønne_oliven" name="saftbeholdere_hva_er_dette_grønne_oliven"></label>
	<label for="saftbeholdere_hva_er_dette_nektarposer">Små poser med nektar<input type="radio" id="saftbeholdere_hva_er_dette_nektarposer" name="saftbeholdere_hva_er_dette_nektarposer" data-rett="rett"></label>
	<label for="saftbeholdere_hva_er_dette_grønne_dyr">Små, grønne dyr<input type="radio" id="saftbeholdere_hva_er_dette_grønne_dyr" name="saftbeholdere_hva_er_dette_grønne_dyr"></label>
</section>

<section>
	<p class="q">Hva er dette</p>
	<img src="<?php theRoot($depth); ?>media/img/NAT9114_selje_hunnblomst_kvist.jpg" alt="">
	<label for="hunnblomst_hva_er_dette_grønne_bananer">Små grønne bananer<input type="radio" id="hunnblomst_hva_er_dette_grønne_bananer" name="hunnblomst_hva_er_dette_grønne_bananer"></label>
	<label for="hunnblomst_hva_er_dette_hunnblomst">Hunnblomstene til selja<input type="radio" id="hunnblomst_hva_er_dette_hunnblomst" name="hunnblomst_hva_er_dette_hunnblomst" data-rett="rett"></label>
	<label for="hunnblomst_hva_er_dette_tannbørste">En tannbørste<input type="radio" id="hunnblomst_hva_er_dette_tannbørste" name="hunnblomst_hva_er_dette_tannbørste"></label>
</section>

	</fieldset>
	</form>

			<!-- content end -->
           </div><!-- .col -->
        </div><!-- div.row -->

	</div><!-- .col-->

	<div class="col-xd-2 col-xs-2">
		<?php theChapterMenu(0); ?>
	</div><!-- .col-xd-4  -->
</div><!-- .row -->


<?php theFooter($depth); ?>
