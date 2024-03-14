
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eventle</title>
        <?php require 'utils/styles.php'; ?>
        
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class ="content">
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">

   
        <label>Student USN:</label><br>
        <input type="text" name="usn" class="form-control" required placeholder="Enter Usn"><br><br>

        <label>Student Name:</label><br>
        <input type="text" name="name" class="form-control" required placeholder="Enter Name"><br><br>

        <label>Branch:</label><br>
        <input type="text" name="branch" class="form-control" required placeholder="Enter Branch Name"><br><br>

        <label>Semester:</label><br>
        <input type="text" name="sem" class="form-control" required placeholder="Enter Semester"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"  class="form-control" required placeholder="Enter Email"><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone"  class="form-control" required placeholder="Enter Phone Number"><br><br>

        <label>College:</label><br>
        <input type="text" name="college"  class="form-control" required placeholder="Enter College Name"><br><br>

        <label>Select Event:</label><br>
    <select name="event_id" class="form-control" required>
    <option value="1">Search-it</option>
        <option value="2" autofocus>Quiz</option>
        <option value="3">Competitive Coding</option>
        <option value="6">DBMS</option>
    </select><br><br>

        <button class="btn btn-success" type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a>

    </div>
    </div>
    </div>
    </form>
    <?php require 'utils/footer.php'; ?>
    </body>
</html>

<?php
    if (isset($_POST["update"])) {
        // Retrieve form data
        $usn = $_POST["usn"];
        $name = $_POST["name"];
        $branch = $_POST["branch"];
        $sem = $_POST["sem"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $college = $_POST["college"];
        $event_id = $_POST["event_id"];  

        if (!empty($usn) || !empty($name) || !empty($branch) || !empty($sem) || !empty($email) || !empty($phone) || !empty($college) || !empty($event_id)) {
            include 'classes/db1.php';

            $INSERT = "INSERT INTO participent (usn, name, branch, sem, email, phone, college) 
                       VALUES ('$usn', '$name', '$branch', $sem, '$email', '$phone', '$college')";

            if ($conn->query($INSERT) === true) {
                $INSERT_REGISTERED = "INSERT INTO registered (usn, event_id) VALUES ('$usn', $event_id)";
                $conn->query($INSERT_REGISTERED);

                echo "<script>
                        alert('Registered Successfully!');
                        window.location.href='usn.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Already registered with this USN');
                        window.location.href='usn.php';
                      </script>";
            }

            $conn->close();
        } else {
            echo "<script>
                    alert('All fields are required');
                    window.location.href='register.php';
                  </script>";
        }
    }
?>
