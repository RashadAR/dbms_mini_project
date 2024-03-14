<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eventle</title>
        <?php require 'utils/styles.php';?>
      </head>
    <body>
        <style>
.bgImage {
    background-image: url(images/bg.png);
    background-size: cover;
    background-position: center center;
    height: 650px;
    margin-bottom: 25px;
}
</style>
<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
        <div class="navbar-header">
               
                <a class="navbar-brand" style="font-size:30px">
                   Event Management System
                </a>
        </div>
       
            <ul style="font-size:15px" class="nav navbar-nav navbar-right">
                    <li><a href = "index.php"><strong>Home</strong></a></li>
                    <li><a href = "register.php"><strong>Register</strong></a></li>
                    <li><a href = "contact.php"><strong>Contact Us</strong></a></li>
                    <li><a href = "aboutus.php"><strong>About us</strong></a></li>
                    <li class="btnlogout"><a class="navbar-btn" href="login_form.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>

            
                
                
            </ul>
        </div>
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron">
                <h1><strong>Explore<br></strong> Your Favorite Event</h1>
                <br><div class="browse d-md-flex col-md-14" >
                <div class="row">
                  
            </div>
        </div>
    </div>
</header>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold ">
                    <strong>  Register your Favourite events:</strong>
                </h1>
            </div>           
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/technical.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong>Technical Events</strong></u></h1>
                            <p>
                                EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!
                            </p>
                            
                            <br><br>
                        <?php $id=1;
                        echo
                             '<a class="btn btn-primary"  href="viewEvent.php?id='.$id.'"> 
                             <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events</a>'
                        ?>
                             </div>
                    </div>
                </section>
            </div>
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/gaming.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Gaming Events</u></strong></h1>
                            <p>
                                EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a class="btn btn-primary" href="viewEvent.php?id='.$id .'"> 
                             <span class="glyphicon glyphicon-circle-arrow-right"></span>View Gaming Events</a>'
                        ?>
                        </div>
                    </div>
                </section>
            </div>

        </div>
  
        <?php require 'utils/footer.php'; ?>
    </body>
</html>