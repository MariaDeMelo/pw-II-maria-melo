

function openaModalAdd() {
    const modal = document.getElementById('modalAdicionar').style.display = "block";
}

function closeModalAdd() {
    const modal = document.getElementById('modalAdicionar').style.display = "none"; // Esconde a modal
}

function openModalEditar(id, titulo, reportagem, img, imgNome) {
    const modal = document.getElementById('modalEditar').style.display = "block";
    document.getElementById("edit-id").value = id;
    document.getElementById("edit-titulo").value = titulo;
    document.getElementById("edit-reportagem").value = reportagem;
    document.getElementById("edit-img").value = img;
    document.getElementById("edit-img-nome").value = imgNome;
    document.getElementById("modalEditar").style.display = "hidden";
}

function closeModalEditar() {
    const modal = document.getElementById('modalEditar');
    modal.classList.remove('active').style.display = "none";
}
