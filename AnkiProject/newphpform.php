<?php
    include("database.php");


    $sql = "SELECT * FROM japanese WHERE NOT memorized = '0' ORDER BY RAND() LIMIT 1 ";
    $unknown = mysqli("UPDATE japanese SET memorized = '0' WHERE id = ('$id')");
    
    $result = mysqli_query($conn, $sql );
    $id = $row["id"];
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }
    function myMessage(){
        echo "ok boomer ";
    }

    function update_word_set(){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }
    }
            $id = $row["id"];
            


    if ($row["memorized"] = "1" && isset($_POST['1'])){
        $unknown = mysqli("UPDATE japanese SET memorized = '0' WHERE id = ('$id')");
        $unknown;
    }

    if(isset($_POST['1'])) {
        
        $id = $row["id"];
    }
    if(isset($_POST['0'])) {
        echo "$id";
    }

    

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anki-Learning</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
    <nav>
        <a href="/AnkiProject/index.php">Back</a>
        <p>Learn new words</p>
    </nav>
    <div class="container">
        <div class="flashcard">
            <div class="japanese">
                <div class="furigana"><?php  echo $row["furigana"]; ?></div>
                <div class="kanji"><?php  echo $row["kanji"]; ?></div>
            </div>
            <div class="english">
                <div class="translation"><?php  echo $row["english"]; ?></div>
                <form method="POST" action="learnig.php">
                    <div class="choose">
                        <div id="green-button">
                            <input id="green" class="click" onclick="familiar()" type="submit" name="1"
                                    class="button" value="I already know &#10; this word" />
                        </div>
                        <div  id="grey-button">
                            <input id="grey" class="click" onclick="unfamiliar()" type="submit" name="0"
                                    class="button" value="Start learning &#10; this word" />
                        </div>
            </div>
    </form>
                <!-- <form method="post">
                    <div class="choose">
                        <input type="submit" name="" value="click"><div id="green" class="affirmative click" onclick="familiar()">I already know <br> this word</div>
                        <div id="grey" class="negative click" onclick="unfamiliar()">Start learning <br> this word</div>
                    </div>
                </form> -->
            </div> 
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>