"use strict"

let form = document.querySelector("#insert-form");
if (form) {
    form.addEventListener('submit', insertar);
}

async function insertar(e) {
    e.preventDefault();
    let data = new FormData(form);
    console.log('alo');
    let deudor = data.get('deudor');
    let cuota = data.get('cuota');
    let capital = data.get('capital');
    let fecha = data.get('fecha');
    

    // construir url (sumar/2/3)
    let url = `insert/${deudor}/${cuota}/${capital}/${fecha}`;  // op + "/" + numero1 + / ""
    
    // realizo el llamado
    // window.location.href = url;

    let response = await fetch(url);
    let resultado = await response.text();
    document.querySelector('#resultado').innerHTML = resultado;

}