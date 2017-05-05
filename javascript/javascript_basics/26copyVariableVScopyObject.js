var myVar = "an item";

var anotherVar = myVar;

var anotherVar = "Anoether Var";

console.log(myVar);


var originalObj = {
    prop: "my prop"
};

// var newObject = originalObj;
//
// newObject.prop = "something different"
//
// console.log(originalObj.prop);

var newObject = Object.create(originalObj);

newObject.prop = "different prop";
console.log(originalObj.prop);
