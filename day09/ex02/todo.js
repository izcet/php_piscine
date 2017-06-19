function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

function spawn( text ) {
	var div = document.createElement("div");
	div.classList.add('list_elem');
	div.innerHTML = text;
	var list = document.getElementById("ft_list");
	div.onclick = function(){ deldiv(div); };
	list.insertBefore(div, list.childNodes[0]);
}

function create() {
	var text = prompt("What is your todo?");
	if (text != "" )
	{
		spawn(text);
		setCookie(text, text, 3);
	}
}

function deldiv( div ) {
	var list = document.getElementById("ft_list");
	setcookie(div.innerHTML, "", -1);
	if (confirm("Are you sure you want to delete this todo?"))
		list.removeChild(div);
}

var cook = document.cookie;
if (cook != "")
{
	alert("cook??ie!");
	console.log(cook);
}
else
{
	alert("no cookie!");
}
