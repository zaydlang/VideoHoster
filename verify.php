<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.html");
} else {
    session_destroy();
}
?>

<html>
  <head>
    <title> Calculus BC Video Upload </title>
    
    <style>
 
body {
    font-family: Arial, Helvetica, sans-serif;
}

form {
    border: 3px solid #f1f1f1;
    background-color: #83ADDD;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #1C5793;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

    </style>
  </head>
  <body>

        <h2> Calculus BC Video Uploader </h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="imgcontainer">
    <img src="bellarmine.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
            <label for="name"><b>Video Name</b></label>
            <input type="text" name="name" placeholder="Enter Video Name"/ required>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <button type="submit"> Submit </button>
        </form>
        </div>
  </body>
</html>
