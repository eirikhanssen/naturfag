<?php

function getRoot($depth) {
	$rootfolder = "";
	//$depth = $depth || 0;
	if($depth == 0) {
		return "./";
	}
	for($i=1; $i<=$depth; $i++) {
		$rootfolder .= "../";
	}
	return $rootfolder;
}

function theRoot($depth) {
	echo getRoot($depth);
}

function getHeaderScripts($depth) {
	$output = "\n<!-- header scripts -->\n";
	$output .= addScript($depth, 'libs/jquery-3.1.1.min.js');
	return $output;
}

function addScript($depth, $relpath) {
	$output = "\n" . '<script src="' . getRoot($depth) . $relpath . '"></script>';
	return $output;
}

function addDeferScript($depth, $relpath) {
	$output = "\n" . '<script defer src="' . getRoot($depth) . $relpath . '"></script>';
	return $output;
}

function addStylesheet($depth, $relpath) {
	$output = "\n" . '<link href="' . getRoot($depth) . $relpath . '" rel="stylesheet" type="text/css">';
	return $output;
}

function getFooterScripts($depth) {
	global $pageClass;
//	echo "<!-- PageClass: " .  . "-->";

	$output = "<!-- footer scripts -->";
	$output .= addDeferScript($depth, 'libs/bootstrap-3.3.7/js/bootstrap.min.js');
	$output .= addDeferScript($depth, 'libs/svgxuse.min.js');
	
	if(preg_match('/audiosync/', $pageClass)){
		// only add these scripts if the $pageClass contains "audiotext"
		$output .= addDeferScript($depth, 'libs/mediaelement/build/mediaelement-and-player.min.js');
		$output .= addDeferScript($depth, 'js/mediasync.js');
		$output .= addDeferScript($depth, 'js/langselect.js');
		
	}
	
	else if(preg_match('/mediajs/', $pageClass)){
		// only add these scripts if the $pageClass contains "mediajs"
		$output .= addDeferScript($depth, 'libs/mediaelement/build/mediaelement-and-player.min.js');
	}

	
	return $output;
}

function getStylesheets($depth) {
	$output = "\n<!-- stylesheets -->";
	$output .= addStylesheet($depth, 'libs/bootstrap-3.3.7/css/bootstrap.min.css');
	$output .= addStylesheet($depth, 'libs/mediaelement/build/mediaelementplayer.css');
	$output .= addStylesheet($depth, 'css/mediasync.css');
	$output .= addStylesheet($depth, 'css/naturfag.css');
	return $output;
}

function getHeader($depth, $title, $h1, $pageClass) {
	$headerScripts = getHeaderScripts($depth);
	$stylesheets = getStylesheets($depth);
	$output = <<<EOF
<!doctype html>
<html lang="no">
<head>
	<meta charset="utf-8">
	<title>$title</title>
EOF;
	$output .= $stylesheets . $headerScripts;
	$output .= '</head>' . "\n" . '<body class="' . $pageClass . '">';
    $heading = <<<EOF
<header>
<h1>$title</h1>
</header>
EOF;
	$output .= $heading;
	return $output;
}

function getFooter($depth) {
	$output = "";
	$output .= "\n" . getFooterScripts($depth);
	$output .= "\n</body>\n</html>";
	return $output;
}

function theHeader($depth, $title, $h1, $pageClass) {
	echo getHeader($depth, $title, $h1, $pageClass);
}

function theFooter($depth) {
	echo getFooter($depth);
}

function theChapterMenu($depth) {
	echo getChapterMenu($depth);
}

function getChapterMenu($depth) {
	$depth=$depth;
	$rootfolder = getRoot($depth);
	$chaptermenu = <<<EOF
<!-- rootfolder: {$rootfolder} -->
<!-- depth: {$depth} -->
<ul class="nav nav-pills nav-stacked">

<li role="presentation" class="menu-kort"><a href="../kort">
	<svg class="icon icon-kort">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-kort"></use>
	</svg><span class="link-desc">kort fortelling</a></span></li>

<li role="presentation" class="menu-lang"><a href="../lang">
	<svg class="icon icon-lang">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-lang"></use>
	</svg><span class="link-desc">lang fortelling</span></a></li>

<li role="presentation" class="menu-ord"><a href="../ord">
	<svg class="icon icon-abc">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-abc"></use>
	</svg><span class="link-desc">ord</span></a></li>

<li role="presentation" class="menu-kviss"><a href="../kviss">
	<svg class="icon icon-kviss">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-kviss"></use>
	</svg><span class="link-desc">kviss</span></a></li>

<li role="presentation" class="menu-film"><a href="../film">
	<svg class="icon icon-film">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-film"></use>
		</svg><span class="link-desc">film</span></a></li>

<li role="presentation" class="menu-snutter"><a href="../snutter">
	<svg class="icon icon-snutt">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-snutt"></use>
	</svg><span class="link-desc">snutter</span></a></li>

<li role="presentation" class="menu-let-og-finn"><a href="../let-og-finn">
	<svg class="icon icon-finn">
		<use xlink:href="{$rootfolder}media/svg/naturfag-icons.svg#icon-finn"></use>
	</svg><span class="link-desc">Let og finn</span></a></li>
</ul>
EOF;
	return $chaptermenu;
}

function langSelect() {
$output = <<<EOF
<section id="lang_select">
			<h2 class="invisible">Språkvalg</h2>
			<form id="lang_select_form">
			<fieldset id="primary_language">
				<legend>Velg språk</legend>
				<label class="single" for="primary_lang_no"><span lang="no">Norsk</span>
					<input id="primary_lang_no" type="radio" name="primary_language" checked="checked">
				</label>
				<label for="primary_lang_ar"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span>
					<input id="primary_lang_ar" type="radio" name="primary_language">
				</label>
				<label for="primary_lang_so"><span lang="so">SOOMAALI</span><span lang="no">Somali</span>
					<input id="primary_lang_so" type="radio" name="primary_language">
				</label>
				<label for="primary_lang_ti"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span>
					<input id="primary_lang_ti" type="radio" name="primary_language">
				</label>
			</fieldset>
			<fieldset id="secondary_language">
				<legend>Velg støttespråk</legend>
				<label class="single" for="secondary_lang_no">Norsk
					<input id="secondary_lang_no" type="radio" name="secondary_language" checked="checked">
				</label>
				<label for="secondary_lang_ar"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span>
					<input id="secondary_lang_ar" type="radio" name="secondary_language">
				</label>
				<label for="secondary_lang_so"><span lang="so">SOOMAALI</span><span lang="no">Somali</span>
					<input id="secondary_lang_so" type="radio" name="secondary_language">
				</label>
				<label for="secondary_lang_ti"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span>
					<input id="secondary_lang_ti" type="radio" name="secondary_language">
				</label>
				<label for="secondary_lang_none"><span>Ikke</span><span>valgt</span>
					<input id="secondary_lang_none" type="radio" name="secondary_language">
				</label>
			</fieldset>
			</form>
		</section>
EOF;
echo $output;
}

function langSelect2Primary() {
$output = <<<EOF
<fieldset id="lang_select_1">
	<legend>Lyd/Tekst:</legend>
	<button data-lang="no"><span>&nbsp;</span><span class="middle" lang="no">Norsk</span></button>
	<button data-lang="ar"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span></button>
	<button data-lang="so"><span lang="so"><span lang="so">SOOMAALI</span><span lang="no">Somali</span></button>
	<button data-lang="ti"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span></button>
</fieldset>
EOF;
echo $output;
}

function langSelect2Secondary() {
$output = <<<EOF
<fieldset id="lang_select_2">
	<legend>Tekst:</legend>
	<button data-lang="no"><span>&nbsp;</span><span class="middle" lang="no">Norsk</span></button>
	<button data-lang="ar"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span></button>
	<button data-lang="so"><span lang="so"><span lang="so">SOOMAALI</span><span lang="no">Somali</span></button>
	<button data-lang="ti"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span></button>
	<button data-lang="none"><span lang="no">Skjul</span><span lang="no">tekst</span></button>
</fieldset>
EOF;
echo $output;
}

function secondaryLangControls2() {
	$output = <<<EOF
<div class="secondaryLangControls2">
<h2>Støttespråk</h2>
<button class="langMirrorBtn" data-input="secondary_lang_no"><span>&nbsp;</span><span>Norsk</span></button>
<button class="langMirrorBtn" data-input="secondary_lang_ar"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span></button>
<button class="langMirrorBtn" data-input="secondary_lang_so"><span lang="so">SOOMAALI</span><span lang="no">Somali</span></button>
<button class="langMirrorBtn" data-input="secondary_lang_ti"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span></button>
<button class="langMirrorBtn" data-input="secondary_lang_none"><span>&nbsp;</span><span>Lukk</span> </button>
</div><!-- .secondaryLangControls2 -->
EOF;
return $output;
}