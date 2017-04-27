<!doctype html>
<html lang="no">
<head>
	<meta charset="utf-8">
	<title>Det kommer et romskip &ndash; kort fortelling</title>
<!-- stylesheets -->
<link href="../libs/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!--<link href="../libs/mediaelement/build/mediaelementplayer.css" rel="stylesheet">
<link href="../css/mediasync.css" rel="stylesheet">
<link href="../css/naturfag.css" rel="stylesheet">-->
<!-- header scripts -->

<script src="../libs/jquery-3.1.1.min.js"></script>

<style>
	.flexcontainer {display: flex; 
		flex-flow: row nowrap;
		justify-content: center;
		align-items: stretch;
		align-content: center;
	}

	.flexcontainer > legend, .flexcontainer > button {
		flex: 2em;

	}

	nav.chapter.menu {
		position: fixed;
		right:0;
		top:0;
		bottom:0;
		width: 5rem;
		display: flex;
		flex-flow: column-reverse nowrap;
		align-content: center;
	}

	
	nav.chapter.menu button {flex:1;}

	.flex {display: flex; 
		flex-flow: column nowrap;
		justify-content: center;
		align-items: stretch;
		align-content: center;}
	button .flex span {}
	button .flex span+span {}

</style>
</head>
<body class="audiosync kort kap-1"><header>
<h1>Det kommer et romskip &ndash; kort fortelling</h1>
</header>

<nav class="menu chapter">

		<button>1</button>
		<button>2</button>
		<button>3</button>
		<button>4</button>
		<button>5</button>
		<button>6</button>


</nav>

<main>

<div class="flex_primary">

<fieldset class="langselect" id="lang_select_1">
	<div class="flexcontainer">
	<legend>Lyd/Tekst:</legend>
	<button data-lang="no"><div class="flex"><span class="middle" lang="no">Norsk</span></div></button>
	<button data-lang="ar"><div class="flex"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span></div></button>
	<button data-lang="so"><div class="flex"><span lang="so">SOOMAALI</span><span lang="no">Somali</span></div></button>
	<button data-lang="ti"><div class="flex"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span></div></button>
	</div>
</fieldset>

</div>

<div class="flex_secondary">
<fieldset class="langselect" id="lang_select_2">
	<div class="flexcontainer">
	<legend>Tekst:</legend>
	<button class="flex" data-lang="no"><span class="middle" lang="no">Norsk</span></button>
	<button class="flex" data-lang="ar"><span lang="ar" class="rtl">العربية</span><span lang="no">Arabisk</span></button>
	<button class="flex" data-lang="so"><span lang="so">SOOMAALI</span><span lang="no">Somali</span></button>
	<button class="flex" data-lang="ti"><span lang="ti">ትግርኛ</span><span lang="no">Tigrinja</span></button>
	<button class="flex" data-lang="none"><span lang="no">Skjul</span><span lang="no">tekst</span></button>
	</div>
</fieldset>
</div>


</main>


<!-- footer scripts -->
<script defer src="../libs/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script defer src="../libs/svgxuse.min.js"></script>
<script defer src="../libs/mediaelement/build/mediaelement-and-player.min.js"></script>
<script defer src="../js/mediasync.js"></script>
<script defer src="../js/langselect.js"></script>
</body>
</html>