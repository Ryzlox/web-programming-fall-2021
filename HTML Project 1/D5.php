<?php
session_start();
$_SESSION['gem 3'] = 1;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taking the left door</title>
    <link rel="stylesheet" href="maze.css"/>
</head>

<body>

<div>
    <div class="container">
        <div class="header">
        <h1>Adventure Maze Game</h1>
	</div>

<img src="poison.gif" alt="dart" width="400" height="300">

<div class="question">
<p>You unlocked the black door on the left.</p>
<p>The key jams in the keyhole and won't come out. As you step through the doorway you are met with a series of poison dart traps aligned on the walls. With no antidote or help, you end up dying.</p>


<p>This was a bad ending! Try again from the start or go back and check out the other endings!</p>
</div>

<div class="choice">
<button><a href="A1.html">Go to the start</a></button>
</div>
<button class="back"><a href="C3.html">Back</a></button>


<audio controls autoplay>

  <source src="Man Screaming Sound Effect (128 kbps).mp3" type="audio/mpeg">
  
  browser does not support the audio
  
  </audio>
  
  </div>
</div>


</body>
</html>
