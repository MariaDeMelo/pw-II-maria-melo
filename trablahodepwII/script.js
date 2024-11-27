/*const form =document.getElementById("formperfil");
const nomedeperfil = document.getElementById("nomeperfil");
const email = document.getElementById("emailperfil");
const password = document.getElementById("senhaperfil");

if(password==1234){
    window.location.href="index.php";
    alert=("Voce agora e adiministrador,podera modificar,excluir e adicionar novoas conteudos a esta pagina")
    formItem.className = "btncrudclassnao"
}

form.addEventListener("submit",(event)=>{
    event.preventDefault()
    checkInputUsername();
    checkInputUseremail();
    checkInputUsersenha();
    window.location.href="index.php";
    alert=("Voce agora e adiministrador,podera modificar,excluir e adicionar novoas conteudos a esta pagina")
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

formItem.className = "formperfil"
}*/


// Abrir modal de adicionar
function openModalAdicionar() {
    document.getElementById("modalAdicionar").style.display = "hidden";
}

// Fechar modal de adicionar
function closeModalAdicionar() {
    document.getElementById("modalAdicionar").style.display = "none";
}

// Abrir modal de editar com dados preenchidos
function openModalEditar(id, titulo, reportagem, img, imgNome) {
    document.getElementById("edit-id").value = id;
    document.getElementById("edit-titulo").value = titulo;
    document.getElementById("edit-reportagem").value = reportagem;
    document.getElementById("edit-img").value = img;
    document.getElementById("edit-img-nome").value = imgNome;
    document.getElementById("modalEditar").style.display = "hidden";
}

// Fechar modal de editar
function closeModalEditar() {
    document.getElementById("modalEditar").style.display = "none";
}
