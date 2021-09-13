"use strict";
document.querySelector('#formulario').addEventListener('submit', function(e) {
	e.preventDefault();

    const data = new URLSearchParams(new FormData(this));
    console.log(data);

    fetch('datos.php', {
        method: 'post',
        body: data,
    })
    .then(response => response.text()) // el servidor nos devuelve HTML
    .then(html => {
        document.querySelector('#container').innerHTML = html;
    })
    .catch(error => console.log(error));


});
