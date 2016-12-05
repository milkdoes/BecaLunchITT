<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Catalogo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
    </head>
    <body id="page3">
        <!--==============================header=================================-->
        <header>
            <div id="rowTop"></div>
            <div class="row-bot">
                <div class="row-bot-bg">
                    <div class="main">
                        <h2>Cata<span>logo</span></h2>
                    </div>
                </div>
            </div>
        </header>
        <!--==============================content================================-->
        <section id="content"><div class="ic"></div>
            <div class="main">
                <div class="container">
                    <h3 class="prev-indent-bot">Catalogo</h3>
                    <div id="slider-2">
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-img1.jpg" alt=""></a></figure>

                                <table align="left" >


<?php
$connec = mysqli_connect ('localhost', 'root', "");
$sql = "SELECT  nombre, descripcion, estatus, precio FROM ordenes.platillo where id_platillo=1";
$result = mysqli_query($connec, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>


<tr><td><?=$row['nombre']?></td></tr>
<tr><td><?=$row['descripcion']?></td></tr>
<tr><td>$<?=$row['precio']?>.00</td></tr>

<?php
    }
}
?>
                                </table>
                                <br>
                                <br>
                                <br>
                                <a class="button-1" href="#">comprar</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-img5.jpg" alt=""></a></figure>
                            <table align="left" >
<?php
$connec = mysqli_connect ('localhost', 'root', "");
$sql = "SELECT  nombre, descripcion, estatus, precio FROM ordenes.platillo where id_platillo=2";
$result = mysqli_query($connec, $sql);
if(mysqli_num_rows ($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>


<tr><td><?=$row['nombre']?></td></tr>
<tr><td><?=$row['descripcion']?></td></tr>
<tr><td>$<?=$row['precio']?>.00</td></tr>

<?php
    }
}
?>
                            </table>
                            <br>
                            <br>
                            <br>
                            <a class="button-1" href="#">comprar</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--==============================footer=================================-->
        <footer>
            <div class="main">
                <div class="aligncenter">
                    <span>Catering.com &copy; 2012</span>
                </div>
            </div>
        </footer>
    </body>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="startFunctions.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#slider-2').bxSlider({
        pager: true,
        controls: false,
        moveSlideQty: 1,
        displaySlideQty: 4
    });
    $("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
});
    </script>
    <script type="text/javascript"> Cufon.now(); </script>
</html>
