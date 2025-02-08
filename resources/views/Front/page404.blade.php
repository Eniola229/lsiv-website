<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE NOT FOUND</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="../style.css" />
@vite('resources/css/app.css')
@vite('resources/js/app.js')
</head>
<body class="overflow-hidden h-screen">
  
<main class="bg-white ">
   @include('components.header')
  <!-- Lolo Social Impact Venture is a dedicated force for positive change.  -->
  <section class="md:py-16 md:px-6 px-4 rounded md:mt-0 mt-[30px]">
      <!-- Background circles -->
      <div class="absolute top-[-30px]  left-[-10px]">
    <svg width="250"  height="280" viewBox="0 0 249 196" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="55.5" cy="2.5" r="193.5" fill="#C4E1A4" />
    </svg>
</div>

     <div class="flex flex-col items-center justify-center relative">


  <svg class="absolute top-0 right-[150px]" width="141" height="141" viewBox="0 0 141 141" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="70.5" cy="70.5" r="70.5" fill="#C4E1A4"/>
  </svg>

  <svg class="absolute top-[1px] right-[500px]" width="167" height="167" viewBox="0 0 167 167" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="83.5" cy="83.5" r="83.5" fill="#FFDED0"/>
  </svg>

  <div class="text-center mt-10 z-[99] xl:z-[999]">
    <h1 class="md:text-[200px] leading-[46px]  text-[45px] text-[#E76A35] font-semibold md:leading-[127.97px] font-playfair">404</h1>
    <h2 class="text-2xl font-semibold text-gray-800 mt-10">Page not found</h2>
    <!-- <p class="text-gray-600 mt-2 max-w-md mx-auto relative">
      Looks like you've hit a roadblock on your journey towards social change.
      <br />
      <span class="italic">Don't worry, we're here to guide you back!</span> -->
      <p class=" leading-[30px]  mt-2 max-w-4xl mx-auto relative font-normal  font-opensans">Looks like you've hit a roadblock on your journey towards social change.
              <br/><strong class="font-semibold italic">
                Don't worry, we're here to guide you back!
              </strong>

      <svg class="absolute -top-[20px] left-[-100px]" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="31.5" cy="31.5" r="31.5" fill="#FFDED0"/>
      </svg>
    </p>

    <!-- Buttons -->
    <div class="mt-6">
      <a
        href="/"
        class="px-6 py-3 bg-orange-500 text-white rounded-full text-lg font-medium hover:bg-orange-600 transition"
      >
        Go back home
      </a>
    </div>
  </div>

  <div class="bottom-0 right[30px]">

      <svg class="absolute right-[-40px]" width="1002" height="349" viewBox="0 0 1002 349" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 349C0 349 89 160.746 277 160.746C465 160.746 560.118 127.96 607 89.8857C653.882 51.8117 784 -43.3732 974 23.2563C1164 89.8857 1300 349 1300 349H0Z" fill="#DDC2FF"/>
        </svg>
        
        <svg class="absolute -bottom-[50px] right-[50px]" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="31.5" cy="31.5" r="31.5" fill="#FFC6DB"/>
        </svg>
    </div>

</div>
   </section>
</main> 
</body>
</html>
