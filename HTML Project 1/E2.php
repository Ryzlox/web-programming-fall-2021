<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Going behind the bookshelf</title>
    <link rel="stylesheet" href="maze.css"/>
</head>

<body>

<div>
    <div class="container">
        <div class="header">
        <h1>Adventure Maze Game</h1>
	</div>

<img src="indi.JPG" alt="Thinking" width="500" height="300">

<div class="question">
<p>You went behind the bookshelf.</p>
<p>You come to a large cave with lined with torches, leading to a stone wall with 4 empty slots in them. </p>
<p>Maybe there's something you can do here to unlock the door.</p>

</div>

<div class="choice">
<?php
	if(isset($_SESSION['gem 1']) && isset($_SESSION['gem 2']) && isset($_SESSION['gem 3']) && isset($_SESSION['gem 4'])) {
		echo "<button><a href='secret_ending.php'>Place your items into the door</a></button>";
	} else {
		echo "<button><a href='failed_attempt.php'>Place your items into the door</a></button>";
	}
	?>
</div>
<button class="back"><a href="C3.html">Back</a></button>


<audio controls autoplay>

  <source src="The Idol Temple (128 kbps).mp3" type="audio/mpeg">
  
  browser does not support the audio
  
  </audio>
  
</div>
  
</body>
</html>
