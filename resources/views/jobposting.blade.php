<x-app-layout>
  <div class="py-24 bg-white sm:py-32">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      {{-- Header --}}
      <div class="max-w-2xl mx-auto lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          {{ __('Featured Jobs') }}
        </h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
      </div>

      {{-- Jobs --}}
      <div
        class="grid max-w-2xl grid-cols-1 pt-10 mx-auto mt-10 border-t border-gray-200 gap-y-16 gap-x-8 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

        @foreach ($jobs as $job)
          <article class="flex flex-col items-start justify-between max-w-xl">
            <div class="flex items-center text-xs gap-x-4">
              <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
              <a href="#"
                class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div>
            <div class="relative group">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Boost your conversion rate
                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">Illo sint voluptas. Error voluptates culpa
                eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem
                placeat
                consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
            </div>
            <div class="relative flex items-center mt-8 gap-x-4">
              <img
                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="" class="w-10 h-10 rounded-full bg-gray-50">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Michael Foster
                  </a>
                </p>
                <p class="text-gray-600">Co-Founder / CTO</p>
              </div>
            </div>
          </article>
        @endforeach

      </div>
    </div>
  </div>

</x-app-layout>
