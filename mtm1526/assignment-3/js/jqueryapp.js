// JavaScript Document

$(document).ready(function() {
	$('form').on('submit', function (ev) {
	// Stops elements from using the POST request or doing anything as it normally does.
	ev.preventDefault();
	//console.log('form submitted'); //test if this is working
	var color = $('#color').val(); //same as item.value
	//console.log(color); //test if color value is working
	 $('#circ').css('background-color','#fff');
	});
	
	
});