
window.onload= function()
{
    this.show(0);

}
let point=0;
let questions=[
    {
        id: 1,
        question:"what is the full form of RAM?",
        answer:"Random Access Memory",
        options: [
            "Random Access Memory",
            "Randomly Access Memory",
            "Run Accept Memory",
            "None of these"
        ]
    },
    {
        id: 2,
        question:"what is the full form of CPU?",
        answer:"Centeral Processing Unit",
        options: [
            "Central Program Unit",
            "Centeral Processing Unit",
            "Centeral Preload Unit",
            "None of these"
        ]
    },
    {
        id: 3,
        question:"what is the full form of E-mail?",
        answer:"Electronic Mail",
        options: [
            "Electronic Mail",
            "Electric Mail",
            "Electricity Mail",
            "None of these"
        ]
    }
]

function submitform(e)
{
console.log("form submitted");
location.href="start.html";
}
function submit()
{ 
    
        sessionStorage.setItem("time",`${minutes} minutes and ${seconds} seconds`);
        clearInterval(mytime);
        location.href="end.html";
        return;
    
}

let question_count=0;
function next()
{
    let user_answer=document.querySelector("li.option.active").innerHTML;
   
    if(user_answer==questions[question_count].answer)
    {
        point++;
        
    sessionStorage.setItem("points",point);
    }
    if(question_count==questions.length-1)
    {
        sessionStorage.setItem("time",`${minutes} minutes and ${seconds} seconds`);
        clearInterval(mytime);
        location.href="end.html";
        return;
    }
    
    
    question_count++;
    show(question_count);
}
function show(count)
{
    let question=document.getElementById("questions");
    question.innerHTML=`<h1>Q${question_count+1}.${questions[count].question}</h2>
    <ol class="option-group">
        <li class="option ">${questions[count].options[0]}</li>
        <li class="option">${questions[count].options[1]}</li>
        <li class="option">${questions[count].options[2]}</li>
        <li class="option">${questions[count].options[3]}</li>
     </ol>
     `;    
     toggleActive();
}
function prev()
{
    question_count--;
    show(question_count);
}
function toggleActive()
{
    let option=document.querySelectorAll("li.option");
    for(let i=0; i<option.length; i++)
    {
        option[i].onclick=function()
        {
            for(let j=0; j<option.length; j++)
            {
                if(option[j].classList.contains("active"))
                {
                    option[j].classList.remove("active");
                }
            }
            option[i].classList.add("active");
        };
    }
}
