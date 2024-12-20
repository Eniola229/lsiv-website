<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - our initiatives</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body>
    <main class="bg-secondary">
      @include('components.header')
      <!-- our initialtives  -->
    <section class="bg-secondary py-16 rounded text-accentTextDark max-w-7xl mx-auto md:mt-0 mt-[-10px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 justify-center items-center md:mt-0 mt-[-40px]">
          <div class="mb-12 space-y-2">
            <h1
              class="md:text-[72px] lg:text-[72px] text-[40px] font-playfair font-medium leading-normal"
            style="line-height: normal;">
              Driving Change,One <span class="text-primary"> Initiative </span>
              at a Time.
            </h1>
            <p class="font-opensans md:text-2xl text-[16px]" style="line-height: normal;">
              Discover how our initiatives are shaping a brighter future
            </p>
          </div>
        <div class="container mt-8">
          <!-- GRID -->
          <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-y-8">
            <!-- card one -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350125/19800101000031_IMG_3740_ekpkny.jpg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]" style="line-height: normal;">
                  MyBodyIsMine
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1" style="line-height: 26px;">
                  A human-rights comprehensive sexuality education program empowering children, teenagers and young adults with the knowledge and confidence to make informed choices about their sexual and reproductive health (SRH).
                </p>
                <a href="{{ url('Initiatives-MyBodyIsMine') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                  <span class="btn-text" style="line-height: 20px;">Learn more</span>
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

            <!-- card 2 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350018/54521716_2088500577908409_6915712892130033664_n_lkmuku.jpg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]" style="line-height: normal;">
                  Adopt a Community
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1" style="line-height: 26px;">
                  A collaborative effort to empower grassroots and marginalised communities through participatory development programs, addressing issues like menstrual hygiene, safe sex, gender-based violence, and vocational skills training.
                </p>
                <a href="{{ url('Initiatives-AdoptCommunity') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                 <span class="btn-text" style="line-height: 20px;">Learn more</span>
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

            <!-- card 3 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734734920/Frame_1618873260_kaogz9.png') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]" style="line-height: normal;">
                  No Day Off
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1" style="line-height: 26px;">
                  Fights period poverty and improves girls' school attendance by providing them with reusable sanitary pads and menstrual hygiene education.
                </p>
                <a href="{{ url('Initiatives-Nodaysoff') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                 <span class="btn-text" style="line-height: 20px;">Learn more</span>
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

            <!-- card 4 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734695517/24491159509abdc6f1220915d90df530_bebdfy.jpg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]" style="line-height: normal;">
                  The Conversation
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1" style="line-height: 26px;">
                  Fosters meaningful dialogue between generations by connecting young people with experienced mentors for inspiration, knowledge sharing, and mentorship opportunities.
                </p>
                <a href="{{ url('Initiatives-Conversation') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                 <span class="btn-text" style="line-height: 20px;">Learn more</span>
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

            <!-- card 5 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350391/Stories_Unheard_xnblxp.jpg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]" style="line-height: normal;">
                  Stories Untold
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1" style="line-height: 26px;">
                  Uses the power of documentary filmmaking to shed light on critical social issues often ignored or silenced, promoting awareness and advocating for positive change.
                </p>
                <a href="{{ url('Initiatives-Storiesunhear') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                 <span class="btn-text" style="line-height: 20px;">Learn more</span>
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

            <!-- card 6 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350003/51552833_1034622810054230_7910197635917545472_n_i5ihmr.jpg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  The Lolo Cynthia Show
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1" style="line-height: 26px;">
                  An award-winning program that tackles sensitive social issues through powerful storytelling. By amplifying real-life experiences and fostering open conversations, the show empowers individuals and communities to drive positive social change.
                </p>
                <a href="{{ url('Initiatives-Lolocythia') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                 <span class="btn-text" style="line-height: 20px;">Learn more</span>
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
          </div>
        </div>

        </div>
      </section>
      <!-- Section for Clients & Partners -->
           @include('components.clients')
      <!-- Section Seven -->
      @include('components.section-one')
    </main>
@include('components.footer')

  </body>
</html>
