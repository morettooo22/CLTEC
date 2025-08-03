function toggleMenu() {
  var menu = document.getElementById("menu");
  menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

var swiper = new Swiper(".mySwiper", {
loop: true,
autoplay: {
  delay: 200,
  disableOnInteraction: false,
},
});
