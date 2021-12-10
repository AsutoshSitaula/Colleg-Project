<!DOCTYPE html>
<html>

<head>
    <title>Form site</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs</title>
    <link rel="stylesheet" href="style.css">

    <style>
        #username {
            border: 2px solid black;
            width: 200px;
            height: 20px;
        }

        #password {
            border: 2px solid black;
            width: 200px;
            height: 20px;
        }

        #submit {
            background-color: lightgreen;
            font-size: 15px;
            border-radius: 5px;
        }

        #submit:hover {
            background-color: green;
        }

        #form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>


    <nav class="main-nav">
        <ul style="position: absolute; left: 0; top: 0; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 22px;">
            Asutosh Web-Site
        </ul>
        <ul class="main-ul">
            <b>
                <li id="home">Home</li>
            </b>
            <b>
                <li id="happymeme">About</li>
            </b>
            <b>
                <li id="sadmeme">Contact</li>
            </b>
        </ul>
    </nav>
    <br />
    <form id="form" method="post" action="connect.php">
        <b>Username:</b> <input id="username" type="text" name="username"><br><br>
        <b>Password:</b> <input id="password" type="password" name="password"><br><br>
        <input id="submit" type="submit" value="Submit">
    </form>
    <div class="main-div">
        <div class="first-div">

            <h2>Welcome</h2>
            <p>
                Hi, Welcome to Happy and Sad Meme place, I have used HTML, CSS and JavaScript
                to make this web page. <br />
                I am interested in web designing. My next goal/project is to create a resturant
                website using ReactJs.
                <br />
                <br />
                <b>Instructions</b><br />
                - Hover on the rectangles to see the hover effect
                - onClick see the list of happy and sad celebrities

            </p>
        </div>
        <div class="happy-div" onclick="revolve()" id="loco">
            <h1>Happy Memes</h1>
        </div>
        <div class="sad-div" onclick="rotate()" id="loco-1">
            <h1>Sad Memes</h1>
        </div>
    </div>
    </div>

    <footer class="footer">Contact Info: 68-1771-9087</footer>
    <script src="script.js"></script>
</body>

</html>