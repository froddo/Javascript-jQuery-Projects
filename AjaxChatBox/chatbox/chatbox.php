<?php
session_start();
include 'inc/check_login.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>ChatBox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div id="container">

    <header>
        <a href="session.php" class="button">Logout</a>
        <button class="dell" id="deleteLastElement">Delete</button>
        <h1>ChatBox</h1>
    </header>
    <div id="shouts">
        <ul>
            <?php include("./render-chat.php") ?>
        </ul>
    </div>
    <div id="input">
            <?php if (isset($_GET['error'])) : ?>
                <div class="error">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php endif; ?>
        <form id="cform">
            <input type="text" id="name" placeholder="Enter Your Name" value="<?php echo ($_SESSION['name']); ?>" />
            <input type="text" id="message" autofocus="autofocus" placeholder="Enter A Message" />
            <br />
            <input class="shout-btn" type="submit" id="addmessage" value="Submit" />
        </form>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>