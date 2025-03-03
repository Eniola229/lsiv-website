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
  <body class="text-accentTextDark">
  <div class="bg-accentTextLight">
   @include('components.header')
   </div>
   <main>
      <!-- our  services -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
           <h1
              class="md:text-5xl  -mt-10 md:mt-0 xl:text-7xl text-[40px] font-playfair font-medium leading-normal"
            >
                Your Partner in Building a More Just and Equitable World
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-normal md:leading-[33px] text-base leading-[25px] mb-2 md:text-xl font-opensans"
              >
                We are dedicated to fostering a world where everyone can thrive
                by driving positive change. Our diverse services empower
                individuals, organizations, and communities with the tools and
                knowledge to create meaningful transformation.
              </p>
            </div>
          </div>
          <!-- discussion Section -->
           <!-- 
            height: 402px;
            gap: 10px;
            border-radius: 16px 0px 0px 0px;
            opacity: 0px;
            width: 650px;
 -->
          <div class="mt-20">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 gap-6 grid-cols-1 md:gap-x-8 md:gap-y-6">
              <!-- disscuss 1 -->
            <div
              class="border-b space-y-14 bg-secondary rounded-[16px] md:h-[450px] lg:h-full xl:h-[450px]  transition-[all] duration-700 md:p-12 p-6  "
            >
              <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
                <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                style="line-height: normal;">
                  Communications & Storytelling
                </h3>
              </div>
              <div class="mt-4 text-accentTextDark font-normal mb-2 flex flex-col gap">
                <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]" style="line-height: line-height: 28px;">
                  <strong class="italic font-semibold">
                    Stories have the power to drive change.
                  </strong>
                  <br />
                  Our multimedia communication and storytelling services are designed to
                  amplify your voice and elevate your impact. From engaging digital media
                  campaigns and human-centred storytelling to high-quality video and
                  photojournalism, we transform your social impact stories into powerful
                  tools for change.
                </p>
              </div>
              <div class="mt-8">
                <a
                  href="{{ url('Work-Communication') }}"
                  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                  <span class="btn-text font-[600] font-opensans text-[18px]" style="line-height: 20px; ">Learn more</span>
                  <span class="hover-arrow" style="color: orange;">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-arrow-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <!-- Box 2 -->
            <div
              class="border-b space-y-8 bg-[#FFC6DB] rounded-[16px] md:h-[450px] lg:h-full xl:h-[450px]  transition-[all] duration-700 md:p-12 p-6  "
            >
              <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
               <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                style="line-height: normal;">
                  Branding & Design Services
                </h3>
              </div>
              <div class=" text-accentTextDark font-normal mb-2 flex flex-col gap">
                <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]" style="line-height: line-height: 28px;">
                  <strong class="italic font-semibold">
                    A compelling brand identity is key to driving your mission forward and
                    making a lasting impression.
                  </strong>
                  <br />
                  We specialize in creating powerful visual identities that resonate with
                  your audience and amplify your social impact. From developing your brand
                  strategy and crafting striking visual elements to designing engaging
                  multimedia content and ensuring consistency across all platforms, our
                  branding and design services are designed to set you apart and reinforce
                  your message.
                </p>
              </div>
              <div class="mt-4">
                <a
                  href="{{ url('Work-Branding') }}"
                  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                  <span class="btn-text font-[600] font-opensans text-[18px]" style="line-height: 20px; ">Learn more</span>
                  <span class="hover-arrow" style="color: orange;">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-arrow-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

              <!-- disscuss 3 -->
          <!-- Section 1: Strategy Development And Implementation -->
          <div class="border-b space-y-8 bg-[#F1DAB7] md:p-12 p-6 rounded-[16px] md:h-[450px] lg:h-full xl:h-[450px]  transition-all duration-700 md:mt-4 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
             <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                style="line-height: normal;">
                Strategy Development And Implementation
              </h3>
            </div>
            <div class=" text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
               <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]" style="line-height: line-height: 28px;">
                <strong class="italic font-semibold">
                  Strategic planning is key to achieving long-term social change.
                </strong><br />
                We offer bespoke strategies, including impactful advocacy, tailored communication plans, and cutting-edge digital campaigns. By combining data-driven insights with a deep understanding of your goals, we help you craft strategies that drive meaningful and sustainable impact.
              </p>
              <div class=" mt-4 flex-grow flex items-end">
                <a href="{{ url('Work-Strategy') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text font-[600] font-opensans text-[18px]" style="line-height: 20px; ">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Section 2: Training & Capacity Building -->
          <div class="border-b bg-[#DDC2FF] space-y-8 md:p-12 p-6 rounded-[16px] md:h-[450px] lg:h-full xl:h-[450px]  transition-all duration-700 md:mt-4 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
             <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                style="line-height: normal;">
                Training & Capacity Building
              </h3>
            </div>
            <div class=" text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
               <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]" style="line-height: line-height: 28px;">
                <strong class="italic font-semibold">
                  A skilled and empowered workforce is crucial for social change.
                </strong><br />
                Our flexible, learner-centered training programs cover communication, advocacy, impact storytelling, campaign development, and more. Through interactive methodologies and customized content, we equip individuals and organizations with the practical skills needed to drive positive social change.
              </p>
              <div class=" mt-4 flex-grow flex items-end">
                <a href="{{ url('Work-Traning') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text font-[600] font-opensans text-[18px]" style="line-height: 20px; ">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Section 3: Engagement Events -->
          <div class="border-b space-y-8 bg-[#FFE4BB] md:p-12 p-6 rounded-[16px] md:h-[450px] lg:h-full xl:h-[450px]  transition-all duration-700 md:mt-6 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
             <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                style="line-height: normal;">
                Engagement Events
              </h3>
            </div>
            <div class=" text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
               <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]" style="line-height: line-height: 28px;">
                <strong class="italic font-semibold">
                  Meaningful change thrives on connection and collaboration.
                </strong><br />
                We organize impactful events, including conferences, focus group discussions, webinars, and community dialogues, to foster dialogue and drive action. We also push the boundaries with art exhibitions, public performances, and interactive simulations to engage and inspire.
              </p>
              <div class=" mt-4  flex-grow flex items-end">
                <a href="{{ url('Work-Engagement') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text font-[600] font-opensans text-[18px]" style="line-height: 20px; ">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Section 4: Program Design and Implementation -->
          <div class="border-b bg-[#FFDED0] space-y-8 md:p-12 p-6 rounded-[16px] md:h-[450px] lg:h-full xl:h-[450px]  transition-all duration-700 md:mt-6 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
             <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem] lg:text-[1.5rem] xl:text-[2rem]"
                style="line-height: normal;">
                Program Design and Implementation
              </h3>
            </div>
            <div class=" text-accentTextDark font-normal  flex flex-col gap-4 flex-grow">
               <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]" style="line-height: line-height: 28px;">
                <strong class="italic font-semibold">
                  Effective social impact requires innovative program design and flawless execution.
                </strong><br />
                We collaborate with you to develop and implement programs that address community needs, drive advocacy, and achieve sustainable change. From concept development to curriculum design, we turn ideas into tangible solutions that create lasting social impact.
              </p>
              <div class=" mt-4 flex-grow flex items-end">
                <a href="{{ url('Work-Program') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text font-[600] font-opensans text-[18px]" style="line-height: 20px; ">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

            </div>
          </div>
        </div>
      </section>
           @include('components.clients')
      <!-- Section Seven -->
      @include('components.section-one')
    </main>
@include('components.footer')
  </body>
</html>
