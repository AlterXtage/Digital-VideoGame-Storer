const productos = [
    {
        id: "juego-01",
        titulo: "juego 01",
        imagen: "./img/juego.jpg",
        categoria: {
            nombre: "juegos",
            id: "juegos",
        },
        precio: 999
    },
    {
        id: "juego-02",
        titulo: "juego 02",
        imagen: "./img/juego.jpg",
        categoria: {
            nombre: "juegos",
            id: "rpg"
        },
        precio: 999
    },
    {
        id: "juego-03",
        titulo: "juego 03",
        imagen: "./img/juego.jpg",
        categoria: {
            nombre: "juegos",
            id: "soulslike"
        },
        precio: 999
    },
    {
        id: "juego-04",
        titulo: "juego 04",
        imagen: "./img/juego.jpg",
        categoria: {
            nombre: "juegos",
            id: "metroidvania"
        },
        precio: 999
    },
    {
        id: "juego-05",
        titulo: "juego 05",
        imagen: "./img/juego.jpg",
        categoria: {
            nombre: "juegos",
            id: "guerra"
        },
        precio: 999
    }
];

const contenedorProductos = document.querySelector("#contenedor-productos");
const botonesCategorias = document.querySelectorAll(".boton-categoria"); // Usar querySelectorAll para obtener todos los botones
let botonesAgregar = document.querySelectorAll(".producto-agregar");

function cargarProductos(productosElegidos) {
    contenedorProductos.innerHTML = "";

    productosElegidos.forEach(producto => {
        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
            <img class="producto-imagen" src="${producto.imagen}" alt="${producto.titulo}">
            <div class="producto-detalles">
                <h3 class="producto-titulo">${producto.titulo}</h3>
                <p class="producto-precio">${producto.precio}</p>
                <button class="producto-agregar" id="${producto.id}">Agregar</button>
            </div>
        `;
        contenedorProductos.appendChild(div);
    });

    actualizarBotonesAgregar();
    
}

// Cargar todos los productos al inicio
cargarProductos(productos);

// Iterar sobre los botones de categoría y agregar evento click a cada uno
botonesCategorias.forEach(boton => {
    boton.addEventListener("click", (e) => {
        // Remover la clase 'active' de todos los botones de categoría
        botonesCategorias.forEach(boton => boton.classList.remove("active"));
        // Agregar la clase 'active' solo al botón clickeado
        e.currentTarget.classList.add("active");
        
        // Obtener la categoría seleccionada
        const categoriaSeleccionada = e.currentTarget.id;
        
        // Filtrar productos según la categoría seleccionada
        if (categoriaSeleccionada === "Todos") {
            cargarProductos(productos); // Mostrar todos los productos
        } else {
            const productosFiltrados = productos.filter(producto => producto.categoria.id === categoriaSeleccionada);
            cargarProductos(productosFiltrados); // Mostrar productos filtrados
        }
    });
});

function actualizarBotonesAgregar(){
    botonesAgregar = document.querySelectorAll(".producto-agregar");

    botonesAgregar.forEach(boton => {
        boton.addEventListener("click", agregarAlCarrito);
    });
}

let productosEnCarrito;

const productosEnCarritoLS = localStorage.getItem("productos-en-carrito");


if (productosEnCarritoLS){
    productosEnCarrito = JSON.parse(productosEnCarritoLS);
}else{
    productosEnCarrito = [];
}




function agregarAlCarrito(e){

    const idboton = e.currentTarget.id;
    const productoAgregado = productos.find(producto => producto.id === idboton);
    
    if(productosEnCarrito.some(producto => producto.id === idboton)){
        const index = productosEnCarrito.findIndex(producto => producto.id === idboton);
        productosEnCarrito[index].cantidad++;

    }else{
    productoAgregado.cantidad = 1;
    productosEnCarrito.push(productoAgregado);
    }

    localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
    console.log(localStorage);
}