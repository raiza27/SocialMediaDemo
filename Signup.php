<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>TRAVLOG - Signup</title>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&family=Lora:ital@1&display=swap');
    body{
        background-image: url("https://images.pexels.com/photos/1029604/pexels-photo-1029604.jpeg?cs=srgb&dl=pexels-scott-webb-1029604.jpg&fm=jpg");
       background-size: 1000px 700px;
    }
    
     #appname {
       
        height:120px;
        background-color:ivory;  
        text-align: center;  
        font-family: 'Fuzzy Bubbles', cursive;
        font-size: 5rem;
        opacity: 0.70;
        
    }

    #login{
        font-size: 2rem;
        color: blanchedalmond;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color:black;  
        width: 100px;
        text-align: center;
        border-radius: 10px;
        float: right;
        margin-right: 20px;
        
    }
    #signup{
        background-color: white;
        padding: 15px;
        text-align: center;
        width: 500px;
        height: 400px;
        margin:auto;
        margin-top: 30px;
        border-radius: 30px;

    }

 #userid,#password, #submit{
     width: 250px;
     text-align: center;
     border-radius: 5px;
 }
 #submit{
     background-color: #84808D;
     color: white;
 }

</style>
</head>

<body>


    <div id="appname">
        <div> TRAVLOG</div> 
        <div id="login"> <a href="Index.php">Log in</a> </div>
    </div>

    <div id="signup">
        Sign up to TRAVLOG <br><br>
        <input id="userid" type="text" placeholder="First Name"> <br>
        <input id="userid" type="text" placeholder="Last Name"> <br>
        <input id="userid" type="text" placeholder="Email or Mobile Number"> <br>
        <input id="password" type="password" placeholder="New Password"><br>
        <input id="password" type="password" placeholder="Confirm Password"><br>
        <input id="submit" type="submit" value="Sign up"><br><br>

    </div>

</body>

</html>