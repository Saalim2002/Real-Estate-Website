<html>
<?php
       
        $conn = mysqli_connect("localhost","root","","real_estate");
        if(!$conn)
        {
            die('Could not connect: '.mysqli_error($conn));
        }
        echo '<br>'; 
    ?>

<?php
    session_start();
 
if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM register WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      

		
      if($count == 1) {
       
         $_SESSION['username'] = $username;
         
         header("location: home-org.php");
      }else {
	 echo '<script>alert("Your Login Name or Password is invalid ! PLEASE TRY AGAIN")</script>';
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.fa {
  padding: 5px;
  font-size: 18px;
  width: 10px;
  text-align: center;
  text-decoration: none;
float:center;
cursor:pointer;
background-color:black;
}

.fa-google {
  background: transparent;
  color: white;
}

body{
background:url('https://st2.depositphotos.com/2171279/8108/i/950/depositphotos_81089714-stock-photo-abstract-defocused-blurred-background-blur.jpg');
width:100%;	
background-size:cover;
}
div.login {
  margin: 50px 150px ;
  border: 2px solid black;
height:360px;
position:absolute;
  width: 200px;
padding: 10px ;
width:80%;
background:url('141.png');
background-size:cover;
}
div.login content{
color:white;
margin: 10px 470px ;
text-align:center;
position:absolute;
font-family:Cambria;
}
div.login img {
  width: 100%;
  height: auto;
margin: 0px 50px;
width:100px;
border-radius:50%;
}

div.login input{
font-color:white;
border-bottom: 1px solid black;
background : white;
}
div.login but{
width:140px;
font-size:16px;
padding:5px 15px;
border:2px solid white;
border-radius:10%;
background-color:white;
color:black;
cursor:pointer;
}
 div.login but:hover
{
color:black;
border:2px solid black;
background-color:white;
}
</style>
</head>
<body>
<form method="POST" action="">
<div class="login">
<content>
<img src="7.jpg">
<p> Login</p>
<h3>   Username</h3>
<input type="text"  placeholder="Enter username" name="username">
<h3> Password</h3>
<input type="password" placeholder="Enter password" name="password" id="myPassword"><p>
<button type="submit" name="login" value=Login></button>
<p>Or Singup  
<a href=signup.html><i class="fa fa-signup"></i></p></content></div></form>
</body>
</html>
