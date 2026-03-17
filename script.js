/*
JavaScript controleert of alle velden zijn ingevuld
voordat het formulier wordt verzonden
*/

function controleFormulier(){

let lesnaam = document.getElementById("lesnaam").value;
let trainer = document.getElementById("trainer").value;
let datum = document.getElementById("datum").value;
let tijd = document.getElementById("tijd").value;

/*
Unhappy scenario
*/

if(lesnaam == "" || trainer == "" || datum == "" || tijd == ""){

alert("Alle velden moeten ingevuld worden.");

return false;

}

/*
Happy scenario
*/

return true;

}