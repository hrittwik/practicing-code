var person1 = {
    name: "Hrittwik",
    job: "NEET",
    whatDoesHeLike: function(){
        console.log("anime");
    },
    innerMeaning: {
        thereIsntOne: function(){console.log("die")}
    }
};

console.log(person1.name);
console.log(person1.job);
person1.whatDoesHeLike();


var person2 = {}
person2.name = "some name";
person2.job = "some job";
person2.whatDoesHeLike = function(){
    console.log("job");
}
