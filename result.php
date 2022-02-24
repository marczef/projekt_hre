<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet"> 
        <meta charset="UT-8">
        <meta name="description" content="quiz which holy roman empire are you" />
        <title>QUIZ</title>

        <link type="text/css"  rel="stylesheet" href="style.css" />

    </head>
    <body>

        <div id="container">

            <div id="header">
                <h1>Jakim państwem w Świętym Cesarstwie Rzymskim jesteś?</h1>

            </div>

            <div id="menu">

                <div class="menu_button">o quizue</div>
                <div class="menu_button">statystyki</div>
                <div class="menu_button">opis panstw</div>
                <div class="menu_button">historia</div>
                <div class="menu_button">cos tam</div>
                <div style="clear: both"></div>

            </div>

            <div id="main">

                <?php

                    if(isset($_POST['submit']))
                    {
                        if(!empty($_POST['val'])) 
                        {
                            echo '  ' . $_POST['val'];
                        } 
                        else 
                        {
                            echo 'Please select the value.';
                        }
                    }

                ?>

                <a href="index.html">wróć do menu</a>
                
            </div>

            
            <div id="footer">
                QUIZ ~ Marcysia i Maciej &copy;

            </div>

        </div>


    </body>
</html> 