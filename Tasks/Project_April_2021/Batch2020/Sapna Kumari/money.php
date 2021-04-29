<?php
    
    $connection = mysqli_connect('localhost','root');

if($connection)
{
    echo " ";
}
else{
    echo "not connected";
}

 
 $db = mysqli_select_db($connection,'bank');
    

  $query = "SELECT * FROM `user`";
  
  $results = mysqli_query($connection, $query);

  if (isset($_POST['submit'])) {

    $from = $_POST['Sender'];
    $to = $_POST['Receiver'];
    $amount = $_POST['amount'];

    $sql = "SELECT * FROM user WHERE name = '$from' ";
    $result = mysqli_query($connection, $sql);
    while($sql1 = mysqli_fetch_array($result))
    { 
    // check input of negative value by user
        if ($amount < 0) {
           echo "<script> alert('Please enter correct amount'); 
           window.location='money.php'; 
             </script>";
            }

    // check insufficient balance.
        else if ($amount > $sql1['amount']) {
             echo "<script> alert('Transaction FAILED! Insufficient Balance !'); 
             window.location='money.php';
            </script>";
            }

    // constraint to check zero values
        else if ($amount == 0) {

             echo "<script> alert('Oops! Zero value cannot be transferred');
             window.location='money.php';
          </script>";
        } 
        else {
            $sql = "SELECT * from user where name='$to'";
            $result = mysqli_query($connection, $sql);
            $sql2 = mysqli_fetch_array($result);

            $Sender = $sql1['name'];
            $Receiver = $sql2['name'];

        // deducting amount from sender's account
            $newbalance = $sql1['amount'] - $amount;
            $sql = "UPDATE user SET amount=$newbalance where name='$from'";
            mysqli_query($connection, $sql);

        // adding amount to reciever's account
            $newbalance = $sql2['amount'] + $amount;
            $sql = "UPDATE user SET amount=$newbalance where name='$to'";
            mysqli_query($connection, $sql);


            $sql = "INSERT INTO `transaction_details`(`Sender`, `Receiver`, `amount`) VALUES ('$Sender','$Receiver','$amount')";
            $result = mysqli_query($connection, $sql);

            if ($result) {
            echo "<script> alert('Transaction SUCCESSFUL!');
                                     window.location='history.php';
                           </script>";
        }
    }

        $newbalance = 0;
        $amount = 0;
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
                <li class="nav-item">
                    <a class="nav-link" href="user.php" style="font-size:125%;margin-left:76px">Create User</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="money.php" style="font-size:125%;margin-left:76px">Transfer Money</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php" style="font-size:125%;margin-left:76px">Transaction History</a>
                </li>
            </ul>

        </div>
    </nav>

  <section id = "transact">
    <div class="container_two" style="margin-top:20px;">
    <form action=" " id="form" class="form" method="POST">
                <h2> Send Money </h2>
                
                        <select name="Sender" id="bene_Name" style="height:50px; width:308px;">
                       <option>Sender</option>
                          <?php foreach($results as $ke => $value){ ?>
                            <option value="<?=$value['name'] ; ?>"><?=$value['name']."( A/c : " . $value['account'].")" ; ?></option>
                            <?php } ?>
                   </select>
               
                <br><br>
                
                   
                <select name="Receiver" id="bene_Name" style="height:50px; width:308px;">
                       <option>Receiver</option>
                          <?php foreach($results as $ke => $value){ ?>
                            <option value="<?=$value['name'] ; ?>"><?=$value['name']."( A/c : " . $value['account'].")" ; ?></option>
                            <?php } ?>
                         
                   </select>
                   <br><br>

                <div class="form-control_two">
                    
                    <input type="tel" id="account"  name="amount" placeholder="Enter Amount">
                   
                </div>
                <input type="submit"  Value ="Send" class="button" name="submit" style="background-color:#C48793">
            </form>
     
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
