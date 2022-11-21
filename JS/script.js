let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
}

// scoll horizon
const card = document.querySelector(".card");

let isDragStart = false, prevPageX, prevScrollLeft;

const dragStart = () => {
	//mouse down event
	isDragStart = true;
	prevPageX = e.pageX;
	prevScrollLeft = card.scrollLeft;
}

const dragging = (e) => {
	// mouse pointer
	if(!isDragStart) return;
	e.preventDefault();
	let positionDiff = e.pageX - prevPageX;
	card.scrollLeft = prevScrollLeft - positionDiff;
}

const dragStop = () => {
	isDragStart = false;
}

card.addEventListener("mousedown", dragStart);
card.addEventListener("mousemove", dragging);
card.addEventListener("mouseup", dragStop);

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}