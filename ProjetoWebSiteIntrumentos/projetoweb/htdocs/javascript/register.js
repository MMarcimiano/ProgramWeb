function gravar(){

    var form = document.getElementById("formcadastro");
    var dados = new FormData(form);


    fetch("../php/register.php", {
        method: "POST",
        body: dados
    });
}