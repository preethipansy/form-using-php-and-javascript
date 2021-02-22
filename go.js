const parent=document.querySelector('.parent');
const baby=document.querySelector('.displayparent');
const btn22=document.querySelector('.btn');
const btn2=document.querySelector('.btn2');
const btn3=document.querySelector('.btn3');
const table1=document.querySelector('.mytable');

parent.addEventListener('click',myfun);
btn22.addEventListener('click',addtoeventlisterner)
baby.addEventListener('mouseover',myfun1)
baby.addEventListener('mouseleave',myfun3)
parent.addEventListener('mouseover',myfun2)
parent.addEventListener('mouseleave',myfun4)
btn2.addEventListener('click',displaytable)
btn3.addEventListener('click',closetable)
function displaytable(e)
{
 table1.style.display="block";
}
function closetable(e)
{
 table1.style.display="none";
}

function myfun(e)
{
console.log(baby.style.display);
console.log(parent.style.display);
if(baby.style.display==="none")
{

baby.style.display="none";
baby.removeEventListener('mouseleave',myfun3);
parent.removeEventListener('mouseleave',myfun4);
baby.removeEventListener('mouseover',myfun1)
parent.removeEventListener('mouseover',myfun2)
}

}
function addtoeventlisterner(e)
{
    baby.addEventListener('mouseover',myfun1)
    baby.addEventListener('mouseleave',myfun3)
    parent.addEventListener('mouseover',myfun2)
    parent.addEventListener('mouseleave',myfun4) 
   
}
function myfun1(e)

{
    
    if(parent.style.display==="")
    {
        // console.log("hello");
        parent.style.display="none";
       console.log(btn22.style.display);
       btn2.style.display="block";
       btn3.style.display="block";
    }
   
}
function myfun2(e)

{
    // console.log("hello",baby.style.display);
    if(baby.style.display==="")
    {
       
        baby.style.display="none";
    }
   
}
function myfun3(e){
    parent.style.display="";
    btn2.style.display="none";
    btn3.style.display="none";

}
function myfun4(e){
    baby.style.display="";
    btn2.style.display="none";
    btn3.style.display="none";
}