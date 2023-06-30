<?php
session_start();
if (!isset($_SESSION["user1"])) {
   header("Location: login.php");
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
    <section class="section-dreamacademy">
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
              class="black-button hover:bg-black text-white font-bold py-1 px-3 rounded-full"> <a href="join-us.html">DONATE
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
                <a href="#" class="block py-2 pl-3 pr-4 hover:bg-gray-100 md:hover:bg-transparent">CULTURE</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 hover:bg-gray-100 md:hover:bg-transparent">THE TEAM</a>
              </li>
              <li>
                <a href="boardoftrustees.php"class="block py-2 pl-3 pr-4 hover:bg-gray-100 md:hover:bg-transparent" >OUR THRUST</a>
              </li>
              <li>
                <a href="#"class="block py-2 pl-3 hover:bg-transparent">CONTACT US</a>
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