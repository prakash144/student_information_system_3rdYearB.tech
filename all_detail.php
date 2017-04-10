
<!DOCTYPE html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta property="fb:app_id" content="272234782795210" />
        <meta property="og:type" content="article" />
                    <meta property="og:image" content="http://internshala.com/static/images/internshala_for_facebook.png" />
            
        <meta name="twitter:site" content="@Internshala" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:creator" content="@internshala" />
                    <meta name="twitter:image:src" content="http://internshala.com/static/images/internshala_for_facebook.png" />
            
                <title >Educational Details</title>
        <meta name="description" content="Internshala is no.1 internship &amp; summer training website for students in India with 900+ internships with stipend in Engineering, MBA, media, law, arts &amp; other streams." />
        <link href="bootstrap/css/edit_profile.8130048216.css" rel="stylesheet" type="text/css" />
        <script src="bootstrap/js/common.1426489310.js" type="text/javascript" ></script>
        <script src="bootstrap/js/student-personal-details.1421843755.js" type="text/javascript" ></script>
        <script src="bootstrap/js/profile_navigation.1421843755.js" type="text/javascript" ></script>
    </head>
<body>
<div class="container-fluid" id="content">
    <div class="max-width-container">
        <div id="content-inner">          
<div id="menu-edit-profile">
    <div class="tab-container" url="per_detail.php">
        <div class="tab">
            <div class="table-cell menu-icon">
                <span class="glyphicon glyphicon-user"></span>
            </div>
            <div class="table-cell menu-content hidden-xs">
                Personal Details
            </div>
        </div>
    </div>
    <div class="tab-container" id="education_details_tab" url="edu_detail.php">
        <div class="tab">
             <div class="table-cell menu-icon">
                <i class="fa fa-graduation-cap"></i>
            </div>
            <div class="table-cell menu-content hidden-xs">
                Education Details
            </div>
        </div>
    </div>
    <div class="tab-container" id="internship_preferences_tab"  url="all_detail.php">
        <div class="tab active">
            <div class="table-cell menu-icon">
                <span class="glyphicon glyphicon-send"></span>
            </div>
            <div class="table-cell menu-content hidden-xs">
                All Details
            </div>
        </div>
    </div>
        <div class="tab-container" id="work_experience_tab"   url="print.php">
        <div class="tab">
            <div class="table-cell menu-icon">
                <span class="glyphicon glyphicon-folder-open"></span>
            </div>
            <div class="table-cell menu-content hidden-xs">
                Print
            </div>
        </div>
    </div>
</div>
            <div id="form-container">
                <h4>Education Details</h4>
                <form role="form" novalidate="novalidate" action="" method="POST" class="student_registration" id="education_details" name="registration" enctype="multipart/form-data">
                                        <div class="form-group">
                        <label for="institute" class="control-label">Institute:</label>
                        <input type="text" value="NIT Durgapur" readonly = 1 class="form-control ui-autocomplete-input" autocomplete="on" isautocomplete="" id="registration-institute" name="institute" placeholder='Start Typing...'>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 left_container">
                            <div class="form-group">
                                <label for="location_insti" class="control-label">City of Institute:</label>
                                <input type="text" value="Durgapur" readonly = 1 class="form-control" id="registration-location-institute" name="location_insti" placeholder='Start Typing...'>
                            </div>
                        </div>
                        <div class="col-xs-6 right_container">
                            <div class="form-group">
                                <label for="hometown" class="control-label">Hometown:</label>
                                <input type="text" value="Durgapur" class="form-control" id="registration-hometown" name="hometown" placeholder='Your Hometown'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 left_container">
                            <div class="form-group">
                                <label for="degree_id" class="control-label">Degree:</label>
                                <input type="text" value="B.Tech" readonly = 1 class="form-control" id="registration-degree-id" name="degree_id" placeholder='Start Typing...'>
                            </div>
                        </div>
                        <div class="col-xs-6 right_container">
                            <div class="form-group">
                                <label for="stream_id" class="control-label">Stream:</label>
                                <input type="text" value="Information Technology" readonly = 1 class="form-control" id="registration-stream-id" name="stream_id" placeholder='Start Typing...'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 left_container">
                            <div class="form-group">
                                <label for="current_year" class="control-label">Current Year:</label>
                                <select class="form-control" id="registration-current-year" name="current_year">
                                    <option value="">--------------Select an option--------------</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected="selected">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="already a graduate">Already a graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6 right_container">
                            <div class="form-group">
                                <label for="last_name" class="control-label">Year of graduation:</label>
                                <select class="form-control" id="registration-year-of-graduation" name="year_of_graduation">
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016" selected="selected">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 left_container">
                            <div class="form-group">
                                <label for="performance_pg" class="control-label">Performance (PG): <span class="label_hint">(If available)</span></label>
                                <div class='row' id="performance_pg_row">
                                    <div class='col-xs-8 left_container'>
                                        <select class="form-control" id="registration-performance-scale-pg" name="performance_scale_pg">
                                            <option value="10" selected="selected">CGPA(Scale of 10)</option>
                                            <option value="4">CGPA(Scale of 4)</option>
                                            <option value="100">%</option>
                                        </select>
                                    </div>
                                    <div class='col-xs-4 right_container'>
                                        <input type="number" value="0.00" class="form-control col-xs-4" id="registration-performance-pg" name="performance_pg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 right_container">
                            <div class="form-group">
                                <label for="performance" class="control-label">Performance (UG):</label>
                                <div class='row' id="performance_ug_row">
                                    <div class='col-xs-8 left_container'>
                                        <select class="form-control" id="registration-performance-scale" name="performance_scale">
                                            <option value="10" selected="selected">CGPA(Scale of 10)</option>
                                            <option value="4">CGPA(Scale of 4)</option>
                                            <option value="100">%</option>
                                        </select>
                                    </div>
                                    <div class='col-xs-4 right_container'>
                                        <input type="number" value="7.90" class="form-control col-xs-4"  id="registration-performance" name="performance">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 left_container">
                            <div class="form-group">
                                <label for="twelve_percentage" class="control-label">% in 12th:</label>
                                <input type="number" value="68.20" readonly = 1 class="form-control" id="registration-12th-percentage" name="twelve_percentage" placeholder=''>
                            </div>
                        </div>
                        <div class="col-xs-6 right_container">
                            <div class="form-group">
                                <label for="ten_percentage" class="control-label">% in 10th:</label>
                                <input type="number" value="65.75" readonly = 1 class="form-control" id="registration-10th-percentage" name="ten_percentage" placeholder=''>
                            </div>
                        </div>
                    </div>

                                            <h4>Education Skills</h4>
                                                    <div class="form-group">
                                <label for="skill-4" class="control-label">PHP :</label>
                                <select class="form-control" id="application-skill-4" name="skill-4">
                                                                            <option value="None">None</option>
                                                                            <option value="Beginner">Beginner</option>
                                                                            <option value="Intermediate" selected="selected">Intermediate</option>
                                                                            <option value="Advanced">Advanced</option>
                                                                    </select>
                            </div>
                                                        <div class="form-group">
                                <label for="skill-5" class="control-label">MySQL :</label>
                                <select class="form-control" id="application-skill-5" name="skill-5">
                                                                            <option value="None">None</option>
                                                                            <option value="Beginner">Beginner</option>
                                                                            <option value="Intermediate" selected="selected">Intermediate</option>
                                                                            <option value="Advanced">Advanced</option>
                                                                    </select>
                            </div>
                            
                    <h4 style='margin-top:20px;'>Resume Upload</h4>
                                            <a href="/uploads/resumes/Prakash_Rabidas_NIT Durgapur_290036.pdf" target="_blank">Prakash_Rabidas_NIT Durgapur_290036.pdf </a>
                        <input type="hidden" id="is_resume1" name="is_resume1" value="1"/><br>
                                            <input id="resume1" name="resume1" class="resume" type="file">
                    <a class="btn btn-primary pull-right" href="edu_detail.html" role="button">NEXT</a>
                    <input name="submit" class="btn btn-primary pull-right" id="submit" value="Save" type="submit">
                     <a class="btn btn-primary pull-right" href="per_detail.html" role="button">BACK</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>