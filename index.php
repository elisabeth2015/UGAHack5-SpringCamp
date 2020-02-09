<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Spring Camp</h1>

<div class="header">
	<h2>Registration</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p>Welcome to Spring Camp Class Online registration page! Start from Jan.5, you can register online.Camp will start on March1, 2020, end May30, 2020.</p>
		<table>
  <tr>
    <th>Course Name</th>
    <th>Contact</th>
    <th>Location</th>  
    <th>Telephone Number</th>
    <th>Regiter Now</th>
  </tr>
  <tr>
    <td>English 205</td>
    <td>Anders Maria</td>
    <td>1200 Cascade St., Atlanta, GA</td>
    <td>(404)208-2500</td>
    <td>Register Website</td>
  </tr>
  <tr>
    <td>Biology</td>
    <td>Francisco Chang</td>
    <td>2902 West St., Atlanta, GA</td>
    <td>(404)291-2020</td>
    <td>Register Website</td>
  </tr>
  <tr>
    <td>Geometry</td>
    <td>Roland Mendel</td>
    <td>1920 North St., Atlanta, GA</td>
    <td>(770)270-9500</td>
    <td>Register Website</td>
  </tr>
  <tr>
    <td>Chemistry</td>
    <td>Helen Bennett</td>
    <td>2500 Main St., Atlanta, GA</td>
    <td>(770)400-2600</td>
    <td>Register Website</td>
  </tr>
  <tr>
    <td>Computer Architecture</td>
    <td>Yoshi Tannamuri</td>
    <td>1202 xxx St., Atlanta, GA</td>
    <td>(404)280-2991</td>
    <td>Register Website</td>
  </tr>
  <tr>
    <td>ComputerGame Develop</td>
    <td>Giovanni Rovelli</td>
    <td>2900 xxx St., Atlanta, GA</td>
    <td>(404)308-2508</td>
    <td>Register Website</td>
  </tr>
  </table>

  <img src="Image/pic3.jpg" alt="Spring Camp" height="360" width="360">
  <img src="Image/pic2.jpg" alt="Spring Camp" height="360" width="360">
  <img src="Image/th.jpg" alt="Spring Camp" height="360" width="360">

 

       
		
		
	

    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <p>Copyright Spring Camp 2020 !</p>
</div>



		
</body>
</html>