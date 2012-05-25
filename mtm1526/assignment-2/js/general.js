// JavaScript Document

var addBtn = document.getElementById('add-btn');

var bind = function (elem, ev, func) {
	if (document.addEventListener){ //or window.addEventListener
		elem.addEventListener(ev, func, false);
	} else {
		elem.attachEvent('on' + ev, func);
	}
}; 

var newitemTxt = document.getElementById('new-item-txt').innerHTML;

bind(addBtn, 'click', function () {
	newitemTxt = document.createElement('li');
	document.body.appendChild(newitemTxt); //adds the 'new item text' in a <li> inside the <ul> of the HTML
});
//document.body.innerHTML