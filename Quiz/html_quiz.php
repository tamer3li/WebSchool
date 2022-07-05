<?php
// Start the session
session_start();
?>
<html>
    <head>
    <link rel = "stylesheet" href = "../css/quiz.css">
    </head>
<body>
    <p><a href = "../project%20web.html" class = "out">LogOut</a></p>
    <form acrtion = "html_quiz.php" method = "post">
         <ol type = "1">
        <!--QUESTION 1-->
             <div class = "bgquiz">
             <li>
    <h4>What does HTML stand for?</h4>
        <input type = "radio" name = "group1" value = "correct"/>Hyper Text Markup Language<br>
        <input type = "radio" name = "group1" value = "wrong"/>Hyperlinks and Text Markup Language<br>
        <input type = "radio" name = "group1" value = "wrong"/>Home Tool Markup Language<br>
       </li>
                 </div>
                <!--QUESTION 2-->
             <div class = "bgquiz">
             <li>
    <h4>To make a paragraph Bold you can use</h4><br>
        <input type = "radio" name = "group2" value="wrong" />&lt;I&gt;Statement&lt;/I&gt;<br>
        <input type = "radio" name = "group2" value="worng"/>&lt;h1&gt;Statement&lt;/h1&gt;<br>
        <input type = "radio" name = "group2" value="correct" /> &lt;b&gt;Statement&lt;/b&gt;<br>
        <input type = "radio" name = "group2" value="wrong"/>&lt;s&gt;Statement&lt;/s&gt;<br>
                 </li>
             </div>
                <!--QUESTION 3-->
             <div class = "bgquiz">
             <li>
    <h4>Tables are defined with the .... tag.</h4><br>
        <input type = "radio" name = "group3" value="wrong" />&lt;tr&gt;<br>
        <input type = "radio" name = "group3" value="wrong"/>&lt;th&gt;<br>
        <input type = "radio" name = "group3" value="correct"/>&lt;table&gt; <br>
        <input type = "radio" name = "group3" value="wrong"/>&lt;td&gt;<br>
                 </li>
             </div>
                 <!--QUESTION 4-->
             <div class = "bgquiz">
             <li>
    <h4>The tag for writting a paragraph</h4><br>
        <input type = "radio" name = "group4" value = "correct"/>&lt;p&gt;Statement&lt;/p&gt;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;h1&gt;Statement&lt;/h1&gt;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;b&gt;Statement&lt;/b&gt;<br>
        <input type = "radio" name = "group4" value = "wrong"/>&lt;h4&gt;Statement&lt;/h4&gt;<br>
                 </li>
             </div>
                <!--QUESTION 5-->
             <div class = "bgquiz">
             <li>
    <h4>To Defines normal text input</h4>
        <input type = "radio" name = "group5" value = "wrong"/>&lt; input type = "radio" &gt;<br>
        <input type = "radio" name = "group5" value = "wrong"/>&lt; input type = "submit" &gt;<br>
        <input type = "radio" name = "group5" value = "correct"/>&lt; input type = "text" &gt;<br>
        <input type = "radio" name = "group5" value = "wrong"/>&lt; input type = "email" &gt;<br>
                 </li>
             </div>
        <!--QUESTION 6-->
             <div class = "bgquiz">
             <li>
    <h4>What is the correct HTML element for inserting a line break?</h4>
        <input type = "radio" name = "group6" value = "wrong"/>&lt; lb &gt;<br>
        <input type = "radio" name = "group6" value = "wrong"/>&lt; hr &gt;<br>
        <input type = "radio" name = "group6" value = "wrong"/>&lt; break &gt;<br>
        <input type = "radio" name = "group6" value = "correct"/>&lt; br &gt;<br>
                 </li>
             </div>
        <!--QUESTION 7-->
             <div class = "bgquiz">
             <li>
    <h4>What is the correct HTML for adding a background color?</h4>
        <input type = "radio" name = "group7" value = "wrong"/>&lt; body bg="yellow" &gt;<br>
        <input type = "radio" name = "group7" value = "correct"/>&lt; body style="background-color:yellow; &gt;<br>
        <input type = "radio" name = "group7" value = "wrong"/>&lt;background&gt;yellow&lt;/background&gt;<br>
                 </li>
             </div>
        <!--QUESTION 8-->
             <div class = "bgquiz">
             <li>
    <h4> Which character is used to indicate an end tag?</h4>
        <input type = "radio" name = "group8" value = "wrong"/>^<br>
        <input type = "radio" name = "group8" value = "wrong"/>*<br>
        <input type = "radio" name = "group8" value = "correct"/>/<br>
        <input type = "radio" name = "group8" value = "wrong"/>&lt;<br>
                 </li>
             </div>
        <!--QUESTION 9-->
             <div class = "bgquiz">
             <li>
    <h4>What is the correct HTML for making a checkbox?</h4>
        <input type = "radio" name = "group9" value = "wrong"/>&lt; input type="check" &gt;<br>
        <input type = "radio" name = "group9" value = "wrong"/> &lt; check &gt;<br>
        <input type = "radio" name = "group9" value = "correct"/>&lt; input type="checkbox"&gt;<br>
        <input type = "radio" name = "group9" value = "wrong"/>&lt; checkbox  &gt;<br>
                 </li>
             </div>
        <!--QUESTION 10-->
             <div class = "bgquiz">
             <li>
    <h4>HTML comments start with &lt; !-- and end with -- &gt;</h4>
        <input type = "radio" name = "group10" value = "correct"/>True<br>
        <input type = "radio" name = "group10" value = "wrong"/>False<br>
                 </li>
             </div>
             </ol> 
    <input type = "submit" name = "btn-submit" class = "button_submit" value = "Submit"/>
        <?php
        $html_degree = 0;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $i = 1;
            for($i = 1;$i<=10;$i++){
         if($_POST["group"."$i"] == "correct"){
             $html_degree++;
         }
     }  
           echo "Your Degree = ".$html_degree."<br>";
           echo "your id ".$_SESSION["userid"];
            $id = $_SESSION["userid"];
             $conn = new mysqli('localhost','root','root','login');
        $up = "UPDATE degree SET html_degree='$html_degree' WHERE user_id='$id'";
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