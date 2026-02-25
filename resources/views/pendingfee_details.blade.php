<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Details UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Inter', sans-serif; padding-bottom: 100px; }
        
        /* Header Gradient */
        .header-bg {
            background: linear-gradient(135deg, #7b61ff 0%, #9d85ff 100%);
            height: 200px;
            padding-top: 20px;
            color: white;
            border-radius: 0 0 30px 30px;
        }

        /* Card Customization */
        .fee-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-top: -100px;
        }
        
        .breakdown-card {
            border: none;
            border-radius: 20px;
            margin-top: 20px;
        }

        .status-badge {
            background: #fff0f0;
            color: #ff6b6b;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 8px;
            text-transform: uppercase;
        }

        .due-alert {
            background-color: #fff5f5;
            color: #e03131;
            border-radius: 50px;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            padding: 8px 20px;
        }

        /* Bottom Sticky Bar */
        .payment-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            padding: 20px;
            border-radius: 30px 30px 0 0;
            box-shadow: 0 -10px 25px rgba(0,0,0,0.05);
        }

        .btn-pay {
            background: linear-gradient(90deg, #7b61ff, #9d85ff);
            border: none;
            padding: 12px;
            border-radius: 15px;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="header-bg">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="btn btn-light btn-sm rounded-3 opacity-75"><a href="/pendingfee"><i class="bi bi-chevron-left"></i></a></button>
            <h5 class="mb-0 fw-bold">Fee Details</h5>
            <button class="btn btn-light btn-sm rounded-3 opacity-75"><i class="bi bi-download"></i></button>
        </div>
    </div>

    <div class="container">
        <div class="card fee-card p-4 text-center">
            <div><span class="status-badge">Overdue</span></div>
            <p class="text-secondary mt-3 mb-1 fw-semibold">Tuition Fee - Term 2</p>
            <h1 class="display-4 fw-bold mb-4">$850.00</h1>
            <div>
                <div class="due-alert">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    Due 10 days ago (Oct 30, 2023)
                </div>
            </div>
        </div>

        <div class="card breakdown-card p-4">
            <h6 class="fw-bold mb-4">Fee Breakdown</h6>
            
            <div class="d-flex justify-content-between mb-3">
                <span class="text-secondary">Base Tuition Fee</span>
                <span class="fw-bold">$800.00</span>
            </div>
            
            <div class="d-flex justify-content-between mb-3">
                <span class="text-secondary">Late Penalty (10 Days)</span>
                <span class="text-danger fw-bold">+$50.00</span>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <span class="text-secondary">Tax / GST (0%)</span>
                <span class="fw-bold">$0.00</span>
            </div>

            <hr class="border-secondary border-1 opacity-25 my-4" style="border-style: dashed !important;">

            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Total Payable</h5>
                <h5 class="fw-bold mb-0">$850.00</h5>
            </div>
        </div>

        {{-- <div class="card breakdown-card p-3 mb-5">
            <div class="d-flex align-items-start mb-3">
                <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3 text-primary">
                    <i class="bi bi-info-circle"></i>
                </div>
                <div>
                    <p class="mb-0 fw-bold small">Late Fee Policy</p>
                    <p class="text-secondary small mb-0">A penalty of $5.00 is applied for every day past the due date.</p>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="payment-footer">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <p class="small text-secondary mb-0">Amount to Pay</p>
                <h3 class="fw-bold mb-0">$850.00</h3>
            </div>
            <button class="btn btn-primary btn-pay px-5 py-3">Pay Now</button>
        </div>
    </div>

</body>
</html>