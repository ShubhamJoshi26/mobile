<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .main-bg {
            background: radial-gradient(circle at top, #ffecd2 0%, #fcb69f 30%, #ffffff 100%);
            min-height: 100vh;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #ff7e7e 0%, #8e54e9 100%);
        }

        .input-focus:focus-within {
            border-color: #8e54e9;
            box-shadow: 0 0 0 4px rgba(142, 84, 233, 0.1);
        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="main-bg flex flex-col items-center px-6 py-12">

    <div class="relative mb-8">
        <div class="w-32 h-32 rounded-full border-4 border-white shadow-xl overflow-hidden bg-white">
            <img src="{{ asset('asset/graduated.png') }}" alt="Logo" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 rounded-full border-[12px] border-orange-200/30 -m-2"></div>
    </div>

    <div class="text-center mb-10">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-tight">Springfield School ERP</h1>
        <p class="text-gray-500 text-sm mt-3 px-6 leading-relaxed">
            Login to manage attendance, homework, fees and more in one student dashboard.
        </p>
    </div>

    <div
        class="bg-transparent backdrop-blur-md rounded-[45px] w-full max-w-md p-8 shadow-2xl shadow-orange-200/50 border border-white p-4">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Welcome back</h2>
                <p class="text-xs text-gray-800 mt-1">Sign in with your school credentials</p>
            </div>
            <span
                class="bg-red-50 text-red-400 text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
                Student Portal
            </span>
        </div>

        <form action="{{ route('student.login') }}" method="POST" enctype="multipart/form-data" id="login_form">
            @csrf
            <div class="flex justify-between items-center mb-8 bg-gray-50/50 p-2 rounded-2xl">
                <div class="flex items-center gap-2 px-2">
                    <div class="w-4 h-4 rounded-full bg-red-400"></div>
                    <span class="text-sm font-bold text-gray-700">Student</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold text-gray-400">Parent mode</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-400">
                        </div>
                    </label>
                </div>
            </div>

            <div class="space-y-5">
                <div
                    class="input-focus flex items-center gap-4 border-2 border-gray-100 rounded-3xl p-4 transition-all bg-white">
                    <div class="text-indigo-500 bg-indigo-50 p-2 rounded-xl">
                        <i data-lucide="badge-check" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-1">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase">Admission / Roll
                            Number</label>
                        <input type="text" name="username" placeholder="Enter your ID" class="w-full px-4 py-2.5 
           border border-gray-300 
           rounded-lg 
           bg-white 
           text-gray-700 
           placeholder-gray-400
           focus:outline-none 
           focus:ring-2 
           focus:ring-blue-500 
           focus:border-blue-500
           transition duration-200">
                    </div>
                </div>

                <div
                    class="input-focus flex items-center gap-4 border-2 border-gray-100 rounded-3xl p-4 transition-all bg-white">
                    <div class="text-red-400 bg-red-50 p-2 rounded-xl">
                        <i data-lucide="lock" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-1">
                        <label class="block text-[10px] font-bold text-gray-400 uppercase">Password</label>
                        <input type="password" name="password" value="" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg bg-white text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 
           focus:ring-blue-500 focus:border-blue-500 transition duration-200 password-input">
                    </div>
                    <button type="button" class="text-gray-300 show-password"><i data-lucide="eye" id="passwordicon"
                            class="w-5 h-5"></i></button>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6 px-1">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" class="w-5 h-5 rounded-lg border-gray-300 text-red-400 focus:ring-red-400">
                    <span class="text-xs font-semibold text-gray-400">Remember me</span>
                </label>
                <a href="#" class="text-xs font-bold text-red-400">Forgot password?</a>
            </div>

            <button type="submit" 
                class="btn-gradient w-full mt-8 py-4 rounded-3xl text-white font-bold flex items-center justify-center gap-2 shadow-lg shadow-purple-200 hover:opacity-90 transition-opacity">
                Continue to dashboard
                <i data-lucide="arrow-right" class="w-5 h-5"></i> 
            </button>
        </form>

        {{-- <div class="relative my-10">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-100"></div>
            </div>
            <div class="relative flex justify-center text-xs uppercase font-bold text-gray-300">
                <span class="bg-white px-4">or sign in with</span>
            </div>
        </div> --}}

        {{-- <div class="grid grid-cols-2 gap-4">
            <button
                class="flex items-center justify-center gap-2 p-4 border-2 border-gray-50 rounded-3xl hover:bg-gray-50 transition-colors">
                <i data-lucide="mail" class="w-4 h-4 text-gray-600"></i>
                <span class="text-xs font-bold text-gray-600">School email</span>
            </button>
            <button
                class="flex items-center justify-center gap-2 p-4 border-2 border-gray-50 rounded-3xl hover:bg-gray-50 transition-colors">
                <i data-lucide="smartphone" class="w-4 h-4 text-gray-600"></i>
                <span class="text-xs font-bold text-gray-600">OTP on mobile</span>
            </button>
        </div> --}}
    </div>

    <div class="mt-12 text-center">
        <p class="text-[11px] text-gray-400 font-medium px-10">
            By continuing, you agree to the school's policies.
        </p>
        <button class="mt-4 flex items-center justify-center gap-1 mx-auto text-red-400 font-bold text-xs">
            Need help logging in?
            <i data-lucide="help-circle" class="w-4 h-4"></i>
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        lucide.createIcons();

        // $('.show-password').on('click',function(e){
        //     var val = $(this .'i').prop('data-lucide');
        //     alert(val);
        // })

    </script>
    <script>
        document.getElementById('login_form').addEventListener('submit', function(e) {
                e.preventDefault();

                fetch("{{ route('student.login') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                    },
                    body: JSON.stringify({
                        username: document.getElementsByName('username').value,
                        password: document.getElementsByName('password').value,
                        _token: document.getElementsByName('password').value,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);

                    if(data.status=='success'){
                        localStorage.setItem('api_token', data.token);
                        window.location.href = data.url;
                    }
                })
                .catch(error => console.error(error));
            });
        document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll(".show-password").forEach(function(button) {

        button.addEventListener("click", function () {

            // nearest input find karo
            const wrapper = button.closest("div.flex");
            const input = wrapper.querySelector(".password-input");
            const icon = button.querySelector("#passwordicon");

            if (input.type === "password") {
                input.type = "text";
                icon.setAttribute("data-lucide", "eye");
            } else {
                input.type = "password";
                icon.setAttribute("data-lucide", "eye-off");
            }

            lucide.createIcons(); // icon refresh
        });

    });

});
    </script>
</body>

</html>