
const restartBtn=document.getElementById('restart');
const prevBtn= document.getElementById('prev'); 
const nextBtn= document.getElementById('next');
const submitBtn= document.getElementById('submit');
const trueBtn= document.getElementById('true');
const falseBtn= document.getElementById('false');
const userscore= document.getElementById('user-score');
const questionText= document.getElementById('question-text');

let currentQuestion=0; 
var score=0;
let questions=[
    {
        question: "Who curse the lord Krishna?",
        answer:[ 
            {
                option: "Gandhari",answer:true
            },
            {option: "Kunti",answer: false} 
        ]
    },
    {
        question: "Who was Icarus?",
        answer:[
            {option: "Guy Flying too close to the sun",answer:true },
            {option: "The wealthy Guy",answer: false} 
        ]
    },
    {
        question: "Who Is Hela(Norse Mythology)",
        answer:[
            {option: "Loki's Daughter",answer:true },
            {option: "Odin's daughter",answer: false}  
        ]
    }
]

    restartBtn.addEventListener('click',restart);
    prevBtn.addEventListener('click',prev); 
    nextBtn.addEventListener('click',next);
    submitBtn.addEventListener('click',submit);


function beginQuiz(){
    currentQuestion=0;
    questionText.innerHTML= questions[currentQuestion].question;
    trueBtn.innerHTML= questions[currentQuestion].answer[0].option;
    trueBtn.onclick=()=>{
        let ano=0;
        if(questions[currentQuestion].answer[ano].answer){
            if(score<3){
                score++;
            }
        }
        userscore.innerHTML= score;
        if(currentQuestion<2){
            next();
        }
    }
    falseBtn.innerHTML= questions[currentQuestion].answer[1].option; 
    falseBtn.onclick=()=>{
        let ano=1; 
        if(qustion[currentQues].answer[ano].answer){
            if(score<3){
                score++;
            }
        }
        userScore.innerHTML= score;
        if(currentQuestion<2){
            next();
        }
    }
    prevBtn.classList.add('hide'); 
}

beginQuiz();

function restart(){
    currentQuestion = 0;
    prevBtn.classList.remove('hide'); 
    nextBtn.classList.remove('hide');
    submitBtn.classList.remove('hide');
    trueBtn.classList.remove('hide');
    falseBtn.classList.remove('hide');
    score=0;
    userscore.innerHTML= score; 
    beginQuiz();
}

 function next(){
     currentQuestion++;
     if(currentQuestion>=2){
         nextBtn.classList.add('hide');
          prevBtn.classList.remove('hide'); 
     }
     questionText.innerHTML= questions[currentQuestion].question;
    trueBtn.innerHTML= questions[currentQuestion].answer[0].option; 
    trueBtn.onclick=()=>{
        let ano=0;
        if(questions[currentQuestion].answer[ano].answer){ 
            if(score<3){
                score++;
            }
        }
        userscore.innerHTML= score; 
        if(currentQuestion<2){
            next();
        }
    }
    falseBtn.innerHTML= questions[currentQuestion].answer[1].option; 
    falseBtn.onclick=()=>{
        let ano=1; 
        if(questions[currentQuestion].answer[ano].answer){ 
            if(score<3){
                score++;
            }
        }
        userscore.innerHTML= score; 
        if(currentQuestion<2){
            next();
        }
    }
    prevBtn.classList.remove('hide');
    
 }

 function prev(){
     currentQuestion--;
     if(currentQuestion<=0){
         prevBtn.classList.add('hide'); 
         nextBtn.classList.remove('hide');
     }
     questionText.innerHTML= questions[currentQuestion].question; 
     trueBtn.innerHTML= questions[currentQuestion].answer[0].option;
     trueBtn.onclick=()=>{
        let ano=0;
        
        if(questions[currentQuestion].answer[ano].answer){ 
            if(score<3){
                score++;
            }
        }
        userscore.innerHTML= score; 
        if(currentQuestion<2){
            next();
        }
    }
    falseBtn.innerHTML= questions[currentQuestion].answer[1].option; 
    falseBtn.onclick=()=>{
        let ano=1; 
 
        if(questions[currentQuestion].answer[ano].answer){ 
            if(score<3){
                score++;
            }
        }
        userscore.innerHTML= score; 
        if(currentQuestion<2){
            next();
        }
    }
    nextBtn.classList.remove('hide');
 }
 function submit(){
     prevBtn.classList.add('hide');
     nextBtn.classList.add('hide');
     submitBtn.classList.add('hide');
     trueBtn.classList.add('hide');
     falseBtn.classList.add('hide');
     questionText.innerHTML="Congratulation on Submitting the quiz";
 }