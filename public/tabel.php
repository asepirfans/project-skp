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
</head>
<body>
    <!-- start Navbar -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
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
                                <a href="./index.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Beranda</a>
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

    <!-- Tabel -->
    <section id="tabel" class="pt-16 pb-16 ">
        <div class="container">
            <div class="w-full mx-auto">
                <h1 class="font-bold text-4xl text-center my-5">Tabel Monitoring</h1>
            </div>
            <form action="" method="post" class="mx-auto relative" data-aos="fade-right" data-aos-duration="1000">
                <input type="text" name="keyword" size="20" autofocus placeholder="Search" autocomplete="off" id="keyword" class="border-2 rounded-lg p-1">
                <a href="../cetak.php" target="_blank"><img src="../img/pdf.png" alt="" width="120px" class="ml-[230px] -mt-9 absolute" ></a>
            </form>
            <br>
            <div class=" overflow-auto rounded-lg shadow h-96 w-full " id="container" data-aos="fade-down" data-aos-duration="1000">
                <div id="sensor1"></div>
            </div>
        </div>
    </section> 

    <!-- <script>
        const searchInput = document.getElementById('search');
        const rows = document.querySelectorAll('tbody tr');

        searchInput.addEventListener('keyup', function(event){
            const r = event.target.value.toLowerCase();
            rows.forEach((row) => {
                row.querySelector('td').textContent.toLowerCase().startsWith(r) ?  (row.style.display = 'table-row') : (row.style.display = 'none');
            });
        });
    </script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
    <script src="./js/script1.js"></script>
    <script src="./js/script.js"></script>

    


</body>
</html>