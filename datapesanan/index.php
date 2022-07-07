<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PEMESANAN MAKANAN</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.css"/>
	 <link rel="stylesheet" href="assets/font-awesome/css/all.css"/>
     <script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>

     

</head>
<body>
	 <div class="container-fluid">
	 	<div class="row justify-content-center">
            <span id="notifValidasi"></span>

              
	 		<center><div id="bagianLogin" class=""><BR><br><br><br><br><br><BR><br><br>
	 			<table id="tableLogin" class="">
                    <form action="validateUser.php" method="POST">
                    <thead>
                        <th id="thUsername"><label for="username"><strong><i class="fas fa-user-circle"></i> Username</strong></label></th>
                        <th><label for="password"><strong>Password <i class="fas fa-key"></i></strong></label></th>
                    </thead>
                    <tbody>
                        <td id="tdUsername"><input type="text" class="form-control" id="username" required="required" name="username"></td>
                        <td id="tdPassword"><input type="password" class="form-control" id="password" required="required" name="password"></td>
                    </tbody>
                </table><br>
                <button id="lgnBtn" type="submit">Log In</button>
                </form>
	 		</div>
	 	</div>
	 </div>
</body>
</html>