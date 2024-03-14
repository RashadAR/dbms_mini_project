<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eventle</title>
 <style>
    a .btn-danger:hover {
    color: #fff;
    background-color: red;
    border-color: #285e8e; 
}
 </style>
</head>

        <?php require 'utils/styles.php'; ?>


<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
            <div class="navbar-header">
             
                <a class = "navbar-brand" style="color:#003049;" >
                     Event Management System
                </a> 
            </div>
            <ul class="nav navbar-nav navbar-right">
            <li><a style="color:#003049;" href = "adminPage.php"><strong>Events</strong></a></li>
            <li><a style="color:#003049;"  href = "Stu_details.php"><strong>Student Details</strong></a></li>
                    <li><a style="color:#003049;"  href = "Stu_cordinator.php"><strong>Student Co-ordinator</strong></a></li>
                    <li><a style="color:#003049;"  href = "Staff_cordinator.php"><strong>Staff-Co-ordinator</strong></a></li>
                    <li class="btnlogout">
                        <a class="btn btn-danger" style="color:white" href = "index.php">
                        Logout 
                        <span class = "glyphicon glyphicon-log-out"></span>
                    </a>
                </li>            
        
            </ul>
        </div>
    </nav>
</header>