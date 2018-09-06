<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="Plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="Plugins/OwlCarousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="Plugins/OwlCarousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="Plugins/OwlCarousel/dist/assets/animate.css" rel="stylesheet" type="text/css"/>
        <title>Slider</title>
        <style>
            .item {
                height: 300px;
                width: 200px;
                background: #cccccc;
                color: #fff;
                margin: 10px;
            }
        </style>


    </head>
    <body>



        <div class="owl-carousel">


            <div class="item"><h4>1</h4><img src="images/car.jpg"></div>
            <div class="item"><h4>2</h4>  <img src="images/33b869f90619e81763dbf1fccc896d8d.jpg"></div>
            <div class="item"><h4>3</h4> <img src="images/maxresdefault.jpg"></div>
            <div class="item"><h4>4</h4> <img src="images/logo-intro2.png"></div>
            <div class="item"><h4>5</h4> <img src="images/logo-intro2.png"></div>
            <div class="item"><h4>6</h4> <img src="images/profileconfig.png"></div>
            <div class="item"><h4>7</h4> <img src="images/male-user-profile-picture_318-37825.jpg"></div>
            <div class="item"><h4>8</h4> <img src="images/logo-intro.png"></div>
            <div class="item"><h4>9</h4> <img src="images/images.jpg"></div>

        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!--<script src="jquery.min.js"></script>-->
        <script src="Plugins/OwlCarousel/dist/owl.carousel.min.js" type="text/javascript"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="Plugins/fontawesome/js/fontawesome.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
//                    loop: true,
//                    margin: 100,
//                    nav: true,
//                    responsive: {
//                        0: {
//                            items: 1
//                        },
//                        600: {
//                            items: 3
//                        },
//                        1000: {
//                            items: 5
//                        }
//                    }

                    animateOut: 'slideOutDown',
                    animateIn: 'flipInX',
                    items: 2,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 500,
                    autoplayHoverPause: true










                });
                $('.play').on('click', function () {
                    owl.trigger('play.owl.autoplay', [1000])
                })
                $('.stop').on('click', function () {
                    owl.trigger('stop.owl.autoplay')



                })
            });

        </script>

    </body>
</html>
