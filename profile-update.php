<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php';?>
        <link rel="stylesheet" href="resources/plugins/bootstrap-material-datetimepicker.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> </head>
<style>
::-webkit-input-placeholder {
  opacity: 0;
  transition: inherit;
}
</style>

<body>
    <?php include 'includes/header.php';?>
        <div class="container-fluid" id="banner_about">
            <div class="text-box">
                <h2 class="heading_white_h3"><span><a href="index.php">Home </a></span> / Update Profile</h2> </div>
        </div>
        <div class="container-fluid events_services_bg">
            <div class="row">
                 <div class="col-lg-1 col-md-0 col-sm-0"></div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <h2 class="title-hr-aft">Profile</h2>
                    <div class="row">
                         <div class="col-lg-5 col-md-9">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                        </div>
                         <div class="col-lg-7 col-md-3"></div>
                    </div>
                    
                    <div class="row">
                         <div class="col-md-9 col-sm-9">
                            <div class="panel panel-default">
                                <div class="panel-heading pandit-profile">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Update Profile</h3>
                                            <h4>Akashjit Nayak</h4> </div>
                                        <div class="col-md-3">
<!--                                            <button class="spredit_button1">Go Back</button>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body panel-body-padding akash-curva">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                                <div class="circle">
                                                        <!-- User Profile Image -->
                                                        <img class="profile-pic" src="resources/images/Cretae_Event/User_Profile.png">
                                                        <!-- Default Image -->
                                                         <i class="fa fa-user fa-5x"></i> </div>
                                                    <div class="p-image"> <i class="fa fa-camera upload-button"></i>
                                                        <input class="file-upload" type="file" accept="image/*" /> </div>
                         
                                        </div>
                                        <div class="col-md-8 profile-update">
                                             <form action="">
                                              <div class="field">
                                                <input type="text" name="fullname" id="fullname" placeholder="Akash Nayak">
                                                <label for="fullname">Name</label>
                                              </div>
                                                  <div class="field">
                                                <input type="number" name="phone" id="phone" placeholder="09439744***">
                                                <label for="phone">Mobile Number</label>
                                              </div>

                                              <div class="field">
                                                <input type="email" name="email" id="email" placeholder="nayakakashjit@example.com">
                                                <label for="email">Email</label>
                                              </div>
                                                 
                                                 <div class="field">
                                                <input type="text" name="gender" id="gender" placeholder="Male / Femail">
                                                <label for="gender">Gender</label>
                                              </div>
                                                 
                                                 <div class="field">
                                                <input type="text" name="dob" id="date" placeholder="05-06-1990">
                                                <label for="dob">D.O.B</label>
                                              </div>
                                                 
                                                 <div class="field">
                                                <input type="text" name="location" id="location" placeholder="Bangalore">
                                                <label for="location">Location</label>
                                              </div>
                                                 
                                              </form>
                                            <div class="row center_m">
                                          <button class="spredit_button1">Update Profile</button>
                                                <a href="profile.php"> <button class="spredit_button1">Go Back</button></a>
                                             
                                                </div>
                                               <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="post-item akash-curva">
                                <div class="featured-img"> <img src="resources/images/Home/blog_img1.jpg" alt="" class="post-img img-responsive" /> <span class="time">
                     <i class="fa fa-clock-o"> SEPTEMBER 29, 2015</i>
                     </span> </div>
                                <div class="post-content">
                                    <p>CM Naveen Dedicates Gurupriya Bridge To People Of Malkangiri</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-0 col-sm-0"></div>
            </div>
            <?php include'includes/footer.php';?>
                <?php include'includes/foot.php';?>
                    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
                    <script type="text/javascript" src="resources/plugins/bootstrap-material-datetimepicker.js"></script>
</body>
</html>
<script type="text/javascript">
    $('#date').bootstrapMaterialDatePicker({
        weekStart: 0
        , time: false
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#date').bootstrapMaterialDatePicker({
            time: false
            , clearButton: true
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false
            , shortTime: false
            , format: 'HH:mm'
        });
        $('#date-format').bootstrapMaterialDatePicker({
            format: 'dddd DD MMMM YYYY - HH:mm'
        });
        $('#date-fr').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY HH:mm'
            , lang: 'fr'
            , weekStart: 1
            , cancelText: 'ANNULER'
            , nowButton: true
            , switchOnClick: true
        });
        $('#date-end').bootstrapMaterialDatePicker({
            weekStart: 0
            , format: 'DD/MM/YYYY HH:mm'
        });
        $('#date-start').bootstrapMaterialDatePicker({
            weekStart: 0
            , format: 'DD/MM/YYYY HH:mm'
            , shortTime: true
        }).on('change', function (e, date) {
            $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
        });
        $('#min-date').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY HH:mm'
            , minDate: new Date()
        });
        $.material.init()
    });
</script>