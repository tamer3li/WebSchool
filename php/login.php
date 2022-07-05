<?php
// Start the session
session_start();
?>
<html>
    <head>
    <link rel = "stylesheet" href = "../css/quiz.css">
    </head>
<body>
    
    <?php
    $conn = new mysqli('localhost','root','root','login');       
       $sql1 = "SELECT id ,fname,lname,password,email FROM user";
$result1 = $conn->query($sql1);

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["mailquiz"];
       
        $pass = $_POST["passquiz"];
    $bool = false; 
    $id; 
    $booldegree = false;
    if(isset($_POST["btn-quiz"])){
        if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        if( $row["email"] ==  $email && $row["password"] == $pass){
           $id =  $row["id"]; $bool = true;
        }//check for email and password
    }//end of while
}//end of if   
    }//end of btn-quiz
  if(!$bool){
    header("Location:../error.html");
  }//check if wrong login
else{
   $sql2 = "SELECT user_id ,html_degree,css_degree,js_degree,php_degree FROM degree";
$result2 = $conn->query($sql2);

     if ($result2->num_rows > 0) {
     while($row = $result2->fetch_assoc()) {
        if( $row["user_id"] ==  $id ){
            /*
           echo "Your id : ".$row["user_id"]."<br>";
           echo "Your html degree : ". $row["html_degree"]."<br>";
           echo "Your css degree : ". $row["css_degree"]."<br>";
           echo "Your JavaScript degree : ".$row["js_degree"]."<br>";
           echo "Your php degree : ".$row["php_degree"]."<br>";
            */
            $booldegree = true;
            $GLOBALS["id"] = $row["user_id"];
            $GLOBALS["html_degree"] = $row["html_degree"];
            $GLOBALS["css_degree"] = $row["css_degree"];
            $GLOBALS["js_degree"] = $row["js_degree"];
            $GLOBALS["php_degree"] = $row["php_degree"];
        }
    }//end of while
        /**/
         /**/
     }//end of if if in the table of degree
   if(!$booldegree){
    $log = "INSERT INTO degree(user_id)VALUES('$id')";
       $conn->query($log);
       $result2 = $conn->query($sql2);
         if ($result2->num_rows > 0) {
     while($row = $result2->fetch_assoc()) {
        if( $row["user_id"] ==  $id ){
        /*
           echo "Your id : r".$row["user_id"]."<br>";
           echo "Your html degree : ". $row["html_degree"]."<br>";
           echo "Your css degree : ". $row["css_degree"]."<br>";
           echo "Your JavaScript degree : ".$row["js_degree"]."<br>";
           echo "Your php degree : ".$row["php_degree"]."<br>";
           */
            $booldegree = true;
               $GLOBALS["id"] = $row["user_id"];
            $GLOBALS["html_degree"] = $row["html_degree"];
            $GLOBALS["css_degree"] = $row["css_degree"];
            $GLOBALS["js_degree"] = $row["js_degree"];
            $GLOBALS["php_degree"] = $row["php_degree"];
        }
    }//end of while
     }//end for if number of row
   }//end of check if not record in degree  
}//end of else to correct login
}//end $_SERVER[]
    /*
    echo "Your id : ".$GLOBALS["id"]."<br>";
    echo "Your html degree : ".$GLOBALS["html_degree"]."<br>";
    echo "Your css degree : ".$GLOBALS["css_degree"]."<br>";
    echo "Your JavaScript degree : ". $GLOBALS["js_degree"]."<br>";
    echo "Your php degree : ". $GLOBALS["php_degree"]."<br>";
    */
    /*Display fname and lname for user*/
    $idd = $GLOBALS["id"];
    $fin = "SELECT fname, lname FROM user where id = '$idd'";
    $result3 = $conn->query($fin);
    if ($result3->num_rows > 0) {
     while($row = $result3->fetch_assoc()) {
        $GLOBALS["fname"]= $row["fname"];
        $GLOBALS["lname"]= $row["lname"];
      
    }//end of while
    }
    /**/
    
    ?>
    <p><a href = "../project%20web.html" class = "out">LogOut</a></p>
    <div class = "p-table">
    <table>
        <tr>
        <th>Info</th>
        <th>Degrees</th>
            </tr>
        <tr>
        <td><p>Your Name  </p></td>
        <td><?php echo $GLOBALS["fname"]." ".$GLOBALS["lname"]?></td>
        </tr>
        <tr>
        <td><p>Your id  </p></td>
        <td><?php echo $GLOBALS["id"]?></td>
        </tr>
        <tr>
        <td><p>Your html degree  </p></td>
        <td><?php echo $GLOBALS["html_degree"]?>/10</td>
        </tr>
        <tr>
        <td><p>Your css degree  </p></td>
        <td><?php echo $GLOBALS["css_degree"]?>/10</td>
        </tr>
        <tr>
        <td><p>Your JavaScript degree  </p></td>
        <td><?php echo $GLOBALS["js_degree"]?>/10</td>
        </tr>
        <tr>
        <td><p>Your php degree  </p></td>
        <td><?php echo $GLOBALS["php_degree"]?>/10</td>
        </tr>
        <tr>
        <td><p>Your Total degree  </p></td>
        <td><?php echo $GLOBALS["html_degree"]+$GLOBALS["css_degree"]+$GLOBALS["js_degree"]+$GLOBALS["php_degree"]?>/40</td>
        </tr>
        </table>
    </div>
    <div class = "nav-log">
        
        <ul>
        <a href = "../quiz/html_quiz.php"><li>Html quiz</li></a>
        <a href = "../quiz/css_quiz.php"><li>Css quiz</li></a>
        <a href = "../quiz/js_quiz.php"><li>JavaScript quiz</li></a>
        <a href = "../quiz/php_quiz.php"><li>Php quiz</li></a>
        </ul>
   </div>
    </body>
</html>