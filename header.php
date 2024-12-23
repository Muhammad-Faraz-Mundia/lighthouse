<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/lighthouse-logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./output.css" />
    <link rel="stylesheet" href="./custom.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Lighthouse Consultant</title>
  </head>

  <body>
    <!-- Header -->
    <header class="absolute left-0 right-0 top-0 z-50 w-full border-b border-none bg-transparent">
      <div class="mx-auto flex max-w-screen-xl w-full items-center justify-between px-6 py-7 gap-6">
        <a class="w-full max-w-36 block" href="index.php">
          <img src="assets/images/lighthouse-logo.svg" alt="" />
        </a>

        <nav class="hidden items-center space-x-6 flex-1 lg:flex end-flex">
          <a class="text-lg hover:text-secondary-500 text-white" href="index.php">Home</a>
          <a class="text-lg hover:text-secondary-500 text-white" href="about.php">About</a>
          <a class="text-lg hover:text-secondary-500 text-white" href="service.php">Services</a>
         
          <a class="text-lg hover:text-secondary-500 text-white" href="contact.php">Contact</a>
        </nav>

        <!-- <ul class="hidden lg:flex items-center gap-2">
          <li>
            <a href="#" class="size-8 rounded bg-white text-black hover:text-[#1877F2] flex items-center justify-center transition-all hover:shadow-[2px_4px_#1877F2,-2px_4px_#1877F2]">
              <svg class="size-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="size-8 rounded bg-white text-black hover:text-[#1DA1F2] flex items-center justify-center transition-all hover:shadow-[2px_4px_#1DA1F2,-2px_4px_#1DA1F2]">
              <svg class="size-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="size-8 rounded bg-white text-black hover:text-[#E4405F] flex items-center justify-center transition-all hover:shadow-[2px_4px_#E4405F,-2px_4px_#E4405F]">
              <svg class="size-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
            </a>
          </li>
        </ul> -->

        <div class="-my-2 -mr-2 lg:hidden">
          <button class="inline-flex items-center justify-center rounded-md p-2 text-white hover:text-gray-500 hamburger-menu">
            <span class="sr-only">Open menu</span
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 md:h-8 md:w-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
          </button>
        </div>
      </div>
    </header>