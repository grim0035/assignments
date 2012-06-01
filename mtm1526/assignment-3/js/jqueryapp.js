// JavaScript Document

$(document).ready(function() {
	$('form').on('submit', function (ev) {
	// Stops elements from using the POST request or doing anything as it normally does.
	ev.preventDefault();
	//console.log('form submitted'); //test if this is working
	var color = $('#color').val();
	//var property = $('#property').val();
	var brdrcolor = $('border-color').val();
	var bgcolor = $('background-color').val();
	var txtcolor = $('text-color').val();//same as item.value
	//$('#circ').css('background-color', color); //this works.
	//need a switch loop for the dropdown to use value of 'color'
		/*if ($(property) == ('#background-color')) {
			console.log('yay!');
			//$('#circ').css('background-color', bgcolor);
		}*/
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			//property == $('#property').val();
			$('#circ').css('background-color', color); //this works.

			});
		})
		
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			//property == $(bgcolor).val();
			$('#circ').css('border-color', color); 

			});
		})
		
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			//property == $(bgcolor).val();
			$('#circ').css('color', color); 

			});
		})
		  //alert('Handler for .change() called.');
		//console.log(property); //this works?

	});
	
	
});