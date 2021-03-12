let meat= document.getElementsByClassName("vege")
for(let e of meat){
	e.style.color="black";
}
meat=document.querySelectorAll("ul#topmenu")
let newLi = document.createElement('li')
newLi.innerText = "Haiya"

meat[0].appendChild(newLi);

let r= document.getElementById('rc1')
r.addEventListener("click",function(){
	r.style.color='turquoise';
	r=4
});


function add (a,b){
	let c = a+b;
	if (true){
		r=1
	}
	console.log(r)
	return c;
	}
	
	console.log(add(9,2))