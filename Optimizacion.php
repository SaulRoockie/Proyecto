<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimizacion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/optimizacion.css">
</head>

<body>

    <nav class="menu">
        <div class="contenedor__enlaces">
            <a class="navegacion__enlace" href="nosotros.html">Bloque 1</a>
            <a class="navegacion__enlace" href="Optimizacion.php">Bloque 2</a>
            <a class="navegacion__enlace" href="nosotros.html">Bloque 3</a>
            <a class="navegacion__enlace" href="nosotros.html">Bloque 4</a>
        </div>
        <div class="contenedor__exit">
            <i class="fa-regular fa-circle-xmark fa-2x exit__icono"></i>
        </div>
    </nav>

    <header>
        <div class="contenedor__logos">
            <a href="https://www.acatlan.unam.mx/" target="_black">
                <img class="logo__mac" src="img/logo-MAC.png">
            </a>

            <i class="fa-solid fa-bars fa-2x menu__icono"></i>
        </div>

        <h1>Optimizacion</h1>

        <img class="fondo__header" src="img/fes.jpg">
    </header>

    <div class="contenidos">
        <main class="blog margen">
            <h2>Temario</h2>

            <article class="entrada">
                <div class="imagen__entrada">
                    <img src="img/programacion.png" alt="">
                </div>
                <div>
                    <h3 class="temas">2.1 Concepto de modelo, su clasificación y estructura</h3>
                    <p>La modelación matemática es un intento de describir alguna parte del mundo real en términos matemáticos.  En un modelo matemático se establece un conjunto de relaciones (de igualdad y/o de desigualdad) definidas en un conjunto de variables que reflejan la esencia de los fenómenos en el objeto de estudio. Existen diferentes modelos y aquí proporcionamos una clasificación de algunos</p>
                    <a href="Explicacion.php" class="boton boton--primario">Leer mas</a>
                </div>
            </article>

            <article class="entrada">
                <div class="imagen__entrada">
                    <img src="img/programacion.png" alt="">
                </div>
                <div>
                    <h3 class="temas">2.2 Modelos de programación lineal: características, estructura, formulación de modelos
                        matriciales</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Quas aliquam incidunt ea nihil suscipit 
                        amet porro eligendi perferendis, ullam laboriosam? Maxime eius 
                        laborum est placeat ipsa velit illum impedit a.</p>
                    <a href="#" class="boton boton--primario">Leer mas</a>
                </div>
            </article>

            <article class="entrada">
                <div class="imagen__entrada">
                    <img src="img/programacion.png" alt="">
                </div>
                <div>
                    <h3 class="temas">2.3 Planteamientos de modelos. Modelos de planeación de producción, de dietas y de mezclas. </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Quas aliquam incidunt ea nihil suscipit 
                        amet porro eligendi perferendis, ullam laboriosam? Maxime eius 
                        laborum est placeat ipsa velit illum impedit a.</p>
                    <a href="#" class="boton boton--primario">Leer mas</a>
                </div>
            </article>
        </main>

        <aside class="sidebar">
            <h2>Referencias</h2>

            <ul class="Autores">
                <li class="widget-autores">
                    <h4 class="autores">Ackoff, R. (2002)</h4>
                    <div>
                        <img src="img/Paradigma.jpg" alt="">
                    </div>
                    <a href="libros.php" class="boton boton--secundario">Leer libro</a>
                </li>

                <li class="widget-autores">
                    <h4 class="autores"> Hadley, G. (1988)</h4>
                    <div>
                        <img src="img/Linear-programming.jpg" alt="">
                    </div>
                    <a href="#" class="boton boton--secundario">Leer libro</a>
                </li>

                <li class="widget-autores">
                    <h4 class="autores"> Hillier y Lieberman. (2004)</h4>
                    <div>
                        <img src="img/Investigacion-de-operaciones.jpg" alt="">
                    </div>
                    <a href="#" class="boton boton--secundario">Leer libro</a>
                </li>
            </ul>
        </aside>

    </div>

    <?php
    include('footer.php');
    ?>

    <script src="https://kit.fontawesome.com/dd49de8bb8.js" crossorigin="anonymous"></script>
    <script src="js/optimizacion.js"></script>
</body>
</html>