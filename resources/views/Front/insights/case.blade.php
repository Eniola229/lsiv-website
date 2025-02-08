<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - case studies</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  </head>
   @vite('resources/css/app.css')
   @vite('resources/js/app.js')
  <body class="bg-accentTextLight">
     @include('components.header')
    <main>
      <!-- our work in action -->
      <section class="md:py-16 py-6 rounded">
        <div class="mx-auto lg:max-w-4xl xl:max-w-7xl max-w-7xl px-4 sm:px-6 lg:px-6">
          <h1
            class="md:text-5xl xl:text-6xl text-3xl mb-6 font-playfair font-normal md:w-1/2" style="line-height: normal;"
          >
            A Collection Of Our <span class="text-primary"> Impact </span>
            In Action
          </h1>
            <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 my-8 md:mt-16"
          >
            <!-- Card  -->
            @foreach($blogs as $blog)
             <a href="{{ url('client/blog', $blog->id) }}">
            <div
              class=" rounded-lg overflow-hidden w-full relative group flex flex-col items-start"
            >
              <img
                src="{{ asset($blog->cover_image) }}"
                alt="{{ $blog->title }}"
                class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50"
              />
              <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
              >
                <span
                  class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out"
                  >Read Case Study</span
                >
              </div>
              <div class="p-0">
               <h2 class="font-semibold text-[16px] md:text-[20px] font-[600] font-opensans mt-2">
                {{ $blog->title }}
                </h2>
              </div>
            </div>
          </a>
            @endforeach

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
