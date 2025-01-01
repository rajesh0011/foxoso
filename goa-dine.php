<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foxoso Hotels | Contact Us</title>
    <meta name="description" content="Foxoso Hotels" />
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
              <li class="breadcrumb-item active" aria-current="page">Restaurant</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

    <?php include("inc/booking.php") ?>

    <div class="contact3 py-5">
        <div class="container">
            <div class="row">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center  text-uppercase">Foxoso La Beach Resort</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
      
            </div>
        </div>
        <div class="container inner-dine">
    <div class="row">
        <div class="col-md-8 pr-md-5">
            <div class="mt-0">
                <div class="overflow-hidden">
                    <h4 class="mb-1" >From the Garden</h4>
                </div>
                <div class="overflow-hidden">
                    <p class="pr-lg-6">
                        Here is some description text. Lorem ipsum dolor sit amet, mel rebum sensibus expetenda ex, vix probo appellantur ei. No harum interesset quaerendum ius. Vim id mollis tibique gubergren, mei melius splendide
                        consequuntur ut. Dico postea vim in, ad primis adipiscing vim. Per et amet nemore insolens, mel an posse gubergren.
                    </p>
                    <div class="col-12 formFooter">
                        <a href="#" class="btn btn-primary">Download Food Menu</a>
                    </div>
                </div>
                <div class="row mt-3 p-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 p-2">
                                <a>
                                    <img src="img/g-dine-1.jpg" alt="" class="w-100" />
                                </a>
                            </div>
                            <div class="col-12 p-2">
                                <a href="img/g-dine-2.jpg" data-lightbox="image" data-title="my caption">
                                    <img src="img/g-dine-2.jpg" alt="" class="w-100" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 p-2">
                                <a>
                                    <img src="img/g-dine-3.jpg" alt="" class="w-100" />
                                </a>
                            </div>
                            <div class="col-12 p-2">
                                <a>
                                    <img src="img/g-dine-4.jpg" alt="" class="w-100" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <a>
                            <img src="img/g-dine-5.jpg" alt="" class="w-100" />
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="col-md-4 mt-6 mt-md-0 text-center">
            <div class="row align-items-center sticky">
                <div class="col reserve-table-form">
                    <div class="border-top border-bottom border-color-9 py-4 form-stylig">
                        <h5>Reserve A Table</h5>
                        <div class="fixed-form fixed">
                           <form method="post" action="#">
                              <div class="form row">
                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control"  placeholder="Full Name*"  />
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="phone" class="form-control" placeholder="Phone*" />
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="email" class="form-control" name="email"  placeholder="Email*"  />
                                  </div>
                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control" id="Date" placeholder="Date" name="Date" readonly="">
                                  </div>
                                

                                  <div class="col-12 form-group">
                                      <input type="text" class="form-control" placeholder="No of Guest" name="noofguest" />
                                  </div>

                                  <div class="col-12 form-group">
                                      <textarea class="form-control" placeholder="Message" rows="2" name="message" ></textarea>
                                  </div>
                                 
                                  <div class="col-12 formFooter">
                                      <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>

   
    </div>

   

<?php include("inc/footer.php") ?>


<script>
    $( "#Date" ).datepicker();
    </script>
   

</body>

</html>