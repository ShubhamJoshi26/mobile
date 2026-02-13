<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #6f42c1; /* Purple accent color */
            --secondary-bg: #f8f9fa; /* Light gray background for items */
            --text-muted: #8898aa;
            --bs-body-font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f0f2f5; /* Light overall background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px 0;
        }

        .mobile-container {
            width: 100%;
            max-width: 420px; /* Simulate mobile width */
            background: #fff;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            overflow: hidden;
            padding: 25px;
        }

        /* Header buttons */
        .header-btn {
            width: 40px;
            height: 40px;
            background-color: var(--secondary-bg);
            border: none;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
        }

        /* Profile Image Section */
        .profile-img-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }

        .profile-img-container {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            padding: 4px;
            /* Gradient border effect */
            background: linear-gradient(45deg, #6f42c1, #00d4ff); 
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white; /* Inner white border */
        }

        .camera-icon-badge {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: var(--primary-color);
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid white;
            font-size: 14px;
        }

        /* Stats Boxes */
        .stat-box {
            background-color: var(--secondary-bg);
            border-radius: 16px;
            padding: 15px 10px;
        }

        /* Custom Tab Styling */
        .nav-pills-custom {
            background-color: var(--secondary-bg);
            border-radius: 15px;
            padding: 5px;
        }

        .nav-pills-custom .nav-link {
            color: var(--text-muted);
            font-weight: 500;
            border-radius: 12px;
            padding: 10px 15px;
            transition: all 0.3s;
        }

        .nav-pills-custom .nav-link.active {
            background-color: white;
            color: #333;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            font-weight: 600;
        }

        /* Section Titles with purple bar */
        .section-title {
            display: flex;
            align-items: center;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .section-title::before {
            content: '';
            display: block;
            width: 5px;
            height: 20px;
            background-color: var(--primary-color);
            margin-right: 10px;
            border-radius: 10px;
        }

        /* Info Items (Data rows) */
        .info-item {
            background-color: var(--secondary-bg);
            border-radius: 16px;
            padding: 16px;
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .info-icon {
            width: 45px;
            height: 45px;
            background-color: #e9ecef; /* Slightly darker gray for icon bg */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            font-size: 20px;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        /* Academic specific icon colors */
        .academic-icon-bg {
             background-color: #ede7f6 !important; /* Light purple bg */
             color: var(--primary-color) !important;
        }

        .info-label {
            font-size: 12px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
            display: block;
        }

        .info-value {
            font-size: 15px;
            font-weight: 600;
            color: #333;
        }

        /* Subject Chips/Badges */
        .subject-chip {
            background-color: white;
            border: 1px solid #e0e0e0;
            color: #333;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 12px;
        }

        /* Digital ID Button */
        .btn-digital-id {
            background: linear-gradient(to right, #6f42c1, #8e54e9);
            border: none;
            padding: 15px 20px;
            border-radius: 16px;
        }
    </style>
</head>
<body>

<div class="mobile-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/dashboard"><button class="header-btn"><i class="fas fa-arrow-left"></i></button></a>
        <h5 class="mb-0 fw-bold">My Profile</h5>
        <button class="header-btn"><i class="fas fa-sliders-h"></i></button>
    </div>

    <div class="text-center mb-4">
        <div class="profile-img-wrapper">
            <div class="profile-img-container">
                <img src="https://via.placeholder.com/150" alt="Profile" class="profile-img" id="student_profile">
            </div>
            <div class="camera-icon-badge">
                <i class="fas fa-camera"></i>
            </div>
        </div>
        <h4 class="fw-bold mb-1" id="student_name">Rahul Sharma</h4>
        <p class="text-muted mb-0"><span id="student_class">Class 10-A</span> • Roll No. <span id="student_rollno">23</span></p>
    </div>

    <div class="row text-center g-3 mb-4">
        <div class="col-4">
            <div class="stat-box">
                <h5 class="fw-bold text-success mb-1">92%</h5>
                <small class="text-muted">Attendance</small>
            </div>
        </div>
        <div class="col-4">
            <div class="stat-box">
                <h5 class="fw-bold text-primary mb-1">5th</h5>
                <small class="text-muted">Class Rank</small>
            </div>
        </div>
        <div class="col-4">
            <div class="stat-box">
                <h5 class="fw-bold text-info mb-1">A+</h5>
                <small class="text-muted">Grade Avg</small>
            </div>
        </div>
    </div>

    <ul class="nav nav-pills nav-pills-custom nav-fill mb-4" id="profileTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="personal-tab" data-bs-toggle="pill" data-bs-target="#personal-content" type="button" role="tab" aria-selected="true">Personal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="academic-tab" data-bs-toggle="pill" data-bs-target="#academic-content" type="button" role="tab" aria-selected="false">Academic</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link disabled" id="parents-tab" type="button" role="tab" aria-disabled="true">Parents</button>
        </li>
    </ul>

    <div class="tab-content" id="profileTabsContent">

        <div class="tab-pane fade show active" id="personal-content" role="tabpanel" aria-labelledby="personal-tab">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="section-title mb-0">Personal Information</h6>
                <a href="#" class="text-decoration-none fw-bold" style="color: var(--primary-color); font-size: 14px;">Edit</a>
            </div>
            <div class="mt-3">
                <div class="info-item">
                    <div class="info-icon"><i class="far fa-calendar-alt"></i></div>
                    <div>
                        <span class="info-label">Date of Birth</span>
                        <span class="info-value" id="student_dateofbirth">14 August 2008</span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-heartbeat"></i></div>
                    <div>
                        <span class="info-label">Blood Group</span>
                        <span class="info-value" id="student_bloodgroup">O Positive (O+)</span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <span class="info-label">Emergency Contact</span>
                        <span class="info-value" id="student_contact">+91 98765 43210</span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <span class="info-label">Address</span>
                        <span class="info-value" id="student_address">42, Green Park Avenue, Near Central School, New Delhi</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="academic-content" role="tabpanel" aria-labelledby="academic-tab">
            <h6 class="section-title">Academic Details</h6>
            
            <div class="info-item">
                <div class="info-icon academic-icon-bg"><i class="fas fa-hashtag"></i></div>
                <div>
                    <span class="info-label">Admission Number</span>
                    <span class="info-value">ADM-2020-4589</span>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon academic-icon-bg"><i class="far fa-user"></i></div>
                <div>
                    <span class="info-label">Class Teacher</span>
                    <span class="info-value">Mrs. Sunita Verma</span>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon academic-icon-bg"><i class="far fa-flag"></i></div>
                <div>
                    <span class="info-label">House Team</span>
                    <span class="info-value">Red House (Ruby)</span>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon academic-icon-bg"><i class="far fa-calendar-check"></i></div>
                <div>
                    <span class="info-label">Date of Joining</span>
                    <span class="info-value">10 April, 2020</span>
                </div>
            </div>

             <div class="info-item flex-column align-items-stretch">
                <div class="d-flex align-items-center mb-3">
                    <div class="info-icon academic-icon-bg"><i class="fas fa-book-open"></i></div>
                    <div>
                        <span class="info-label">Enrolled Subjects</span>
                        <span class="info-value">Secondary School Curriculum</span>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge subject-chip">Mathematics</span>
                    <span class="badge subject-chip">Physics</span>
                    <span class="badge subject-chip">Chemistry</span>
                    <span class="badge subject-chip">Biology</span>
                    <span class="badge subject-chip">English</span>
                    <span class="badge subject-chip">Comp. Sci</span>
                    <span class="badge subject-chip">History</span>
                    <span class="badge subject-chip">Hindi</span>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-4">
        <button class="btn btn-primary w-100 btn-digital-id d-flex justify-content-between align-items-center p-3">
            <div class="d-flex align-items-center">
                <i class="far fa-id-badge fs-3 me-3 text-white-50"></i>
                <div class="text-start text-white">
                    <small class="d-block text-white-50" style="font-size: 11px; letter-spacing: 1px;">DIGITAL ID</small>
                    <span class="fw-bold">View Identity Card</span>
                </div>
            </div>
            <i class="fas fa-chevron-right text-white"></i>
        </button>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    async function loadProfile() {

            let token = localStorage.getItem('api_token');

            let response = await fetch(
                'https://crm.magnitotechnologies.com/api/student/profile',
                {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json'
                    }
                }
            );

            let data = await response.json();

            if(data.status==true){
                setStudentData(data.student);
            }
        }

        loadProfile();

        async function setStudentData(student){
                $('#student_name').text(student.firstname + ' '+ student.middlename + ' '+ student.lastname);
                $('#student_class').text(student.classname.class + '-'+ student.section.name);
                $('#student_rollno').text(student.roll_no);
                $('#student_dateofbirth').text(student.dob);
                $('#student_bloodgroup').text(student.student_blood_group.title);
                $('#student_contact').text(student.primarymobileno);
                $('#student_address').text(student.permanent_adress+', '+student.permanent_city+', '+student.permanent_state+', '+student.permanent_country+', '+student.permanent_pincode);

                let profileImage = "";

                $.each(student.attachments, function(index, attachment) {

                    if (attachment.doc_id === "studentphoto") {
                        profileImage = "https://crm.magnitotechnologies.com/" + attachment.file_path;
                    }

                });

                if(profileImage !== ""){
                    $('#student_profile').attr('src', profileImage);
                }
        }
</script>
</body>
</html>

```