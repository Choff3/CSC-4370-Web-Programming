var memory_array = [];
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;
//declare variables for storing the numbers associated with images, chosen tiles, ids and another variable for number of tiles flipped
Array.prototype.memory_tile_shuffle = function(){//function for shuffling the tiles
    var i = this.length, j, temp;//var for iteration, random num and temp value
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));//set random integer between 1 and the length of the tiles array
        temp = this[j];//store the chosen index
        this[j] = this[i];
        this[i] = temp;
        //store the chosen random index in the current iteration index
    }
}
function newBoard(difficulty){
    tiles_flipped = 0;
    var output = '';
    memory_array.memory_tile_shuffle();
    //initialize tiles flipped and html output variable and randomize the tiles array

    for(var i = 0; i < memory_array.length; i++){
        output += '<div id="tile_'+i+'"><img src=images/'+memory_array[i]+'.jpg></div>';
    }
    document.getElementById('memory_board').innerHTML = output;
    output="";
    //loop through the random tiles array and output the images on the board

    setTimeout(function(){
        for(var i = 0; i < memory_array.length; i++){
            output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';//output tile with the flip tile method
        }
        document.getElementById('memory_board').innerHTML = output;
    }, difficulty);
    //delay according to the chosen difficulty and then change the board output to be the flipped image tiles

    setTimeout(function(){
        timer();
    }, difficulty-500);
    //set another delay and start the timer by calling the timer function
}
function memoryFlipTile(tile,val){
    if(tile.innerHTML == "" && memory_values.length < 2){//if the clicked tiles is less than 2
        tile.innerHTML = '<img src=images/'+val+'.jpg>';
        if(memory_values.length == 0){
            memory_values.push(val);
            memory_tile_ids.push(tile.id);
        }
        //push to chosen and id's array
        else if(memory_values.length == 1){
            memory_values.push(val);
            memory_tile_ids.push(tile.id);
            //push to chosen and id's array
            if(memory_values[0] == memory_values[1]){//if the tiles numbers are a match
                tiles_flipped += 2;
                memory_values = [];
                memory_tile_ids = [];
                //increase the tiles flipped count and clear the 2 arrays
                if(tiles_flipped == memory_array.length){
                    alert("You Win!");
                    location.reload();
                }//if all tiles have been flipped, display alert and reload the page
            }
            else {
                function flip2Back(){
                    var tile_1 = document.getElementById(memory_tile_ids[0]);
                    var tile_2 = document.getElementById(memory_tile_ids[1]);
                    tile_1.innerHTML = "";
                    tile_2.innerHTML = "";
                    memory_values = [];
                    memory_tile_ids = [];
                }
                //if the tiles are not a match, clear the images and the arrays
                setTimeout(flip2Back, 1000);//wait 1 second before flipping the tiles back over
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
    //set time according to number of pictures
    
    var countDownDate = new Date().getTime()+time;
    //set the date to countdown to: current date + set time

    var x = setInterval(function() {//set the timer to x
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        //set current date, minutes, seconds and distance between current date and timer date

        document.getElementById("timer").innerHTML = '<b>'+ minutes + ":" + seconds+'</b>';
        //output the time on the page

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "Out of time!";
            alert("You ran out of time.");
            location.reload();
        }
        //if the timer distance reaches 0 (out of time), stop the timer, change the time on the page, display alert and reload the page.
    }, 1000);
}

function radioCheck(){
    if(document.getElementById("numPics8").checked)
        memory_array = ['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8'];
    if(document.getElementById("numPics10").checked)
        memory_array = ['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8','9','9','10','10'];
    if(document.getElementById("numPics12").checked)
        memory_array = ['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8','9','9','10','10','11','11','12','12'];
}
//function for setting the memory array according to which radio button was pressed