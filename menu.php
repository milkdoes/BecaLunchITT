<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menu</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <!--[if lt IE 8]>
            <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
            </div>
        <![endif]-->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="js/html5.js"></script>
        <![endif]-->
    </head>
    <body id="page2">
        <!--==============================header=================================-->
        <header>
            <div id="rowTop"></div>
            <div class="row-bot">
                <div class="row-bot-bg">
                    <div class="main">
                        <h2>Me<span>nu</span></h2>
                    </div>
                </div>
            </div>
        </header>
        <!--==============================content================================-->
        <section id="content"><div class="ic"></div>
            <div class="main">
                <div class="wrapper">
                    <article class="col-1">
                        <div class="indent-left">
                            <div class="img-indent-bot">
                                <h3 class="prev-indent-bot">Ofertas especiales</h3>
                                <div class="wrapper img-indent-bot">
                                    <figure class="img-indent"><img src="images/page2-img1.jpg" alt=""></figure>
                                    <div class="extra-wrap">
                                        <h5>Papas mexicanas </h5>
                                        ricas papas mexicanas
                                    </div>
                                </div>
                                <a class="button-1" href="#">Leer mas</a>
                            </div>
                            <h3 class="p1">Las mas compradas</h3>


                            <div id="slider">
                                <div>
                                    <div class="p2">
                                        <figure><a href="#"><img src="images/page2-img2.jpg" alt=""></a></figure>
                                        <h5>frutas</h5>
                                        (precio $13.00)
                                    </div>
                                    <div class="p2">
                                        <figure><a href="#"><img src="images/page2-img5.jpg" alt=""></a></figure>
                                        <h5>espaggeti</h5>
                                        (precio $20.00)
                                    </div>
                                    <figure><a href="#"><img src="images/page2-img8.jpg" alt=""></a></figure>
                                    <h5>guacamole</h5>
                                    (precio $15.00)
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-2">
                        <h3>Price List</h3>
                        <ul class="price-list p2">
                            <table align="left" >
                                <tr>

                                    <th width="150">nombre</th>
                                    <th width="200">descripcion</th>
                                    <th width="120">estatus</th>
                                    <th>precio</th>
                                </tr>
<?php
$connec = mysqli_connect ('localhost', 'root', "");
$sql = "SELECT  nombre, descripcion, estatus, precio FROM ordenes.platillo";
$result = mysqli_query($connec, $sql);
if(mysqli_num_rows ($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>
<tr>

    <td><?=$row['nombre']?></td>
    <td><?=$row['descripcion']?></td>
    <td><?=$row['estatus']?></td>
    <td>$<?=$row['precio']?>.00</td>
</tr>
<?php
    }
}
?>
                            </table>

                        </ul>
                        <a class="button-2" href="#">Read More</a>
                    </article>
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
        <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="startFunctions.js"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
        <script src="js/FF-cash.js" type="text/javascript"></script>
        <script src="js/jquery.equalheights.js" type="text/javascript"></script>
        <script src="js/jquery.bxSlider.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#slider').bxSlider({
    pager: true,
        controls: false,
        moveSlideQty: 1,
        displaySlideQty: 3
});
});
</script>
<script type="text/javascript"> Cufon.now(); </script>
    </body>
</html>
