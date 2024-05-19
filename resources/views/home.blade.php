<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header Start -->
    <header class="flex flex-wrap justify-between  w-full bg-[#16263F] fixed">
      <div class="container">
          <div class="flex items-center justify-between relative">
              <div class="px-4">
                  <a href="#home" class="font-bold text-lg text-primary block py-6 text-white">vitranurassidiqi</a>
              </div>
              <div class="flex items-center px-4">
                  <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                      <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                      <span class="hamburger-line transition duration-300 ease-in-out"></span>
                      <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                  </button>
              
                  <nav id="nav-menu" class="hidden  absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none text-white">
                      <ul class="block lg:flex">
                          <li class="group">
                              <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                          </li>
                          <li class="group">
                              <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
                          </li>
                          <li class="group">
                              <a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                          </li>
                          <li class="group">
                              <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                          </li>
                          <li class="group">
                            <a href="/login" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Login</a>
                        </li>
                          <!-- <li>
                              <div clas="flex">
                                  <span class="mr-2 text-sm text-slate-500">light</span>
                                  <span class="mr-2 text-sm text-slate-500">dark</span>
                              </div>
                          </li> -->
                      </ul>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- Header End -->
    <section class=" bg-cover bg-center  h-[650px]" id="home" style="background-image: url('https://i.ibb.co/3hFvcC1/Whats-App-Image-2024-03-18-at-14-55-1.png');">
        <div class="pt-60 inset-0 flex flex-col justify-center items-center text-center">
          <p class="text-3xl text-white font-bold">HELLO, I AM</p>
          <p class="text-7xl font-bold bg-gradient-to-r from-purple-600 to-red-600 bg-clip-text text-transparent mb-3">VITRA NUR</p>
          <p class="text-white font-inter font-bold text-5xl md:text-6xl lg:text-7xl mb-3">ASSIDIQI</p>
          <p class="text-xl text-white ">STUDENT OF POLITEKNIK HARAPAN BERSAMA TEGAL</p>
        </div>       
    </section>    
    <section class="bg-white bg-cover bg-center h-[650px] flex justify-center items-center" id="about">
      <div class="text-right mr-20 ml-5">
        <p class="font-bold text-2xl"> VITRA NUR </p>
        <p class="font-bold text-2xl"> ASSIDIQI </p>
        <p class="text-red-600 text-1xl"> COMPUTER ENGINEERING </p>
        <p class=""> Saya adalah seorang mahasiswa di Politeknik Harapan Bersama Tegal, saya mengambil jurusan D3 Teknik Komputer, Semester 4.</p>
      </div>
      <div class="mx-auto">
        <img src="https://i.ibb.co/nMyBwCG/Whats-App-Image-2024-03-18-at-14-55-1.png" alt="Gambar" class="block w-full">
      </div>
      <div class="text-black block ml-44 mt-12">
        <div class="ml-5 mr-20 mb-5 ">
          <p class="text-center">NETWORKING</p>
          <div class="bg-gradient-to-r from-[#F113E8] to-[#DD0F0F] text-black w-[300px] mt-3 rounded-full text-center text-base ">75%</div>
        </div>
        <div>
        <div class="ml-5 mr-20 mb-5 ">
          <p class="text-center">PROGRAMING</p>
          <div class="bg-gradient-to-r from-[#F113E8] to-[#DD0F0F] text-black w-[300px] mt-3 rounded-full text-center text-base ">65%</div>
        </div>
        <div class="ml-5 mr-20 mb-5 ">
          <p class="text-center">DESAIN</p>
          <div class="bg-gradient-to-r from-[#F113E8] to-[#DD0F0F] text-black w-[300px] mt-3 rounded-full text-center text-base ">65%</div>
        </div>
        <div class="ml-5 mr-20 mb-5 ">
          <p class="text-center">OFFICE</p>
          <div class="bg-gradient-to-r from-[#F113E8] to-[#DD0F0F] text-black w-[300px] mt-3 rounded-full text-center text-base ">85%</div>
        </div>
      </div>
    </section>
    <section class="bg-[#D9D9D9] bg-cover bg-center h-[150px] flex justify-center items-center" id="portfolio">
      <div class="text-center space-x-2 flex flex-wrap">
        <a href="">
          <img src="https://i.ibb.co/nCzcybk/Vector.png" alt="" class="w-[40px] py-2 ml-3">
        </a>
        <span class="text-black py-3">085866399979</span>
        <a href="">
          <img src="https://i.ibb.co/k8jNhL0/Vector-1.png" alt="" class="w-[40px] py-2 ml-3">
        </a>
        <span class="text-black py-3">Jl. Blimbing no.8 Tegal, Jawa Tengah Indonesia</span>
        <a href="">
          <img src="https://i.ibb.co/FY7GKSr/clarity-email-solid.png" alt="" class="w-[40px] py-2 ml-3">
        </a>
        <span class="text-black py-3">vitra.assidik@gmail.com</span>
      </div>
    </section>
    <section class="bg-white bg-cover bg-center h-[400px] flex flex-wrap justify-center items-center" id="portfolio">
      <div class=" flex flex-col text-center mb-10">
        <h1 class="font-bold text-2xl">PORTFOLIO</h1>
        <h1 class="text-1xl">Ecommerce Web Development</h1>
      </div>
      <div class="grid grid-cols-5 grid-rows-5 gap-4 justify-center items-center ml-10">
        <div><img src="https://i.ibb.co/CvVNDrR/FRONT-1.png" alt="" class="max-w-[1200px] h-[300px]"></div>
        <div class="ml-96"><img src="https://i.ibb.co/S3hhMgt/Body-1.png" alt="" class="max-w-[1200px] h-[300px]"></div>
        <div class="row-start-2"><img src="https://i.ibb.co/TmQRszn/Product-1.png" alt="" class="max-w-[1200px] h-[300px]"></div>
        <div class="row-start-2 ml-96"><img src="https://i.ibb.co/pzgGM9x/Footer-1.png" alt="" class="max-w-[1200px] h-[300px]"></div>
      </div>  
    </section>
    <section class="bg-[#16263F] py-12 mt-96" id="contact">
      <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center text-white">Contact Us</h2>
        <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf  
        <div class="flex flex-col">
            <label for="nama" class="block text-sm font-medium text-white">Nama</label>
            <input type="text" id="" name="nama" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" value="{{ (isset($tamu)) ? $tamu->nama:"" }}">
          </div>
          <div class="flex flex-col">
            <label for="phone" class="block text-sm font-medium text-white">No. HP</label>
            <input type="tel" name="nohp" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" value="{{ (isset($tamu)) ? $tamu->nohp:"" }}"> 
          </div>
          <div class="flex flex-col">
            <label for="email" class="block text-sm font-medium text-white">Email</label>
            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" value="{{ (isset($tamu)) ? $tamu->email:"" }}">
          </div>
          <div class="col-span-2 flex flex-col">
            <label for="message" class="block text-sm font-medium text-white">Pesan</label>
            <textarea id="" name="pesan" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" value="{{ (isset($tamu)) ? $tamu->pesan:"" }}"></textarea>
          </div>
          <div class="col-span-2">
            <button type="submit" class="w-full bg-gradient-to-r from-[#6100FF] to-[#D300BE] text-white py-3 px-6 rounded-md hover:from-indigo-500 hover:to-indigo-400 focus:outline-none focus:bg-indigo-600">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </section>      
</body>
</html>