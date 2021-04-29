<html>
    <head>
        <title>Create an User</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #efefef;">
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
                <h3 style="color: ; text-decoration: underline; text-align: ; font-weight: bold;">Enter Customer Details</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Customer Account Number:</label>
                        <input type="text" class="form-control" name="UserId" placeholder="Enter Account number" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Customer Name:</label>
                        <input type="text" class="form-control" name="Username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="Email" placeholder="Enter user email id">
                    </div>
                    <div class="form-group">
                        <label>Amount:</label>
                        <input type="number" class="form-control" name="Amount" placeholder="Enter user amount">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit" onclick="alert('Submitted!')">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>
<?php include('connection1.php');
?>