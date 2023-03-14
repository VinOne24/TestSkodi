<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
    .main_container{
    margin: 15px auto;
    width: 700px;
    height: 900px;
}

.buttons{
    display: flex;
    gap: 2px;
}


.blocks{
    display: flex;
    width: 100%;
    height: 100%;
}

.diva{
    width: 100%;
    height: auto;
    display: block;
}

.divb{
    display: none;
    width: 100%;
    height: auto;
}
.divc{
    display: none;
    width: 100%;
    height: auto;
}

/* css animasi */
/* .diva:not(#diva) {
    display: none;
}

.diva{
    animation-name: slideIn;
    animation-duration: 0.5s;
    animation-fill-mode: fowards;
    transform: translateY(-50px);
    opacity: 0;
}

@keyframes slideIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
} */
</style>
    </head>

    <header class="bg-white dark:bg-gray-800 shadow" >
    <nav class="bg-white fixed top-0 w-full dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 shadow-xl">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center mx-36">
                    <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('/assets/img/logo 1.png') }}" width="50" height="50" ;> 
                    </a>
                    <!-- dark mode -->
                    <div class=" mx-14 ">
                        <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                            x-on:click="darkMode = !darkMode"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            role="switch" aria-checked="false">
                            <span class="sr-only">Dark mode toggle</span>
                            <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                                <span
                                    x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                    </svg>
                                </span>
                                <span
                                    x-bind:class="darkMode ?  'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                    <!-- dark mode -->

                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dass')" :active="request()->routeIs('dass')">
                        {{ __('Beranda') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('kelas')" :active="request()->routeIs('kelas')">
                        {{ __('Kelas') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('event')" :active="request()->routeIs('event')">
                        {{ __('Event') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex mx-8">
                    <x-nav-link :href="route('tentang')" :active="request()->routeIs('tentang')">
                        {{ __('Tentang') }}
                    </x-nav-link>
                </div>
                <a href="/register">
                <button class="bg-transparent hover:bg-sky-600 text-sky-600 font-medium hover:text-white mt-5 h-8 mx-4 px-8 border border-sky-600 hover:border-transparent rounded-full">
                Daftar
                </button>
                </a>
                
                <a href="/login">
                <button class="bg-sky-600 hover:bg-sky-300 text-white font-medium mt-5 h-8 px-8 rounded-full">
                Masuk
                </button>
                </a>
                
            </div>


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    </div>
</nav>

</header>


    <body class="max-w-full mx-auto ">
    <div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <!-- Atas -->
                <div class="container mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-2 gap-2">
                        <div class="float-left ml-20 py-9">
                        <img  src="{{ asset('/assets/img/orang.png') }}">
                        </div>
                        <div class="text-4xl font-bold py-9 leading-snug">
                            <h5>Naikkan potensi digital <br>skill untuk masa depan <br>lebih baik</br></h5>
                            <h3 class="text-base font-light py-9 leading-normal">Tingkatkan kemampuan digital kamu untuk <br>Indonesia mulai gerakan
                            <span><h3 class="text-base font-bold ">#digitalisasibangsa</h3></span></h3>
                        </div>
                    </div>
                </div>
                

                <!-- 3 tombol -->
                <div class="main_container py-9 pt-44">
                    <div class="text-2xl font-bold flex justify-center h-20">
                        <h3>Program dan kelas berdasarkan kemampuan</h3>
                    </div>
                    <div class="flex justify-beetwen bg-gray-50 text-sky-600 h-8 w-fit rounded-full" >
                        <button class="btn_kelas hover:bg-sky-200 font-medium h-8 px-20 rounded-full bg-sky-200" id="btn_diva">
                            Kids
                        </button>
                        <button class="btn_kelas hover:bg-sky-200 font-medium h-8 px-20 rounded-full" id="btn_divb">
                            Junior
                        </button>
                        <button class="btn_kelas hover:bg-sky-200 font-medium h-8 px-20 rounded-full" id="btn_divc">
                            Professional
                        </button>
                    </div>

                    <div class="grid grid-cols-1 gap-2">
                        <!-- kids -->
                        <div class="diva" id="diva">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Coding For Kids</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk programmer pemula yang akan<br> belajar pemrograman dasar untuk jenjang<br> pendidikan SD usia 5-10 Tahun.
                                <button class="bg-transparent hover:bg-blue-500 text-sky-600 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                            </div>
                        </div>

                        <!-- junior -->
                        <div class="divb" id="divb">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Junior Coders</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk belajar algoritma dan pemrograman<br> tingkat menengah untuk anak SMP dan SMA <br>usia 13 sampai 18 Tahun.<br>
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                            </div>
                        </div>

                        <!-- pro -->
                        <div class="divc" id="divc">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/orang 2.svg') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Pro Coders</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk belajar algoritma dan pemrograman<br> tingkat atas guna persiapan diri dalam<br> dunia kerja professional.<br>
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- What we make different -->
                <div class="text-2xl font-bold flex justify-center py-16 pt-0">
                        <h3>Apa Yang membuat kami berbeda</h3>
                    </div>


                <div class="max-w-full mx-auto sm:px-6 lg:px-8 flex justify-center" >
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 flex justify-start ">

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-8" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7 px-auto">
                                <h5 class="mx-8 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-sm mx-2 py-2 font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Persiapan Portofolio</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Pada saat ujian akhir, siswa akan diajak untuk<br>mempersiapkan portofolio untuk masuk ke<br>dunia kerja.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Tugas dan Kuis</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Dalam proses belajar akan ada tugas dan<br>kuis untuk melatih dan meningkatkan skill<br>kamu.</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="max-w-full mx-auto sm:px-6 lg:px-8 flex justify-center py-16" >
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 flex justify-start ">

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Akses Permanen</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu dapat mengakses materi dan video<br>learning kapan saja dan dimana saja, materi<br>dan video learning dapat diakses kembali jika<br>kelas telah selesai.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Kelas Offline dan Online</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu akan mengikuti pembelajaran offline<br>dan online.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Sertifikat Resmi</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Setelah kelas berakhir kamu akan<br>mendapatkan sertifikat resmi dari Sekolah<br>Koding Indonesia.</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- clearr -->

                <!-- Our Event -->
                <div class="container mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1">
                        <div class="pl-16 pt-44">
                            <div>
                                <div class="float-right pr-40 mt-24">
                                    <img  src="{{ asset('/assets/img/events.png') }}" width="500" height="500">
                                </div>
                            </div>
                            <div class="font-semibold text-base text-red-600 py-4">
                                <h2>Event Kami</h2>
                            </div>
                            <div class="font-bold text-3xl py-4">
                                <h3>Bootcamp Offline Mobile App<br>Dev using Flutter & Dart</h3>
                            </div>
                            <div class="text-sm py-2">
                                <p>Bootcamp Offline Mobile App Dev sudah dimulai.<br>Bootcamp berlangsung di My Office Coworking Space<br>Simpang Fatal, Palembang.</p>
                            </div>
                            <div class="text-sm py-9 pb-60">
                                <button class="bg-transparent hover:bg-red-500 font-normal hover:text-white mt-5 h-8 px-8 border border-red-500 hover:border-transparent rounded-full">
                                    Lihat Event Lainnya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Our Event -->

                <!-- Learning Path -->
                <div class="container mx-auto sm:px-6 lg:px-8">
                    <div class="pl-16 pt-8">
                        <div class="font-semibold text-base text-green-400 py-4">
                            <p>Learning Path</p>
                        </div>
                        <div class="font-bold text-3xl py-4">
                            <p>Alur Belajar di Sekolah<br> Koding Indonesia</p>
                        </div>
                        <div class="text-sm py-2">
                            Alur belajar atau yang biasa disebut Learning Path adalah rencana yang membantu menyusun<br> perjalanan pembelajaran. Sekolah Koding Indonesia sendiri sudah menerapkan Alur Belajar dalam<br> proses pembelajaran sehingga pelajar dapat mengetahui uraian apa yang akan dipelajari, kapan <br> pembelajarannya hingga bagaimana melakukannya.
                            
                        </div>
                    </div>
                    <div class="flex justify-center pt-12 pb-44">
                        <img class="object-fill" src="{{asset('/assets/img/path.svg')}}" alt="">
                    </div>
                </div>
                
                <!-- Learning Path -->

                <!-- Coba aja dulu -->
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-start drop-shadow-xl bg-gray-200" >
                    <div class=" flex justify-start ">

                    <div class="grid grid-cols-2 gap-2">
                    <div class="float-left ml-4 py-9">
                    <iframe class="w-full aspect-video" src="https://youtu.be/dQw4w9WgXcQ"></iframe>
                    </div>
                    <div class="text-4xl font-bold py-12 leading-snug mx-24">
                        <h5>Coba aja dulu !</h5>
                        <h3 class="text-base font-light leading-normal py-4">Mau coba ikut kelas tanpa harus bayar dulu ? tentu
                            <br>saja bisa ! kamu bisa mengikuti program free trial
                            <br>kelas secara gratis, dan program ini berlaku untuk
                            <br>semua kelas yang ada di Sekolah Koding Indonesia
                        </h3>
                    </div>
                </div>

                    </div>
                </div>
                <!-- Coba aja dulu -->

                <!-- What they say about us -->
                    <!-- .... -->
                <!-- What they say about us -->

                <!-- Footer -->
                    <!-- .... -->
                <!-- Footer -->

            </div>
        </div>
    </div>
</div>
    </body>
    <script>
    //Mendapatkan tombol dan kartu dengan id yang sesuai
    var btn_diva = document.getElementById("btn_diva");
    var btn_divb = document.getElementById("btn_divb");
    var btn_divc = document.getElementById("btn_divc");
    var diva = document.getElementById("diva");
    var divb = document.getElementById("divb");
    var divc = document.getElementById("divc");

    //Menambahkan event listener untuk setiap tombol
    btn_diva.addEventListener('click',(e)=>{
        diva.style.display='block';
        divb.style.display='none';
        divc.style.display='none';
        activeBtnClass(e.target.id);

    });

    btn_divb.addEventListener('click',(e)=>{
        diva.style.display='none';
        divb.style.display='block';
        divc.style.display='none';

        activeBtnClass(e.target.id);

        // btn_diva.classList.remove('bg-sky-300');
        // btn_divb.classList.add('bg-sky-300');
        // btn_divc.classList.remove('bg-sky-300');

    });
    btn_divc.addEventListener('click',(e)=>{
        diva.style.display='none';
        divb.style.display='none';
        divc.style.display='block';

        activeBtnClass(e.target.id);

        // btn_diva.classList.remove('bg-sky-300');
        // btn_divb.classList.remove('bg-sky-300');
        // btn_divc.classList.add('bg-sky-300');

    });

    const activeBtnClass = (id=null) => {
        let btnClass = document.querySelectorAll(".btn_kelas");
        btnClass.forEach((i) => {
            console.log(i.id);
            if(i.id ==id){
                let div_btn = document.getElementById(i.id);
                div_btn.classList.add('bg-sky-200');
            }else {
                let div_btn = document.getElementById(i.id);
                div_btn.classList.remove('bg-sky-200');
            }
        })
    }
</script>
</html>
