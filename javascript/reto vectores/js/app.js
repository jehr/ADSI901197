

// variables --------------------------
var pks = document.querySelectorAll('.pokemons li');

var adf = document.getElementById('add-first');
var adl = document.getElementById('add-last');

var def = document.getElementById('del-first');
var del = document.getElementById('del-last');

var slt = undefined;
var arr = new Array();

var list   = document.getElementById('list');
var conten = "";

// A c t  i v a r    P e r s o n a j e -----------------------
for (var i = 0; i < pks.length; i++){
	pks[i].onclick = function() {
		unselect();
		this.classList.add('active');
		slt = this.getAttribute('id');
	}
}

// A c t  i v a r    P ri me r o -----------------------
adf.onclick = function() {
	if(slt != undefined){
		arr.unshift(slt);
		unselect();
		fill();
	}else{
		alert('Selecciona un Pokemon');
	}
}
// A c t  i v a r    U l t i mo -----------------------
adl.onclick = function() {
	if(slt != undefined){
		arr.push(slt);
		unselect();
		fill();
	}else{
		alert('Selecciona un Pokemon');
	}
}
// E l i m i n a r   P ri me r o  -----------------------
def.onclick = function() {
	if(arr.length > 0) {
		arr.shift(slt);
		fill();
	}else{
		alert('No hay Pokemones para eliminar');
	}
}
// E l i m i n a r   U l t i mo -----------------------
del.onclick = function() {
	if(arr.length > 0) {
		arr.pop(slt);
		fill();
	}else{
		alert('No hay Pokemones para eliminar');
	}
}


// Q u i t a r   C l a se  A c t i v e -----------------------
function unselect() {
	for (var c = 0; c < pks.length; c++) {
		pks[c].classList.remove('active');
	}
	slt = undefined;
}

// L l e n a r      L i s t a -----------------------
function fill() {
	conten = '';
	for (var i = 0; i < arr.length; i++) {
		conten += "<li class="+arr[i]+"></li>";
	}
	list.innerHTML = conten;
}
