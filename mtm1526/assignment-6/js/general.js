// JavaScript Document

//not using caching currently.

$(document).ready(function () {
	$.get('includes/earth.php', function (data) {
	$('#load-content').append(data);
	});
	
$('#tab-1').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current");
		$('#tab-1').addClass("current blue");
		$('#load-content').load('includes/earth.php');
	});

$('#tab-2').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current");
		$('#tab-2').addClass("current blue");
		$('#load-content').load('includes/mars.php');
	});
	
$('#tab-3').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current");
		$('#tab-3').addClass("current blue");
		$('#load-content').load('includes/jupiter.php');
	});
	
$('#tab-4').on('click', function(ev) {
		ev.preventDefault();
		$("li").removeClass("current");
		$('#tab-4').addClass("current blue");
		$('#load-content').load('includes/venus.php');
	});
	
});