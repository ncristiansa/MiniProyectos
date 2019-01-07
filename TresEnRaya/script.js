
function generateXO(ids){
	
	var ListXO = ["X", "O"]; // Lista que contendrá X y O para rellenar los td.
	var RandomList = ListXO[Math.floor(Math.random()*ListXO.length)]; //Uso un random para que al dar clic en cada celda genere un valor aleatorio.
	document.getElementById(ids).innerHTML = RandomList; //Cuando haga clic introducirá un string de la lista aleatoriamente.
	var textTD = document.getElementById(ids).textContent;
	var idTD = document.getElementById(ids);
	if(textTD == "X"){
		alert("Has ganado");
	}
	
}


