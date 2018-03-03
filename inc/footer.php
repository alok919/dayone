


     <div class="well ">

      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="linkup">
            <h5 class="text-center">Copyright@ 2018 Britannia University, all rights reserved. Developed by group3.</h5>
          <p>This site is maintained by CSE & IT Department.</p>
          </div>
         
        </div>
        <div class="col-lg-3"></div>
      </div>
      
    </div>


            


            <!-- Start Got to scroll HTML  -->

        <div id="gotoup">
           <i class="fa fa-arrow-up"></i>
        </div>


   
           <!-- End Got to scroll HTML  -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.min.js"></script>
     <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

   <script type="text/javascript">
   $(window).load(function() {
     $('#slider').nivoSlider({
       effect:'random',
       slices:10,
       animSpeed:500,
       pauseTime:5000,
       startSlide:0, //Set starting Slide (0 index)
       directionNav:false,
       directionNavHide:false, //Only show on hover
       controlNav:false, //1,2,3...
       controlNavThumbs:false, //Use thumbnails for Control Nav
       pauseOnHover:true, //Stop animation while hovering
       manualAdvance:false, //Force manual transitions
       captionOpacity:0.8, //Universal caption opacity
       beforeChange: function(){},
       afterChange: function(){},
       slideshowEnd: function(){} //Triggers after all slides have been shown
     });
   });
   </script>
     <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-awesome.js"></script>
     <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <script src="js/slick.min.js"></script> 

 
  <!-- Scroll to top javascript -->
     <script>
          
          $(window).scroll(function() {
           if ($(this).scrollTop()>500) {
             $('#gotoup').fadeIn();
           }else{

               $('#gotoup').fadeOut();
           }
          });

          $('#gotoup').click(function() {
            
            $('html, body').animate({scrollTop:0}, 500);
          });

           
  </script>

     

  <script>
    $('.alokslide').slick({
      autoplay:true,
      autoplaySpeed:1500,

      arrows:true,
      pauseOnHover: true,
      pauseOnFocus: true,
     
      });
  </script>

 

           <!-- End Faculty Scroll javascript -->

           <script>
             $(".variable").slick({
                     dots: true,
                     infinite: true,
                     variableWidth: true,
                     autoplay:true,
                      autoplaySpeed:900,
                   });
           </script>
  </body>
</html>