<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stories unheard</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- <script src="./scroll.js" defer></script> -->
  </head>
    @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="bg-accentTextLight">
    @include('components.header')
    <main>
      <!-- our innitiantives insider -->
      <section class="md:p-6 p-2 rounded md:mt-0 mt-[10px]">
        <div class="mx-auto lg:max-w-4xl xl:max-w-7xl max-w-7xl px-4 sm:px-6 lg:px-6">
            <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
             <a href="{{ url('Initiatives-Initiatives') }}" class="flex items-center gap-1 font-opensans font-[400] text-[16px]" style="line-height: normal; letter-spacing: -0.32px;">
                Our initiative
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="8 4 16 12 8 20" />
                </svg>
              </a>
               <p class="text-primary font-[500] font-[16px] font-opensans" style="line-height: normal; letter-spacing: -0.32px;">The Stories Unheard</p>
            </div>
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
             <h1
                 class="md:text-5xl xl:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-medium leading-[53.32px] md:leading-[80px]"
                 >
                 <!-- style="line-height: 80px;" -->
                Stories Unheard
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 ml-auto">
              <p
              class="text-accentTextDark md:mb-6 mb-0 md:text-[20px] xl:text-[20px] lg:text-lg md:leading-[31px] leading-[25px] text-[16px] font-opensans font-[400]"
              style="line-height: 31px; ">
                <!-- note also how some start wiht boldness why some dont  -->
                An expository documentary production investigating critical
                social issues often ignored or silenced in underdeveloped
                communities to promote awareness and advocate for positive
                change.
              </p>
            </div>
          </div>
          <!-- Image Section -->
      <!--     <div class="my-6 w-full h-96">
            <img
              src="{{ asset('Images/or.png') }}"
              alt="the founder of LSIV "
              class="w-full h-full object-cover object-center rounded-md"
            />
          </div> -->
        </div>
      </section>
      <section class="p-6 overflow-hidden mt-[-30px]">
      <div class="overflow-hidden w-full  lg:ml-[4.5rem] ">
            <div
              class="flex   transition-transform duration-500 ease-in-out md:p-4 w-max mt-4"
              id="carouselTrack"
            >
              <!-- card 2 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/oaG-PvkqH8o?si=EW2fym0Q1ulH7VtZ" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/03BopKEZcj8?si=hoIVuN-VOVkT6iUE"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/4VH5JUakQGM?si=-NlIRU6mDkhJSIf8"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/4ZIS0TmRZkg?si=RnmLL57nRlfhIVja"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
            <!-- card 5 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/Af8iWtyWFdw?si=ZfBf7MYgkMFfhX8J"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                   src="https://www.youtube.com/embed/J43r6cOYIkI?si=dCXPUti8AjZ1VJla" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>

              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/L4bDdTrdLao?si=40LhDggjWKcSikV8"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/OyO_EUyY1f8?si=aMYRrBgHOs4deXK7"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/xjwh0_zzd3A?si=cFVI0npgiG-JeAn8" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/umCV8WgrJEI?si=smCtlExPWD_bo02-"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div> 
        <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                     src="https://www.youtube.com/embed/Q4dSIwv4NlA?si=R0eiF0kfTxKZbJ1H"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[532.191px] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    
                    src="https://www.youtube.com/embed/JL6T8kFp57I?si=RUJQ6RVNxwrRWg_7"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
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
      <section class="bg-secondary py-6 rounded">
      <div class="xl:max-w-[90rem] mx-auto lg:max-w-4xl  max-w-7xl  px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
       <h2
       class="md:text-[48px] xl:text-[48px] lg:text-[34px]  my-8 leading-[42.66px] text-[32px] md:mb-6 m-2 font-playfair font-[500] md:leading-[63.98px] md:p-2" 
          style="line-height: normal;">
            <!-- note some are our aproach -->
            Our Approach
          </h2>
          <p class="font-normal text-base leading-[25px] md:text-[20px] font-opensans p-6 md:pl-5 pl-3 md:leading-[31px]" >
           <span class="font-[600]"> We </span> use the power of documentary filmmaking to tackle sensitive social issues often ignored or silenced. We have created compelling documentaries that explore themes of:
          </p>
          <ul class="custom-bullet-list space-y-4 md:pl-5 font-opensans"          style="line-height: normal;">
<li class="flex items-start gap-2 mb-4 text-base md:leading-[31px] leading-[25px] md:text-[20px] font-opensans">              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Vulnerability:</span> Street children, widows, orphaned children
              </div>
            </li>

<li class="flex items-start gap-2 mb-4 text-base md:leading-[31px] leading-[25px] md:text-[20px] font-opensans">              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Health:</span> Malaria medication misuse, caring for children with Down syndrome
              </div>
            </li>

<li class="flex items-start gap-2 mb-4 text-base md:leading-[31px] leading-[25px] md:text-[20px] font-opensans">              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Economic Realities:</span> Street food vendors, informal work
              </div>
            </li>

<li class="flex items-start gap-2 mb-4 text-base md:leading-[31px] leading-[25px] md:text-[20px] font-opensans">              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Social Justice:</span> Cannabis legalisation, women's rights, domestic violence
              </div>
            </li>

<li class="flex items-start gap-2 mb-4 text-base md:leading-[31px] leading-[25px] md:text-[20px] font-opensans">              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Hidden Realities:</span> Sports betting addiction, child adoption system
              </div>
            </li>
          </ul>

          <div class="pl-6 mt-4 text-base flex flex-col gap-5">
            <p class="font-opensans" style="line-height: 31px">
              By bringing these stories to light, we aim to raise public
              awareness, challenge stigma, and advocate for positive change.
            </p>
          </div>
        </div>
      </section>
      <!-- Images of Impact -->
      <section class="bg-accentTextLight py-6 rounded p-6">
      <div class="xl:max-w-[90rem] mx-auto lg:max-w-4xl  max-w-7xl   sm:px-6 lg:px-6 md:p-4  md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
       <h2
       class="md:text-[48px] xl:text-[48px] lg:text-[34px]  my-8 leading-[42.66px] text-[32px] md:mb-6 m-2 font-playfair font-[500] md:leading-[63.98px] md:p-2"  
          style="line-height: normal;">
              Impact
            </h3>
            <ul class="custom-bullet-list space-y-4 md:pl-5 font-opensans"
            style="line-height: normal;">
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">Orphanage Grant</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">Widows Rights</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">KEKE Women Increased</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">Sugarcane Man Increased</span></li>
          <li class="flex  gap-2 mt-2">
               <span class="mt-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span>
                 <span class="font-[600] break-words">Street Food Vendor GTB, CNN, Used as Storytelling</span
                >
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
        <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
        <h2
            class="text-3xl md:text-[60px] lg:text-[40px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair" style="line-height: normal;"
          >
            Join us in using storytelling to create <br> a more just and equitable world.
          </h2>
         <p class="md:text-[24px] xl:text-[24px] lg:text-lg text-[16px] font-[400] md:mb-0 mb-4 font-medium font-opensans"> 
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
<!-- <script type="text/javascript">
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
</script> -->