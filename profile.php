<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php';?>
        <link rel="stylesheet" href="resources/plugins/bootstrap-material-datetimepicker.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> </head>
<style>

</style>

<body>
    <?php include 'includes/header.php';?>
        <div class="container-fluid" id="banner_about">
            <div class="text-box">
                <h2 class="heading_white_h3"><span><a href="index.php">Home </a></span>/ Profile</h2> </div>
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
                                <div class="panel-body panel-body-padding">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-8 profile">
                                            <a href="">
                                                <div class="media">
                                                    <div class="media-left"> <img src="resources/images/Event_Details/User.jpg" class="media-object"> </div>
                                                    <div class="media-body">
                                                        <h3 class="">Santanu Kumar</h3>
                                                        <p>santanu.@gmail.com</p>
                                                        <h4>Followers - 50 &nbsp; I &nbsp; Followed - 25</h4> </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="button-9">
                                                <div class="eff-9"></div> <a href="profile-update.php">Update Profile</a> </div>
                                            <div class="button-9">
                                                <div class="eff-9"></div> <a href="create-services-profile.php">Create Service</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center panel-footer-profile"> <span class="btngroup">
                                            <button class="btngroup--btn">public event</button>
                                            <button class="btngroup--btn">private event</button>
                                          </span> </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading pandit-profile">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-8">
                                            <h3>Pandit</h3>
                                            <h4>Marathalli &nbsp; I &nbsp; E-City</h4> </div>
                                        <div class="col-lg-3 col-md-4 text-right">
                                            <button class="spredit_button1">Update Availability</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div class="tabpanel">
                                        <input type="radio" name="tab" id="tabpanel__tab-1" class="tabpanel__tab" checked="checked" />
                                        <label for="tabpanel__tab-1" class="tabpanel__tablabel">View Event List</label>
                                        <input type="radio" name="tab" id="tabpanel__tab-2" class="tabpanel__tab" />
                                        <label for="tabpanel__tab-2" class="tabpanel__tablabel">Create Event</label>
                                        <input type="radio" name="tab" id="tabpanel__tab-3" class="tabpanel__tab" />
                                        <label for="tabpanel__tab-3" class="tabpanel__tablabel">Active</label>
                                        <div class="tabpanel__panels">
                                            <div class="tabpanel__panel" id="tabpanel__panel-1">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-12">
                                                        <div class="paper"> <img class="poster img-responsive" src="resources/images/Event_Details/event.jpg">
                                                            <h1>Satyanarayana Puja</h1>
                                                            <p>Chamundeswari Temple Marathalli</p>
                                                            <h2 class="time-ago">
                                                     <i class="fa fa-clock-o"> 1 Days Ago</i>
                                                     </h2> <a class="btn_read_more" data-toggle="modal" data-target="#spread_event_modal">Spread Event</a> <a href="profile-know-more.php" class="btn_read_more">Know More </a>
                                                            <div class="space"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12">
                                                        <div class="paper"> <img class="poster img-responsive" src="resources/images/Event_Details/event.jpg">
                                                            <h1>Satyanarayana Puja</h1>
                                                            <p>Chamundeswari Temple Marathalli</p>
                                                            <h2 class="time-ago">
                                                     <i class="fa fa-clock-o"> 1 Days Ago</i>
                                                     </h2> <a class="btn_read_more" data-toggle="modal" data-target="#spread_event_modal">Spread Event</a> <a href="profile-know-more.php" class="btn_read_more">Know More </a>
                                                            <div class="space"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12">
                                                        <div class="paper"> <img class="poster img-responsive" src="resources/images/Event_Details/event.jpg">
                                                            <h1>Satyanarayana Puja</h1>
                                                            <p>Chamundeswari Temple Marathalli</p>
                                                            <h2 class="time-ago">
                                                     <i class="fa fa-clock-o"> 1 Days Ago</i>
                                                     </h2> <a class="btn_read_more" data-toggle="modal" data-target="#spread_event_modal">Spread Event</a> <a href="profile-know-more.php" class="btn_read_more">Know More </a>
                                                            <div class="space"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabpanel__panel" id="tabpanel__panel-2">
                                                <div class="tabpanel__panel-2">
                                                    <h2>Create event</h2>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Event Titel"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Area Name Or PinCode"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="House/Building/Area Details"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Landmark"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2>Event Details</h2>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Event Images"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Event Date" id="date"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Event Time" id="time"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="box-container">
                                                                <div class="box">
                                                                    <input type="text" placeholder="Event Description"> <span></span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-9"></div>
                                                            <div class="col-md-3">
                                                                <button class="spredit_button1">Create Event</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabpanel__panel" id="tabpanel__panel-3">
                                                <div class="tabpanel__panel-2">
                                                    <h2>Do You Want To Active</h2> <a class="btn_read_more">Yes</a> <a class="btn_read_more">No</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="post-item">
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