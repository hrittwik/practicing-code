// constructor

function Animal(size, type, color){
    this.size = size;
    this.type = type;
    this.color = color;
}

Animal.prototype.getSize = function(){console.log( this.size )};

var cat = new Animal("big", "lion", "yellow");

console.log(cat.size);
console.log(cat.type);
console.log(cat.color);
cat.getSize();

// factory functions

function animal(size, type, color){
    animalObj = {};
    animalObj.size = size;
    animalObj.type = type;
    animalObj.color = color;
    animalObj.getSize = function(){ console.log(animalObj.size)};


    return animalObj;
}

var cat = animal("big", "lion", "yellow");

console.log(cat.size);
console.log(cat.type);
console.log(cat.color);
cat.getSize();
