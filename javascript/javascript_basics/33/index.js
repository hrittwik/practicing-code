var parent = document.getElementById("parent");
var child = document.getElementById("child");
// parent.parentFunc = function () {
//     alert("hellow world");
// };

parent.addEventListener("click", parentFunc, false);

child.addEventListener("click", childFunc, false);

function parentFunc(e) {
    alert("parent div");
    e.stopPropagation();
};

function childFunc(e){
    alert("child div");
    e.stopPropagation();
};
