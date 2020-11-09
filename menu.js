window.onload = function () {
    // Variables
    let baseDeDatos = [
        {
            id: 1,
            nombre: 'Cafe con Leche',
            precio: 1.50,
            imagen: "imagenes/cafe-leche.jpg"
        },
        {
            id: 2,
            nombre: 'Coca-Cola',
            precio: 1.70,
            imagen: ''
        },
        {
            id: 3,
            nombre: 'Panini',
            precio: 2.40,
            imagen: ''
        },
        {
            id: 4,
            nombre: 'Donunt / Crossant ',
            precio: 10.20,
            imagen: ''
        },
        {
            id: 5,
            nombre: 'Sopa',
            precio: 4,
            imagen: ''
        },
        {
            id: 6,
            nombre: 'Pollo Rebozado',
            precio: 1.70,
            imagen: ''
        },
        {
            id: 7,
            nombre: 'Arroz',
            precio: 2.40,
            imagen: ''
        },
        {
            id: 8,
            nombre: 'Paella',
            precio: 10.20,
            imagen: ''
        }

    ]
    let items = document.getElementById("items");
    let carrito = [];
    let total = 0;
    let carritoItem = document.getElementById("carrito");
    let totalItem = document.getElementById("total");
    let botonVaciarItem = document.getElementById("boton-vaciar");
    let botonEnviarItem = document.getElementById("boton-pedir");
    let i=0;

    // Funciones
    function renderItems() {
        var hoy = new Date();
        let momentoMenu=0;
        let limite=4
        if((hoy.getHours()>=11&&hoy.getMinutes()>30)||hoy.getHours()>11){ momentoMenu=4; limite=8 }
            for (i=momentoMenu; i<limite;i++) {
                //el meollo
                let miNodoCardBody = document.createElement('div');
                miNodoCardBody.setAttribute("class", "col");
                //Titulo
                let miNodoTitle = document.createElement('h5');
                miNodoTitle.textContent = baseDeDatos[i]['nombre'];
                //foto
                let miNodoImagen = document.createElement('input');
                miNodoImagen.setAttribute('src', baseDeDatos[i]['imagen']);
                miNodoImagen.setAttribute('type', 'image');
                miNodoImagen.setAttribute('width', "100%");
                miNodoImagen.setAttribute('height', "100%");
                miNodoImagen.setAttribute('marcador', baseDeDatos[i]['id']);
                miNodoImagen.addEventListener('click', anyadirCarrito);
                //Precio
                let miNodoPrecio = document.createElement('p');
                miNodoPrecio.textContent = baseDeDatos[i]['precio'] + 'â‚¬';
                // Insertamos
                miNodoCardBody.appendChild(miNodoImagen);
                miNodoCardBody.appendChild(miNodoTitle);
                miNodoCardBody.appendChild(miNodoPrecio);
               // miNodoCardBody.appendChild(miNodoBoton);
                items.appendChild(miNodoCardBody);
            }
    }

    function anyadirCarrito () {
        carrito.push(this.getAttribute('marcador'));
        renderizarCarrito();
    }

    function renderizarCarrito() {

        let alimentoDiv = document.createElement('div');
        alimentoDiv.setAttribute("name", carrito[carrito.length-1]);
        alimentoDiv.setAttribute("class", "Alimento");


        let alimentoTexto = document.createElement('li');
        alimentoTexto.textContent+= baseDeDatos[parseInt(carrito[carrito.length-1])-1]['nombre'];
        alimentoTexto.setAttribute("id", baseDeDatos[parseInt(carrito[carrito.length-1])-1]['precio'])

        let botonBorrar = document.createElement('button');
        botonBorrar.setAttribute("class", "btn btn-primary btn-sm");
        botonBorrar.textContent="-";
        botonBorrar.setAttribute("marcador", baseDeDatos[parseInt(carrito[carrito.length-1])-1]['id']);
        botonBorrar.addEventListener('click', borrarItemCarrito);
        
        alimentoTexto.appendChild(botonBorrar);
        alimentoDiv.appendChild(alimentoTexto);
        carritoItem.appendChild(alimentoDiv)
        
        calcularTotal(baseDeDatos[parseInt(carrito[carrito.length-1])-1]['precio']); 

    }

    function borrarItemCarrito() {
        let check = false;
        this.parentNode.parentNode.removeChild(this.parentNode);
        for(let i=0; i<carrito.length && check==false; i++){
            if(carrito[i]==this.getAttribute('marcador')) {
                delete carrito[i];
                check=true;
            }
        }
        calcularTotal(-this.parentNode.id);
    }

    function calcularTotal(precio) {

        total+=precio;
        totalItem.textContent = total;
        
    }

    function vaciarCarrito() {
        let alimentos = document.getElementsByClassName("Alimento");
        let check = false;
        for( i=0; check==false; i++){
            if(alimentos[0]){
                alimentos[0].parentNode.removeChild(alimentos[0]);
            }else{
                check=true;
            }

        }
        carrito = [];

        total=0;
        totalItem.textContent = 0;
    }

    function Enviar(){
        localStorage.setItem('pedido', carrito);
        localStorage.setItem('precio', total);
        window.location.href="../Formulari.php";
    }

    botonVaciarItem.addEventListener('click', vaciarCarrito);
    botonEnviarItem.addEventListener('click', Enviar);


    renderItems();
} 
  