<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-General</title>
</head>

<body>

    </div>
    <div class="container">
        <section class="info">
            <div class="profilepic">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?cs=srgb&dl=pexels-andrea-piacquadio-774909.jpg&fm=jpg" alt="profilepic">
            </div>
            <div class="profilebody">
                <p class="username"><?php echo $_POST["name"]; ?></p>
                <p><strong><?php echo $_POST["info"]; ?></strong></p>
                <button id="logout">Log out</button>
            </div>
        </section>
    </div>

    <script src="logoutjs.js"></script>
</body>

</html>