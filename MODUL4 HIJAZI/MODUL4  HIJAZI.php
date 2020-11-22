<?php 
include 'config.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand">
    <img src="img/EAD.png" alt="logo" style="width:200px; height: 60px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav  ml-auto" >
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#login" >Masuk</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#registrasi">Registrasi</a>
    </li>
  </ul>
</nav>

</head>

<body>
 <center>
  <br><table style="width:900px; height: 60px;">
   <tr>
    <td class="header" colspan="3"> 
     <h1 align="center">Hello Coders</h1>
     <p align="center">Welcome to our store, please take a look for the products you might buy</p>
     <center><img src="img/WEB.png" alt="logo" style="width:75px; height: 60px;">
     <img src="img/JAVA.png" alt="logo" style="width:150px; height: 60px;">
     <img src="img/PYTON.png" alt="logo" style="width:75px; height: 60px;"></center>
    </td>
   </tr>
</table>
<table>
  <br
   <tr>
    <td width="300px" height="250px">
     <img src="">
     <h3>Learning Basic Web Programming</h3>
     <p><b>Rp. 210.000,00-</b></p>
     <p>want to be able to make a website? Learn basic components such as HTML, CSS and JavaScript in this class curriculum</p>
     <button>buy</button>
    </td>
    <td width="300px" height="250px">
     <img src="">
     <h3>Starting Programming in Java</h3>
     <p><b>Rp. 150.000,00-</b></p>
     <p>Learn java language for you who want to learn the most popular Object-Oriented Programming (PBO) concepts for developing applications</p>
     <button>buy</button>
    </td>
    <td width="300px" height="250px">
     <img src="">
     <h3>Starting Programming in Python</h3>
     <p><b>Rp. 200.000,00-</b></p>
     <p>Learn Python. Fundamental various current individuality trends data science, machine learning infrastructure management.</p>
     <button>buy</button>
    </td>
   </tr>
  </table>
 </center>
</body>
</html>

<style type="text/css">
 nav{
  border-bottom: 2px solid lightgrey;
  margin: auto;
  text-align: left;
  font-family: sans-serif;
 }
 nav ul{
  list-style-type: none;
  display: inline-block;
  color: white;
  font-size: 20px;
 }

 nav ul a{
  padding: 10px;
  color: black;
 }

 nav ul li{
  float: left;
  padding: 10px 10px;
 }
 nav ul a:hover{
  background: lightgrey;
  font-weight: bold;
  transition: .5s;
 }

 table tr td{
  border:2px solid black; 
 }


</style>



<div class="modal fade" id="registrasi">
  <div class="modal-dialog ">
    <div class="modal-content">
    	<form method="post" action="add.php">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registrasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        	<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" name="email" placeholder="Enter email">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Username</label>
    			<input type="text" class="form-control" name="username" placeholder="Enter Username">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">Nomor Telepon</label>
    			<input type="number" class="form-control" name="hp" placeholder="Enter Handphone Number">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">password</label>
    			<input type="password" class="form-control" name="password" 	placeholder="Enter password">
  			</div>
   
        	 

       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<div class="form-group">
    		<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
  		</div>
      	<div class="form-group">
    		<input type="submit" class="form-control btn btn-primary" id="submit" aria-describedby="emailHelp" value="Daftar">
  		</div>
      </div>
       </form>
    </div>
  </div>
</div>

<div class="modal fade" id="login">
  <div class="modal-dialog ">
    <div class="modal-content">
    	<form method="post" action="login.php">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Masuk</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        	<div class="form-group">
    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" name="email" placeholder="Enter email">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputEmail1">password</label>
    			<input type="password" class="form-control" name="password" 	placeholder="Enter password">
  			</div>
   
        	 

       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<div class="form-group">
    		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  		</div>
      	<div class="form-group">
    		<input type="submit" class="form-control btn btn-primary" id="submit" aria-describedby="emailHelp" value="masuk">
  		</div>
      </div>
       </form>
    </div>
  </div>
</div>


</body>
</html>
