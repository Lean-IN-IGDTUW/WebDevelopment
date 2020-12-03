function check(){
    var c=0;
    var q1=document.quiz.question1.value;
    var q2=document.quiz.question2.value;
    var result=document.getElementById('result');
    var quiz=document.getElementById('quiz');
    if(q1=="C") {c++}
    if(q2=="3") {c++}
    quiz.style.display="none";
    result.innerHTML=`RESULT: <br /><br /> You scored ${c}/2 <br /><br /> Congratulations! <br /><br />`;
    result.innerHTML+=`<input type="button" name="" value="Try Again!" id="button1" onclick="window.location.reload()">`;
}
