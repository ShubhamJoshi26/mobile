<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Springfield School ERP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #818cf8 0%, #a855f7 100%);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            padding-bottom: 90px; /* Space for bottom nav */
        }

        /* Header Styling */
        .gradient-header {
            background: var(--primary-gradient);
            color: white;
            padding: 30px 20px 80px 20px;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            position: relative;
        }

        .profile-img {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.5);
            background: white;
            object-fit: cover;
        }

        .btn-bell {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 16px;
            padding: 10px;
            color: white;
        }

        /* Stats Cards */
        .stats-container {
            margin-top: -40px;
            padding: 0 20px;
                z-index: 99999;
                position: relative !important;
        }

        .custom-card {
            background: white;
            border-radius: 28px;
            padding: 16px;
            border: 1px solid #f1f1f1;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
        }

        .progress {
            height: 6px;
            border-radius: 10px;
            background-color: #f0f0f0;
        }

        .badge-status {
            font-size: 10px;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 20px;
        }

        /* Icon Grid */
        .academic-icon-box {
            width: 56px;
            height: 56px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
        }

        .academic-label {
            font-size: 11px;
            font-weight: 600;
            color: #6c757d;
        }

        /* Notice Board */
        .notice-card {
            background: white;
            border-radius: 28px;
            padding: 16px;
            border-left: 5px solid;
            display: flex;
            gap: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .notice-date-box {
            background: #f8f9fa;
            border-radius: 16px;
            min-width: 60px;
            padding: 8px;
            text-align: center;
        }

       
    </style>
</head>

<body>

    <div class="gradient-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('asset/graduated.png') }}" alt="Profile" id="student_profile" class="profile-img">
                <div>
                    <h1 class="h5 fw-bold mb-0 italic" id="student_name">Hi, Aarav</h1>
                    <p class="small mb-0 opacity-75">
                        <span id="student_class">Class X - A</span> | Roll No. <span id="student_rollno">24</span>
                    </p>
                </div>
            </div>
            <button class="btn-bell">
                <i data-lucide="bell" style="width: 22px; height: 22px;"></i>
            </button>
        </div>
    </div>

    <div class="stats-container">
        <div class="row g-3">
            <div class="col-6">
                <div class="custom-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h4 fw-bold mb-0 text-dark" id="attendancePercentage">85%</span>
                        {{-- <span class="badge-status bg-success-subtle text-success">+2%</span> --}}
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 85%" id="attendancePercentageProgressbar"></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="custom-card" onclick="window.location.href='/pendingfee'">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="h5 fw-bold mb-0 text-danger" id="pendingAmount"></span>
                        <span class="badge-status bg-warning-subtle text-warning text-uppercase">Due</span>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 10px;" id="pendingMonths"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h6 fw-bold text-dark mb-0">Academics</h2>
            <a href="/view-academics" class="small text-decoration-none fw-bold" style="color: #6366f1;">View All</a>
        </div>
        
        <div class="row text-center">
            <div class="col-3 mb-4 d-flex flex-column align-items-center">
                <div class="academic-icon-box" style="background: #eef2ff; color: #6366f1;">
                    <i data-lucide="book-open"></i>
                </div>
                <span class="academic-label">Homework</span>
            </div>
            <div class="col-3 mb-4 d-flex flex-column align-items-center">
                <div class="academic-icon-box" style="background: #f5f3ff; color: #a855f7;">
                    <i data-lucide="calendar"></i>
                </div>
                <span class="academic-label">Timetable</span>
            </div>
            <div class="col-3 mb-4 d-flex flex-column align-items-center">
                <div class="academic-icon-box" style="background: #fff7ed; color: #f97316;">
                    <i data-lucide="trophy"></i>
                </div>
                <span class="academic-label">Results</span>
            </div>
            <div class="col-3 mb-4 d-flex flex-column align-items-center">
                <div class="academic-icon-box" style="background: #f0fdf4; color: #22c55e;">
                    <i data-lucide="file-text"></i>
                </div>
                <span class="academic-label">Exams</span>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4 mt-2">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h6 fw-bold text-dark mb-0">Notice Board</h2>
            <a href="#" class="small text-decoration-none fw-bold text-muted">All</a>
        </div>

        <div class="d-flex flex-column gap-3" id="noticeBoard">

            <div class="notice-card" style="border-left-color: #facc15;">
                <div class="notice-date-box">
                    <p class="h5 fw-bold mb-0">02</p>
                    <p class="text-muted fw-bold mb-0 text-uppercase" style="font-size: 10px;">Nov</p>
                </div>
                <div>
                    <h3 class="fw-bold text-dark mb-1" style="font-size: 13px;">Winter Uniform Update</h3>
                    <p class="text-muted mb-0" style="font-size: 11px;">Full winter uniform mandatory from next Monday.</p>
                </div>
            </div>
        </div>
    </div>

   @include('layouts.bottom')

   
    <script>
        // Initialize Icons
        

        // API Loading Logic
        async function loadProfile() {
            let token = localStorage.getItem('api_token');
            try {
                let response = await fetch('https://crm.magnitotechnologies.com/api/student/dashboard', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json'
                    }
                });
                let data = await response.json();
                if(data.student) {
                    setStudentData(data.student);
                    setDashboard(data);
                }
            } catch (e) {
                console.log("Fetch error:", e);
            }
        }

        function setStudentData(student) {
            $('#student_name').text(student.firstname + ' ' + (student.middlename || '') + ' ' + student.lastname);
            $('#student_class').text(student.classname.class + '-' + student.section.name);
            $('#student_rollno').text(student.roll_no);
            
            let profileImage = "";
            $.each(student.attachments, function(index, attachment) {
                if (attachment.doc_id === "studentphoto") {
                    profileImage = "https://crm.magnitotechnologies.com/" + attachment.file_path;
                }
            });

            if(profileImage !== "") {
                $('#student_profile').attr('src', profileImage);
            }
        }

        function setDashboard(data){
                $('#attendancePercentage').text(data.percentageAttendance+"%")
                $('#attendancePercentageProgressbar').css("width",data.percentageAttendance+"%")
                $('#pendingAmount').text("₹"+data.totalPendingAmount)
                if(data.totalPendingAmount>0){
                    $('#pendingMonths').text("Pending From "+data.totalMonthsPending+" Months")
                }else{
                    $('#pendingMonths').text("No Pending Fee")
                }
                let noticeHtml = "No notice Available";
                if (data.noticeBoard && data.noticeBoard.length > 0) {
                    noticeHtml = "";
                    $.each(data.noticeBoard, function(index, item) {
                        const dateObj = new Date(item.start_time.replace(" ", "T"));
                        const day = dateObj.getDate();
                        const monthShort = dateObj.toLocaleString('en-US', { month: 'short' });
                        noticeHtml += `
                            <div class="notice-card" style="border-left-color: #3b82f6;">
                                <div class="notice-date-box">
                                    <p class="h5 fw-bold mb-0">${day}</p>
                                    <p class="text-muted fw-bold mb-0 text-uppercase" style="font-size: 10px;">${monthShort}</p>
                                </div>
                                <div>
                                    <h3 class="fw-bold text-dark mb-1" style="font-size: 13px;">${item.event_title}</h3>
                                    <p class="text-muted mb-0" style="font-size: 11px;">${item.message}</p>
                                </div>
                            </div>
                        `;
                    });
                }
                $('#noticeBoard').html(noticeHtml);
        }

        loadProfile();
    </script>
</body>
</html>