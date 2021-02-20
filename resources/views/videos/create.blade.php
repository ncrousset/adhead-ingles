<x-app-layout>
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto">
        <div class="flex flex-col">
            <div>
                <h3 class="text-lg text-gray-800 font-semibold">Create a new video</h3>
            </div>
               
            <div class="flex mt-3 justify-between">
                <input type="text" name="" placeholder="title" class="border p-2 w-2/3 mr-2">
                <input type="text" name="" placeholder="youtube id" class="border p-2 w-1/3 ml-2">
            </div>

            
            <h2 class="text-lg text-gray-800 font-semibold my-3">Lyric</h2>
       
            <div>
                <textarea class="border w-full" name="" id="" rows="10"></textarea>
            </div>

            <div class="flex flex-row justify-between items-center justify-items-center">
                <h2 class="text-lg text-gray-800 font-semibold my-3">Expressions</h2>
                <button class="inline-flex items-center font-semibold justify-center px-2 h-6 mr-2 text-white transition-colors duration-150 bg-primary rounded-lg focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                    
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    Add Expression
                </button>
            </div>
            

            <div class="flex mt-3">
                <div class="flex justify-between w-full">
                    <input type="text" name="" placeholder="expression" class="border p-2 w-3/5 mr-2">
                    <input type="number" name="" placeholder="pharagraph num." class="border p-2 w-1/5 ml-2">
                    <input type="number" name="" placeholder="order num." class="border p-2 w-1/5 ml-2">
                </div>
                <div class="w-10">
                    <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-white transition-colors duration-150 bg-primary rounded-full focus:shadow-outline hover:bg-primary-dark focus:outline-none">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                      </button>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
