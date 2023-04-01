<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<?php
    // $conn = mysqli_connect("hope3dev.mysql.database.azure.com","hope3dev@hope3dev","dev#hope_2018!","beneficiary");
    date_default_timezone_set('Asia/Kolkata');
    

    // $conn = mysqli_connect("hope3applicants.cfjtv8hu1fcd.us-west-2.rds.amazonaws.com","admin","varsity2021","Beneficiary");
    $conn = mysqli_connect("aws-rds-hope-db.c6qlau4lseex.ap-south-1.rds.amazonaws.com","admin","hope1234","Beneficiary");
    $message = '';
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $dor = date('Y/m/d h:i:s');
        $admissionFor = $_POST['admissionFor'];
        $admissionForOthers = $_POST['admissionForOthers'];
        $plansAfterDegree = $_POST['plansAfterDegree'];
        $plansOther = $_POST['plansOther'];
        $plansAfterDegree1 = $_POST['plansAfterDegree1'];
        $plansOther1 = $_POST['plansOther1'];
        
        $isGraduate = $_POST['graduate'];
        
        if($admissionFor=="Others"){
            $admissionFor = $admissionForOthers;
        }
        if($plansAfterDegree=="Others"){
            $plansAfterDegree = $plansOther;
        }
        if($plansAfterDegree1=="Others"){
            $plansAfterDegree1 = $plansOther1;
        }
        
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zipcode = $_POST['zipcode'];
        $state = "TamilNadu";
        $country = "India";
        $phone = $_POST['phone'];
        $disabled = $_POST['disabled'];
        $email = $_POST['email'];
        $appsrc = $_POST['appsrc'];
        $status = $_POST['status'];
        $regiontype = $_POST['regiontype'];
        $f_fname = $_POST['f_fname'];
        $relation_type = $_POST['relation_type'];
        $f_educational_level = $_POST['f_educational_level'];
        $f_occupation = $_POST['f_occupation'];
        $f_yearly_salary = $_POST['f_yearly_salary'];
        $f_phone = $_POST['f_phone'];
        $f_email = $_POST['f_email'];
        $familymembers = $_POST['familymembers'];
        $scl10 = $_POST['scl10'];  
        $scl_address10 = $_POST['scl_address10'];                   
        $scl10city = $_POST['scl10city'];
        $scl_regiontype10 = $_POST['scl_regiontype10'];
        $scl_state10 = "TamilNadu";
        $scl_type_10 = $_POST['scl_type_10'];
        $year_10 = $_POST['year_10'];
        $mark_lang_10 = $_POST['mark_lang_10'];
        $mark_englang_10 = $_POST['mark_englang_10'];
        $mark_maths_10 = $_POST['mark_maths_10'];
        $mark_science_10 = $_POST['mark_science_10'];
        $mark_socscience_10 = $_POST['mark_socscience_10'];
        $mark_tot_10 = $_POST['mark_tot_10'];
        $regno10 = $_POST['regno10'];
        $scl12 = $_POST['scl12'];  
        $scl_address12 = $_POST['scl_address12'];                   
        $scl12city = $_POST['scl12city'];
        $scl_regiontype12 = $_POST['scl_regiontype12'];
        $scl_state12 = "TamilNadu";
        $scl_type_12 = $_POST['scl_type_12'];
        $year_12 = $_POST['year_12'];
        $regno12 = $_POST['regno12'];
        $engcutoff = $_POST['engcutoff'];
        $medcutoff = $_POST['medcutoff'];
        $agricutoff = $_POST['agricutoff'];
        $mark_lang_12 = $_POST['mark_lang_12'];
        $mark_englang_12 = $_POST['mark_englang_12'];
        $sub12 = $_POST['sub12'];  

        $scltypeid10 = mysqli_query($conn,"SELECT school_type_id as scltype10 from Beneficiary.School_Type where school_type='$scl_type_10'");
        $value = mysqli_fetch_assoc($scltypeid10);
        $scltype = $value['scltype10'];
        // echo "$scltype"."\n";

        $regiontypeid10 = mysqli_query($conn,"SELECT region_type_id as regiontype10 from Beneficiary.Region_Type where region_type_name='$scl_regiontype10'");
        $value = mysqli_fetch_assoc($regiontypeid10);
        $regiontypeid10 = $value['regiontype10'];
        // echo "$regiontypeid10"."\n";

        $scl10id = mysqli_query($conn,"SELECT school_id as scl10 from Beneficiary.Schools where school_name='$scl10'&&city='$scl10city'&&state='$scl_state10'&&school_type_id='$scltype'");
        $value = mysqli_fetch_assoc($scl10id);
        $sclid10=$value['scl10'];
        
        if($sclid10=='')
        {
            $scl10id = mysqli_query($conn,"INSERT INTO Beneficiary.Schools(school_id,school_name,address,city,state,school_type_id,region_type_id) VALUES('s00234','$scl10','$scl_address10','$scl10city','$scl_state10','$scltype','$regiontypeid10')");
            $scl10id = mysqli_query($conn,"SELECT school_id as scl10 from Beneficiary.Schools where ((school_name='$scl10')&&(city='$scl10city')&&(state='$scl_state10')&&(school_type_id='$scltype'))");
            $value = mysqli_fetch_assoc($scl10id);   
            $sclid10=$value['scl10'];
            // echo "$sclid10"."\n";
        } 
        
                    
        $scltypeid12 = mysqli_query($conn,"SELECT school_type_id as scltype12 from Beneficiary.School_Type where school_type='$scl_type_12'");
        $value = mysqli_fetch_assoc($scltypeid12);
        $scltype = $value['scltype12'];
        
        $regiontypeid12 = mysqli_query($conn,"SELECT region_type_id as regiontype12 from Beneficiary.Region_Type where region_type_name='$scl_regiontype12'");
        $value = mysqli_fetch_assoc($regiontypeid12);
        $regiontypeid12 = $value['regiontype12'];
        // echo "$regiontypeid12"."\n";

        $scl12id = mysqli_query($conn,"SELECT school_id as scl12 from Beneficiary.Schools where ((school_name='$scl12')&&(city='$scl12city')&&(state='$scl_state12')&&(school_type_id='$scltype'))");
        $value = mysqli_fetch_assoc($scl12id);
        $sclid12=$value['scl12'];
        // echo "$sclid12\n";
                        
        if($sclid12=='')
        {
            // echo 'helo';
            $scl12id = mysqli_query($conn,"INSERT INTO Beneficiary.Schools(school_name,address,city,state,school_type_id,region_type_id) VALUES('$scl12','$scl_address12','$scl12city','$scl_state12','$scltype','$regiontypeid12')");
            $scl12id = mysqli_query($conn,"SELECT school_id as scl12 from Beneficiary.Schools where ((school_name='$scl12')&&(city='$scl12city')&&(state='$scl_state12')&&(school_type_id='$scltype'))");
            $value = mysqli_fetch_assoc($scl12id);   
            $sclid12=$value['scl12'];
        }  

        $statflag = mysqli_query($conn,"SELECT status_flag as stat from Beneficiary.Hope3_flag where status='$status'");
        $value = mysqli_fetch_assoc($statflag);
        $statusflag = $value['stat'];
        // echo "$statusflag\n";

        $scholarshipstream = mysqli_query($conn,"SELECT stream_id as stream from Beneficiary.Educational_Streams where stream_name='$sub12'");
        $value = mysqli_fetch_assoc($scholarshipstream);
        $scholarshipstreamid = $value['stream'];
                // echo "$scholarshipstreamid\n";

                
        $regiontypeid = mysqli_query($conn,"SELECT region_type_id as region from Beneficiary.Region_Type where region_type_name='$regiontype'");
        $value = mysqli_fetch_assoc($regiontypeid);
        $regiontypeid = $value['region'];
        
        $id = mysqli_query($conn,"SELECT max(cast(substring(student_id,5) as unsigned))+1 as sub from Beneficiary.Students where student_id like 'HP22%' order by sub");
        $value = mysqli_fetch_assoc($id);
        $stu_id = $value['sub'];
        if($stu_id==''){
            $stu_id=1;
        }
        // echo ("<script>console.log('student_id".$stu_id."')</script>");

        $counter = 0;
        $student_id = $stu_id;
        while(floor($student_id/10) > 0){
            $counter = $counter+1;
            $student_id = $student_id/10;
        }
        if($counter == 0){
            $stu_id = "HP22000".$stu_id;
        }else if($counter == 1){
            $stu_id = "HP2200".$stu_id;        
        }else if($counter == 2){
            $stu_id = "HP220".$stu_id;
        }else{
            $stu_id = "HP22".$stu_id;
        }

        $stud_id = $stu_id;
        $query1 = mysqli_query($conn,"INSERT INTO Beneficiary.Students(Student_ID,Application_Source,Status_Flag,Scholarship_stream_ID,Firstname,Lastname,Gender,Birth_Date,Date_Registration,Address,City,State,Country,Zipcode,Region_Type_ID,Phone,EmailID,Disabled,Seeking_Admission_For,Ambition_Choice1,Ambition_Choice2,isFirstGraduate) VALUES('$stud_id','$appsrc','$statusflag','$scholarshipstreamid','$fname','$lname','$gender','$dob','$dor','$address','$city','$state','$country','$zipcode','$regiontypeid','$phone','$email','$disabled','$admissionFor','$plansAfterDegree','$plansAfterDegree1','$isGraduate')");
        // echo '<script>console.log($query1)</script>';
                // echo "$query1"."hello";
        if($query1)
        {
            // echo "query 1 inserted";
            $educationlevel = mysqli_query($conn,"SELECT education_level_id as eid from Beneficiary.Education_Level where education_level = '$f_educational_level'");
            $value = mysqli_fetch_assoc($educationlevel);
            $educationlevelid = $value['eid'];
            // echo "$educationlevelid";

            $query2 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Relatives(student_id,relationship_type,education_level_id,name,occupation,phone,emailID,No_Of_Family_Members,Total_Family_Income) VALUES('$stud_id','$relation_type','$educationlevelid','$f_fname','$f_occupation','$f_phone','$f_email','$familymembers','$f_yearly_salary')");    
            if($query2)
            {                    
                $stream = mysqli_query($conn,"SELECT stream_id as sid from Beneficiary.Educational_Streams where stream_name = '$sub12'");
                $value = mysqli_fetch_assoc($stream);
                $streamid = $value['sid'];
                            // echo "\n$streamid";
                $query3= mysqli_query($conn,"INSERT INTO Beneficiary.Student_Academics(student_id,education_level_id,stream_id,school_id,year_completion,registeration_number) VALUES('$stud_id','10th','$streamid','$sclid10','$year_10','$regno10')");
                // echo '<script>console.log($query3)</script>';

                if($query3)
                {                    
                    $query4= mysqli_query($conn,"INSERT INTO Beneficiary.Student_Academics(student_id,education_level_id,stream_id,school_id,year_completion,registeration_number) VALUES('$stud_id','12th','$streamid','$sclid12','$year_12','$regno12')");
                    // echo "<script>console.log('hello1');</script>";
                    if($query4)
                    {                    
                        $query5 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance_Proof(student_id,education_level_id,exam_type_id) values('$stud_id','10th','10th Public')");
                        $query6 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance_Proof(student_id,education_level_id,exam_type_id) values('$stud_id','12th','12th Public')");    
                        // echo '<script>console.log($query5)</script>';
                        // echo '<script>console.log($query6)</script>';
                        if($query5&&$query6)
                        {                    
                            if($medcutoff)
                            {
                                mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance_Proof(student_id,education_level_id,exam_type_id) values('$stud_id','12th','NEET')");
                                mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s30','12th','NEET','$medcutoff',720)");
                            } 
                            if($engcutoff){
                                mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance_Proof(student_id,education_level_id,exam_type_id) values('$stud_id','12th','Engg')");
                                mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s31','12th','Engg','$engcutoff',200)");
                            }
                            if($agricutoff){
                                mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance_Proof(student_id,education_level_id,exam_type_id) values('$stud_id','12th','Agri')");
                                mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s32','12th','Agri','$agricutoff',200)");
                            }
                            if($query5&&$query6)
                            {                    
                                $query7 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','1s','10th','10th Public','$mark_lang_10',100)");
                                $query8 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s2','10th','10th Public','$mark_englang_10',100)");
                                $query9 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s3','10th','10th Public','$mark_maths_10',100)");
                                $query10 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s4','10th','10th Public','$mark_science_10',100)");
                                $query11 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s5','10th','10th Public','$mark_socscience_10',100)");
                                $query12 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s1','12th','12th Public','$mark_englang_12',100)");
                                $query13 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','s2','12th','12th Public','$mark_lang_12',100)");
                              
                                // echo '<script>console.log($query7)</script>';
                                // echo '<script>console.log($query8)</script>';
                                // echo '<script>console.log($query9)</script>';
                                // echo '<script>console.log($query10)</script>';
                                // echo '<script>console.log($query11)</script>';
                                // echo '<script>console.log($query12)</script>';
                                // echo '<script>console.log($query13)</script>';
                                if($query7&&$query8&&$query9&&$query10&&$query11&&$query12&&$query13)
                                {

                                    if('$sub12'!='')
                                    {
                                        if($sub12=='Mathematics / Physics / Chemistry / Statistics')
                                        {
                                            // echo "<script>console.log('hello');</script>";
                                            $mark_sub1_12 = $_POST['mark_maths1_12'];
                                            $mark_sub2_12 = $_POST['mark_phy1_12'];
                                            $mark_sub3_12 = $_POST['mark_chem1_12'];
                                            $mark_sub4_12 = $_POST['mark_stat1_12'];  
                                
                                            $sub1_id = 's3';
                                            $sub2_id = 's6';
                                            $sub3_id = 's7';
                                            $sub4_id = 's29';
                                                               
                                            $mark_tot_12 = $_POST['mark_tot1_12'];
                                   
                                        }
                                        else if($sub12=='Accountancy / Commerce / Economics / History')
                                        {// s13,s12,s15,s17
                                            $mark_sub1_12 = $_POST['mark_comm2_12'];
                                            $mark_sub2_12 = $_POST['mark_eco2_12'];
                                            $mark_sub3_12 = $_POST['mark_acc2_12'];
                                            $mark_sub4_12 = $_POST['mark_his2_12']; 
                                            $sub1_id = 's12';
                                            $sub2_id = 's15';
                                            $sub3_id = 's13';
                                            $sub4_id = 's17';  
                                            $mark_tot_12 = $_POST['mark_tot2_12'];   
                                            
                                        }
                                        else if($sub12=='Accountancy / Business Maths / Commerce / Economics')
                                        {//s13,s14,s12,s15
                                            $mark_sub1_12 = $_POST['mark_comm3_12'];
                                            $mark_sub2_12 = $_POST['mark_eco3_12'];
                                            $mark_sub3_12 = $_POST['mark_acc3_12'];
                                            $mark_sub4_12 = $_POST['mark_bm3_12'];
                                            $sub1_id = 's12';
                                            $sub2_id = 's15';
                                            $sub3_id = 's13';
                                            $sub4_id = 's14';   
                                            $mark_tot_12 = $_POST['mark_tot3_12'];   
                                            
                                        }
                                        else if($sub12=='Accountancy / Commerce / Economics / Political Scienc')
                                        {//s13,s12,s15,s16
                                            $mark_sub1_12 = $_POST['mark_comm4_12'];
                                            $mark_sub2_12 = $_POST['mark_eco4_12'];
                                            $mark_sub3_12 = $_POST['mark_acc4_12'];
                                            $mark_sub4_12 = $_POST['mark_ps4_12'];  
                                            $sub1_id = 's12';
                                            $sub2_id = 's15';
                                            $sub3_id = 's13';
                                            $sub4_id = 's16'; 
                                            $mark_tot_12 = $_POST['mark_tot4_12'];   
                                                
                                        }
                                        else if($sub12=='Commerce / Economics / Accountancy / Statistics'){//s12,s15,s13,s29
                                            $mark_sub1_12 = $_POST['mark_comm5_12'];
                                            $mark_sub2_12 = $_POST['mark_eco5_12'];
                                            $mark_sub3_12 = $_POST['mark_acc5_12'];
                                            $mark_sub4_12 = $_POST['mark_stat5_12'];
                                            $sub1_id = 's12';
                                            $sub2_id = 's15';
                                            $sub3_id = 's13';
                                            $sub4_id = 's29';   
                                            $mark_tot_12 = $_POST['mark_tot5_12'];   
                                            
                                        }
                                        else if($sub12=='Biology / Chemistry / Mathematics / Physics'){//s9,s7,s3,s6
                                            $mark_sub1_12 = $_POST['mark_maths6_12'];
                                            $mark_sub2_12 = $_POST['mark_phy6_12'];
                                            $mark_sub3_12 = $_POST['mark_chem6_12'];
                                            $mark_sub4_12 = $_POST['mark_bio6_12'];
                                            $sub1_id = 's3';
                                            $sub2_id = 's6';
                                            $sub3_id = 's7';
                                            $sub4_id = 's9';   
                                            $mark_tot_12 = $_POST['mark_tot6_12'];   
                                            
                                        }
                                        else if($sub12=='Botany / Chemistry / Physics / Zoology'){//s11,s7,s6,s10
                                            $mark_sub1_12 = $_POST['mark_zoo7_12'];
                                            $mark_sub2_12 = $_POST['mark_phy7_12'];
                                            $mark_sub3_12 = $_POST['mark_chem7_12'];
                                            $mark_sub4_12 = $_POST['mark_bot7_12'];
                                            $sub1_id = 's10';
                                            $sub2_id = 's6';
                                            $sub3_id = 's7';
                                            $sub4_id = 's11';   
                                            $mark_tot_12 = $_POST['mark_tot7_12'];   
                                            
                                        }
                                        else if($sub12=='Chemistry / Computer Science / Mathematics / Physics'){//s7,s8,s3,s6
                                            $mark_sub1_12 = $_POST['mark_maths8_12'];
                                            $mark_sub2_12 = $_POST['mark_phy8_12'];
                                            $mark_sub3_12 = $_POST['mark_chem8_12'];
                                            $mark_sub4_12 = $_POST['mark_cs8_12'];
                                            $sub1_id = 's3';
                                            $sub2_id = 's6';
                                            $sub3_id = 's7';
                                            $sub4_id = 's8';   
                                            $mark_tot_12 = $_POST['mark_tot8_12'];   
                                        }

                                        else if($sub12=='Accountancy / Commerce / Computer Science / Economics'){//s13,s12,s8,s15
                                            $mark_sub1_12 = $_POST['mark_acc9_12'];
                                            $mark_sub2_12 = $_POST['mark_comm9_12'];
                                            $mark_sub3_12 = $_POST['mark_comp9_12'];
                                            $mark_sub4_12 = $_POST['mark_eco9_12'];
                                            $sub1_id = 's13';
                                            $sub2_id = 's12';
                                            $sub3_id = 's8';
                                            $sub4_id = 's15';   
                                            $mark_tot_12 = $_POST['mark_tot9_12'];   
                                        }

                                        $query14 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','$sub1_id','12th','12th Public','$mark_sub1_12',100)");
                                        $query15 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','$sub2_id','12th','12th Public','$mark_sub2_12',100)");
                                        $query16 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','$sub3_id','12th','12th Public','$mark_sub3_12',100)");
                                        $query17 = mysqli_query($conn,"INSERT INTO Beneficiary.Student_Performance(student_id,subject_id,education_level_id,exam_type_id,obtained_marks,maximum_marks) values('$stud_id','$sub4_id','12th','12th Public','$mark_sub4_12',100)");
                                        // echo '<script>console.log($query14)</script>';
                                        // echo '<script>console.log($query15)</script>';
                                        // echo '<script>console.log($query16)</script>';
                                        // echo '<script>console.log($query17)</script>';
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
if($query14){
    
    echo '<script>  
            var boldText = "submitted successfully";
            var content = document.createElement("div");
            content.innerHTML = "Your application is <strong>"+ boldText +"</strong> . our volunteers will reach out to the selected candidates soon. All the best for your college education.";
            $(document).ready(function(){
                swal({
                    title: "Good Job!", 
                    content: content, 
                    icon: "success"
                })
                .then(function() {
                    window.location.replace("https://www.hope3.org");
                })
            })
        </script>';
}
?>
