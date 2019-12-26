<?php

require_once( 'include/start.php' );

//$games_sql = db::$link->query("SELECT * FROM games ");
//$games_row = $games_sql->fetch_object();
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>IEDb - Internet Entertainment Database</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <div class="main-title">Internet Entertainment Database</div>
        <div class="container-boxes">
          <div class="box games-box">
            <div class="box-image">
              <i class="material-icons">games</i>
            </div>
            <div class="box-content">
              <div class="box-title">Games</div>
              <div class="box-text">240 Spiele 20'000 Stunden lang gespielt</div>
            </div>
          </div>
          <div class="box music-box">
            <div class="box-image">
              <i class="material-icons">music_note</i>
            </div>
            <div class="box-content">
              <div class="box-title">Music</div>
              <div class="box-text">700 Lieder 20'000 Stunden gehört</div>
            </div>
          </div>
          <div class="box movies-box">
            <div class="box-image">
              <i class="material-icons">movie</i>
            </div>
            <div class="box-content">
              <div class="box-title">Movies</div>
              <div class="box-text">400 Filme 10'000 Stunden geschaut</div>
            </div>
          </div>
          <div class="box series-box">
            <div class="box-image">
              <i class="material-icons">play_arrow</i>
            </div>
            <div class="box-content">
              <div class="box-title">Series</div>
              <div class="box-text">120 Serien 8'000 Stunden lang geschaut</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
