$( document ).ready(function() {
	if($('#kviss') && $('#sjekk_kviss')) {
		$('#sjekk_kviss').on("click", function(){
			var rette = 0;
			var mulige = 0;
			var avkrysninger = 0;
			var resultat_class = "";
			$('#kviss section').each(function(){
				mulige += 1;
			});

			$('#kviss input:checked').each(function(){
				avkrysninger += 1;
				if($(this).attr('data-ok')=="ok") {
					rette += 1;
				}
			});
			var melding1 = "";
			var melding2 = 'Du fikk ' + rette + ' rette av ' + mulige + ' mulige!';

			if (mulige == rette) {
				var melding1 = "Helt perfekt! Gratulerer,  ";
			}
			else if(mulige*0.8 <= rette) {
				melding1 = "Gratulerer! ";
			} else if(rette >= 1) {
				melding1 = "Prøv igjen. ";
			}
			melding = melding1 + melding2;
			if(avkrysninger == 0) {
				melding = "Du må svare på spørsmålene før du sjekker :)";
			}
			else if(avkrysninger < mulige) {
				melding += " Du har ikke svart på alle spørsmålene enda.";
			}

			if(rette == mulige) {
				resultat_class = "perfekt";
			} else if (rette >= mulige*0.6) {
				resultat_class = "bra";
			} else if (rette >= 1) {
				resultat_class = "ok";
			} else if (rette == 0) {
				resultat_class = "oops";
			}
			$('#resultat').html('<p><strong><span class="'+ resultat_class + '"">' + rette + ' / ' + mulige + '</span> rette</strong></p>');

			window.setTimeout(function(){
				alert(melding);	
			}, 10);
			

		});
	}
});