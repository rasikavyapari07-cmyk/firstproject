<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>Course Management Form</title>

<style>

body {
font-family: Arial, sans-serif;
background-color:white;
margin: 20px;
}

.container {
width: 60%;
margin: auto;
background-color:powderblue;
padding: 25px;
border-radius: 10px;
box-shadow: 0 0 15px rgba(0,0,0,0.1);
color:black;
}

h1{
text-align: center;
color:purple;
font-size:23px;
}

label {
font-weight: bold;
display: block;
margin-top: 15px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
select,

textarea {
width: 100%;
padding: 10px;
margin-top: 5px; 
border: 1px solid #ccc;
border-radius: 5px;
}

gender-options {
margin-top: 5px;
}

.gender-options label{
font-weight: normal;
margin-right: 15px;
} 

input[type="submit"] {
background-color: #28a745;
color: white;
padding: 10px 25px;
margin-top: 20px;
border: none;
border-radius: 5px;
cursor: pointer;
}

input[type="submit"]:hover {
background-color: #218838;
}

</style>
 </head>
<body>
<div class="container">

<h1>Course Management Form</h1>

<form action="#" method="post">

<label for="name">Couse Id: </label>
<input type="text" id="id" name="name"
required>

<label for="email">Course Name:</label>
<input type="name" id="name"
name="name" required>

<label for="phone">Duration:</label>
<input type="Duration" id="Duration" name="name"
required>



<label for="fees">Fees:</label>
<textarea id="fees" name="fees" rows="3" required></textarea>



</form>
<input type="submit" value="Submit">
</div>
</body>
</html>