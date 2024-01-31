<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100;400;500&display=swap" rel="stylesheet">
    <title>Document</title>
    <link  rel="stylesheet" href="css/libros.css"></link>
</head>
<body>

    <?php
    include('nav.php');
    ?>

    <h2 class="titulo">LIBROS</h2>

    <main class="contenedor__libros">
        <div class="grid">
            <div class="libro">
                <a href="libro.html">
                <img class="libro__imagen" src="img\Linear-programming.jpg" alt="imagen camisa">
                <div class="libro__informacion">
                    <p class="libro__nombre">Hadley, G</p>
                    <p class="libro__anio">2002</p>
                </div>
                </a>
             </div>

             <div class="libro">
                <a href="libro.html">
                <img class="libro__imagen" src="img\Paradigma.jpg" alt="imagen camisa">
                <div class="libro__informacion">
                    <p class="libro__nombre">Ackoff, R</p>
                    <p class="libro__anio">1988</p>
                </div>
                </a>
             </div> 

             <div class="libro">
                <a href="libro.html">
                <img class="libro__imagen" src="img\Investigacion-de-operaciones.jpg" alt="imagen camisa">
                <div class="libro__informacion">
                    <p class="libro__nombre"> Hillier y Lieberman</p>
                    <p class="libro__anio">2004</p>
                </div>
                </a>
             </div> 

             <div class="libro">
                <a href="libro.html">
                <img class="libro__imagen" src="img\Linear-programming.jpg" alt="imagen camisa">
                <div class="libro__informacion">
                    <p class="libro__nombre">Ackoff, R</p>
                    <p class="libro__anio">2002</p>
                </div>
                </a>
             </div> 

             <div class="libro">
                <a href="libro.html">
                <img class="libro__imagen" src="img\Linear-programming.jpg" alt="imagen camisa">
                <div class="libro__informacion">
                    <p class="libro__nombre">NOmbre del autor</p>
                    <p class="libro__anio">2002</p>
                </div>
                </a>
             </div> 
        </div>



    </main>


    <?php
    include('footer.php');
    ?>

    
</body>
</html>