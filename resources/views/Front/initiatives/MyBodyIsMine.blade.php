<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Empowering young people through sexuality education: MyBodyIsMine
      initiative
    </title>
    <link rel="stylesheet" href="../style.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- <script src="./scroll.js" defer></script> -->
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  <body class="text-accentTextDark"> 
  @include('components.header')
    <main class="">
      <!-- our innitiantives insider -->
      <section class="md:p-6 p-2 bg-white rounded md:mt-0 mt-[10px]">
        <div class="mx-auto lg:max-w-4xl xl:max-w-7xl max-w-7xl px-4 sm:px-6 lg:px-6">
          <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
            <a href="{{ url('Initiatives-Initiatives') }}" class="flex items-center gap-1 font-opensans font-[400] text-[16px]" style="line-height: normal; letter-spacing: -0.32px;">
              Our initiative
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="8 4 16 12 8 20" />
              </svg>
            </a>
            <p class="text-primary font-[500] text-[16px] font-opensans" style="line-height: normal; letter-spacing: -0.32px;">MyBodyIsMine</p>
          </div>

          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
            <h1
                 class="md:text-5xl xl:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-medium leading-[53.32px] md:leading-[80px]"
                 >
               MyBodyIsMine Initiative
              </h1>
            </div>
            <!-- Text Section -->
           <div class="lg:w-2/3 lg:pl-10 ml-auto">
              <p
                class="text-accentTextDark md:mb-6 mb-0 xl:text-[20px] lg:text-lg md:text-[20px] md:leading-[31px] leading-[25px] text-[16px] font-opensans font-[400]"
              style="line-height: 31px; ">
                MyBodyIsMine is a comprehensive sexuality education program
                designed to empower young people with the knowledge, values, and
                life skills they need to make informed choices about their
                sexual and reproductive health (SRH).
              </p>
            </div>
          </div>
      
        </div>
      </section>
      <section class="md:p-6 p-2 md:mt-0  overflow-hidden">
        
          <!-- <div class="overflow-hidden w-full">
            <div
              class="flex lg:ml-[4.5rem] transition-transform duration-500 ease-in-out p-4 w-max" -->
              <div class="overflow-hidden  w-full  lg:ml-[4.5rem] ">
            <div
              class="flex   transition-transform duration-500  ease-in-out md:p-4   mt-[-20px]"
              id="carouselTrack"
            >
              <!-- card 1 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350093/121108236_1502163333300173_7582746925688065409_n_rmcjfs.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 2 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350003/46853392_1928145910610544_4383844110818082816_n_nmumxl.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350192/DSC_0819_x5ayjr.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350127/19800101001947_IMG_3708_b0bfnp.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!---- card 5---->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350124/19800101000024_IMG_3739_zamplq.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350065/69431796_2360423254049472_1384818698862198784_n_rjvbiz.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350065/69300642_1164861163697060_570726906538754048_n_inpdoq.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350125/19800101000031_IMG_3740_ekpkny.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350278/IMG_2819_pkpmzw.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350276/IMG_2818_edsmfn.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734779704/Frame_1618873206_of7aqz.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734779704/Frame_1618873204_iycifg.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350256/IMG_2011_bpdjwi.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350252/IMG_1980_kn6iuf.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350126/19800101001153_IMG_3678_hctmfq.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350237/IMG_1972_squcly.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350225/IMG_1000_2_fklaro.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734780161/Frame_1618873211_1_wojevy.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734780092/Frame_1618873213_ttcvap.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350232/IMG_0920_gexsaz.jpg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
            
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734780274/Frame_1618873215_uxavsz.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734780274/Frame_1618873217_vif0pb.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734780273/Frame_1618873219_flc06y.png') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center mb-6">
              <h2 class="text-3xl md:text-5xl font-playfair font-normal">
                <!-- Images of Impact -->
              </h2>
              <div class="md:ml-auto self-end my-4 md:self-auto  space-x-8">

<button
id="scrollBtn-prev"
class="text-xl font-semibold font-opensans capitalize "
>
<span class="md:hidden"> &larr; Back</span>
<span class="hidden md:inline">&larr; Back </span>
</button>
<button
id="scrollBtn"
class="text-xl font-semibold font-opensans capitalize "
>
<span class="md:hidden">Next &rarr;</span>
<span class="hidden md:inline">Next &rarr;</span>
</button>
</div>
            </div>

          </section>
      <!-- our approach  -->
      <section class="bg-secondary py-16 rounded">
        <div class="xl:max-w-[90rem] mx-auto lg:max-w-4xl  max-w-7xl px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
          <h2
            class="md:text-[48px] xl:text-[48px] lg:text-[34px] mb-8 leading-[42.66px] text-[32px] md:mb-6 m-2 font-playfair font-[500] md:leading-[63.98px] md:p-2"
          style="line-height: normal;">
            Our Approach
          </h2>
          <ul class="custom-bullet-list space-y-4 md:pl-5 font-opensans">
             <li class="flex items-start gap-2 text-base md:text-[20px] font-[400] md:leading-[31px] leading-[25px]" style="line-height: 31px">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Rights-Based & Gender-Focused:</span> We ground our
                curriculum in human rights principles and gender equality,
                fostering self-esteem and promoting respectful relationships.
              </div>
            </li>
             <li class="flex items-start gap-2 text-base md:text-[20px] font-[400] md:leading-[31px] leading-[25px]" style="line-height: 31px">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Beyond Biology:</span> We go beyond simply providing
                factual information about human development and reproduction. Our
                program delves into critical topics like:
                <ul class="list-disc pl-5 space-y-1 mt-3">
                  <li>Family life, culture, and gender roles</li>
                  <li>Media literacy and body image</li>
                  <li>Consent and healthy relationships</li>
                  <li>Human rights, gender equality, and discrimination</li>
                  <li>Sexual abuse prevention</li>
                </ul>
              </div>
            </li>

            <li class="flex items-start gap-2 text-base md:text-[20px] font-[400] md:leading-[31px] leading-[25px]" style="line-height: 31px">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Interactive Learning:</span> Our engaging curriculum
                encourages critical thinking, clear communication, and responsible
                decision-making through interactive activities and discussions.
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- Images of Impact -->
      <section class="bg-accentTextLight py-16 rounded">
      <div class="xl:max-w-[90rem] mx-auto lg:max-w-4xl  max-w-7xl px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
          <h2
            class="md:text-[48px] xl:text-[48px] lg:text-[34px] mb-8 leading-[42.66px] text-[32px] md:mb-6 m-2 font-playfair font-[500] md:leading-[63.98px] md:p-2"
                  >
              Impact
            </h2>
            <ul class="custom-bullet-list space-y-4 md:pl-5 font-opensans">
            <li class="flex items-start gap-2 text-base md:text-[20px] font-[400] md:leading-[31px] leading-[25px]" style="line-height: 31px">
                    <span class="flex-shrink-0 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                      </svg>
                    </span>
                    <div>
                      <span class="font-[600]">Reaching Thousands:</span> MyBodyIsMine has successfully trained over 3,000 young people across various
                      secondary schools in Nigeria. We are also the official sex education provider for juvenile correctional centres in Lagos State.
                    </div>
                  </li>

                  <li class="flex items-start gap-2 text-base md:text-[20px] font-[400] md:leading-[31px] leading-[25px]" style="line-height: 31px">
                    <span class="flex-shrink-0 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                      </svg>
                    </span>
                    <div>
                      <span class="font-[600]">Global Recognition:</span> Our educational posters, available in four languages, have been used by over 10 million people across Africa, North America, Europe, and Asia.
                    </div>
                  </li>

                  <li class="flex items-start gap-2 text-base md:text-[20px] font-[400] md:leading-[31px] leading-[25px]" style="line-height: 31px">
                    <span class="flex-shrink-0 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                      </svg>
                    </span>
                    <div>
                      <span class="font-semibold">Shaping the Future:</span> We collaborate with leading organizations like amaze to develop culturally relevant SRH education materials tailored to the realities of young people in Africa.
                    </div>
                  </li>

            </ul>
            <div class=" mt-4  md:p-4">
              <p class=" font-opensans text-base leading-[25px] md:leading-[31px] md:text-[20px] xl:text-[20px] lg:text-lg" >
                <span class="font-[600]"> MyBodyIsMine</span> equips young people with the
                knowledge and confidence to navigate the complexities of
                adolescence and make informed choices about their sexual and
                reproductive health.
                <span class="font-[600]">
                By investing in SRH education, we invest in a healthier and more
                empowered future for all.
              </span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Six -->
      <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
         <h2 class="text-3xl md:text-[60px] lg:text-[34px] xl:text-[60px] font-medium mb-4 md:mb-2 font-playfair leading-normal" >
            Learn more about how you can partner with <br> with MyBodyIsMine to empower young <br> people in your community.
          </h2>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans" style="line-height: 20px;">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>
    </main>
    @include('components.footer')
  </body>
</html>
