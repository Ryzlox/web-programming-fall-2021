

var ids = [
    "one",      "two",      "three",   "four",
    "five",     "six",      "seven",   "eight",
    "nine",     "ten",      "eleven",  "twelve",
    "thirteen", "fourteen", "fifteen", ""
];



var ids_numeric = {
    "one":1,       "two":2,       "three":3,    "four":4,
    "five":5,      "six":6,       "seven":7,    "eight":8,
    "nine":9,      "ten":10,      "eleven":11,  "twelve":12,
    "thirteen":13, "fourteen":14, "fifteen":15, "sixteen":16
};

var selected_background;


function initializeGame() {
    selected_background = "super-mario"

    

    for (var i = 0; i < ids.length - 1; i++) {
        document.getElementById(ids[i]).className = "tile " + "super-mario";
    }
}

