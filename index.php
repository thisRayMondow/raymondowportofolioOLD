<?php
include_once 'public/import.php';

if (isset($_GET['nav'])) {
    $page = $_GET['nav'];
}else {
    $page = 'Beranda';
}

$pages = strtolower($page);

$header = new header();
$body = new Body();
$footer = new footer();
$navItem = array();
$nav = new Nav();


//Header
$header->title($pages);
$header->favIcon('');

//Body
//Nav ==
$navItem[] = 'Beranda';
$navItem[] = 'Tentang';
$navItem[] = 'Info';
$navItem[] = 'Proyek';
$nav->pages=$pages;
$nav->navBar($navItem);

//contain ==
echo "<body>"; //onLoad='myFunction()'
echo "<hr>";
echo "<div class='main'>";
$body->paragraph[]= 
"
<h1>Hai Apa Kabar! Selamat Datang di halaman Portofolio saya</h1>
<hr>
<p style='font-size:18;'>
Saya mengucapkan terimakasih atas kesediaan anda untuk mengkases halaman ini,
halaman ini berisi beberapa informasi sederhana tentang saya, dan tidak lupa saya lampirkan  juga dokumen CV saya.
</p>
<hr>
<button>Terimakasih</button>
";
$body->bodySection("100, 100, 225, 0.8");
echo "</div>";
include 'public/pages/about.html';
include 'public/pages/contact.html';
include 'public/pages/project.html';


echo ' 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>
      $(window).load(function() {
        var hash = "#'.$page.'";
        $("html, body").animate({scrollTop:$(hash).offset().top}, 0);
      });
    </script>
';

echo "</body>";


//Footer
$footer->textFooter('Ray Mondow Sagala');

include 'public/import/time.php';



