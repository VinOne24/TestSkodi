<x-app-layout>

    
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
                        <h3 class="text-base font-poppins font-light py-9 leading-normal">Tingkatkan kemampuan digital kamu untuk <br>Indonesia mulai gerakan<br>
                        <span><h3 class="text-base font-poppins font-bold ">#digitalisasibangsa</h3></span></h3>
                    </div>
                </div>

                <div class="side-menu">
                    <ul x-ref="tabs">
                        <li class="btn active" @click="selectTab($event, 'a')" >Kids</li>
                        <li class="btn" @click="selectTab($event, 'b')">Junior</li>
                        <li class="btn" @click="selectTab($event, 'c')">Professional</li>
                    </ul>
                </div>


                <div class="flex justify-center">
                    <button id="dark-mode-toggle" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white">
                        Click This
                    </button>
                </div>
                
                


            </div>
        </div>
    </div>

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

