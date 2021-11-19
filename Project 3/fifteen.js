var downloadTimer;
var timeleft = 540;
function timer() {
  if (timeleft <= -1) {
    clearInterval(downloadTimer);
    alert("Time's Up!");

  } else {
    document.getElementById("timer").innerHTML = timeleft + " seconds remaining";
  }
  timeleft -= 1;
}
var audio = new Audio('30 Second Timer With Jeopardy Thinking Music.mp3')
audio.loop = true;
document.onreadystatechange = function () {
  window.onload = function () {
    shuffle(shuffleTrack);
    downloadTimer = setInterval(timer, 1000);
    audio.play();
  };

  if (document.readyState == "complete") {
    var grid = [[0, 0, false], [100, 0, false], [200, 0, false], [300, 0, false],
    [0, 100, false], [100, 100, false], [200, 100, false], [300, 100, false],
    [0, 200, false], [100, 200, false], [200, 200, false], [300, 200, false],
    [0, 300, false], [100, 300, false], [200, 300, false], [300, 300, true]];

    var areaContents = document.getElementById("puzzlearea").children;
    var shuffleTrack = 0;
    var numberCount = 0;
    document.getElementById("overall").insertAdjacentHTML('beforeend', "Number of moves: <span id='numberCount'>0</span>");

    function checkComplete() {
      var check = ""
      var arr = document.getElementById("puzzlearea").children;
      for (i = 0; i < arr.length; i++) {
        check = check + arr[i].innerHTML
      };
      if (check == "123456789101112131415" && numberCount > 20) {
        celebrate()
        return true;
      }
    }

    function reload() {
      alert("hey")
    }

    function shuffle(shuffleTrack) {
      timeleft = 540;
      timer();
      var rand = getElement();
      shiftPuzzlePiece.call(areaContents[rand]);
      if (shuffleTrack < 199) {
        shuffleTrack = shuffleTrack + 1;
        shuffle(shuffleTrack)
      }
      else {
        shuffleTrack = 0;
        numberCount = 0;
        document.getElementById("numberCount").innerHTML = numberCount;
      }
    }
	
	function celebrate() {
      alert("Good Job!");
      document.getElementById("puzzlearea").innerHTML = "<div>" +
        "<img onClick='location.reload();' src='super-mario.jpg'/></div><br/><h1 onClick='location.reload();'>Good Job</h1><br/><img src='won.gif'/>";
      document.getElementById("controls").outerHTML = "";
	  document.getElementById("timer").outerHTML = "";
    }
	
	document.getElementById("solveButton").onclick = function () {
      celebrate();
    }
	

    function getElement() {
      var movables = getMovableCells();
      return movables[Math.floor(Math.random() * movables.length)];
    }

    function openBlock() {
      for (i = 0; i < grid.length; i++) {
        if (grid[i][2] == true) {
          return i;
        }
      }
    }

    function getMovableCells() {
      var open = openBlock()
      var movables = [open - 4, open - 1, open + 1, open + 4]
      var count = movables.length;
      for (i = 0; i < count; i++) {
        if (movables[i] < 0) { movables[i] = null }
        if (movables[i] > 15) { movables[i] = null }
        if (open == 3 || open == 7 || open == 11) { movables[movables.indexOf(open + 1)] = null }
        if (open == 4 || open == 8 || open == 12) { movables[movables.indexOf(open - 1)] = null }
      }
      movables = movables.filter(function (val) { return val !== null; })
      return movables;
    }

    function addPuzzlePieceHover() {
      this.className = this.className + " puzzlepiecehover";
    }

    function removePuzzlePieceHover() {
      this.className = "puzzlepiece";
    }

    function shiftPuzzlePiece() {
      numberCount = numberCount + 1;
      document.getElementById("numberCount").innerHTML = numberCount;
      this.style.left = grid[openBlock()][0] + "px";
      this.style.top = grid[openBlock()][1] + "px";
      this.className = "puzzlepiece";
      var collection = Array.prototype.slice.call(areaContents)
      var movedBlock = collection.indexOf(this)
      var openBlockIndex = collection.indexOf(areaContents[openBlock()])

      var switchVariable = collection[movedBlock];
      collection[movedBlock] = collection[openBlockIndex];
      collection[openBlockIndex] = switchVariable;

      document.getElementById("puzzlearea").innerHTML = ""
      for (i = 0; i < collection.length; i++) {
        document.getElementById("puzzlearea").innerHTML = document.getElementById("puzzlearea").innerHTML + collection[i].outerHTML;
      }
      grid[openBlock()][2] = false;
      grid[movedBlock][2] = true;
      removeEventListeners(getMovableCells());
      if (checkComplete() == true) { return }
      addEventListeners(getMovableCells());
    }

    function addEventListeners(movables) {
      for (i = 0; i < movables.length; i++) {
        areaContents[movables[i]].addEventListener("mouseover", addPuzzlePieceHover, false);
        areaContents[movables[i]].addEventListener("mouseout", removePuzzlePieceHover, false);
        areaContents[movables[i]].addEventListener("click", shiftPuzzlePiece);
      }
    }

    function removeEventListeners(movables) {
      for (i = 0; i < movables.length; i++) {
        areaContents[movables[i]].removeEventListener("mouseover", addPuzzlePieceHover, false);
        areaContents[movables[i]].removeEventListener("mouseout", removePuzzlePieceHover, false);
        areaContents[movables[i]].removeEventListener("click", shiftPuzzlePiece, false);
      }
    }

    function initializeArea() {
      var x = 0;
      var y = 0;
      for (i = 0; i < areaContents.length; i++) {
        areaContents[i].setAttribute("class", "puzzlepiece");
        areaContents[i].style.top = y + "px";
        areaContents[i].style.left = x + "px";
        areaContents[i].style.backgroundPosition = "-" + x + "px " + "-" + y + "px";
        if (x == 300) {
          var y = y + 100;
          var x = 0;
        }
        else { var x = x + 100; }
      }
      document.getElementById("puzzlearea").innerHTML = document.getElementById("puzzlearea").innerHTML + "<div class='empty'></div>"
      addEventListeners(getMovableCells());

    }
	
    document.getElementById("shufflebutton").onclick = function () {
      shuffle(shuffleTrack);
    }
    initializeArea();

  }
}