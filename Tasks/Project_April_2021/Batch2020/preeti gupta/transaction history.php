<html>
	<head>
		<title>Transaction History</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
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

	<?php
        // compares values entered in login page form with mySQL database, and then directs either to protected page or to a failure page
$link = mysqli_connect ('localhost', 'root','', 'transaction');
        $query="SELECT * from transfer";
	    $run=mysqli_query($link,$query);
	    echo "<div class='container'>";
            echo "<div class='thumbnail'>";
                echo "<table class='table table-dark'>";
                    echo "<tr>";
                    echo "<th>Sender</th>";
                    echo "<th>Receiver</th>";
                    echo "<th>Amount</th>";

                    if($run==true){
                        while($data=mysqli_fetch_array($run)){
                            echo "<tr>";
                            echo "<td>" . $data['Sender'] . "</td>";
                            echo "<td>" . $data['Receiver'] . "</td>";
                            echo "<td>" . $data['amount'] . "</td>";

                            echo "</tr>";

                        }
                    }
                echo "</table>";
            echo "</div>";
	    echo "</div>";
    session_write_close();
    ?>
    </body>
</html>