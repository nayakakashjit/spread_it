<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php';?>
</head>
<style>
  .img-container {
/*  max-width: 1020px;*/
  position: relative;
  margin: 0 auto;
  padding: 0 0;
  zoom: 1;
  /* For IE 6/7 (trigger hasLayout) */
}

.img-container:before,
.img-container:after {
  content: "";
  display: table;
}

.img-container:after {
  clear: both;
}


.columns {
  float: left;
  display: block;
  margin-bottom: 0px;
  vertical-align: top;
  padding: 0 0px;
  background: red;
}

.columns.three {
  width: 25%;
}

/* Main Styles */





/* Slider */

.slider {
  position: relative;
  width: 100%;
  min-height: 350px;
}

.slide {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.active-slide {
  display: block;
}
/* Controls */

.slider-nav {
  text-align: center;
  position: absolute;
  bottom: 0;
  width: 100%;
}

.arrow-prev,
.arrow-next {
      margin: 3px 10%;
    display: inline-block;
    vertical-align: top;
    margin-top: 0px;
    font-size: 1.5rem;
    color: #fff;
    background-color: #e8286a;
    border-radius: 65%;
    width: 30px;
    height: 30px;
    padding: 5px 1px 0px 1px;
}

.arrow-next {}

.slider-dots {
  list-style: none;
  display: inline-block;
  padding-left: 0;
  margin-bottom: 0;
}

.slider-dots li {
  color: #bbbcbc;
  display: inline;
  font-size: 2rem;
  margin: 0 5px;
  transition: color 0.5s;
}

.slider-dots li.active-dot {
  color: #363636;
}
/* Counter */
    .img-size{
        height: 350px;
    width: 100%;
}
    }

</style>

<body>
    <?php include 'includes/header.php';?>
        <div class="container-fluid" id="event-details">
            <div class="text-box">
                <h2 class="heading_white_h3"><span><a href="index.php">Home </a></span>/ Event Details</h2> </div>
        </div>
        <div class="container-fluid events_services_bg">
            <div class="row">
                <div class="col-lg-1 col-md-0 col-sm-0"></div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="">
                        <div class="">
                            <div class="row event-title">
                                <div class="col-sm-8">
                                    <h2>Business Conference - World Wealth Creation 2018.</h2>
                                    <div class="meta fix">
                                        <a href="#"><i class="fa fa-calendar"></i><span>2017, Feb 13</span></a> 
                                        <a href="#"><i class="fa fa-clock-o"></i><span>08:00 - 20:20</span></a>
                                    </div>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="event-card">
                                    <section class="img-container">
                                        <div class="slider">
                                            <div class="slide"> <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/Gif-pont-lueur-600.gif" class="img-responsive img-size"> </div>
                                            <div class="slide"> <img src="resources/images/event1.jpg" class="img-responsive img-size"> </div>
                                            <div class="slide"> <img src="http://placehold.it/1020x350/9077f2/fff?text=Slide3" class="img-responsive img-size"> </div>
                                        </div>
                                        <div class="slider-nav"> <span class="arrow-prev">
                                          <i class="fa fa-chevron-left"></i></span>
                                            <ul class="slider-dots"></ul> <span class="arrow-next">
                                          <i class="fa fa-chevron-right"></i></span> </div>
                                    </section>
                                        <div class="event-card-container" style="background-color: #fff;">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="meta fix" style="margin-top: 14px;">
                                                        <!--  <a href="#"><i class="fa fa-thumbs-up"></i><span>LIKE &nbsp;354</span></a>-->
                                                         <a href="#"><span>
                                                            <i class="fa fa-plus-circle"></i>TO CALENDER</span></a> <a href="#specification"><i class="fa fa-check"></i><span>ATTENDING</span></a> </div>
                                                </div>
                                                <div class="col-md-4 share">
                                                    <div class="social"> <span><i class="fa fa-share-alt"></i> &nbsp; Share</span>
                                                        <ul class="share-social-icons clearfix">
                                                            <li><a class="share-ico ico-facebook" target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a class="share-ico ico-twitter" target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a class="share-ico ico-tumblr" target="_blank" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                                            <li><a class="share-ico ico-google-plus" target="_blank" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="padding:15px;">Nam dapibus faucibus nulla vitae consectetur. In et venenatis justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacinia purus neque, ut volutpat mi imperdiet non. Duis et velit ac felis commodo ornare nec id ligula. Nullam semper aliquet elit, id tincidunt ex tincidunt vitae. Mauris quis ligula sed ante vulputate tincidunt. Donec molestie posuere nulla. Nullam eu orci sapien.Nam dapibus faucibus nulla vitae consectetur. In et venenatis justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacinia purus neque, ut volutpat mi imperdiet non. Duis et velit ac felis commodo ornare nec id ligula. Nullam semper aliquet elit, id tincidunt ex tincidunt vitae. Mauris quis ligula sed ante vulputate tincidunt. Donec molestie posuere nulla. Nullam eu orci sapien.</p>
                                            <p></p>
                                            <!--<div class="center">
                            <a href="#">
                        <button class="event-btn">BUY TICKET</button>
                            </a>
                        </div>--></div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body highlight">
                                           <div class="row event-details">
                                                <div class="col-md-4">
                                                    <p> <i class="fa fa-money" aria-hidden="true"></i>&nbsp; Type: <span> Private </span></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p> <i class="fa fa-folder" aria-hidden="true"></i>&nbsp; Category: <span> </span></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p> <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Date: <span> August 24 - August 29</span></p>
                                                </div>
                                            </div>
                                            <div class="row event-details">
                                               <div class="col-md-4">
                                                     <p> <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;  Time: <span> 10:00 AM - 10:00 AM</span></p>

                                                    </div>
                                                <div class="col-md-4">
                                                    <p> <i class="fa fa-car" aria-hidden="true"></i>&nbsp; Distance: <span id="myDiv">Loading...</span>&nbsp;<span><img src="img/adventures.png" style="    height: 14px !important;    width: 14px !important;"></span></p>
                                                    </div>
                                                <div class="col-md-4">
                                                    <p> <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; <span id="timeLeftLabel"></span><span id="left">Ongoing Event</span></p>
                                                    </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                           <div class="event-title">
                                                <h2>Venue</h2>
                                                <hr>
                                                <div class="event-venue">
                                                    <p>615 Valley Farms St. Kingston, NY 12401
                                                        <br>Stockton BD Fort Wayne 587465</p>
                                                    <ul class="event-details">
                                                        <li><dt> <i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Phone:</dt> <span class="phone-no">1234578960</span></li>
                                                        <li><dt> <i class="fa fa-globe" aria-hidden="true"></i>&nbsp; Website:</dt> <span class="website"><a href="www.google.com">www.google.com</a></span></li>
                                                        <li><dt> <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Distance:</dt> <span class="website"><a href="www.google.com"><i class="fa fa-share" aria-hidden="true"></i> 25 Km Distance</a></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="event-title">
                                                <h2>Organizers</h2>
                                                <hr>
                                                <div class="event-venue">
                                                    <h4>Aslan Lingker</h4>
                                                    <ul class="event-details">
                                                        <li>
                                                            <dt><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Phone:</dt>
                                                            <span class="phone-no">1234578960</span>
                                                        </li>
                                                        <li>
                                                            <dt> <i class="fa fa-globe" aria-hidden="true"></i>&nbsp; Website:</dt> 
                                                             <span class="website">
                                                             <a href="www.google.com">www.google.com</a>
                                                            </span> </li>
                                                        <li><dt> <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Email:</dt> <a href="mailto:nayakakashjit@gmail.com">nayakakashjit@gmail.com</a></li>
                                                    </ul>
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3 p0m">
                                                            <a href="followed-org.php" class="p7">
                                                                 <a href="" class="btn_read_more ">Follow</a>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4 col-xs-4 p0m">
                                                            <a href="followed-org-past-event.php" class="p3">
                                                                 <a href="" class="btn_read_more">Past Event</a>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5 p0m">
                                                            <a href="followed-org-upcomming-event.php">
                                                               
                                                                 <a href="" class="btn_read_more">Next Event</a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                   <div class="">
                                                        <div class="row reviewsum">
                                                            <div class="block-title">
                                                                <div class="col-sm-6 pull-left" title="Rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i><span>0/5</span> </div>
                                                                <div class="col-sm-6 pull-left mgl10"><strong>Review (0) </strong>
                                                                    <br>
                                                                    <br> </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="review_message_blog" style="display:none;">
                                                                <div class="alert alert-warning fade in" style="margin-top:13%"> <a href="#" class="close" data-dismiss="alert">×</a> <span id="review_message"></span> </div>
                                                            </div>
                                                            <label style="color: #757575;"> Write a review : </label>
                                                            <form class="review_form bv-form" autocomplete="off" action="http://www.amedo.in/api/review" novalidate="novalidate">
                                                                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                                                
                                                                <div class="form-group">
                                                                    <textarea class="t-area" placeholder="Description" name="description"></textarea>
                                                                </div>
                                                              <div class="form-group">
                                        <label style="color: #757575;"> Rating : </label>
                                        <span class="combostar-wrapper"><select id="product_review_star" style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="">5</option>
                                        </select><div class="combostar-star" style="display: inline; padding: 15px 0px 0px 16px; background-image: url(&quot;http://www.amedo.in//assets/plugins/starwarjs/image/stars.png&quot;); background-position: 0px 0px; font-size: 0px; cursor: pointer;"></div>
                                            <div class="combostar-star" style="display: inline; padding: 15px 0px 0px 16px; background-image: url(&quot;http://www.amedo.in//assets/plugins/starwarjs/image/stars.png&quot;); background-position: 0px 0px; font-size: 0px; cursor: pointer;"></div>
                                            <div class="combostar-star" style="display: inline; padding: 15px 0px 0px 16px; background-image: url(&quot;http://www.amedo.in//assets/plugins/starwarjs/image/stars.png&quot;); background-position: 0px 0px; font-size: 0px; cursor: pointer;"></div>
                                            <div class="combostar-star" style="display: inline; padding: 15px 0px 0px 16px; background-image: url(&quot;http://www.amedo.in//assets/plugins/starwarjs/image/stars.png&quot;); background-position: 0px -15px; font-size: 0px; cursor: pointer;"></div>
                                            <div class="combostar-star" style="display: inline; padding: 15px 0px 0px 16px; background-image: url(&quot;http://www.amedo.in//assets/plugins/starwarjs/image/stars.png&quot;); background-position: 0px -15px; font-size: 0px; cursor: pointer;"></div>
                                            </span>
                                    </div>
                                                                <div class="form-group" style="margin-bottom: 0px !important;">
                                                                    <a href="" class="btn_read_more">Review</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-0 col-sm-0"></div>
            </div>
        </div>
        <?php include'includes/footer.php';?>
            <?php include'includes/foot.php';?>
</body>
<script> // slider js
    $('.arrow-next').click(function() {
  var currentSlide = $('.active-slide'),
    nextSlide = currentSlide.next(),
    currentDot = $('.active-dot'),
    nextDot = currentDot.next();

  if (nextSlide.length === 0) {
    nextSlide = $('.slide').first();
    nextDot = $('.dot').first();
  }

  currentSlide.fadeOut(600).removeClass('active-slide');
  nextSlide.fadeIn(600).addClass('active-slide');

  currentDot.removeClass('active-dot');
  nextDot.addClass('active-dot');
});

$('.arrow-prev').click(function() {
  var currentSlide = $('.active-slide'),
    prevSlide = currentSlide.prev(),
    currentDot = $('.active-dot'),
    prevDot = currentDot.prev();

  if (prevSlide.length === 0) {
    prevSlide = $('.slide').last();
    prevDot = $('.dot').last();
  }

  currentSlide.fadeOut(600).removeClass('active-slide');
  prevSlide.fadeIn(600).addClass('active-slide');

  currentDot.removeClass('active-dot');
  prevDot.addClass('active-dot');
});

// this bit will resize the sliders height to make it responsive
$(window).on('load resize', function() {
  var x = $('.active-slide img').height() + "px";

  //$('.slider').css('min-height', x);
  //$('p').text(x);
});

//this part will add a dot for each slider item, then assign a class name to the first child to get the active state
$('section').each(function() {
  var a = $('.slide').length;
  for (i = 0; i < a; i++) {
    $('.slider-dots').append('<li class="dot">&bull;</li>');
  }
});

$('.slider div:first').addClass('active-slide');
$('.slider-dots li:first').addClass('active-dot');
    </script>

</html>