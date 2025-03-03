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
      <section class="bg-[#F1DAB7]">
            @include('components.header')
        <div
          class="flex mx-auto lg:max-w-4xl xl:max-w-7xl max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 mt-[-50px]"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="md:w-4/5">
            <h1
              class="md:text-[48px] xl:text-[48px] lg:text-[34px] text-[32px] capitalize md:leading-normal text-accentTextDark font-playfair font-[500]"
            >
              building roadmap for impact: strategy development & implementation
            </h1>
            <p class="mt-4 text-accentTextDark md:w-full lg:text-lg xl:text-[20px] md:text-[20px] text-[16px] font-opensans font-[400]" style="line-height: 33px;">
               <span class="italic font-[600]">
                We don't just tell stories. We help create effective strategies
                by combining data-driven insight with an understanding of human
                motivation to drive long-term change in communities.
              </span>
              <br />
              Through collaborative strategy development, we focus on
              understanding your organization's objectives, target audience, and
              social context.
            </p>
          </div>

          <div class="md:w-1/3">
            <img
              src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734654117/Frame_42_pabkpx.png') }}"
              alt="Illustration"
              class="w-full md:w-2/3 lg:w-full h-auto mt-6"
            />
          </div>
        </div>
      </section>
      <!--    Our bespoke strategies and services designed to empower your social impact initiatives  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-5xl lg:text-[40px] xl:text-[3.5rem] text-center md:w-4/5 mx-auto text-[32px] mb-2 font-playfair font-medium leading-normal"
              >
              Our strategy services 
              </h2>
            </div>
          </div>
          <!-- discussion Section -->
            <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-4">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-[#FFC6DB] md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                  >
                    Advocacy Strategies
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We develop impactful advocacy strategies to influence social
                    norms and bring about systemic change. Our advocacy
                    strategies result in transformation of social norms,
                    behaviour modification, awareness campaigns, fundraising,
                    support mobilization, high-level policy change, and thought
                    leadership.
                  </p>
                </div>
              </div>
              <!-- disscuss 2 -->
              <div
                class="border-b bg-secondary md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                  >
                    Communication Strategies
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We devise customized communication strategies both online
                    and offline, to meet your specific needs across different
                    platforms, and target audiences.
                  </p>
                </div>
              </div>

              <!-- disscuss 3 -->
              <div
                class="border-b bg-[#FFDED0] md:p-12 p-6 rounded-[16px] md:w-1/2 mx-auto md:col-span-2 transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                  >
                    Digital Strategy
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We utilize technology and digital media to enhance your
                    social impact. Our innovative digital campaigns optimize
                    your online presence and utilize data-driven insights to
                    increase engagement and reach. Our services include social
                    media strategy and management, digital content creation, SEO
                    and SEM, email marketing, and online community building.
                  </p>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
      </section>

      <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-[60px] lg:text-[40px] xl:text-[60px] font-medium md:mb-6 mb-4 font-playfair leading-normal"
          >
          Partner with us to drive long-term <br> change in your community.
          </h2>
          <p class="md:text-[24px] xl:text-[24px] lg:text-lg text-[16px] font-[400] md:mb-0 mb-4 font-medium font-opensans"> 
           Let's Make Impact Together
          </p>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans" style="line-height: 20px; ">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>

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
