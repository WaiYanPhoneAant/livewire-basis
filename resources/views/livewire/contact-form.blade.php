<div class="flex items-center justify-center h-screen my-10 md:my-0 mx-1 ">
    <div class="container bg-white h-fit w-fit drop-shadow mx-auto rounded">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-2/6 bg-gray-900 p-3 rounded md:relative">
                <div class="z-20 text-white">
                    <p class="text-white text-2xl md:text-6xl md:mt-10 text-center md:text-start">
                        Contact <br class="md:block hidden">
                        Us .
                    </p>
                    <p class="mt-3 md:mt-10 text-gray-300 text-xs md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum non ut deleniti.
                    </p>
                </div>
                <div
                    class="w-full flex justify-center md:justify-start mt-5 md:mt-20 gap-1 md:absolute md:bottom-5 md:left-3 md:right-0">
                    <a href="#"
                        class="inline-block w-6 h-6 md:w-8 md:h-8 bg-white rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-envelope text-gray-900 text-xs md:text-sm"></i>
                    </a>
                    <a href="#" class="w-6 h-6 md:w-8 md:h-8 bg-white rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-facebook text-gray-900 text-xs md:text-sm"></i>
                    </a>
                    <a href="#" class="w-6 h-6 md:w-8 md:h-8 bg-white rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-twitter text-gray-900 text-xs md:text-sm"></i>
                    </a>
                    <a href="#" class="w-6 h-6 md:w-8 md:h-8 bg-white rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-facebook-messenger text-gray-900 text-xs md:text-sm"></i>
                    </a>
                </div>
                <!-- <div class="absolute h-full w-full left-0 top-0 bg-gray-900 opacity-90 "></div> -->
            </div>
            <div class="md:w-8/12 bg-white-200">
                <div class="w-full text-center">
                    <p class="mt-2 text-gray-900 text-xl font-semibold">
                        Get In Touch
                    </p>
                </div>
                <div class="w-full p-5">
                    <div class="">
                        @if($successMessage)
                        <div class="w-full bg-green-200 p-2 mb-5 rounded flex justify-between items-center">
                            <div class="w-fit">
                                <span class="text-gray-600">Successfully Sent !</span>
                            </div>
                            <div class="w-fit border  px-1 cursor-pointer border-gray-400 rounded" wire:click="$set('successMessage', false)">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                        </div>
                        @endif
                    </div>

                    <form action="" class="form" wire:submit.prevent="send">
                        <div class="mb-4">
                            <div class="">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Your Name
                                </label>
                                <input wire:model.live='name'
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-900 focus:shadow-outline"
                                    id="username" type="text" placeholder="Your Name">
                            </div>
                            <div class="">
                                @error('name')
                                <span class="text-red-600 text-xs">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input wire:model.live='email' name='email'
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-900 focus:shadow-outline"
                                    id="email" type="text" placeholder="Email">
                            </div>
                            <div class="">
                                @error('email')
                                <span class="text-red-600 text-xs">
                                    * {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
                                    Text
                                </label>
                                <textarea wire:model.live='text' name="text" id="text" placeholder="Write Something...."
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-900 focus:shadow-outline"
                                    cols="30" rows="7"></textarea>
                            </div>
                            <div class="">
                                @error('text')
                                <span class="text-red-600 text-xs">
                                    * {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="m-auto w-fit">
                            <button
                                class="bg-gray-900 disabled:opacity-50 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline"
                                type="submit" >
                                <svg wire:loading wire:target="send" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
