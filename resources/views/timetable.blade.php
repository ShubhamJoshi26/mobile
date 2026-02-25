<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Timetable UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-grad: linear-gradient(135deg, #7b61ff 0%, #9d85ff 100%);
            --bg-light: #f4f7ff;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-bottom: 100px;
        }

        /* Header Gradient Section */
        .header-section {
            background: var(--primary-grad);
            color: white;
            padding: 30px 20px 80px 20px;
            border-radius: 0 0 40px 40px;
        }

        /* Horizontal Calendar Scroll */
        .date-container {
            display: flex;
            gap: 12px;
            overflow-x: auto;
            margin-top: -100px;
            padding: 10px 20px;
            scrollbar-width: none;
        }

        .date-card {
            min-width: 65px;
            height: 85px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: 0.3s;
        }

        .date-card.active {
            background: white;
            color: #7b61ff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .date-card .day {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        .date-card .num {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Timeline Styling */
        .timeline {
            position: relative;
            padding: 30px 20px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 35px;
            top: 30px;
            bottom: 0;
            width: 2px;
            background: #e0e4f0;
        }

        .class-entry {
            display: flex;
            margin-bottom: 25px;
            position: relative;
        }

        /* Time Section */
        .time-col {
            min-width: 70px;
            text-align: center;
            z-index: 2;
        }

        .time-col .main-time {
            font-weight: bold;
            font-size: 0.95rem;
            color: #333;
            position: absolute;
            margin-top: -25px;
            margin-left: 34px;
        }

        .time-col .end-time {
            font-size: 0.75rem;
            color: #999;
            margin-left: 42px;
        }

        .dot {
            width: 12px;
            height: 12px;
            background: white;
            border: 2.5px solid #7b61ff;
            border-radius: 50%;
            margin: 10px;
            margin-top: 0px;
        }

        /* Class Details Card */
        .class-card {
            background: white;
            border-radius: 20px;
            padding: 15px 20px;
            flex-grow: 1;
            margin-left: 15px;
            border-left: 5px solid transparent;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s;
        }

        .class-card:hover {
            transform: scale(1.02);
        }

        .math-border {
            border-left-color: #7b61ff;
        }

        .physics-border {
            border-left-color: #00a896;
        }

        .history-border {
            border-left-color: #f39c12;
        }

        .english-border {
            border-left-color: #e91e63;
        }

        .break-card {
            background: transparent;
            border: 2px dashed #d1d5db;
            color: #7f8c8d;
        }

        .room-badge {
            font-size: 0.7rem;
            padding: 4px 10px;
            border-radius: 8px;
            font-weight: bold;
        }

        .teacher-img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* --- BOTTOM NAV --- */
        .bottom-nav {
            position: fixed !important;
            bottom: 0 !important;
            left: 50% !important;
            /* Center horizontally */
            transform: translateX(-50%) !important;
            /* Center horizontally */
            width: 100% !important;
            max-width: 414px !important;
            /* Match container width */
            background: white !important;
            height: 75px !important;
            display: flex !important;
            justify-content: space-around !important;
            align-items: center !important;
            border-top-left-radius: 25px !important;
            border-top-right-radius: 25px !important;
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05) !important;
            z-index: 10000 !important;
        }

        .nav-item {
            text-align: center !important;
            color: #95a5a6 !important;
            font-size: 10px !important;
            cursor: pointer !important;
            width: 60px !important;
        }

        .nav-icon {
            font-size: 22px;
            display: block;
            margin-bottom: 2px;
        }

        /* Center QR Button */
        .nav-center-wrapper {
            position: relative;
            top: -25px;
        }

        .qr-btn {
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(123, 74, 226, 0.4);
            border: 4px solid #fff;
        }
    </style>
</head>

<body>

    <div class="header-section text-center">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <i class="bi bi-chevron-left fs-4"></i>
            <h5 class="mb-0 fw-bold">Timetable</h5>
            <i class="bi bi-calendar3 fs-5"></i>
        </div>
    </div>

    <div class="date-container" id="dateContainer">
        <div class="date-card"><span class="day">Mon</span><span class="num">28</span></div>
        <div class="date-card"><span class="day">Tue</span><span class="num">29</span></div>
        <div class="date-card active"><span class="day">Wed</span><span class="num">30</span></div>
        <div class="date-card"><span class="day">Thu</span><span class="num">31</span></div>
        <div class="date-card"><span class="day">Fri</span><span class="num">01</span></div>
    </div>

    <div class="timeline" id="timeline">

        <div class="class-entry">

        </div>

    </div>

    @include('layouts.bottom')
    <script>
        let timeTableData = {};

const daysOrder = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

function formatTime(time){
    return time.substring(0,5);
}

// Generate top dates dynamically
function generateDates(){

    const container = document.getElementById("dateContainer");
    container.innerHTML = "";

    const today = new Date();

    for(let i=-2; i<=3; i++){

        let date = new Date();
        date.setDate(today.getDate()+i);

        let dayName = daysOrder[date.getDay()];
        let dayShort = dayName.substring(0,3);
        let dayNum = date.getDate();

        const isActive = date.toDateString() === today.toDateString();

        container.innerHTML += `
            <div class="date-card ${isActive ? 'active':''}" onclick="showDay('${dayName}', this)">
                <span class="day">${dayShort}</span>
                <span class="num">${dayNum}</span>
            </div>
        `;

        if(isActive){
            setTimeout(()=>showDay(dayName),100);
        }
    }
}

// Render timetable
function showDay(day, element=null){

    if(element){
        document.querySelectorAll(".date-card").forEach(c=>c.classList.remove("active"));
        element.classList.add("active");
    }

    const timeline = document.getElementById("timeline");
    timeline.innerHTML = "";

    const periods = timeTableData[day];

    if(!periods){
        timeline.innerHTML = "<p class='text-center'>No timetable</p>";
        return;
    }

    periods.forEach(p => {

        if(p.is_break){

            timeline.innerHTML += `
                <div class="class-entry">
                    <div class="time-col">
                        <div class="dot"></div>
                        <div class="main-time">${formatTime(p.start_time)}</div>
                        <div class="end-time">${formatTime(p.end_time)}</div>
                    </div>
                    <div class="class-card break-card d-flex align-items-center">
                        <i class="bi bi-cup-hot me-3 fs-5"></i>
                        <span class="fw-bold">${p.period_name}</span>
                    </div>
                </div>
            `;

        } else {

            timeline.innerHTML += `
                <div class="class-entry">
                    <div class="time-col">
                        <div class="dot"></div>
                        <div class="main-time">${formatTime(p.start_time)}</div>
                        <div class="end-time">${formatTime(p.end_time)}</div>
                    </div>
                    <div class="class-card math-border">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold mb-1">${p.subject ?? 'No Subject'}</h6>
                            <span class="room-badge bg-primary bg-opacity-10 text-primary">
                                ${p.room_number ?? ''}
                            </span>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img src="${p.teacher.profile_image ?? 'https://i.pravatar.cc/100'}" class="teacher-img me-2">
                            <span class="small text-secondary">${p.teacher.name ?? ''}</span>
                        </div>
                    </div>
                </div>
            `;
        }

    });
}

// Load API
async function loadTimeTable() {

    let token = localStorage.getItem('api_token');

    let response = await fetch(
        'https://crm.magnitotechnologies.com/api/student/timeTable',
        {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token,
                'Accept': 'application/json'
            }
        }
    );

    let data = await response.json();

    timeTableData = data;

    generateDates();
}

loadTimeTable();

    </script>
</body>

</html>