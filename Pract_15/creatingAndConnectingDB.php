<!DOCTYPE html>

<body>

    <h1>Connecting and creating database</h1>

    <?php 
        $servername = "localhost";
        $username="root";
        $password="";

        //Creating a database connection
        $conn = new mysqli($servername, $username, $password);

        //Error handling if connection fails
        if($conn->connect_error) {
            die("Connection failure: ".$conn->connect_error);
        }

        //Creating databse
        $sql = "CREATE DATABASE infodata";
        
        //Error handling if any problem while creating database
        if($conn->query($sql) === "TRUE") {
            echo "Database with name infodata created";
        } else {
            echo "Error".$conn->error;
        }

        //Closing the connection
        $conn->close();
    ?>

</body>

</html>