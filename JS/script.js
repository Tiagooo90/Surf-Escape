<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>,
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-9FvIF7XOgdB5vMLpBEEeJmrgcv5QMrjD8pA8kTq7rMI7/0X3YzNSc/GJgfsAfY8B9QqRkEAvXXHWyqY+AvQZ2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>,
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>,
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>,
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  
  
  var slider = {
    el: {
      slider: $("#slider"),
      allSlides: $(".slide"),
      sliderNav: $(".slider-nav"),
      allNavButtons: $(".slider-nav > a"),
    },
    timing: 800,
    slideWidth: 300,
    init: function() {
      this.bindUIEvents();
    },
    bindUIEvents: function() {
      this.el.slider.on("scroll", (event) => {
        this.moveSlidePosition(event);
      });
      this.el.sliderNav.on("click", "a", (event) => {
        this.handleNavClick(event, this);
      });
    },
    moveSlidePosition: function(event) {
      this.el.allSlides.css({
        "background-position": $(event.target).scrollLeft() / 6 - 100 + "px 0",
      });
    },
    handleNavClick: function(event, el) {
      event.preventDefault();
      var position = $(el).attr("href").split("-").pop();
      this.el.slider.animate(
        {
          scrollLeft: position * this.slideWidth,
        },
        this.timing
      );
      this.changeActiveNav(el);
    },
    changeActiveNav: function(el) {
      this.el.allNavButtons.removeClass("active");
      $(el).addClass("active");
    },
  };
  slider.init();
/***********************************************/




  const toggleButton = document.querySelector(".toggle-button");
  const navbarLinks = document.querySelector(".navbar-links");

  toggleButton.addEventListener("click", () => {
    navbarLinks.classList.toggle("active");
  });


/***********************************************/




  document.addEventListener("DOMContentLoaded", function() {
    var header = document.getElementById("headerNav");
    var footer = document.getElementById("footer");
    var lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    function showHeader() {
      header.style.display = "block";
    }

    function hideHeader() {
      header.style.display = "none";
    }

    function showFooter() {
      footer.style.display = "block";
    }

    function hideFooter() {
      footer.style.display = "none";
    }

    function handleScroll() {
      var currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

      if (currentScrollPosition > lastScrollPosition) {
        hideHeader();
        showFooter();
      } else {
        showHeader();
        hideFooter();
      }

      lastScrollPosition = currentScrollPosition;
    }

    window.addEventListener("scroll", handleScroll);
  });

  /***********************************************/