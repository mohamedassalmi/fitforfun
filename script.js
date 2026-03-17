function controleFormulier(){

let velden = ["lesnaam","trainer","datum","tijd"];
let geldig = true;

velden.forEach(id => {
  let input = document.getElementById(id);

  if(input.value === ""){
    input.style.border = "2px solid red";
    geldig = false;
  } else {
    input.style.border = "1px solid green";
  }
});

if(!geldig){
  alert("Niet alles is ingevuld!");
}

return geldig;
}

/*
Extra functionaliteit voor UX
*/

document.addEventListener("DOMContentLoaded", function(){

let inputs = document.querySelectorAll("input");

inputs.forEach(input => {
  input.addEventListener("focus", () => {
    input.style.backgroundColor = "#e0f7fa";
  });

  input.addEventListener("blur", () => {
    input.style.backgroundColor = "white";
  });
});

});