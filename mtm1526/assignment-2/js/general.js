// JavaScript Document

var addBtn = document.getElementById('addbtn');
var todoList = document.getElementById('todoList');
var itemTxt = document.getElementById('itemTxt');

var bind = function (elem, ev, func) {
	if (document.addEventListener){ //or window.addEventListener
		elem.addEventListener(ev, func, false);
	} else {
		elem.attachEvent('on' + ev, func);
	}
}; 



bind(addBtn, 'click', function () {
	itemTxt = document.createElement('li');
	newitemTxt.innerHTML = itemTxt.value;
	todoList.appendChild(newitemTxt); //adds the 'new item text' in a <li> inside the <ul> of the HTML
	
});

//document.body.innerHTML