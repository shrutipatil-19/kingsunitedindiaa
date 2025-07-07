let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');
let carouselSection = document.querySelector('.carousel-section');
let totalItems = document.querySelectorAll('.carousel .list .item').length;
let currentIndex = 0;

let lastScrollTime = 0;
carouselSection.classList.add('active');
document.body.style.overflowY = 'hidden'; // lock scroll initially

window.addEventListener('wheel', (e) => {
  if (!carouselSection.classList.contains('active')) return;

  const now = Date.now();
  if (now - lastScrollTime < 1500) return;
  lastScrollTime = now;

  if (e.deltaY > 0) {
    // scroll down
    if (currentIndex < totalItems - 1) {
      currentIndex++;
      moveSlider('next');
    } else {
      // last item, unlock scroll down
      carouselSection.classList.remove('active');
      document.body.style.overflowY = 'auto';
    }
  } else {
    // scroll up
    if (currentIndex > 0) {
      currentIndex--;
      moveSlider('prev');
    } else {
      // first item, unlock scroll up
      carouselSection.classList.remove('active');
      document.body.style.overflowY = 'auto';
    }
  }
});

function moveSlider(direction) {
  let items = document.querySelectorAll('.carousel .list .item');
  if (direction === 'next') {
    listHTML.appendChild(items[0]);
    carousel.classList.add('next');
  } else {
    listHTML.prepend(items[items.length - 1]);
    carousel.classList.add('prev');
  }
  setTimeout(() => {
    carousel.classList.remove('next', 'prev');
  }, 1000);
}

// back button + seeMore if you have them
let seeMoreButtons = document.querySelectorAll('.seeMore');
let backButton = document.getElementById('back');
seeMoreButtons.forEach((button) => {
  button.onclick = function(){
      carousel.classList.add('showDetail');
  }
});
backButton.onclick = function(){
  carousel.classList.remove('showDetail');
};

let touchStartY = 0;
let touchEndY = 0;

carouselSection.addEventListener('touchstart', (e) => {
  touchStartY = e.changedTouches[0].screenY;
});

carouselSection.addEventListener('touchend', (e) => {
  touchEndY = e.changedTouches[0].screenY;
  handleGesture();
});

function handleGesture() {
  const now = Date.now();
  if (now - lastScrollTime < 1500) return;
  lastScrollTime = now;

  if (!carouselSection.classList.contains('active')) return;

  if (touchStartY - touchEndY > 50) {
    // swipe up
    if (currentIndex < totalItems - 1) {
      currentIndex++;
      moveSlider('next');
    } else {
      carouselSection.classList.remove('active');
      document.body.style.overflowY = 'auto';
    }
  } else if (touchEndY - touchStartY > 50) {
    // swipe down
    if (currentIndex > 0) {
      currentIndex--;
      moveSlider('prev');
    } else {
      carouselSection.classList.remove('active');
      document.body.style.overflowY = 'auto';
    }
  }
}
