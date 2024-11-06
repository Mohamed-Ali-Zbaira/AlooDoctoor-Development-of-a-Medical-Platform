<div class="sm:flex">
    <div
        class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
        <form wire:submit.prevent="render" class="lg:pr-3">
            <label for="users-search" class="sr-only">Search</label>
            <div class="relative mt-1 lg:w-64 xl:w-96">
                <input wire:model="searchTerm" type="text" name="search" id="users-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search for Rendez-Vous">
            </div>
        </form>


    </div>
</div>
