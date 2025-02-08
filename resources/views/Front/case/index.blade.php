<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Designing Campaigns For a Better Tomorrow</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="./app.js" defer></script>
  </head>
   @vite('resources/css/app.css')
   @vite('resources/js/app.js')
  <body class="bg-secondary">
    @include('components.header')
     <main>
      <section class="bg-secondary rounded md:mt-0 mt-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4">
          <!-- Container flex -->
          <div class="flex lg:flex-row-reverse flex-col-reverse gap-4 md:mt-4">
            <!-- Image Section -->
            <div class="lg:w-1/2 h-auto md:h-[30rem]">
              <img
                src="{{ asset($blog->cover_image) }}"
                alt="climate change advocacy"
                class="md:w-[588px] w-full h-[380px] object-cover rounded-[16px] md:mb-0 mb-8"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-6">
              <div>
            <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
              <a href="{{ url('Insights-Case') }}" class="flex items-center gap-1 font-opensans font-[400]" style="line-height: normal; letter-spacing: -0.32px;">
               Case Study 
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="8 4 16 12 8 20" />
                </svg>
              </a>
              <p class="text-primary font-[500] font-[16px] font-opensans" style="line-height: normal; letter-spacing: -0.32px;">{{ $blog->sub_title }}</p>
            </div>
                <h1
                 class="md:text-[56px] lg:text-[56px] text-[40px] md:mb-6 mb-2 font-playfair font-[500] leading-normal"
                style="line-height: normal;">
                  {{ $blog->title }}
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-accentTextLight py-12 md:py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container grid -->
          <div
            class="grid lg:grid-cols-[1fr_25rem_20rem] grid-cols-1 gap-12 relative"
          >
            <!-- descrition -->
             <div class="lg:col-span-2 md:w-4/5 w-full md">
            <iframe 
                srcdoc="{!! htmlspecialchars($blog->content) !!}" 
                class="w-full border-none" 
                style="overflow: hidden;" 
                scrolling="no"
                onload="resizeIframe(this)">
            </iframe>
        </div>

        <script>
            function resizeIframe(iframe) {
                // Ensure the content height fits perfectly
                const iframeDoc = iframe.contentWindow.document;
                iframe.style.height = iframeDoc.documentElement.scrollHeight + "px";
            }
        </script>



            <!-- client-information -->
            <div
              class="bg-miscellanous h-auto lg:h-[31rem] lg:top-0 lg:sticky w-full lg:w-[28.125rem] right-0 py-5"
            >
              <div class="divide-y-2 divide-[#353535] px-6 font-opensans">
                <div class="py-4">
                  <h2 class="text-[16px] font-opensans font-[600]" style="line-height: normal;">Client Name</h2>
                  <p class="font-opensans font-[400] text-[14px] mt-1" style="line-height: normal;">{{ $blog->sub_title }}</p>
                </div>
                <div class="flex-1 py-4">
                  <h2 class="text-[16px] font-opensans font-[600]" style="line-height: normal;">Project Timeline</h3>
                  <p class="font-opensans font-[400] text-[14px] mt-1" style="line-height: normal;">{{ $blog->project_timeline }}</p>
                </div>
                <div class="flex-1 py-4">
                  <h2 class="text-[16px] font-opensans font-[600]" style="line-height: normal;">Our Service</h3>
                  <p class="font-opensans font-[400] text-[14px] mt-1" style="line-height: normal;">{{ $blog->our_service }}</p>
                </div>
                <div class="py-4">
                  <h2 class="text-[16px] font-opensans font-[600]" style="line-height: normal;">Other Case Studies:</h3>
                  <ul class="list-disc">
                  @foreach($blogs->take(3) as $blogging)
                  <a href="{{ url('client/blog', $blogging->id) }}">
                    <p class="font-opensans font-[400] text-[14px] mt-2" style="line-height: normal;">
                     {{ $blogging->title }}
                    </p>
                  </a>
                    @endforeach
                  </ul>
                  <a
                    href="{{ url('Insights-Case') }}"
                    class="font-[400] text-[14px] justify-center flex"
                    style="line-height: normal;">View all case studies</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- pagination button -->
      <div
        class="flex flex-col md:flex-row justify-center items-center mt-12 md:mt-24 gap-4 md:gap-3"
      >
        <!-- Previous Button -->
        @if ($currentBlogIndex > 0)
          <a
            href="{{ url('client/blog', $blogs[$currentBlogIndex - 1]->id) }}"
            class="bg-miscellanous text-gray-700 font-semibold py-2 px-4 rounded-full hover:bg-gray-300"
          >
            &lt; Previous case study
          </a>
        @else
          <button
            class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-full cursor-not-allowed"
            disabled
          >
            &lt; Previous case study
          </button>
        @endif

        <!-- Case study numbers -->
          <div class="flex justify-center flex-wrap gap-2 md:space-x-4">
            @foreach($blogs as $index => $blogging)
              <a
                href="{{ url('client/blog', $blogging->id) }}"
                class="{{ request()->route('id') == $blogging->id ? 'bg-primary text-white' : 'bg-gray-200 text-black' }} py-2 px-4 rounded-full hover:bg-primary-light"
              >
                {{ $index + 1 }}
              </a>
            @endforeach
          </div>
        <!-- Next Button -->
        @if ($currentBlogIndex < count($blogs) - 1)
          <a
            href="{{ url('client/blog', $blogs[$currentBlogIndex + 1]->id) }}"
            class="bg-miscellanous text-gray-700 font-semibold py-2 px-4 rounded-full hover:bg-gray-300"
          >
            Next case study &gt;
          </a>
        @else
          <button
            class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-full cursor-not-allowed"
            disabled
          >
            Next case study &gt;
          </button>
        @endif
      </div>

          <!--  -->
        </div>
      </section>
    </main>

      <!-- Section for Clients & Partners -->
          @include('components.clients')
      <!-- Section Seven -->
      @include('components.section-one')
    </main>
   @include('components.footer')
  </body>
</html>
<script type="text/javascript">
    const scrollButton = document.getElementById("scrollBtn");
const carouselTrack = document.getElementById("carouselTrack");

// Function to determine the number of visible cards based on screen width
function getVisibleCards() {
  if (window.innerWidth >= 1024) {
    // Large screens (lg)
    return 3;
  } else if (window.innerWidth >= 768) {
    // Medium screens (md)
    return 2;
  } else {
    // Small screens (sm)
    return 1;
  }
}

const totalCards = document.querySelectorAll(".card-image-container").length;
let visibleCards = getVisibleCards(); // Get initial visible cards
const cardWidth = document.querySelector(".card-image-container").offsetWidth;
let maxScroll = (totalCards - visibleCards) * cardWidth; // Max scroll value
let scrollPosition = 0;

function updateMaxScroll() {
  visibleCards = getVisibleCards(); // Update visible cards
  maxScroll = (totalCards - visibleCards) * cardWidth; // Recalculate max scroll
}

function scrollOn() {
  // Scroll forward by the width of one card
  scrollPosition += cardWidth;

  // If we've reached the end, reset to the beginning
  if (scrollPosition > maxScroll) {
    scrollPosition = 0; // Go back to the first card
  }

  // Apply smooth scroll transition
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}

scrollButton.addEventListener("click", scrollOn);
document.addEventListener("keyup", (e) => {
  // Scroll if the arrow key is pressed
  if (e.key === "ArrowRight") {
    scrollOn();
  }
});

// Update max scroll on window resize
window.addEventListener("resize", updateMaxScroll);

</script>