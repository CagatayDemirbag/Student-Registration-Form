<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">Student Registration Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="getStudents.php">Get Students</a></li>
                            <li><a class="dropdown-item" href="addStudents.php">Add Students</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
        <h2 class="mt-3">Student Registration Form</h2>
        <a href="getStudents.php" class="btn btn-primary">Show Students List</a>
    </div>
        <form method="POST" action="addStudents.php">
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" name="full_name" id="full_name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male" id="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Female" id="female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<?php
include("connection.php");
if(isset($_POST["full_name"],$_POST["email"],$_POST["gender"],))
{
    $fullname = $_POST["full_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $add = "INSERT INTO studentsinfo (full_name, email, gender) VALUES ('".$fullname."','".$email."','".$gender."')";
    if($connect->query($add)===TRUE){
        echo"<script>alert('Student added successfully.')</script>";
    }else{
        echo"<script>alert('An error has occured.')</script>";
    }
}
?>
