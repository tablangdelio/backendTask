<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newsDB";
 
      // init basic connection class
     $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
    #$queryInjection = "SELECT * FROM news WHERE id='1' OR ''=''";
      /*
    $res = $conn->query($query);

        if( $res ) {

            while( $row = mysqli_fetch_assoc($res)){

            echo $row['short_description'];

            echo $row['article'];

            }

        }else{
            echo  "no records";
        }

    $conn-close();
        */

    //$query = "SELECT * FROM news WHERE id= ? ";
        $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
        #bind with integer
        $stmt->bind_param("i", $_GET['x']);

        $stmt->execute();
        
        $result = $stmt->get_result();

        if($result->num_rows < 1) {
            
            header("HTTP/1.0 404 Not Found");
            echo "request id not found";
            exit;
        }

        while($row = $result->fetch_assoc()) {

            echo $row['short_description'];

            echo $row['article'];
        }
        
    $stmt->close();
?>