<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--Including style sheet-->
    <link rel="stylesheet" href="./file.css">
    <!-- Icon -->
   
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
</style>
<body  style="background-color: white;" onload="loader()">

    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#B8F2F5; opacity:1;"> 
            <img  style="border-radius: 25px;" height="90"src="./images/bankiconn.jpg">
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Acme', cursive;font-size:2em;">
                &nbsp;THE SPARK BANK
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; "> 
                    <li class="nav-item">
                        
                    </li> 
                </ul> 
            </div>
        </nav> 
    
    <div>
        <div class="row" style="margin:0px; padding:0px;position:relative;">
           <img style="width:1690px;opacity:0.9"src="./images/backgroundimg.jpg">
	       
		 <div class="slide-right" style="position:absolute;width:1500px;"> 
		 <div class="text">Your perfect banking assistance</div>
		 </div>
		   		 <button type="button" class="btn btn-primary" style="height:55px; position:absolute;margin: auto;width: 30%;left: 35%;margin-left: 0px;padding-top:10px;margin-top:200px;"> <a class="nav-link" href="viewcustomers.php" style="color:black;font-weight:1em; font-size: 22px;font-family: 'Acme', cursive;">
                            <div style="padding-left:20px;" >
                            </div>
                            View Customers
                        </a> </button>
	     </div>
		
	   </div>
	     </div>
    </div>
</div>


</html>