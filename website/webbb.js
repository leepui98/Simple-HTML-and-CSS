alert("Hi niece and nephew");
let rc2 = document.querySelectorAll("ul#topmenu");
 let g= document.getElementById("gg");
 
document.getElementById("gg").addEventListener("click",function(){
	alert(document.getElementById('heiheihei').value)
	
})

document.getElementById('happydrawing').addEventListener('mousemove', function(ev) {
	let ctx = this.getContext('2d')
	ctx.fillStyle = "skyblue"
	ctx.fillRect(ev.offsetX, ev.offsetY, 10, 10);
	ctx.lineTo(ev.offsetX, ev.offsetY)
	ctx.stroke()
});

const addBtn = document.getElementById('Add');
const table = document.getElementById("table");







