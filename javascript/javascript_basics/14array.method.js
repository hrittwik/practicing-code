var food = ["fish", "vegetables", "meat"];
var junkFood = ["pizza", "burger", "beer"];

var allFood = food.concat(junkFood);

console.log(allFood);
console.log(food.length);


allFood.splice(3, 0, "juice", "grains");
console.log(allFood);

allFood.splice(5, 6,"potato");
console.log(allFood);

console.log(allFood.sort());

num = [1,2,4,5,3,6,1,2,7,5,6,15,23,53];
console.log(num.reverse());
console.log(num.pop());
console.log(num);
console.log(num.shift());
num.push(234);
console.log(num);
