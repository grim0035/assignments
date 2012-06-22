// JavaScript Document

$(document).ready(function () {
	$.get('page-1.html', function (data) {
	$('#load-content').prepend(data);
	});
	
$('#tab-1').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current-tab");
		$('#tab-1').addClass("current-tab");
		$('#load-content').load('page-1.html');
	
	});

$('#tab-2').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current-tab");
		$('#tab-2').addClass("current-tab");
		$('#load-content').load('page-2.html');
	});
	
$('#tab-3').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current-tab");
		$('#tab-3').addClass("current-tab");
		$('#load-content').load('page-3.html');
	});
	
$('#tab-4').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current-tab");
		$('#tab-4').addClass("current-tab");
		$('#load-content').load('page-4.html');
	});
	
});