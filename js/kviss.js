$( document ).ready(function() {
	if($('#kviss') && $('#sjekk_kviss')) {
		$('#sjekk_kviss').on("click", function(){
			alert('Du har X rette av Y mulige!');
		});
	}
});