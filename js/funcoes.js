const btn = document.querySelector(".nosend");

//if abaixo verifica primeiro se o elemento não é nulo / se clicar no botao voltar inibe a gravação de registro vazio
if(btn){
    btn.addEventListener("click", function(e) {    
    e.preventDefault();  
    
    window.location.replace("index.php");
    });
}