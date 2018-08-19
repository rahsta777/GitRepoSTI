/*Important Function to blend the tabs in and out*/
function blendoff(idname) {
	document.getElementById(idname).style.display = 'none';
}
function blendon(idname) {
	document.getElementById(idname).style.display = 'block';
/*alert("paso"+idname)*/ }
function visible(idvariable) {
	document.getElementById(idvariable).style.display = 'block';
/*alert("paso"+idname)*/ }
function oculta(idvariable1) {
	document.getElementById(idvariable1).style.display = 'none';
}

function limpiarid(elemento)
{
  document.getElementById("elemento").innerHTML="  ";
}