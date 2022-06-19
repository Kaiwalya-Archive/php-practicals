<!DOCTYPE html>

<body>

    <?php 

        //Very first line you should have for session
        session_start();

    ?>

    <h1>Hello testing out session </h1>

    <!--Setting up the session-->
    <?php 
        $_SESSION["color"] = "green";
        $_SESSION["user"] = "Kaiwalya";
        echo "Session is set <br>";
    ?>

    <!--Accessing the sessions-->
    <?php
        echo "{$_SESSION["user"]}'s favourite color is {$_SESSION["color"]} <br>";
    ?>

    <?php
        //We call this to destroy all session variables
        session_destroy();
    ?>

</body>

</html>