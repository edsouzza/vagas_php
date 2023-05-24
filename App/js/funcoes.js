const btn = document.querySelector(".nosend");

//if abaixo verifica primeiro se o elemento não é nulo
if(btn){
    btn.addEventListener("click", function(e) {    
    e.preventDefault();  
    
    window.location.replace("index.php");
    });
}