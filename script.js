const cesta = document.getElementById('cesta');
const elementos1 = document.getElementById('lista-1');
const elementos2 = document.getElementById('lista-2');
const elementos3 = document.getElementById('lista-3');
const lista = document.querySelector('#lista-cesta tbody');
const vaciarCestaBtn = document.getElementById('vaciar-cesta');

cargarEventListeners();

function cargarEventListeners(){
    elementos1.addEventListener('click', comprarElemento);
    elementos2.addEventListener('click', comprarElemento);
    elementos3.addEventListener('click', comprarElemento);

    cesta.addEventListener('click',eliminarElemento);
    vaciarCestaBtn.addEventListener('click',vaciarCesta);
}
function comprarElemento(e){
    e.preventDefault();
    if(e.target.classList.contains('agregar-cesta')){
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}
function leerDatosElemento(elemento){
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        titulo: elemento.querySelector('h3').txtContent,
        precio: elemento.querySelector('.precio').txtContent,
        id: elemento.querySelector('a').getAttribute('data-id')
    }
    insertarCesta(infoElemento);
}
function insertarCesta(elemento){
    const row=document.createElement('tr');
    row.innerHTML = `
       <td>
           <img src = "${elemento.imagen}"width=100>
       </td>
       <td>
           ${elemento.titulo}
       </td>
       <td>
          ${elemento.precio}
       </td>
       <td>
         <a herf="#" class="borrar" data-id = "${elemento.id}">x</a>
       </td>
    `;
    lista.appendChild(row);
}

function eliminarElemento(e){
    e.preventDefault();
    let elemento,
        elementoId;
    if(e.target.classList.contains('borrar')){
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAttribute('data-id');
    }
}
function vaciarCesta(){
    while(lista.firstChild){
        lista.removeChild(lista.firstChild)   
    }
    return false;
}