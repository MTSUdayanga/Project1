<html>
    <head>
        <title>Bostrap Activities</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/ProfilePic.css" rel="stylesheet" type="text/css"/>
        <script src="js/ProfilePic.js" type="text/javascript"></script>
        <link href="Plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        

    </head>
    <body style="background-color:#FFFFFF ">
        <div class="row">
            <div class="col" style="background-color: #0999f9">1 Coloum</div>
            <div class="col" style="background-color: #e83e8c"><2nd Coloum</div>
            <div class="col"  style="background-color: #a7cc38">3rd Coloum</div>

        </div>
        <br> <br> <br>    


        <h3> Coloum Bostrap   </h3>

        <div class="row">

            <div class="col-sm-8" style="background-color: #059fc0"> This is it </div>
            <div class="col-sm-4" style="background-color: #d39e00 "> This is... </div>

        </div>

        <br> <br> <br> 

        <h3> tables </h3>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                    </tr>

                </thead>

                <tbody>
                    <tr>
                        <td>  s1  </td>
                        <td>  Kamal </td>
                    </tr>

                    <tr>
                        <td>  s2  </td>
                        <td>  lal </td>
                    </tr>

                </tbody>

            </table>

        </div>

        <br> <br> <br> 

        <h3>  Image  </h3>
        <div class="container">
            <img src="images/car.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 

        </div>

        <br> <br> <br> 
        <h4>  jambootorn  </h4>
        <div class="alert alert-success alert-dismissible ">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> This is it.
        </div>
        <div class="container">
            <div class="jumbotron">
                <img src="images/car.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="299" style="left: 50px"> 
            </div>

            <button type="button" class="btn btn-danger"> Confirm </button>


        </div>


        <br> <br> <br>

        <h4>Progress bar</h4>

        <style>
            #myProgress {
                width: 50%;
                background-color: #ddd;
            }

            #myBar {
                width: 1%;
                height: 20px;
                background-color: #4CAF50;
            }
        </style>


        <div id="myProgress">
            <div id="myBar"></div>
        </div>
        <br>
        <button onclick="move()">Click Me</button> 

        <br><br><br>

        <div class="container">
            <h2>Pagination</h2>
            <p>Click the button 1..2..........</p>                  
            <ul class="pagination">
                <li><a href="index.php">1</a></li>
                <li><a href="ActivitiesBostrap.php">2</a></li>

            </ul>
        </div> 


        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
            </div>            
        </div>


        <br><br><br>




































        <script>
            function move() {
                var elem = document.getElementById("myBar");
                var width = 1;
                var id = setInterval(frame, 520);
                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                    } else {
                        width++;
                        elem.style.width = width + '%';
                    }
                }
            }
        </script>





        <script src="jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="Plugins/fontawesome/js/fontawesome.min.js" type="text/javascript"></script>



    </body>
</html>
