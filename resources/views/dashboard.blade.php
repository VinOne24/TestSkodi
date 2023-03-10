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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    

                <div class="grid grid-cols-2 gap-2">
                    <div class="float-left ">
                    <img  src="{{ asset('/assets/img/orang.png') }}">
                    </div>
                    <div class="text-5xl font-bold font-Poppins py-9 leading-snug">
                        <h5>Naikkan potensi digital <br>skill untuk masa depan <br>lebih baik</br></h5>
                        <h3 class="text-base font-poppins font-light py-9 leading-normal">Tingkatkan kemampuan digital kamu untuk <br>Indonesia mulai gerakan<br>pendidikan SD usia 5-10 Tahun
                        <span><h3 class="text-base font-poppins font-bold ">#digitalisasibangsa</h3></span></h3>
                    </div>
                </div>

<<<<<<< Updated upstream
                <div class="side-menu">
                    <ul x-ref="tabs">
                        <li class="btn active" @click="selectTab($event, 'a')" >Kids</li>
                        <li class="btn" @click="selectTab($event, 'b')">Junior</li>
                        <li class="btn" @click="selectTab($event, 'c')">Professional</li>
                    </ul>
                </div>                

=======
                <!-- bates -->

                <div class="main_container py-20">
                    <div class="text-2xl font-bold font-Poppins leading-snug flex justify-center h-20">
                        <h3>Program dan kelas berdasarkan kemampuan</h3>
                        </div>
                            <div class="flex justify-between bg-gray-200 rounded-full h-8 mb" >

                                <button class="bg-transparent hover:bg-blue-500 font-bold font-Poppins  h-8 px-24 rounded-full" id="btn_diva">
                                Kids
                                </button>
                                <button class="bg-transparent hover:bg-blue-500 font-bold font-Poppins h-8 px-24 rounded-full" id="btn_divb">
                                    Junior 
                                </button>
                                
                                <button class="bg-transparent hover:bg-blue-500 font-bold font-Poppins h-8 px-20 rounded-full" id="btn_divc">
                                    Professional
                                </button>
                            </div>
                        <!-- <div class="box-border h-10 p-4 border-1 border-gray-400 bg-gray-200 rounded-full">
                        </div> -->
                    
                    <div class="blocks">
                        <div class="diva" id="diva">
                            <div class="float-right ">
                            <img  src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                                <div class="text-5xl font-bold font-Poppins py-9 leading-snug">
                                <h5>Coding For Kids</h5>
                                <h3 class="text-base font-poppins font-light py-2 leading-normal">Program untuk programer pemula yang akan<br>belajar pemprograman dasar untuk jenjang<br>pendidikan SD usia 5-10 Tahun.
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                                </div>
                        </div>
                        <div class="divb" id="divb">
                            <div class="float-right">
                                <img  src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                            <div class="text-5xl font-bold font-Poppins py-9 leading-snug">
                            <h5>Naikkan potensi digital <br>skill untuk masa depan <br>lebih baik</br></h5>
                            <h3 class="text-base font-poppins font-light py-9 leading-normal">Tingkatkan kemampuan digital kamu untuk <br>Indonesia mulai gerakan<br>
                            <span><h3 class="text-base font-poppins font-bold ">#digitalisasibangsa</h3></span></h3>
                            </div>
                        </div>

                        <div class="divc" id="divc">
                            <div class="float-right ">
                            <img  src="{{ asset('/assets/img/orang.png') }}">
                            </div>
                                <div class="text-5xl font-bold font-Poppins py-9 leading-snug">
                                <h5>Coding For Kids</h5>
                                <h3 class="text-base font-poppins font-light py-2 leading-normal">Program untuk programer pemula yang akan<br>belajar pemprograman dasar untuk jenjang<br>pendidikan SD usia 5-10 Tahun.
                                <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white mt-5 h-8 px-8 border border-blue-500 hover:border-transparent rounded-full">Daftar sekarang</button></h3>
                                </div>
                        </div>

                    </div>
                </div>

>>>>>>> Stashed changes
            </div>
        </div>
    </div>

<<<<<<< Updated upstream
=======
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
>>>>>>> Stashed changes
</x-app-layout>


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

