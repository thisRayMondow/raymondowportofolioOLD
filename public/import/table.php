<?php
class Table {
    public $tHead = array(), $tRowItem, $row=array();
    
    function addTable($title="Table") {
        echo "<table class='table'>";
        echo "<div class='tTitle'>".$title."</div>";
        $this->tableHeader();
        $this->addRow();
        echo "</table>";
        
    }
    
    function tableHeader() {
        for ($i = 0; $i < count($this->tHead); $i++) {
            echo "<th class='tHead'>";
            echo $this->tHead[$i];
            echo "</th>";
        }
    } 
    
    function addRow(){
        for ($i = 0; $i < count($this->row); $i++) {
                echo "<tr class='tBody'>";
                for ($j = 0; $j < $this->tRowItem; $j++) {
                    echo "<td class='tRow'>";
                    echo $this->row[$i][$j];
                    echo "</td>";
                }               
                echo "</tr>";
            }
    }
    
    function tableItems($items=0) {
        $this->tRowItem = $items;
        echo $this->tRowItem;
    }
}
