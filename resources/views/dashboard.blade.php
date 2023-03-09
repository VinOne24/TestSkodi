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

                <div class="tabs-menu">
                    <ul x-ref="tabs">
                        <li class="btn active" @click="selectTab($event, 'a')" >Kids</li>
                        <li class="btn" @click="selectTab($event, 'b')">Junior</li>
                        <li class="btn" @click="selectTab($event, 'c')">Professional</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
