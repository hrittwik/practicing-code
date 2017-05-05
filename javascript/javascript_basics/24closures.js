function box(){

    var stuff = "The Stuff";

    return function getStuffAndTheReturnIt(){
        console.log(stuff);
    }
}

var getStuffOutOfTheBox = box();

getStuffOutOfTheBox();


//another function
function outerFunc(){
    var counter = 0;
    return function showData(){
        return counter++;
    }
}

var inner = outerFunc();

for (var i = 0; i < 5; i++){
    console.log(inner());
}
