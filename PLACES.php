<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PLACES</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    </head>
    <body>
        





        <header id="home">
            <div class="overlay">
                <div class="container">
                    <div>
                        <br>                         <br> 
                   


<style>

 .big-button {
        font-size: 40px; /* Adjust the font size to make the text larger */
        padding: 20px 40px; /* Adjust the padding to increase the button size */
        width: 500px; /* Set a fixed width for the buttons */
        height: 100px; /* Set a fixed height for the buttons */
    }
 



</style>




<button class="big-button"><a href="resto.php" class="text-uppercase">restaurants</a></button>
<button class="big-button"><a href="shops.php" class="text-uppercase">shops</a></button>
<button class="big-button"><a href="hotels.php" class="text-uppercase">hotels</a></button>










                    </div>
                </div>
            </div>
        </header>




  

                        </body>





                    </div>
                </div>
                

            </div>
        </div>
        
   



                            </script>
                        </body>






                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
        
        



  

     

        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
</html>