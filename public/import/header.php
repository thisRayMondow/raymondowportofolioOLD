<?php
class header {
    
    public function __construct(){
        $page = $_SERVER['PHP_SELF'];
        $sec = "60";
        echo '<meta http-equiv="refresh" content="'.$sec.';URL='.$page.'">';
        echo '<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">';
        echo '<link rel="stylesheet" href="./asset/style/page.css">';
        echo '<link rel="stylesheet" href="./asset/style/table.css">';
        echo '<link rel="stylesheet" href="./asset/style/rating.css">';
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">';
        echo '';
    }
    
    function title($Title ="") {
        $title = ucfirst(strtolower($Title));
        if ($title==NULL) {
            $title = 'Beranda';
            echo "<title>Halaman | ".$title."</title>";
        }else{
            echo "<title>Halaman | ".$title."</title>";
        }
        
    }
    function favIcon($Add="") {
        if ($Add==NULL) {
            echo '<link rel="icon" type="image/x-icon" href="./img/deff.png">';
        }else{
            echo '<link rel="icon" type="image/x-icon" href="./img/'.$Add.'">';
        }
    }
    
 }