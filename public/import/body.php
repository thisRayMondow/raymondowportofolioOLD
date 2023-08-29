<?php
class Body {
    public $paragraph = array(), $div=array(), $button=array();
    
    function paragraph() {
        for ($i = 0; $i < count($this->paragraph); $i++) {
            echo "<p>".$this->paragraph[$i]."</p>";
        }
    }
    
    function bodySection($rgba="0, 0, 0, 0") {
       
        echo "<section style='background-color: rgba(".$rgba.");'>";
        $this->paragraph();
//         for ($i = 0; $i < count($this->div); $i++) {
//             echo "<div>".$this->div[$i]."</div>";
//         }
//         for ($i = 0; $i < count($this->button); $i++) {
//             echo "<button>".$this->button[$i]."</button>";
//         }
        echo "</section>";
    }
    
    
}