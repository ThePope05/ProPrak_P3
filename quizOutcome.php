<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Home pagina</title>
</head>
<body>
    <?php
    $ans =  intval($_GET['ans1']) + 
            intval($_GET['ans2']) +
            intval($_GET['ans3']) +
            intval($_GET['ans4']) +
            intval($_GET['ans5']);

    ?>
    <div class="img">
        <img src="./resources/images/Letters.jpg">
        <img src="./resources/images/DislexiBG.png">
    </div>
    <div class="banner">
        <div class="titels">
            <h1>Dislexi</h1>
            <hr>
            <h3>Test jezelf op dyslexie</h3>
        </div>
    </div>
    <aside>
        <div>
            <h1>Jouw uitkomst</h1>
            <h3>Punten: <?php echo $ans ?></h3>
        </div>
        <p>
            5 - 8 punten is waarschijnlijk geen dyslexie <br>
            9 - 12 punten is mischien wel dyslexie laat je profesioneel testen <br>
            13 - 15 punten is waarschijnlijk wel dyslexie laat je profesioneel testen
        </p>
    </aside>
    <nav>
        <ul>
            <li><a href="index.html"><span class="material-symbols-outlined">home</span></a></li>
            <li><a href="information.html"><span class="material-symbols-outlined">info</span></a></li>
            <li><a href="quiz.html"><span class="material-symbols-outlined">question_mark</span></a></li>
        </ul>
    </nav>
</body>
</html>