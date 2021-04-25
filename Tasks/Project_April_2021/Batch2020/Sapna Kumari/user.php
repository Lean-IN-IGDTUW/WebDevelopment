<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
    echo " ";
}
else{
    echo "not connected";
}

$db = mysqli_select_db($con,'bank');
   
    if(isset($_POST['submit']))
    {
       $name=$_POST['name'];
       $email=$_POST['email'];
       $account=$_POST['account'];
       $amount=$_POST['amount'];
            $check=mysqli_query($con,"SELECT account FROM user WHERE account=$account");
            if(mysqli_num_rows($check) != 0)
            {
                echo "<script> alert('Account already added');
                          window.location='user.php';
                </script>";
            }
            else 
            {
                $sql="insert into user(name,email,account,amount) values('{$name}','{$email}','{$account}','{$amount}')";
                $result=mysqli_query($con,$sql);

            
                if($result){
                echo "<script> alert('User Added Successfully! Do Transaction');
                               window.location='money.php';
                     </script>";
                }
            }   
            


  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="style1.css">
    <title>Bank</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="font-size:250%;margin-right:86px; margin-left:5px"><b>National Bank </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left:156px">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="font-size:125%; margin-left:76px">Home <span class="sr-only" >(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="font-size:125%;margin-left:76px">Create User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="money.php" style="font-size:125%;margin-left:76px">Transfer Money</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php" style="font-size:125%;margin-left:76px">Transaction History</a>
                </li>
            </ul>

        </div>
    </nav>

  <section id = "add_user">
    <div class="container1" style="margin-top:90px;">
        <form action="" id="form" class="form" method="POST" >
            <h2>Create User </h2>
              
                <input type="text" id="username" name="name" placeholder="Username" required>
                <small>Error message</small>
           
                <input type="email" id="email" name="email" placeholder="Email" required>
                <small>Error message</small>
             
                <input type="tel" id="account"  name="account" placeholder="Account No." required>
                <small>Error message</small>

                <input type="number" id="amount" name="amount" placeholder="Amount in Rs." required>
                <small>Error message</small>
            
           
        <br>
            <input type="submit"  Value ="Create" class="button" name="submit"  style="background-color:#C48793"></i>">
        
        </form>
     
    </div>
    </section>

<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>

