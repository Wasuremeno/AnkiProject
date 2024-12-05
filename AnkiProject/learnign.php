<?php
    include("database.php");
    
    $sql = "SELECT * FROM japanese WHERE memorized = '1' ORDER BY RAND() LIMIT 1 ";

    // $count = "SELECT COUNT(*) FROM japanese WHERE memorized = '1';";
//     $count = mysql_query("SELECT count(*) FROM japanese WHERE memorized = '1';");
// echo mysql_result($count, 0);
 
    
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        echo "";
    }
    


    function update_word_set(){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if ($row["memorized"] = 1 && isset($_POST['1'])){
                $unknown = mysqli("UPDATE japanese SET memorized = '0' WHERE id = ('$id')");
            }
        }
    }
            
    if(isset($_POST['unknown'])) {
        $stmt = $conn->prepare("UPDATE japanese SET memorized = '0' WHERE id = ?");
        $stmt->bind_param("i", $notid);
        $notid = $row["id"];
        $stmt->execute();
        $stmt->close();
    }
    
    else if(isset($_POST['know'])) {
        $stmt = $conn->prepare("UPDATE japanese SET memorized = '1' WHERE id = ?");
        $stmt->bind_param("i", $notid);
        $notid = $row["id"];
        $stmt->execute();
        $stmt->close();
    }

    else{
        echo "<script>";
        echo "console.log('u fucked db');";
        echo "</script>";
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
        <div class="arrow-left">
            <a href="/AnkiProject/index.php">Back</a>
        </div>
        <div class="mode">
            <div>
                <p>Learn new words</p>
            </div>
            <div style="position: relative; padding: 20px 40px;">
                <span>
                    <?php
                    
                    $result=mysqli_query($conn,"SELECT count(*) AS total FROM japanese WHERE memorized = '0'");
                    $data=mysqli_fetch_assoc($result);
                    echo $data['total'];
                    ?>
                </span>
                <p>Review words</p>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="flashcard">
            <div class="japanese">
                <img  src="img/<?php echo $row["id"];?>.png"  onerror="this.style.display='none'">
                <div class="furigana"><?php  echo $row["furigana"]; ?></div>
                <div class="kanji"><?php  echo $row["kanji"]; ?></div>
            </div>
            <div class="english">
                <div class="translation"><?php  echo $row["english"]; ?></div>
                <form  method="POST" id="selecting">
                    <div class="choose">
                        <div id="green-button">
                            <input id="green" class="click" onclick="familiar()" type="submit" name="know"
                                    class="button" value="I already know &#10; this word" require_once/>
                        </div>
                        <div  id="grey-button">
                            <input id="grey" class="click" onclick="unfamiliar()" type="submit" name="unknown"
                                    class="button" value="Start learning &#10; this word" require_once/>
                        </div>
            </div>
    </form>

            </div> 
        </div>
    </div>
    <script src="app.js"></script>

</body>
</html>