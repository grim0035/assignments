// JavaScript Document

$(document).ready(function() {
	$('form').on('submit', function (ev) {
	// Stops elements from using the POST request or doing anything as it normally does.
	ev.preventDefault();
	//console.log('form submitted'); //test if this is working
	var color = $('#color').val();
	//var property = $('#property').val();
	var brdrcolor = $('#color').val();
	var bgcolor = $('#color').val();
	var txtcolor = $('#color').val();//same as item.value
	//console.log(color); //test if color value is working
	//$('#circ').css('background-color','#fff'); this works
	//$('#circ').css('background-color', color); //this works.
	//need a switch loop for the dropdown to use value of 'color'
		/*if ($(property) == ('#background-color')) {
			console.log('yay!');
			//$('#circ').css('background-color', bgcolor);
		}*/
		$('#property').change(function () {
			var property = "";
			$("select option:selected").each(function () {
			property = $(brdrcolor).val();
			$('#circ').css('background-color', color); //this works.

			});
		})
		  //alert('Handler for .change() called.');
		//console.log(property); //this works?

	});
	
	
});