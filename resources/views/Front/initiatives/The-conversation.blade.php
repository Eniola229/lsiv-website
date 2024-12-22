<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Igniting Potential: The Conversation</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./scroll.js" defer></script>
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="bg-accentTextLight">
   @include('components.header')
    <main>
      <!-- our innitiantives insider -->
     <section class="md:p-6 p-2 rounded md:mt-0 mt-[50px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 md:mt-0 mt-[-50px]">
            <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
              <a href="{{ url('Initiatives-Initiatives') }}" class="flex items-center gap-1 font-opensans font-[400] text-[16px]" style="line-height: normal; letter-spacing: -0.32px;">
                Our initiative
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="8 4 16 12 8 20" />
                </svg>
              </a>
               <p class="text-primary font-[600] font-[16px] font-opensans" style="line-height: normal; letter-spacing: -0.32px;">The Conversation</p>
            </div>
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h1
                class="md:text-5xl lg:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-[00] leading-normal"
              style="line-height: 80px;">
               The Conversation
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark md:mb-6 mb-0 md:text-[26px] text-[16px] font-opensans font-[400]"
              style="line-height: 31px; ">
                <!-- note also how some start wiht boldness why some dont  -->
                 <span class="font-[600]"> The Conversation </span> fosters meaningful dialogue
                between generations, connecting young people with established
                mentors to inspire growth. Through engaging conferences, we
                create a platform for knowledge exchange and empower young
                individuals to navigate their life journeys.
              </p>
            </div>
          </div>
          <!-- Image Section -->
   <!--        <div class="my-6 w-full h-96">
            <img
              src="{{ asset('Images/po-1.jpeg') }}"
              alt="the founder of LSIV "
              class="w-full h-full object-cover object-center rounded-md"
            />
          </div> -->
        </div>
      </section class="px-6">
       <section class="p-6 mt-[-30px]">
          <div class="overflow-hidden w-full">
            <div
              class="flex transition-transform duration-500 ease-in-out w-max"
              id="carouselTrack"
            >
              <!-- card 1 -->
               <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734695517/24491159509abdc6f1220915d90df530_bebdfy.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734763223/Frame_1618873212_2_zwftup.png') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349974/13522962_1021483164610161_1550169979154871383_o_qqjvyc.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349979/13528624_1021483467943464_1932851541674646342_o_q79gcu.jpg') }}"
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
            </div>
          </div>
          <div class="flex justify-between items-center mb-6 p-4 md:mt-0 mt-[-110px]">
            <h2 class="text-3xl md:text-5xl font-playfair font-normal">
             <!-- Images of Impact -->
            </h2>
           <button
              id="scrollBtn"
              class="text-xl font-semibold font-opensans capitalize md:ml-auto self-end md:self-auto"
            >
              <span class="md:hidden">Next &rarr;</span>
              <span class="hidden md:inline">Scroll &rarr;</span>
            </button>
          </div>
        </section>
      <!-- our approach  -->
      <section class="bg-secondary py-16 rounded">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
          <h2
            class="md:text-[48px] text-[32px] md:mb-6 m-2 font-playfair font-[500] leading-normal md:p-2"
          style="line-height: normal;">
            Fostering Connections
          </h2>
            <ul class="custom-bullet-list font-opensans" style="line-height: normal;">
              <li class="flex items-start gap-2 mb-4 text-[20px]">
                <span class="flex-shrink-0 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                  </svg>
                </span>
                <div>
                   <span class="font-[600]">Intergenerational Dialogue:</span> We organize conferences that bring together experienced mentors and young people to learn from each other's perspectives.
                </div>
              </li>

              <li class="flex items-start gap-2 mb-4 text-[20px]">
                <span class="flex-shrink-0 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                  </svg>
                </span>
                <div>
                   <span class="font-[600]">Knowledge Sharing:</span> Established professionals share their knowledge and experiences, equipping young people with valuable personal and professional development insights.
                </div>
              </li>

              <li class="flex items-start gap-2 mb-4 text-[20px]">
                <span class="flex-shrink-0 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                  </svg>
                </span>
                <div>
                   <span class="font-[600]">Mentorship Opportunities:</span> The Conversation Initiative facilitates connections between young people and potential mentors, fostering long-term guidance and support.
                </div>
              </li>
            </ul>

        </div>
      </section>
      <!-- Images of Impact -->
      <section class="bg-accentTextLight py-16 rounded">
          <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- IMPACTS List -->
          <div class="max-w-full mx-auto px-6 sm:px-6 md:px-6 md:p-4 p-1 mt-2">
            <h2
            class="md:text-[48px] text-[32px] md:mb-6 m-2 font-playfair font-[500] leading-normal md:p-2"
          style="line-height: normal;">
              Impact
            </h3>
              <ul class="custom-bullet-list font-opensans" style="line-height: normal;">
                <li class="flex items-start gap-2 mb-4 text-[20px]">
                  <span class="flex-shrink-0 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                    </svg>
                  </span>
                  <div>
                     <span class="font-[600]">Empowering Youth:</span> Our inaugural teenagers' conference attracted over 100 secondary school students in Lagos, providing them with valuable learning opportunities and mentorship connections.
                  </div>
                </li>

                <li class="flex items-start gap-2 mb-4 text-[20px]">
                  <span class="flex-shrink-0 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                    </svg>
                  </span>
                  <div>
                     <span class="font-[600]">Building a Brighter Future:</span> By bridging the generational gap, we empower young people to reach their full potential and contribute meaningfully to society.
                  </div>
                </li>
              </ul>


            <!-- note you might want to render that dynamically only if there is more added -->
            <!-- <div class="pl-6 mt-4 text-base flex flex-col gap-5">
              <p>
                 <span class="font-[600]"> MyBodyIsMine</span> equips young people with the
                knowledge and confidence to navigate the complexities of
                adolescence and make informed choices about their sexual and
                reproductive health.
              </p>
               <span class="font-[600]">
                By investing in SRH education, we invest in a healthier and more
                empowered future for all.
              </span>
            </div> -->
          </div>
        </div>
      </section>

      <!-- Section Six -->
  <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair" style="line-height: normal;"
          >
          Join us in fostering <br> impactful conversations.
          </h2>
           <p class="md:text-[24px] text-[16px] font-[400] mb-4 font-medium font-opensans" style="line-height: normal;"> 
           Learn more about The Conversation and how you <br> can connect young people with experienced mentors.
          </p>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans" style="line-height: 20px;">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>
    </main>
      @include('components.footer')
  </body>
</html>
<script type="text/javascript">
const scrollButton = document.getElementById("scrollBtn");
const carouselTrack = document.getElementById("carouselTrack");

let startX;
let isDragging = false;
let initialScrollPosition = 0;

// Function to determine the number of visible cards based on screen width
function getVisibleCards() {
  if (window.innerWidth >= 1024) {
    return 3;
  } else if (window.innerWidth >= 768) {
    return 2;
  } else {
    return 1;
  }
}

const totalCards = document.querySelectorAll(".card-image-container").length;
let visibleCards = getVisibleCards();
const cardWidth = document.querySelector(".card-image-container").offsetWidth;
let maxScroll = (totalCards - visibleCards) * cardWidth;
let scrollPosition = 0;

function updateMaxScroll() {
  visibleCards = getVisibleCards();
  maxScroll = (totalCards - visibleCards) * cardWidth;
}

function scrollOn() {
  scrollPosition += cardWidth;

  if (scrollPosition > maxScroll) {
    scrollPosition = 0;
  }

  carouselTrack.style.transition = "transform 0.5s ease-in-out";
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}

scrollButton.addEventListener("click", scrollOn);
document.addEventListener("keyup", (e) => {
  if (e.key === "ArrowRight") {
    scrollOn();
  }
});

window.addEventListener("resize", updateMaxScroll);

// Drag and Swipe Functionality
carouselTrack.addEventListener("mousedown", (e) => {
  isDragging = true;
  startX = e.pageX;
  initialScrollPosition = scrollPosition;
  carouselTrack.style.transition = "none";
});

carouselTrack.addEventListener("mousemove", (e) => {
  if (!isDragging) return;
  const deltaX = e.pageX - startX;
  scrollPosition = initialScrollPosition - deltaX;
  
  // Clamp the scroll position
  if (scrollPosition < 0) scrollPosition = 0;
  if (scrollPosition > maxScroll) scrollPosition = maxScroll;

  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
});

carouselTrack.addEventListener("mouseup", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});

carouselTrack.addEventListener("mouseleave", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});

// Touch events for mobile
carouselTrack.addEventListener("touchstart", (e) => {
  startX = e.touches[0].pageX;
  initialScrollPosition = scrollPosition;
  isDragging = true;
  carouselTrack.style.transition = "none";
});

carouselTrack.addEventListener("touchmove", (e) => {
  if (!isDragging) return;
  const deltaX = e.touches[0].pageX - startX;
  scrollPosition = initialScrollPosition - deltaX;

  if (scrollPosition < 0) scrollPosition = 0;
  if (scrollPosition > maxScroll) scrollPosition = maxScroll;

  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
});

carouselTrack.addEventListener("touchend", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});
</script>