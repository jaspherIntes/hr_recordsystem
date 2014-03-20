<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

   <title>Home</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/css/bootstrap-theme.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/dashboard.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/layout.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/metro.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/metro-dropdown.js'); ?>"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/hr_recordsystem/index.php/verifylogin">Web Based Records Management System</a>
        </div>
           <?php
        echo form_open('search/execute_search');
    ?>
    <div class="col-md-4">
        <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search Faculty">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div><!-- /input-group -->
    </div>
            <li class="active">
            <a href="http://localhost/hr_recordsystem/index.php/verifylogin"><span class="glyphicon glyphicon-home"></span></a>
             </li>
             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
                          <span class="glyphicon glyphicon-cog"></span>
                      
                          <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                        <a href="http://localhost/hr_recordsystem/index.php/change_pass">Change Password</a>
                        </li>
                        <li>
                        <a href="http://localhost/hr_recordsystem/index.php/login/logout">Logout</a>
                        </li>
                        </ul>
            </li>
          </ul>
           

          
        </div>
      </div>
    </div>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="active"> <a href="http://localhost/hr_recordsystem/index.php/upload_profPic">
        <img id="ProfPic" src = "<?php echo base_url('uploads/'. $this->session->userdata('emp_id') . '_profPic.jpg') ?>"></img>
       </a></li>

   <div id="accordion1"> 
            <h4 style="width=50px; cursor: pointer">Faculty List</h4> 
            <div class="nav nav-pills nav-stacked">
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/register_faculty">Add Employee</a>
                </h4>
                 <h4>
                        <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display">View Faculty</a>
                  </h4>
                    <h4>
                            <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display/display_regular_faculty"> Regular Faculty </a>
                        </h4>
                        <h4>
                            <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display/display_unRegular_faculty"> Probitionary Faculty </a>
                        </h4>
                        <h4>
                            <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display/display_deactivatedFaculty"> Deactivated Faculty </a>
                        </h4>
                <h4>
             </div> 
         </div>



   <div id="promotions"> 
            <h4 style="width=50px; cursor: pointer">Promotions</h4> 
            <div class="nav nav-pills nav-stacked">
            <h4>
          <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/regularization_candidate"> Candidates </a>
        </h4>
               
                <h4>    
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification/display_rankPoints"> Promotions </a>
                </h4>
              

               </div> 
         </div>

        


    <div id="accordion2"> 
            <h4 style="width=50px; cursor: pointer">Notifications</h4> 
            <div class="nav nav-pills nav-stacked">
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification/display_rankNoti"> New Ranked Faculty </a>
                </h4>
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification"> Upload </a>
                </h4>
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification/display_profUpdate"> Profile </a>
                </h4>
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification/display_education"> Education </a>
                </h4>
                <h4>
                    <a class="sub_menu"  href="http://localhost/hr_recordsystem/index.php/display_notification/display_eligibilityNoti"> Eligibility </a>
                </h4>
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification/display_trainingNoti"> Training </a>
                </h4>
                <h4>
                    <a class="sub_menu" href="http://localhost/hr_recordsystem/index.php/display_notification/display_workExp"> Work Experience </a>
                </h4>
                <br>
             </div> 
         </div>
       

        <div id="ranking"> 
            <h4 style="width=50px; cursor: pointer">Ranking Committee</h4> 
            <div class="nav nav-pills nav-stacked">
                <h4>
          <?php echo '<a class="sub_menu" href="'.base_url().'index.php/ranking_committee/hr_view_rankChairman">'; ?> Ranking Chairman </a> 
        </h4>
        <h4>
          <?php echo '<a class="sub_menu" href="'.base_url().'index.php/ranking_committee/hr_view_rankMembers">'; ?> Ranking Members </a>
        </h4>
                <br>
             </div> 
         </div>
       

        </li>

          
        </div>
 

          
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

   <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
