const form =document.getElementById("formperfil");
const nomedeperfil = document.getElementById("nomeperfil");
const email = document.getElementById("emailperfil");
const password = document.getElementById("senhaperfil");


form.addEventListener("submit",(event)=>{
    event.preventDefault()
    checkInputUsername();
    checkInputUseremail();
    checkInputUsersenha();
    //window.location.href="index.html";
    //alert=("Voce agora e adiministrador,podera modificar,excluir,atualizar e adicionar novoas conteudos a esta pagina")
})

function checkInputUsername(){
    const usernameValue = nomedeperfil.value;

    if(usernameValue === ""){
        errorInput(nomedeperfil,"preencha um username")
    }
}
function checkInputUseremail(){
    const emailValue = email.value;
    
    if(emailValue === ""){
        errorInput(email,"preencha um username")
    }
}
function checkInputUsersenha(){
    const usersenhaValue = password.value;
    
    if(usersenhaValue === ""){
        errorInput(password,"preencha um username")
    }
}

function errorInput(input,message){
const formItem =input.parentElement;
const textMessage = formItem.querySelector("a")

textMessage.innerText = message;

formItem.className = "formperfil-erro"
}