<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
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
</x-app-layout>
