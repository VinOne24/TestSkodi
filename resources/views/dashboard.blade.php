<x-app-layout>
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
</style>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <!-- Atas -->
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

                <!-- 3 tombol -->
                <div class="main_container py-9">
                    <div class="text-2xl font-bold flex justify-center h-20">
                        <h3>Program dan kelas berdasarkan kemampuan</h3>
                    </div>
                    <div class="flex justify-between bg-gray-50 shadow-xl text-sky-600 h-8 rounded-full" >
                        <button class="bg-transparent hover:bg-sky-200 font-medium h-8 px-20 rounded-full" id="btn_diva">
                            Kids
                        </button>
                        <button class="bg-transparent hover:bg-sky-200 font-medium h-8 px-20 rounded-full" id="btn_divb">
                            Junior
                        </button>
                        <button class="bg-transparent hover:bg-sky-200 font-medium h-8 px-20 rounded-full" id="btn_divc">
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
                <div class="text-2xl font-bold flex justify-center py-16">
                        <h3>Apa Yang membuat kami berbeda</h3>
                    </div>


                <div class="max-w-full mx-auto sm:px-6 lg:px-8 flex justify-center" >
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 flex justify-start ">

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-sm py-2 font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Persiapan Portofolio</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Pada saat ujian akhir, siswa akan diajak untuk<br>mempersiapkan portofolio untuk masuk ke<br>dunia kerja.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-2xl shadow-xl">
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

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Akses Permanen</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu dapat mengakses materi dan video<br>learning kapan saja dan dimana saja, materi<br>dan video learning dapat diakses kembali jika<br>kelas telah selesai.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Kelas Offline dan Online</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu akan mengikuti pembelajaran offline<br>dan online.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-2xl shadow-xl">
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
                <div>
                    <h2>Event Kami</h2>
                    <h3>Bootcamp Offline Mobile App<br>Dev using Flutter & Dart</h3>
                    <p></p>
                </div>
                <!-- Our Event -->

                <!-- Learning Path -->
                <div class="pl-6">
                    <div class="font-semibold text-base text-green-400">
                        <p>Learning Path</p>
                    </div>
                    <div class="font-semibold text-3xl">
                        <p>Alur Belajar di Sekolah<br> Koding Indonesia</p>
                    </div>
                    <div class="text-base text-base font-normal text-base">
                        <div class="object-contain pr-12">
                            Alur belajar atau yang biasa disebut Learning Path adalah rencana yang membantu menyusun<br> perjalanan pembelajaran. Sekolah Koding Indonesia sendiri sudah menerapkan Alur Belajar dalam<br> proses pembelajaran sehingga pelajar dapat mengetahui uraian apa yang akan dipelajari, kapan <br> pembelajarannya hingga bagaimana melakukannya.
                        </div>
                    </div>
                </div>
                <div class="flex justify-center pt-3 pb-12">
                    <img class="object-fill" src="{{asset('/assets/img/path.svg')}}" alt="">
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
</x-app-layout>

<script>
        var btn_diva = document.getElementById("btn_diva");
        var btn_divb = document.getElementById("btn_divb");
        var btn_divc = document.getElementById("btn_divc");
        var diva = document.getElementById("diva");
        var divb = document.getElementById("divb");
        var divc = document.getElementById("divc");
        btn_diva.addEventListener('click',()=>{
            diva.style.display='block';
            divb.style.display='none';
            divc.style.display='none';

        });

        btn_divb.addEventListener('click',()=>{
            diva.style.display='none';
            divb.style.display='block';
            divc.style.display='none';

        });
        btn_divc.addEventListener('click',()=>{
            diva.style.display='none';
            divb.style.display='none';
            divc.style.display='block';

        });
    </script>


<!-- <script>
    const navLinks = document.querySelectorAll('.side-menu');

    navLinks.forEach(navLink => {
        navLink.addEventListener('click', () => {
            if (!navLink.classList.contains('side-menu--active')) {
                navLink.forEach(link => link.classList.remove('side-menu--active', 'side-menu--open'));
                navLink.classList.add('side-menu--active', 'side-menu--open');
                sessionStorage.setItem('selectedNav', navLink.getAttribute('data-target'));
            }
        });
    });

    const selectedNav = sessionStorage.getItem('selectedNav');
    if(selectedNav) {
        const navLink = document.querySelector(`[data-target="${selectedNav}"]`);
        navLink.classList.add('side-menu--active', 'side-menu--open');
    }
</script> -->

