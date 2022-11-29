let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
}

// scoll horizon
const card = document.querySelector(".card");
firstCards = card.querySelectorAll(".cards")[0];
arrowIcons = document.querySelectorAll(".container1 i");


let isDragStart = false, prevPageX, prevScrollLeft;
let firstCardsWidth = firstCards.clientWidth + 14;
let scrollWidth = card.scrollWidth - card.clientWidth;

const showHideIcons = () => {
	arrowIcons[0].style.display = card.scrollLeft == 0 ? "none" : "block";
	arrowIcons[1].style.display = card.scrollLeft == scrollWidth ? "none" : "block";

}

arrowIcons.forEach(icon => {
	icon.addEventListener("click", () => {
		card.scrollLeft += icon.id == "left" ? -firstCardsWidth : firstCardsWidth;
		setTimeout(() => showHideIcons(), 60);
	});
});

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
	card.classList.add("dragging");
	let positionDiff = e.pageX - prevPageX;
	card.scrollLeft = prevScrollLeft - positionDiff;
}

const dragStop = () => {
	isDragStart = false;
	card.classList.remove("dragging");
}

card.addEventListener("mousedown", dragStart);
card.addEventListener("mousemove", dragging);
card.addEventListener("mouseup", dragStop);

// button email alert
function myFunction() {
	alert("Thank You For Your Enthusiasm!");
  }