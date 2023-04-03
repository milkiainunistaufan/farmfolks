<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
{{-- header --}}
<header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="px-11 py-3">
            <a href="#" class="font-bold text-xl text-lime-500 block py-6">FARMFOKLS</a>
        </div>
        <nav class="absolute top-19 left-0 w-full bg-slate-50 justify-start">
            <div class="justify-center items-center text-center">
                <div class="px-4 py-3 block">
                    <ul class="block lg:flex items-center justify-center">
                        <li class="group">
                            <a href="" class="text-base text-slate-400 py-2 px-8 flex group-hover:text-slate-900">Home</a>
                        </li>
                        <li class="group">
                            <a href="" class="text-base text-slate-400 py-2 px-8 flex group-hover:text-slate-900">News</a>
                        </li>
                        <li class="group">
                            <a href="" class="text-base text-slate-400 py-2 px-8 flex group-hover:text-slate-900">Article</a>
                        </li>
                        <li class="group">
                            <a href="" class="text-base text-slate-400 py-2 px-8 flex group-hover:text-slate-900">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
{{-- header end --}}

{{-- hero --}}
<section id="hero" class="pt-32 pb-1 bg-center bg-no-repeat " style="background-image: url('/img/header/awal.jpg'); background-size:100%">
    {{-- <img src="/img/header/awal.jpg" class="absolute bg-cover w-full "> --}}
    <div class="container">
        <div class="flex mt-32 mb-20 mx-12 pt-8 bg-white/50 w-1/3 rounded-lg">
            <div class="w-full self-center px-9">
                <h1 class="text-base font-semibold text-primary md:text-xl">Welcome to<span class="block font-bold text-dark text-4xl mt-1 text-lime-900 lg:text-5xl">FARMFOLKS</span></h1>
                <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Farm & <span class="text-dark">Plantation</span></h2>
                <p class="font-medium text-secondary mb-10 leading-relaxed">Great choices <span class="text-dark font-bold">Right</span></p>
            </div>
        </div>
    </div>
</section>
{{-- end hero --}}
{{-- news Section Start --}}
<section id="news" class="pt-16 pb-10 bg-slate-100">
    <div class="container mx-auto">
        <div class="w-full px-16">
            <div class="max-w-xl mb-3">
                <h2 class="font-bold text-dark text-3xl">Berita Terkini</h2>
            </div>
        </div>

        <div class=" px-11 flex flex-wrap justify-center">
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                    <img src="/img/blog/1.jpeg" alt="makan buah" class="w-full">
                    <div class="py-8 px-6">
                        <h3>
                            <a href="#" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Buah Merupakan Vitamin Organik Untuk Tubuh</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, ea!</p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                    <img src="/img/blog/2.jpeg" alt="makan buah" class="w-full">
                    <div class="py-8 px-6">
                        <h3>
                            <a href="#" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Melon Hijau</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, ea!</p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                    <img src="/img/blog/3.jpeg" alt="makan buah" class="w-full">
                    <div class="py-8 px-6">
                        <h3>
                            <a href="#" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Buah Sayur Telur dan Jamur</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, ea!</p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- news Section End --}}
{{-- news Section Start --}}
<section id="article" class="pt-16 pb-10">
    <div class="container mx-auto">
        <div class="w-full px-16">
            <div class="max-w-xl mb-3">
                <h2 class="font-bold text-dark text-3xl">Article</h2>
            </div>
        </div>

        <div class=" px-11 flex flex-wrap justify-center">
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                    <img src="/img/blog/1.jpeg" alt="makan buah" class="w-full">
                    <div class="py-8 px-6">
                        <h3>
                            <a href="#" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Buah Merupakan Vitamin Organik Untuk Tubuh</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, ea!</p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                    <img src="/img/blog/2.jpeg" alt="makan buah" class="w-full">
                    <div class="py-8 px-6">
                        <h3>
                            <a href="#" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Melon Hijau</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, ea!</p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                    <img src="/img/blog/3.jpeg" alt="makan buah" class="w-full">
                    <div class="py-8 px-6">
                        <h3>
                            <a href="#" class="block  mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Buah Sayur Telur dan Jamur</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, ea!</p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- news Section End --}}
{{-- video --}}
<section id="video" class="pt-28 pb-10 bg-gray-800">
    <div class="container">
        <div class="w-full px-16">
            <div class="max-w-xl mx-auto mb-10 text-center">
                <h2 class="font-bold text-white text-3xl">Our Videos</h2>
            </div>
        </div>
        <div class="w-full px-20 items-center text-center" >
            <div class="">
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/8XijFh1LmXI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
{{-- end video --}}
</body>
</html>