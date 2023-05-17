<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<style>

body{
background-color: #RRGGBB;
}
form {
	background-color: #0000ff;
	text-aling:center;
    max-width: 500px;
    margin: 0 auto;
  }

  label {
    display: block;
    margin-bottom: 5px;
	width: 50%;
  }

  input[type="text"],
  input[type="password"],
  textarea,
  select {
    width: 50%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
  }

  input[type="radio"],
  input[type="checkbox"] {
    margin-bottom: 5px;
  }

  button {
    padding: 5px 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor:pointer;
  }

  button[type="reset"] {
    background-color: #f44336;
  }
</style>
<link rel="stylesheet" href="style.css">
<head>  
        <meta charset="UTF-8"/>
    
            <title>Hello, world!</title>
        <meta name="description" content="" />
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="icon" href="favicon.png"> -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
       
        
    </head>

</head>
<body>
	<h1>Student Data</h1>
		<from>
		<lable>First Name :</lable>
			<input type="text" spelcheck="true" name="username" placeholder="First Name"><br>
		<lable>Middel Name :</lable>
			<input type="text" spelcheck="true" name="Middlename" placeholder="Middle Name"><br>
		<lable>Last Name:</lable>
			<input type="text" spelcheck="true" name="Lastname" placeholder="Last Name"><br>

		<lable>Your Password :</lable>
			<input type="password" name="password" placeholder="Enter password"><br>

		<lable> Select your Course :</lable>
	
		<select>
			<option value="course">Course</option>
			<option value="BCA">BCA</option>
			<option value="MCA">MCA</option>
			<option value="BBA">BBA</option>
			<option value="BSC">BSC</option>
			<option value="">MSC</option>
			<opetion value="IT">M.Tech</opetion>
			</select><br>
		<lable>
			Select your gender :
		</lable><br>
			<input type="radio" name="male">Male<br>
			<input type="radio" name="female">Female<br>
			<input type="radio" name="other">Other<br>
		<lable>
			Add Mobile No :
		</lable> 
			<input type="text" name="Country code" value="+91" size="2">
			<input type="text" name="phone" size="10"><br>
		<lable for="address">
			Enter your address :
		</lable><br>
		<textarea id="address"name="addfress" rows="5" cols="80" placeholder="Enter Address"></textarea><br>
		<lable for="photo">
			Upload Photo :
		</lable>
			<input type="file" name="photo" ><br>


		<button type="submit">Submit</button>
		<button type="Reset"><a href="https://www.shiksha.com/bca-bachelor-of-computer-applications-chp">BCA details</a></button>
	</from>
	<h2>Students Marksheet</h2>

	<table borader="1px">
		<tr>
			<th>Subject</th>
			<th>Marks</th>	
		</tr>
		<tr>
			<td>English</td>
			<td>90</td>
		<tr>
		<td>Mathemetics</td>
		<td>80</td>
		</tr>
  	</table>
		<div class="container">
		<h2>This is Paragraph</h2>
			<p>Lorem ipsum dolor <del>yatin </del><int>patel</int> sit amet <sub>dell keyboard</sub>consectetur adipisicing elit. Similique earum eligendi alias iure <mark>over company</mark> molestiae. Ad enim a maxime quiaut vero. Similique excepturi qui quibusdam quae culpa quia sapiente et asperiores? Illum.</p>

		</div>


</body>
</html>
