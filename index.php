<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Expense Manager |Control over your expense</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url(images/diaryback.jpg);
            background-size:cover;    
        }
    </style>
</head>
<body>

<?php/*HEADER*/?>


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
                <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
            </div>
        </nav>



<?php/*MAIN CONTENT*/?>

<div class="container">
    <div class="index-box">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h1>We help you control your budget</h1>
        <div class="buttonpos">    
        <a href="login.php"><button class="btn btn-success">Start Today</button></a>
        </div>    
    </div>
    </div>
    </div>
</div>


<?php/*FOOTER*/?>

<nav class="navbar navbar-inverse navbar-fixed-bottom col-sm-12">
    <div class="container">
        <ul style="text-align:center;" class="nav">
            <li style="color:#adacac; padding-top:1rem; font-size:medium;">Copyright &COPY; Control Budget. All Rights Reserved | Contact Us: +91-9876452390</li>
        </ul>  
    </div>
        </nav>


</body>
<script type="text/javascript">
    function sayHello(){
        console.log("Goodbye");
        $(".title").html("Goodbye");
        $(".title").click(function(){
            $(".title").html("Hello");
            $(".title").off("click");
        });
    };
</script>

</html>