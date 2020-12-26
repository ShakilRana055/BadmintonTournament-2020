


<?php
	$dbname = "capital_population";
	$hostname = "192.168.1.100";
	$username = "root";
	$password = "123456";
	$connection = mysqli_connect($hostname, $username, $password, $dbname );
	mysqli_set_charset($connection, "utf8");
?>
<?php 

    $deleteQuery = "DELETE FROM capitals WHERE Language = 'Swedish'";
    $result = mysqli_query($connection , $deleteQuery);

    $selectQuery = "SELECT * FROM capitals";
    $selectQueryResult = mysqli_query($connection, $selectQuery);
    $html  = "<table>
            <thead>
                <th>Countries</th>
                <th>Capitals</th>
                <th>Population</th>
                <th>Language</th>
            </thead>
            <tbody>";

    foreach( $selectQueryResult as $value){
        $html .= "<tr><td>".$value["Countries"]."</td><td>".$value["Capitals"]."</td><td>".
                $value["Population"]."</td><td>".$value["Language"]."</td></tr>";
    }
    $html .= "</tbody></table>";
    echo $html;

?>



<?php 
    //2 a
    $connection = mysqli_connect("localhost", "root", "1234", "information" );
    $title = $_POST["title"] ;
    $username = $_POST["username"] ;
    $user_email = $_POST["usermail"] ;
    $password = $_POST["password"] ;
    $satisfaction  = $_POST["usercard"] ;
    $buy_again  = $_POST["buy_again"] ;
    $expiration  = $_POST["expiration"] ;
    $sql = "INSERT INTO basicinfo set title ='".$title."',user_name ='".$username."', user_email ='".$user_email."',
            user_pass ='".$password."',satisfaction ='".$satisfaction."',buy_again ='".$buy_again."', 
            date ='".$expiration."'";
    //echo $sql ;
    mysqli_query($connection , $sql));
}
?>