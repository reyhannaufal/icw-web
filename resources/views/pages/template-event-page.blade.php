@extends('pages.layout.page-layout')
  @section('content')

<div class="font-body">
<main class="bg-bgsection-0">

  <section class="lg:h-screen relative overflow-hidden px-6 flex flex-row">

    <div class="absolute -right-10 md:-right-0 -top-0">
      <img src="{{'assets/img/event-top-hero.png'}}" alt="jelly-bg" class="h-36 lg:h-52">
    </div>

    <div class="absolute -right-full md:-right-0 bottom-10">
      <img src="{{'assets/img/event-bottom-hero.png'}}" alt="aksen-bg" class="h-64 lg:h-96">
    </div>

    <div class="container flex flex-row content-center justify-center pb-40 mx-auto z-10">
      
      <div class="flex flex-1 flex-col pt-8 md:flex-row md:pt-16 items-center lg:px-36">

        <div class="mb-4 md:w-6/12 md:mb-0 lg:pl-12 lg:w-5/12 sm:mb-16">
          <h2 class="text-xl text-white font-bold text-secondary-600 uppercase mb-2">INDOCOR</h2>
          <h1 class="text-white text-4xl md:text-5xl font-bold text-secondary leading-tight mb-6 md:mb-10">Paper Competition</h1>
          <a href="#" class="text-white bg-primary px-6 md:px-8 py-3 md:py-4 text-lg md:text-xl text-secondary font-bold uppercase rounded bg-indigo-500 bg-opacity-60 hover:bg-opacity-70">More info</a>
        </div>
        <div class="lg:pr-16 flex-1 flex justify-end">
          <img class="w-80 max-w-xl sm:max-w-xs sm:max-h-xs" src="{{'assets/img/content2.png'}}">
        </div>

      </div>

    </div>
  </section>

  <section class="mx-auto flex px-10 py-24 sm:px-24 relative border border-red-400">

    <div class="inline-grid max-w-7xl mx-auto grid grid-cols-2 text-white md:gap-32 relative place-items-center border border-blue-200">
      <div class="w-auto col-span-2 md:col-span-1 ">
        <img src="{{'assets/img/questions-animate.svg'}}" alt="question-animate"  class="xl:h-96 h-52 w-auto">
      </div>
        <div class="w-auto col-span-2 md:col-span-1 pt-28 md:pt-0"
        data-aos-delay="100"
        data-aos="fade-left"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-mirror="false"
        data-aos-once="false"
        data-aos-anchor-placement="top-bottom">
          <h2 class="text-3xl">
            <strong >
                What is <abbr title="Indonesia Corrosion Week" class="no-underline">ICW</abbr> Paper Competition?
            </strong>
          </h2>
          <p class="pt-6 font-extralight text-sm lg:text-lg">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore
              et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit
              esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
          </p>

        </div>  
      </div>
    <div class="absolute -left-4 md:-left-0 -top-16">
      <img src="{{'assets/img/event-bubble-1.png'}}" alt="jelly-bg" class="h-40 lg:h-64">
    </div>
  </section>


  <section class="w-full bg-bgsection-0 py-24 px-4 sm:px-24 md:px-40 relative border border-red-400">
    <div class="flex flex-1 md:mb-16 relative mx-auto z-10">
      <div class="w-full text-white text-center place-self-center">
        <header class="text-3xl sm:text-4xl mdl:text-5xl lg:text-6xl">
          <strong>
            Key dates/Timeline
          </strong>
        </header>
      </div>
    </div>

    <div class="grid grid-cols-8 gap-y-8 pt-20 pb-8 max-w-4xl min-w-xl mx-auto">

      <div class="col-span-1 pr-3 pt-2 relative">
        <div class="absolute right-2 md:right-4 -top-3 sm:top-1">
          <svg class="w-12 md:w-14" width="57" height="290" viewBox="0 0 57 290" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29 261.009L29 29" stroke="#BDBDBD" stroke-width="3"/>
            <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)" fill="url(#paint0_linear)"/>
            <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
            <defs>
            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57" y2="57" gradientUnits="userSpaceOnUse">
            <stop stop-color="#F2C94C"/>
            <stop offset="1" stop-color="#F2994A"/>
            </linearGradient>
            </defs>
            </svg>
        </div>
      </div>
      <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10">
        <main class="py-4 px-5 md:py-6 md:px-7 text-white">
          <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

          <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if necessary</p>
          <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
          <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
          <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
        </main>
      </div>
      <div class="col-span-1"></div>

      <div class="col-span-1 pr-3 pt-2 relative">
        <div class="absolute right-2 md:right-4 -top-3 sm:top-1">
          <svg class="w-12 md:w-14" width="57" height="290" viewBox="0 0 57 290" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29 261.009L29 29" stroke="#BDBDBD" stroke-width="3"/>
            <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)" fill="url(#paint0_linear)"/>
            <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
            <defs>
            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57" y2="57" gradientUnits="userSpaceOnUse">
            <stop stop-color="#F2C94C"/>
            <stop offset="1" stop-color="#F2994A"/>
            </linearGradient>
            </defs>
            </svg>
        </div>
      </div>
      <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10">
        <main class="py-4 px-5 md:py-6 md:px-7 text-white">
          <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

          <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if necessary</p>
          <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
          <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
          <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
        </main>
      </div>
    <div class="col-span-1"></div>

    <div class="col-span-1 pr-3 pt-2 relative">
      <div class="absolute right-2 md:right-4 -top-3 sm:top-1">
        <svg class="w-12 md:w-14" width="57" height="290" viewBox="0 0 57 290" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M29 261.009L29 29" stroke="#BDBDBD" stroke-width="3"/>
          <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)" fill="url(#paint0_linear)"/>
          <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
          <defs>
          <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57" y2="57" gradientUnits="userSpaceOnUse">
          <stop stop-color="#F2C94C"/>
          <stop offset="1" stop-color="#F2994A"/>
          </linearGradient>
          </defs>
          </svg>
      </div>
    </div>
      <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10">
        <main class="py-4 px-5 md:py-6 md:px-7 text-white">
          <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>

          <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if necessary</p>
          <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
          <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
          <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
        </main>
      </div>
      <div class="col-span-1"></div>

      <div class="col-span-1 pr-3 pt-2 relative">
        <div class="absolute right-2 md:right-4 -top-0 sm:top-1">
          <svg class="w-12 md:w-14" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="28.5" cy="28.5" r="28.5" transform="rotate(90 28.5 28.5)" fill="url(#paint0_linear)"/>
            <circle cx="28.5" cy="28.5" r="15.5" transform="rotate(90 28.5 28.5)" fill="black"/>
            <defs>
            <linearGradient id="paint0_linear" x1="-1.90735e-06" y1="-1.90735e-06" x2="57" y2="57" gradientUnits="userSpaceOnUse">
            <stop stop-color="#F2C94C"/>
            <stop offset="1" stop-color="#F2994A"/>
            </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
        <div class="col-span-6 bg-table-0 rounded-xl shadow-lg z-10">
          <main class="py-4 px-5 md:py-6 md:px-7 text-white">
            <strong class="text-xl md:text-2xl">Step (Regist, competition, final, etc)</strong>
  
            <p class="md:text-md text-sm pt-2 font-extralight">Quick brief about the step if necessary</p>
            <p class="md:text-md text-sm pt-1 font-extralight">date: 31th, February 2021</p>
            <p class="md:text-md text-sm pt-1 font-extralight">deadline: 10 years from date</p>
            <p class="md:text-md text-sm pt-1 font-extralight">other content, content</p>
          </main>
        </div>
        <div class="col-span-1"></div>


    <div class="absolute left-1/4 top-10 md:left-1/3 md:-top-8">
      <img src="{{'assets/img/ComEvent.png'}}" alt="competition-event" class="h-40 sm:h-52 md:h-72">
    </div>
  </section>


    <section class="w-full py-6 px-20 sm:px-24 md:px-24">
      <div class="grid grid-cols-2 gap-10 relative pt-6 max-w-7xl mx-auto">
          <div class="w-full col-span-2 text-white text-center">
              <header class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
                  <strong>
                      Competition Prize
                  </strong>
              </header>
          </div>

          <div class="col-span-2">
              <img src="{{'assets/img/event-prize.png'}}" alt="" class="mx-auto h-64 md:h-96">
          </div>
      </div>

      <div class="grid grid-cols-3 gap-4 lg:gap-10 bg-table py-10 md:py-20 max-w-7xl mx-auto">

        <div class="col-span-3 md:col-span-1 w-full bg-table-0 rounded-xl">
          <main class="py-4 px-4 text-white text-center">
            <strong class="text-2xl">1st Place</strong>
            <p class="text-md py-4 font-extralight">3000 USD</p>
          </main>
        </div>

        <div class="col-span-3 md:col-span-1 w-full bg-table-0 rounded-xl">
          <main class="py-4 px-4 text-white text-center">
            <strong class="text-2xl">2nd Place</strong>
            <p class="text-md py-4 font-extralight">1000 USD</p>
          </main>
        </div>

        <div class="col-span-3 md:col-span-1 w-full bg-table-0 rounded-xl">
          <main class="py-4 px-4 text-white text-center">
            <strong class="text-2xl">3rd Place</strong>
            <p class="text-md py-4 font-extralight">500 USD</p>
          </main>
        </div>

  </section>

</main>


@endsection