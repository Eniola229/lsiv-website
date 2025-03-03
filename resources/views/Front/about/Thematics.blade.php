<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Ourthematicareas</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./themactics.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
   
  </head>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
  <body class="bg-[#F8F8FF]">
   @include('components.header')
    <main>
      <!-- Ourthematicareas -->
      <section class="bg-[#F8F8FF] py-16 rounded">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h1
                class="md:text-5xl xl:text-7xl text-[40px] mb-6 font-playfair font-[500] leading-normal"
              >
                Our Thematic Areas: Advancing the UN Sustainable Development
                Goals (SDGs)
              </h1>
            </div>
            <!-- Text Section -->
             <div class="lg:w-2/3  ml-auto">
              <p class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-opensans">
                Our organization is dedicated to advancing the United Nations
                Sustainable Development Goals (SDGs) and working with our
                partners to tackle pressing global issues that affect
                communities worldwide. We are committed to making a positive
                impact by raising awareness, advocating for change, and
                promoting community development.
              </p>
            </div>

          </div>
        </div>
      </section>

      <!-- discussion session 1 -->
      <section class="bg-secondary md:py-20 py-16 rounded">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- COnatainner flex -->
          <div class="flex items-start lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- flex card 1 -->

            <!-- Image Section -->
            <div class="lg:mt-16 lg:w-1/2 h-auto md:h-[38rem]">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653236/959192906101dc997360ba4328e8f28c_cjmpnm.jpg') }}"
                alt="Gender Equality and Empowerment: Building a More Equitable
                World (SDG 5)"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 h-[65rem] md:h-[52rem] lg:h-[68rem]  xl:h-[52rem] md:px-12 md:pb-40 md:pt-12">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] xl:text-[32px] lg:text-[28px] mb-6  font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Gender Equality and Empowerment: Building a More Equitable
                  World (SDG 5)
                </h2>
                <p class="font-opensans font-[400] text-[20px]">
                  We envision a world where everyone, regardless of gender, has
                  equal opportunities to reach their full potential. Our
                  approach includes:
                </p>
                <div class="w-full mt-4 md:mt-8">
        <div x-data="{selected: null}">
          <ul class="s">
            <!-- Accordion Item 1 -->
            <li class="relative border border-orange-300 rounded-[15px] mb-4">
              <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
                @click="selected !== 1 ? selected = 1 : selected = null">
                Advocacy for Girls and Women’s Rights
                <span class="text-accentTextDark text-sm">
                  <!-- Plus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 1">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                  </svg>
                  <!-- Minus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 1">
                    <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
                  </svg>
                </span>
              </button>
              <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" 
                x-bind:style="selected === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                <div class="px-6 py-4">
                  <p class="text-[16px] leading-[26px] md:leading-[30px]">
                    We support our partners in promoting gender equality through comprehensive advocacy and awareness campaigns. By conducting targeted focus groups and deep research, we understand societal attitudes and challenges. We then implement campaigns to address systemic barriers, foster behavior change, and challenge harmful gender norms.
                  </p>
                </div>
              </div>
            </li>

            <!-- Accordion Item 2 -->
            <li class="relative border border-orange-300 rounded-[15px] mb-4">
              <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
                @click="selected !== 2 ? selected = 2 : selected = null">
                Ending Violence Against Women and Girls (VAWG)
                <span class="text-accentTextDark text-sm">
                  <!-- Plus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 2">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                  </svg>
                  <!-- Minus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 2">
                    <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
                  </svg>
                </span>
              </button>
              <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" 
                x-bind:style="selected === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                <div class="px-6 py-4">
                  <p class="text-[16px] leading-[26px] md:leading-[30px]">
                    We support our partners in tackling Gender-Based Violence (GBV) by addressing its root causes. Through education, media, research, and community outreach, we advocate for girls and women’s rights, challenge societal attitudes perpetuating violence, and empower survivors. We train community leaders and service providers to respond effectively to VAWG cases.
                  </p>
                </div>
              </div>
            </li>

            <!-- Accordion Item 3 -->
            <li class="relative border border-orange-300 rounded-[15px] mb-4">
              <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
                @click="selected !== 3 ? selected = 3 : selected = null">
                Economic Empowerment of Women
                <span class="text-accentTextDark text-sm">
                  <!-- Plus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 3">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                  </svg>
                  <!-- Minus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 3">
                    <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
                  </svg>
                </span>
              </button>
              <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" 
                x-bind:style="selected === 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                <div class="px-6 py-4">
                  <p class="text-[16px] leading-[26px] md:leading-[30px]">
                    Recognizing that economic independence is crucial for empowerment, we support our partners in delivering training programs focused on financial literacy, entrepreneurship, and skills development. This helps women access income-generating opportunities and achieve economic security.
                  </p>
                </div>
              </div>
            </li>

            <!-- Accordion Item 4 -->
            <li class="relative border border-orange-300 rounded-[15px] mb-4">
              <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
                @click="selected !== 4 ? selected = 4 : selected = null">
                Promoting Women’s Leadership
                <span class="text-accentTextDark text-sm">
                  <!-- Plus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 4">
                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                  </svg>
                  <!-- Minus icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 4">
                    <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
                  </svg>
                </span>
              </button>
              <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container4" 
                x-bind:style="selected === 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                <div class="px-6 py-4">
                  <p class="text-[16px] leading-[26px] md:leading-[30px]">
                    We support our partners in encouraging women's participation in leadership roles across all sectors. Our leadership development programs and mentorship opportunities equip women with the skills and confidence to advocate for themselves and their communities.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

        </div>
      </section>
      <!-- discussion section 2 -->
      <section class="bg-miscellanous  md:py-12 py-16 rounded">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex  lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- flex card 1 -->

            <!-- Image Section -->
            <div class="lg:mt-8 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350092/70195222_2378336455591485_5319670050997665792_n_zul9pe.jpg') }}"
                alt=" Health and Well-Being: Promoting Positive Social and
                Behavioral Change (SDG 3)"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 h-[55rem] md:h-[48rem] lg:h-[60rem] xl:h-[48rem] md:px-12 md:pb-40 md:pt-12">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] xl:text-[32px] lg:text-[28px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Health and Well-Being: Promoting Positive Social and
                  Behavioral Change (SDG 3)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We are dedicated to enhancing health by addressing physical,
                  mental, and emotional well-being. We utilize a comprehensive
                  approach to foster health and well-being, with a focus on:
                </p>
                <div class="w-full mt-4 md:mt-8">
  <div x-data="{ selected: null }">
    <ul>
      <!-- Accordion Item 1 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 1 ? selected = 1 : selected = null">
          Sexual and Reproductive Health
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 1">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 1">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" 
          x-bind:style="selected === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We support our partners in advocating for comprehensive sexuality education, essential SRHR services, and the freedom to make informed choices about sexual and reproductive health. We work to dismantle stigma and ensure equitable access to contraception, safe abortion services (where legal), and sensitive counseling.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 2 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 2 ? selected = 2 : selected = null">
          Community Health
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 2">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 2">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" 
          x-bind:style="selected === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              Collaborating with communities to identify their unique needs, we support our partners in developing targeted health education campaigns. We organize health fairs, deliver workshops on preventable diseases, and train community health workers. Through peer support networks and partnerships with local healthcare facilities, we empower communities to take charge of their well-being.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 3 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 3 ? selected = 3 : selected = null">
          Adolescent Health
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 3">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 3">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" 
          x-bind:style="selected === 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We equip adolescents with the knowledge and skills to navigate physical, emotional, and social challenges. We provide education on healthy relationships, responsible decision-making, and access to confidential healthcare services. We partner with schools and youth organizations to deliver interactive programs and peer support groups.
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

        </div>
      </section>
      <!-- discussion section 3 -->
      <section class="bg-accentTextLight md:py-24 py-16 rounded">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- Image Section -->
            <div class="lg:mt-6 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349991/43207440_1858496167575519_5673215072856440832_n_e4ao8m.jpg') }}"
                alt="education and social development"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 h-[55rem] md:h-[49rem] lg:h-[55rem] xl:h-[49rem] md:px-12 md:pb-40 md:pt-12 md:mt-0">
              <div >
                <h2
                  class="md:text-[32px] text-[24px] xl:text-[32px] lg:text-[28px] mb-6  font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Social Development and Education: Investing in the Future (SDG
                  4)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We believe that education and a strong foundation in social
                  development are essential for building a prosperous and
                  equitable future. Our efforts include:
                </p>
                <div class="w-full mt-4 md:mt-8">
  <div x-data="{ selected: null }">
    <ul>
      <!-- Accordion Item 1 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 1 ? selected = 1 : selected = null">
          Bridging the Educational Gap
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 1">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 1">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" 
          x-bind:style="selected === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We support our partners in ensuring all children have access to quality education, regardless of background. We work with communities to improve infrastructure, develop engaging curriculums, and support students facing challenges.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 2 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 2 ? selected = 2 : selected = null">
          Protecting Children’s Rights
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 2">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 2">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" 
          x-bind:style="selected === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We champion every child's right to a safe environment, education, healthcare, and freedom from exploitation and abuse. We work with communities and policymakers to implement child protection measures, raise awareness, and empower children to advocate for themselves.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 3 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 3 ? selected = 3 : selected = null">
          Promoting Equity and Inclusion
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 3">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 3">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3" 
          x-bind:style="selected === 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We support our partners in working with marginalized communities to empower them to address systemic barriers and advocate for their rights. Collaborating with local organizations, we develop programs promoting social inclusion and addressing issues like poverty, discrimination, and lack of access to education and healthcare.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 4 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 4 ? selected = 4 : selected = null">
          Child & Youth Mentorship
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 4">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 4">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container4" 
          x-bind:style="selected === 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We facilitate meaningful connections between young people and positive role models. Our mentorship programs provide guidance, support, and encouragement, helping young people reach their full potential and become well-rounded individuals.
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

        </div>
      </section>
      <!-- discussion section 4 -->
      <section class="bg-[#FFDED0] md:py-16 py-16 rounded font-opensans">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- Image Section -->
            <div class="lg:mt-8 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350331/IMG_6548_stgyc7.jpg') }}"
                alt="sustainable livelihoods"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 h-[55rem] md:h-[45rem] lg:h-[58rem] xl:h-[45rem] md:px-12 md:pb-40 md:pt-12 font-opensans ">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] xl:text-[32px] lg:text-[28px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Sustainable Livelihoods and Poverty Alleviation: Empowering
                  Communities for a Brighter Future (SDG 1, SDG 8)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We work with communities to develop sustainable livelihoods,
                  alleviate poverty, and build resilience. Our approach
                  includes:
                </p>
                <div class="w-full mt-4 md:mt-8">
  <div x-data="{ selected: null }">
    <ul>
      <!-- Accordion Item 1 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 1 ? selected = 1 : selected = null">
          Skills Development & Economic Empowerment
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 1">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 1">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" 
          x-bind:style="selected === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We support our partners in equipping individuals and communities with the skills, resources, and knowledge needed to generate income and achieve financial security. This includes training on entrepreneurship, financial literacy, and vocational skills development and facilitating access to micro-loans and market linkages.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 2 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 2 ? selected = 2 : selected = null">
          Addressing the Root Causes of Poverty
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 2">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 2">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" 
          x-bind:style="selected === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We understand poverty is a complex issue with multiple contributing factors. To tackle this, we work on addressing root causes such as lack of access to education, healthcare, and essential resources. This involves collaborating with local partners on infrastructure development, food security initiatives, and social protection programs.
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

          </div>
        </div>
      </section>
      <!-- discussion section 5 -->
      <section class="bg-secondary py-16 rounded">
        <div class="lg:max-w-4xl xl:max-w-7xl max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- Image Section -->
            <div class="lg:mt-6 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653809/6ab738988f8bd42af33dbbc5ba99243b_eibfw4.jpg') }}"
                alt="climate change advocacy"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 h-[50rem] md:h-[45rem] lg:h-[55rem] xl:h-[45rem] md:px-12 md:pb-40 md:pt-12 ">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] xl:text-[32px] lg:text-[28px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Climate Change and Environmental Sustainability: Protecting
                  Our Planet for Future Generations (SDG 13)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We are committed to addressing climate change and promoting
                  environmental sustainability to ensure a healthy planet for
                  future generations. Our efforts include:
                </p>
                <div class="w-full mt-4 md:mt-8">
  <div x-data="{ selected: null }">
    <ul>
      <!-- Accordion Item 1 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 1 ? selected = 1 : selected = null">
          Climate Change Advocacy
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 1">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 1">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" 
          x-bind:style="selected === 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We support our partners in developing and implementing strategies to raise awareness about climate change and its impacts. This includes promoting renewable energy, improving energy efficiency, and supporting sustainable land use practices.
            </p>
          </div>
        </div>
      </li>

      <!-- Accordion Item 2 -->
      <li class="relative border border-orange-300 rounded-[15px] mb-4">
        <button type="button" class="px-8 py-6 text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans" 
          @click="selected !== 2 ? selected = 2 : selected = null">
          Environmental Education and Awareness
          <span class="text-accentTextDark text-sm">
            <!-- Plus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected !== 2">
              <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
            <!-- Minus icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" x-show="selected === 2">
              <path fill="currentColor" d="M19 12.998H5v-2h14z"/>
            </svg>
          </span>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" 
          x-bind:style="selected === 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
          <div class="px-6 py-4">
            <p class="text-[16px] leading-[26px] md:leading-[30px]">
              We support our partners in raising awareness about environmental issues and the importance of sustainability through educational programs, community workshops, and media campaigns. We empower individuals and communities to take action to protect the environment.
            </p>
          </div>
        </div>
      </li>
    </ul>
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