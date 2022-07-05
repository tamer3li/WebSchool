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
             <h4>What does PHP stand for?</h4>
        <input type = "radio" name = "group1" value = "wrong"/>Personal Hypertext Processor<br>
        <input type = "radio" name = "group1" value = "wrong"/>Private Home Page<br>
        <input type = "radio" name = "group1" value = "correct"/>PHP: Hypertext Preprocessor<br>
            </li>
            </div>
            <!--QUESTION 2-->
            <div class = "bgquiz">
        <li>
             <h4>PHP server scripts are surrounded by delimiters, which?</h4>
        <input type = "radio" name = "group2" value = "wrong"/>&lt;?php&gt;...&lt;/?&gt;<br>
        <input type = "radio" name = "group2" value = "correct"/>&lt;?php...?&gt;<br>
        <input type = "radio" name = "group2" value = "wrong"/>&lt; &amp; &gt;...&lt;/ &amp; &amp; &gt;<br>
        <input type = "radio" name = "group2" value = "wrong"/>&lt;script&gt;...&lt;/script&gt;<br>
            </li>
            </div>
                <!--QUESTION 3-->
            <div class = "bgquiz">
        <li>
             <h4>How do you write "Hello World" in PHP</h4>
        <input type = "radio" name = "group3" value = "correct"/>echo "Hello World";<br>
        <input type = "radio" name = "group3" value = "wrong"/>"Hello World";<br>
        <input type = "radio" name = "group3" value = "wrong"/>Document.Write("Hello World");<br>
            </li>
            </div>
            <!--QUESTION 4-->
            <div class = "bgquiz">
            <li>
             <h4>All variables in PHP start with which symbol?</h4>
        <input type = "radio" name = "group4" value = "correct"/>&#36;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&#33;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&amp;<br>
            </li>
            </div>
            <!--QUESTION 5-->
            <div class = "bgquiz">
            <li>
             <h4>How do you get information from a form that is submitted using the "get" method?</h4>
        <input type = "radio" name = "group5" value = "wrong"/>Request.Form;<br>
        <input type = "radio" name = "group5" value = "correct"/>$_GET[];<br>
        <input type = "radio" name = "group5" value = "wrong"/>Request.QueryString;<br>
            </li>
            </div>
            <!--QUESTION 6-->
            <div class = "bgquiz">
            <li>
             <h4> Include files must have the file extension ".inc"</h4>
        <input type = "radio" name = "group6" value = "wrong"/> False<br>
        <input type = "radio" name = "group6" value = "correct"/>True<br>
            </li>
            </div>
             <!--QUESTION 7-->
            <div class = "bgquiz">
            <li>
             <h4>What is the correct way to include the file "time.inc" ?</h4>
        <input type = "radio" name = "group7" value = "correct"/>&lt;?php include "time.inc"; ?&gt;<br>
        <input type = "radio" name = "group7" value = "wrong"/>&lt;!-- include file="time.inc" --&gt;<br>
        <input type = "radio" name = "group7" value = "wrong"/>&lt;?php include file="time.inc"; ?&gt;<br>
        <input type = "radio" name = "group7" value = "wrong"/>&lt;?php include:"time.inc"; ?&gt;<br>
            </li>
            </div>
             <!--QUESTION 8-->
            <div class = "bgquiz">
            <li>
             <h4>What is the correct way to create a function in PHP?</h4>
        <input type = "radio" name = "group8" value = "wrong"/> create myFunction()<br>
        <input type = "radio" name = "group8" value = "correct"/>function myFunction()<br>
        <input type = "radio" name = "group8" value = "wrong"/>new_function myFunction()<br>
            </li>
            </div>
             <!--QUESTION 9-->
            <div class = "bgquiz">
            <li>
             <h4>Which superglobal variable holds information about headers, paths, and script locations?</h4>
        <input type = "radio" name = "group9" value = "wrong"/>$_GLOBALS<br>
        <input type = "radio" name = "group9" value = "correct"/>$_SERVER<br>
        <input type = "radio" name = "group9" value = "wrong"/>$_GET<br>
        <input type = "radio" name = "group9" value = "wrong"/>$_SESSION<br>
            </li>
            </div>
             <!--QUESTION 10-->
            <div class = "bgquiz">
            <li>
             <h4>How do you create an array in PHP?</h4>
        <input type = "radio" name = "group10" value = "wrong"/> $cars = array("Volvo", "BMW", "Toyota");<br>
        <input type = "radio" name = "group10" value = "wrong"/>$cars = "Volvo", "BMW", "Toyota";<br>
        <input type = "radio" name = "group10" value = "correct"/>$cars = array["Volvo", "BMW", "Toyota"];<br>
            </li>
            </div>
        </ol>        
    <input type = "submit" name = "btn-submit" class = "button_submit" value = "Submit"/>
        <?php
        $php_degree = 0;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $i = 1;
            for($i = 1;$i<=10;$i++){
         if($_POST["group"."$i"] == "correct"){
             $php_degree++;
         }
                else{
                    continue;
                }
     }  
            echo "Your Degree = ".$php_degree."<br>";
           echo "your id ".$_SESSION["userid"];
            $id = $_SESSION["userid"];
             $conn = new mysqli('localhost','root','root','login');
        $up = "UPDATE degree SET php_degree='$php_degree' WHERE user_id='$id'";
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