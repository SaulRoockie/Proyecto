<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Explicacion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100;400;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>


    <?php
    include('nav.php');
    ?>

    <div class="hero">
        <div class="btn-box">
            <button id="btn1" onclick="openHTML()">Explicacion </button>
            <button id="btn2" onclick="openCSS()">Ejercicios</button>
            <button id="btn3" onclick="openJAVA()">Materiales</button>
        </div>
        <div id="content1" class="content">
            <div class="content-left">
                <h4> Explicacion</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Blanditiis delectus dolorum sapiente animi ad quasi! Ut aperiam optio aliquam.
                      Hic aliquam in quisquam commodi corporis autem quod placeat voluptatem maxime
                </p>
                <a class="boton" href="#">Mostrar video</a>
            </div>
            <div class="content-right">
                <img src="img/programacion.png" alt="">
            </div>
        </div>

        <div id="content2" class="content">
            <div class="content-left">
                <h4> EJERCICIO </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Blanditiis delectus dolorum sapiente animi ad quasi! Ut aperiam optio aliquam.
                      Hic aliquam in quisquam commodi corporis autem quod placeat voluptatem maxime
                </p>
                <a class="boton" href="#">Mostrar video</a>
            </div>
            <div class="content-right">
                <img src="img/algo.jpg" alt="">
            </div>
        </div>

        <div id="content3" class="content">
            <div class="content-left">
                <h4> MATERIALES </h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Blanditiis delectus dolorum sapiente animi ad quasi! Ut aperiam optio aliquam.
                      Hic aliquam in quisquam commodi corporis autem quod placeat voluptatem maxime
                </p>
                <a class="boton" href="#">Mostrar video</a>
            </div>
            <div class="content-right">
                <img src="img/algo.jpg" alt="">
            </div>
        </div>
    </div>

    <script>
        var content1 = document.getElementById("content1");
        var content2 = document.getElementById("content2");
        var content3 = document.getElementById("content3");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");

        function openHTML(){
            content1.style.transform = "translateX(0)";
            content2.style.transform = "translateX(100%)";
            content3.style.transform = "translateX(100%)";
            btn1.style.color = "#f0d911";
            btn2.style.color = "#000";
            btn3.style.color = "#000";
            content1.style.transitionDelay = "0.3s";
            content2.style.transitionDelay = "0s";
            content3.style.transitionDelay = "0s";
        }   

        function openCSS(){
            content1.style.transform = "translateX(100%)";
            content2.style.transform = "translateX(0)";
            content3.style.transform = "translateX(100%)";
            btn1.style.color = "#000";
            btn2.style.color = "#f0d911";
            btn3.style.color = "#000";
            content1.style.transitionDelay = "0s";
            content2.style.transitionDelay = "0.3s";
            content3.style.transitionDelay = "0s";
        }   

        function openJAVA(){
            content1.style.transform = "translateX(100%)";
            content2.style.transform = "translateX(100%)";
            content3.style.transform = "translateX(0)";
            btn1.style.color = "#000";
            btn2.style.color = "#000";
            btn3.style.color = "#f0d911";
            content1.style.transitionDelay = "0s";
            content2.style.transitionDelay = "0s";
            content3.style.transitionDelay = "0.3s";
        }   
    </script>


    <?php
    include('footer.php');
    ?>


</body>
</html>