
<!doctype html>
<?php
 session_start();
  $lid=$_SESSION["lid"];
  $rid=$_GET["rid"];
  if(isset($_GET["f"]))
{
    if($_GET["f"]==1)
    {
        echo"<script>alert('Choose items to order ! ');</script>";
    }
}
           ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <script type="text/javascript">
            function total()
            {
                var url = "total.php";
               // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var a=0;
    var rid=document.getElementById("rid").value;
    var e=document.getElementsByClassName('item');
    for(var i=0;e[i];i++)
    {
        if(e[i].checked)
        {
        a=a+e[i].value+",";
        }
    }
    var vars="item="+a+"&rid="+rid;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("results").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
            }
        </script>
    <style>
    table
    {
        color:#FFF;
        }
    </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Food Odering</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/animate/animate.css" />
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">  
                <div class="container">
                    <div class="row">   
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
                                <a href=""><i class="fa fa-clock-o"></i> Order Foods 24/7</a>
                                <a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                                <a href=""><i class="fa fa-camera"></i></a>
                            </div>  
                        </div>

                    </div>          
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="assets/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="userhome.php">Home</a></li>
                                        <li><a href="chooserest.php">Buy Items</a></li>
                                        <li><a href="home.php">logout</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>  
        </header> <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>MEGA FOOD SITE</h1>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                                    <button href="" class="btn-lg">Click here</button>
                                </div>
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </section>

        
        <section  >
           <form method="post" action="buyprocess.php"><br><br><br>
             <table width="50%" align="center" >
  <tr align="center" bgcolor="#000000">
    <th scope="row"  align="center"><p align="center">CHOOSE ITEMS</p></th>
    </tr></table><br>
    <table width="50%" align="center" cellpadding="10" cellspacing="10">
  <tr align="center" bgcolor="#000000">
    <td ><p align="center">ITEM</p></td><td><p align="center">TYPE</p></td><td><p align="center">PRICE</p></td><td><p align="center">BUY</p></td></tr>
    <?php
 include('query.php');
    $ob=new query();
     $res=$ob->itemdet($rid);
     if(mysqli_num_rows($res)>0)
     {
         while($r=mysqli_fetch_array($res))
         {
    echo "<tr style='background:white;color:black;border-bottom:1px solid black''><td align='center'><p>$r[0]</p></td><td align='center'><p>$r[1]</p></td><td align='center'><p>$r[2]</p></td><td align='center'><p><input type='checkbox' name='item[]' value='$r[3]' onClick='total(this)' class='item'></p></td></tr>";
}
}
else
{

echo "<tr style='background:white;color:black;border-bottom:1px solid black''><td align='center' colspan='4'><p>NO ITEMS AVAILABLE</p></td></tr>";
}
?>
    
  </tr></table>
<br><br>
 <table width="50%" align="center" >
    <tr align="center" >
    <th scope="row"  align="center"><p align="center" id="results"></p></th>
    </tr>
    <tr><th><br></th></tr>
  <tr align="center" >
    <th scope="row"  align="center"><p align="center"><input type="submit" name="buy" value="BUY" style="width:100%;background:#ef9999;color:red;border:2px solid red"></p></th>
    </tr></table><br><br>  
<p><input type="hidden" name="rid" id="rid" value="<?php echo $rid; ?>"></p>
           </form>
        </section>
        <section id="footer_widget" class="footer_widget">
            <div class="container">
                
            </div>
        </section>
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright wow zoomIn" data-wow-duration="3s">
                            <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>      


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="assets/js/wow/wow.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
