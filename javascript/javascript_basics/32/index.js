// var p = document.createElement('p');
// document.body.appendChild(p);
//
//
// var helloText = document.createTextNode("hello world");
// p.appendChild(helloText)
// p.id = "para-1";
// p.className = "write-up";

var myParagraphElements = document.getElementsByTagName('p');

console.log(myParagraphElements[0]);
console.log(myParagraphElements[1]);
console.log(myParagraphElements[2]);


for (var i = 0; i < myParagraphElements.length ; i++) {
    myParagraphElements[i].className="essay";
}

var essayParagraph = document.getElementsByClassName('essay');

console.log(essayParagraph);

myParagraphElements[0].style.color = "red";
myParagraphElements[0].style.backgroundColor = "orange";
document.getElementById('green').style.color = "green";
