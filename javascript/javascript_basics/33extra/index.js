var div = document.createElement('div');

document.body.appendChild(div);
div.id = "box"
div.className = "box-style-1";

div.addEventListener('click', next, false);

var counter = 1;

function next(){
    counter++;
    if(counter > 3){
        counter = 1;
    };
    div.className = "box-style-" + counter;
};
