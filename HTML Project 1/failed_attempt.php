<?php
session_unset();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Not enough gems</title>
    <link rel="stylesheet" href="maze.css"/>
</head>

<body>

<div>
    <div class="container">
        <div class="header">
        <h1>Adventure Maze Game</h1>
	</div>

<img src="water.gif" alt="Drowning" width="500" height="300">

<div class="question">
<p>Seems like you don't have enough gems...</p>
<p>The door doesn't budge at all. </p>
<p>Maybe try looking around a bit more?</p>
</div>

<div class="choice">
<button><a href="A1.html">Go to the start</a></button>
</div>

<audio controls autoplay>

  <source src="Scary Sounds Drowning.mp3" type="audio/mpeg">
  
  browser does not support the audio
  
  </audio>
  
  </div>
</div>
  
</body>
</html>