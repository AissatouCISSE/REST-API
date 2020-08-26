<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$connect = mysqli_connect("localhost", "cheikh", "Cheikh@mbow123", "test");
//$connexion = new PDO('mysql:host=localhost;dbname=test', 'cheikh', 'Cheikh@mbow123');



if(isset($_POST["query"]))
{
    $output = '';
    $query = "SELECT * FROM Personne WHERE prenom LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($connect, $query);
    $output = '<ul class="list-unstyled">';

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<li>'.$row["prenom"].'</li>';
        }
    }
    else
    {
        $output .= '<li>Prenom not found</li>';
    }
    $output .= '</ul>';
    echo $output;
}