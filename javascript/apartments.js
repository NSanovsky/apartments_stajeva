

$(document).ready(function() {
    
    $('nav').addClass('bg-nav-cyan');
    

    $(".hid").fadeOut(1);
    $(".rd_more").click(function () {
      $(".hid").slideToggle(700);
      $(".rd_more").animate({ 'opacity': 0 }, 700, function () {
        $(".rd_more").text($(".rd_more").text() === "SEE MORE" ? "SEE LESS" : "SEE MORE").animate({ 'opacity': 1 }, 700);
      });
    });

   
});
 
 /*** GALLERY */

    // Open the modal-gal
  function openModal(){
      document.getElementById('mymodal-gal').style.display = "flex";
  }

  // Close the modal-gal
  function closeModal() {
      document.getElementById('mymodal-gal').style.display = "none";
  }
  
  var slideIndex = 1;

  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
      showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
      showSlides(slideIndex = n);
  }
  
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "flex";
 
}