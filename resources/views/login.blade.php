<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Springfield School ERP</title>

    <style>
        /* Modern CSS Variables */
        :root {
            --primary-gradient: linear-gradient(90deg, #ff7e7e 0%, #8e54e9 100%);
            --bg-gradient: radial-gradient(circle at top, #ffecd2 0%, #fcb69f 30%, #ffffff 100%);
            --glass: rgba(255, 255, 255, 0.45);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: sans-serif; }

        body {
            background: var(--bg-gradient);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        /* Profile Logo Section */
        .logo-wrapper { position: relative; margin-bottom: 20px; }
        .logo-circle {
            width: 100px; height: 100px;
            border-radius: 50%;
            border: 4px solid white;
            background: white;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex; align-items: center; justify-content: center;
        }
        .logo-circle img { width: 100%; height: 100%; object-fit: cover; }

        /* Card Design */
        .login-card {
            background: var(--glass);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 40px;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 20px 40px rgba(253, 186, 116, 0.3);
        }

        .header { display: flex; justify-content: space-between; align-items: start; margin-bottom: 25px; }
        .tag {
            background: #fff5f5; color: #ff7e7e; font-size: 10px; font-weight: bold;
            padding: 5px 12px; border-radius: 20px; text-transform: uppercase;
        }

        /* Input Container */
        .input-box {
            background: white;
            border: 2px solid #f3f4f6;
            border-radius: 20px;
            padding: 12px 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.3s;
        }
        .input-box:focus-within { border-color: #8e54e9; box-shadow: 0 0 0 4px rgba(142, 84, 233, 0.1); }
        
        .icon-bg { padding: 8px; border-radius: 12px; display: flex; align-items: center; }
        .field { flex: 1; }
        .field label { display: block; font-size: 10px; color: #9ca3af; font-weight: bold; text-transform: uppercase; }
        .field input { border: none; outline: none; width: 100%; font-size: 14px; color: #374151; padding: 2px 0; }

        /* Switch Toggle */
        .switch-row {
            display: flex; justify-content: space-between; align-items: center;
            background: rgba(255,255,255,0.4); padding: 10px 15px; border-radius: 18px; margin-bottom: 20px;
        }
        .switch { position: relative; width: 36px; height: 20px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider { position: absolute; cursor: pointer; inset: 0; background: #d1d5db; border-radius: 34px; transition: .3s; }
        .slider:before { position: absolute; content: ""; height: 14px; width: 14px; left: 3px; bottom: 3px; background: white; border-radius: 50%; transition: .3s; }
        input:checked + .slider { background: #ff7e7e; }
        input:checked + .slider:before { transform: translateX(16px); }

        /* Button */
        .btn-login {
            background: var(--primary-gradient);
            color: white; border: none; width: 100%; padding: 16px;
            border-radius: 25px; font-weight: bold; font-size: 15px;
            cursor: pointer; box-shadow: 0 10px 20px rgba(142, 84, 233, 0.2);
            display: flex; align-items: center; justify-content: center; gap: 10px;
        }
        .btn-login:active { transform: scale(0.98); }

        .footer { margin-top: 30px; text-align: center; color: #9ca3af; font-size: 12px; }

        /* Toast Container */
#toast-container {
    position: fixed;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    width: 90%;
    max-width: 350px;
}

/* Toast Box */
.toast {
    background: #333;
    color: white;
    padding: 12px 20px;
    border-radius: 15px;
    margin-top: 10px;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    animation: slideUp 0.4s ease-out;
}

.toast.error { background: #ff4d4d; border-left: 5px solid #b30000; }
.toast.success { background: #00b894; border-left: 5px solid #006b56; }

/* Animation */
@keyframes slideUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Fade Out Animation */
.fade-out {
    opacity: 0;
    transition: opacity 5.5s ease-out;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="logo-wrapper">
        <div class="logo-circle">
            <img src="{{ asset('asset/graduated.png') }}" alt="Logo" onerror="this.src='https://via.placeholder.com/100?text=ERP'">
        </div>
    </div>

    <div style="text-align: center; margin-bottom: 30px;">
        <h1 style="color: #374151; font-size: 26px;">Springfield School ERP</h1>
        <p style="color: #6b7280; font-size: 13px; margin-top: 5px;">Secure Student Access</p>
    </div>

    <div class="login-card">
        <div class="header">
            <div>
                <h2 style="color: #1f2937;">Welcome back</h2>
                <p style="color: #6b7280; font-size: 11px;">Sign in to continue</p>
            </div>
            <span class="tag">Student</span>
        </div>

        <form id="login_form">
            <div class="switch-row">
                <span style="font-size: 13px; font-weight: bold; color: #4b5563;">Parent Mode</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
            @csrf
            <div class="input-box">
                <div class="icon-bg" style="background: #eef2ff; color: #6366f1;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <div class="field">
                    <label>Admission / Roll No</label>
                    <input type="text" name="username" id="username" placeholder="Enter ID" required>
                </div>
            </div>

            <div class="input-box">
                <div class="icon-bg" style="background: #fff5f5; color: #ff7e7e;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" id="passInput" placeholder="••••••••" required>
                </div>
                <button type="button" id="togglePass" style="background: none; border: none; cursor: pointer; color: #d1d5db;">
                    <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </button>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; padding: 0 5px;">
                <label style="font-size: 12px; color: #9ca3af; display: flex; align-items: center; gap: 5px; cursor: pointer;">
                    <input type="checkbox"> Remember
                </label>
                <a href="#" style="font-size: 12px; color: #ff7e7e; text-decoration: none; font-weight: bold;">Forgot Password?</a>
            </div>

            <button type="submit" class="btn-login">
                Continue to Dashboard
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
        </form>
    </div>

    <div class="footer">
        <p>By continuing, you agree to school policies.</p>
        <p style="color: #ff7e7e; font-weight: bold; margin-top: 10px; cursor: pointer;">Need Help?</p>
    </div>
<div id="toast-container"></div>
    <script>
        // Password Toggle Script (Pure JS)
        const toggleBtn = document.getElementById('togglePass');
        const passInput = document.getElementById('passInput');
        
        toggleBtn.addEventListener('click', () => {
            const isPass = passInput.type === 'password';
            passInput.type = isPass ? 'text' : 'password';
            toggleBtn.style.color = isPass ? '#8e54e9' : '#d1d5db';
        });

        // Form Submit
        function showToast(message, type = 'error') {
    const container = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerText = message;

    container.appendChild(toast);

    // 3 second baad remove kar do
    setTimeout(() => {
        toast.classList.add('fade-out');
        setTimeout(() => toast.remove(), 5000);
    }, 5000);
}

// Updated Submit Event
document.getElementById('login_form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // CSRF Token fetch karne ka sahi tareeka
    const token = document.querySelector('input[name="_token"]').value;
    const username = document.getElementsByName('username')[0].value;
    const password = document.getElementsByName('password')[0].value;

    fetch("{{ route('student.login') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": token
        },
        body: JSON.stringify({
            username: username,
            password: password,
            _token: token
        })
    })
    .then(response => {
        if (!response.ok) {
            // Agar server 401, 422 ya 500 error deta hai
            throw response;
        }
        return response.json();
    })
    .then(data => {
        if(data.status == 'success'){
            showToast("Login Successful! Redirecting...", "success");
            localStorage.setItem('api_token', data.token);
            setTimeout(() => { window.location.href = data.url; }, 1000);
        } else {
            // Agar status success nahi hai (Jaise wrong password)
            showToast(data.message || "Invalid credentials");
        }
    })
    .catch(async (error) => {
        // Validation errors handling (Laravel default)
        if (error.status === 422) {
            const errData = await error.json();
            const firstError = Object.values(errData.errors)[0][0];
            showToast(firstError);
        } else {
            showToast("Network error or Server not responding");
        }
        console.error("Error:", error);
    });
});
    let token = localStorage.getItem('api_token');
    if(token && token!=""){
        window.location.href = "/dashboard";
    }
    </script>
</body>
</html>