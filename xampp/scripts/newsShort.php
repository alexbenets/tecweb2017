<?php
    
    include 'connection.php';
    $sql = "SELECT * from news ORDER BY data DESC";
    $result = mysqli_query($conn,$sql);
    if(!$row = mysqli_fetch_assoc($result)){
        echo "Nessuna news disponibile";
    }
    else{
        $newslenght = count($row);
        echo "<div id='news'><dl>";
        for($i=0;$i<newsleght or $i<4; $i++){
            echo "<dt>".$row[i]['titolo']."</dt><dd>".$row[i]['descrizione']."</dd>";
        }
        echo "</dl></div>";
    }
        
        
    

?>