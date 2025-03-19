<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
require 'layouts/footer.view.php';
?>
   <!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="Login.css"> -->
     <style>
        .Register {
    padding: 40px 150px 20px 30px;
    width: 130px;
    height: 50px;
    position: relative;
    top: 50px;
    left: 500px;
    /* background-color: blue; */
    border-radius: 50px;
    border: 5px black solid;
    box-shadow: 0px 4px 8px #4a4a4a;
}

.sub {
    padding: 10px 90px 30px 25px;
    /* width: 70%; */
}

input[type="submit"] {
    padding: 10px 90px 10px 50px;
    background: #fffefe;
    border: black;
    width: 50%;
    cursor: pointer;
    border: 5px rgb(7, 7, 7) solid;
    border-radius: 50px;
    /* margin-top: 10px; */
}

input[type="password"] {
    /* border: black; */
    cursor: pointer;
    border: 5px black solid;
    border-radius: 50px;
    width: 200%;
}

input[type="text"] {
    /* border: black; */
    cursor: pointer;
    border: 5px black solid;
    border-radius: 50px;
    width: 200%;
}
.Login {
    position: relative;
    top: 20px;
    left: 500px;
    background-color: yellow;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    border-color: black;
    padding: 50px 170px 80px 50px;
    box-shadow: 0px 4px 8px #777777;
}
h1 {
    color: rgb(0, 0, 0);
    text-align: center;
    font-size: 50px;
}
     </style>
</head>

<body>
    
        <h1>Login</h1>
        <div class="Login">
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username">
            <br>
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <br>
            <div class="sub">
            <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
    <div class="Register">
        Don't have an account? <a href="Registration.php">Register</a>
    </div>

</body>

</html>
