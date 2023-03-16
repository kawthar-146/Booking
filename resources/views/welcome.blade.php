            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

         <x-guest-layout>
         <div class="grid grid-cols-2">
            <div class="text-center">

                <button class=" h-28 w-72 font-bold bg-white mt-10  hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border-4 border-black rounded shadow" onclick="window.location.href='{{ url('/home') }}'" >
                Looking 👀 to book something?? We got you!
               </button>

            </div>
            <div class="bg-black text-center ">
                 <button class="h-28 w-72 font-bold bg-black mt-10  hover:bg-red-100 text-white font-semibold py-2 px-4 border-4 border-white rounded shadow  "  onclick="window.location.href='{{ url('/reservation/step-one')}}'">
                 Booking for professionals done better ✅
                 </button>
                 <div class="h-96 bg-[url('/storage/app/public/img/biz_photo_15411.png')]">
                 
                 </div>
                 <div class="grid grid-cols-2 m-16">
                    <div>
                    <img src="{{ Storage::url('img/grp3.png') }}">
                    </div>
                    <div> <p class="text-white text-2xl mt-48">Focus on the person you’re taking care of - not on the phone ☎️. We’ll streamline your operations for you - at no cost.</p></div>
                 </div>
                 <p class="text-white text-4xl font-bold">The tools 🧰 you need - on the go.</p>
                 <div class="grid grid-cols-3 mt-10 text-white">
                    <div class="border-4 p-4 border-white m-10 w-52">
                     <div class="grid grid-cols-2 ">
                         <div> <img src="{{ Storage::url('img/grp4.png') }}" ></div>
                         <div class="text-white mt-5 ">Manage</p> <p class="text-bold ">Team</p></div>
                    </div>
                    <p class="text-red-700 text-xl p-2 mt-10">Manage your team right here 👆🏽 - make your all-star selection!</p>
                </div>
                <div class="border-4 p-4 border-white m-10 w-52">
                     <div class="grid grid-cols-2 ">
                         <div> <img src="{{ Storage::url('img/grp5.png') }}" ></div>
                         <div class="text-white mt-5 ">Manage</p> <p class="text-bold ">Calendar</p></div>
                    </div>
                    <p class="text-red-700 text-xl mt-5 ">Manage your calendar, see your bookings and staff’s activity over the day, week or month.</p>
                </div>
                <div class="border-4 p-4 border-white m-10 w-52">
                     <div class="grid grid-cols-2 ">
                         <div> <img src="{{ Storage::url('img/grp6.png') }}" ></div>
                         <div class="text-white mt-5 ">Manage</p> <p class="text-bold ">Services</p></div>
                    </div>
                    <p class="text-red-700 text-xl mt-4">This is where you can manage your services, prices your customers will be able to book.</p>
                </div>
                 </div>
                 <p class="text-white text-4xl font-bold mt-14">We help you run a smooth business</p>
                 <p class="text-white p-8">We’re here to simplify your day-to-day. No matter what you do or want to achieve, we’re by your side to help you keep your business on pace with your passion.</br> By providing you with intuitive tools and adaptable solutions, we take care of the exhausting admin work, so your clients get the absolute best of your team.</p>
                 <p class="text-white text-4xl font-bold mt-14">Get started 🚀 right now here.</p>
                 <p class="text-white text-3xl font-bold mt-14">Not sure? Drop us a line.</p>
                 <div class="max-w-[700px] mx-auto px-3 lg:px-6">
                    
                 <form  method="POST" action="{{ route('contact.submit') }}">
                 @csrf
        <div class="form-group m-10">
          <input type="text" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
            tabindex="0" arial-label="Please input name" Placeholder="Please input name" type="text" name="name">
        </div>
        <div class="form-group m-10">
          <input type="email"
          placeholder="Please input email"
           class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
            tabindex="0" arial-label="Please input email address" type="email" name="email">
        </div>
        <div class="form-group m-10">
          <textarea class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
          " tabindex="0" aria-label="leave a message" role="textbox" name="content" rows="3" placeholder="Message"></textarea>
        </div>
       
        <button type="submit" class="
          w-full
          px-6
          py-2.5
          bg-white
          text-bold
          text-red
          font-medium
          text-2xl
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-white-700 hover:shadow-lg
          focus:bg-white-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-blue-800 active:shadow-lg
          transition
          duration-150
          mb-10
          ease-in-out">Send</button>
         
      </form>
        </div>
            </div>
        </div>
        </x-guest-layout>