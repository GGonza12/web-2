"use strict";
document.querySelector("#").addEventListener('click', function(e) {
    e.preventDefault();

    fetch('http://localhost/web2/tp1/ejer10/b/test.php')
    .then(response => response.text()) // el servidor nos devuelve HTML
    .then(html => {
        document.querySelector('#container').innerHTML = html;
    })
    .catch(error => console.log(error));
});
