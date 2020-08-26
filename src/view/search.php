<?php
   $servername = "localhost";
   $username = "aissatou";
   $password = "password";
   $dbname = "banque";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
    extract($_POST);
    // var_dump($_POST);
    if(isset($_POST['query'])){
        $output = '';
        $conn = new mysqli($servername, $username, $password, $dbname);
        $query = "SELECT * FROM physique WHERE nom LIKE '". $_POST['query']."%'";
        // var_dump($query);
        $result = mysqli_query($conn, $query);
        $output = '<ul id="list-unstyled">';
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                 $output .= '<li>'.$row["nom"].'</li>';
               
            }
        }else{
            $output .= '<li>not found</li>';
        }
        $output .= '</ul>';
        echo $output;
    }
?>