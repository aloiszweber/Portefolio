// Get the carousel elements
const carousel = document.querySelector(".carousel");
const carouselItems = document.querySelectorAll(".carousel-item");
const carouselDescriptions = document.querySelectorAll(".carousel-description");
console.log(carouselDescriptions);

// Set the initial active item
let activeIndex = 0;
carouselItems[activeIndex].classList.add("active");

// Function to show the next carousel item
function showNextItem() {
  // Remove the active class from the current item
  carouselItems[activeIndex].classList.remove("active");

  // Increment the active index, wrapping around to 0 if necessary
  activeIndex = (activeIndex + 1) % carouselItems.length;

  // Add the active class to the new item
  carouselItems[activeIndex].classList.add("active");
}

// Automatically cycle through the carousel items
setInterval(showNextItem, 12000);
