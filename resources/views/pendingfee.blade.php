<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Payment UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        :root {
            /* Theme Colors based on the image */
            --primary-gradient: linear-gradient(135deg, #9C67F2 0%, #7644E6 100%);
            --primary-color: #7B4AE2;
            --secondary-bg: #F5F7FA;
            --card-border-red: #FF5252;
            --card-border-yellow: #FFB142;
            --badge-red-bg: #FFEBEE;
            --badge-red-text: #FF5252;
            --badge-yellow-bg: #FFF8E1;
            --badge-yellow-text: #FFB142;
            --dark-bar: #1C2331;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--secondary-bg);
            margin: 0;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        .app-container {
            width: 100%;
            max-width: 414px;
            background-color: #F8F9FD;
            min-height: 100vh;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding-bottom: 160px; /* Space for floating bar & nav */
        }

        /* --- HEADER --- */
        .header-section {
            background: var(--primary-gradient);
            padding: 20px 20px 40px 20px;
            border-bottom-left-radius: 35px;
            border-bottom-right-radius: 35px;
            color: white;
            position: relative;
        }

        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .btn-icon {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            border-radius: 12px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        /* Glass Card in Header */
        .outstanding-card {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .due-pill {
            background: rgba(0, 0, 0, 0.2);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
            margin-top: 10px;
        }

        /* --- FEE CARDS --- */
        .section-title {
            padding: 25px 20px 10px 20px;
            font-weight: 600;
            color: #1a1a1a;
            font-size: 18px;
        }

        .fee-card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            margin: 0 20px 20px 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            border: none;
            position: relative;
            overflow: hidden;
        }

        /* Left Accent Borders */
        .border-red::before {
            content: '';
            position: absolute;
            left: 0; top: 15px; bottom: 15px;
            width: 5px;
            background-color: var(--card-border-red);
            border-radius: 0 5px 5px 0;
        }
        .border-yellow::before {
            content: '';
            position: absolute;
            left: 0; top: 15px; bottom: 15px;
            width: 5px;
            background-color: var(--card-border-yellow);
            border-radius: 0 5px 5px 0;
        }

        .fee-title { font-weight: 600; font-size: 15px; color: #2d3436; margin-bottom: 2px; }
        .fee-date { font-size: 12px; color: #95a5a6; }
        .fee-amount { font-weight: 700; font-size: 16px; color: #2d3436; }

        /* Badges */
        .badge-status {
            font-size: 10px;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .badge-overdue { background-color: var(--badge-red-bg); color: var(--badge-red-text); }
        .badge-pending { background-color: var(--badge-yellow-bg); color: var(--badge-yellow-text); }

        /* Action Row inside Card */
        .card-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #f1f2f6;
        }

        /* Custom Checkbox Styling */
        .form-check-input {
            width: 22px;
            height: 22px;
            border-radius: 6px;
            border: 2px solid #ddd;
            cursor: pointer;
        }
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .form-check-label {
            font-size: 14px;
            font-weight: 500;
            color: #2d3436;
            margin-left: 8px;
            cursor: pointer;
        }

        .btn-details {
            background-color: #EDE7F6;
            color: var(--primary-color);
            font-size: 12px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.2s;
        }
        .btn-details:hover { background-color: #d1c4e9; color: var(--primary-color); }

        /* --- FLOATING PAY BAR --- */
        .floating-pay-bar {
            position: fixed;
            bottom: 90px; /* Above nav bar */
            left: 50%;
            transform: translateX(-50%);
            width: 90%; /* Responsive width */
            max-width: 380px;
            background-color: var(--dark-bar);
            border-radius: 20px;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            z-index: 1000;
        }

        .total-label { font-size: 11px; color: #b2bec3; margin-bottom: 2px; }
        .total-val { font-size: 18px; font-weight: 700; }

        .btn-pay-now {
            background-color: white;
            color: var(--dark-bar);
            font-weight: 700;
            font-size: 14px;
            padding: 10px 20px;
            border-radius: 12px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* --- BOTTOM NAV --- */
        .bottom-nav {
            position: fixed !important;
            bottom: 0 !important;
            left: 50% !important; /* Center horizontally */
            transform: translateX(-50%) !important; /* Center horizontally */
            width: 100% !important;
            max-width: 414px !important; /* Match container width */
            background: white !important;
            height: 75px !important;
            display: flex !important;
            justify-content: space-around !important;
            align-items: center !important;
            border-top-left-radius: 25px !important;
            border-top-right-radius: 25px !important;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.05) !important;
            z-index: 10000 !important;
        }

        .nav-item {
            text-align: center !important;
            color: #95a5a6 !important;
            font-size: 10px !important;
            cursor: pointer !important;
            width: 60px !important;
        }
        
        .nav-icon { font-size: 22px; display: block; margin-bottom: 2px; }

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

<div class="app-container">
    
    <header class="header-section">
        <div class="top-nav">
            <button class="btn-icon"><a href="/dashboard"><i class="bi bi-chevron-left"></i></a></button>
            <h5 class="m-0 fw-bold">Fee Payment</h5>
            <button class="btn-icon"><i class="bi bi-clock-history"></i></button>
        </div>

        <div class="outstanding-card">
            <div style="font-size: 13px; opacity: 0.9; margin-bottom: 5px;">Total Outstanding</div>
            <div style="font-size: 32px; font-weight: 700;" id="totalPendingFee">0</div>
            <div class="due-pill">Next due: Nov 15, 2023</div>
        </div>
    </header>

    <div class="section-title">Pending Dues</div>

    <div id="pendingfees">

    </div>

    <div class="floating-pay-bar">
        <div>
            <div class="total-label">Total Selected</div>
            <div class="total-val" >₹0</div>
        </div>
        <a href="#" class="btn-pay-now">
            Pay Now <i class="bi bi-arrow-right"></i>
        </a>
    </div>
 @include('layouts.bottom')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
     async function loadPendingFee() {
            let token = localStorage.getItem('api_token');
            console.log(token);
            try {
                let response = await fetch('https://crm.magnitotechnologies.com/api/student/pendingfee', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json'
                    }
                });
                let data = await response.json();
                if(data.pendingFees) {
                   $('#totalPendingFee').text("₹"+data.totalpendingFee);
                   setPendingFee(data.pendingFees);
                }
            } catch (e) {
                console.log("Fetch error:", e);
            }
        }
        function setPendingFee(fee){
            if(fee.length>0){
                html = "";
                $.each(fee,function(key,val){
                    html += `
                    <div class="fee-card border-red">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fee-title">`+
                                        $.each(val.fee_groups,function(index,feetitle){
                                           title =   val.month_name+', '+val.year
                                        })
                                    +`</div>
                                <div class="fee-date">Due Month: ${val.month_name}, ${val.year}</div>
                            </div>
                            <div class="text-end">
                                <div class="fee-amount">₹${val.pending_amount}</div>
                                <div class="badge-status badge-overdue mt-1 d-inline-block">Overdue</div>
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input addAmount" value="${val.pending_amount}" type="checkbox" id="pay${key}">
                                <label class="form-check-label" for="pay1">Select to pay</label>
                            </div>
                            <a href="/pendingfee/details" class="btn-details">View Details</a>
                        </div>
                    </div>`;
                });
                $('#pendingfees').html(html);
            }
        }
        loadPendingFee();
        $(document).on('change', '.addAmount', function () {

            let total = 0;
            
            $('.addAmount:checked').each(function () {
                total += parseFloat($(this).val()) || 0;
            });
            console.log(total);
            $('.total-val').text("₹"+total);

        });
</script>
</body>
</html>