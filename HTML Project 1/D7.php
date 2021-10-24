<?php
session_start();
$_SESSION['gem 4'] = 1;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Choosing the left door</title>
    <link rel="stylesheet" href="maze.css"/>
</head>

<body>

<div>
    <div class="container">
        <div class="header">
        <h1>Adventure Maze Game</h1>
	</div>



<img src="rescue.gif" alt="rescued" width="500" height="450">

<div class="question">
<p>You took the left iron door.</p>
<p>This door ends up leading you to an old bunker with a radio still intact. You're able to contact someone nearby and they're on the way to help you. </p>

<p>A rescue team eventually digs you out of your underground maze, and gets you some well-earned food and medicine. You're free!</p>
<p>You have collected a Gem!
<img src="gem.jpg" alt="cave in" width="50" height="50"></p>
<p>This was a good ending! You won the game! Try again from the start or go back and check out the other endings!</p>
</div>

<div class="choice">
<button><a href="A1.html">Go to the start</a></button>
</div>
<button class="back"><a href="C4.html">Back</a></button>



<audio controls autoplay>
  <source src="Rescue Helicopter Sound Effect (128 kbps).mp3" type="audio/mpeg">
  
  browser does not support the audio
  
  </audio>
  
  </div>
</div>
  
</body>
</html>
