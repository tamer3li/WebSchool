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
             <h4>What does CSS stand for?</h4>
        <input type = "radio" name = "group1" value = "wrong"/>Colorful Style Sheets<br>
        <input type = "radio" name = "group1" value = "correct"/>Cascading Style Sheets<br>
        <input type = "radio" name = "group1" value = "wrong"/>Computer Style Sheets<br>
        <input type = "radio" name = "group1" value = "wrong"/>Creative Style Sheets<br>
            </li>
            </div>
            <!--QUESTION 2-->
            <div class = "bgquiz">
        <li>
             <h4>What is the correct HTML for referring to an external style sheet?</h4>
        <input type = "radio" name = "group2" value = "correct"/>&lt;link rel="stylesheet" type="text/css" href="mystyle.css"&gt;<br>
        <input type = "radio" name = "group2" value = "wrong"/>&lt;stylesheet&gt;mystyle.css&lt;/stylesheet&gt;<br>
        <input type = "radio" name = "group2" value = "wrong"/>&lt;style src="mystyle.css"&gt;<br>
            </li>
            </div>
                <!--QUESTION 3-->
            <div class = "bgquiz">
        <li>
             <h4>Where in an HTML document is the correct place to refer to an external style sheet?</h4>
        <input type = "radio" name = "group3" value = "wrong"/>In the &lt;body&gt; section<br>
        <input type = "radio" name = "group3" value = "wrong"/>At the end of the document<br>
        <input type = "radio" name = "group3" value = "correct"/>In the &lt;head&gt; section<br>
            </li>
            </div>
            <!--QUESTION 4-->
            <div class = "bgquiz">
            <li>
             <h4>Which HTML tag is used to define an internal style sheet?</h4>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;css&gt;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;script&gt;<br>
        <input type = "radio" name = "group4" value = "correct"/>&lt;style&gt;<br>
            </li>
            </div>
            <!--QUESTION 5-->
            <div class = "bgquiz">
            <li>
             <h4>Which HTML attribute is used to define inline styles?</h4>
        <input type = "radio" name = "group5" value = "wrong"/>class<br>
        <input type = "radio" name = "group5" value = "correct"/>style<br>
        <input type = "radio" name = "group5" value = "wrong"/>styles<br>
        <input type = "radio" name = "group5" value = "wrong"/>font<br>
            </li>
            </div>
            <!--QUESTION 6-->
            <div class = "bgquiz">
            <li>
             <h4>Which is the correct CSS syntax?</h4>
        <input type = "radio" name = "group6" value = "correct"/>body{color: black;}<br>
        <input type = "radio" name = "group6" value = "wrong"/>body:color=black;<br>
        <input type = "radio" name = "group6" value = "wrong"/>{body:color=black;}<br>
        <input type = "radio" name = "group6" value = "wrong"/>{body;color:black;}<br>
            </li>
            </div>
             <!--QUESTION 7-->
            <div class = "bgquiz">
            <li>
             <h4>Which property is used to change the background color?</h4>
        <input type = "radio" name = "group7" value = "wrong"/>color<br>
        <input type = "radio" name = "group7" value = "correct"/>background-color<br>
        <input type = "radio" name = "group7" value = "wrong"/>bgcolor<br>
            </li>
            </div>
             <!--QUESTION 8-->
            <div class = "bgquiz">
            <li>
             <h4>How do you display hyperlinks without an underline?</h4>
        <input type = "radio" name = "group8" value = "correct"/>a {text-decoration:none;}<br>
        <input type = "radio" name = "group8" value = "wrong"/>a {decoration:no-underline;}<br>
        <input type = "radio" name = "group8" value = "wrong"/>a {text-decoration:no-underline;}<br>
        <input type = "radio" name = "group8" value = "wrong"/>a {underline:none;}<br>
            </li>
            </div>
            <!--QUESTION 9-->
            <div class = "bgquiz">
            <li>
             <h4>How do you display a border like this:<br>
The top border = 10 pixels<br>
The bottom border = 5 pixels<br>
The left border = 20 pixels<br>
The right border = 1pixel?<br></h4>
        <input type = "radio" name = "group9" value = "wrong"/>border-width:10px 5px 20px 1px;<br>
        <input type = "radio" name = "group9" value = "wrong"/>border-width:10px 20px 5px 1px;<br>
        <input type = "radio" name = "group9" value = "wrong"/>border-width:5px 20px 10px 1px;<br>
        <input type = "radio" name = "group9" value = "correct"/>border-width:10px 1px 5px 20px;<br>
            </li>
            </div>
               <!--QUESTION 10-->
            <div class = "bgquiz">
            <li>
             <h4>How do you select an element with id "demo"?</h4>
        <input type = "radio" name = "group10" value = "wrong"/>*demo<br>
        <input type = "radio" name = "group10" value = "correct"/>#demo<br>
        <input type = "radio" name = "group10" value = "wrong"/>demo<br>
        <input type = "radio" name = "group10" value = "wrong"/>.demo<br>
            </li>
            </div>
        </ol>        
    <input type = "submit" name = "btn-submit" class = "button_submit" value = "Submit"/>
        <?php
        $css_degree = 0;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $i = 1;
            for($i = 1;$i<=10;$i++){
         if($_POST["group"."$i"] == "correct"){
             $css_degree++;
         }
                else{
                    continue;
                }
     }  
            echo "Your Degree = ".$css_degree."<br>";
           echo "your id ".$_SESSION["userid"];
            $id = $_SESSION["userid"];
             $conn = new mysqli('localhost','root','root','login');
        $up = "UPDATE degree SET css_degree='$css_degree' WHERE user_id='$id'";
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