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
      <section class="py-16 rounded bg-accentTextLight md:mt-0 mt-[-30px]">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
          <div class="mb-6 space-y-2">
            <h1
              class="md:text-5xl xl:text-7xl text-[40px] font-playfair font-medium leading-normal"
            style="line-height: normal;">
                How we work with our clients
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-3/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-normal mb-2 md:text-xl lg:text-lg xl:text-xl text-[16px] font-opensans"
               style="line-height: 33px; ">
                At LSIV, we recognize the distinct strengths and objectives of
                each organization and individual. That's why we adopt a
                collaborative approach, tailoring our services to meet your
                specific requirements.
              </p>
             <p
                class="text-primary font-[600] leading-[2.1675rem] mb-2 text-base md:text-xl lg:text-lg xl:text-xl font-opensans"
              style="line-height: 33px; ">
                Here's a peek into our partnerships with different change-makers
                and our key client groups
              </p>
            </div>
          </div>
          <div class="my-6 w-full">
    <div x-data="{ selected: null }" class="description-container grid md:grid-cols-2 grid-cols-1 gap-4">
      <!-- discuss 1 -->
      <div class="disscuss-item border-b  bg-secondary md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
      x-bind:style="selected !== 1 ? 'height:154px':'height:100%'">
        <div 
          class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer" 
          @click="selected !== 1 ? selected = 1 : selected = null">
          <h3 
            class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] lg:text-xl xl:text-[28px] text-xl md:text-[28px] p-6" 
            style="line-height: normal;">
            Philanthropy Organizations & NGOs/Non-Profits
          </h3>
          <span class="icon text-xl md:text-[28px] font-[500] font-sans mr-4">
            <svg x-show="selected !== 1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <svg x-show="selected === 1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </span>
        </div>
        <div 
          class="faq-answer overflow-hidden transition-all duration-700" 
          x-ref="container1" 
          x-bind:style="selected === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : 'max-height: 0px;'">
          <div class="mt-4 text-accentTextDark font-[400] leading-[2.1675rem] mb-2 md:text-[16px] text-[16px] p-6" 
            style="line-height: 26px;">
            We work closely with you to design and implement effective program strategies that align with your funding priorities. Our services include program designs, capacity-building programs for your grantees, impactful communication materials, and advocacy campaigns to amplify the impact of your philanthropic investments and enhance your social impact efforts.
          </div>
        </div>
      </div>

      <!-- discuss 2 -->
      <div class="disscuss-item border-b bg-[#FFC6DB] md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
      x-bind:style="selected !== 2 ? 'height:154px':'height:100%'">
        <div 
          class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer" 
          @click="selected !== 2 ? selected = 2 : selected = null">
          <h3 
            class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] text-xl lg:text-xl xl:text-[28px] md:text-[28px] p-6" 
            style="line-height: normal;">
            Research & Academic Institutions
          </h3>
          <span class="icon text-xl md:text-[28px] font-[500] font-sans mr-4">
            <svg x-show="selected !== 2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <svg x-show="selected === 2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </span>
        </div>
        <div 
          class="faq-answer overflow-hidden transition-all duration-700" 
          x-ref="container2" 
          x-bind:style="selected === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : 'max-height: 0px;'">
          <div class="mt-4 text-accentTextDark leading-[2.1675rem] mb-2 font-[400] md:text-[16px] text-[16px] p-6" 
            style="line-height: 26px;">
            Our expertise helps you enhance your research projects on social impact. We support research communication by analyzing data, providing valuable insights, and visualizing findings. Our services also include fostering community engagement, disseminating knowledge, and developing curriculum materials and training programs.
          </div>
        </div>
      </div>

      <!-- discuss 3 -->
      <div class="disscuss-item border-b bg-[#F1DAB7] md:p-3  p-2 rounded-[16px] transition-[all] duration-700"
      x-bind:style="selected !== 3 ? 'height:154px':'height:100%'">
        <div 
          class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer" 
          @click="selected !== 3 ? selected = 3 : selected = null">
          <h3 
            class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] lg:text-xl xl:text-[28px] md:text-[28px] p-2 md:p-4" 
            style="line-height: normal;">
            International Development Organizations & Government Agencies
          </h3>
          <span class="icon text-xl md:text-[28px] font-[500] font-sans mr-4">
            <svg x-show="selected !== 3" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <svg x-show="selected === 3" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </span>
        </div>
        <div 
          class="faq-answer overflow-hidden transition-all duration-700" 
          x-ref="container3" 
          x-bind:style="selected === 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : 'max-height: 0px;'">
          <div class="mt-4 text-accentTextDark leading-[2.1675rem] mb-2 font-[400] md:text-[16px] text-[16px] p-6 " 
            style="line-height: 26px;">
            Our work with you is not just about adapting international programs and campaigns to local contexts. It's about making a real impact on social issues and driving sustainable development. We partner to co-create and implement social development initiatives. Our capacity-building initiatives also equip government staff with the skills to create and sustain impactful social programs.
          </div>
        </div>
      </div>

      <!-- discuss 4 -->
      <div class="disscuss-item border-b bg-[#DDC2FF] md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
      x-bind:style="selected !== 4 ? 'height:154px':'height:100%'">
        <div 
          class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer" 
          @click="selected !== 4 ? selected = 4 : selected = null">
          <h3 
            class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] text-xl lg:text-xl xl:text-[28px] md:text-[28px] p-6" 
            style="line-height: normal;">
            Media Firms
          </h3>
          <span class="icon text-xl md:text-[28px] font-[500] font-sans mr-4">
            <svg x-show="selected !== 4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <svg x-show="selected === 4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </span>
        </div>
        <div 
          class="faq-answer overflow-hidden transition-all duration-700" 
          x-ref="container4" 
          x-bind:style="selected === 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : 'max-height: 0px;'">
          <div class="mt-4 text-accentTextDark leading-[2.1675rem] mb-2 font-[400] md:text-[16px] text-[16px] p-6" 
            style="line-height: 26px;">
            We bridge the gap between media and social impact organizations by collaborating with journalists and media producers to create compelling stories and campaigns that illuminate social issues and inspire action.
          </div>
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>
      </section>
      <!-- Section for Clients & Partners -->
       <!-- Section for Clients & Partners -->
       @include('components.clients')
      <!-- Section Seven -->
      @include('components.section-one')
    </main>
      @include('components.footer')
       
  </body>
</html>
