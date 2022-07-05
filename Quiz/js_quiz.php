<?php
session_start();
?>
<html>
     <head>
    <link rel = "stylesheet" href = "../css/quiz.css">
    </head>
<body>
    <p><a href = "../project%20web.html" class = "out">LogOut</a></p>
    <form acrtion = "css_quiz.php" method = "post">
        
        <ol type = "1">
            <!--QUESTION 1-->
            <div class = "bgquiz">
        <li>
             <h4>Inside which HTML element do we put the JavaScript?</h4>
        <input type = "radio" name = "group1" value = "correct"/>&lt;script&gt;<br>
        <input type = "radio" name = "group1" value = "wrong"/>&lt;js&gt;<br>
        <input type = "radio" name = "group1" value = "wrong"/>&lt;javascript&gt;<br>
        <input type = "radio" name = "group1" value = "wrong"/>&lt;scripting&gt;<br>
            </li>
            </div>
            <!--QUESTION 2-->
            <div class = "bgquiz">
        <li>
             <h4>What is the correct JavaScript syntax to change the content of the HTML element below?<br>
            <p id="demo">This is a demonstration.</p>
            </h4>
        <input type = "radio" name = "group2" value = "correct"/>document.getElementById("demo").innerHTML = "Hello World!";<br>
        <input type = "radio" name = "group2" value = "wrong"/>document.getElementByName("p").innerHTML = "Hello World!";<br>
        <input type = "radio" name = "group2" value = "wrong"/>document.getElement("p").innerHTML = "Hello World!";<br>
            </li>
            </div>
                <!--QUESTION 3-->
            <div class = "bgquiz">
        <li>
             <h4>What is the correct syntax for referring to an external script called "www.js"?</h4>
        <input type = "radio" name = "group3" value = "wrong"/>&lt;script name="www.js"&gt;<br>
        <input type = "radio" name = "group3" value = "wrong"/>&lt;script href="www.js"&gt;<br>
        <input type = "radio" name = "group3" value = "correct"/>&lt;script src="www.js"&gt;<br>
            </li>
            </div>
            <!--QUESTION 4-->
            <div class = "bgquiz">
            <li>
             <h4>Which HTML tag is used to define an internal style sheet?</h4>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;css&gt;<br>
        <input type = "radio" name = "group4" value = "correct"/>&lt;script&gt;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;style&gt;<br>
            </li>
            </div>
            <!--QUESTION 5-->
            <div class = "bgquiz">
            <li>
             <h4>The external JavaScript file must contain the &lt;script&gt; tag.</h4>
        <input type = "radio" name = "group5" value = "wrong"/>False<br>
        <input type = "radio" name = "group5" value = "correct"/>True<br>
            </li>
            </div>
            <!--QUESTION 6-->
            <div class = "bgquiz">
            <li>
             <h4>How do you write "Hello World" in an alert box?</h4>
        <input type = "radio" name = "group6" value = "correct"/>alert("Hello World");<br>
        <input type = "radio" name = "group6" value = "wrong"/>msg("Hello World");<br>
        <input type = "radio" name = "group6" value = "wrong"/>alertBox("Hello World");<br>
        <input type = "radio" name = "group6" value = "wrong"/>msgBox("Hello World");<br>
            </li>
            </div>
             <!--QUESTION 7-->
            <div class = "bgquiz">
            <li>
             <h4> How do you create a function in JavaScript?</h4>
        <input type = "radio" name = "group7" value = "correct"/>function myFunction()<br>
        <input type = "radio" name = "group7" value = "wrong"/>function = myFunction()<br>
        <input type = "radio" name = "group7" value = "wrong"/>function:myFunction()<br>
            </li>
            </div>
             <!--QUESTION 8-->
            <div class = "bgquiz">
            <li>
             <h4>How does a FOR loop start?</h4>
        <input type = "radio" name = "group8" value = "wrong"/> for (i <= 5; i++)<br>
        <input type = "radio" name = "group8" value = "wrong"/>for i = 1 to 5<br>
        <input type = "radio" name = "group8" value = "correct"/>for(i = 0; i <= 5; i++)<br>
        <input type = "radio" name = "group8" value = "wrong"/>for (i = 0; i <= 5)<br>
            </li>
            </div>
            <!--QUESTION 9-->
            <div class = "bgquiz">
            <li>
             <h4>How do you round the number 7.25, to the nearest integer?</h4>
        <input type = "radio" name = "group9" value = "correct"/>Math.round(7.25)<br>
        <input type = "radio" name = "group9" value = "wrong"/>Math.rnd(7.25)<br>
        <input type = "radio" name = "group9" value = "wrong"/>round(7.25)<br>
        <input type = "radio" name = "group9" value = "wrong"/>rnd(7.25)<br>
            </li>
            </div>
               <!--QUESTION 10-->
            <div class = "bgquiz">
            <li>
             <h4>JavaScript is the same as Java.</h4>
        <input type = "radio" name = "group10" value = "wrong"/>True<br>
        <input type = "radio" name = "group10" value = "correct"/>False<br>
            </li>
            </div>
        </ol>        
    <input type = "submit" name = "btn-submit" class = "button_submit" value = "Submit"/>
        <?php
        $js_degree = 0;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $i = 1;
            for($i = 1;$i<=10;$i++){
         if($_POST["group"."$i"] == "correct"){
             $js_degree++;
         }
                else{
                    continue;
                }
     }  
            echo "Your Degree = ".$js_degree."<br>";
           echo "your id ".$_SESSION["userid"];
            $id = $_SESSION["userid"];
             $conn = new mysqli('localhost','root','root','login');
        $up = "UPDATE degree SET js_degree='$js_degree' WHERE user_id='$id'";
        $conn->query($up);
         }
     
        ?>
    </form>
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