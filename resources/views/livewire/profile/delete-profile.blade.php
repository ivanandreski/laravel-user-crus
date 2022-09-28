<div class="w-full max-w-sm">
    <form wire:submit.prevent="deleteProfile">
    <h6 class="font-medium leading-tight text-base mt-0 mb-2 text-gray-600">Delete profile</h6>
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="password">
          Password
        </label>
      </div>
      <div class="md:w-2/3">
        <input id="password" type="password" wire:model="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
      
        <h6 class="font-medium leading-tight text-base mt-0 mb-2 text-red-700">{{ $errorMessage }}</h6>
    </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button class="shadow bg-red-800 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
          Delete profile
        </button>
      </div>
    </div>
</form>
</div>
