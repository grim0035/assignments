// JavaScript Document

$(document).ready(function () {
	$.get('page-1.html', function (data) {
	$('body').append(data);
	});
	
	$('.current').on('click', function() {
		$('.current').load('page-3.html');
	});
});