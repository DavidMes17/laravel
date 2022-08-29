const btn = document.querySelector("#name")
btn.addEventListener("keyup", function(event){

    const senha = document.querySelector("#name")

    if (senha.value !== null) {
        //habilita o botão
        document.getElementById("btnSubmit").disabled = false; 
      } 
      else {
        //desabilita o botão se o conteúdo do input ficar em branco
        document.getElementById("btnSubmit").disabled = true;
      }});


function SendTo(event){
    event.preventDefault();
    window.location.pathname = "/Question"
}

function ForTo(event){
  event.preventDefault();
  window.location.pathname = "/score"
}