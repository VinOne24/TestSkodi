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
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk programer pemula yang akan<br>belajar pemprograman dasar untuk jenjang<br>pendidikan SD usia 5-10 Tahun.
                                <button class="bg-transparent hover:bg-blue-500 text-sky-600 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                            </div>
                        </div>

                        <!-- junior -->
                        <div class="divb" id="divb">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Coding For Junior</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk programer pemula yang akan<br>belajar pemprograman dasar untuk jenjang<br>pendidikan SD usia 5-10 Tahun.
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                            </div>
                        </div>

                        <!-- pro -->
                        <div class="divc" id="divc">
                            <div class="float-right object-contain h-80 w-80 mt-8">
                                <img  src="{{ asset('/assets/img/orang 2.svg') }}">
                            </div>
                            <div class="text-2xl font-bold py-9">
                                <h5>Coding For Pro</h5>
                                <h3 class="text-base font-light py-4 leading-relaxed">Program untuk programer pemula yang akan<br>belajar pemprograman dasar untuk jenjang<br>pendidikan SD usia 5-10 Tahun.
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- What we make different -->
                <div class="text-2xl font-bold leading-snug flex justify-center py-8">
                        <h3>Apa Yang membuat kami berbeda</h3>
                    </div>

                
                <div class="max-w-full mx-auto sm:px-6 lg:px-8 flex justify-start justify-center drop-shadow-xl" >
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 flex justify-start ">

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-lg">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-base font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-lg">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-base font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-lg">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-base font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="max-w-full mx-auto sm:px-6 lg:px-8 flex justify-center py-16 drop-shadow-xl" >
                    <div class="grid gap-x-20 gap-y-4 grid-cols-3 flex justify-start ">

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-lg">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-base font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-lg">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-base font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>

                        <div class="flex justify-start bg-sky-200  h-36 w-96 rounded-lg">
                            <div class="float-left h-12 w-12 py-6 mx-2" >
                                <img class="mx-14" src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-1xl font-bold py-7">
                                <h5 class="mx-14 py-1" >Mentor Berpengalaman </h5>
                                <h3 class="text-base font-light leading-normal">kamu akan dilatih oleh mentor yang ramah<br>dan berpengalaman di bidangnya</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- clearr -->

                <!-- Our Event -->
                    <!-- ....  -->
                <!-- Our Event -->

                <!-- Learning Path -->
                    <!-- .... -->
                <!-- Learning Path -->

                <!-- Coba aja dulu -->
                    <!-- .... -->
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

