$(document).ready(function(){

	// Слайдер на одиночной странице

	$('.slider-box').slick({
  dots: false,
  infinite: true,
  speed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});



//scroll

$(".follow_button").on("click", function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
						scrollTop: $(anchor.attr('href')).offset().top
				}, 777);
				e.preventDefault();
				return false;
		});

		//E-mail Ajax Send
		$(".main-form").submit(function(evt) { //Change
			evt.preventDefault();
			var th = $(this);
			$.ajax({
				type: "POST",
				url: "mail.php", //Change
				data: th.serialize()
			}).done(function() {
				showThank();
				setTimeout(function() {
					// Done Functions
					th.trigger("reset");
				}, 1000);
			});
			showThank();
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
			return false;
		});

		$("#phone").mask("7-999-999-99-99");

});

// popup windows

var popupS = document.querySelector(".popup-question-s")
var closeBtn = document.querySelector(".popup-question-close");
var winPopup = document.querySelector(".wrap");

function showThank() {
  winPopup.classList.add("modal-content-show");
  popupS.classList.add("modal-content-show");
  setTimeout(function() {
    popupS.classList.add("modal-content-hide");
    winPopup.classList.add("modal-content-hide");
  }, 3000);
  setTimeout(function() {
    popupS.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popupS.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 3500);
};

function removePopup() {
  popupS.classList.add("modal-content-hide");
  winPopup.classList.add("modal-content-hide");
  setTimeout(function() {
    popupS.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popupS.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 600);

};


  closeBtn.addEventListener("click", function(event) {

    event.preventDefault();

    removePopup();

  });

window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();

    }

  }

});

winPopup.addEventListener("click", function(event) {

  if (winPopup.classList.contains("modal-content-show")) {

    removePopup();

  }

});
