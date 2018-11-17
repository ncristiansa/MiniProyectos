
function generateXO(ids){

	var ListXO = ["X", "O"];
	var RandomList = ListXO[Math.floor(Math.random()*ListXO.length)];
	document.getElementById(ids).innerHTML = RandomList;
}