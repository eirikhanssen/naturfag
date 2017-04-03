<?php
include '../../../inc/functions.php';
$title = "Kviss om fortellinga";
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
			<legend>Kapittel 1 kviss om fortellinga</legend>
			<section>
				<p class="q">Hva heter jenta i fortellinga?</p>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<label for="hva_heter_jenta">Herr Høne <input type="radio" id="hva_heter_jenta name_herr_høne" name="hva_heter_jenta"/></label>
				
				<label for="hva_heter_jenta_jenny">Jenny <input type="radio" id="hva_heter_jenta_jenny" name="hva_heter_jenta"/></label>
				
				<label for="hva_heter_jenta_sobia">Sobia <input type="radio" id="hva_heter_jenta_sobia" name="hva_heter_jenta"/></label>
				
			</section>

			<section>
				<p class="q">Hva heter gutten i fortellinga?</p>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<label for="hva_heter_gutten_ivar">Ivar <input type="radio" id="hva_heter_gutten_ivar" name="hva_heter_gutten"/></label>
				
				<label for="hva_heter_gutten_kattepus">Kattepus <input type="radio" id="hva_heter_gutten_kattepus" name="hva_heter_gutten"/></label>
				
				<label for="hva_heter_gutten_samir">Samir <input type="radio" id="hva_heter_gutten_samir" name="hva_heter_gutten"/></label>
				
			</section>

			<section>
				<p class="q">Hva heter den med blått ansikt?</p>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<label for="hva_heter_blått_ansikt_afrika">Afrika <input type="radio" id="hva_heter_blått_ansikt_afrika" name="hva_heter_blått_ansikt"/></label>
				
				<label for="hva_heter_blått_ansikt_hen">Hen <input type="radio" id="hva_heter_blått_ansikt_hen" name="hva_heter_blått_ansikt"/></label>
				
				<label for="hva_heter_blått_ansikt_kim">Kim <input type="radio" id="hva_heter_blått_ansikt_kim" name="hva_heter_blått_ansikt"/></label>
			</section>

			<section>
				<p class="q">Hva heter den med katte-ører?</p>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<label for="hva_heter_blått_ansikt_afrika">Afrika <input type="radio" id="hva_heter_blått_ansikt_afrika" name="hva_heter_katteører"/></label>
				
				<label for="hva_heter_blått_ansikt_hen">Hen <input type="radio" id="hva_heter_blått_ansikt_hen" name="hva_heter_blått_ansikt"/></label>
				
				<label for="hva_heter_blått_ansikt_kim">Kim <input type="radio" id="hva_heter_blått_ansikt_kim" name="hva_heter_blått_ansikt"/></label>
			</section>

	<section>
		<p class="q">Hva heter den med katte-ører?</p>
		<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
		<label for="hva_heter_katteører_tiger">Tiger<input type="radio" id="hva_heter_katteører_tiger" name="hva_heter_katteører"></label>
		<label for="hva_heter_katteører_løve">Den farlige løven<input type="radio" id="hva_heter_katteører_løve" name="hva_heter_katteører"></label>
		<label for="hva_heter_katteører_katt">Katt<input type="radio" id="hva_heter_katteører_katt" name="hva_heter_katteører"></label>
	</section>

<section>
	<p class="q">Hvor kommer romskipet fra?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="hvor_kommer_romskipet_fra_sverige">Sverige<input type="radio" id="hvor_kommer_romskipet_fra_sverige" name="hvor_kommer_romskipet_fra"></label>
	<label for="hvor_kommer_romskipet_fra_proxima_centauri">En planet ved Proxima Centauri<input type="radio" id="hvor_kommer_romskipet_fra_proxima_centauri" name="hvor_kommer_romskipet_fra"></label>
	<label for="hvor_kommer_romskipet_fra_oslo">Oslo<input type="radio" id="hvor_kommer_romskipet_fra_oslo" name="hvor_kommer_romskipet_fra"></label>
</section>

<section>
	<p class="q">Hvorfor kom romskipet til jorda?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="hvorfor_kom_romskipet_til_jorda_fisk">Katt og Hen vil spise fisk<input type="radio" id="hvorfor_kom_romskipet_til_jorda_fisk" name="hvorfor_kom_romskipet_til_jorda"></label>
	<label for="hvorfor_kom_romskipet_til_jorda_kino">De vil gå på kino<input type="radio" id="hvorfor_kom_romskipet_til_jorda_kino" name="hvorfor_kom_romskipet_til_jorda"></label>
	<label for="hvorfor_kom_romskipet_til_jorda_vetikke">Vi veit ikke<input type="radio" id="hvorfor_kom_romskipet_til_jorda_vetikke" name="hvorfor_kom_romskipet_til_jorda"></label>
</section>

<section>
	<p class="q">Hva gjorde Jenny og Samir da romskipet kræsja i treet?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="hva_gjorde_jenny_og_samir_under_krasjet_spiste_sukkererter">De spiste sukkererter<input type="radio" id="hva_gjorde_jenny_og_samir_under_krasjet_spiste_sukkererter" name="hva_gjorde_jenny_og_samir_under_krasjet"></label>
	<label for="hva_gjorde_jenny_og_samir_under_krasjet_spiste_hamburger">De spiste hamburger<input type="radio" id="hva_gjorde_jenny_og_samir_under_krasjet_spiste_hamburger" name="hva_gjorde_jenny_og_samir_under_krasjet"></label>
	<label for="hva_gjorde_jenny_og_samir_under_krasjet_spiste_is">De spiste is med sjokoladedryss<input type="radio" id="hva_gjorde_jenny_og_samir_under_krasjet_spiste_is" name="hva_gjorde_jenny_og_samir_under_krasjet"></label>
</section>

<section>
	<p class="q">Hvilken årstid er det hos Jenny og Samir?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="hvilken_årstid_er_det_vinter">Vinter<input type="radio" id="hvilken_årstid_er_det_vinter" name="hvilken_årstid_er_det"></label>
	<label for="hvilken_årstid_er_det_vår">Vår<input type="radio" id="hvilken_årstid_er_det_vår" name="hvilken_årstid_er_det"></label>
	<label for="hvilken_årstid_er_det_sommer">Sommer<input type="radio" id="hvilken_årstid_er_det_sommer" name="hvilken_årstid_er_det"></label>
</section>

<section>
	<p class="q">Hvor mange språk kan Hen og Katt forstå?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="hvor_mange_språk_en_no">Engelsk og Norsk<input type="radio" id="hvor_mange_språk_en_no" name="hvor_mange_språk"></label>
	<label for="hvor_mange_språk_ar_no">Arabisk og Norsk<input type="radio" id="hvor_mange_språk_ar_no" name="hvor_mange_språk"></label>
	<label for="hvor_mange_språk_alle_språk">Alle språk i hele verden<input type="radio" id="hvor_mange_språk_alle_språk" name="hvor_mange_språk"></label>
</section>

<section>
<!-- alt er riktig -->
	<p class="q">Synes du det er gøy med kviss?</p>
	<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
	<label for="er_kviss_gøy_ja_kjempegøy">Ja, kjempegøy!<input type="radio" id="er_kviss_gøy_ja_kjempegøy" name="er_kviss_gøy"></label>
	<label for="er_kviss_gøy_litt_morsomt">Litt morsomt<input type="radio" id="er_kviss_gøy_litt_morsomt" name="er_kviss_gøy"></label>
	<label for="er_kviss_gøy_hater_kviss">Jeg hater kviss<input type="radio" id="er_kviss_gøy_hater_kviss" name="er_kviss_gøy"></label>
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