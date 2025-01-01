<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Foxoso Hotels | Our Hotels</title>
        <meta name="description" content="Foxoso Hotels" />
        <?php include("inc/head.php") ?>
        <style type="text/css">
            .ui-widget.ui-widget-content {
                position: absolute !important;
            }
            p {
                font-weight: 300;
            }
        </style>
    </head>

    <body id="home-page">
        <?php include("inc/header.php") ?>

        <section class="inner-banner-area rooms-hero">
            <img src="img/room-hero-banner.png" alt="inner banner image foxoso" class="w-100 new-inner-banner" />
            <div class="container">
                <div class="contact-banner">
                    <div class="text-center">
                        <p class="inner-banner-heading">Our Hotels</p>
                        <nav aria-label="breadcrumb" class="banner-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hotels</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <?php include("inc/booking.php") ?>

        <section class="home-mid-sec" id="hotels-main-sec">
                <div class="gallery-section-page">
                <div class="container mb-5">
                    <div class="row">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="section-title text-center text-uppercase">Our Hotels</h6>
                        </div>
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

                        <div class="repeated-block gallery_product filter new_delhi">
                            <div class="row ">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso Delhi Airport, New Delhi
                                        </h4>
                                        <p>
                                            Foxoso Delhi Hotel is a luxurious accommodation nestled in the vibrant neighborhood of Mahipalpur, conveniently located near Delhi International Airport. Boasting 45 well-appointed rooms, the
                                            hotel offers a range of categories to suit diverse preferences. The Deluxe rooms provide a perfect blend of comfort and elegance, ensuring a delightful stay.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="#" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-delhi.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="repeated-block gallery_product filter nainital">
                            <div class="row">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso Heritage Hotel, Nainital
                                        </h4>
                                        <p>
                                            Foxoso Heritage Hotel near Mall Road, Nainital, exudes timeless charm and offers an enchanting stay experience. With 26 exquisitely designed rooms, the hotel provides a range of categories to
                                            cater to different preferences. The Standard rooms provide a comfortable and cozy retreat, ideal for a relaxing stay.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="#" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-nainital.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="repeated-block gallery_product filter goa">
                            <div class="row">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso La Beach Resort, Goa
                                        </h4>
                                        <p>
                                            Escape to the tropical paradise of Goa and immerse yourself in the ultimate boutique luxury beach resort at North Goa. Our Foxoso La Beach Resort in Morjim is a paradise for beach lovers seeking a
                                            luxurious escape. Book the best hotel in Goa, offering a unique blend of luxury and authenticity, and savor the region’s rich heritage and culinary delights. With 80 tastefully designed rooms, the
                                            resort offers a variety of categories to suit different preferences.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="overview.php" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-goa.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="repeated-block gallery_product filter bhowali">
                            <div class="row">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso Misty Oaks Resort, Bhowali
                                        </h4>
                                        <p>
                                            Foxoso Misty Oaks Resort in Bhowali, Nainital, is a sprawling retreat spread across 5 acres of lush greenery. Surrounded by misty hills and lush greenery, this hotel is the perfect destination for
                                            nature lovers and adventure seekers alike. Located just 5 km from Kainchi Dhan and 8 km from Nainital Lake. With 34 well-appointed rooms, the resort offers a variety of categories to suit every
                                            guest’s preferences. The Bamboo Retreat rooms provide a unique and tranquil ambiance.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="#" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-bhowali.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="repeated-block gallery_product filter jaisalmer">
                            <div class="row">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso Luxury Camps, Jaisalmer
                                        </h4>
                                        <p>
                                            Foxoso Luxury Camps in Jaisalmer – Sam offers an unforgettable glamping experience, positioning itself as one of the best desert camp in Jaisalmer. Nestled in the heart of the Thar Desert, our
                                            luxurious Royal Swiss AC Tents and Royal Swiss Cottages combine modern comforts with the timeless charm of traditional Rajasthani aesthetics.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="#" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-Jaisalmer.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="repeated-block gallery_product filter manali">
                            <div class="row">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso Cherry Hotel, Manali
                                        </h4>
                                        <p>
                                            Nestled in the heart of Old Manali, Foxoso Cherry Hotel offers a serene Himalayan retreat with beautiful wooden architecture and interiors that seamlessly blend with the surrounding natural
                                            beauty. This three-story property features 12 exquisitely appointed rooms providing stunning views of the verdant valleys and majestic mountains.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="#" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-manali.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="repeated-block gallery_product filter agra">
                            <div class="row">
                                <div class="col-lg-5 align-self-center text-column">
                                    <div class="text-box-block">
                                        <h4 class="text-block-title">
                                            Foxoso Taj View Hotel, Agra
                                        </h4>
                                        <p>
                                            Situated in the heart of Agra, Foxoso Taj View Hotel offers a luxurious retreat with stunning view of the iconic Taj Mahal. This elegant property features 35 well-appointed rooms, blending modern
                                            comfort with the rich cultural heritage of the city. Guests can savor delicious cuisine at the restaurant or enjoy breathtaking vistas of the Taj Mahal from the rooftop cafe.
                                        </p>
                                        <div class="text-box-btns">
                                            <a href="#" class="btn explore-more-hero">Explore More</a>
                                            <a href="#" class="btn book-now-hero" id="book-now">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 p-0 image-column">
                                    <div class="img-block">
                                        <img src="img/foxoso-agra.png" class="w-100" alt="foxoso hotels" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("inc/footer.php") ?>

        <script>
            $(document).ready(function () {
                $(".filter-button").click(function () {
                    // $(this).addClass("active-btn");
                    $(this).addClass('active-btn').siblings().removeClass('active-btn');
                    var value = $(this).attr("data-filter");

                    if (value == "all") {
                        $(".filter").show("1000");
                    } else {
                        $(".filter")
                            .not("." + value)
                            .hide("3000");
                        $(".filter")
                            .filter("." + value)
                            .show("3000");
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
