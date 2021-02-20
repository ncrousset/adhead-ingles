<x-app-layout>
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto text-gray-800">
        <div class="flex flex-col mt-5">
            <div>
                <h3 class="text-lg text-gray-800 font-semibold">Create a new video</h3>
            </div>

            <div class="flex mt-3 justify-between">
                <input type="text" name="" placeholder="Title" class="border p-2 w-2/3 mr-2">
                <input type="text" name="" placeholder="Youtube id" class="border p-2 w-1/3 ml-2">
            </div>


            <h2 class="text-lg text-gray-800 font-semibold my-3">Lyric</h2>

            <div>
                <textarea class="border w-full" name="" id="" rows="10" placeholder=" Lyric"></textarea>
            </div>

            <div class="flex flex-row justify-between items-center justify-items-center">
                <h2 class="text-lg text-gray-800 font-semibold my-3">Expressions</h2>

                <a href="" class="font-semibold text-primary-dark hover:underline">Add Expression</a>

                {{-- <button class="inline-flex items-center font-semibold justify-center px-2 h-6 mr-2 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">

                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    
                </button> --}}
            </div>

            <div class="flex mt-3">
                <div class="flex justify-between w-full">
                    <input type="text" name="" placeholder="Expression" class="border p-2 w-3/5 mr-2">
                    <input type="number" name="" placeholder="Pharagraph num." class="border p-2 w-1/5 ml-2">
                    <input type="number" name="" placeholder="Order num." class="border p-2 w-1/5 ml-2">
                </div>
                <div class="w-10 ml-2">
                    <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-white transition-colors duration-150 bg-third rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
                      </button>
                </div>
            </div>

            <div class="flex justify-end ">
                <button class="m-0 inline-flex items-center font-semibold px-4 mt-5 justify-center  h-10 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                    Save
                </button>
            </div>

        </div>
    </div>
</x-app-layout>
