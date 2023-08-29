<?php
class call {
    public $no =array(), $title=array(),$link=array();
    function addTable($title="Tabel") {
        echo "<strong>".$title."</strong>";
        echo "<hr>";
        echo "<table>";
        for ($i = 0; $i < count($this->no); $i++) {
            echo "<tr>";
            echo "<th style='text-align: center;width:5%;'>".$this->no[$i]."</th>";
            echo "<th>".$this->title[$i]."</th>";
            echo "<th style='text-align: center;width:5%;'><a href='".$this->link[$i]."'><button>GO</button></a></th>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";
    }
}

$text = new call();
$tabel = new call();

$text->no[]= 1;
$text->title[]="BS3 - Login Form";
$text->link[]="#";

$text->no[]= 2;
$text->title[]="BS3 - Sidebar";
$text->link[]="#";


$text->addTable('Bootstrap - 3');

$tabel->no[]= 1;
$tabel->title[]= "AI - PHP Kohonen";
$tabel->link[]= '#';
$tabel->addTable('Kecerdasan Buatan');