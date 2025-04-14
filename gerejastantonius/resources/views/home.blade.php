<x-template>
    <x-slot:title>{{$title}}</x-slot:title>  
</x-template>

<article>
    <x-gallery></x-gallery>
    <x-about1></x-about1>

    <div class="h-[92vh] bg-red-300 hover:bg-blue-400 transition duration-1000 grid grid-rows-10 gap-2">
        <h1 class="text-center text-3xl">Jadwal Misa</h1>
        <div class="row-span-6 flex justify-center">
            <img class="h-[50vh]" src="https://penakatolik.com/wp-content/uploads/2022/07/200722-Misa-Ritus-Latin-scaled.jpeg" alt="">
        </div>
        <div class="grid grid-cols-4">
            <div class="">
                <h2 style="font-family: Dancing Script, cursive;" class="text-2xl">Misa/Ibadat Mingguan</h2>
                <h3>Hari Minggu Pukul 09:00</h3>
            </div>
    
            <div>
                <h2 style="font-family: Dancing Script, cursive;" class="text-2xl">Ibadat Keluarga</h2>
                <h3>Hari Kamis Pukul 18:00</h3>
            </div>
    
            <div>
                <h2 style="font-family: Dancing Script, cursive;" class="text-2xl">Ibadat Jalan Salib</h2>
                <h3>Tiap Jumat pada Bulan Prapaskah Pukul 17:00</h3>
            </div>
    
            <div>
                <h2 style="font-family: Dancing Script, cursive;" class="text-2xl">Jadwal Khusus</h2>
                <h3>???</h3>
            </div>
        </div>
    </div>


    <div class="h-[92vh] bg-red-300 hover:bg-blue-400 transition duration-1000" >
        <h1 class="grid-col-9 text-center mb-20 text-3xl">Our Media Social</h1>   
        <div class="w- flex flex-warp gap-40 justify-center">
            <div><i class="fa-brands fa-whatsapp text-9xl"></i></i><h1 class="text-3xl">Whatsapp</h1></div>
            <div ><i class="fa-brands fa-facebook text-9xl"></i><h1 class="text-3xl">Facebook</h1></div>
            <div><i class="fa-brands fa-instagram text-9xl"></i><h1 class="text-3xl">Instagram</h1></div>
        </div>
    </div>
    

{{-- @foreach ($datas as $data)
    <x-card>

    </x-card>
@endforeach --}}

    <div class='flex bg-red-500 justify-center py-10 px-5'>
        <div class="w-48/100">
            <img class="object-fill object-cover" src='https://tamanmini.com/taman_jelajah_indonesia/wp-content/uploads/2023/09/GEREJA-KRISTEN-PROTESTAN-HALELUYA-scaled.jpg' alt="gereja tampak depan">
        </div>
        <div class="w-4/100 size-14 grow-2">
        </div>
        <div class="w-48/100">
            <p class="text-4xl">"{{$motto}}"</p> 
        </div>
    </div>
        
</article>