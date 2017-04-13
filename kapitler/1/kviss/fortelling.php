<?php
include '../../../inc/functions.php';
$title = "Fortelling-kviss";
$depth = 3;
$h1 = $title;
$pageClass = "kviss kap-1";
?>
<?php theHeader($depth, $title, $h1, $pageClass); ?>

<div class="row">
	<div class="col-xd-10 col-xs-10">

    <div class="row resultat">
		<div class="col-xs-4">
			<button id="sjekk_kviss">Sjekk resultat</button>
		</div><!-- .col -->
		<div class="col-xs-8">
			<div id="resultat"><p><strong>Ta kvissen og få poengsummen her!</strong></p></div>
		</div><!-- .col -->
	</div><!-- div.row -->

    	<div class="row">

    		<div class="col-xs-12">
    		<!-- content begin -->
   
		<fieldset id="kviss">
			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hva heter jenta i fortellinga?</strong></p>
				<label for="hva_heter_jenta">Herr Høne <input type="radio" id="hva_heter_jenta name_herr_høne" name="hva_heter_jenta"/></label>
				<label for="hva_heter_jenta_jenny">Jenny <input type="radio" id="hva_heter_jenta_jenny" name="hva_heter_jenta" data-ok="ok"/></label>
				<label for="hva_heter_jenta_sobia">Sobia <input type="radio" id="hva_heter_jenta_sobia" name="hva_heter_jenta"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hva heter gutten i fortellinga?</strong></p>
				<label for="hva_heter_gutten_ivar">Ivar <input type="radio" id="hva_heter_gutten_ivar" name="hva_heter_gutten"/></label>
				<label for="hva_heter_gutten_kattepus">Kattepus <input type="radio" id="hva_heter_gutten_kattepus" name="hva_heter_gutten"/></label>
				<label for="hva_heter_gutten_samir">Samir <input type="radio" id="hva_heter_gutten_samir" name="hva_heter_gutten" data-ok="ok"/></label>
				
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hva heter den med blått ansikt?</strong></p>
				<label for="hva_heter_blått_ansikt_afrika">Afrika <input type="radio" id="hva_heter_blått_ansikt_afrika" name="hva_heter_katteører"/></label>
				<label for="hva_heter_blått_ansikt_hen">Hen <input type="radio" id="hva_heter_blått_ansikt_hen" name="hva_heter_blått_ansikt" data-ok="ok"/></label>
				<label for="hva_heter_blått_ansikt_kim">Kim <input type="radio" id="hva_heter_blått_ansikt_kim" name="hva_heter_blått_ansikt"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hva heter den med katte-ører?</strong></p>
				<label for="hva_heter_katteører_tiger">Tiger<input type="radio" id="hva_heter_katteører_tiger" name="hva_heter_katteører"/></label>
				<label for="hva_heter_katteører_løve">Den farlige løven<input type="radio" id="hva_heter_katteører_løve" name="hva_heter_katteører"/></label>
				<label for="hva_heter_katteører_katt">Katt<input type="radio" id="hva_heter_katteører_katt" name="hva_heter_katteører" data-ok="ok"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hvor kommer romskipet fra?</strong></p>
				<label for="hvor_kommer_romskipet_fra_sverige">Sverige<input type="radio" id="hvor_kommer_romskipet_fra_sverige" name="hvor_kommer_romskipet_fra"/></label>
				<label for="hvor_kommer_romskipet_fra_proxima_centauri">En planet ved Proxima Centauri<input type="radio" id="hvor_kommer_romskipet_fra_proxima_centauri" name="hvor_kommer_romskipet_fra" data-ok="ok"/></label>
				<label for="hvor_kommer_romskipet_fra_oslo">Oslo<input type="radio" id="hvor_kommer_romskipet_fra_oslo" name="hvor_kommer_romskipet_fra"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hvorfor kom romskipet til jorda?</strong></p>
				<label for="hvorfor_kom_romskipet_til_jorda_fisk">Katt og Hen vil spise fisk<input type="radio" id="hvorfor_kom_romskipet_til_jorda_fisk" name="hvorfor_kom_romskipet_til_jorda"/></label>
				<label for="hvorfor_kom_romskipet_til_jorda_kino">De vil gå på kino<input type="radio" id="hvorfor_kom_romskipet_til_jorda_kino" name="hvorfor_kom_romskipet_til_jorda"/></label>
				<label for="hvorfor_kom_romskipet_til_jorda_vetikke">Vi veit ikke<input type="radio" id="hvorfor_kom_romskipet_til_jorda_vetikke" name="hvorfor_kom_romskipet_til_jorda" data-ok="ok"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hva gjorde Jenny og Samir da romskipet kræsja i treet?</strong></p>
				<label for="hva_gjorde_jenny_og_samir_under_krasjet_spiste_sukkererter">De spiste sukkererter<input type="radio" id="hva_gjorde_jenny_og_samir_under_krasjet_spiste_sukkererter" name="hva_gjorde_jenny_og_samir_under_krasjet" data-ok="ok"/></label>
				<label for="hva_gjorde_jenny_og_samir_under_krasjet_spiste_hamburger">De spiste hamburger<input type="radio" id="hva_gjorde_jenny_og_samir_under_krasjet_spiste_hamburger" name="hva_gjorde_jenny_og_samir_under_krasjet"/></label>
				<label for="hva_gjorde_jenny_og_samir_under_krasjet_spiste_is">De spiste is med sjokoladedryss<input type="radio" id="hva_gjorde_jenny_og_samir_under_krasjet_spiste_is" name="hva_gjorde_jenny_og_samir_under_krasjet"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hvilken årstid er det hos Jenny og Samir?</strong></p>
				<label for="hvilken_årstid_er_det_vinter">Vinter<input type="radio" id="hvilken_årstid_er_det_vinter" name="hvilken_årstid_er_det"/></label>
				<label for="hvilken_årstid_er_det_vår">Vår<input type="radio" id="hvilken_årstid_er_det_vår" name="hvilken_årstid_er_det" data-ok="ok"/></label>
				<label for="hvilken_årstid_er_det_sommer">Sommer<input type="radio" id="hvilken_årstid_er_det_sommer" name="hvilken_årstid_er_det"/></label>
			</section>

			<section>
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Hvor mange språk kan Hen og Katt forstå?</strong></p>
				<label for="hvor_mange_språk_en_no">Bare engelsk og Norsk<input type="radio" id="hvor_mange_språk_en_no" name="hvor_mange_språk"/></label>
				<label for="hvor_mange_språk_ar_no">Bare Arabisk og Norsk<input type="radio" id="hvor_mange_språk_ar_no" name="hvor_mange_språk"/></label>
				<label for="hvor_mange_språk_alle_språk">Alle språk i hele verden<input type="radio" id="hvor_mange_språk_alle_språk" name="hvor_mange_språk" data-ok="ok"/></label>
			</section>

			<section>
			<!-- alt er riktig -->
				<img src="<?php theRoot($depth); ?>media/svg/q.svg"/>
				<p class="q"><strong>Synes du det er gøy med kviss?</strong></p>
				<label for="er_kviss_gøy_ja_kjempegøy">Ja, kjempegøy!<input type="radio" id="er_kviss_gøy_ja_kjempegøy" name="er_kviss_gøy" data-ok="ok"/></label>
				<label for="er_kviss_gøy_litt_morsomt">Litt morsomt<input type="radio" id="er_kviss_gøy_litt_morsomt" name="er_kviss_gøy" data-ok="ok"/></label>
				<label for="er_kviss_gøy_hater_kviss">Jeg hater kviss<input type="radio" id="er_kviss_gøy_hater_kviss" name="er_kviss_gøy" data-ok="ok"/></label>
			</section>
</fieldset>
</div><!-- .col -->
</div><!-- div.row -->





			<!-- content end -->
	</div><!-- .col-->

	<div class="col-xd-2 col-xs-2">
		<?php theChapterMenu($depth); ?>
	</div><!-- .col-xd-4  -->
</div><!-- .row -->

<?php echo addScript($depth, 'js/kviss.js'); ?>
<?php theFooter($depth); ?>