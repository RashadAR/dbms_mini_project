<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eventle</title>
    <style>
/* .bgImage 
{
    background-image: url(images/cs03.jpg);
    background-size: cover;
    background-position: center center;
    height: 600px;
    margin-bottom: 29px;
} */
</style>
</head>

        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->


<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
            <div class="navbar-header">
             
                <a class = "navbar-brand" style="color:#003049;" >
                     Event Management System
                </a> 
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
            <li><a style="color:#003049;" href = "adminPage.php"><strong>Home</strong></a></li>
            <li><a style="color:#003049;"  href = "Stu_details.php"><strong>Student Details</strong></a></li>
                    <li><a style="color:#003049;"  href = "Stu_cordinator.php"><strong>Student Co-ordinator</strong></a></li>
                    <li><a style="color:#003049;"  href = "Staff_cordinator.php"><strong>Staff-Co-ordinator</strong></a></li>
                    <li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "index.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>            
        
            </ul>
        </div><!--container div-->
    </nav>
    <!-- <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron">
                <h1><strong>Explore<br></strong> Your Favorite Event</h1>
                <div class="browse d-md-flex col-md-14" >
                <div class="row">
                  
            </div>
        </div>
    </div> -->
</header>