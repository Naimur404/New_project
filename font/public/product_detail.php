<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/crud/config.php");
use Bitm\Product;
$id = $_GET['id'];
$_product = new Product();
$products = $_product->Show($id);

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/style.css" rel="stylesheet">

    <title>Ecommerce</title>
</head>

<body>

    <!--Markup for Header-->
    <header>
        <div id="top-header">

        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav"
                    aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.html">LIVING ROOM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">DINING & BAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BEDROOM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KITCHEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME IMPROVEMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CUSTOM</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <!--Markup for breadcrumb-->
    <section id="breadcrumb" class="mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$products['title'];?></li>
                </ol>
            </nav>
        </div>
    </section>

    <section id="wrapper" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">


                    <!------ Include the above in your HEAD tag ---------->


                    <div class="container">

                        <!-- default start -->
                        <section id="default" class="padding-top0">
            
                                    <div class="xzoom-container">
                                        <img class="xzoom" id="xzoom-default"
                                            src="<?= $webroot; ?>uploads/<?= $products['picture']; ?>"
                                            xoriginal="img/product121-700x850.jpg" />
                                        <div class="xzoom-thumbs">
                                            <a
                                                href="img/product121-700x850.jpg"><img
                                                    class="xzoom-gallery" width="80"
                                                    src="img/product122-700x850.jpg"
                                                    
                                                    title="The description goes here"></a>

                                            <a
                                                href="img/product131-700x850.jpg"><img
                                                    class="xzoom-gallery" width="80"
                                                    src="img/product132-700x850.jpg"
                                                    
                                                    title="The description goes here"></a>

                                            <a
                                                href="img/product141-700x850.jpg"><img
                                                    class="xzoom-gallery" width="80"
                                                    src="img/product142-700x850.jpg"
                                                    title="The description goes here"></a>

                                            <a
                                                href="img/product151-700x850.jpg"><img
                                                    class="xzoom-gallery" width="80"
                                                    src="img/product152-700x850.jpg"
                                                    title="The description goes here"></a>
                                        </div>
                                    </div>
                                
                                
                        </section>
                        <!-- default end -->
                    </div>



                </div>

                <div class="col-md-7">
                <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                </div>
            </div>
        </div>
    </section>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->


    <script src='https://code.jquery.com/jquery-2.1.1.js'></script>
    <script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
    <script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>

    <script>(function ($) {
            $(document).ready(function () {
                $('.xzoom, .xzoom-gallery').xzoom({ zoomWidth: 400, title: true, tint: '#333', Xoffset: 15 });
                $('.xzoom2, .xzoom-gallery2').xzoom({ position: '#xzoom2-id', tint: '#ffa200' });
                $('.xzoom3, .xzoom-gallery3').xzoom({ position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden' });
                $('.xzoom4, .xzoom-gallery4').xzoom({ tint: '#006699', Xoffset: 15 });
                $('.xzoom5, .xzoom-gallery5').xzoom({ tint: '#006699', Xoffset: 15 });

                //Integration with hammer.js
                var isTouchSupported = 'ontouchstart' in window;

                if (isTouchSupported) {
                    //If touch device
                    $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function () {
                        var xzoom = $(this).data('xzoom');
                        xzoom.eventunbind();
                    });

                    $('.xzoom, .xzoom2, .xzoom3').each(function () {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function (event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1, ls;

                            xzoom.eventmove = function (element) {
                                element.hammer().on('drag', function (event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            xzoom.eventleave = function (element) {
                                element.hammer().on('tap', function (event) {
                                    xzoom.closezoom();
                                });
                            }
                            xzoom.openzoom(event);
                        });
                    });

                    $('.xzoom4').each(function () {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function (event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1, ls;

                            xzoom.eventmove = function (element) {
                                element.hammer().on('drag', function (event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            var counter = 0;
                            xzoom.eventclick = function (element) {
                                element.hammer().on('tap', function () {
                                    counter++;
                                    if (counter == 1) setTimeout(openfancy, 300);
                                    event.gesture.preventDefault();
                                });
                            }

                            function openfancy() {
                                if (counter == 2) {
                                    xzoom.closezoom();
                                    $.fancybox.open(xzoom.gallery().cgallery);
                                } else {
                                    xzoom.closezoom();
                                }
                                counter = 0;
                            }
                            xzoom.openzoom(event);
                        });
                    });

                    $('.xzoom5').each(function () {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function (event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1, ls;

                            xzoom.eventmove = function (element) {
                                element.hammer().on('drag', function (event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            var counter = 0;
                            xzoom.eventclick = function (element) {
                                element.hammer().on('tap', function () {
                                    counter++;
                                    if (counter == 1) setTimeout(openmagnific, 300);
                                    event.gesture.preventDefault();
                                });
                            }

                            function openmagnific() {
                                if (counter == 2) {
                                    xzoom.closezoom();
                                    var gallery = xzoom.gallery().cgallery;
                                    var i, images = new Array();
                                    for (i in gallery) {
                                        images[i] = { src: gallery[i] };
                                    }
                                    $.magnificPopup.open({ items: images, type: 'image', gallery: { enabled: true } });
                                } else {
                                    xzoom.closezoom();
                                }
                                counter = 0;
                            }
                            xzoom.openzoom(event);
                        });
                    });

                } else {
                    //If not touch device

                    //Integration with fancybox plugin
                    $('#xzoom-fancy').bind('click', function (event) {
                        var xzoom = $(this).data('xzoom');
                        xzoom.closezoom();
                        $.fancybox.open(xzoom.gallery().cgallery, { padding: 0, helpers: { overlay: { locked: false } } });
                        event.preventDefault();
                    });

                    //Integration with magnific popup plugin
                    $('#xzoom-magnific').bind('click', function (event) {
                        var xzoom = $(this).data('xzoom');
                        xzoom.closezoom();
                        var gallery = xzoom.gallery().cgallery;
                        var i, images = new Array();
                        for (i in gallery) {
                            images[i] = { src: gallery[i] };
                        }
                        $.magnificPopup.open({ items: images, type: 'image', gallery: { enabled: true } });
                        event.preventDefault();
                    });
                }
            });
        })(jQuery);</script>
</body>

</html>