<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 5px;
  font-size: 14px;
  width: 10px;
  text-align: center;
  text-decoration: none;
margin:8px 4px;
float:right;
cursor:pointer;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: BLACK;
  color: white;
}
.fa-twitter {
  background: BLACK;
  color: white;
}
.fa-youtube {
  background: BLACK;
  color: white;
}

.fa-instagram {
  background: BLACK;
  color: white;
}
div .background{
			width: 100%;
			height: 100vh;
			background-repeat: no-repeat;
			background-size: cover;
			opacity:0.7;
			
		}

		.menu{
			position: absolute;
			top:0px;
			right: 0px;
			width: 100%;
			height: 70px;
			background-color:black;
		}

		.logo{
			margin-left: 30px;
			width:30%;
			float: left;
			color: white;
			line-height: 80px;
			padding-left:20px;
		}

		.logo img{
			margin-top: 30px;
			width: 30px;
			height:30px;
			float: left;
			border:1px solid black;
			border-radius: 50%;
		}

		img .background{
			width: 100%;
			height: 100vh;
			background-repeat: no-repeat;
			background-size: cover;
			transition-duration: 2s;
			/*transition-timing-function: linear;*/
			transition-delay: 1s;
		}
		

		.submenu a:visited{
			color:none;
		}

		.submenu a:hover{
			color: rgb(0, 77, 77);
			background-color: white;
			padding: 3px;

		}
		

.menubtn {
  background-color: transparent;
  color: white;
  padding: 10px;
font:cambria;
  font-size: 16px;
  border: none;
  cursor: pointer;
float: right;
 margin:10px;
display:block;
margin-top:30px;
}

.submenu {
  position: relative;
  display: block;
}

.submenu-content {
  display:none;
padding: 10px;
  position: absolute;
  background-color: rgb(102, 26, 0);
  min-width: 80px;
}

.submenu-content a {
  color: black;
  padding: 12px;
  text-decoration: none;
  display: block;
}

.submenu-content a:hover 
{background-color:grey;
color:white;
transition-duration:2s;
padding: 3px;}

.submenu:hover .submenu-content {
  display:block;
transition-duration:0.3s;
background:rgb(172, 115, 57);
}

.submenu:hover .menubtn {
  background-color: rgb(0, 77, 77);
}
		.text{
			position: absolute;
			top: 10%;
			right: 415px;
			margin-top: 275px;
			text-align: center;
			color: white;
			background:grey;
			padding:25px;	
			opacity:0.9;
			border-radius:20%;		
		}

form .radio{
			position: relative;
			marign-top: 60%;
			left: 40%;
			margin: 25px;
		
			color: :#00b894;
			cursor: pointer;
		}

.srchbar
{
box-sizing:border-box;
margin:10px;
margin-top:80px;
position:absolute;
}

.srchbar input {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  background: #f1f1f1;
width:500px;
margin-left:460px;
}

.srchbar button {
max-width:50px;
float:right;
  padding: 10px;
  background: black;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  cursor: pointer;
height:43px;
}

.srchbar button:hover {
  background: #0b7dda;
}

marquee
{
color:white;
background-color:black;
font-size:15px;
margin-top:100px;
padding:3px;
}

div.footer{
background: black;
font-family:Georgia (serif);
display:flex;
}
div.footer con1{
color:white;
margin:40px;
}
div.footer con2{
color:white;
margin:40px;
}
div.footer con3{
color:white;
margin:40px;
}
div.footer img{
width:100%;
width:32px;
height:27px;
display:inline;
margin:5px;
}
div.footer a:hover{
color:red;
}

div.space
{
height:50px;
}

.vid
{
align-text:left;
font-style:calibri;
font-size:27px;
margin-top:0px;
background-image:url('https://image.freepik.com/free-photo/blur-city-building-background_34836-148.jpg');
background-size:cover;
color:white;
}
video
{
 width: 50%;
  height: 300px;
position:relative;
margin-left:650px;
margin-bottom:50px;
}

#gotop {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  font-size: 25px;
  border: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
width:30px;
}

#gotop:hover {
  background-color: #555;
}

div.pro{
background:url(22.jpg);
width:100%;
text-align:center;
 font-family: "Times new roman";
font-size:30px;
color:rgb(153, 153, 0);
cover:noo-repeat;
padding:15px;
margin-top:350px;
}

div.gallery {
  margin: 10px;
display:block;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
color:white;
text-align:center;
padding: 10px ;
display:flex;
flex-direction:column;
}

div.gallery:hover {
  border: 2px solid black;
}

div.gallery img {

  height: 200px;
display:block;
width:300px;
flex-direction:column;
}

div.desc {
margin-top:10px;
  padding: 8px;
  text-align: center;
color:black;
background-color:rgb(230,238,238);
}


.map
{
align-text:left;
font-style:calibri;
font-size:27px;
margin-top:100px;
background-image:url('https://i0.wp.com/hoke.com/wp-content/uploads/2014/04/map-background.jpg?ssl=1');
background-size:1200px 600px;
opacity:.9;

}

.map img
{
 border: 2px solid black;
 width: 500px;
  height: 400px;
position:relative;
margin-left:800px;

}


.team {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 5rem 20rem 5rem;
}

.cards-wrapper {
  display: flex;
  justify-content: space-evenly;
  margin-top: 1rem;
  margin-right: rem;
  width: 1300px;
}

.card {
  width: 45rem;
  height: 30rem;
margin:20px 15px;
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.4);
  border-radius: 0.5rem;
  position: relative;
}

.card-img-wrapper {
  width: 100%;
  height: 100%;
  background-color: #262626;
  border-radius: 0.5rem;
}

.card-img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.8;
  border-radius: 0.5rem;
  transition: opacity 0.3s;
}

.card:hover .card-img-wrapper img {
  opacity: 0.5;
}

.card-info {
  position: absolute;
  bottom: 0;
  padding: 1rem;
  text-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s;
}

.card:hover .card-info {
  bottom: 2rem;
  opacity: 1;
  visibility: visible;
}

.card-info h2 {
  font-family: "Baloo Da 2", serif;
  font-size: 1.5rem;
  line-height: 2.5rem;
  font-weight: 300;
  color: #eee;
}

.card-info h3 {
  font-family: "Muli", serif;
  font-size: 1.3rem;
  font-weight: 500;
  color: #a52a2a;
  margin-bottom: 1rem;
}

.card-info p {
  font-family: "Baloo da 2", serif;
  font-size: 1.2rem;
  line-height: 1.6rem;
  font-weight: 300;
  color: #eee;
  width: 80%;
  margin-bottom: 2rem;
}

.card-info button {
  width: 10rem;
  height: 2rem;
  background-color: #c29525;
  border: none;
  font-family: "Baloo Da 2", serif;
  font-size: 1.4rem;
  line-height: 1.5rem;
  color: #eee;
  border-radius: 0.3rem;
  box-shadow: 0 0.1rem 0.8rem rgba(0, 0, 0, 0.4);
}
.underline {
  width: 7rem;
  height: 0.3rem;
  background-color: #c29525;
}


</style>

<?php
$msg= 'Welcome ' . $_SESSION['username'] . ' Good to see you !';

echo "<script type='text/javascript'>alert('$msg');</script>";

?>

<?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "real_estate";
        $conn = mysqli_connect( $host, $user, $pass, $database);
        if(!$conn)
        {
            die('Could not connect: '.mysqli_error($conn));
        }
        echo '<br>'; 
    ?>


<body>

<div class="background">
		<img name="background" class="background">		
			<div class="menu">
				<div class="logo">
					<img src="logoo.png">
					<h2>Real Estate Interior Design</h2>
				</div>
			<a href="logout.php" class="fa fa-sign-out" style="font-size:20px;color:red"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-instagram"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-facebook"></a>
					<div class="submenu">
 						 <div class="menubtn">Help
						  <div class="submenu-content">
  							<a href="agent.html"> Find an Agent</a>
						
							  </div></div></div>
						

						<div class="submenu">
 						 <div class="menubtn">Services
						  <div class="submenu-content">
  							
							  <a href="buy.html">Buy Property</a>
							  <a href="Sell.html">Sell Property</a>
							  </div></div></div>
						

						<div class="submenu">
 				 		<div class="menubtn">Home
				  			<div class="submenu-content">
				 			 <a href="login.php">Login</a>
 							 <a href="signup.html">Sign up</a>
 				  				</div></div></div>
<br><br><br><br><br>
<br><br><br><br><br>

<div class="srchbar">
  <br><input type="text" placeholder="Search.." name="search">
 <button><i class="fa fa-search"></i></button>
</div>

<div class="radio"> 
					<form>
						<input type="radio" name="radio" value="radio1" class="radio" onclick="manullay(0)">
						<input type="radio" name="radio" value="radio2" class="radio" onclick="manullay(1)">
						<input type="radio" name="radio" value="radio3" class="radio" onclick="manullay(2)">
						<input type="radio" name="radio" value="radio4" class="radio" onclick="manullay(3)">
					</form>
			</div>
<marquee behavior="scroll" direction="left" bgcolor="white">** New Homes  for Sale Availables at Malad **! . Amazing Interior design have been 
available with us.</marquee>

<br>
<button onclick="topFunction()" id="gotop"> &#11014;</button>
<br>
<div class="pro"> PROPERTIES  </div>

<div class="gallery">
  <a href="buy.html">  <img src="https://lh3.googleusercontent.com/z2fVbX5RaXAMboVS0P8LkcPrH4YsyrTBHHjh1yKkJV10S4mLu2DZPWSZQKnM2W2WxA7V6Az1uhwPlk1JBtQHdA=s1200" alt="Cinque Terre" width="600" height="400"></a>
  <div class="desc">TATA group Ltd 1500 sq ft <br> 35 Lac Byculla</div>
</div>

<div class="gallery">
   <a href="buy.html">  <img src="https://is1-3.housingcdn.com/4f2250e8/1c312aa5851614c78ae45b6351263369/v0/medium/kalpataru_vienta_tower_b-kandivali_east-mumbai-kalpataru_group.jpeg" alt="Cinque Terre" width="600" height="400"></a>
  <div class="desc">The Pride group 4200 sq ft <br> 1.50 Cr Andheri</div>
</div>

<div class="gallery">
   <a href="buy.html">  <img src="https://www.rustomjee.com/img-rest/?src=https://i1.rustomjee.com/uploads/project/project_logo/thumbnail.jpg&w=460&h=435" alt="Cinque Terre" width="600" height="400"></a>
  <div class="desc">Haware group  3000 sq ft <br> 1.12 Cr Byculla</div>
</div>

<div class="gallery">
   <a href="buy.html">  <img src="https://is1-3.housingcdn.com/4f2250e8/4481f2430d04d074d3cfa5cad033ecae/v0/fs/ghodawat_skystar-goregaon_west-mumbai-sanjay_ghodawat_group.jpeg" alt="Cinque Terre" width="600" height="400"></a>
  <div class="desc">Asmita Developers 1160 sq ft <br> 60 Lac Miraroad</div>
</div>


<div class="pro"> SERVICES  </div>

<div class="gallery">
    <img src="https://www.kashyapcredits.com/wp-content/uploads/elementor/thumbs/5f36bf70d81b2f45045dabea5192f2b6-olrp6jggfg5d8ttxwk53c821000iru80meb7c1b5bs.jpg" alt="Cinque Terre" width="600" height="400">
  <div class="desc">SEARCH PROPERTY</div>
</div>

<div class="gallery">
    <img src="https://static.toiimg.com/thumb/74208471.cms?width=680&height=512&imgsize=64900" alt="Cinque Terre" width="600" height="400">
  <div class="desc">BUY PROPERTY</div>
</div>

<div class="gallery">
    <img src="https://www.99acres.com/microsite/articles/files/2017/01/house-to-rent.jpg" alt="Cinque Terre" width="600" height="400">
  <div class="desc">RENT PROPERTY</div>
</div>

<div class="gallery">
    <img src="https://groups.commonfloor.com/blog/wp-content/uploads/2019/09/AffordableHousing.png" alt="Cinque Terre" width="600" height="400">
  <div class="desc">AFFORDABLE PRICES</div>
</div>



<div class="map"> 
<div class="pro"> HERE YOU CAN FIND US</div>
 <a href="https://www.google.com/maps"> <img src="15.png" width=400px height=300px></a>
</img>
<p> Address:-  2/602, Andheri united chs limited, opp noor masjid ,<br> 
 near hotel ,v.p road, Andheri (west), Mumbai -400058  </p>
</div><br>

 <section class="team">

        <div class="cards-wrapper">
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="person-1.jpg" alt="CEO" />
            </div>
            <div class="card-info">
              <h2>Mohammed Saad Parbulkar</h2>
              <h3>Founder</h3>
              <p>
               We chose this estate agent as it was our local agent and our house sold in days. Richard and Louise were always helpful, <br> 
              </p>
              
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="saalim.jpeg" alt="Designer" />
            </div>
            <div class="card-info">
              <h2>Saalim Shaikh</h2>
              <h3>Co-Founder,<br> Bigdata.com</h3>
              <p>
                "was amazing when we sold our house. He always kept us in the loop with every development" <br> 
              </p>
              
            </div>
          </div>
          <div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="kutbuddin.jpeg" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Kutbuddin Khan</h2>
              <h3>Architect,<br> Asian Heights</h3>
              <p>
                "Good I love it!" <br> 
              </p>
              
            </div>
          </div>
<div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="pp.jfif" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Sayyed Hassan</h2>
              <h3> Developer ,<br> Bugworld</h3>
              <p>
                "An all round excellent service...highly professional, efficient,friendly....a very positive experience dealing with this company!" <br> 
              </p>
             
            </div>
          </div>

<div class="card" data-tilt>
            <div class="card-img-wrapper">
              <img src="sahil.jfif" alt="Architect" />
            </div>
            <div class="card-info">
              <h2>Sahil Belnekar</h2>
              <h3> Surgeon ,<br> Central Hospital</h3>
              <p>
                "Positive experience from start to finish!" <br> 
              </p>
            
            </div>
          </div>
        </div>
      </section>


<div class="vid"> 
<br><br>Providing some of the best Quality <br>videos of your new Lifestyle<br><br>
<video width="250" height="200" controls>
  <source src="home.mp4" type="video/mp4">
</video></div><br>
<div class="footer"> 
<con1>
<h2> About us </h2>
We are in these business for so long .we provide the real estate as well as also
 customize the interoir of home. You can contact as if you have any kind of work related
to real estate or home interior .I you have any query tou can contact us. saalim
<br><br>
<a href="https://www.facebook.com/"><img src="18.jpg" ></a>
<a href="#"><img src="19.jpg" ></a>
<a href="#"><img src="19.png" ></a>
<a href="#"><img src="18.png" ></a></con1>
<con2>
<h2 > Address </h2>
<img src="21.png" >MUMBAI, MAHARASHTRA<br>
<img src="20.jpg" > 9038738330<br>
<img src="20.png" >realinteroir@gmail.com<br></con2>
<con3><h2> Contact Us </h2>
<form name="form" action="home-org.php" method="POST">  
E-mail *<br>
<input type="email"  placeholder="e mail" name="mail"><br><br>
Message *<br>
<textarea type="text" value="Enter Message..." name="msg" rows="2" cols=25" required> </textarea><br><br>
<button type="submit" class="btn" name="submit"> Send </button></form</con3>
</div>

</body>

 <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           if(isset($_POST["submit"]))
{
                    if(!empty($_POST['mail']) && !empty($_POST['msg'])) {
                        $mail = ($_POST['mail']);
                        $msg = ($_POST['msg']);
                  
                        $sql = "INSERT INTO home(email,message) VALUES ('$mail','$msg')";
                        if(mysqli_query( $conn, $sql)) {
                            echo '<script>alert("Message send")</script>';
                        }
                        else {
                            echo "Could no insert record: ".mysqli_error($conn);
                        }
                    }
      
            }                       
       }
       mysqli_close($conn);
    ?>
<script>
	var i = 0; // Start point
	var images = [];
	var time = 2500;

	// Image List
	images[0] = '7.png';
	images[1] = 'h2.jpg';
	images[2] = 'h3.jpg';
	images[3] = 'h4.jpg';
	

	// Change Image
	function changeImg(){
		document.background.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;


	function manullay(x)
	{
		if(x==0)
		{
			document.background.src= 'h1.jpg';
			document.getELementsByClass('radio1').value=unchecked;
		}
		if(x==1)
		{
			document.background.src= 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Fpremium-photo%2Fwood-table-top-blurred-background-garden_4686495.htm&psig=AOvVaw0N_cJbdBHyf2xsLaLr_vzW&ust=1643706772395000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPCV84bT2_UCFQAAAAAdAAAAABAJ';
		}
		if(x==2)
		{
			document.background.src= 'h3.jpg';
		}
		if(x==3)
		{
			document.background.src= 'h4.jpg';
		}
	}

</script>

<script>
var mybutton = document.getElementById("gotop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() 
{
  if (document.documentElement.scrollTop > 200  || document.body.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
 document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</html>
