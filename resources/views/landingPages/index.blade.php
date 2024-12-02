@include('header')
{{--  --}}

<main>
    <section id="heroSection" class=" bg-[url('../../public/assets/bgl.jpg')] w-screen h-screen relative bg-cover before:w-screen before:h-screen before:bg-black/50 before:block before:absolute after:content-[''] grid place-center md:flex md:justify-around items-center">


        <div id="leftHero" class="relative p-2 text-center md:text-left md:p-10 text-white w-full font-bold drop-shadow-xl md:order-1 order-2 md:mt-10 -mt-56 md:mt-0">
            <h1 class="text-6xl">
                    AZKAPRINT
            </h1>
            <p class="text-justify pt-4">
                kami percaya bahwa kualitas  menciptakan kesan pertama yang tak terlupakan. Kami menawarkan  percetakan digital berkualitas untuk stempel, alat tulis kantor, undangan, dan kop surat dan lainnya. Layanan cepat, harga bersaing, dan hasil cetakan yang memuaskan. Kunjungi kami dan wujudkan ide Anda!
            </p>

            <button  class="py-1 px-10 border border-yellow-500 text-yellow-500 rounded-md md:mt-24 shadow-lg mt-10">
                Jelajahi
            </button>
        </div>

        <div id="rightHero" class="relative w-full flex justify-center order-1 md:order-2 opacity-60 md:opacity-100">
            <h1 class="text-white">
                <img src="{{ 'assets/hero.png' }}" alt="" class="blur-xs brightness-75 shadow-md ">
            </h1>
        </div>


    </section>
</main>

{{--  --}}
@include('footer')
