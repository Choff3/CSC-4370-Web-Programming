if(document.getElementById("numPics8").checked)
    var memory_array = ['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8'];
if(document.getElementById("numPics10").checked)
    var memory_array = ['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8','9','9','10','10'];
if(document.getElementById("numPics12").checked)
    var memory_array = ['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8','9','9','10','10','11','11','12','12'];
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;
Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function newBoard(difficulty){
    tiles_flipped = 0;
    var output = '';
    memory_array.memory_tile_shuffle();

    for(var i = 0; i < memory_array.length; i++){
        output += '<div id="tile_'+i+'"><img src=images/'+memory_array[i]+'.jpg></div>';
    }
    document.getElementById('memory_board').innerHTML = output;
    output="";

    setTimeout(function(){
        for(var i = 0; i < memory_array.length; i++){
            output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
        }
        document.getElementById('memory_board').innerHTML = output;
    }, difficulty);
    timer();
}
function memoryFlipTile(tile,val){
    if(tile.innerHTML == "" && memory_values.length < 2){
        tile.innerHTML = '<img src=images/'+val+'.jpg>';
        if(memory_values.length == 0){
            memory_values.push(val);
            memory_tile_ids.push(tile.id);
        }
        else if(memory_values.length == 1){
            memory_values.push(val);
            memory_tile_ids.push(tile.id);
            if(memory_values[0] == memory_values[1]){
                tiles_flipped += 2;
                // Clear both arrays
                memory_values = [];
                memory_tile_ids = [];
                // Check to see if the whole board is cleared
                if(tiles_flipped == memory_array.length){
                    alert("You Win!");
                    document.getElementById('memory_board').innerHTML = "";
                    //newBoard();
                }
            }
            else {
                function flip2Back(){
                    // Flip the 2 tiles back over
                    var tile_1 = document.getElementById(memory_tile_ids[0]);
                    var tile_2 = document.getElementById(memory_tile_ids[1]);
                    tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
                    tile_1.innerHTML = "";
                    tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
                    tile_2.innerHTML = "";
                    // Clear both arrays
                    memory_values = [];
                    memory_tile_ids = [];
                }
                setTimeout(flip2Back, 700);
            }
        }
    }
}

function timer(){
    if(document.getElementById("numPics8").checked)
        var time = 120000;
    if(document.getElementById("numPics10").checked)
        var time = 150000;
    if(document.getElementById("numPics12").checked)
        var time = 180000;
    
    var countDownDate = new Date().getTime()+time;

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = minutes + ":" + seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "Out of time!";
            alert("You ran out of time.");
            location.reload();
        }
    }, 1000);
}