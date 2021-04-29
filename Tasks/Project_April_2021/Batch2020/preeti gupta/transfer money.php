<html>
    <head>
        <title>Transfer Money</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
   <body style="background-color:  #efefef;">
		<header class="header" >
			<nav class="navbar navbar-style" style="background-color: darkblue;">
				<div class="container">
					<div class="navbar-header">

						<img class="logo" src="https://media-exp1.licdn.com/dms/image/C560BAQFgHU3sTF4LfQ/company-logo_200_200/0/1519895156650?e=2159024400&v=beta&t=1iqBaESC2l4UUW7JjEjq0R_HQhwRTaaqyQG1k46q4bs">
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="dashboard.php" style="color: white; font-size: 16px;">Home</a></li>
						<li><a href="form.php" style="color: white; font-size: 16px;">Create an User</a></li>
						<li><a href="view customer.php" style="color: white; font-size: 16px;">View All Customers</a></li>
						<li><a href="transfer money.php" style="color: white; font-size: 16px;">Transfer Money</a></li>
						<li><a href="transaction history.php" style="color: white; font-size: 16px;">Transaction  History</a></li>
					</ul>
				</div>
			</nav>
		</header>
	    <div class="container">
            <div class="thumbnail">
                <h3 style="color: ; text-decoration: underline; text-align: ; font-weight: bold;">Transfer Money One Customer to Another Customer</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Sender Account Number: </label>
                        <input type="int" class="form-control" name="Sender" placeholder="Enter sender account number" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Receiver Account Number:</label>
                        <input type="int" class="form-control" name="Receiver" placeholder="Enter receiver account number">
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="int" class="form-control" name="amount" placeholder="Enter amount">
                    </div>
                    <div class="form-group">
                         <button type="submit" class="btn btn-primary" name="transfer">Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    $link = mysqli_connect ('localhost', 'root','', 'transaction');
    if(isset($_POST['transfer']))
    {
        $from = $_POST['Sender'];
        $to = $_POST['Receiver'];
        $amount = $_POST['amount'];

        $sql = "SELECT * from users where UserId=$from";
        $query = mysqli_query($link,$sql);
        $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

        $sql = "SELECT * from users where UserId=$to";
        $query = mysqli_query($link,$sql);
        $sql2 = mysqli_fetch_array($query);
       // check input of negative value by user
        if (($amount)<0)
       {
            echo '<script type="text/javascript">';
            echo ' alert("Oops! Negative values cannot be transferred")';
            echo '</script>';
        }
        // check insufficient balance.
        else if($amount > $sql1['Amount'])
        {

            echo '<script type="text/javascript">';
            echo ' alert("Insufficient Balance")';  // showing an alert box.
            echo '</script>';
        }
        // constraint to check zero values
        else if($amount == 0){

             echo "<script type='text/javascript'>";
             echo "alert('Zero value cannot be transferred, Amount will be remained same!')";
             echo "</script>";
         }
        else {

                    // subtract amount from sender's account
                    $newbalance = $sql1['Amount'] - $amount;
                    $sql = "UPDATE users set Amount=$newbalance where UserId=$from";
                    mysqli_query($link,$sql);


                    // adding amount to reciever's account
                    $newbalance = $sql2['Amount'] + $amount;
                    $sql = "UPDATE users set Amount=$newbalance where UserId=$to";
                    mysqli_query($link,$sql);

                    $sender = $sql1['Username'];
                    $receiver = $sql2['Username'];
                    $sql = "INSERT INTO transfer(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                    $query=mysqli_query($link,$sql);

                    if($query){
                         echo "<script> alert('Transaction Successful');

                               </script>";

                    }

                    $newbalance= 0;
                    $amount =0;
            }

    }
?>
