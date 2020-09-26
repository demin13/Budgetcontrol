<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                <li><a href="#"><span class="glyphicon glyphicon-home"></span> About Us</a></li>
                <li><a href="changepass.php"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-sm-6 col-md-offset-3">
    <form action="submitchangepass.php" method="post">
          <div class="jumbotron" style="background:white; border-width:3px;"> 
            <h4 class="col-sm-offset-3">Change Password</h4>
            <hr>    
            <b>Old Password:</b><br>
            <input class="form-control" type="password" name="olduserpassword" placeholder="Old Password" required><br>
            <b>New Password:</b><br>
            <input class="form-control" type="password" name="newuserpassword" placeholder="New Password(Min 6 character)" required><br>
            <b>Confirm Password:</b>
            <input class="form-control" type="password" name="confirmnewpass" placeholder="Re-Type New Password" required><br>
            <button class="form-control btn btn-success btn-md" type="Submit">Change</button>
            </div>
    </form>
            </div>
        </div>
    </div>
    </div>

 
    <nav class="navbar navbar-inverse navbar-fixed-bottom col-sm-12">
        <div class="container">
            <ul style="text-align:center;" class="nav">
                <li style="color:#adacac; padding-top:1rem; font-size:medium;">Copyright &COPY; Control Budget. All Rights Reserved | Contact Us: +91-9876452390</li>
            </ul>  
        </div>
    </nav>

</body>
</html>