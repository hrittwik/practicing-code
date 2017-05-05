var car = ["toyota", "bmw", "porche", "lambo"]

// console.log(car.length);
var newCar = "pagani";

for (var i = 0; i < car.length; i++) {
    // console.log(car[i]);
    if( car[i] === newCar ){
        console.log(newCar + " already exists!");
    }
    else if( i === car.length - 1 ) {
        console.log(newCar + " doesn't exists!");
    }
}
