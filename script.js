/*
=========================================================
SCRIPT.JS

Dit bestand bevat:
- Form validatie
- Live feedback
- UX verbeteringen
- Zoekfunctie
- Confirm dialogs
=========================================================
*/

// ==============================
// FORM VALIDATIE
// ==============================

function controleFormulier(){

    let lesnaam = document.getElementById("lesnaam").value.trim();
    let trainer = document.getElementById("trainer").value.trim();
    let datum = document.getElementById("datum").value;
    let tijd = document.getElementById("tijd").value;

    let fouten = [];

    // Validatie regels
    if(lesnaam.length < 3){
        fouten.push("Lesnaam moet minimaal 3 tekens bevatten");
    }

    if(trainer.length < 3){
        fouten.push("Trainer naam is te kort");
    }

    if(datum === ""){
        fouten.push("Datum is verplicht");
    }

    if(tijd === ""){
        fouten.push("Tijd is verplicht");
    }

    // Unhappy scenario
    if(fouten.length > 0){
        toonFouten(fouten);
        return false;
    }

    return true;
}

// ==============================
// FOUTEN TONEN
// ==============================

function toonFouten(fouten){

    let div = document.getElementById("fouten");

    if(!div){
        alert(fouten.join("\n"));
        return;
    }

    div.innerHTML = "";

    fouten.forEach(fout => {

        let p = document.createElement("p");
        p.innerText = fout;
        p.style.color = "red";

        div.appendChild(p);

    });
}

// ==============================
// LIVE VALIDATIE
// ==============================

function initLiveValidatie(){

    let inputs = document.querySelectorAll("input");

    inputs.forEach(input => {

        input.addEventListener("input", function(){

            if(input.value.trim() === ""){
                input.style.border = "2px solid red";
            }else{
                input.style.border = "2px solid green";
            }

        });

    });
}

// ==============================
// ZOEK FUNCTIE
// ==============================

function filterLessen(){

    let zoek = document.getElementById("zoek").value.toLowerCase();
    let lessen = document.querySelectorAll(".les");

    lessen.forEach(les => {

            let tekst = les.innerText.toLowerCase();

            if(tekst.includes(zoek)){
                les.style.display = "";
            }else{
                les.style.display = "none";
        }

    });
}

// ==============================
// DELETE CONFIRM
// ==============================

function confirmDelete(){
    return confirm("Weet je zeker dat je deze les wilt verwijderen?");
}

// ==============================
// DARK MODE
// ==============================

function toggleDarkMode(){
    document.body.classList.toggle("dark");
}

// ==============================
// INIT
// ==============================

window.onload = function(){
    initLiveValidatie();
};