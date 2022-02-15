<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TRAVLOG - Profile2</title>
    <style>
        #profilehead {
            height: 60px;
            background-color: #F9F6B7;
        }

        #search {
            border-radius: 10px;
            height: 50px;
            width: 500px;


        }

        #profilepic {
            width: 150px;
            margin-top: -300px;
            border-radius: 100px;
        }

        #nav {
            width: 100px;
            display: inline-block;
            background-color: whitesmoke;
        }

        #profilebody {
            display: flex;
            margin-top: 20px;
        }

        #friendslist {
            flex: 1;
            font-weight: bolder;
            min-height: 400px;
        }

        #Photos {
            flex: 3;
            font-weight: bolder;
            min-height: 400px;
        }
    </style>


</head>
<!-- HEADER Section-->

<body>
    <div id="profilehead">
        <div style="margin:auto;font-size:30px;width:800px;font-family:fantasy;"> TRAVLOG
            &nbsp; &nbsp; <input id="search" type="text" placeholder="Search a profile">
            <img src="https://images.pexels.com/photos/1382731/pexels-photo-1382731.jpeg?cs=srgb&dl=pexels-tu%E1%BA%A5n-ki%E1%BB%87t-jr-1382731.jpg&fm=jpg" alt="profile1" style="width:40px;float:right;border-radius:100px;">
        </div>
    </div>
    <!--Profile Section-->
    <div style="width: 1000px;margin:auto;background-color:whitesmoke;min-height:300px;">
        <div style="background-color:white;text-align:center;">
            <img src="https://images.pexels.com/photos/273935/pexels-photo-273935.jpeg?cs=srgb&dl=pexels-pixabay-273935.jpg&fm=jpg" alt="CoverPic" style="width:85%;">
            <img id="profilepic" src="https://images.pexels.com/photos/1382731/pexels-photo-1382731.jpeg?cs=srgb&dl=pexels-tu%E1%BA%A5n-ki%E1%BB%87t-jr-1382731.jpg&fm=jpg" alt="ProfilePic">
            <br>
            <div style="font-size:20px;"> Zendaya Xui </div>
            <br>
            <!--Navigation Section-->
            <div id="nav">Home</div>
            <div id="nav">About</div>
            <div id="nav" style="font-weight:bold;background-color:grey;">Photos</div>
            <div id="nav">Travellers</div>
            <div id="nav">Travel Groups</div>
            <div id="nav">Settings</div>
            <button id="logout">Log out</button>

            <div id="profilebody">
                <!--Travellers Section-->
                <div id="friendslist">TRAVELLERS

                    <div>
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?cs=srgb&dl=pexels-andrea-piacquadio-774909.jpg&fm=jpg" alt="profile2" style="width:75px;">
                       <br> <a href="Profile3.php">Tina Julie</a>
                    </div>
                    <div>
                        <img src="https://images.pexels.com/photos/697509/pexels-photo-697509.jpeg?cs=srgb&dl=pexels-andrew-personal-training-697509.jpg&fm=jpg" alt="profile3" style="width:75px;">
                        <br>  <a href="Profile1.php">Sam Mendes</a>
                    </div>
                    <div>
                        <img src=" https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg?cs=srgb&dl=pexels-suliman-sallehi-1704488.jpg&fm=jpg" alt="profile4" style="width:75px;">
                        <br> Adam Jones
                    </div>


                </div> <br>

                <!--Photos Section-->
                <div id="Photos">AFRICA TRAVEL

                    <?php include "photosafrica.php"; ?>


                </div>

            </div>

        </div>

    </div>
    <script src="logoutjs.js"></script>
</body>
<footer>
        <p>Photo Courtesy &copy; Pexels.com</p>
    </footer>
</html>