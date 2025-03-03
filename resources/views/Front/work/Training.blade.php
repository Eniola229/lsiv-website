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
      <section class="bg-[#DDC2FF]">
            @include('components.header')
        <div
          class="flex mx-auto lg:gap-20 lg:max-w-4xl xl:max-w-7xl max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 mt-[-50px]"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="md:w-4/5">
            <h1
              class="md:text-[48px] lg:text-[34px] xl:text-[48px] text-[32px] capitalize md:leading-normal text-accentTextDark font-playfair font-[500]"
            >
              empowering changemakers:<br> our capacity building services
            </h1>
            <p class="mt-4 text-accentTextDark md:w-full md:text-[20px] xl:text-[20px] lg:text-lg text-[16px] font-opensans font-[400]" style="line-height: 33px;">
               <span class="italic font-[600]">
                Building a more just and equitable world requires a skilled and
                empowered workforce.
              </span>
              <br />
              We offer flexible and customizable training programs tailored to
              your specific needs. Our learner-centred approach ensures
              participants gain practical skills through interactive
              methodologies, including lectures, workshops, simulations,
              role-playing exercises, and case studies ensuring participants
              gain practical skills applicable to real-world scenarios.
            </p>
          </div>

          <div class="md:w-1/3">
            <img
              src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734654157/OBJECTS_xyogj8.png') }}"
              alt="Illustration"
              class="w-full md:w-2/3 lg:w-full h-auto mt-6"
            />
          </div>
        </div>
      </section>
      <!--    Our Capacity Building Services  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="mx-auto lg:max-w-4xl xl:max-w-7xl max-w-7xl px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-[48px] lg:text-[34px] xl:text-[3.5rem] text-center text-[32px] mb-2 font-playfair font-[500] leading-normal"
              >
                Our Capacity Building Services
              </h2>
            </div>
          </div>
          <!-- discussion Section -->
         <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-6">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-[#FFC6DB] md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.6rem] xl:text-[2rem]"
                  style="line-height: normal;">
                    Advocacy Training
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-[400] mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We empower individuals and organizations to become effective
                    advocates for social change. Our advocacy training programs
                    cover topics such as advocacy strategies, digital advocacy,
                    message development, campaign strategy, lobbying techniques,
                    fundraising, grassroots mobilization, and coalition
                    building.
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
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.6rem] xl:text-[2rem]"
                  style="line-height: normal;">
                    Communication Training
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-[400] mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We provide individuals and organizations with the skills to
                    effectively communicate with diverse audiences across
                    various channels. This includes training on crafting
                    compelling messages, public speaking, media relations, and
                    strategic communication planning.
                  </p>
                </div>
              </div>
              <!-- disscuss 3 -->

              <div
                class="border-b bg-[#F1DAB7] md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.6rem] xl:text-[2rem]"
                  style="line-height: normal;">
                    Impact Storytelling Training
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-[400] mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We teach participants how to craft compelling narratives
                    that showcase the impact of their work and inspire action.
                    Our impact storytelling training delves into techniques for
                    human-centred storytelling, data visualization, and crafting
                    persuasive narratives for different audiences.
                  </p>
                </div>
              </div>
              <!-- disscuss 4-->
              <div
                class="border-b bg-[#DDC2FF] md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem] lg:text-[1.6rem] xl:text-[2rem]"
                  style="line-height: normal;">
                    Campaign Development
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-[400] mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We provide training on all aspects of campaign development,
                    from concept creation and target audience identification to
                    strategic planning, implementation, and evaluation.
                  </p>
                </div>
              </div>
              <!-- disscuss 5-->
              <div
                class="border-b bg-[#FFDED0] md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem] lg:text-[1.6rem] xl:text-[2rem]"
                  style="line-height: normal;">
                    Social and Behavioral Change (SBC) Training
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We offer specialized training programs focused on applying
                    social science insights and nudge theory to design
                    interventions that promote positive behaviour change.
                  </p>
                </div>
              </div>
              <!-- disscuss 6-->
              <div
                class="border-b bg-[#FFE4BB] md:p-12 p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem] lg:text-[1.6rem] xl:text-[2rem]"
                  style="line-height: normal;">
                    Community Training
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                 <p class="leading-7 mb-2 text-base" style="line-height: 28px;">
                    We believe in empowering communities to take ownership of
                    their own development. We design and deliver training
                    programs tailored to the specific needs of local
                    communities, equipping them with the skills and knowledge to
                    address their challenges and advocate for change.
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
            class="text-3xl md:text-[60px] lg:text-[40px] xl:text-[60px] font-medium md:mb-6 mb-4 font-playfair leading-normal"
          >
         Empower your team with the knowledge <br> and tools to drive positive change.
          </h2>
          <p class="md:text-[24px] lg:text-lg xl:text-[24px] text-[16px] font-[400] md:mb-0 mb-4 font-medium font-opensans"> 
           Let's Make Impact Together
          </p>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans" style="line-height: 20px; ">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>

</main>
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
