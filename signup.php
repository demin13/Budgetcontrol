<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #faf5f5;">

    
    <nav class="navbar navbar-inverse navbar-fixed-top col-sm-12">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand" >Ct₹l Budget</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <div class="signup-box">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <form action="submitsignup.php" method="POST">
          <div class="jumbotron" style="background:white;"> 
            <h4 class="col-sm-offset-5">Sign Up</h4>
            <hr>    
            <label for="inputname">Name:</label>
            <input class="form-control" id="inputname" type="text" name="username" placeholder="Name" required><br>        
            <label for="inputEmail">Email:</label>
            <input class="form-control" id="inputEmail" type="email" name="useremail" placeholder="Enter Valid Email" required><br>
            <label for="inputPassword">Password:</label>
            <input class="form-control" id="inputPassword" type="password" name="userpassword" placeholder="Password(Min 6 Characters)" required><br>
            <label for="inputPhone">Mobile Number:</label>
            <input class="form-control" id="inputPhone" type="text" name="userphone" placeholder="Enter Valid Phone Number(Ex: 9823123213)" required><br>
            <button class="form-control btn btn-success btn-md" type="Submit">Sign Up</button>
            </div>
            </div>
        </div>
            </div>
        </form>
        </div>
    </div>
    

    <nav class="navbar navbar-inverse navbar-fixed-bottom col-sm-12">
        <div >
        <ul style="text-align:center;" class="nav">
            <li style="color:#adacac; padding-top:1rem; font-size:medium;">Copyright &#169; Control Budget. All Rights Reserved | Contact Us: +91-9876452390</li>
        </ul>  
    </div>
        </nav>
</body>
</html>