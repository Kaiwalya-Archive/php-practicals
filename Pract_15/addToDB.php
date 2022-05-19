<!DOCTYPE html>

<body>

    <h1>Adding and retrieving data from database</h1>

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

        //Inserting the data into database
        $sql = "INSERT INTO `employee` (`name`, `age`, `salary`, `dept`) VALUES ('CEO', '19', '500000', 'management')";

        if($conn->query($sql) === "TRUE") {
            echo "New record created successfully";
        } else {
            echo "Error occured ".$sql;
        }
    ?>

</body>

</html>