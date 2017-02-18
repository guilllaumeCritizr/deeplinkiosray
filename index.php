<?php

if ($_GET['page'] == 'flunch'){
    header('Location: http://www.flunch.com/');
} else if ($_GET['page'] == 'carrefour'){
    header('Location: http://www.carrefour.com/');
} else{
    include_once("home.html");
}

?>