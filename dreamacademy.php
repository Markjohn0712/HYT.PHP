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
    <link href="/dist/output.css" rel="stylesheet">
    <!-- END OF CSS FILES -->
  </head>
  <body>
    <section class="section-hero">
      <!-- START OF HEADER -->
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
              class="black-button hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-full">
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
                <a href="#" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent">CULTURE</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent">THE TEAM</a>
              </li>
              <li>
                <a href="boardoftrustees.php"class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent" >OUR THRUST</a>
              </li>
              <li>
                <a href="#"class="block py-2 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent">CONTACT US</a>
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

       
<!-- END OF HEADER -->
<main>

  <br><br>


  <table class = "dreamacademy container mx-auto">
    <tr>
      <td>
        <p class="text-8xl text-gray-900 font-extrabold text-center py-10">Dream Academy</p>
      </td>
    </tr>

    <tr>
      <td>
        <p class="dream-desc font-bold text-center mx-auto">
          Dream Academy is a platform developed through the partnership of Helping Youth Transcend Foundation
          and the Klassic Solutions Inc. to assist young people in developing their abilities, talents,
          and gaining experience in preparation for their future careers.
        </p>
      </td>
    </tr>
  </table>

  <br><br><br><br><br>

  <!-- training part text-->
  <table class="training-table mx-auto">
    <tr>
      <td class="text-4xl text-gray-900 font-bold">
        <div class = "training container">
          Training Program and Objectives
        </div>
      </td>
    </tr>

    <tr>
      <td><br><br></td>
    </tr>

    <tr>
      <td class="text-2xl text-gray-900 font-bold">
        <div class = "trainingprogram container">
          Training Program
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div style="width:800px; text-align:justify; padding-top:10px;">
          The Dream Academy Training Program consists of working as a trainee mainly under the Klassic Group of Companies and trusted partners and sponsors. 
          It is a multi-industry company that helps young people to be flexible, adapt, grow and learn successfully.
        </div>
      </td>
    </tr>

    <tr>
      <td><br><br></td>
    </tr>

    <tr>
      <td class="text-2xl text-gray-900 font-bold">
        <div class = "trainingobjectives container">
          Training Objectives
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class = "trainingobjectives container" style="text-align:justify; width:800px; float:right; padding-top:10px;">
          The Dream Academy is dedicated to assisting the younger generation in thriving, developing, and transforming into their best selves. 
          Since the organization is diversified, with numerous enterprises in different industries, the youth will develop into well-rounded individuals. 
          HYT Foundation Inc. desires young people to transcend and preserve this generation while pursuing their aspirations.
        </div>
      </td>
    </tr>
  </table>

  <br><br><br><br><br>
  <!-- UNITS' IMAGES AND DUTIES -->
  <table class="units mx-auto">
    <tr>
      <td class="unit-img px-7" rowspan="2">
        <img src="./resources/header/creative_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      </td>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Creative Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc;">
          <li>Logo</li>
          <li>Animation</li>
          <li>Brand sheet</li>
          <li>Social media posts</li>
          <li>Portfolio</li>
          <li>Pitch deck design</li>
          <li>Video editing</li>
          <li>Photo editing</li>
          <li>Mock-up for websites and mobile applications</li>
        </ul>
      </td>
    </tr>

    <tr>
      <td><br><br><br></td>
    </tr>

    <tr>
      <td class="unit-img px-7" rowspan="2">
      <img src="./resources/header/hr_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Human Resource Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc">
          <li>Recruitment</li>
          <li>Research  development of HR management system (HRMS)</li>
          <li>Create employee engagement programs</li>
          <li>Assist in learning and development unit</li>
        </ul>
      </td>
    </tr>


    <tr>
      <td class="unit-img px-7" rowspan="2">
      <img src="./resources/header/sm_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Sales Marketing Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc">
          <li>Lead generation</li>
          <li>Marketing Plan</li>
          <li>Partnership</li>
          <li>Pitch Deck </li>
          <li>Community Management </li>
        </ul>
      </td>
    </tr>


    <tr>
      <td class="unit-img px-7" rowspan="2">
      <img src="./resources/header/eng_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Engineering Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc">
          <li>Time and Motion Study </li>
          <li>Facilitate cost Benefit Analysis</li>
          <li>Production Planning and Inventory Control</li>
          <li>Research And Development </li>
          <li>Project Management </li>
        </ul>
      </td>
    </tr>


    <tr>
      <td class="unit-img px-7" rowspan="2">
      <img src="./resources/header/tech_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Technology Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc">
          <li>Front-End and Back End Development </li>
          <li>Website and Mobile App Design</li>
          <li>Programming</li>
          <li>Research And Development </li>
          <li>Assist in Systems and Software development</li>
        </ul>
      </td>
    </tr>

    
    <tr>
      <td class="unit-img px-7" rowspan="2">
      <img src="./resources/header/accounting_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
         Accounting Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc">
          <li>Research and Develop Accounting Information System</li>
          <li>Administrativ</li>
          <li>Research and Development of KGC</li>      
        </ul>
      </td>
    </tr>

    <tr>
      <td class="unit-img px-7" rowspan="2">
        <img src="./resources/header/legal_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      </td>
      <td class="font-bold text-6xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Legal Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc;">
          <li>Legal Research</li>
          <li>Draft Legal Documents and Pleadings</li>
          <li>Setting up of Memorandum</li>
          <li>Transcription of Minutes of the Meetings</li>
          <li>Review of Contracts</li>
        </ul>
      </td>
    </tr>

    <tr>
      <td class="unit-img px-7" rowspan="2">
        <img src="./resources/header/lnd_unit.png" class="h-25 mr-3"alt="Flowbite Logo"/>
      </td>
      <td class="font-bold text-5xl" style="height:50px; padding:0 0 0 0;">
        <div style="height:20px; width:500px;">
          Learning and Development Unit
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <ul class="px-7 py-0" style="list-style-type:disc;">
          <li>Legal Research</li>
          <li>Draft Legal Documents and Pleadings</li>
          <li>Setting up of Memorandum</li>
          <li>Transcription of Minutes of the Meetings</li>
          <li>Review of Contracts</li>
        </ul>
      </td>
    </tr>

    <svg
    style="position: absolute; bottom: -20%; right: -30%; z-index: -1"
    width="700"
    height="700"
    viewBox="75 -50 800 779"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <g filter="url(#filter0_f_56_338)">
      <ellipse
        cx="408.754"
        cy="389.317"
        rx="209.354"
        ry="187.522"
        transform="rotate(-15 408.754 389.317)"
        fill="#FF2608"
        fill-opacity="0.7"
      />
    </g>
    <defs>
      <filter
        id="filter0_f_56_338"
        x="0.743774"
        y="0.204041"
        width="816.021"
        height="778.225"
        filterUnits="userSpaceOnUse"
        color-interpolation-filters="sRGB"
      >
        <feFlood flood-opacity="0" result="BackgroundImageFix" />
        <feBlend
          mode="normal"
          in="SourceGraphic"
          in2="BackgroundImageFix"
          result="shape"
        />
        <feGaussianBlur
          stdDeviation="100"
          result="effect1_foregroundBlur_56_338"
        />
      </filter>
    </defs>
  </svg>

  <svg
    style="position: absolute; top: -20%; left: -25%; z-index: -1"
    width="700"
    height="700"
    viewBox="75 -50 800 779"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <g filter="url(#filter0_f_56_338)">
      <ellipse
        cx="408.754"
        cy="389.317"
        rx="209.354"
        ry="187.522"
        transform="rotate(-15 408.754 389.317)"
        fill="#E3C12D"
        fill-opacity="0.7"
      />
    </g>
    <defs>
      <filter
        id="filter0_f_56_338"
        x="0.743774"
        y="0.204041"
        width="816.021"
        height="778.225"
        filterUnits="userSpaceOnUse"
        color-interpolation-filters="sRGB"
      >
        <feFlood flood-opacity="0" result="BackgroundImageFix" />
        <feBlend
          mode="normal"
          in="SourceGraphic"
          in2="BackgroundImageFix"
          result="shape"
        />
        <feGaussianBlur
          stdDeviation="100"
          result="effect1_foregroundBlur_56_338"
        />
      </filter>
    </defs>
  </svg>
</div>
</section>

  </table>
</main>
<!-- END OF DREAM ACADEMY PAGE -->
</section>

<br><br><br>
<!-- START OF FOOTER -->
<footer class = "bg-black py-2">
<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
<div class="md:flex md:justify-between">
  <div class="mb-6 md:mb-0" style=" float: left; margin-right: 550px; width:150px; z-index:10;">
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
                  <a href="index.html" class="hover:underline">Home</a>
              </li>
              <li class="mb-1">
                  <a href="" class="hover:underline">About Us</a>
              </li>
              <li class="mb-1">
                <a href="dreamacademy.html" class="hover:underline">Dream Academy</a>
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
                  <td style="width:50%; padding:0 0 0 30px;">
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

