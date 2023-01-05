container=document.querySelector(".container");
output=document.querySelector(".output");
fill=document.querySelector(".fill");
click=document.querySelector(".button1");
click.addEventListener("click", ()=>{
var a=0;
var run=setInterval(frame,50);
function frame(){
    a++;
    if (a==101) {
        clearInterval(run);
        container.style.display="none";
        output.style.display="block";
    } else {
        var counter=document.querySelector(".counter");
        counter.textContent=a+"%";
        fill.style.width=a+"%";
    }
}
});