// JavaScript Document

$(document).ready(function() {
	$('#apply').click(function (ev) {
	// Stops elements from using the POST request or doing anything as it normally does.
	ev.preventDefault();
	//console.log('form submitted'); //test if this is working
	var color = $('#color').val();
	var property = $('#property').val(); //not needed?
	//var brdrcolor = $('border-color').val(); //not needed?
	//var bgcolor = $('background-color').val(); //not needed?
	//var txtcolor = $('text-color').val();//same as item.value
	//$('#circ').css('background-color', color); //this works.
	
	//need a switch loop for the dropdown to use value of 'color'
	
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			//property == $(border-color).val(); //doesn't work
				if ($("select option:selected").val() == "border-color") {
				$('#circ').css('border-color', color); 
				}
				
				if ($("select option:selected").val() == "bg-color") {
				$('#circ').css('background-color', color); 
				}
			
				if ($("select option:selected").val() == "text-color") {
				$('#circ').css('color', color); 
				}
			});
			
		});
		
		

		property.change();
		//console.log(property); //this works?

	});
	
	$('#hideshow').click(function (ev) {
		ev.preventDefault();

	 $("#circ").toggle(); //use toggle instead of hide() and show() if statement to hide/show #circ
	
	});
	
});