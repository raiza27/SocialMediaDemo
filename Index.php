<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>TRAVLOG - Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&family=Lora:ital@1&display=swap');

        body {
            background-image: url("https://images.pexels.com/photos/1029604/pexels-photo-1029604.jpeg?cs=srgb&dl=pexels-scott-webb-1029604.jpg&fm=jpg");
            background-size: 1000px 700px;

        }

        #appname {

            height: 120px;
            background-color: ivory;
            text-align: center;
            font-family: 'Fuzzy Bubbles', cursive;
            font-size: 5rem;
            opacity: 0.70;

        }

        #signup {
            font-size: 2rem;
            color: blanchedalmond;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: black;
            width: 100px;
            text-align: center;
            border-radius: 10px;
            float: right;
            margin-right: 20px;

        }

        #login {
            background-color: white;
            padding: 15px;
            text-align: center;
            width: 500px;
            height: 400px;
            margin: auto;
            margin-top: 30px;
            border-radius: 30px;
        }

    </style>
</head>

<body>


    <div id="appname">
        <div> TRAVLOG</div>

        <div id="signup"><a href="Signup.php">Sign up</a> </div>
    </div>
    <form id="loginform">
    <div id="login">
        Login to TRAVLOG <br><br><br><br><br>
        <div class="row align-items-center g-3" style="width:450px;">
                    <div class="form-floating col-auto">
                        <input type="email" id="email" placeholder="Enter Email" name="email" class="form-control" />
                    </div>
                </div>
                <div class="row align-items-center g-3 " style="width:450px;" >
                    <div class="form-floating col-auto">
                        <input type="password" id="password" placeholder="Enter password" name="password"
                            class="form-control" />
                    </div>
                </div>
                <div class="btn-submit">
                    <input type="submit" value="Log in" class="btn btn-primary" />
                </div>
    </div>
    <form id="loginform">
    <script src="loginjs.js"></script>
    
</body>

</html>