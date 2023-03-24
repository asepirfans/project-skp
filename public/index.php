<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap'); </style>
    <script type="text/javascript" src="../jquery.min.js"></script>
    <title>Document</title>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ceksensor").load("../public/ceksensor.php");
                $("#sensor1").load("../public/tbsensor.php");
                $("#cekpompa").load("../public/pompa.php");
                $("#ceklembab").load("../public/plant.php");                
                $("#keterangan").load("../public/keterangan.php");    
                $("#grafik").load("../public/grafik.php");          
            }, 1000);
        });
    </script>
    <!-- <script type="text/javascript">
        var refreshid = setInterval(function(){
                       
        }, 1000);
    </script> -->
</head>
<body>
    <!-- start Navbar -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 con-nav">
        <div class="container ">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="block font-bold text-lg text-emerald-500 py-4">ProjectIOT</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 origin-top-left"></span>
                        <span class="hamburger-line transition duration-300"></span>
                        <span class="hamburger-line transition duration-300 origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full
                    lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none ">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="./index.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3 ">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="./monitoring.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Monitoring</a>
                            </li>
                            <li class="group">
                                <a href="./tabel.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Tabel</a>
                            </li>
                            <li class="group">
                                <a href="./gf.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Grafik</a>
                            </li>
                            <li class="group">
                                <a href="#group" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Group</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Navbar -->
    <!-- Start Hero -->
    <section id="home" class="pt-36 lg:pt-20 bg-gradient-to-tr from-white to-emerald-200">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2 ">
                    <h1 class="text-base text-emerald-500 font-semibold md:text-xl lg:text-2xl">Hallo semua 👋 Selamat datang di WebAps <span class="block text-6xl text-slate-900 font-bold mt-1 spn-srm">SPOT-PID</span> </h1>
                    <p class="font-medium mt-1 text-gray-800 tracking-wide txt-p"></p>
                    <p class=" mt-1 mb-5 font-semibold text-gray-800 tracking-wide" data-aos="fade-right" data-aos-delay="2500">#MenyiramItuAsyik</p>
                    <a href="./monitoring.php" class="btn-gs text-base font-semibold text-white py-3 px-8 bg-emerald-700 rounded-full hover:shadow-lg hover:opacity-80 transition duration-30 ease-in-out " data-aos="fade-right" data-aos-delay="2600">Gassin!</a>
                    
                    <!-- titik titik -->
                    <div class="hidden lg:flex lg:flex-row">
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2 " data-aos="fade-down">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-down" data-aos-delay="100">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-down" data-aos-delay="200">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-down" data-aos-delay="300">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="400">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="500">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="600">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="700">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="800">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="900">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="1000">
                        </div>
                        <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2"data-aos="fade-down" data-aos-delay="1100">
                        </div>

                    </div>
                    <!-- titik titik -->
                </div>
                <div class="w-full self-end px-4 lg:w-1/2 lg:my-5 ">
                    <div class="relative   lg:right-0 ">
                        <div class="hidden lg:flex lg:flex-row ">
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="100">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="200">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="300">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="400">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="500">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="600">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="700">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="800">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="900">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="1000">
                            </div>
                            <div class="my-10 h-2 w-10 rounded-lg bg-emerald-700  ml-2" data-aos="fade-up" data-aos-delay="1100">
                            </div>
                            
                        </div>
                        <img src="../img/tumbuhan.png" alt="tumbuhan" class="z-50 max-w-full mx-auto mb-16 img-tbh">
                        <span class="absolute -z-10 -bottom-0  left-1/2 -translate-x-1/2">
                            <svg width="300" height="300" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#A7F0BA" d="M60.4,-50.2C73.7,-31.4,76.9,-6.6,71.9,17C67,40.5,54,62.8,33.8,73.9C13.7,85,-13.6,85,-35,74.1C-56.4,63.2,-72,41.6,-72.8,21.4C-73.6,1.2,-59.6,-17.6,-45,-36.7C-30.4,-55.7,-15.2,-75,4.2,-78.3C23.5,-81.6,47.1,-68.9,60.4,-50.2Z" transform="translate(100 100) scale(0.9)" />
                              </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- End Hero -->


    <section id="monitoring" class="pt-16 pb-16 bg-cover bg-center" style="background-image:url(../img/hijau.jpg);">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <h1 class="font-bold text-4xl text-center my-5 text-white">Monitoring</h1>
                </div>

                <div class="w-full self-center lg:w-1/2">
                    <div class="p-4 mb-5 ">    
                        <div class=" my-5 mx-auto w-auto h-auto rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                            <div class="">
                                <h1 class="w-full text-center font-semibold text-3xl group-hover:text-white">Visualisasi</h1>
                            </div>
                        </div>
                        <div class=" mx-auto w-full lg:w-full  rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                            <div id="ceklembab">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full self-end lg:w-1/2">
                    <div class="px-4 py-10 w-full flex flex-wrap justify-center">
                        <div class="p-4 mb-5 lg:w-1/2 " data-aos="fade-up" data-aos-duration="1000">
                            <div class=" mx-auto w-44 h-44 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Kelembaban
                            </h3>
                            <p class="font-bold text-center my-4 text-[50px] text-slate-900 group-hover:text-white"><span id="ceksensor"></span></p>
                            </div>
                        </div>
                        <div class="p-4 mb-5 lg:w-1/2 " data-aos="fade-up" data-aos-duration="1000">
                            <div class=" mx-auto w-44 h-44 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Pompa
                            </h3>
                            <p class="font-bold text-center my-4 text-[50px] text-slate-900 group-hover:text-white"><span id="cekpompa"></span></p>
                            </div>
                        </div>
                        <div class="p-4 mb-5 lg:w-1/2 " data-aos="fade-up" data-aos-duration="1000">
                            <div class=" mx-auto w-full h-full rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class=" text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Keterangan
                            </h3>
                            <p class="font-bold text-center text-[50px] text-slate-900 group-hover:text-white"><span id="keterangan"></span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Tabel -->
    <section id="tabel" class="pt-16 pb-16 ">
        <div class="container">
            <div class="w-full p-4">
                <h1 class="font-bold text-4xl text-center my-5">Tabel Monitoring</h1>
            </div>
            <div class=" overflow-auto rounded-lg shadow h-96 w-auto lg:w-[850px] mx-auto" data-aos="fade-down">
                <div id="sensor1"></div>
            </div>
        </div>
        </div>
    </section>  
    
    <!-- <form>
        <input type="submit" name="hapus" value="Hapus Data">
    </form>  -->
    <!-- Akhir Tabel -->

    <!-- Grafik -->
   <section id="grafik" class="pt-16 pb-16 bg-emerald-800 " >
   
   </section>
    <!-- Akhir Grafik -->

    <!-- My Group -->
   <section id="group" class="pt-16 pb-16">
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <h1 class="font-bold text-4xl text-center my-5">Our Group</h1>
                </div>
                <div class="p-3 mb-5 lg:w-1/3 ">
                    <div class=" mx-auto  rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                        <img src="../img/kel/29.png" alt="">
                        <h3 class="text-center text-xl font-semibold py-3 text-slate-800 group-hover:text-white">Asep Irfan Setiawan</h3>
                     </div>
                </div>
                <div class="p-3 mb-5 lg:w-1/3 ">
                    <div class=" mx-auto  rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                       <img src="../img/kel/28.png" alt="">
                       <h3 class="text-center text-xl font-semibold py-3 text-slate-800 group-hover:text-white">Ibnu Rahman</h3>
                     </div>
                </div>
                <div class="p-3 mb-5 lg:w-1/3 ">
                    <div class=" mx-auto  rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                       <img src="../img/kel/27.png" alt="">
                       <h3 class="text-center text-xl font-semibold py-3 text-slate-800 group-hover:text-white">Salma Khoirunnisa</h3>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!-- Akhir -->
    <footer class="pt-12 pb-12 bg-emerald-800">
        <div class="container">
            <div class="w-full text-center text-white">
                <h1>Created by Awan</h1>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.txt-p', {duration:2, delay:1.5, text:'"Mari kita berkontribusi dalam menjaga kelestarian lingkungan dengan menyiram tanaman-tanaman yang ada di sekitar kita. Jangan lupa, tanaman juga membutuhkan air untuk tumbuh dan berkembang dengan baik. Ayo, mari kita sama-sama menjaga keindahan alam!"'});
        gsap.from('.img-tbh', {duration:1, y:-100, opacity:0, ease:'bounce'});
        gsap.from('.con-nav', {duration:1.5, y:'-100%', opacity:0, ease:'bounce'});
        gsap.from('.spn-srm', {duration:1.5, x:-100, opacity:0, delay:0.5, ease:'back'});
    </script>
    <script src="./js/script.js"></script>

</body>
</html>


    <!-- <section id="monitoring" class="pt-16 pb-16 bg-emerald-200">
        <div class="container">
            <div class="w-full px-4">
                <h1 class="font-bold text-4xl text-center my-5">Monitoring</h1>
            </div>
            <div class="px-4 py-10 w-full flex flex-wrap justify-center">
                <div class="p-4 mb-5 lg:w-1/3 ">
                    <div class=" mx-auto w-60 h-60 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                    <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Kelembaban
                    </h3>
                    <p class="font-bold text-center my-8 text-[70px] text-slate-900 group-hover:text-white"> <span id="ceksensor"></span> </p>
                    </div>
                </div>
                <div class="p-4 mb-5 lg:w-1/3 ">
                    <div class=" mx-auto w-60 h-60 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                    <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Pompa
                    </h3>
                    <p class="font-bold text-center my-8 text-[70px] text-slate-900 group-hover:text-white"><span id="cekpompa"></span></p>
                    </div>
                </div>
                <div class="p-4 mb-5 lg:w-1/2 ">
                    <div class=" mx-auto  rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                        <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Plant
                        </h3>
                        <p class="font-bold text-center my-8 text-[70px] text-slate-900 group-hover:text-white"><span id="ceklembab"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->