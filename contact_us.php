<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php';?>
   
</head>
<style>
    .first-box {
        padding: 10px;
        background: #FFA000;
        color: #fff;
    }
    
    .second-box {
        padding: 10px;
        background: #03A9F4;
        color: #fff;
    }
    
    .third-box {
        padding: 10px;
        background: #E91E63;
        color: #fff;
    }
    
    .fourth-box {
        padding: 10px;
        background: #9C27B0;
        color: #fff;
    }
    
    .fourth-box p {
        text-align: center
    }
    
    .third-box p {
        text-align: center
    }
    
    .second-box p {
        text-align: center
    }
    
    .first-box p {
        text-align: center
    }
    /*******************/
    /* ///// inputs /////*/
    
    input:focus ~ label,
    textarea:focus ~ label,
    input:valid ~ label,
    textarea:valid ~ label {
        font-size: 0.75em;
        color: #999;
        top: -5px;
        -webkit-transition: all 0.225s ease;
        transition: all 0.225s ease;
    }
    
    .styled-input {
        float: left;
        width: 293px;
        margin: 1rem 0;
        position: relative;
        border-radius: 4px;
    }
    
    @media only screen and (max-width: 768px) {
        .styled-input {
            width: 100%;
        }
    }
    
    .styled-input label {
        color: #999;
        padding: 1.3rem 30px 1rem 30px;
        position: absolute;
        top: 10px;
        left: 0;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
        pointer-events: none;
    }
    
    .styled-input.wide {
        width: 650px;
        max-width: 100%;
    }
    
    input,
    textarea {
        padding: 30px;
        border: 0;
        width: 100%;
        font-size: 1rem;
        background-color: #2d2d2d;
        color: white;
        border-radius: 4px;
    }
    
    input:focus,
    textarea:focus {
        outline: 0;
    }
    
    input:focus ~ span,
    textarea:focus ~ span {
        width: 100%;
        -webkit-transition: all 0.075s ease;
        transition: all 0.075s ease;
    }
    
    textarea {
        width: 100%;
        min-height: 15em;
    }
    
    .input-container {
        width: 650px;
        max-width: 100%;
        margin: 20px auto 25px auto;
    }
    
    .submit-btn {
        float: right;
        padding: 7px 35px;
        border-radius: 60px;
        display: inline-block;
        background-color: #e8286a;
        color: white;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06), 0 2px 10px 0 rgba(0, 0, 0, 0.07);
        -webkit-transition: all 300ms ease;
        transition: all 300ms ease;
    }
    
    .submit-btn:hover {
        transform: translateY(1px);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10), 0 1px 1px 0 rgba(0, 0, 0, 0.09);
    }
    
    @media (max-width: 768px) {
        .submit-btn {
            width: 100%;
            float: none;
            text-align: center;
        }
    }
    
    input[type=checkbox] + label {
        color: #ccc;
        font-style: italic;
    }
    
    input[type=checkbox]:checked + label {
        color: #f00;
        font-style: normal;
    }
</style>

<body data-ng-app="">
    <?php include 'includes/header.php';?>
        <div class="container-fluid" id="event-details">
            <div class="text-box">
                <h2 class="heading_white_h3">Contact Address</h2> </div>
        </div>
        <div class="container-fluid events_services_bg">
            <div class="row">
                <div class="col-lg-1 col-md-0 col-sm-0"></div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="space"></div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-3 col-xs-6 first-box">
                                <h1><i class="fa fa-phone" aria-hidden="true"></i></h1>
                                <h3>Phone</h3>
                                <p>(+91) 7760 655080</p>
                                <br> </div>
                            <div class="col-sm-3 col-xs-6 second-box">
                                <h1><i class="fa fa-home" aria-hidden="true"></i></h1>
                                <h3>Location</h3>
                                <p>Bangalore KA</p>
                                <br> </div>
                            <div class="col-sm-3 col-xs-6 third-box">
                                <h1><i class="fa fa-envelope" aria-hidden="true"></i></h1>
                                <h3>E-mail</h3>
                                <p>info@spreaditevents.com
                                    <br>contact@spreaditevents.com</p>
                            </div>
                            <div class="col-sm-3 col-xs-6 fourth-box">
                                <h1><i class="fa fa-leaf" aria-hidden="true"></i></h1>
                                <h3>Web</h3>
                                <p>www.spreaditevents.com</p>
                                <br> </div>
                        </div>
                    </div>
                    <div class="row input-container">
                        <form name="myForm">
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                 <input type="text" name="myName" data-ng-model="myName" data-ng-pattern="/^[a-zA-Z ]*$/" required />
                                  <span style="color:red"   data-ng-show="myForm.myName.$dirty || myForm.myName.$touched && myForm.myName.$invalid">
                    <span style="color:red;"  data-ng-show="myForm.myName.$error.required">Please Enter Your First Name.</span>
                    <span style="color:red;"  data-ng-show="myForm.myName.$error.pattern">Name must be letters only.</span>
                    </span>
                                <label>Name</label>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input">
                                <input type="text" data-ng-model="email" name="email" data-ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required />
                                <span style="color:red" data-ng-show="myForm.email.$dirty || myForm.email.$touched && myForm.email.$invalid">
                                <span data-ng-show="myForm.email.$error.required">Please enter your Email Id.</span>
                                <span data-ng-show="myForm.email.$error.email">Invalid Email Id.</span>
								</span>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input type="text" data-ng-model="contact" name="contact" data-ng-pattern="/^\+?\d{10}$/" required />
                                <span style="color:red"   data-ng-show="myForm.contact.$dirty || myForm.contact.$touched && myForm.contact.$invalid">
                    <span style="color:red;"  data-ng-show="myForm.contact.$error.required">Please Enter Your Mobile Number.</span>
                    <span style="color:red;"  data-ng-show="myForm.contact.$error.pattern">Number must be digits only.</span>
                    </span>
<!--
                                <span class="red-text" ng-if="myForm.contact.$error.required && inquiryForm.contact.$dirty">Contact number is a required field</span>
                               <span class="red-text" ng-show="inquiryForm.contact.$error.pattern">Please enter a 10 digit number</span>
-->
                                <label>Phone Number</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <textarea name="subject" data-ng-model="subject" required></textarea>
                                <span style="color:red" data-ng-show="myForm.subject.$dirty || myForm.subject.$touched && myForm.subject.$invalid">
                                <span style="color:red" data-ng-show="myForm.subject.$error.required">Please enter subject.</span>
									</span>
                                <label>Message</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="btn-lrg submit-btn" data-ng-disabled="myForm.$invalid">Send Message</div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1 col-md-0 col-sm-0"></div>
            </div>
        </div>
        <div class="container-fluid"> </div>
        <?php include'includes/footer.php';?>
            <?php include'includes/foot.php';?>
    
</body>

</html>