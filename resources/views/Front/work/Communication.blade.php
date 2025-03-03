    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Case Study Aspen New Voices Fellowship</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
   
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="bg-[#F8F8FF] text-accentTextDark">
 <main>
      <!----First section--->
      <section class="bg-secondary">
         @include('components.header')
        <div
          class="flex mx-auto lg:max-w-4xl xl:max-w-7xl max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 mt-[-50px]"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="md:w-3/5">
            <h1
              class="md:text-[48px] lg:text-[35px] xl:text-[48px] text-[32px] capitalize md:leading-normal text-accentTextDark font-playfair font-[500] "
            style="line-height: normal;">
              Shaping your narrative for social impact: Our Communication and
              storytelling services
            </h1>
            <p class="mt-4 text-accentTextDark md:w-full md:text-[20px] lg:text-lg xl:text-[20px] text-[16px] font-opensans font-[400]" style="line-height: 33px;">
              <span class="italic font-[600]">
                Stories have the power to spark action and drive meaningful
                change.
              </span>
              <br />
              Our tailored multi-media communication and storytelling campaign
              services are designed to amplify your voice, elevate your social
              impact stories, and cultivate lasting change.
            </p>
          </div>

          <div class="md:w-1/3">
            <img
              src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653963/5573511_2929905_1_gznlwy.png') }}"
              alt="Illustration"
              class="w-full md:w-2/3 lg:w-full h-auto mt-6"
            />
          </div>
        </div>
      </section>
      <!--   Our Media campaign services  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-[48px] xl:text-[3.5rem] text-center text-[32px] mb-2 font-playfair font-[500]"
              style="line-height: normal;">
                Our Media campaign services
              </h2>
            </div>
          </div>
          <!-- discussion Section -->
          <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-4">
              <!-- disscuss 1-->
              <div
                class="border-b bg-[#DDC2FF] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-2 cursor-pointer"
                >
                  <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px] lg:text-[25px] xl:text-[32px]"
                  style="line-height: normal;">
                    Human-Angle & Impact Storytelling
                  </h3>
                </div>
                <div
                  class="mt-4 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base font-[400] text-[16px]" style="line-height: 28px;">
                    We craft powerful narratives that go beyond statistics. We
                    humanize the issues you address, highlighting the real
                    stories of people impacted by your work to foster empathy,
                    inspire action, and showcase the tangible difference you are
                    making.
                  </p>
                </div>
              </div>
              <!-- disscuss 2 -->
              <div
                class="border-b bg-secondary p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                   class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px] lg:text-[25px] xl:text-[32px]"
                  style="line-height: normal;">
                    Digital Media Campaigns
                  </h3>
                </div>
                <div
                  class="mt-4 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base font-[400] text-[16px]" style="line-height: 28px;">
                    We leverage the power of social media platforms and online
                    advertising to reach diverse audiences, raise awareness of
                    your social impact work, and drive online engagement.
                  </p>
                </div>
              </div>
              <!-- disscuss 3 -->
              <div
                class="border-b bg-[#FFC6DB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                    <h3
                   class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px] lg:text-[25px] xl:text-[32px]"
                  style="line-height: normal;">
                    Social-Behavioral Media Campaigns
                  </h3>
                </div>
                <div
                  class="mt-4 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base font-[400] text-[16px]" style="line-height: 28px;">
                    We go beyond awareness-raising. We design targeted
                    social-behavioural media campaigns that integrate social
                    science insights and nudge theory to promote positive
                    behaviour change within your target audience.
                  </p>
                </div>
              </div>
              <!-- disscuss 4 -->
              <div
                class="border-b bg-[#F1DAB7] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                   <h3
                   class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px] lg:text-[25px] xl:text-[32px]"
                  style="line-height: normal;">
                    Corporate and Plain Language Communications
                  </h3>
                </div>
                <div
                  class="mt-4 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base font-[400] text-[16px]" style="line-height: 28px;">
                    We help you communicate effectively with diverse
                    stakeholders by translating complex jargon into clear,
                    concise, and easy-to-understand language.
                  </p>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
      </section>
      <!--   Our Media campaign services  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-5xl xl:text-[3.5rem] text-center text-[32px] mb-2 font-playfair font-[500] leading-normal"
              style="line-height: normal;">
                Our Multi-Media Storytelling Services
              </h2>
            </div>
          </div>
          <!-- discussion Section -->
          <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-3 grid-cols-1 gap-4">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-secondary p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-2xl lg:text-xl xl:text-2xl font-[600]"
                  style="line-height: normal;">
                    Video & Audio Productions
                  </h3>
                </div>
                <div class="mt-4 text-accentTextDark font-normal mb-2">
                  <p class="leading-7 text-base font-[400]" style="line-height: 26px;">
                    We produce high-quality documentaries, talk shows, podcasts,
                    and radio features that delve deep into social issues to
                    amplify the voices of those affected. Our productions aim to
                    inform, educate, and inspire people across diverse audiences
                    and platforms.
                  </p>
                </div>
              </div>

              <!-- disscuss 2 -->
              <div
                class="border-b bg-[#F1DAB7] p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                   <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-2xl lg:text-xl xl:text-2xl font-[600]"
                  style="line-height: normal;">
                    Photojournalism & Photo Bank
                  </h3>
                </div>
                <div class="mt-4 text-accentTextDark mb-2 font-normal">
                  <p class="leading-7 text-base font-[400]" style="line-height: 26px;">
                    Our talented photojournalists capture powerful images that
                    showcase the human stories behind your cause. We also
                    maintain a comprehensive photo bank for your communication
                    needs.
                  </p>
                </div>
              </div>
              <!-- disscuss 3-->
              <div
                class="border-b bg-[#DDC2FF] p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-2xl lg:text-xl xl:text-2xl font-[600]"
                  style="line-height: normal;">
                    Graphic Design
                  </h3>
                </div>
                <div class="mt-4 text-accentTextDark font-normal mb-2">
                  <p class="leading-7 text-base font-[400]" style="line-height: 26px;">
                    Our team of graphic designers creates visually compelling
                    materials, such as infographics, posters, brochures, reports
                    and social media graphics, that effectively communicate your
                    message and grab attention.
                  </p>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
      </section>

      <!-- Section Seven -->
      <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-[60px] lg:text-4xl md:leading-[41px] xl:text-[60px] font-medium md:mb-6 mb-4 font-playfair leading-normal"
          >
          Transform your social impact stories <br> into powerful tools for change.
          </h2>
          <p class="md:text-[24px] lg:text-lg xl:text-[24px] text-[16px] font-[400] md:mb-0 mb-4 font-medium font-opensans"> 
            Contact us today to discuss how our communications and storytelling services <br> can propel your mission forward.
          </p>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans" style="line-height: 20px; ">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
    </main>
@include('components.footer')
        <script>
      // Select all the discussion head elements
      const discussHeads = document.querySelectorAll(".disscuss-head");

      // Loop through each discussion head
      discussHeads.forEach((head) => {
        head.addEventListener("click", function () {
          // Toggle the hidden class on the corresponding answer (next sibling)
          const answer = this.nextElementSibling;
          answer.classList.toggle("hidden");
          // Toggle the "+" and "-" icons
          const icon = this.querySelector(".icon");
          if (icon.textContent === "+") {
            icon.textContent = "-";
          } else {
            icon.textContent = "+";
          }
        });
      });
    </script>
  </body>
</html>
