<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foxoso Hotels | Gallery</title>
    <meta name="description" content="Foxoso Hotels" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" media="all" />
    <?php include("inc/head.php") ?>
    <style type="text/css">
      .ui-widget.ui-widget-content {
          position: absolute!important;
      }
      p{
        font-weight:300;
      }
    </style>
</head>

<body id="home-page">
    
  <?php include("inc/inner-header.php") ?>

  <section class="inner-banner-area rooms-hero">
    <div class="container">
      <div class="contact-banner">
        <div class="text-center">
          <p class="inner-banner-heading">Foxoso La Beach Resort</p>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

    <?php include("inc/booking.php") ?>

    <section class=" gallery-section-page">
            <div class="container mb-4">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center  text-uppercase">Foxoso La Beach Resort Gallery</h6>
                </div>
                
                    <div align="center">
                        <button class="btn btn-default filter-button active-btn" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="facade">Facade</button>
                        <button class="btn btn-default filter-button" data-filter="rooms">Rooms</button>
                        <button class="btn btn-default filter-button" data-filter="restaurant">Restaurant</button>
                        <button class="btn btn-default filter-button" data-filter="events">Events</button>
                       
                    </div>
                    <br />
                <div class="row justify-content-center">
                

                    <div class="gallery_product col-md-4 filter rooms">
                        <a href="img/garden-view.jpg" data-fancybox="gallery-images"  data-caption="Garden View Rooms">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/garden-view.jpg" class="w-100" alt="foxoso goa"  />
                            </div>
                        </a>
                    </div>
                    <div class="gallery_product col-md-4 filter rooms">
                        <a href="img/premium.jpeg" data-fancybox="gallery-images" data-caption="Premium Rooms">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/premium.jpeg" class="w-100" alt="foxoso goa"  />
                            </div>
                        </a>
                    </div>
                    <div class="gallery_product col-md-4 filter rooms">
                        <a href="img/partial.jpg" data-fancybox="gallery-images" data-caption="Partial Sea View Rooms">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/partial.jpg" class="w-100" alt="foxoso goa"  />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter rooms">
                        <a href="img/pool-view.png" data-fancybox="gallery-images" data-caption="Pool View Rooms">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/pool-view.png" class="w-100" alt="foxoso goa"  />
                            </div>
                        </a>
                    </div>

                    

                   
                </div>

            </div>
        </section>

   

<?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>

    
    <script>
      $('.moreless-button').click(function() {
      $('.moretext').slideToggle();
      if ($('.moreless-button').text() == "Read less") {
        $(this).text("Read more")
      } else {
        $(this).text("Read less")
      }
    });
    </script>

    <script>
        $(document).ready(function(){

$(".filter-button").click(function(){

    $(this).addClass('active-btn').siblings().removeClass('active-btn');
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
       
        $('.filter').show('1000');
    }
    else
    {    $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
        </script>


</body>

</html>