<?php 
    include('header.php');
?>

    <main>
      <!-- Hero -->
      <section class="pb-24 pt-48 relative z-0 px-6 lg:px-10 fade-in-animation">
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
                  <a href="#" class="ml-4 text-sm font-medium text-secondary fade-in-animation">About</a>
                </div>
              </li>
            </ol>
          </nav> -->
          <h1 class="display-2 md:display-1 mb-8 fade-in-animation">About Us</h1>
          <!-- <h3 class="text-xl md:text-2xl mb-6 fade-in-animation">At Lighthouse Consultant, your purpose is our purpose.</h3> -->
          <!-- <h6 class="text-lg leading-relaxed font-semibold fade-in-animation">We partner with businesses across the life sciences, consumer products, and retail industries to enhance strategic decision-making, improve operational efficiency, implement new technologies, and promote business growth.</h6> -->
        </div>

        <div class="absolute inset-0 -z-10 pointer-events-none" style="background: linear-gradient(rgba(0, 21, 36, 0.92) 0%, rgba(0, 21, 36, 0.7268) 60.88%, rgba(0, 21, 36, 0.6) 93.05%)"></div>
        <img src="https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="background" class="absolute inset-0 pointer-events-none size-full -z-20" />
      </section>

      <!-- Who We are -->
      <section class="py-16 md:py-20 px-6 lg:px-10 fade-in-animation">
        <div class="max-w-[1700px] w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 lg:px-4">
          <div class="relative self-center z-0 order-last lg:order-none">
            <img src="https://images.pexels.com/photos/459728/pexels-photo-459728.jpeg?auto=compress&cs=tinysrgb&w=800" alt="about_us" />
          </div>
          <div class="who-we-are-text">
            <h2 class="text-4xl mb-6 fade-in-animation">Who We Are</h2>
            <p class="text-lg leading-loose font-light fade-in-animation">Established in 2008 as an independent support consultant to assist international and multinational firms who are active in the MENA and west African Regions. Our team has an extensive experience of over 35 years of experience in the construction industry.  With reliable well experienced professional partners firms we complete our services to include technical, commercial financial and legal advisory services to offer a single point complete tailor-made solution to our client requirements.
            <br>
                During the past the past years we have delivered numerous feasibility studies, claims, financial studies and management consultancy services to our clients.  Earning us a reputation of being reliable ad hoc and efficient.
              </p>
          </div>
        </div>
      </section>

      <!-- Our Vision -->
      <!-- <section class="bg-light px-6 lg:px-10 py-24 text-center yellow-color-bg">
        <div class="max-w-[860px] w-full mx-auto">
          <h2 class="text-4xl mb-6 fade-in-animation">Our Vision</h2>
          <p class="text-lg leading-loose font-light fade-in-animation">We aim to be the most effective and highly sought-after integrator of business solutions for our core clients, promoting business growth and market diversification, while providing a rewarding and stimulating environment for our stewards.</p>
        </div>
      </section> -->


      <!-- Why Us -->
      <!-- <section class="py-16 md:py-20 fade-in-animation">
        <div class="text-center px-6 lg:px-10">
          <h2 class="text-4xl mb-6">Why Us</h2>
          <p class="text-lg leading-loose font-light">At Lighthouse Consultants, we make our clients’ purpose our purpose.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-10">
          <div class="relative z-0 bg-light hover:text-light transition-all duration-300 group px-8 py-8 md:py-16 text-center">
            <img src="assets/images/brand-app-store-svgrepo-com.svg" alt="" class="size-20 group-hover:-translate-y-2 mx-auto group-hover:invert transition-all block mb-10" />
            <h2 class="text-4xl mb-6">Our People</h2>
            <p class="text-base leading-loose">We are defined by our people. Their dedication enables our ability to repeatedly exceed our client’s expectations. We are industry experts, problem solvers, and genuinely invested in your success.</p>

            <img src="https://images.pexels.com/photos/1650904/pexels-photo-1650904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="building" class="absolute opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all size-full inset-0 object-cover pointer-events-none -z-10 brightness-50" />
          </div>

          <div class="relative z-0 bg-light hover:text-light transition-all duration-300 group px-8 py-8 md:py-16 text-center">
            <img src="assets/images/brand-app-store-svgrepo-com.svg" alt="" class="size-20 group-hover:-translate-y-2 mx-auto group-hover:invert transition-all block mb-10" />
            <h2 class="text-4xl mb-6">Our People</h2>
            <p class="text-base leading-loose">We are defined by our people. Their dedication enables our ability to repeatedly exceed our client’s expectations. We are industry experts, problem solvers, and genuinely invested in your success.</p>

            <img src="https://images.pexels.com/photos/1650904/pexels-photo-1650904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="building" class="absolute opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all size-full inset-0 object-cover pointer-events-none -z-10 brightness-50" />
          </div>

          <div class="relative z-0 bg-light hover:text-light transition-all duration-300 group px-8 py-8 md:py-16 text-center">
            <img src="assets/images/brand-app-store-svgrepo-com.svg" alt="" class="size-20 group-hover:-translate-y-2 mx-auto group-hover:invert transition-all block mb-10" />
            <h2 class="text-4xl mb-6">Our People</h2>
            <p class="text-base leading-loose">We are defined by our people. Their dedication enables our ability to repeatedly exceed our client’s expectations. We are industry experts, problem solvers, and genuinely invested in your success.</p>

            <img src="https://images.pexels.com/photos/1650904/pexels-photo-1650904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="building" class="absolute opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all size-full inset-0 object-cover pointer-events-none -z-10 brightness-50" />
          </div>

          <div class="relative z-0 bg-light hover:text-light transition-all duration-300 group px-8 py-8 md:py-16 text-center">
            <img src="assets/images/brand-app-store-svgrepo-com.svg" alt="" class="size-20 group-hover:-translate-y-2 mx-auto group-hover:invert transition-all block mb-10" />
            <h2 class="text-4xl mb-6">Our People</h2>
            <p class="text-base leading-loose">We are defined by our people. Their dedication enables our ability to repeatedly exceed our client’s expectations. We are industry experts, problem solvers, and genuinely invested in your success.</p>

            <img src="https://images.pexels.com/photos/1650904/pexels-photo-1650904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="building" class="absolute opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all size-full inset-0 object-cover pointer-events-none -z-10 brightness-50" />
          </div>
        </div>
      </section> -->

      <!-- Get to know us better -->
      <!-- <section class="pt-16 md:pt-20 pb-20 md:pb-40 px-6 lg:px-10 fade-in-animation">
        <div class="max-w-7xl w-full mx-auto">
          <div class="text-center mb-10">
            <h2 class="text-4xl mb-6">Get to know us better</h2>
            <p class="text-lg leading-loose font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa.</p>
          </div>

          <div class="md:px-4 grid md:grid-cols-2 items-start gap-8 fade-in-animation">
            <div class="relative z-0 pb-12 pl-8">
              <div class="py-16 px-8 text-white text-center" style="background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2023/06/consulting-grey-website-asset-4.png')">
                <h2 class="text-4xl mb-6">Leadership</h2>
                <p class="text-lg leading-loose font-light mb-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa.</p>
                <a href="#" class="flex items-center justify-center gap-2 w-fit mx-auto text-lg font-medium text-white">
                  <span>View More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                  </svg>
                </a>
              </div>

              <img src="https://clarkstonconsulting.com/wp-content/themes/wwframework/images/image_bg_blue2.jpg" alt="" class="absolute inset-0 pointer-events-none -z-10 pt-16 pr-8 size-full" />
            </div>

            <div class="relative z-0 pt-10 pr-8 fade-in-animation">
              <div class="py-16 mt-8 px-8 text-white text-center" style="background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2023/06/consulting-grey-website-asset-4.png')">
                <h2 class="text-4xl mb-6">Leadership</h2>
                <p class="text-lg leading-loose font-light mb-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa.</p>
                <a href="#" class="flex items-center justify-center gap-2 w-fit mx-auto text-lg font-medium text-white">
                  <span>View More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                  </svg>
                </a>
              </div>

              <img src="https://clarkstonconsulting.com/wp-content/themes/wwframework/images/image_bg_blue2.jpg" alt="" class="absolute inset-0 pointer-events-none -z-10 pt-10 pl-8 pb-8 size-full" />
            </div>

            <div class="relative z-0 pb-10 mt-8 pl-8 fade-in-animation">
              <div class="py-16 px-8 text-white text-center" style="background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2023/06/consulting-grey-website-asset-4.png')">
                <h2 class="text-4xl mb-6">Leadership</h2>
                <p class="text-lg leading-loose font-light mb-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa.</p>
                <a href="#" class="flex items-center justify-center gap-2 w-fit mx-auto text-lg font-medium text-white">
                  <span>View More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                  </svg>
                </a>
              </div>

              <img src="https://clarkstonconsulting.com/wp-content/themes/wwframework/images/image_bg_blue2.jpg" alt="" class="absolute inset-0 pointer-events-none -z-10 pt-12 pr-8 size-full" />
            </div>

            <div class="relative z-0 pt-12 pl-8 fade-in-animation">
              <div class="py-16 mt-8 px-8 text-white text-center" style="background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2023/06/consulting-grey-website-asset-4.png')">
                <h2 class="text-4xl mb-6">Leadership</h2>
                <p class="text-lg leading-loose font-light mb-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa.</p>
                <a href="#" class="flex items-center justify-center gap-2 w-fit mx-auto text-lg font-medium text-white">
                  <span>View More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                  </svg>
                </a>
              </div>

              <img src="https://clarkstonconsulting.com/wp-content/themes/wwframework/images/image_bg_blue2.jpg" alt="" class="absolute inset-0 pointer-events-none -z-10 pt-10 pr-8 pb-8 size-full" />
            </div>
          </div>
        </div>
      </section> -->

      <!--<section class="relative mx-5 z-0 rounded fade-in-animation" style="background-image: url('https://marvel-b1-cdn.bc0a.com/f00000000145319/clarkstonconsulting.com/wp-content/uploads/2023/07/alliances-1920x600.png')">-->
      <!--  <div class="py-16 px-8 max-w-[650px] text-center mx-auto text-white">-->
      <!--    <h2 class="text-4xl mb-6 uppercase">Clarkston's Citizenship Report</h2>-->
      <!--    <p class="text-lg leading-loose font-light">Effectively driving growth, transformation, and differentiation now demands a mindset of corporate social responsibility in order to best serve our clients, our stewards, and our business. This report shares how we’ve committed ourselves to the ideals of Corporate Social Responsibility (CSR) across three critical areas: Our Stewards, Our Communities, and Our Clients.</p>-->
      <!--    <a href="#" class="btn-secondary mt-8">Read the Report</a>-->
      <!--  </div>-->
      <!--</section>-->

      <!-- <section class="my-20 px-6 lg:px-10 fade-in-animation">
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

                <h1 class="text-2xl font-extrabold text-center mb-6"><a href="#">Breaking Down the Implications of Using Generative AI in Retail Advertising</a></h1>
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

                <h1 class="text-2xl font-extrabold text-center mb-6"><a href="#">Breaking Down the Implications of Using Generative AI in Retail Advertising</a></h1>
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

                <h1 class="text-2xl font-extrabold text-center mb-6"><a href="#">Breaking Down the Implications of Using Generative AI in Retail Advertising</a></h1>
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