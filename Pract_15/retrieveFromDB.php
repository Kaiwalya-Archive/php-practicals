<!DOCTYPE html>

<body>

    <h1>Retrieving data from database</h1>

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

        //Retrieving  the data from database
        $fetch = "SELECT * from `employee`";
        $result = $conn->query($fetch);

        while ($row = $result->fetch_assoc()) {
            echo "Employees: ".$row["name"]."<br>";
        }
        
        $conn->close();
    ?>

</body>

</html>