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
    <div class="max-w-full mx-auto ">
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
                                <img  src="{{ asset('/assets/img/pro.png') }}">
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
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 justify-start ">

                        <div class="flex justify-start bg-sky-200  h-40  w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-9 w-9 py-6 mx-2" >
                                <img class="mx-8" src="{{ asset('/assets/img/u1.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7 px-auto">
                                <h5 class="mx-8 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-sm mx-2 py-2 font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40  w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u2.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Persiapan Portofolio</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Pada saat ujian akhir, siswa akan diajak untuk<br>mempersiapkan portofolio untuk masuk ke<br>dunia kerja.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40  w-96 rounded-2xl shadow-xl">
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
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 justify-start ">

                        <div class="flex justify-start bg-sky-200  h-40  w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-10 w-10 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u4.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Akses Permanen</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu dapat mengakses materi dan video<br>learning kapan saja dan dimana saja, materi<br>dan video learning dapat diakses kembali jika<br>kelas telah selesai.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40  w-96 rounded-2xl shadow-xl">
                            <div class="float-left h-10 w-10 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/u5.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Kelas Offline dan Online</h5>
                                <h3 class="text-sm py-2 font-light leading-normal">Kamu akan mengikuti pembelajaran offline<br>dan online.</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-40  w-96 rounded-2xl shadow-xl">
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
                                    <img src="{{ asset('/assets/img/events.png') }}" width="500" height="500">
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
                                    <!-- <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
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
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-start shadow-lg bg-gray-100" >
                    <div class=" flex justify-start ">

                    <div class="grid grid-cols-2 gap-2">
                    <div class="float-left ml-4 py-9">
                        <iframe class="w-full aspect-video" src="https://youtu.be/cNZ7K5pt6N0"></iframe>
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

                <!-- What they say about us -->

                <!-- Footer -->
                    <!-- .... -->
                <!-- Footer -->

            </div>
        </div>
    </div>
</div>

</x-app-layout>


<footer class="bg-gradient-to-b from-slate-50 to-slate-100 px-12">
    <div class="grid grid-cols-2 gap-8 px-6 py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 px-12 text-sm font-semibold text-black-600">Tentang</h2>
            <p class="mb-12 pl-12 text-sm font-light text-black-300 ">SKODI adalah platform pembelajaran<br>Online dan Offline yang bertujuan untuk<br>menghasilkan jenius coders di seluruh<br>Indonesia.</p>
        </div>
        <div class="pl-24">
            <h2 class="mb-6 text-sm font-semibold text-black-600">Pelayanan</h2>
            <ul class="text-black-300 ">
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Pendaftaran</a>
                </li>
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Uji Coba</a>
                </li>
            </ul>
        </div>
        <div class="pl-4">
            <h2 class="mb-6 text-sm font-semibold text-black-600">Program</h2>
            <ul class="text-black-300 ">
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Coding For Kids</a>
                </li>
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Junior</a>
                </li>
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Pro Coders</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-black-600">Tentang</h2>
            <ul class="text-black-300 ">
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Byzantium Cluster Perum Legenda<br>Wisata FE 09, Cibubur, Bogor</a>
                </li>
                <li class="mb-4 text-sm font-light text-black-300 ">
                    <a href="#" class="hover:underline">Perum Rakyat Talang Ratu, Pakjo,<br>Palembang, Sumatera Selatan</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="px-4 py-6 bg-gradient-to-b from-slate-100 to-slate-50 md:flex md:items-center md:justify-between pr-12">
        <div class="flex px-12 mt-4 space-x-6 sm:justify-center md:mt-0">
            <a href="https://www.facebook.com/thegamers.smock" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="https://www.instagram.com/itsloko_/" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="https://twitter.com/Adhityahsn16" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                <span class="sr-only">GitHub account</span>
            </a>
        </div>
        <span class="text-sm text-black-300 dark:text-gray-300 sm:text-center pr-16 hover:underline">© 2023 <a href="https://skodi.id/">PT. Sekolah Koding Indonesia</a>. All Rights Reserved.
        </span>
    </div>
</footer>


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

