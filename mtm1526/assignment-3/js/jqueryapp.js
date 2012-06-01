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
			//property == $(border-color).val();
			$('#circ').css('border-color', color); 

			});
		})
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			//property == $(background-color).val();
				$('#circ').css('background-color', color); 

			});
		})
		
		
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			//property == $(color).val();
			$('#circ').css('color', color); 

			});
		})
		.change();
		  //alert('Handler for .change() called.');
		//console.log(property); //this works?

	});
	
	$('#hideshow').click(function (ev) {
		ev.preventDefault();

	 $("#circ").hide(); //need if statement to hide/show #circ
	
	});
	
});