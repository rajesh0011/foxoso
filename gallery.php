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
    
  <?php include("inc/header.php") ?>

  <section class="inner-banner-area rooms-hero">
    <div class="container">
      <div class="contact-banner">
        <div class="text-center">
          <p class="inner-banner-heading">Gallery</p>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

    <?php include("inc/booking.php") ?>

    <section class=" gallery-section-page">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center  text-uppercase">Foxoso Hotels Gallery</h6>
                </div>
                
                    <div align="center">
                        <button class="btn btn-default filter-button active-btn" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="new_delhi">New Delhi</button>
                        <button class="btn btn-default filter-button" data-filter="nainital">Nainital</button>
                        <button class="btn btn-default filter-button" data-filter="goa">Goa</button>
                        <button class="btn btn-default filter-button" data-filter="bhowali">Bhowali</button>
                        <button class="btn btn-default filter-button" data-filter="jaisalmer">Jaisalmer</button>
                        <button class="btn btn-default filter-button" data-filter="manali">Manali</button>
                        <button class="btn btn-default filter-button" data-filter="agra">Agra</button>
                    </div>
                    <br />
                <div class="row">
                    <div class="gallery_product col-md-4 filter new_delhi">
                        <a href="img/foxoso-delhi.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-delhi.png" class="w-100" alt="foxoso new delhi" />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter nainital">
                        <a href="img/foxoso-nainital.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-nainital.png" class="w-100" alt="foxoso nainital" />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter goa">
                        <a href="img/foxoso-goa.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-goa.png" class="w-100" alt="foxoso goa" />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter bhowali">
                        <a href="img/foxoso-bhowali.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-bhowali.png" class="w-100" alt="foxoso bhowali" />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter jaisalmer">
                        <a href="img/foxoso-jaisalmer.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-jaisalmer.png" class="w-100" alt="foxoso jaisalmer" />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter manali">
                        <a href="img/foxoso-manali.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-manali.png" class="w-100" alt="foxoso manali" />
                            </div>
                        </a>
                    </div>

                    <div class="gallery_product col-md-4 filter agra">
                        <a href="img/foxoso-agra.png" data-fancybox="gallery-images">                             
                            <div class="img-wrap gallery-small">
                                <img src="img/foxoso-agra.png" class="w-100" alt="foxoso agra" />
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