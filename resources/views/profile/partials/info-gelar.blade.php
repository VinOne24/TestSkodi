<section>
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
<div class="main_container ">
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

                    
                        <div class="diva" id="diva">
                            <div class="h-56 grid grid-cols-6 gap-4 content-start">
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                            </div>
                        </div>


                        <div class="divb" id="divb">
                        <div class="h-56 grid grid-cols-6 gap-4 content-start">
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
                            </div>
                        </div>

                        <div class="divc" id="divc">
                        <div class="h-56 grid grid-cols-6 gap-4 content-start">
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/orang 1.svg') }}">
                                </div>
                                <div class="float-left object-contain h-20 w-20 mt-8">
                                    <img  src="{{ asset('/assets/img/junior.png') }}">
                                </div>
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
</section>