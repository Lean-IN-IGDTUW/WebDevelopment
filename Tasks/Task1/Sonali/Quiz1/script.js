const restartbtn = document.getElementById('restart');
const prevbtn = document.getElementById('prev');
const nextbtn = document.getElementById('next');
const submitbtn = document.getElementById('submit');
const truebtn = document.getElementById('True');
const falsebtn = document.getElementById('False');
const userScore = document.getElementById('user-score');
const questionText = document.getElementById('question-text');


let currentQues=0;
var score=0;

let questions = [
    {
        question:"let keyword is used to declare variables globally.",
        answers:[
               {option:"True", answer:true},
               {option:"False", answer:false}
        ]
    },
    {
        question:"The external JavaScript file must contain <script> tag.",
        answers:[
               {option:"True", answer:false},
               {option:"False", answer:true}
        ]
    },
    {
        question:"Which of the following is not a reserved word in JavaScript?",
        answers:[
               {option:"Interface", answer:false},
               {option:"Program", answer:true}
        ]
    }
]



restartbtn.addEventListener('click', restart);
prevbtn.addEventListener('click', prev);
nextbtn.addEventListener('click', next);
submitbtn.addEventListener('click', submit);


function beginQuiz(){
    currentQues=0;
    questionText.innerHTML= questions[currentQues].question;
    truebtn.innerHTML=questions[currentQues].answers[0].option;
    truebtn.onclick=()=>{
        let an=0;
        if(questions[currentQues].answers[an].answer){
            if(score<3){
                score++;
            }
        }
        userScore.innerHTML=score;
        if(currentQues<2){
            next();
        }
    }

falsebtn.innerHTML=questions[currentQues].answers[1].option;
    falsebtn.onclick=()=>{
        let an=1;
        if(questions[currentQues].answers[an].answer){
            if(score<3){
                score++;
            }
        }
        userScore.innerHTML=score;
        if(currentQues<2){
            next();
        }
    }
    prevbtn.classList.add('hide');
}
beginQuiz;


function restart(){
    currentQues=0;
    prevbtn.classList.remove('hide');
    nextbtn.classList.remove('hide');
    submitbtn.classList.remove('hide');
    truebtn.classList.remove('hide');
    falsebtn.classList.remove('hide');
    score=0;
    userScore.innerHTML=score;
    beginQuiz();
}


function next(){
    currentQues++;
    if(currentQues>=2){
        nextbtn.classList.add('hide');
        prevbtn.classList.remove('hide');
    }
    questionText.innerHTML= questions[currentQues].question;
    truebtn.innerHTML=questions[currentQues].answers[0].option;
    truebtn.onclick=()=>{
        if(score<3){
            score++;
        }
    }
    userScore.innerHTML=score;
    if(currentQues<2){
        next();
    }
falsebtn.innerHTML=questions[currentQues].answers[1].option;
    falsebtn.onclick=()=>{
        let an=1;
        if(questions[currentQues].answers[an].answer){
            if(score<3){
                score++;
            }
        }
        userScore.innerHTML=score;
        if(currentQues<2){
            next();
        }
    }
    prevbtn.classList.remove('hide');
}

function prev(){
    currentQues--;
    if(currentQues>=0){
        prevbtn.classList.add('hide');
        nextbtn.classList.remove('hide');
    }
    questionText.innerHTML= questions[currentQues].question;
    truebtn.innerHTML=questions[currentQues].answers[0].option;
    truebtn.onclick=()=>{
        let an=0;
        if(questions[currentQues].answers[an].answer){
            if(score<3){
              score++;
            }
        }
        userScore.innerHTML=score;
        if(currentQues<2){
          next();
        }
    } 
    falsebtn.innerHTML=questions[currentQues].answers[1].option;
    falsebtn.onclick=()=>{
        let an=1;
        if(questions[currentQues].answers[an].answer){
            if(score<3){
                score++;
            }
        }
        userScore.innerHTML=score;
        if(currentQues<2){
            next();
        }
    }
    nextbtn.classList.remove('hide');
}

function submit(){
    currentQues=0;
    prevbtn.classList.add('hide');
    nextbtn.classList.add('hide');
    submitbtn.classList.add('hide');
    truebtn.classList.add('hide');
    falsebtn.classList.add('hide');
    questionText.innerHTML="Congratulations on submitting the quiz";
}




