        <script>
		// AUTO COMPLETA TEXTO - BUSCA
		$(document).ready(function(){
		
			$('#buscaprincipal').autocomplete({
				source: ["Rafael", "Ruscher", "Lago Norte", "Brasília", "Sabrina", "Mauro", "Ana Paula"],
				focus: function (event, ui) {
					var label = ui.item.label;
					var value = ui.item.value;
					var me = $(this);
					setTimeout(function() {
						me.val(value);
					}, 1);
				}
			});
		
		
		});       
        </script>