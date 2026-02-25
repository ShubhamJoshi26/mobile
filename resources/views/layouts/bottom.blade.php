<style>
    :root {
            --primary-gradient: linear-gradient(135deg, #818cf8 0%, #a855f7 100%);
        }
     /* Bottom Navbar */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            border-top: 1px solid #eee;
            padding: 12px 24px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .nav-item {
            text-align: center;
            color: #adb5bd;
            text-decoration: none;
        }

        .nav-item.active {
            color: #6366f1;
        }

        .nav-label {
            font-size: 10px;
            font-weight: 700;
            display: block;
            margin-top: 4px;
        }

        .qr-center-btn {
            background: var(--primary-gradient);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 5px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 4px 15px rgba(129, 140, 248, 0.4);
        }
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
<div class="bottom-nav">
        <a href="#" class="nav-item active">
            <i data-lucide="layout-grid"></i>
            <span class="nav-label">Home</span>
        </a>
        <a href="{{ route( 'timetable') }}" class="nav-item">
            <i data-lucide="graduation-cap"></i>
            <span class="nav-label">Classes</span>
        </a>

        <div class="">
            <div class="qr-center-btn">
                <i data-lucide="qr-code" style="width: 28px; height: 28px;"></i>
            </div>
        </div>

        <a href="#" class="nav-item" style="margin-left: 50px;">
            <i data-lucide="message-square"></i>
            <span class="nav-label">Chat</span>
        </a>
        <a href="{{ route('profile') }}" class="nav-item">
            <i data-lucide="user"></i>
            <span class="nav-label">Profile</span>
        </a>
    </div>
    <div id="toast-container"></div>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();

          function showToast(message, type = 'error') {
    const container = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.innerText = message;

    container.appendChild(toast);

    // 3 second baad remove kar do
    setTimeout(() => {
        toast.classList.add('fade-out');
        setTimeout(() => toast.remove(), 500);
    }, 3000);
}
    </script>