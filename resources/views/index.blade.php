<x-app-layout>
   <div class="filters flex space-x-6 text-gray-900">
      <div class="w-1/3">
      <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2 text-xs font-semibold">
         <option value="Category One">Category One</option>
         <option value="Category One">Category Two</option>
         <option value="Category One">Category Three</option>
         <option value="Category One">Category Four</option>
         <option value="Category One">Category Five</option>
      </select>
      </div>
      <div class="w-1/3 border rounded">
         <select name="other_filters" id="category" class="w-full border-none rounded-xl px-4 py-2 text-xs font-semibold">
            <option value="Category One" class="bg-gray-100">Category One</option>
            <option value="Category One" class="bg-gray-100">Category Two</option>
            <option value="Category One" class="bg-gray-100">Category Three</option>
            <option value="Category One" class="bg-gray-100">Category Four</option>
            <option value="Category One" class="bg-gray-100">Category Five</option>
         </select>
      </div>
      <div class="w-2/3 relative">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-3 text-gray-700 absolute top-3 ml-2 text-xs " fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
      <input type="search" placeholder="Find an Idea" class=" font-semibold border-none w-full bg-white rounded-xl text-xs px-4 py-2 pl-8 placeholder-gray-900">
      
      </div>
   </div>
</x-app-layout>
