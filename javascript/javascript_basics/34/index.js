var submitButton = document.getElementById('submit-button');
submitButton.addEventListener('click', saveName, false);

function saveName(){
    var nameVal = document.getElementById('your-name').value;
    console.log(nameVal);


    var name = document.getElementById('your-name');
    var outputElement = document.getElementById('output');

    outputElement.innerHTML = nameVal;

    name.value = "";


};
