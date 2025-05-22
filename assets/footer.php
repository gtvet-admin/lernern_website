<footer>
    <section class="footer-row">
      <div class="container">
        <!--Block-->
        <div class="row gy-3">
          <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <div class="bg-light footer-block">
              <img src="images/footer-logo.svg" class="img-fluid mx-auto d-block mb-4" width="300">
              <div class="d-flex align-items-start mb-3">
                <img src="images/location-icon.svg" />
                <div class="ms-2 font-size-14">Springfields College,Delhi Road,<br />
                  Moradabad - 244001,U.P., India</div>
              </div>
              <div class="d-flex align-items-start mb-2">
                <img src="images/call-icon.svg" />
                <div class="ms-2 font-size-14"><a href="tel:0591-2481724">0591-2482778</a></div>
              </div>
              <div class="d-flex align-items-start mb-2">
                <img src="images/call-icon.svg" />
                <div class="ms-2 font-size-14"><a href="tel:0591-2481724">0591-2481724</a></div>
              </div>
              <div class="d-flex align-items-start">
                <img src="images/mailbox-icon.svg" />
                <div class="ms-2 font-size-14"><a
                    href="mailto:springfieldscollege.mbd@gmail.com">springfieldscollege.mbd@gmail.com</a></div>
              </div>

              <ul class="social-widget my-4">
                <li><a href="https://www.facebook.com/springfieldsmoradabad/" target="_blank"><img src="images/facebook.svg" alt="" /></a></li>
                <li><a href="#" target="_blank"><img src="images/x-icon.svg" alt=""/></a></li>
                <li><a href="https://www.instagram.com/springfields_college?igshid=w1jptd2rpk2l" target="_blank"><img src="images/in.svg" alt="" /></a></li>
                <li><a href="#" target="_blank"><img src="images/pintrast.svg" alt=""/></a></li>
              </ul>

              <iframe class="rounded-10"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.2172865110692!2d78.74039057537595!3d28.832390274977122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afd43f44566c3%3A0x59af7e0e06fce558!2sSpringfields%20College!5e0!3m2!1sen!2sin!4v1741762441302!5m2!1sen!2sin"
                width="100%" height="140" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="bg-light footer-block">
              <h4 class="text-center mb-3">Facebook</h4>
              <img src="images/facebook-iframe.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="bg-light footer-block">
              <h4 class="text-center mb-3">Instagram</h4>
              <img src="images/instagram-iframe.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>

        <!--/Block-->

      </div>
    </section>
    <section class="footer-bottom">
      <div class="container">
        <!--Block-->
        <div class="row gy-3 justify-content-between align-items-center">
          <div class="col-xl-6 text-center text-xl-start wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">

            <p>Copyright © 2025 All Rights Reserved. Powered by Schoolsindia</p>
          </div>
          <div class="col-xl-6 text-center text-xl-end  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
            <div class="d-md-flex align-items-center justify-content-center justify-content-end-lg">
            <ul class="d-flex align-items-center justify-content-center justify-content-end-lg">
              <li><a href="#">Privacy Policy</a></li>
              <li class="mx-4"><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="d-flex align-items-center justify-content-center justify-content-end-lg count-widget">
              <li>1</li>
              <li>2</li>
              <li>7</li>
              <li>5</li>
              <li>1</li>
              <li>1</li>
              <li>9</li>
              <li>3</li>
            </ul>
          </div>
          </div>
        </div>
        <!--/Block-->
      </div>
    </section>
  </footer>

  <!--Start: Scroll button to top -->
  <button type="button" id="scrollTop"><i class="fa fa-angle-up"></i></button>
  <!--End: Scroll button to top -->

  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.calander.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script>
    /*Hero Slider*/
    $('.hero-slider').owlCarousel({
      loop: true,
      margin: 0,
      items: 1,
      dots: false,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 6000,
    })

       /*Gallery Slider*/
    $('.gallery-slider').owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 3000,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        767: {
          items: 2
        },
        991: {
          items: 3
        }
      }
    }) 

    /*Sticky Header*/
    window.onscroll = function () { myFunction() };
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }

    /*Go to Top */
    $(window).scroll(function () {
      if ($(this).scrollTop() > 650) {
        $('#scrollTop').fadeIn();
      } else {
        $('#scrollTop').fadeOut();
      }
    });
    // scroll up function
    $('#scrollTop').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 650);
    });
   
    /*WOW Animation */
    new WOW().init();
  </script>
 
</body>

</html>