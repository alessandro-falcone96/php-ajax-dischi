<?php
  // include 'index.html';

  $arrayCD = [
    [
      "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
      "title" => "New Jersey",
      "author" => "Bon Jovi",
      "genre" => "Rock",
      "year" => "1988"
    ],
    [
      "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
      "title" => "Live at Wembley 86",
      "author" => "Queen",
      "genre" => "Pop",
      "year" => "1992"
    ],
    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
      "title" => "Ten's Summoner's Tales",
      "author" => "Sting",
      "genre" => "Pop",
      "year" => "1993"
    ],
    [
      "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
      "title" => "Steve Gadd Band",
      "author" => "Steve Gadd Band",
      "genre" => "Jazz",
      "year" => "2018"
    ],
    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
      "title" => "Brave new World",
      "author" => "Iron Maiden",
      "genre" => "Metal",
      "year" => "2000"
    ],
    [
      "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
      "title" => "One more car, one more raider",
      "author" => "Eric Clapton",
      "genre" => "Rock",
      "year" => "2002"
    ],
    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
      "title" => "Made in Japan",
      "author" => "Deep Purple",
      "genre" => "Rock",
      "year" => "1972"
    ],
    [
      "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
      "title" => "And Justice for All",
      "author" => "Metallica",
      "genre" => "Metal",
      "year" => "1988"
    ],
    [
      "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
      "title" => "Hard Wired",
      "author" => "Dave Weckl",
      "genre" => "Jazz",
      "year" => "1994"
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
      "title" => "Bad",
      "author" => "Michael Jacjson",
      "genre" => "Pop",
      "year" => "1987"
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="dist/app.css">
    <!-- Title -->
    <title>Vue Dischi</title>
  </head>
  <body>
    <header>
      <img src="logo.png" alt="">
    </header>
    <main>

    <div class="container-album">

      
      <?php 
      
        foreach ($arrayCD as $disco) {
          
          echo "<div class='card-album'>

            <img : src='" . $disco["poster"] . "'>

            <h3> " . $disco["title"] . "</h3>

            <h5> " . $disco["author"] . "<br>" . $disco["year"] . "</h5>

          </div>";

        }

        

      ?>
      

    </div>

    </main>


  </body>
</html>