<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fruta_seleccionada = $_POST['fruta'];
        echo "<h1>Seleccionaste: $fruta_seleccionada!</h1>";
    }


?>