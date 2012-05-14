// JavaScript Document

// single line comment

/* 
	multiline comment
*/

//alert('This is a little message.');

var letter = ''; //this opens a window text filed to capture input text.

while (!letter) { // checks if nothing is in variable name
		letter = prompt('What is your favourite letter?');
}
console.log(letter); //same as trace(); in as or var_dump(); in php.

// "document" variable is the reference to the HTML.

//if (name =='' || name == null) //checks if empty or null
//if (name != '' && name != null) //checks if nothing is in either empty or null
//if (name) //checks for name variable
//if (!name) //checks if nothing is in name variable

//this writes the captured name 10 times with a line break after each
/*if (letter) {
	for (var i = 0; i < 10; i++){
document.write(letter + '<br>');
	}
}
*/


// trying to add 1 name each time it writes the variable name
if (letter) {
	for (var i = 0; i < 10; i++){
document.write(letter +'<br>');
	}
}