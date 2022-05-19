<!DOCTYPE html>

<body>

    <h1>Deleting data from database</h1>

    <?php 
        $dbname="company";
        $host="localhost";
        $username="root";
        $password="";

        //Connecting to the already created datbase
        $conn = mysqli_connect($host, $username, $password, $dbname);

        //Handling error if not sconnected successfully
        if(!$conn) {
            die("Error occured ".mysqli_connect_error());
        } else {
            echo "Connection established successfully <br>";
        }

        //Updating  the data from database
        $sql = "DELETE FROM `employee` WHERE `name`='CEO'";
        
        if ($conn->query($sql) === "TRUE") {
            echo "Field Deleted successfully";
        } else {
            echo "Error occured".$conn->error;
        }    
        
        $conn->close();
    ?>

</body>

</html>