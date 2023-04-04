<!-- this is the file using for application form -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>2022 Hope33 Scholarship Form</title>
        <meta name="viewport" content="width=device-width">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("a.sclname10").click(function(event){
                    $("#scl10").val($(this).html());
                });  
            });
            $(document).ready(function(){
                $("a.sclname12").click(function(event){
                    $("#scl12").val($(this).html());
                });  
            });
        </script>
        <script type="text/javascript">
            function clickfunc10(){
            var input = document.getElementById("myDropdown10");
            var a = div.getElementsByTagName("a");
            for(var i=0;i<a.length;i++){
                a[i].style.display="none";
            }
            }
            function clickfunc12(){
            var input = document.getElementById("myDropdown12");
            var a = div.getElementsByTagName("a");
            for(var i=0;i<a.length;i++){
                a[i].style.display="none";
            }
            }
        </script>
        <script>
            // function submitbtn(){
            //       swal("Good job!", "Your Registration Successfully Completed!", "success");
            // }
            // setTimeout("pageRedirect()", 10000);
        </script>
        <script>
            function filterFunction10() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("scl10");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown10");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "block";
                } else {
                a[i].style.display = "none";
                }
            }
            }
            function filterFunction12() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("scl12");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown12");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "block";
                } else {
                a[i].style.display = "none";
                }
            }
            }
        </script>
        <style>
            html {
            scroll-behavior: smooth;
            }
            textarea{
            resize: vertical;
            }
            a.inside10{
            display:none;
            
            color:black;
            text-decoration: none;
            }
            a.inside10:hover{
            cursor:pointer;
            color:red;
            }
            a.inside12{
            display:none; 
            color:black;
            text-decoration: none;
            }
            a.inside12:hover{
            cursor:pointer;
            color:red;
            }
            body{
            font-size:15;
            }
            .inputborder{
            border:1.5px solid;
            border-color:grey;
            }
            .box
            {
            width:800px;
            margin:0 auto;
            }
            .active_tab1
            {
            background-color:#fff;
            color:#333;
            font-weight: 600;
            }
            .inactive_tab1
            {
            background-color: #f5f5f5;
            color: #333;
            cursor: not-allowed;
            }
            .has-error
            {
            border-color:#cc0000;
            background-color:#ffff99;
            }
            /*.border{
            border:3px solid;
            border-image-source: linear-gradient(to right,rgb(227, 30, 23),rgb(47, 212, 113),rgb(19, 29, 138));
            border-radius: 7px;
            padding: 15px;
            border-image-slice: 1;

            }*/
            .border-body{
            border:3px solid;
            border-image-source: linear-gradient(to right,rgb(227, 30, 23),rgb(47, 212, 113),rgb(19, 29, 138));
            border-radius: 7px;
            padding: 0px;
            border-image-slice: 1;
            }
        </style>
        <?php 
        /* require_once('testing.php'); 
        */
        ?>  
        <script src="js\test.js"></script>
        <script>
            function EnableDisableTextBox(selectedValue, divTagName, textBoxTagName) {
                var selectedValue = selectedValue.options[selectedValue.selectedIndex].value;
                var txtOther = document.getElementById(divTagName);
                var textBoxElement = document.getElementById(textBoxTagName);
                if(selectedValue=="Others"){
                    txtOther.style.display="block";
                    textBoxElement.focus();
                    txtOther.style.marginBottom = "20px";
                }
                else{
                    txtOther.style.marginBottom = "0px";
                    txtOther.style.display="none";
                }
            }
        </script>
    </head>

    <body id="scholarshiphope3">
        <br/>
        <div class="container" id="fullpage"><br/>
            <div align="center">
                <img src="minlogohope3.png"><br>
                <h2 align="center">
                    <span style="color:red">Hope3 </span>
                    <span style="color: rgb(24, 120, 24)">Scholarship </span>
                    <span style="color: rgb(20, 23, 133)">Form</span>
                </h2><br />
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form  method="post" id="register_form" action="testing.php">
                        <div align="center">
                            <ul class="nav nav-tabs" style="display:inline-flex;">
                                <li class="nav-item">
                                    <a class="nav-link active_tab1" style="border:1px solid #ccc" id="student_login_details">1) Student Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="parent_login_details" style="border:1px solid #ccc">2) Relative's Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="education_10_details" style="border:1px solid #ccc">3) 10th Education Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="diploma_ug_details" style="border:1px solid #ccc">4) Deploma Details</a>
                                </li>
                            </ul>
                        </div>
                        <div align="center">
                            <ul class="nav nav-tabs" style="display: inline-flex">
                                <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="education_12_details" style="border:1px solid #ccc">5) 12th Education Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="education_12_subjects" style="border:1px solid #ccc">6) 12th Education Marks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link inactive_tab1" id="completion" style="border:1px solid #ccc">7) Completion</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" style="margin-top:16px;">
                            <div class="tab-pane active" id="student_details">
                                <div class="panel panel-default border-body">
                                    <div class="panel-heading">
                                        <b>Student Details</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="border">
                                            <label>Name_name <span style="color:red">*</span></label>
                                            <input type="text" name="fname" id="fname" class="form-control inputborder" />
                                            <span id="error_fname" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>Initial / Last Name <span style="color:red">*</span></label>
                                            <input type="text" name="lname" id="lname" class="form-control inputborder" />
                                            <span id="error_lname" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>How you came to know Hope3 Scholarship? <span style="color:red">*</span></label>
                                            <select id="appsrc" name="appsrc" class="form-control inputborder">
                                                <option>Choose</option> 
                                                <option>Facebook / Social media</option>
                                                <option>Whatsapp Forward</option>
                                                <option>School / Teacher</option>
                                                <option>Friends / Well wishers</option>
                                                <option>Other</option>
                                            </select>
                                            <span id="error_appsrc" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>Date-of-Birth <span style="color:red">*</span></label>
                                            <input type="date" name="dob" id="dob" class="form-control inputborder" />
                                            <span id="error_dob" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>Gender <span style="color:red">*</span></label><br>
                                            <div style="margin-left: 20px">
                                                <input type="radio" id="male" name="gender" value="Male" checked>
                                                <label style="font-weight: normal">Male</label><br>
                                                <input type="radio" id="female" name="gender" value="female">
                                                <label style="font-weight: normal">Female</label><br>
                                                <input type="radio" id="others" name="gender" value="others">
                                                <label style="font-weight: normal">Others</label>
                                            </div>
                                        </div><br>
                                        <div class="border">
                                            <label>Home Address <span style="color:red">*</span></label>
                                            <textarea id="address" name="address" class="form-control inputborder"></textarea>
                                            <span id="error_address" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label for="district">District <span style="color:red">*</span></label>
                                            <select id="city" name="city" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Ariyalur</option>
                                                <option>Chengalpet</option>
                                                <option>Chennai</option>
                                                <option>Coimbatore</option>
                                                <option>Cuddalore</option>
                                                <option>Dharmapuri</option>
                                                <option>Dindigul</option>
                                                <option>Erode</option>
                                                <option>Kallakurichi</option>
                                                <option>Kancheepuram</option>
                                                <option>Karur</option>
                                                <option>Krishnagiri</option>
                                                <option>Madurai</option>
                                                <option>Nagapattinam</option>
                                                <option>Kanyakumari</option>
                                                <option>Namakkal</option>
                                                <option>Perambalur</option>
                                                <option>Pudukottai</option>
                                                <option>Ramanathapuram</option>
                                                <option>Ranipet</option>
                                                <option>Salem</option>
                                                <option>Sivagangai</option>
                                                <option>Tenkasi</option>
                                                <option>Thanjavur</option>
                                                <option>Theni</option>
                                                <option>Thiruvallur</option>
                                                <option>Thiruvarur</option>
                                                <option>Tuticorin</option>
                                                <option>Trichirappalli</option>
                                                <option>Thirunelveli</option>
                                                <option>Tirupattur</option>
                                                <option>Tiruppur</option>
                                                <option>Thiruvannamalai</option>
                                                <option>The Nilgiris</option>
                                                <option>Vellore</option>
                                                <option>Viluppuram</option>
                                                <option>Virudhunagar</option>
                                            </select>
                                            <span id="error_city" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>Pincode <span style="color:red">*</span></label>
                                            <input type="text" name="zipcode" id="zipcode" class="form-control inputborder" />
                                            <span id="error_zipcode" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>Mobile Number <span style="color:red">*</span></label>
                                            <input type="text" name="phone" id="phone" class="form-control inputborder" />
                                            <span id="error_phone" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" class="form-control inputborder" />
                                            <!-- <span id="error_email" class="text-danger"></span> -->
                                        </div><br>
                                        <div class="border">
                                            <label>Disabled? <span style="color:red">*</span></label><br>
                                            <div style="margin-left: 20px">
                                                <input type="radio" id="disabled" name="disabled" value="Yes">
                                                <label style="font-weight: normal">Yes</label><br>
                                                <input type="radio" id="disabled" name="disabled" value="No" checked>
                                                <label style="font-weight: normal">No</label>
                                            </div>
                                        </div><br>
                                        <div class="border">
                                            <label for="status">Living with? <span style="color:red">*</span></label>
                                            <select id="status" name="status" class="form-control inputborder">
                                                <option>Choose</option> 
                                                <option>Parents</option>
                                                <option>Single parent</option>
                                                <option>Orphanage Home</option>
                                                <option>In Refugee Camp</option>
                                                <option>Other</option>
                                            </select>
                                            <span id="error_status" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label for="regiontype">Home Region type <span style="color:red">*</span></label>
                                            <select id="regiontype" name="regiontype" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Village</option>
                                                <option>Town</option>
                                                <option>City</option>
                                            </select>
                                            <span id="error_regiontype" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label for="admissionFor">What course do you want to study? <span style="color:red">*</span></label>
                                            <select id="admissionFor" name="admissionFor" class="form-control inputborder" onchange="EnableDisableTextBox(this,'admissionOthers','admissionForOthers')">
                                                <option value="Choose">Choose</option> 
                                                <option value="BE - Computer Science">BE - Computer Science</option>
                                                <option value="BE - Information Technology">BE - Information Technology</option>
                                                <option value="BE - Electronics">BE - Electronics</option>
                                                <option value="BE - Electrical">BE - Electrical</option>
                                                <option value="B.Sc Comp Science">B.Sc Computer Science</option>
                                                <option value="B.Sc Maths">B.Sc Maths</option>
                                                <option value="BA Political Science">BA Political Science</option>
                                                <option value="BA History">BA History</option>
                                                <option value="Medical">Medical</option>
                                                <option value="NEET">NEET</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <span id="error_admissionFor" class="text-danger"></span>
                                        </div><br>
                                        <div class="border" id="admissionOthers" style="display:none">
                                            <label>Specify here.. <span style="color:red">*</span></label>
                                            <input type="text" name="admissionForOthers" id="admissionForOthers" class="form-control inputborder"/>
                                            <span style="color:red">Scholarship for other courses may not be available !!</span><br>
                                            <span id="error_admissionForOthers" class="text-danger"></span>
                                        </div>
                                        <div class="border">
                                            <label for="plansAfterDegree">Ambition (Choice 1)? <span style="color:red">*</span></label>
                                            <select id="plansAfterDegree" name="plansAfterDegree" class="form-control inputborder" onchange="EnableDisableTextBox(this,'planAfter','plansOther')">
                                                <option>Choose</option> 
                                                <option>Doctor</option> 
                                                <option>Engineer</option> 
                                                <option>Designer</option> 
                                                <option>Film Making</option> 
                                                <option>Agriculture</option> 
                                                <option>Work in Banking Sector</option>
                                                <option>Business</option>
                                                <option>CA</option>
                                                <option>Civil Service</option>
                                                <option>Research</option>
                                                <option>Teacher</option>  
                                                <option>Others</option>
                                            </select>
                                            <span id="error_plansAfterDegree" class="text-danger"></span>
                                        </div><br>
                                        <div class="border" id="planAfter" style="display: none;">
                                            <label>Specify here.. <span style="color:red">*</span></label>
                                            <input type="text" name="plansOther" id="plansOther" class="form-control inputborder"/>
                                            <span id="error_plansOther" class="text-danger"></span>
                                        </div>
                                        <div class="border">
                                            <label for="plansAfterDegree1">Ambition (Choice 2)? <span style="color:red">*</span></label>
                                            <select id="plansAfterDegree1" name="plansAfterDegree1" class="form-control inputborder" onchange="EnableDisableTextBox(this,'planAfter1','plansOther1')">
                                                <option>Choose</option> 
                                                <option>Doctor</option> 
                                                <option>Engineer</option> 
                                                <option>Designer</option> 
                                                <option>Film Making</option> 
                                                <option>Agriculture</option> 
                                                <option>Work in Banking Sector</option>
                                                <option>Business</option>
                                                <option>CA</option>
                                                <option>Civil Service</option>
                                                <option>Research</option>
                                                <option>Teacher</option>  
                                                <option>Others</option>
                                            </select>
                                            <span id="error_plansAfterDegree1" class="text-danger"></span>
                                        </div><br>
                                        <div class="border" id="planAfter1" style="display: none;">
                                            <label>Specify here.. <span style="color:red">*</span></label>
                                            <input type="text" name="plansOther1" id="plansOther1" class="form-control inputborder"/>
                                            <span id="error_plansOther1" class="text-danger"></span>
                                        </div>
                                        <div class="border">
                                            <label>Is First Graduate ? <span style="color:red">*</span></label><br>
                                            <div style="margin-left: 20px">
                                                <input type="radio" id="graduate" name="graduate" value="Yes">
                                                <label style="font-weight: normal">Yes</label><br>
                                                <input type="radio" id="graduate" name="graduate" value="No" checked>
                                                <label style="font-weight: normal">No</label>
                                            </div>
                                        </div><br>
                                        <div align="center">
                                            <button type="button" name="stu_next" id="stu_next" class="btn btn-info btn-lg">Next</button>
                                            <!-- <input type="submit" name="submit" id="submit">--> 
                                        </div>    
                                    </div>
                                </div>
                                <center>
                                    <h4 style="color:red">Note : Scholarship for other than the mentioned courses may not be available !!</h4>
                                </center><br>
                            </div>
                            <div class="tab-pane fade" id="parent_details">
                                <div class="panel panel-default border-body">
                                    <div class="panel-heading"><b>Relatives Information</b></div>
                                    <div class="panel-body">
                                        <div class="border">
                                            <label>Name <span style="color:red">*</span></label>
                                            <input type="text" name="f_fname" id="f_fname" class="form-control inputborder" />
                                            <span id="error_f_fname" class="text-danger"></span>
                                        </div><br>

                                        <!-- <div class="border">
                                        <label>Last Name / Initial</label>
                                        <input type="text" name="f_lname" id="f_lname" class="form-control inputborder" />
                                        <span id="error_f_lname" class="text-danger"></span>
                                        </div><br> -->

                                        <div class="border">
                                            <label for="relation">Relationship type <span style="color:red">*</span></label>
                                            <select id="relation_type" name="relation_type" class="form-control inputborder">
                                                <option>Father</option>
                                                <option>Mother</option>
                                                <option>Guardian</option>
                                                <option>Other</option>
                                            </select>
                                            <span id="error_relation_type" class="text-danger"></span>
                                        </div><br>

                                        <!-- <div class="border">
                                        <label>Existence <span style="color:red">*</span></label><br>
                                        <div style="margin-left: 20px">
                                        <input type="radio" id="Yes" name="existence" value="Yes" checked>
                                        <label style="font-weight: normal">Yes</label><br>
                                        <input type="radio" id="No" name="existence" value="No">
                                        <label style="font-weight: normal">No</label>
                                        </div>
                                        </div><br>

                                        <div class="border">
                                        <label>Age</label>
                                        <input type="text" name="f_age" id="f_age" class="form-control inputborder" />
                                        <span id="error_f_age" class="text-danger"></span>
                                        </div><br>        

                                        <div class="border">
                                        <label>Disability </label><br>
                                        <div style="margin-left: 20px">
                                        <input type="radio" id="Yes" name="disability" value="Yes">
                                        <label style="font-weight: normal">Yes</label><br>
                                        <input type="radio" id="No" name="disability" value="No" checked>
                                        <label style="font-weight: normal">No</label>
                                        </div>
                                        </div><br>

                                        <div class="border">
                                        <label>Disability Remarks </label>
                                        <input type="text" name="f_disability_remarks" id="f_disability_remarks" class="form-control inputborder" />
                                        <span id="error_f_occupation" class="text-danger"></span>
                                        </div><br> -->

                                        <div class="border">
                                            <label for="f_educational_level">Educational level</label>
                                            <select id="f_educational_level" name="f_educational_level" class="form-control inputborder">
                                                <option>Below 10th</option>
                                                <option>10th Standard</option>
                                                <option>12th Standard</option>
                                                <option>Bachelor degree</option>
                                                <option>Master degree</option>
                                            </select>
                                            <!-- <span id="error_f_educational_level" class="text-danger"></span>-->
                                        </div><br>

                                        <div class="border">
                                            <label>Occupation </label>
                                            <input type="text" name="f_occupation" id="f_occupation" class="form-control inputborder" />
                                            <!-- <span id="error_m_name" class="text-danger"></span>-->\
                                        </div><br>

                                        <div class="border">
                                            <label>Mobile number <span style="color:red">*</span></label>
                                            <input type="text" name="f_phone" id="f_phone" class="form-control inputborder" />
                                            <span id="error_f_phone" class="text-danger"></span>
                                        </div><br>

                                        <div class="border">
                                            <label>Email id</label>
                                            <input type="text" name="f_email" id="f_email" class="form-control inputborder" />
                                            <!-- <span id="error_f_email" class="text-danger"></span> -->
                                        </div><br>

                                        <!-- <div class="border">
                                        <label>Occupation proof  (format supported: '.png','.jpg','.jpeg')</label>
                                        <input type="file" name="f_occupation_proof" id="f_occupation_proof"/>
                                        <span id="error_f_occupation_proof" class="text-danger"></span>
                                        </div><br> -->

                                        <div class="border">
                                            <label>Total members in family <span style="color:red">*</span></label></label>
                                            <input type="text" name="familymembers" id="familymembers" class="form-control inputborder" />
                                            <span id="error_familymembers" class="text-danger"></span>
                                        </div><br>

                                        <div class="border">
                                            <label>Total Family Income (Monthly) <span style="color:red">*</span></label></label>
                                            <input type="text" name="f_yearly_salary" id="f_yearly_salary" class="form-control inputborder" />
                                            <span id="error_f_yearly_salary" class="text-danger"></span>
                                        </div><br>


                                        <div align="center">
                                            <button type="button" name="par_previous" id="par_previous" class="btn btn-default btn-lg">Previous</button>
                                            <button type="button" name="par_next" id="par_next" class="btn btn-info btn-lg">Next</button>
                                            <!-- <input type="submit" name="submit" id="submit">-->
                                        </div><br />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education10_details">
                                <div class="panel panel-default border-body">
                                    <div class="panel-heading">10th Education Details</div>
                                    <div class="panel-body">                             
                                        <div class="border">
                                            <label>10th School Name <span style="color:red">*</span></label>
                                            
                                            <!-- <select id="scl10" name="scl10" class="form-control inputborder">
                                            <option>Choose</option>
                                            <?php while($row1= ($result10dd)):;?>
                                            <option><?php echo $row1[1];?></option>
                                            <?php endwhile;?>
                                            <option>Other</option>
                                            </select> -->
                                            <div id="myDropdown10" class="dropdown-content">
                                                <input type="text" class="scl10 form-control inputborder" name="scl10" placeholder="Search School.." id="scl10" onkeyup="filterFunction10()">                            
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT distinct school_name as name From Schools");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)){
                                                echo "<a class='inside10 sclname10' onclick='clickfunc10()'>". $row['name'] ."</a>" ;
                                                }
                                                ?>
                                            </div>
                                            <span id="error_scl10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th School Location</label>
                                            <input type="text" name="scl_address10" id="scl_address10" class="form-control inputborder" />
                                            <!-- <span id="error_scl_address10" class="text-danger"></span>-->
                                        </div><br>
                                        <div class="border">
                                            <label for="district">District where you studied 10th standard <span style="color:red">*</span></label>
                                            <select id="scl10city" name="scl10city" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Ariyalur</option>
                                                <option>Chengalpet</option>
                                                <option>Chennai</option>
                                                <option>Coimbatore</option>
                                                <option>Cuddalore</option>
                                                <option>Dharmapuri</option>
                                                <option>Dindigul</option>
                                                <option>Erode</option>
                                                <option>Kallakurichi</option>
                                                <option>Kancheepuram</option>
                                                <option>Karur</option>
                                                <option>Krishnagiri</option>
                                                <option>Madurai</option>
                                                <option>Nagapattinam</option>
                                                <option>Kanyakumari</option>
                                                <option>Namakkal</option>
                                                <option>Perambalur</option>
                                                <option>Pudukottai</option>
                                                <option>Ramanathapuram</option>
                                                <option>Ranipet</option>
                                                <option>Salem</option>
                                                <option>Sivagangai</option>
                                                <option>Tenkasi</option>
                                                <option>Thanjavur</option>
                                                <option>Theni</option>
                                                <option>Thiruvallur</option>
                                                <option>Thiruvarur</option>
                                                <option>Tuticorin</option>
                                                <option>Trichirappalli</option>
                                                <option>Thirunelveli</option>
                                                <option>Tirupattur</option>
                                                <option>Tiruppur</option>
                                                <option>Thiruvannamalai</option>
                                                <option>The Nilgiris</option>
                                                <option>Vellore</option>
                                                <option>Viluppuram</option>
                                                <option>Virudhunagar</option>
                                            </select>
                                            <span id="error_scl10city" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label for="scl_regiontype10">School Region type<span style="color:red">*</span></label>
                                            <select id="scl_regiontype10" name="scl_regiontype10" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Village</option>
                                                <option>Town</option>
                                                <option>City</option>
                                            </select>
                                            <span id="error_scl_regiontype10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard school type <span style="color:red">*</span></label><br>
                                            <div style="margin-left: 20px">
                                                <input type="radio" id="govt_scl" name="scl_type_10" value="Government School" checked>
                                                <label style="font-weight: normal">Government School</label><br>
                                                <input type="radio" id="govt_aided_scl" name="scl_type_10" value="Government Aided School">
                                                <label style="font-weight: normal">Government Aided School</label><br>
                                                <input type="radio" id="private_scl" name="scl_type_10" value="Private School">
                                                <label style="font-weight: normal">Private School</label>
                                            </div>
                                        </div><br>
                                        <div class="border">
                                            <label for="year_10">Year passed 10th Standard <span style="color:red">*</span></label>
                                            <select id="year_10" name="year_10" class="form-control inputborder">
                                                <option>Option</option>
                                                <option>2022</option>
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                            </select>
                                            <span id="error_year_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th Registration number</label>
                                            <input type="text" name="regno10" id="regno10" class="form-control inputborder" />
                                            <!-- <span id="error_regno10" class="text-danger"></span> -->
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard subject 1: language marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_lang_10" id="mark_lang_10" class="form-control inputborder" />
                                            <span id="error_mark_lang_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard subject 2: English language marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_englang_10" id="mark_englang_10" class="form-control inputborder" />
                                            <span id="error_mark_englang_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard subject 3: Mathematics marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_maths_10" id="mark_maths_10" class="form-control inputborder" />
                                            <span id="error_mark_maths_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard subject 4: Science marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_science_10" id="mark_science_10" class="form-control inputborder" />
                                            <span id="error_mark_science_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard subject 5: Social Science marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_socscience_10" id="mark_socscience_10" class="form-control inputborder" />
                                            <span id="error_mark_socscience_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th Total Marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_tot_10" id="mark_tot_10" class="form-control inputborder" />
                                            <span id="error_mark_tot_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label for="course_details">which course did you complete? <span style="color:red">*</span></label>
                                            <select id="course_details" name="course_details" class="form-control inputborder">
                                                <option>Option</option>
                                                <option>Diplomo</option>
                                                <option>12th</option>
                                               
                                            </select>
                                            <span id="error_coures_details" class="text-danger"></span>
                                        </div><br>
                                        <div align="center">
                                            <button type="button" name="education10_details_previous" id="education10_details_previous" class="btn btn-default btn-lg">Previous</button>
                                            <button type="button" name="education10_details_next" id="education10_details_next" class="btn btn-info btn-lg">Next</button><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="diploma_details">
                                <div class="panel panel-default border-body">
                                    <div class="panel-heading">Diploma Details</div>
                                    <div class="panel-body">                             
                                        <div class="border">
                                            <label>Collage Name <span style="color:red">*</span></label>
                                            <div id="myDropdown10" class="dropdown-content">
                                                <input type="text" class="scl10 form-control inputborder" name="collage_name" placeholder="Search collage.." id="collage_name" >       
                                            </div>
                                            <span id="error_collage_name" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th School Location</label>
                                            <input type="text" name="scl_address10" id="scl_address10" class="form-control inputborder" />
                                           
                                        </div><br>                                     
                                        <div class="border">
                                            <label for="district">District where you studied 10th standard <span style="color:red">*</span></label>
                                            <select id="scl10city" name="scl10city" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Ariyalur</option>
                                                <option>Chengalpet</option>
                                                <option>Chennai</option>
                                                <option>Coimbatore</option>
                                                <option>Cuddalore</option>
                                                <option>Dharmapuri</option>
                                                <option>Dindigul</option>
                                                <option>Erode</option>
                                                <option>Kallakurichi</option>
                                                <option>Kancheepuram</option>
                                                <option>Karur</option>
                                                <option>Krishnagiri</option>
                                                <option>Madurai</option>
                                                <option>Nagapattinam</option>
                                                <option>Kanyakumari</option>
                                                <option>Namakkal</option>
                                                <option>Perambalur</option>
                                                <option>Pudukottai</option>
                                                <option>Ramanathapuram</option>
                                                <option>Ranipet</option>
                                                <option>Salem</option>
                                                <option>Sivagangai</option>
                                                <option>Tenkasi</option>
                                                <option>Thanjavur</option>
                                                <option>Theni</option>
                                                <option>Thiruvallur</option>
                                                <option>Thiruvarur</option>
                                                <option>Tuticorin</option>
                                                <option>Trichirappalli</option>
                                                <option>Thirunelveli</option>
                                                <option>Tirupattur</option>
                                                <option>Tiruppur</option>
                                                <option>Thiruvannamalai</option>
                                                <option>The Nilgiris</option>
                                                <option>Vellore</option>
                                                <option>Viluppuram</option>
                                                <option>Virudhunagar</option>
                                            </select>
                                            <span id="error_scl10city" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label for="scl_regiontype10">School Region type<span style="color:red">*</span></label>
                                            <select id="scl_regiontype10" name="scl_regiontype10" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Village</option>
                                                <option>Town</option>
                                                <option>City</option>
                                            </select>
                                            <span id="error_scl_regiontype10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th standard school type <span style="color:red">*</span></label><br>
                                            <div style="margin-left: 20px">
                                                <input type="radio" id="govt_scl" name="scl_type_10" value="Government School" checked>
                                                <label style="font-weight: normal">Government School</label><br>
                                                <input type="radio" id="govt_aided_scl" name="scl_type_10" value="Government Aided School">
                                                <label style="font-weight: normal">Government Aided School</label><br>
                                                <input type="radio" id="private_scl" name="scl_type_10" value="Private School">
                                                <label style="font-weight: normal">Private School</label>
                                            </div>
                                        </div><br>
                                        <div class="border">
                                            <label for="year_10">Year passed 10th Standard <span style="color:red">*</span></label>
                                            <select id="year_10" name="year_10" class="form-control inputborder">
                                                <option>Option</option>
                                                <option>2022</option>
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                            </select>
                                            <span id="error_year_10" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>10th Total Marks <span style="color:red">*</span></label>
                                            <input type="text" name="mark_tot_10" id="mark_tot_10" class="form-control inputborder" />
                                            <span id="error_mark_tot_10" class="text-danger"></span>
                                        </div><br>
                                        <div align="center">
                                            <button type="button" name="diploma_details_previous" id="deploma_details_previous" class="btn btn-default btn-lg">Previous</button>
                                            <button type="button" name="diploma_details_next" id="diploma_details_next" class="btn btn-info btn-lg">Next</button><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education12_details"> 
                                <div class="panel panel-default border-body">
                                    <div class="panel-heading">12th Education Details</div>
                                    <div class="panel-body">
                                        <div class="border">
                                            <label>12th School Name <span style="color:red">*</span></label>
                                            <div id="myDropdown12" class="dropdown-content">
                                                <input type="text" class="scl12 form-control inputborder" name="scl12" placeholder="Search School.." id="scl12" onkeyup="filterFunction12()">
                                                
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT distinct school_name as name From Schools");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)){
                                                echo "<a class='inside12 sclname12' onclick='clickfunc12()'>". $row['name'] ."</a>" ;
                                                }
                                                ?>
                                            </div>
                                            <span id="error_scl12" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>12th School Location</label>
                                            <input type="text" name="scl_address12" id="scl_address12" class="form-control inputborder" />
                                            <!-- <span id="error_scl_address10" class="text-danger"></span>-->
                                        </div><br>
                                        <div class="border">
                                            <label for="district">District where you studied 12th standard <span style="color:red">*</span></label>
                                            <select id="scl12city" name="scl12city" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Ariyalur</option>
                                                <option>Chengalpet</option>
                                                <option>Chennai</option>
                                                <option>Coimbatore</option>
                                                <option>Cuddalore</option>
                                                <option>Dharmapuri</option>
                                                <option>Dindigul</option>
                                                <option>Erode</option>
                                                <option>Kallakurichi</option>
                                                <option>Kancheepuram</option>
                                                <option>Karur</option>
                                                <option>Krishnagiri</option>
                                                <option>Madurai</option>
                                                <option>Nagapattinam</option>
                                                <option>Kanyakumari</option>
                                                <option>Namakkal</option>
                                                <option>Perambalur</option>
                                                <option>Pudukottai</option>
                                                <option>Ramanathapuram</option>
                                                <option>Ranipet</option>
                                                <option>Salem</option>
                                                <option>Sivagangai</option>
                                                <option>Tenkasi</option>
                                                <option>Thanjavur</option>
                                                <option>Theni</option>
                                                <option>Thiruvallur</option>
                                                <option>Thiruvarur</option>
                                                <option>Tuticorin</option>
                                                <option>Trichirappalli</option>
                                                <option>Thirunelveli</option>
                                                <option>Tirupattur</option>
                                                <option>Tiruppur</option>
                                                <option>Thiruvannamalai</option>
                                                <option>The Nilgiris</option>
                                                <option>Vellore</option>
                                                <option>Viluppuram</option>
                                                <option>Virudhunagar</option>
                                            </select>
                                            <span id="error_scl12city" class="text-danger"></span>
                                        </div><br>                        
                                        <div class="border">
                                            <label for="scl_regiontype12">School Region type<span style="color:red">*</span></label>
                                            <select id="scl_regiontype12" name="scl_regiontype12" class="form-control inputborder">
                                                <option>Choose</option>
                                                <option>Village</option>
                                                <option>Town</option>
                                                <option>City</option>
                                            </select>
                                            <span id="error_scl_regiontype12" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>12th standard school type <span style="color:red">*</span></label><br>
                                            <div style="margin-left: 20px">
                                                <input type="radio" id="govt_scl" name="scl_type_12" value="Government School" checked>
                                                <label style="font-weight: normal">Government School</label><br>
                                                <input type="radio" id="govt_aided_scl" name="scl_type_12" value="Government Aided School">
                                                <label style="font-weight: normal">Government Aided School</label><br>
                                                <input type="radio" id="private_scl" name="scl_type_12" value="Private School">
                                                <label style="font-weight: normal">Private School</label>
                                            </div>
                                        </div><br>
                                        <div class="border">
                                            <label for="year_12">Year passed 12th Standard <span style="color:red">*</span></label>
                                            <select id="year_12" name="year_12" class="form-control inputborder">
                                                <option>Option</option>
                                                <option>2022</option>
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                            </select>
                                            <span id="error_year_12" class="text-danger"></span>
                                        </div><br>
                                        <div class="border">
                                            <label>12th Registration Number</label>
                                            <input type="text" name="regno12" id="regno12" class="form-control inputborder" />
                                            <span id="error_regno12" class="text-danger"></span>
                                        </div><br>        
                                        <div class="border">
                                            <label>Engineering Cutoff (for engineering students)</label>
                                            <input type="text" name="engcutoff" id="engcutoff" class="form-control inputborder" />
                                        </div><br>
                                    <div>
                                    <div  class="border">
                                        <label>NEET Score (for medical students)</label>
                                        <input type="text" name="medcutoff" id="medcutoff" class="form-control inputborder" />
                                    </div>
                                </div><br>

                                <div class="border">
                                    <label>Agri Cutoff (for Agri students)</label>
                                    <input type="text" name="agricutoff" id="agricutoff" class="form-control inputborder" />
                                </div><br>
                                <div class="border">
                                    <label>subject 1: Tamil / language marks 
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_lang_12" id="mark_lang_12" class="form-control inputborder" />
                                    <span id="error_mark_lang_12" class="text-danger"></span>
                                </div><br>
                                <div class="border">
                                    <label>subject 2: English marks 
                                    <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_englang_12" id="mark_englang_12" class="form-control inputborder" />
                                    <span id="error_mark_englang_12" class="text-danger"></span>
                                </div><br>
                                <div class="border">
                                    <label for="sub12">Select your subjects <span style="color:red">*</span></label>
                                    <select id="sub12" name="sub12" class="form-control inputborder">
                                        <option>Choose</option>
                                        <option>Mathematics / Physics / Chemistry / Statistics</option><!-- s3,s6,s7,s29-->
                                        <option>Accountancy / Commerce / Economics / History</option><!-- s13,s12,s15,s17-->
                                        <option>Accountancy / Business Maths / Commerce / Economics</option><!-- s13,s14,s12,s15-->
                                        <option>Accountancy / Commerce / Economics / Political Science</option><!-- s13,s12,s15,s16-->
                                        <option>Commerce / Economics / Accountancy / Statistics</option><!-- s12,s15,s13,s29-->  
                                        <option>Biology / Chemistry / Mathematics / Physics</option><!-- s9,s7,s3,s16-->
                                        <option>Botany / Chemistry / Physics / Zoology</option><!-- s11,s7,s6,s10-->
                                        <option>Chemistry / Computer Science / Mathematics / Physics</option><!-- s7,s8,s3,s6-->
                                        <option>Accountancy / Commerce / Computer Science / Economics</option><!-- s13,s12,s8,s15-->
                                        <option>Accountancy / Commerce / Computer Science / Economics</option><!-- s13,s12,s8,s15-->
                                        <!-- <option>Agriculture / Biology</option>
                                        <option>Agriculture</option>
                                        <option>Arts</option>
                                        <option>Biology / Nursing</option>
                                        <option>Commerce</option>
                                        <option>Engineering</option>
                                        <option>Home Science / Vocational</option>
                                        <option>Medicine</option>
                                        <option>Nursing</option>
                                        <option>Paramedical</option>
                                        <option>Science</option>
                                        <option>Other</option> -->
                                    </select>
                                    <span id="error_sub12" class="text-danger"></span>
                                </div><br>
                                <div align="center">
                                    <button type="button" name="education12_details_previous" id="education12_details_previous" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="education12_details_next" id="education12_details_next" class="btn btn-info btn-lg">Next</button>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects1">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="mpcs">   
                                    <div class="border">
                                        <label>12th Mathematics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_maths1_12" id="mark_maths1_12" class="form-control inputborder" />
                                        <span id="error_mark_maths1_12" class="text-danger"></span>
                                    </div><br>

                                    <div class="border">
                                        <label>12th Physics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_phy1_12" id="mark_phy1_12" class="form-control inputborder" />
                                        <span id="error_mark_phy1_12" class="text-danger"></span>
                                    </div><br>

                                    <div class="border">
                                        <label>12th Chemistry Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_chem1_12" id="mark_chem1_12" class="form-control inputborder" />
                                        <span id="error_mark_chem1_12" class="text-danger"></span>
                                    </div><br>

                                    <div class="border">
                                        <label>12th Statistics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_stat1_12" id="mark_stat1_12" class="form-control inputborder" />
                                        <span id="error_mark_stat1_12" class="text-danger"></span>
                                    </div><br>

                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot1_12" id="mark_tot1_12" class="form-control inputborder" />
                                        <span id="error_mark_tot1_12" class="text-danger"></span>
                                    </div><br>

                                    <div align="center">
                                        <button type="button" name="major1_prev" id="major1_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major1_next" id="major1_next" class="btn btn-info btn-lg">Next</button>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects2">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="ceah">      
                                    <div class="border">
                                        <label>12th Commerce Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_comm2_12" id="mark_comm2_12" class="form-control inputborder" />
                                        <span id="error_mark_comm2_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Economics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_eco2_12" id="mark_eco2_12" class="form-control inputborder" />
                                        <span id="error_mark_eco2_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Accountancy Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_acc2_12" id="mark_acc2_12" class="form-control inputborder" />
                                        <span id="error_mark_acc2_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th History Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_his2_12" id="mark_his2_12" class="form-control inputborder" />
                                        <span id="error_mark_his2_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot2_12" id="mark_tot2_12" class="form-control inputborder" />
                                        <span id="error_mark_tot2_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major2_prev" id="major2_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major2_next" id="major2_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects3">
                            <div class="panel panel-default border-body">
                            <div class="panel-heading">12th Education Major Subjects</div>
                            <div class="panel-body fade" id="ceab">         
                                <div class="border">
                                    <label>12th Commerce Marks 
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_comm3_12" id="mark_comm3_12" class="form-control inputborder" />
                                    <span id="error_mark_comm3_12" class="text-danger"></span>
                                </div><br>
                                <div class="border">
                                    <label>12th Economics Marks 
                                    <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_eco3_12" id="mark_eco3_12" class="form-control inputborder" />
                                    <span id="error_mark_eco3_12" class="text-danger"></span>
                                </div><br>
                                <div class="border">
                                    <label>12th Accountancy Marks 
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_acc3_12" id="mark_acc3_12" class="form-control inputborder inputborder" />
                                    <span id="error_mark_acc3_12" class="text-danger"></span>
                                </div><br>
                                <div class="border">
                                    <label>12th Business Math Marks 
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_bm3_12" id="mark_bm3_12" class="form-control inputborder" />
                                    <span id="error_mark_bm3_12" class="text-danger"></span>
                                </div><br>
                                <div class="border">
                                    <label>12th Total Marks 
                                        <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="mark_tot3_12" id="mark_tot3_12" class="form-control inputborder" />
                                    <span id="error_mark_tot3_12" class="text-danger"></span>
                                </div><br>
                                <div align="center">
                                    <button type="button" name="major3_prev" id="major3_prev" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="major3_next" id="major3_next" class="btn btn-info btn-lg">Next</button><br />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects4">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="ceap">        
                                    <div class="border">
                                        <label>12th Commerce Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_comm4_12" id="mark_comm4_12" class="form-control inputborder" />
                                        <span id="error_mark_comm4_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Economics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_eco4_12" id="mark_eco4_12" class="form-control inputborder" />
                                        <span id="error_mark_eco4_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Accountancy Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_acc4_12" id="mark_acc4_12" class="form-control inputborder" />
                                        <span id="error_mark_acc4_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Political Science Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_ps4_12" id="mark_ps4_12" class="form-control inputborder" />
                                        <span id="error_mark_ps4_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot4_12" id="mark_tot4_12" class="form-control inputborder" />
                                        <span id="error_mark_tot4_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major4_prev" id="major4_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major4_next" id="major4_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects5">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="ceas">          
                                    <div class="border">
                                        <label>12th Commerce Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_comm5_12" id="mark_comm5_12" class="form-control inputborder" />
                                        <span id="error_mark_comm5_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Economics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_eco5_12" id="mark_eco5_12" class="form-control inputborder" />
                                        <span id="error_mark_eco5_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Accountancy Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_acc5_12" id="mark_acc5_12" class="form-control inputborder" />
                                        <span id="error_mark_acc5_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Statistics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_stat5_12" id="mark_stat5_12" class="form-control inputborder" />
                                        <span id="error_mark_stat5_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot5_12" id="mark_tot5_12" class="form-control inputborder" />
                                        <span id="error_mark_tot5_12" class="text-danger"></span>
                                    </div><br>

                                    <div align="center">
                                        <button type="button" name="major5_prev" id="major5_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major5_next" id="major5_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects6">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="mpcb">
                                    <div class="border">
                                        <label>12th Mathematics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_maths6_12" id="mark_maths6_12" class="form-control inputborder" />
                                        <span id="error_mark_maths6_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Physics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_phy6_12" id="mark_phy6_12" class="form-control inputborder" />
                                        <span id="error_mark_phy6_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Chemistry Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_chem6_12" id="mark_chem6_12" class="form-control inputborder" />
                                        <span id="error_mark_chem6_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Biology Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_bio6_12" id="mark_bio6_12" class="form-control inputborder" />
                                        <span id="error_mark_bio6_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot6_12" id="mark_tot6_12" class="form-control inputborder" />
                                        <span id="error_mark_tot6_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major6_prev" id="major6_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major6_next" id="major6_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects7">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="zpcb">        
                                    <div class="border">
                                        <label>12th Zoology Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_zoo7_12" id="mark_zoo7_12" class="form-control inputborder" />
                                        <span id="error_mark_zoo7_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Physics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_phy7_12" id="mark_phy7_12" class="form-control inputborder" />
                                        <span id="error_mark_phy7_12" class="text-danger"></span>
                                    </div>
                                    <br>
                                    <div class="border">
                                        <label>12th Chemistry Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_chem7_12" id="mark_chem7_12" class="form-control inputborder" />
                                        <span id="error_mark_chem7_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Botony Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_bot7_12" id="mark_bot7_12" class="form-control inputborder" />
                                        <span id="error_mark_bot7_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot7_12" id="mark_tot7_12" class="form-control inputborder" />
                                        <span id="error_mark_tot7_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major7_prev" id="major7_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major7_next" id="major7_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects8">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="mpccs">     
                                    <div class="border">
                                        <label>12th Mathematics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_maths8_12" id="mark_maths8_12" class="form-control inputborder" />
                                        <span id="error_mark_maths8_12" class="text-danger"></span>
                                    </div><br>
                                    <div  class="border">
                                        <label>12th Physics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_phy8_12" id="mark_phy8_12" class="form-control inputborder" />
                                        <span id="error_mark_phy8_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Chemistry Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_chem8_12" id="mark_chem8_12" class="form-control inputborder" />
                                        <span id="error_mark_chem8_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th ComputerScience Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_cs8_12" id="mark_cs8_12" class="form-control inputborder" />
                                        <span id="error_mark_cs8_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot8_12" id="mark_tot8_12" class="form-control inputborder" />
                                        <span id="error_mark_tot8_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major8_prev" id="major8_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major8_next" id="major8_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects9">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="acce">            
                                    <div class="border">
                                        <label>12th Accountancy Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_acc9_12" id="mark_acc9_12" class="form-control inputborder" />
                                        <span id="error_mark_acc9_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Commerce Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_comm9_12" id="mark_comm9_12" class="form-control inputborder" />
                                        <span id="error_mark_comm9_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Computer Science Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_comp9_12" id="mark_comp9_12" class="form-control inputborder" />
                                        <span id="error_mark_comp9_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Economics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_eco9_12" id="mark_eco9_12" class="form-control inputborder" />
                                        <span id="error_mark_eco9_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot9_12" id="mark_tot9_12" class="form-control inputborder" />
                                        <span id="error_mark_tot9_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major9_prev" id="major9_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major9_next" id="major9_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="education12_subjects10">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">12th Education Major Subjects</div>
                                <div class="panel-body fade" id="acce">            
                                    <div class="border">
                                        <label>12th Accountancy Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_acc10_12" id="mark_acc10_12" class="form-control inputborder" />
                                        <span id="error_mark_acc10_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Commerce Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_comm10_12" id="mark_comm10_12" class="form-control inputborder" />
                                        <span id="error_mark_comm10_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Bussiness Maths Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_buss10_12" id="mark_buss10_12" class="form-control inputborder" />
                                        <span id="error_mark_buss10_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Economics Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_eco10_12" id="mark_eco10_12" class="form-control inputborder" />
                                        <span id="error_mark_eco10_12" class="text-danger"></span>
                                    </div><br>
                                    <div class="border">
                                        <label>12th Total Marks 
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" name="mark_tot10_12" id="mark_tot10_12" class="form-control inputborder" />
                                        <span id="error_mark_tot10_12" class="text-danger"></span>
                                    </div><br>
                                    <div align="center">
                                        <button type="button" name="major10_prev" id="major10_prev" class="btn btn-default btn-lg">Previous</button>
                                        <button type="button" name="major10_next" id="major10_next" class="btn btn-info btn-lg">Next</button><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="endcompletion">
                            <div class="panel panel-default border-body">
                                <div class="panel-heading">Confirmation Page</div>
                                <div class="panel-body">
                                    <div>
                                        <label style="font-size: 20px;font-weight: bold;text-align: center;width:100%;margin: 20px 0px;">Please ensure the information you provided is correct before submitting the form.</label>
                                        <label style="font-size: 20px;font-weight: bold;text-align: center;width:100%;margin: 20px 0px;">படிவத்தை சமர்ப்பிக்கும் முன் நீங்கள் வழங்கிய தகவல்கள் சரியானவை என்பதை உறுதிப்படுத்தவும்.</label>
                                    </div>

                                    <div align="center">
                                        <button type="button" name="deserve_prev" id="deserve_prev" class="btn btn-default btn-lg">Previous</button>
                                        <!--<button type="button" name="submit" id="submit" class="btn btn-success btn-lg">Submit</button> -->
                                        <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg"><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <div class="col-sm-2"></div>
    </div>
    </div>
    <div id="loading"></div>
 </body>
</html>