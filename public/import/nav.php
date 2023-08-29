<?php
class Nav {
    public $active = 'active', $pages = "home";
    function navBar($items) {
        echo '<div class="nav" style="text-align:center;">';
        for ($i = 0; $i < count($items); $i++) {
            if (strtolower($items[$i])==strtolower($this->pages) ) {
//                 $active='active';
                echo '<a href="index.php?nav='. $items[$i].'" class="active">'.ucfirst($items[$i]).'</a>';
            }else {
                echo '<a href="index.php?nav='.$items[$i].'">'.ucfirst($items[$i]).'</a>';
            }
            
        }
        echo' </div>';
    }
}