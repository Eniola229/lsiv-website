const slider = document.getElementById("carouselTrack");
const slides = Array.from(document.querySelectorAll(".card-image-container"));


slides.forEach((slide, i) => {
    const slideImage = slide.querySelector("img");
    // remove image draggin
    if (slideImage)
        slideImage.addEventListener("dragstart", (e) => e.preventDefault());
});

slider.addEventListener("wheel", (event) => {
    event.preventDefault();
    slider.scrollLeft += event.deltaY; // Adjust for horizontal scrolling
});

// +++++++++++++++ MOBILE


let isDragging = false;
let startX;
let scrollLeft;

// Function to check if it's a mobile device
function isMobileDevice() {
  return /Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
}

// Enable drag-to-scroll only if it's a mobile device
if (isMobileDevice()) {
  carouselTrack.addEventListener("touchstart", (e) => {
    startX = e.touches[0].pageX - carouselTrack.offsetLeft;
    scrollLeft = carouselTrack.scrollLeft;
  });

  carouselTrack.addEventListener("touchmove", (e) => {
    const x = e.touches[0].pageX - carouselTrack.offsetLeft;
    const walk = (x - startX) * 2; // Adjust scroll speed
    carouselTrack.scrollLeft = scrollLeft - walk;
  });
} else {
  // Enable drag-to-scroll for desktops (if needed)
  carouselTrack.addEventListener("mousedown", (e) => {
    isDragging = true;
    carouselTrack.classList.add("dragging");
    startX = e.pageX - carouselTrack.offsetLeft;
    scrollLeft = carouselTrack.scrollLeft;
  });

  carouselTrack.addEventListener("mouseleave", () => {
    isDragging = false;
    carouselTrack.classList.remove("dragging");
  });

  carouselTrack.addEventListener("mouseup", () => {
    isDragging = false;
    carouselTrack.classList.remove("dragging");
  });

  carouselTrack.addEventListener("mousemove", (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - carouselTrack.offsetLeft;
    const walk = (x - startX) * 2; // Adjust scroll speed
    carouselTrack.scrollLeft = scrollLeft - walk;
  });
}
