let avui = new Date();
let horaActual = avui.getHours() + ":" + avui.getMinutes() + ":" + avui.getSeconds();
let canviMenu = "11:30:00";
let regExp = /(\d{1,2})\:(\d{1,2})\:(\d{1,2})/;
var s = document.createElement("script");
s.type = "text/javascript";

if(parseInt(horaActual .replace(regExp, "$1$2$3")) > parseInt(canviMenu .replace(regExp, "$1$2$3"))){
    s.src = "../js/llista_menu_migdia.js";
    $("head").append(s);
} else {
    s.src = "../js/llista_menu_mati.js";
            $("head").append(s);
}    

var carrito = JSON.parse(window.localStorage.getItem("carrito")); 
var total = JSON.parse(window.localStorage.getItem("total")); 
var totalPedido = document.getElementsByClassName("total");
var listaItems = [];


for(let i = 0; i < carrito.length; i++) {
    var node = document.createElement("LI");                 
    var textnode = document.createTextNode(baseDeDatos[carrito[i]-1].nombre);
    listaItems.push(baseDeDatos[carrito[i]-1].nombre);
    node.appendChild(textnode);                              
    document.getElementById("lista").appendChild(node);
}

totalPedido[0].innerHTML += `<span><h1>${Math.round(total * 100) / 100}€</h1></span>`;

// Guarda el array de productos y el total en dos cookies en formato JSON

var createCookie = function(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

// Guardamos los datos del carrito y del total para después enviarlo por un input hidden
document.getElementById('listaItems').value = JSON.stringify(listaItems);
document.getElementById('totalItems').value = total;
