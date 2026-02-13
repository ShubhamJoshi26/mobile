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
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #818cf8 0%, #a855f7 100%); }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
    {{-- <script src="https://unpkg.com/lucide@latest"></script> --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="bg-gray-50 pb-24">

    <div class="gradient-bg text-white p-6 pb-20 rounded-b-[40px] relative">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="{{ asset('asset/graduated.png') }}" alt="Profile" id="student_profile" class="w-14 h-14 rounded-full border-2 border-white/50 bg-white">
                <div>
                    <h1 class="text-xl font-bold italic leading-tight" id="student_name">Hi, Aarav</h1>
                    <p class="text-sm opacity-90"><span id="student_class">Class X - A</span> | Roll No. <span id="student_rollno">24</span></p>
                    
                </div>
            </div>
            <button class="bg-white/20 p-2.5 rounded-2xl">
                <i data-lucide="bell" class="w-6 h-6"></i>
            </button>
        </div>
    </div>

    <div class="px-5 mt-6 grid grid-cols-2 gap-4">
        <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-2">
                <span class="text-2xl font-bold text-gray-800">85%</span>
                <span class="text-xs font-semibold text-green-500 bg-green-50 px-2 py-0.5 rounded-full">+2%</span>
            </div>
            <div class="w-full bg-gray-100 h-1.5 rounded-full">
                <div class="bg-green-500 h-1.5 rounded-full w-[85%]"></div>
            </div>
        </div>
        <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-1">
                <span class="text-xl font-bold text-red-500">₹1,200</span>
                <span class="text-[10px] font-bold text-yellow-600 bg-yellow-50 px-2 py-0.5 rounded-full uppercase">Due</span>
            </div>
            <p class="text-[10px] text-gray-400 font-medium">Last date: 25 Oct</p>
        </div>
    </div>

    <div class="px-6 mt-8">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-lg font-bold text-gray-800">Academics</h2>
            <a href="/view-academics" class="text-sm font-semibold text-indigo-500">View All</a>
        </div>
        
        <div class="grid grid-cols-4 gap-y-6 text-center">
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="book-open"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Homework</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-purple-50 text-purple-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="calendar"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Timetable</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="trophy"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Results</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="file-text"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Exams</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-pink-50 text-pink-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="image"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Gallery</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-teal-50 text-teal-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="bus"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Transport</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-500 rounded-2xl flex items-center justify-center">
                    <i data-lucide="library"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Library</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-14 h-14 bg-red-50 text-red-400 rounded-2xl flex items-center justify-center">
                    <i data-lucide="log-out" class="rotate-180"></i>
                </div>
                <span class="text-[11px] font-semibold text-gray-600">Leave</span>
            </div>
        </div>
    </div>

    <div class="px-6 mt-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold text-gray-800">Notice Board</h2>
            <a href="#" class="text-sm font-semibold text-indigo-400">All</a>
        </div>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-blue-500 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">28</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Oct</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Science Exhibition 2024</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Annual science fair projects submission deadline has been extended.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-3xl shadow-sm border-l-4 border-l-yellow-400 flex gap-4">
                <div class="bg-gray-50 h-fit p-3 rounded-2xl text-center min-w-[60px]">
                    <p class="text-xl font-bold text-gray-800">02</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase">Nov</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Winter Uniform Update</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mt-1">Students must wear full winter uniform starting from Monday.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-100 px-6 py-3 flex justify-between items-center rounded-t-3xl">
        <div class="flex flex-col items-center text-indigo-600">
            <i data-lucide="layout-grid" class="w-6 h-6"></i>
            <span class="text-[10px] font-bold mt-1">Home</span>
        </div>
        <div class="flex flex-col items-center text-gray-400">
            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
            <span class="text-[10px] font-bold mt-1">Classes</span>
        </div>
        
        <div class="absolute -top-10 left-1/2 -translate-x-1/2">
            <div class="gradient-bg p-4 rounded-full shadow-lg shadow-indigo-200 border-4 border-white text-white">
                <i data-lucide="qr-code" class="w-7 h-7"></i>
            </div>
        </div>

        <div class="flex flex-col items-center text-gray-400 ml-10">
            <i data-lucide="message-square" class="w-6 h-6"></i>
            <span class="text-[10px] font-bold mt-1">Chat</span>
        </div>
        <div class="flex flex-col items-center text-gray-400">
            <a href="{{ route('profile') }}">
                <i data-lucide="user" class="w-6 h-6"></i>
            <span class="text-[10px] font-bold mt-1">Profile</span>
            </a>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        lucide.createIcons();


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
