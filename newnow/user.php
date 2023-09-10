<!DOCTYPE html>
<HTML>
    <title>user form</title>
    <style>
        .a{
            text-align: center;
            border: 3px solid red; 
            font-family:"times new roman",serif;
            background-color:lightsalmon;

        }
        .c{  
  
  padding-top: 50px; 

        }
        .f{
            height:30px;
    width:120px;
        }
        .menu{
   width: 400px;
   float: left;
   height: 700px;
} 
.main{

width: 100%;


background-position: center;

background-size: cover;

height: 109vh;

}

.navbar{

width: 1200px;

height: 75px;

margin:auto;
}
ul{
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    ul li{
        list-style: none;
        margin-left: 52px;
        margin-top: 10px;
        font-size: 14px;
    }
    
    ul li a{
        text-decoration: none;
        color: #fff;
        font-family: Arial;
        font-weight: bold;
        transition: 0.4s ease-in-out;
    }
    ul li a:hover{
        color: #ff7200;
    }
    .b{
    height:40px;
    width:120px;
    font-size:40;
    border:none;
   background:none;
   padding:0;
   
}  
        
        </style>
        <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <body>
    <div class="main">
        <div class="navbar">
    
    <div class="menu">
                <ul>
                    <li>
                    <form  action="front.php">
      <button class="b" style="color:white" ><h2> HOME</h2></button></form>
    </li>
       <li>
       <form  action="about.php">
      <button class="b" style="color:white" ><h2>ABOUT</h2></button></form>
    </li>
    <li>
       <form  action="service.php">
      <button class="b" style="color:white" ><h2> SERVICE</h2></button></form>
    </li>
    <li>
       <form  action="guide.php">
      <button class="b" style="color:white" ><h2> GUIDELINES</h2></button></form>
    </li>
    <li>
       <form  action="contact.php">
      <button class="b" style="color:white" ><h2> CONTACT</h2></button></form>
    </li>          
                    
                </ul>
            </div>
            </div>
            </div>
           <div class="Loginbox">

    <h1 class="a">User Login</h1>
    <div class="c">
    <form action="userdb.php" method="post" style="text-align:center;">
      
    
       <label for="user">Username:</label>
       <input type="text" class="f" name="name"required><br><br><br>
       <label for="password">Password:</label>
       <input type="password" class="f" name="password"required><br><br><br>
       
      <input type="submit" name="submit" id="submit">
       </form>
    </div>
       
      
      
        </body>
        </html>