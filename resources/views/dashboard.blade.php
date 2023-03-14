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
                        <h3>Program dan kelas yang tersedia</h3>
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
                                <button class="bg-transparent hover:bg-blue-500 text-sky-600 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Info lebih lanjut</button></h3>
                            </div>
                        </div>

                        <!-- junior -->
                        <div class="divb" id="divb">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/junior.png') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Junior Coders</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk belajar algoritma dan pemrograman<br> tingkat menengah untuk anak SMP dan SMA <br>usia 13 sampai 18 Tahun.<br>
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Info lebih lanjut</button></h3>
                            </div>
                        </div>

                        <!-- pro -->
                        <div class="divc" id="divc">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/pro.svg') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Pro Coders</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk belajar algoritma dan pemrograman<br> tingkat atas guna persiapan diri dalam<br> dunia kerja professional.<br>
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Info lebih lanjut</button></h3>
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
                            <div class="float-left h-9 w-9 py-6 mx-2" >
                                <img class="mx-8" src="{{ asset('/assets/img/u1.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7 px-auto">
                                <h5 class="mx-8 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-sm mx-2 py-2 font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u2.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Persiapan Portofolio</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Pada saat ujian akhir, siswa akan diajak untuk<br>mempersiapkan portofolio untuk masuk ke<br>dunia kerja.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-7 w-7 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u3.png') }}">
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
                            <div class="float-left h-10 w-10 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u4.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Akses Permanen</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu dapat mengakses materi dan video<br>learning kapan saja dan dimana saja, materi<br>dan video learning dapat diakses kembali jika<br>kelas telah selesai.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-10 w-10 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u5.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Kelas Offline dan Online</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu akan mengikuti pembelajaran offline<br>dan online.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40 bg-gradient-to-tr from-cyan-200 to-sky-200 w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-10 w-10 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u6.png') }}">
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
</x-app-layout>

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

