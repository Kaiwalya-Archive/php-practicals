<!DOCTYPE html>

<body>

    <?php

        $cookie_name = "Kaiwalya";
        $cookie_value = "This is a simple cookie";

        //Important line for setting up cookies
        setcookie($cookie_name, $cookie_value, time()+(86400*4), "/");
    ?>

    <h1>Hello testing out cookies </h1>

    <?php 
    
        if(isset($_COOKIE["$cookie_name"])) {
            echo "The cookie for {$cookie_name} is set with value {$cookie_value}";
        } else {
            echo "The cookie for {$cookie_name} is not set!!";
        }
    
    ?>

</body>

</html>