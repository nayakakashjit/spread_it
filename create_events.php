<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php';?>
        <!-- Index-Page-CSS -->
        <link rel="stylesheet" href="resources/styles/style_create_event.css" type="text/css" media="all"> </head>
<style>

.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0 !important;
    font-size: 20px !important;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
    .uploadfile{
            margin-top: 10px;
    height: 42px;
      background-color: #fff !important;
    }
    .upload_btn{
        background-color: #e8286a;
    height: 42px;
    padding: 10px 12px;
    border: 1px solid #ee0979;
    }

</style>

<body>
    <?php include 'includes/header.php';?>
        <section class="login-wrap">
            <div class="main_w3agile">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                <label for="tab-1" class="tab">Public Event</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up">
                <label for="tab-2" class="tab">Private Event</label>
                <div class="login-form">
                    <!-- signin form -->
                    <div class="signin_wthree">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="msform">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active">Step 1</li>
                                        <li>Step 2</li>
                                        <li>Step 3</li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <h2 class="fs-title">Step 1</h2>
                                        <!--                <h3 class="fs-subtitle">Tell us something more about you</h3>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Category"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Title"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Start Date"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Start Time"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="End Date"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="End Time"> <span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" /> </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title">Step 2</h2>
                                        <!--                <h3 class="fs-subtitle">Your presence on the social network</h3>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Address"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Additional Address"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <textarea class="form-control" rows="4" placeholder="Event Description"></textarea> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <textarea class="form-control" rows="4" placeholder="Event Highlights"></textarea> <span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next" /> </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title">Step 3</h2>
                                        <!--                <h3 class="fs-subtitle">Fill in your credentials</h3>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Organiser"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Contact Number"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Website Link"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Additional Link"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
<!--
                                                <div class="box-container">
                                                    <div class="box">
                                                         <div class="input-group-btn"> <span class="fileUpload btn btn-success">
                                                      <span class="upl" id="upload">Upload single file</span>
                                                            <input type="file" class="upload up" id="up" onchange="readURL(this);" /> </span>
                                                        
                                                        </div>
                                                        <span></span> </div>
                                                </div>
-->
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control uploadfile" readonly>
                                                        <div class="input-group-btn"> <span class="fileUpload upload_btn btn btn-success">
                                                      <span class="upl" id="upload"><i class="fa fa-upload" aria-hidden="true"></i> Event Logo</span>
                                                            <input type="file" class="upload up" id="up" onchange="readURL(this);" /> </span>
                                                           
                                                        </div>
                                                        
                                                    </div>
                                        
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
<!--
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Upload Multiple Images"> <span></span> </div>
                                                </div>
-->
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control uploadfile" readonly>
                                                    <div class="input-group-btn"> <span class="fileUpload upload_btn btn btn-info">
                                                        <span class="upl" id="upload"><i class="fa fa-upload" aria-hidden="true"></i> multiple file</span>
                                                        <input type="file" class="upload up" id="up" onchange="readURL(this);" multiple/> </span>
                                                        <!-- btn-orange -->
                                                    </div>
                                                    <!-- btn -->
                                                </div>
                                                <!-- group -->
                                            </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="submit" name="submit" class="submit action-button" value="Create Event" /> </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //signin form -->
                    <!---728x90--->
                    <!-- signup form -->
                    <div class="signup_wthree">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="msform">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active">Step 1</li>
                                        <li>Step 2</li>
                                        <li>Step 3</li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <h2 class="fs-title">Step 1</h2>
                                        <!--                <h3 class="fs-subtitle">Tell us something more about you</h3>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Category"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Title"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Start Date"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Start Time"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="End Date"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="End Time"> <span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" /> </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title">Step 2</h2>
                                        <!--                <h3 class="fs-subtitle">Your presence on the social network</h3>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Address"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Additional Address"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <textarea class="form-control" rows="4" placeholder="Event Description"></textarea> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <textarea class="form-control" rows="4" placeholder="Event Highlights"></textarea> <span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next" /> </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title">Step 3</h2>
                                        <!--                <h3 class="fs-subtitle">Fill in your credentials</h3>-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Event Organiser"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Contact Number"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Website Link"> <span></span> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Additional Link"> <span></span> </div>
                                                </div>
                                            </div>
                                      <div class="col-sm-6">
<!--
                                                <div class="box-container">
                                                    <div class="box">
                                                         <div class="input-group-btn"> <span class="fileUpload btn btn-success">
                                                      <span class="upl" id="upload">Upload single file</span>
                                                            <input type="file" class="upload up" id="up" onchange="readURL(this);" /> </span>
                                                        
                                                        </div>
                                                        <span></span> </div>
                                                </div>
-->
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control uploadfile" readonly>
                                                        <div class="input-group-btn"> <span class="fileUpload upload_btn btn btn-success">
                                                      <span class="upl" id="upload"><i class="fa fa-upload" aria-hidden="true"></i> Event Logo</span>
                                                            <input type="file" class="upload up" id="up" onchange="readURL(this);" /> </span>
                                                           
                                                        </div>
                                                        
                                                    </div>
                                        
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
<!--
                                                <div class="box-container">
                                                    <div class="box">
                                                        <input type="text" placeholder="Upload Multiple Images"> <span></span> </div>
                                                </div>
-->
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control uploadfile" readonly>
                                                    <div class="input-group-btn"> <span class="fileUpload upload_btn btn btn-info">
                                                        <span class="upl" id="upload"><i class="fa fa-upload" aria-hidden="true"></i> multiple file</span>
                                                        <input type="file" class="upload up" id="up" onchange="readURL(this);" multiple/> </span>
                                                        <!-- btn-orange -->
                                                    </div>
                                                    <!-- btn -->
                                                </div>
                                                <!-- group -->
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                 <div class="col-sm-3 col-xs-6">
                                    <div class="checkbox">
                                       <input type="checkbox" id="checkbox1" class="checkbox__input" value="Accomadation">
                                       <label for="checkbox1" class="checkbox__label">&nbsp;
                                       Accommodation</label>
                                    </div>
                                 </div>
                                 
                                 <div class="col-sm-3 col-xs-6">
                                    <div class="checkbox">
                                       <input type="checkbox" id="checkbox2" class="checkbox__input" value="Transportation">
                                       <label for="checkbox2" class="checkbox__label">&nbsp;
                                       Transportation</label>
                                    </div>
                                 </div>
                                 
                                 <div class="col-sm-3 col-xs-6">
                                    <div class="checkbox">
                                       <input type="checkbox" id="checkbox3" class="checkbox__input" value="Food (Veg)">
                                       <label for="checkbox3" class="checkbox__label">&nbsp;
                                       Food (Veg)</label>
                                    </div>
                                 </div>
                                 
                                 <div class="col-sm-3">
                                    <div class="checkbox">
                                       <input type="checkbox" id="checkbox4" class="checkbox__input" value="Food (Non-Veg)">
                                       <label for="checkbox4" class="checkbox__label">&nbsp;
                                       Food (Non-Veg)</label>
                                    </div>
                                 </div>
                                 
                              </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="submit" name="submit" class="submit action-button" value="Create Event" /> </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //signup form -->
                </div>
            </div>
        </section>
        <?php include'includes/footer.php';?>
            <?php include'includes/foot.php';?>
</body>

</html>
<script>
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    $(".next").click(function () {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                    , 'position': 'absolute'
                });
                next_fs.css({
                    'left': left
                    , 'opacity': opacity
                });
            }
            , duration: 800
            , complete: function () {
                current_fs.hide();
                animating = false;
            }
            , //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });
    $(".previous").click(function () {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')'
                    , 'opacity': opacity
                });
            }
            , duration: 800
            , complete: function () {
                current_fs.hide();
                animating = false;
            }
            , //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });
    $(".submit").click(function () {
        return false;
    })
</script>

<script>
$(document).on('change','.up', function(){
		   	var names = [];
		   	var length = $(this).get(0).files.length;
			    for (var i = 0; i < $(this).get(0).files.length; ++i) {
			        names.push($(this).get(0).files[i].name);
			    }
			    // $("input[name=file]").val(names);
				if(length>2){
				  var fileName = names.join(', ');
				  $(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
				}
				else{
					$(this).closest('.form-group').find('.form-control').attr("value",names);
				}
	   });
</script>