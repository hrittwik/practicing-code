function add(a, b){
    return a + b;
}

function doMath(){
    return add(1, 2);
}

console.log( doMath() );

function doMath2(a, b){
    return function(){ return a + b }
}

var doMathReturn = doMath2(10, 10);
console.log(doMathReturn());
