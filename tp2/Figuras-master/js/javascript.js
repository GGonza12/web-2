"use strict"

let form = document.querySelector("#cal-filt");
if (form) {
    form.addEventListener('submit', calcular);
}

async function calcular(e) {
    e.preventDefault();
    let data = new FormData(form);

    let numero1 = data.get('area');
    let op = data.get('filtro');

    // construir url (sumar/2/3)
    let url = `filtro/${numero1}`;  // op + "/" + numero1 + / ""
    
    // realizo el llamado
    // window.location.href = url;

    let response = await fetch(url);
    let resultado = await response.text();
    document.querySelector('#resultado').innerHTML = resultado;
}