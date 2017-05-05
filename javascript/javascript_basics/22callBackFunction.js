
// function callBackTester(callback){
//     callback();
// };
// callBackTester(alert);

var a = 0, b = 0;

function add(a, b){
    return a + b;
}

function multiplication(a, b){
    return a * b;
}

function mathCalc(a, b, callback){
    callback();
};

console.log(mathCalc(1000, 10, add));
console.log(mathCalc(1000, 10, multiplication));


//another progran

function exampleFunc(arg1, arg2, callback){
    var my_number = arg1 + arg2;
    callback(my_number);
};

exampleFunc(5, 15, function(n){
    console.log(n);
});
