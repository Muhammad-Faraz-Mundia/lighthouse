<?php 
    include('header.php');
?>

    <main>
      <!-- Hero -->
      <section class="pb-24 pt-48 relative z-0 px-6 lg:px-10 ">
        <div class="max-w-[800px] text-light w-full mx-auto text-center">
          <!-- <nav class="flex justify-center mb-5" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center justify-center space-x-4">
              <li>
                <div>
                  <a href="index.php" class="text-light">
                    <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only fade-in-animation">Home</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="size-5 shrink-0 text-light" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                  </svg>
                  <a href="#" class="ml-4 text-sm font-medium text-secondary fade-in-animation">Service</a>
                </div>
              </li>
            </ol>
          </nav> -->
          <h1 class="display-2 md:display-1 mb-8">Our Services</h1>
          <!-- <h3 class="text-xl md:text-2xl mb-6 fade-in-animation">Lorem ipsum dolor sit amet consectetur.</h3> -->
          <!-- <h6 class="text-lg leading-relaxed font-semibold fade-in-animation">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sequi omnis vero earum quam quisquam cupiditate accusantium culpa in vitae.</h6> -->
        </div>

        <div class="absolute inset-0 -z-10 pointer-events-none" style="background: linear-gradient(rgba(0, 21, 36, 0.92) 0%, rgba(0, 21, 36, 0.7268) 60.88%, rgba(0, 21, 36, 0.6) 93.05%)"></div>
        <img src="https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="background" class="absolute inset-0 pointer-events-none size-full -z-20" />
      </section>

      <!-- Why Us -->
     <section class="my-10 py-10 px-6 lg:px-10 ">
        <div class="container max-w-7xl mx-auto">
          <!-- <h2 class="text-4xl font-extrabold mb-6">Our Services</h2> -->
          <p class="text-lg lg:text-2xl mb-5 leading-relaxed font-updated">We provide a wide range of bespoke services according to the client requirements and the project in hand.  The main areas of focus are .</p>
          <hr class="border-t-primary-200" />

          <div class="max-w-7xl mx-auto w-full grid my-16 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 services fade-in-animation">
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] active">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Feasibility <br> Studies</h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Market <br> Research</h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Financial & Economic studies</h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Commercial & Business Strategy</h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Commercial / Contractual Services</h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Management & <br> Planning </h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Claims & <br> Disputes </h4>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </div>
            <!--<div class="py-8 px-5 text-center transition-all hover:bg-primary group hover:shadow-[-4px_-4px_#8DACBF,-8px_-8px_#4E738A] fade-in-animation">-->
            <!--  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-secondary size-32 group-hover:brightness-0 transition-all group-hover:-translate-y-2 group-hover:invert mx-auto" version="1.1">-->
            <!--    <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />-->
            <!--    <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="#39393A" />-->
            <!--    <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />-->
            <!--  </svg>-->
            <!--  <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-white transition-all text-black mt-4 mb-5">Strategy + Innovation</h4>-->
            <!--  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7 mx-auto group-hover:text-white transition-all">-->
            <!--    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />-->
            <!--  </svg>-->
            <!--</div>-->
          </div>
        </div>
      </section>


      <!-- Section -->
      <!-- <section class="px-6 lg:px-10 py-16 md:py-20 fade-in-animation yellow-color-bg">
        <div class="max-w-7xl w-full text-white mx-auto">
          <h2 class="text-4xl mb-3 uppercase text-center">Services Designed to Deliver Business Value</h2>
          <p class="text-lg mb-12 leading-loose font-light text-center">Are you charting new territory or facing a known challenge? Our people have successfully tackled nearly every imaginable challenge with clients just like you. From the formation of an idea, to designing the approach, through to delivery of a comprehensive solution, our people can guide you. But it doesn’t stop there - we are steadfastly focused on positive outcomes and will stick with you after a project to measure and prove your success.</p>

          <div class="grid my-16 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="py-8 px-5 text-center transition-all hover:bg-white group hover:shadow-[-4px_-4px_#eee,-8px_-8px_#ccc] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-white size-24 group-hover:brightness-0 transition-all group-hover:-translate-y-2 mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="currentColor" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-black transition-all text-white mt-4 mb-5">Discover Opportunity</h4>
              <p class="text-base leading-loose group-hover:text-black text-white">You have great people and great ideas. Sometimes you need help to discover the hidden possibilities that unlock breakthrough outcomes. We consult based on real world experiences, using a framework that helps you look at problems and opportunities in a new way.</p>
            </div>

            <div class="py-8 px-5 text-center transition-all hover:bg-white group hover:shadow-[-4px_-4px_#eee,-8px_-8px_#ccc] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-white size-24 group-hover:brightness-0 transition-all group-hover:-translate-y-2 mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="currentColor" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-black transition-all text-white mt-4 mb-5">Discover Opportunity</h4>
              <p class="text-base leading-loose group-hover:text-black text-white">You have great people and great ideas. Sometimes you need help to discover the hidden possibilities that unlock breakthrough outcomes. We consult based on real world experiences, using a framework that helps you look at problems and opportunities in a new way.</p>
            </div>

            <div class="py-8 px-5 text-center transition-all hover:bg-white group hover:shadow-[-4px_-4px_#eee,-8px_-8px_#ccc] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-white size-24 group-hover:brightness-0 transition-all group-hover:-translate-y-2 mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="currentColor" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-black transition-all text-white mt-4 mb-5">Discover Opportunity</h4>
              <p class="text-base leading-loose group-hover:text-black text-white">You have great people and great ideas. Sometimes you need help to discover the hidden possibilities that unlock breakthrough outcomes. We consult based on real world experiences, using a framework that helps you look at problems and opportunities in a new way.</p>
            </div>

            <div class="py-8 px-5 text-center transition-all hover:bg-white group hover:shadow-[-4px_-4px_#eee,-8px_-8px_#ccc] fade-in-animation">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="text-white size-24 group-hover:brightness-0 transition-all group-hover:-translate-y-2 mx-auto" version="1.1">
                <path d="M220.5 245.4c-32.8 32.8-55.1 73.2-65.2 117.3h16.5c18.8-75.3 75.1-135.9 148-160.7v-16.9c-37.1 11.6-71 32-99.3 60.3z" fill="currentColor" />
                <path d="M959.9 540.8c0 113.6-92.1 205.8-205.7 205.9H590.9v-44h163.3c43.2 0 83.8-16.9 114.3-47.4 30.6-30.6 47.4-71.2 47.4-114.5 0-43.2-16.8-83.9-47.4-114.4S797.2 379 754 379c-11.5 0-22.8 1.2-33.8 3.5-15 3.2-29.4 8.4-42.8 15.7-1-15.4-3.3-30.7-6.8-45.6v-0.1c-3.6-15.6-8.6-30.8-14.9-45.7-14.4-33.9-34.9-64.4-61.1-90.6-26.2-26.2-56.6-46.7-90.6-61.1-35.1-14.8-72.4-22.4-110.9-22.4s-75.8 7.5-110.9 22.4c-33.9 14.3-64.4 34.9-90.6 61.1-26.2 26.2-46.7 56.7-61.1 90.6-14.9 35.1-22.4 72.4-22.4 110.9s7.5 75.8 22.4 110.9c14.3 33.9 34.9 64.4 61.1 90.6 26.2 26.2 56.7 46.7 90.6 61.1 35.1 14.8 72.4 22.4 110.9 22.4h39.7v44h-41C210.7 746 64.1 599 64.1 417.7c0-181.7 147.3-329 329-329 154.6 0 284.3 106.6 319.5 250.3v0.1c13.4-2.7 27.2-4.2 41.4-4.2 113.7 0.1 205.9 92.2 205.9 205.9z" fill="currentColor" />
                <path d="M692.9 636.1h-22.6L519.8 485.6v449.6h-16V485.8L353.4 636.1h-22.6l181-181z" fill="currentColor" />
              </svg>
              <h4 class="text-2xl group-hover:-translate-y-1 font-bold group-hover:text-black transition-all text-white mt-4 mb-5">Discover Opportunity</h4>
              <p class="text-base leading-loose group-hover:text-black text-white">You have great people and great ideas. Sometimes you need help to discover the hidden possibilities that unlock breakthrough outcomes. We consult based on real world experiences, using a framework that helps you look at problems and opportunities in a new way.</p>
            </div>
          </div>
        </div>
      </section> -->

      <!-- Lighthouse Consultants Sectors -->
      <section class="pb-20 px-6 lg:px-10 fade-in-animation sectors">
        <div class="max-w-7xl w-full mx-auto">
          <div class="text-center mb-10">
            <h2 class="text-4xl mb-6">Lighthouse Consultants Sectors</h2>
            <p class="text-lg leading-loose font-light">Our consultants leverage decades of industry experience to deliver solutions that work for your business and your people, no matter the challenge. We offer a broad set of customized solutions for businesses of all types, and our consultants have deep industry expertise - particularly across the life sciences, consumer products, and retail industries.</p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-12">
            <div class="text-center">
              <img src="assets/images/pexels-sevenstormphotography-439416.jpg" alt="" class="mx-auto block mb-8" />

              <a href="#" class="text-lg font-semibold flex items-center justify-center gap-4 group text-secondary">
                <span>Construction </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-2 transition-all">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>

            <div class="text-center">
              <img src="assets/images/pexels-umaraffan499-87236.jpg" alt="" class="mx-auto block mb-8" />

              <a href="#" class="text-lg font-semibold flex items-center justify-center gap-4 group text-secondary">
                <span>Oil & Gas </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-2 transition-all">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>

            <div class="text-center">
              <img src="assets/images/pexels-michalrobak-29472820.jpg" alt="" class="mx-auto block mb-8" />

              <a href="#" class="text-lg font-semibold flex items-center justify-center gap-4 group text-secondary">
                <span>Power & Energy </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-2 transition-all">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>
          </div>
          
       
          
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-12" style="margin-top:30px">
            <div class="text-center">
              <img src="assets/images/pexels-vanessa-loring-7869034.jpg" alt="" class="mx-auto block mb-8" />

              <a href="#" class="text-lg font-semibold flex items-center justify-center gap-4 group text-secondary">
                <span>Mechanical & Electrical  </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-2 transition-all">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>

            <div class="text-center">
              <img src="assets/images/pexels-kervin-3976320.jpg" alt="" class="mx-auto block mb-8" />

              <a href="#" class="text-lg font-semibold flex items-center justify-center gap-4 group text-secondary">
                <span>Renewables  </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-2 transition-all">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>

            <div class="text-center">
              <img src="assets/images/pexels-chanaka-318741-906494.jpg" alt="" class="mx-auto block mb-8" />

              <a href="#" class="text-lg font-semibold flex items-center justify-center gap-4 group text-secondary">
                <span>Commercial Services </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 group-hover:translate-x-2 transition-all">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>
          </div>

        </div>
      </section>

      <!--<section class="relative mx-5 z-0 rounded fade-in-animation" style="background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2023/06/consulting-blue-website-asset-2-1920x600.png')">-->
      <!--  <div class="py-20 px-8 max-w-[650px] text-center mx-auto text-white">-->
      <!--    <h2 class="text-4xl mb-6 uppercase">Case Studies</h2>-->
      <!--    <p class="text-lg leading-loose font-light">-->
      <!--      Looking to transform your business? <br />-->
      <!--      Here's how Clarkston has helped companies like you.-->
      <!--    </p>-->
      <!--    <a href="#" class="btn-secondary mt-8">Explore Our Recent Client Work</a>-->
      <!--  </div>-->
      <!--</section>-->

      <!-- <section class="bg-light px-6 lg:px-10 py-24 text-center fade-in-animation">
        <div class="max-w-[860px] w-full mx-auto">
          <h2 class="text-4xl mb-6">We’re Ready to Help</h2>
          <p class="mb-2"><a href="#" class="text-xl text-primary hover:underline">Our 97% client satisfaction rating is more than a metric, it’s who we are.</a></p>
          <p class="text-lg leading-loose font-light">Lighthouse’s focus on delivering brilliant client service combined with our sought after expertise differentiates us from other consulting firms. Companies large and small across industries trust our people with their business.</p>
        </div>
      </section>

      <section class="px-5 fade-in-animation">
        <div class="contact-openar contact-studio text-light transition-all text-center min-h-[70vh] flex items-center justify-center px-6 py-24 group yellow-color-bg">
          <div>
            <h2 class="text-4xl mb-5">Curious about our consulting services?</h2>
            <hr class="w-4 group-hover:w-24 mx-auto transition-all border-t-white mb-4" />
            <p class="text-lg leading-loose font-light">
              Click here to contact us online or give us a call / email anytime! <br />
              Phone: (012) 012-0120 <br />
              Email: info@lighthouse.com <br />
            </p>
          </div>
        </div>
        <div class="contact-form bg-primary text-light text-center px-6 py-24 hidden">
          <h2 class="text-4xl mb-6">Contact Us</h2>

          <form action="#" class="max-w-[900px] mx-auto w-full">
            <div class="grid sm:grid-cols-2 gap-4">
              <div>
                <input type="text" placeholder="First Name" class="border-x-0 border-t-0 border-b py-1.5 px-1 text-light font-medium bg-transparent block w-full focus:outline-none focus:border-b-secondary" />
              </div>
              <div>
                <input type="text" placeholder="Last Name" class="border-x-0 border-t-0 border-b py-1.5 px-1 text-light font-medium bg-transparent block w-full focus:outline-none focus:border-b-secondary" />
              </div>
              <div class="sm:col-span-2 sm:w-1/2 sm:pr-2">
                <select class="border-x-0 border-t-0 border-b py-1.5 px-1 text-light font-medium bg-transparent block w-full focus:outline-none focus:border-b-secondary">
                  <option value="#" selected disabled>Intersted In...</option>
                  <option value="#">Option 1</option>
                  <option value="#">Option 2</option>
                  <option value="#">Option 3</option>
                  <option value="#">Option 4</option>
                  <option value="#">Option 5</option>
                </select>
              </div>
              <div class="sm:col-span-full">
                <input type="email" placeholder="Email" class="border-x-0 border-t-0 border-b py-1.5 px-1 text-light font-medium bg-transparent block w-full focus:outline-none focus:border-b-secondary" />
              </div>
              <div class="sm:col-span-full">
                <textarea placeholder="Comments" class="border h-25 p-1.5 text-light font-medium bg-transparent block w-full focus:outline-none focus:border-secondary"></textarea>
              </div>
            </div>
            <p class="text-left mt-5 mb-10">Clarkston Consulting requests your contact information so we may accurately and effectively respond to your request, as well as share our research and content with you. To learn more, please visit our <a href="#" class="text-secondary underline">Privacy Policy.</a></p>
            <button type="submit" class="btn-secondary mx-auto px-14">Submit</button>
          </form>
        </div>
      </section>

      <section class="my-20 px-6 lg:px-10 fade-in-animation">
        <div class="max-w-7xl w-full mx-auto">
          <h2 class="text-4xl mb-3 uppercase text-center">Our Latest Insights</h2>
          <p class="text-lg leading-loose font-light text-center">Lorem ipsum dolor sit amet.</p>

          <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <article class="group bg-white pb-12 hover:shadow-xl">
              <a href="#">
                <img src="https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2024/10/Breaking-Down-the-Implications-of-Using-Generative-AI-in-Retail-Advertising_featured-448x270.png" class="h-[270px] w-full object-cover" alt="Breaking Down the Implications of Using Generative AI in Retail Advertising" />
              </a>

              <div class="size-20 rounded-full bg-white flex items-center justify-center text-secondary -mt-10 relative z-10 mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
              </div>

              <div class="px-6 mt-2">
                <div class="text-xs text-primary-200 uppercase font-light mb-12 space-x-1 text-center">
                  <a href="#">Blog Post</a>

                  <a href="#">Data + Analytics</a>
                  <a href="#">Digital</a>
                </div>

                <h1 class="text-2xl font-extrabold text-center mb-6"><a href="#">Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text</a></h1>
                <div class="text-base leading-loose font-light text-center">
                  <a href="https://clarkstonconsulting.com/insights/generative-ai-in-retail-advertising/">
                    <p>Generative AI tools have advanced tremendously in recent years, moving beyond novelties to becoming indispensable tools for companies to leverage. ...</p>
                  </a>
                </div>
              </div>
            </article>

            <article class="group bg-white pb-12 hover:shadow-xl">
              <a href="#">
                <img src="https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2024/10/Breaking-Down-the-Implications-of-Using-Generative-AI-in-Retail-Advertising_featured-448x270.png" class="h-[270px] w-full object-cover" alt="Breaking Down the Implications of Using Generative AI in Retail Advertising" />
              </a>

              <div class="size-20 rounded-full bg-white flex items-center justify-center text-secondary -mt-10 relative z-10 mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
              </div>

              <div class="px-6 mt-2">
                <div class="text-xs text-primary-200 uppercase font-light mb-12 space-x-1 text-center">
                  <a href="#">Blog Post</a>

                  <a href="#">Data + Analytics</a>
                  <a href="#">Digital</a>
                </div>

                <h1 class="text-2xl font-extrabold text-center mb-6"><a href="#">Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text</a></h1>
                <div class="text-base leading-loose font-light text-center">
                  <a href="https://clarkstonconsulting.com/insights/generative-ai-in-retail-advertising/">
                    <p>Generative AI tools have advanced tremendously in recent years, moving beyond novelties to becoming indispensable tools for companies to leverage. ...</p>
                  </a>
                </div>
              </div>
            </article>

            <article class="group bg-white pb-12 hover:shadow-xl">
              <a href="#">
                <img src="https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2024/10/Breaking-Down-the-Implications-of-Using-Generative-AI-in-Retail-Advertising_featured-448x270.png" class="h-[270px] w-full object-cover" alt="Breaking Down the Implications of Using Generative AI in Retail Advertising" />
              </a>

              <div class="size-20 rounded-full bg-white flex items-center justify-center text-secondary -mt-10 relative z-10 mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
              </div>

              <div class="px-6 mt-2">
                <div class="text-xs text-primary-200 uppercase font-light mb-12 space-x-1 text-center">
                  <a href="#">Blog Post</a>

                  <a href="#">Data + Analytics</a>
                  <a href="#">Digital</a>
                </div>

                <h1 class="text-2xl font-extrabold text-center mb-6"><a href="#">Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text</a></h1>
                <div class="text-base leading-loose font-light text-center">
                  <a href="https://clarkstonconsulting.com/insights/generative-ai-in-retail-advertising/">
                    <p>Generative AI tools have advanced tremendously in recent years, moving beyond novelties to becoming indispensable tools for companies to leverage. ...</p>
                  </a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section> -->
    </main>

<?php 
    include('footer.php');
?>
