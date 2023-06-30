<?php
session_start();
if (!isset($_SESSION["user1"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HYT Foundation</title>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <!-- END OF CSS FILES -->
  </head>
  <body>
    <nav class="w-full fixed top-0 bg-white z-10 dark:bg-slate-900">
      <div class="container mx-auto py-5 flex items-center justify-between">
        <div class="flex items-center gap-2">
          <img class="w-50" src="./resources/header/HYT Logo.png" alt="" />              
        <div
        class="items-center small-font justify-end hidden w-full gap-2 md:flex md:w-auto md:order-1"
        id="navbar-sticky"
        >
        
        <button
        class="green-button hover:bg-green-400 text-white font-bold py-1 px-3 rounded-full"> <a href="join-us.php"> JOIN US
        </button>    
        <button
          class="black-button hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full"
        >
          DONATE
        </button>
      </div>
        <ul
          class="hidden md:flex space-x-10 text-gray-600 dark:text-gray-100 font-bold text-sm uppercase"
        >
          <li>
            <a href="index.php" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent">HOME</a>
          </li>
          <li>
            <a href="#"class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent" >ABOUT US</a>
          </li>
          <li>
            <a href="dreamacademy.php" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent">DREAM ACADEMY </a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent">CULTURE</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent">THE TEAM</a>
          </li>
          <li>
            <a href="#"class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent" >OUR THRUST</a>
          </li>
          <li>
            <a href="#"class="block py-2 pl-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent">CONTACT US</a>
          </li> 
      </ul>    
    </ul>
  </div>
  <div
    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 pl-5"
    id="navbar-sticky">  
  </div>
</nav>
</header>
              
      <!-- END OF HEADER -->
<!-- END OF HEADER -->
<div class = "flex justify-center">
  <svg width="1097" height="953" viewBox="0 0 1097 953" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_f_58_55)">
    <ellipse cx="548.5" cy="441" rx="348.5" ry="312" fill="#FFE36D"/>
    </g>
    <defs>  
    <filter id="filter0_f_58_55" x="0" y="-71" width="1097" height="1024" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
    <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_58_55"/>
    </filter>
    </defs>
    </svg>            
</div>

<div id="services" class="dark:bg-slate-900">
  <div class="container mx-auto">
    <!-- top -->
    <div class="flex flex-col gap-3 items-center">
      <h1 class="text-3xl dark:text-white">Meet our Board of Trustees</h1>   
    </div>
    <section id="features" class="bg-color-primary-light">
      <div class="container py-20">   
        <a href="heddy_bot.php" class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
          <!-- card no 1 -->    
          <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
              <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                <img src="./resources/header/Ms Heddy.png" class="h-25 mr-3"alt="Flowbite Logo"/>
                <i class="fa-solid fa-calendar-days text-4xl"></i>
              </div>
              <h3 class="text-xl font-bold py-4">Miss Heddy Yu Tabao</h3>
          </div>
              
          <div class="container py-10"> 
          <a href="ernest_bot.php" class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
          <!-- card no 2 -->
          <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
              <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                <img src="./resources/header/Atty Boyet Ernest Tabao.png" class="h-25 mr-3"alt="Flowbite Logo"/>
                <i class="fa-solid fa-chart-column text-4xl"></i>
              </div>
              <h3 class="text-xl font-bold py-4">Ernest Tabao</h3>    
          </div>

          <div class="container py-10"> 
          <a href="engr_bry.php" class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
          <!-- card no 3 -->
          <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
              <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                <img src="./resources/header/Engineer Bryan.png" class="h-25 mr-3"alt="Flowbite Logo"/>
                <i class="fa-solid fa-phone text-4xl"></i>
              </div>
              <h3 class="text-xl font-bold py-4">Engr.Bryan Tanagras</h3> 
          </div>
      
          <div class="container py-10"> 
          <a href="kristelle_bot.php" class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
          <!-- card no 4 -->
          <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
            <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
              <img src="./resources/header/Kristelle.png" class="h-25 mr-3"alt="Flowbite Logo"/>
              <i class="fa-solid fa-phone text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold py-4">Kristelle Tabao</h3> 
        </div>


        <!-- card no 5 -->
        <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
          <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
            <img src="./resources/header/Katrina Yu Tabao.png" class="h-25 mr-3"alt="Flowbite Logo"/>
            <i class="fa-solid fa-phone text-4xl"></i>
          </div>
          <h3 class="text-xl font-bold py-4">Katrina Yu Tabao</h3> 
      </div>


      <!-- card no 6 -->
      <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
          <img src="./resources/header/kassandra.png" class="h-25 mr-3"alt="Flowbite Logo"/>
          <i class="fa-solid fa-phone text-4xl"></i>
        </div>
        <h3 class="text-xl font-bold py-4">Klarisse Tabao</h3> 
    </div>

     <!-- card no 7 -->
     <div class="border-2 border-solid border-red-100 text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-red-100 ease-in duration-200">
      <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
        <img src="./resources/header/Ms Thea Tabao.png" class="h-25 mr-3"alt="Flowbite Logo"/>
        <i class="fa-solid fa-phone text-4xl"></i>
      </div>
      <h3 class="text-xl font-bold py-4">Thea Nicole Tabao</h3> 
  </div>
</section>
    

</main>
<!-- END OF DREAM ACADEMY PAGE -->
</section>

<!-- START OF FOOTER -->
<footer class = "bg-black py-2">
<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
<div class="md:flex md:justify-between">
<div class="mb-6 md:mb-0" style="margin-right: 550px; width:150px;">
  <a href="" class="flex items-center">
      <img src="./resources/header/HYT Logo.png" alt="HYT Logo" />
  </a>
  <p style="text-align: justify; width: 300px; height: 200px;" class="py-3 self-center dark:text-white">
    We are the foundation for future generation leaders 
    in which we support to enlighten and hone the youth in acquiring an adept set of business skills, 
    professionally mentoring young adults and directing them to pursue what they aspire to become.</p>
</div>

<!--QUICK LINKS-->
<div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3" style="padding-right: 100px;">
  <div>
      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Quicklinks</h2>
      <ul class="text-white">
          <li class="mb-1">
              <a href="index.php" class="hover:underline">Home</a>
          </li>
          <li class="mb-1">
              <a href="" class="hover:underline">About Us</a>
          </li>
          <li class="mb-1">
            <a href="dreamacademy.php" class="hover:underline">Dream Academy</a>
          </li>
          <li class="mb-1">
            <a href="" class="hover:underline">Our Thrust</a>
          </li>
          <li class="mb-1">
            <a href="" class="hover:underline">Contact Us</a>
          </li>
      </ul>
  </div>

  <!--CONTACT US-->
  <div style="width:200px; margin-left:190px;">
    <div>
      <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact us</h2>
      <ul class="text-white" style="text-align: right;">
        <p class = "text-right mb-1">Suite 1004 Atlanta Center, Annapolis St., San Juan City, Metro Manila, Philippines</p>
        <p class = "text-right mb-1">(02) 835 90648 • (63) 961 495 8696 • (63) 905 102 4246</p>
        <p class= "text-right mb-1">
          <table style="width: 100%;">
            <tr>
              <td style="width: 50%; padding-left: 40px;">
                <!-- email icon-->
                <svg style="width: auto; height: 1rem;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2"/>
                </svg>
              </td>
              <td>
                hello@brains.asia
              </td>
            </tr>
          </table>
        </p>
      </ul>
    </div>
  </div>

  <!--SOCIAL MEDIA-->
  <br><br>
  <div>
    <div class = "-mb-6">
      <table class="footer-social-media-icons">
        <tr>
          <td>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white" style="padding: 0 0 0 0;">Social Media</h2>
          </td>

          <td>
            <!-- facebook icon -->
            <svg style="padding-right: 10px;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
              <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
            </svg>
          </td>

          <td>
            <!-- twitter icon-->
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
              <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
            </svg>
          </td>

          <td>
            <!--youtube icon -->
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
              <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/>
            </svg>
          </td>

          <td>

          </td>
        </tr>
      </table>
      </div>
  </div>
</div>
</div>
</div>

<!-- red shape -->
<div class = "flex justify-center object-bottom">
<svg width="1206" height="295" viewBox="0 0 1206 295" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_f_58_100)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1005.87 366H200.132C273.395 267.651 426.274 200 603 200C779.726 200 932.606 267.651 1005.87 366Z" fill="#F15932"/>
</g>
<defs>
<filter id="filter0_f_58_100" x="0.132324" y="0" width="1205.74" height="566" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_58_100"/>
</filter>
</defs>
</svg>
</div>

</footer>
<!-- END OF FOOTER -->

<section></section>
</body>
</html>