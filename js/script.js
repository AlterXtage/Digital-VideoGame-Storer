// Base de datos de productos
const productos = [
    {
        id: "juego-01",
        titulo: "Juego 01",
        imagen: "./img/juego.jpg",
        categoria: { nombre: "juegos", id: "todos" },
        precio: 999
    },
    {
        id: "juego-02",
        titulo: "Juego 02",
        imagen: "./img/juego.jpg",
        categoria: { nombre: "RPG", id: "rpg" },
        precio: 999
    },
    {
        id: "juego-03",
        titulo: "Juego 03",
        imagen: "./img/juego.jpg",
        categoria: { nombre: "Soulslike", id: "soulslike" },
        precio: 999
    },
    {
        id: "juego-04",
        titulo: "Juego 04",
        imagen: "./img/juego.jpg",
        categoria: { nombre: "Metroidvania", id: "metroidvania" },
        precio: 999
    },
    {
        id: "juego-05",
        titulo: "Juego 05",
        imagen: "./img/juego.jpg",
        categoria: { nombre: "Guerra", id: "guerra" },
        precio: 999
    }
];

// Elementos del DOM
const contenedorProductos = document.getElementById("contenedor-productos");
const barraBusqueda = document.querySelector(".search-bar input");
const botonBusqueda = document.querySelector(".search-bar button");
const botonesCategorias = document.querySelectorAll(".boton-categoria");
const tituloPrincipal = document.getElementById("titulo-principal");

// Función para renderizar productos
function renderizarProductos(productosFiltrados) {
    contenedorProductos.innerHTML = ""; // Limpiar productos previos

    if (productosFiltrados.length === 0) {
        contenedorProductos.innerHTML = "<p>No se encontraron productos.</p>";
        return;
    }

    productosFiltrados.forEach(producto => {
        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
            <img class="producto-imagen" src="${producto.imagen}" alt="${producto.titulo}">
            <div class="producto-detalles">
                <h3 class="producto-titulo">${producto.titulo}</h3>
                <p class="producto-precio">${producto.precio}</p>
                <button class="producto-agregar" id="${producto.id}">Agregar al carrito</button>
            </div>
        `;
        contenedorProductos.appendChild(div);
    });
}

// Mostrar todos los productos al cargar
renderizarProductos(productos);

// Búsqueda de productos
botonBusqueda.addEventListener("click", () => {
    const query = barraBusqueda.value.trim().toLowerCase();
    const resultados = productos.filter(producto =>
        producto.titulo.toLowerCase().includes(query) ||
        producto.categoria.nombre.toLowerCase().includes(query)
    );
    tituloPrincipal.textContent = "Resultados de la búsqueda";
    renderizarProductos(resultados);
});

// Filtrado por categoría
botonesCategorias.forEach(boton => {
    boton.addEventListener("click", () => {
        const categoriaId = boton.id;

        // Marcar botón activo
        botonesCategorias.forEach(btn => btn.classList.remove("active"));
        boton.classList.add("active");

        // Filtrar productos
        const productosFiltrados = categoriaId === "Todos"
            ? productos
            : productos.filter(producto => producto.categoria.id === categoriaId.toLowerCase());

        tituloPrincipal.textContent = categoriaId === "Todos" 
            ? "Todos los juegos" 
            : `Categoría: ${categoriaId}`;
        renderizarProductos(productosFiltrados);
    });
});


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
                <button class="producto-agregar" id="${producto.id}">Agregar al carrito</button>
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

// Referencia al contenedor de notificaciones
const notification = document.getElementById('notification');

// Función para mostrar la notificación
function showNotification(message) {
    notification.textContent = message;
    notification.classList.add('show');
    notification.classList.remove('hidden');

    // Ocultar la notificación después de 3 segundos
    setTimeout(() => {
        notification.classList.remove('show');
        notification.classList.add('hidden');
    }, 3000);
}

// Simulación de añadir un producto al carrito
document.addEventListener('click', (event) => {
    if (event.target.classList.contains('producto-agregar')) {
        const productName = event.target.dataset.productName || 'producto';
        showNotification(`${productName} añadido al carrito`);
    }
});
