var quizMaker = (function(){
    var quiz = {
        question: null,
        answer: null,

        startQuiz: function(ques, ans){
            quiz.question = ques;
            quiz.answer = ans;
            var promptReply = prompt(ques);
            if(promptReply === ans){
                alert("yes that is correct");
            }else{
                alert("no that is not correct");
            }
        },
        init: function(ques, ans){
            quiz.startQuiz(ques, ans);
        }
    }
    return quiz;
}());

var myQuiz = quizMaker;
myQuiz.init("The sky is the color ______", "blue");

console.log(myQuiz.question);
console.log(myQuiz.answer);
