
    <html>
    <head>
    <link rel = "stylesheet" href = "../css/quiz.css">
    </head>
<body>
    <?php
    $conn = new mysqli('localhost','root','root','login');
    $reg = $conn->prepare("INSERT INTO user(fname,lname,password,email)VALUES(?,?,?,?)");
    $reg->bind_param("ssss",$fname,$lname,$pass,$email);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $pass = $_POST["password"];
        $email = $_POST["email"];
    $reg->execute();  
    }
    ?>
    <div class = "regi">
     <h2 >Thank You</h2>
    <h4 >Account Created Successfully</h4>
    <p><a href = "../project%20web.html" class = "out">Home Page</a></p>
    </div>
    </body>
</html>     