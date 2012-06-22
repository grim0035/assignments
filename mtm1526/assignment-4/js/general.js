// JavaScript Document

$(document).ready(function () {
	$.get('page-1.html', function (data) {
	$('#load-content').append(data);
	});
	
$('#tab-1').on('click', function(ev) {
		ev.preventDefault();

		$('#load-content').load('page-1.html');
	});

$('#tab-2').on('click', function(ev) {
		ev.preventDefault();

		$('#load-content').load('page-2.html');
	});
	
$('#tab-3').on('click', function(ev) {
		ev.preventDefault();

		$('#load-content').load('page-3.html');
	});
	
$('#tab-4').on('click', function(ev) {
		ev.preventDefault();

		$('#load-content').load('page-4.html');
	});
	
});