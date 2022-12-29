<?php
if(isset($_POST['submit'])){


 $Fname=$_POST['fname'];
 $Contact=$_POST['contact'];
 $Gender=$_POST['gender'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $conn=mysqli_connect ('localhost','root','','users_data');
   

   if(!$conn){
    die("Connection failed :".mysqli_connect_error());
  }

  $sql = "INSERT INTO login_users
VALUES ('$Fname','$Contact','$Gender','$email','$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>





<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>B4 Burger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
</head>
  <style>
     body{
        overflow-x: hidden;
        font-family: poppins;
    }
#NavBar{
    background-color:white;

}
#navbarNav li
*{
    justify-content: space-between;
    text-decoration: none;
    color:#9F1518;
    font-style:normal;
    transition: all .3s ease 0s;
}
#navbarNav li{
    margin-left: 8vw;
}
#navbarNav li:hover
*{
    color: red;
    
}
button{
    margin-right: 10px;
    padding: 5px;
}

.logo{
    width: 60%;
    padding-left: 30px;
    
}
.background-img{
    background-image: url(img/log.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    width: 100vw;
    height: 86vh;
}


.toggle-btn{

    cursor: pointer;
    background: transparent;
    border:none; 
}

.social-links a{
    color: black;
    justify-content: space-between;
    margin: 2px;
}
.social-links a :hover{
    color:red;
}

footer{
background-color:#FFF7E9;
padding: 25px;


}
.foot-logo{
height: 100px;
width: 100px;


}
.foot{
    justify-content: space-between;
    margin:23px;
}
.foot li
*{
    text-decoration: none;
    color:black;
    font-weight:500px;
    font-size: 16px;
    font-style:normal;
    transition: all .3s ease 0s;
}
.foot li:hover
*{
    color:red;
    
}
.social-icons i{
    font-size: 30px;
    justify-content:space-between;
    align-items: center;
    justify-content: center;
    padding:10px;
}
.social-icons i
{
color:black;


}
.social-icons a:hover
*{
    color:red;
}


</style>

<body>
    
<nav class="navbar navbar-expand-lg bg-light" id="NavBar">
          <a class="navbar-brand" href="index-resp.html"><img class="logo" src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center fs-5 fw-5">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu_resp.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Order Online</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cont-resp.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"href="login.php"><i class="bi bi-person-circle">&nbsp; Log IN</i></a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container-fluid">
            <div class=" row background-img">
            <div class="col-sm-12 col-md-3 m-auto bg-white py-5 px-3 ">
                <div class="button-box  d-flex justify-content-center " >
          <a href="login.php"><button type="button" class="toggle-btn p-1">Log In</button></a>
          <a href="signup.php"><button type="button" class="toggle-btn p-1" style="border-radius: 5px 5px; background-color: black; color:white;">Sign Up</button></a>
                </div> 

                <div class="social-links fs-3 p-2 d-flex justify-content-center">
                    <a href="https://www.facebook.com/login/"><i class="bi bi-facebook"></i></a>
                   <a href="https://accounts.google.com/signin"><i class="bi bi-google"></i></a> 
                   <a href="https://twitter.com/i/flow/login"><i class="bi bi-twitter"></i></a>
                </div>
                <form action="signup.php" method="POST">
                    <div class="row m-auto mb-2 gx-0 px-0 d-flex justify-content-center">
                    <div class="col-12">
                        <input type="fname" name="fname" class="form-control" id="inputFname" placeholder="Full Name">
                      </div>
                      </div>

                      <div class="input-group m-auto mb-2 gx-0 px-0 d-flex d-inline justify-content-center">
                      <span class="input-group-text d-flex">+92</span>
                  <div class=" form-floating">
             <input type="int" class="form-control" name="contact" id="floatingInputGroup1" placeholder="Contact Number">
               </div>
</div>
                      <div class="form-floating m-auto mb-2 gx-0 px-0 d-flex justify-content-center">
         <select class="form-select" name="gender"  id="floatingSelect" aria-label="Floating label select example">
            <option value="1">Male</option>
          <option value="2">Female</option>
    <option value="3">Others</option>
  </select>
  <label for="floatingSelect">Gender</label>
</div>

                      <div class="row m-auto mb-2 gx-0 px-0 d-flex justify-content-center">
                      <div class="col-12">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="row m-auto mb-2  gx-0 px-0 d-flex justify-content-center">
                      <div class="col-sm-12">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto justify-content-center p-2">
                    <button type="submit" name="submit" class="btn btn-primary" style="border: none; color:white; background-color: red;">Sign Up</button>
                </div>
                </form>
           </div>
          </div>
        </div>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
    </html>