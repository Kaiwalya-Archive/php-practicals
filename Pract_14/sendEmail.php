<!DOCTYPE html>

<body>

    <h1>Sending Email using php</h1>

    <?php
        $to = "kakoxe9580@duetube.com";
        $subject="Hello";
        $message="Man this really works";
        $header = "From:abc@gmail.com";

        //Important fields for email
        $reconf = mail($to, $subject, $message, $header);

        if($reconf == true) {
            echo "Email successfully sent to {$to}";
        } else {
            echo "Email was not sent due to some failure";
        }
    ?>

</body>

</html>