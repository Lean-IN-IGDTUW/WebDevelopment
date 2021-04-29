<?php

session_start();

$connection = mysqli_connect('localhost','root');
if($connection)
{
    echo " ";
}
else{
    echo "not connected";
}
  $db = mysqli_select_db($connection,'bank');

  $query = "SELECT * FROM `transaction_details` ORDER BY Transaction_ID ";
  $results = mysqli_query($connection, $query);
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

                <li class="nav-item">
                    <a class="nav-link" href="money.php" style="font-size:125%;margin-left:76px">Transfer Money</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="font-size:125%;margin-left:76px">Transaction History</a>
                </li>
            </ul>

        </div>
    </nav>
    <section id="history"  style="background-color:#C48793; height:100%">
    
    <div class = "transaction_history">
   <h1 style="text-align:center; color:white; margin-bottom:20px; font-size:60px;">Transaction History</h1>
      <center><table style="width:80%; border:solid black 2px; border-radius: 6px;
    -moz-border-radius: 6px; ">
        <tr style="text-align:center">
          
          <th style="text-align:center; background-color: white" >Transaction ID</th>
          <th style="text-align:center; color:; background-color: white">Date-And-Time</th>
          <th style="text-align:center; color:; background-color: white">Sender</th>
          <th style="text-align:center; color:; background-color: white">Receiver</th>
          <th style="text-align:center; color:; background-color: white">Amount</th>
          </th>
         
        </tr>
        

        <?php foreach($results as $ke => $value){ ?>
            
            <tr>
          
          <td style="text-align:center"><?=$value['Transaction_ID'];?></td>
          <td style="text-align:center"><?=$value['Date_and_Time'];?> </td>
          <td style="text-align:center"><?=$value['Sender'];?></td>
          <td style="text-align:center"><?=$value['Receiver'];?></td>
          <td style="text-align:center"><?=$value['amount'];?></td>
           
        </tr>
        
        <?php } ?>
    </div>
</section>

       

                
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>