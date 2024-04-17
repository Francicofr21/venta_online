<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de accesorios</title>
    <link rel="stylesheet" href="style.css">
    <!-- Agrega jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Agrega Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


</head>

<body>

    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="icono" alt="menu">
            </label>

            <form id="searchForm" action="#" method="POST">
                <label for="busqueda">Buscar:</label>
                <input class="busca" type="text" id="busqueda" name="q" placeholder="Ingrese su búsqueda aquí">
                <button type="submit" class="buscar">Buscar</button>
            </form>

            <nav class="navbar">
                <ul>
                    <li>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a href=" home.php" class=" navbar-link" id="inicio-link">
                                Inicio
                            </a>
                            <div class="navbar-dropdown" id="inicio-dropdown">
                                <a class="navbar-item">
                                    nuevo
                                </a>
                                <a class="navbar-item">
                                    listar
                                </a>
                                <a class="navbar-item">
                                    buscar
                                </a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="carrito.html"><i class="fas fa-shopping-cart"></i> Carrito</a>
                    <li><a href="/pagina/controladores/cerrarSesion.php">Cerrar Sesión</a></li>

                </ul>
            </nav>

        </div>
        <section class="search-results container" style="display: none;">
            <h2>Resultados de la búsqueda</h2>
            <table id="resultadosBusqueda"></table>
            </ <!-- Aquí mostrarás los resultados de la búsqueda -->
        </section>
        <div class="header-content container">

            <div class="header-txt">
                <h1>Encuentra tu <span>accesorio</span> <br> perfecto para computadoras aquí</h1>
                <p>
                    Explora nuestra amplia selección de accesorios para computadoras, desde potentes mouse y teclados
                    mecánicos hasta componentes de vanguardia. Ofrecemos productos de alta calidad que mejorarán tu
                    experiencia informática.
                </p>
                <div class="buttons">
                    <a href="Informacion.html" class="btn-1">Mas Información</a>
                    <a href="accesorios.html" class="btn-1">Explorar Accesorios</a>
                </div>
            </div>
        </div>



    </header>

    <section class="popular container">

        <h2>Accesorios populares</h2>
        <div class="popular-content slider">
            <div><img src="images/g1.jpg" alt=""></div>
            <div><img src="images/g2.jpg" alt=""></div>
            <div><img src="images/g3.jpg" alt=""></div>
            <div><img src="images/g4.jpg" alt=""></div>
            <div><img src="images/g5.jpg" alt=""></div>
            <div><img src="images/g6.jpg" alt=""></div>

        </div>
    </section>


    <main class="product container">

        <h2>Todos los Accesorios disponibles</h2>

        <div class="product-content">
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l1.jpg" alt="">
                    <div class="product-txt">
                        <h3>cargador</h3>
                        <div class="price">
                            <p>$10</p>
                            <input type="hidden" name="id" value="2">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>
            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l2.jpg" alt="">
                    <div class="product-txt">
                        <h3>Smartwatches</h3>
                        <div class="price">
                            <p>$90</p>
                            <input type="hidden" name="id" value="7">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>
            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l3.jpg" alt="">
                    <div class="product-txt">
                        <h3>Cámaras de seguridad inteligentes</h3>
                        <div class="price">
                            <p>$500</p>
                            <input type="hidden" name="id" value="1">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l4.jpg" alt="">
                    <div class="product-txt">
                        <h3>Teclado</h3>
                        <div class="price">
                            <p>$500</p>
                            <input type="hidden" name="id" value="8">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l5.jpg" alt="">
                    <div class="product-txt">
                        <h3>computadoras gamer</h3>
                        <div class="price">
                            <p>$1500</p>
                            <input type="hidden" name="id" value="5">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l6.jpg" alt="">
                    <div class="product-txt">
                        <h3>Consolas de video juego</h3>
                        <div class="price">
                            <p>$500</p>
                            <input type="hidden" name="id" value="6">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>

            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l7.jpg" alt="">
                    <div class="product-txt">
                        <h3>Combo de teclado y mouse para videojuegos 60</h3>
                        <div class="price">
                            <p>$40</p>
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l8.jpg" alt="">
                    <div class="product-txt">
                        <h3>Cargador inalámbrico</h3>
                        <div class="price">
                            <p>$20</p>
                            <input type="hidden" name="id" value="3">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>
            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l9.jpg" alt="">
                    <div class="product-txt">
                        <h3>Teclado y mouse inalámbricos RGB retroiluminados para juegos</h3>
                        <div class="price">
                            <p>$35</p>
                            <input type="hidden" name="id" value="9">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>

            </form>

            <form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">
                <div class="product-1">
                    <img src="images/l2.jpg" alt="">
                    <div class="product-txt">
                        <h3>Smartwatches 2</h3>
                        <div class="price">
                            <p>$30</p>
                            <input type="hidden" name="id" value="10">
                            <button type="submit" class="btn-2">Comprar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </main>



    <section class=" contact container ">
        <div class=" contact-content">
            <h3>Subscribete a nuestro blog</h3>
            <form>
                <input type="email" placeholder="Escribe tu correo">
                <input type="submit" class="btn-3" value="Enviar">
            </form>
        </div>
    </section>

    <footer class="footer container">

        <div class="link">
            <a href="#" class="logo">Logo</a>
        </div>

        <div class="link">
            <ul>
                <li><a href="/home.php">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>

    </footer>
    <script>
    $(document).ready(function() {
        $('#searchForm').submit(function(event) {
            event.preventDefault();
            // Ocultar todas las secciones excepto la del navbar y la de resultados de búsqueda
            $('.header-content,.popular,.contact, main').hide();
            $('.search-results').show(); // Mostrar la sección de resultados de búsqueda
            // Aquí puedes enviar la solicitud de búsqueda y manejar los resultados
            // Puedes usar AJAX para esto
            var searchTerm = $('#busqueda').val();
            console.log(searchTerm);
            // Enviar la solicitud POST al servidor PHP
            $.ajax({
                url: '/pagina/controladores/buscarProducto.php',
                method: 'POST',
                data: {
                    searchTerm: searchTerm
                },
                success: function(response) {
                    // Aquí maneja la respuesta del servidor, que debería ser los datos de los productos encontrados
                    // Suponiendo que el servidor responde con los datos en formato JSON
                    console.log(response);
                    var productos = JSON.parse(response);

                    // Construir la tabla con los resultados de la búsqueda
                    tableContent =
                        '<div class="container">'; // Container centrado
                    tableContent +=
                        '<table style="width: 100%; max-width: 1200px; background-color: #fff;">'; // Tabla con fondo blanco sólido
                    tableContent +=
                        '<thead><tr><th style="text-align: left;">Imagen</th><th style="text-align: left;">Nombre</th><th style="text-align: left;">Precio</th><th>Acciones</th></tr></thead><tbody>'; // Encabezados y estilos para las celdas
                    productos.forEach(function(producto) {
                        // Construir la URL completa de la imagen
                        var imageUrl = 'images/' + producto.imagen;
                        var imagenHtml = '<img src="' + imageUrl + '" alt="' +
                            producto.nombre +
                            '" style="max-width: 100px; height: auto;" />';
                        tableContent += '<tr><td>' + imagenHtml + '</td><td>' +
                            producto.nombre + '</td><td>' + producto.precio +
                            '</td><td>'; // Añadir estilos para las celdas
                        tableContent +=
                            '<form class="addToCartForm" action="/pagina/controladores/addCarrito.php" method="POST">';
                        tableContent += '<input type="hidden" name="id" value="' +
                            producto.id + '">';
                        tableContent +=
                            '<button type="submit" class="btn-2">Comprar</button>';
                        tableContent += '</form></td></tr>';
                    });
                    tableContent += '</tbody></table>';

                    // Mostrar la tabla dentro de la sección search-results
                    $('.search-results').html(tableContent).show();

                    // Ocultar otras secciones si es necesario
                    $('.header-content, .popular, .contact, main').hide();
                },
                error: function(xhr, status, error) {
                    // Manejar errores si la solicitud falla
                    console.error(xhr.responseText);
                }
            });
        });
    });

    $(document).ready(function() {
        // Agregar un event listener al contenedor principal donde aparecerán los formularios
        $('.search-results').on('submit', '.addToCartForm', function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

            var formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Si la operación fue exitosa, mostrar mensaje de éxito
                        alert("Producto agregado al carrito");
                    } else {
                        // Si hubo algún error, mostrar el mensaje de error
                        alert("Error: " + data.error);
                    }
                })
                .catch(error => {
                    // Si hubo un error de red u otro error, mostrar un mensaje de error genérico
                    alert("Error: No se pudo agregar el producto al carrito");
                    console.log('Error:', error);
                });
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            infinite: true, // Agrega esta opción para reiniciar el slider al llegar al final
            pauseOnFocus: false, // Evita que el slider se pause al hacer clic
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    </script>
    <script>
    // Agrega el event listener a todos los formularios con la clase "addToCartForm"
    document.querySelectorAll(".addToCartForm").forEach(form => {
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

            var formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Si la operación fue exitosa, mostrar mensaje de éxito
                        alert("Producto agregado al carrito");
                    } else {
                        // Si hubo algún error, mostrar el mensaje de error
                        alert("Error: " + data.error);
                    }
                })
                .catch(error => {
                    // Si hubo un error de red u otro error, mostrar un mensaje de error genérico
                    alert("Error: No se pudo agregar el producto al carrito");
                    console.log('Error:', error);
                });
        });
    });
    </script>




</body>

</html>