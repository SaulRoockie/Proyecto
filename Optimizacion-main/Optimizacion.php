<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimizacion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php
    include('nav.php');
    ?>

    <div class="contenidos">
        <main class="blog margen">
            <h2>Temario</h2>
            <article class="entrada">
                <div class="imagen__entrada">
                    <img src="img/programacion.png" alt="">
                </div>

                <div>
                    <h3 class="temas">2.1 Concepto de modelo, su clasificación y estructura</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Quas aliquam incidunt ea nihil suscipit 
                        amet porro eligendi perferendis, ullam laboriosam? Maxime eius 
                        laborum est placeat ipsa velit illum impedit a.</p>
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
                    <h4 class="autores">Hernandez Perez Saul David</h4>
                    <div>
                        <img src="img/9789681861995.jpg" alt="">
                    </div>
                    <a href="libros.php" class="boton boton--secundario">Leer libro</a>
                </li>


                <li class="widget-autores">
                    <h4 class="autores">Hernandez Perez Saul David</h4>
                    <div>
                        <img src="img/9789681861995.jpg" alt="">
                    </div>
                    <a href="#" class="boton boton--secundario">Leer libro</a>

                </li>



                <li class="widget-autores">
                    <h4 class="autores">Hernandez Perez Saul David</h4>
                    <div>
                        <img src="img/9789681861995.jpg" alt="">
                    </div>
                    <a href="#" class="boton boton--secundario">Leer libro</a>

                </li>
            </ul>


        
        </aside>
    </div>

    <?php
    include('footer.php');
    ?>


</body>
</html>