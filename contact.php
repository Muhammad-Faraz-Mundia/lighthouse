<?php
    include('header.php');
?>

    <main>
      <!-- Hero -->
      <section class="pb-24 pt-48 relative z-0 px-6 lg:px-10 ">
        <div class="max-w-[800px] text-light w-full mx-auto text-center">
          <nav class="flex justify-center mb-5" aria-label="Breadcrumb">
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
                  <a href="#" class="ml-4 text-sm font-medium text-secondary fade-in-animation">Contact</a>
                </div>
              </li>
            </ol>
          </nav>
          <h1 class="display-2 md:display-1 mb-8">Contact Us</h1>
          <h6 class="text-lg leading-relaxed font-semibold fade-in-animation">Contact us to discuss your needs or share your feedback. Let's connect!</h6>
        </div>

        <div class="absolute inset-0 -z-10 pointer-events-none" style="background: linear-gradient(rgba(0, 21, 36, 0.92) 0%, rgba(0, 21, 36, 0.7268) 60.88%, rgba(0, 21, 36, 0.6) 93.05%)"></div>
        <img src="https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="background" class="absolute inset-0 pointer-events-none size-full -z-20" />
      </section>

      <!-- Contact Form -->
      <section class="px-6 lg:px-10 py-24 fade-in-animation ">
        <div class="max-w-[1140px] w-full mx-auto lg:px-4">
          <h2 class="text-4xl text-center text-secondary mb-4 fade-in-animation">Thank you for your interest in Lighthouse Consultant Partners.</h2>
          <p class="text-lg text-center text-primary-400 mb-10 fade-in-animation">Please use the form below to request a call or meeting with one of our consulting team members.</p>

          <form action="#">
            <div class="grid sm:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-x-4 gap-y-9">
              <div>
                <input type="text" class="px-1.5 py-1 block w-full border border-primary font-medium leading-8" placeholder="First Name*" />
              </div>
              <div>
                <input type="text" class="px-1.5 py-1 block w-full border border-primary font-medium leading-8" placeholder="Last Name*" />
              </div>
              <div>
                <input type="text" class="px-1.5 py-1 block w-full border border-primary font-medium leading-8" placeholder="Job Title*" />
              </div>
              <div>
                <input type="email" class="px-1.5 py-1 block w-full border border-primary font-medium leading-8" placeholder="Email*" />
              </div>
              <div>
                <input type="tel" class="px-1.5 py-1 block w-full border border-primary font-medium leading-8" placeholder="Phone*" />
              </div>
              <div>
                <select class="px-1.5 py-2 block w-full border border-primary font-medium leading-8">
                  <option value="" selected disabled>Type of Inquiry*</option>
                </select>
              </div>
              <div class="sm:col-span-full">
                <textarea class="p-1.5 block h-40 w-full border border-primary font-medium leading-8" placeholder="How can we help you?*"></textarea>
              </div>
              <div class="sm:col-span-full">
                <textarea class="p-1.5 block h-40 w-full border border-primary font-medium leading-8" placeholder="How did you hear about us?*"></textarea>
              </div>
            </div>
            <button class="btn-secondary px-16 mx-auto flex mt-10 w-fit" type="submit">Submit</button>
          </form>
        </div>
      </section>

      <hr class="max-w-7xl mx-auto" />

      <section class="px-6 lg:px-10 py-24 fade-in-animation">
        <div class="max-w-[1140px] w-full mx-auto">
          <h2 class="text-4xl text-center text-secondary mb-8">Office Locations</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            <div class="py-8 px-4 text-center fade-in-animation">
              <h3 class="mb-8 text-2xl font-normal text-primary">Boston</h3>
              <p class="text-lg text-balance">
                One Newton Place <br />
                275 Washington Street, Suite 405 Newton, MA 02458
              </p>
            </div>

            <div class="py-8 px-4 text-center fade-in-animation">
              <h3 class="mb-8 text-2xl font-normal text-primary">Boston</h3>
              <p class="text-lg text-balance">
                One Newton Place <br />
                275 Washington Street, Suite 405 Newton, MA 02458
              </p>
            </div>

            <div class="py-8 px-4 text-center fade-in-animation">
              <h3 class="mb-8 text-2xl font-normal text-primary">Boston</h3>
              <p class="text-lg text-balance">
                One Newton Place <br />
                275 Washington Street, Suite 405 Newton, MA 02458
              </p>
            </div>

            <div class="py-8 px-4 text-center fade-in-animation">
              <h3 class="mb-8 text-2xl font-normal text-primary">Boston</h3>
              <p class="text-lg text-balance">
                One Newton Place <br />
                275 Washington Street, Suite 405 Newton, MA 02458
              </p>
            </div>

            <div class="py-8 px-4 text-center fade-in-animation">
              <h3 class="mb-8 text-2xl font-normal text-primary">Boston</h3>
              <p class="text-lg text-balance">
                One Newton Place <br />
                275 Washington Street, Suite 405 Newton, MA 02458
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
    include('footer.php');
?>