<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = htmlspecialchars($_POST['question']);
    
    echo "Thank you for your question!";
}
?>
