 <div
     class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
     <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 justify-center">

         <div class="text-center">
             <h4 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">
                 {{ $user->full_name }}
             </h4>
             <div class="mb-4 text-sm text-blue-500 dark:text-black-400">
                 <h5 class="flex items-center justify-center">
                     <svg class="h-5 w-5 text-blue mr-2" width="8" height="8" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" />
                         <rect x="3" y="7" width="18" height="13" rx="2" />
                         <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                         <line x1="12" y1="12" x2="12" y2="12.01" />
                         <path d="M3 13a20 20 0 0 0 18 0" />
                     </svg>
                     <span class="text-black">{{ $user->speciality }}</span>
                 </h5>
             </div>
             <div class="mb-4 text-sm text-black-500 dark:text-gray-400">
                 <h2 class="flex items-center justify-center">
                     <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                     </svg>
                     Sfax
                 </h2>
                 <br>
                 <div class="mb-4 flex items-center justify-center">
                     <svg class="h-5 w-5 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" />
                         <path
                             d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                     </svg>
                     &nbsp;
                     <span class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"
                         style="color: rgb(12, 115, 234);">Phone
                         number:</span>
                     <span class="block mr-2 text-sm font-medium">{{ $user->numero_telephone }}</span>
                 </div>
                 <div class="mb-4 flex items-center justify-center">
                     <svg class="h-5 w-5 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" />
                         <path d="M17.788 5.108A9 9 0 1021 12h-8" />
                     </svg>
                     &nbsp;
                     <span class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"
                         style="color: rgb(12, 115, 234);">Email
                         :</span>
                     <span class="block mr-2 text-sm font-medium">{{ $user->email }}</span>
                 </div>
             </div>
         </div>
     </div>

 </div>