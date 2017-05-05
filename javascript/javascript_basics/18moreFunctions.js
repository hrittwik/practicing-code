// var data = "gibberish";
//
// function giveMeData(dataGiven){
//     console.log(dataGiven);
// }
//
// console.log(giveMeData(data));


var storage = [];

function sendData(){
    storage.push('Store the data');
    storage.push('even more data');
    storage.push(43);
};

sendData();

function retriveData(d, i){
    return d[i];
};

console.log(retriveData(storage,0));
console.log(retriveData(storage,1));
