<?php
    include("database.php");
    
    $sql = "SELECT * FROM japanese WHERE memorized = '1' ORDER BY RAND() LIMIT 1 ";
 
    
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }


    function update_word_set(){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if ($row["memorized"] = 1 && isset($_POST['1'])){
                $unknown = mysqli("UPDATE japanese SET memorized = '0' WHERE id = ('$id')");
            }
        }
    }
            

    if(isset($_POST['1'])) {
        $stmt = $conn->prepare("UPDATE japanese SET memorized = '1' WHERE id = ?");
        $stmt->bind_param("i", $notid);
        $notid = $row["id"];
        $stmt->execute();
        $stmt->close();
    }
    if(isset($_POST['0'])) {
        $stmt = $conn->prepare("UPDATE japanese SET memorized = '0' WHERE id = ?");
        $stmt->bind_param("i", $notid);
        $notid = $row["id"];
        $stmt->execute();
        $stmt->close();
    }

    
    function myMessage(){
        echo "BITCH ";
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
                <form method="POST">
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

            </div> 
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>