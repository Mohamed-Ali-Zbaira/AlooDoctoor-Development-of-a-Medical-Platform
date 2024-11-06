<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="/Dashboard"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64">
                                <path fill="#2f25c1"
                                    d="M32.171 1.048c-11.119 0-20.169 9.051-20.169 20.168c0 11.124 9.05 20.17 20.169 20.17s20.167-9.046 20.167-20.17C52.337 10.099 43.29 1.048 32.171 1.048m0 38.471c-10.09 0-18.306-8.212-18.306-18.303c0-10.088 8.216-18.303 18.306-18.303c10.087 0 18.301 8.214 18.301 18.303c0 10.09-8.214 18.303-18.301 18.303" />
                                <path fill="#2f25c1" d="M21.731 19.888h3.872v-3.927h-3.872z" />
                                <path fill="#2f25c1"
                                    d="M32.189 5.349c-8.755 0-15.876 7.126-15.876 15.877c0 8.753 7.12 15.872 15.876 15.872c8.751 0 15.869-7.119 15.869-15.872c0-8.751-7.119-15.877-15.869-15.877M20.367 21.265v-6.682h6.635v6.682zm6.835 12.216a3.288 3.288 0 0 1-3.289-3.289a3.286 3.286 0 1 1 6.573 0a3.286 3.286 0 0 1-3.284 3.289m3.978-7.306a3.291 3.291 0 0 1-3.291-3.289a3.293 3.293 0 0 1 3.291-3.291c1.812 0 3.284 1.474 3.284 3.291s-1.473 3.289-3.284 3.289m2.304-12.461a3.467 3.467 0 0 1 0-6.931a3.46 3.46 0 0 1 3.462 3.464a3.465 3.465 0 0 1-3.462 3.467m5.745 17.644a3.289 3.289 0 1 1 3.287-3.289a3.29 3.29 0 0 1-3.287 3.289m.697-9.664a3.293 3.293 0 0 1-3.289-3.291a3.29 3.29 0 0 1 3.289-3.291a3.292 3.292 0 1 1 0 6.582M7.303 35.548V22.852c0-1.801-1.474-3.267-3.287-3.267A3.268 3.268 0 0 0 .75 22.852v17.387c0 2.404.865 4.726 2.417 6.54l10.842 11.514c1.076 1.011 1.339 1.909 1.339 3.269v2.096h11.8l.013-4.987c0-1.901.155-4.438-2.222-6.929L11.183 37.929a2.599 2.599 0 0 0-1.814-.73a2.61 2.61 0 0 0-1.989 4.302l6.635 7.108c.43.503 1.158 1.452 1.519 2.616c.195.605.251 1.195.261 1.872h-2.136c-.009-.483-.044-.87-.16-1.229c-.208-.672-.625-1.275-.938-1.663l-6.735-7.391c-.847-.854-1.311-1.961-1.311-3.123c0-1.744 1.05-3.35 2.786-4.142zm49.72 0V22.852c0-1.801 1.474-3.267 3.286-3.267a3.268 3.268 0 0 1 3.267 3.267v17.387c0 2.404-.864 4.726-2.417 6.54L50.317 58.293c-1.076 1.011-1.339 1.909-1.339 3.269v2.096h-11.8l-.013-4.987c0-1.901-.155-4.438 2.222-6.929l13.756-13.813a2.599 2.599 0 0 1 1.814-.73a2.61 2.61 0 0 1 1.989 4.302l-6.635 7.108c-.43.503-1.158 1.452-1.519 2.616c-.196.605-.251 1.195-.262 1.872h2.136c.008-.483.044-.87.16-1.229c.208-.672.625-1.275.938-1.663l6.735-7.391c.847-.854 1.311-1.961 1.311-3.123c0-1.744-1.049-3.35-2.786-4.142z" />
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>AlooDoctoor</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64">
                                <path fill="#2f25c1"
                                    d="M55.446.465H8.662C4.078.465.349 4.194.349 8.78v46.781c0 4.586 3.729 8.317 8.313 8.317h46.784c4.584 0 8.315-3.731 8.315-8.317V8.78c0-4.586-3.731-8.315-8.315-8.315M15.647 9.671a5.706 5.706 0 1 1-.003 11.411a5.706 5.706 0 0 1 .003-11.411M9.488 55.322V25.676a3.171 3.171 0 0 1 3.171-3.17h4.725a2.9 2.9 0 0 1 1.806.614l7.866 6.153l5.886-1.882a2.656 2.656 0 0 1 3.34 1.724a2.66 2.66 0 0 1-1.723 3.341l-7.224 2.308a2.654 2.654 0 0 1-2.446-.439l-2.988-2.338l6.488 23.334H9.487zm45.359 0h-8.186V31.54h-1.139l-6.943 13.475a2.608 2.608 0 0 1-3.498 1.165a2.602 2.602 0 0 1-1.166-3.493l8.324-16.008l-3.231-.52l-.258.936l-7.974-1.786l.224-.999l-1.491-.334l-.228.998l-.595-.132l.685-3.055l.599.132l-.222.998l1.491.332l.224-.994l7.973 1.786l-.141.91l3.339.975l.575-1.104c.888-1.384 1.949-2.184 4.286-2.184h7.356v32.685zm-5.631-34.22a5.715 5.715 0 0 1 0-11.429a5.714 5.714 0 0 1 0 11.429" />
                                <path fill="#2f25c1"
                                    d="M18.53 33.46h-3.421v2.871h-2.857v3.432h2.857v2.856h3.421v-2.856h2.867v-3.432H18.53z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Patients</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-layouts" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/Dashboard/patients"
                                    class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Lists
                                    Patient</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-crud" data-collapse-toggle="dropdown-crud">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64">
                                <path fill="#2f25c1"
                                    d="M55.407.547H8.833C4.271.547.559 4.26.559 8.824v46.568c0 4.565 3.713 8.279 8.274 8.279h46.574c4.564 0 8.276-3.713 8.276-8.279V8.824c0-4.564-3.712-8.277-8.276-8.277M35.358 16.592a6.583 6.583 0 0 1 6.584 6.584c0 3.634-2.949 6.586-6.584 6.586s-6.584-2.952-6.584-6.586a6.583 6.583 0 0 1 6.584-6.584M8.191 18.675v-5.269h5.269V8.137h5.269v5.269h5.269v5.269h-5.269v5.268H13.46v-5.268zM52.64 53.058c-.488 0-.957-.095-1.385-.267l-5.862-1.631v5.843H25.044V51.16l-5.86 1.631a3.74 3.74 0 0 1-1.385.267a3.755 3.755 0 0 1-3.112-5.853l9.4-12.889c1.02-1.398 2.445-2.955 5.45-2.955H40.9c3.004 0 4.43 1.558 5.449 2.955l9.399 12.889a3.74 3.74 0 0 1 .642 2.099a3.757 3.757 0 0 1-3.752 3.754z" />
                                <path fill="#2f25c1"
                                    d="M25.043 35.868v7.816l.712-.24c5.242-1.545 7.281 5.376 2.04 6.918l-.168.047l7.592 2.513l7.593-2.513l-.171-.047c-5.238-1.542-3.199-8.463 2.039-6.918l.716.24v-7.816l-10.177 3.325z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Rendez vous</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-crud" class="space-y-2 py-2 hidden ">
                            <li>
                                <a href="/dashboard/liste-rendezvous"
                                    class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">Listes
                                    Rendez vous</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-Operation" data-collapse-toggle="dropdown-Operation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64">
                                <path fill="#24389e"
                                    d="M55.815.629H8.459C4.392.629.587 4.444.587 8.509v47.342c0 4.065 3.822 7.901 7.887 7.901h47.341c4.069 0 7.896-3.815 7.896-7.878V8.513c0-4.065-3.827-7.884-7.895-7.884zM33.88 7.975a5.18 5.18 0 0 1 4.718 3.039h-2.941a1.851 1.851 0 0 0-1.796-1.402c-.871 0-1.598.599-1.8 1.402h-2.9a5.185 5.185 0 0 1 4.718-3.039zm-5.098 4.262h3.394a1.854 1.854 0 0 0 3.367 0h3.436c.053.298.087.603.087.918a5.181 5.181 0 0 1-5.185 5.178a5.183 5.183 0 0 1-5.185-5.178c0-.315.032-.62.087-.918zM7.785 20.41c-1.839-3.363-.994-7.468 1.812-9.863l-.932-1.706a.318.318 0 0 1 .127-.435l2.329-1.269a.318.318 0 0 1 .434.128l.934 1.704c3.531-1.058 7.444.447 9.281 3.812l-4.513 2.464a2.823 2.823 0 0 1-4.956 2.704L7.787 20.41zm13.92 22.294a4.682 4.682 0 0 1-4.686 4.678a4.682 4.682 0 0 1-4.686-4.678a4.681 4.681 0 0 1 4.686-4.676a4.682 4.682 0 0 1 4.686 4.676m17.013 12.531H12.271v-4.709c0-.867.702-1.57 1.569-1.57h24.878zm0-7.852H26.451a3.88 3.88 0 0 1-3.878-3.875a3.878 3.878 0 0 1 3.878-3.875h12.267zm-1.094-11.949a1.963 1.963 0 0 1 .558-2.72l4.919-3.241l-1.387-3.818h-1.918l1.127 3.098l-3.735 2.461a3.74 3.74 0 0 0-1.613 2.383a3.742 3.742 0 0 0 .544 2.829c.224.334.494.618.797.861h-5.169c.303-.243.575-.527.797-.861a3.729 3.729 0 0 0 .543-2.829a3.734 3.734 0 0 0-1.613-2.384l-3.733-2.461l1.122-3.098h-1.916l-1.384 3.818l4.918 3.241a1.962 1.962 0 1 1-2.161 3.274l-6.196-4.082c-1.073-.729-.97-1.819-.773-2.303l2.635-7.503c.509-1.414 1.493-2.519 4.263-2.519h12.167c2.772 0 3.754 1.104 4.265 2.519l2.636 7.503c.196.485.297 1.574-.775 2.303l-6.194 4.082a1.967 1.967 0 0 1-2.722-.554zm18.024 19.801H40.46v-15.7h15.188z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Operation</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-Operation" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/dashboardMedecin/ListesOperations"
                                    class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Listes
                                    Operations</a>
                            </li>
                            <li>
                                <a href="/dashboardMedecin/ListesRendezVousOperations"
                                    class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Rendez-Vous
                                    Operations</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-Cliniques" data-collapse-toggle="dropdown-Cliniques">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 64 64">
                                <path fill="#2f25c1"
                                    d="M55.407.547H8.833C4.271.547.559 4.26.559 8.824v46.568c0 4.565 3.713 8.279 8.274 8.279h46.574c4.564 0 8.276-3.713 8.276-8.279V8.824c0-4.564-3.712-8.277-8.276-8.277M35.358 16.592a6.583 6.583 0 0 1 6.584 6.584c0 3.634-2.949 6.586-6.584 6.586s-6.584-2.952-6.584-6.586a6.583 6.583 0 0 1 6.584-6.584M8.191 18.675v-5.269h5.269V8.137h5.269v5.269h5.269v5.269h-5.269v5.268H13.46v-5.268zM52.64 53.058c-.488 0-.957-.095-1.385-.267l-5.862-1.631v5.843H25.044V51.16l-5.86 1.631a3.74 3.74 0 0 1-1.385.267a3.755 3.755 0 0 1-3.112-5.853l9.4-12.889c1.02-1.398 2.445-2.955 5.45-2.955H40.9c3.004 0 4.43 1.558 5.449 2.955l9.399 12.889a3.74 3.74 0 0 1 .642 2.099a3.757 3.757 0 0 1-3.752 3.754z" />
                                <path fill="#2f25c1"
                                    d="M25.043 35.868v7.816l.712-.24c5.242-1.545 7.281 5.376 2.04 6.918l-.168.047l7.592 2.513l7.593-2.513l-.171-.047c-5.238-1.542-3.199-8.463 2.039-6.918l.716.24v-7.816l-10.177 3.325z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Cliniques</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-Cliniques" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/dashboardMedecin/cliniques"
                                    class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Listes
                                    Cliniques</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-Posts" data-collapse-toggle="dropdown-Posts">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.5" height="32"
                                viewBox="0 0 65 64">
                                <path fill="#2f25c1"
                                    d="M55.896.257H8.895C4.29.257.543 4.005.543 8.611v46.995c0 4.607 3.747 8.356 8.352 8.356h47.001c4.605 0 8.352-3.748 8.352-8.356V8.611c0-4.606-3.746-8.354-8.352-8.354m-6.262 13.495a3.286 3.286 0 0 1 3.288 3.292a3.284 3.284 0 0 1-3.288 3.289a3.29 3.29 0 0 1 0-6.581m1.765 7.864c-.004.371-.036 2.419-.479 3.038c-.489.677-1.287.574-1.287.574s-.9.031-1.256-.522c-.352-.541-.523-1.615-.511-3.09zM10.328 7.144h22.23v15.371l-1.298-1.297V8.444H11.62v24.865h19.64v-7.817l1.298 1.298v7.821h-22.23zm15.7 23.283a1.026 1.026 0 0 1-1.969.576l-2.386-8.188h-.845l-2.387 8.188a1.027 1.027 0 0 1-1.273.696a1.024 1.024 0 0 1-.696-1.272l2.416-8.292v-5.318l-.612.002l-.004-.002L16.9 21.49a.749.749 0 0 1-.928.507a.746.746 0 0 1-.506-.928l1.438-4.887c.572-1.9 2.178-1.843 2.178-1.843h4.337s1.604-.057 2.176 1.843l1.44 4.887a.748.748 0 0 1-1.435.421l-1.374-4.673l-.004.002l-.612-.002v5.321l2.417 8.288zm-6.529-18.392c0-.966.785-1.752 1.751-1.752a1.753 1.753 0 0 1 0 3.504a1.753 1.753 0 0 1-1.751-1.752M35.89 42.09c0 1.826-1.492 3.306-3.332 3.306c-1.842 0-3.334-1.481-3.334-3.306s1.492-3.307 3.334-3.307c1.841 0 3.332 1.481 3.332 3.307m-17.115.029a3.295 3.295 0 1 1-6.59 0a3.295 3.295 0 0 1 6.59 0m3.276 15.248H8.841v-6.458c0-2.329 1.913-4.221 4.245-4.221h4.552c2.331 0 4.414 1.893 4.414 4.221v6.458zm2.478 0l2.624-7.147c1.051-3.651 4.111-3.539 4.111-3.539h2.597s3.058-.112 4.111 3.539l2.624 7.147H24.53zm16.407-26.995h-4.563a1.384 1.384 0 0 1-1.387-1.386c0-.255.188-.658.309-.857l-5.57-5.57a.563.563 0 0 1 .002-.798a.562.562 0 0 1 .797 0l5.853 5.854l4.144.002l2.732-4.122a4.217 4.217 0 0 1 3.512-1.878h.209c-.002.416.031 2.958.891 3.855c.645.646 1.327.59 1.327.59v3.381a1.146 1.146 0 0 0 .441 2.205a1.147 1.147 0 0 0 .439-2.205v-3.366s.782.07 1.446-.736c.636-.79.781-2.593.776-3.679c2.138 0 3.946 2.082 3.946 4.397v8.847H44.75v-8.627c-.306.459-1.343 1.994-2.324 3.451c-.29.436-.971.645-1.489.645zm12.008 11.465a3.3 3.3 0 0 1-3.295 3.298a3.297 3.297 0 0 1 0-6.595a3.296 3.296 0 0 1 3.295 3.297m3.339 15.53H43.077v-6.458c0-2.329 2.079-4.221 4.414-4.221h4.546c2.333 0 4.246 1.892 4.246 4.221z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item><a
                                    href="/Dashboard/blogPage">Articles</a> </span>

                        </button>

                    </li>

                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-playground" data-collapse-toggle="dropdown-playground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 64 64">
                                <path fill="#2f25c1"
                                    d="M13.903 9.073a5.026 5.026 0 0 0-5.019 5.021c0 2.77 2.25 5.022 5.019 5.022a5.029 5.029 0 0 0 5.023-5.022a5.03 5.03 0 0 0-5.023-5.021m3.327 4.348l-3.293 1.556a.497.497 0 0 1-.48-.036a.494.494 0 0 1-.224-.346l-.007-3.877a.502.502 0 0 1 1.004 0v3.008l2.572-1.211a.501.501 0 1 1 .428.906" />
                                <path fill="#2f25c1"
                                    d="M55.327.673H8.756C4.192.673.48 4.385.48 8.951v46.566c0 4.565 3.713 8.279 8.276 8.279h46.571c4.564 0 8.276-3.714 8.276-8.279V8.951c0-4.565-3.712-8.278-8.276-8.278M34.765 8.872a4.726 4.726 0 0 1 4.726 4.728c0 2.611-1.664 4.728-4.726 4.728a4.728 4.728 0 1 1 0-9.456M22.557 30.895l2.423-7.16c.648-1.779 2.279-3.873 4.73-3.873h10.108c2.451 0 4.083 2.094 4.73 3.873l2.423 7.16c.233.796-.019 1.659-.704 2.145c-.321.228-.752.38-1.118.38c-.43 0-.861-.146-1.164-.359l-6.524-4.583a1.754 1.754 0 0 1 2.022-2.866l3.819 2.886c.228.17.55.123.723-.104a.573.573 0 0 0-.104-.721l-3.026-2.276v-4.308l-6.129.998l-6.129-.998v4.308l-3.027 2.276a.574.574 0 0 0-.103.721a.516.516 0 0 0 .721.104l3.82-2.886a1.754 1.754 0 0 1 2.022 2.866l-6.524 4.583a2.091 2.091 0 0 1-1.166.359c-.365 0-.797-.153-1.116-.38c-.686-.486-.939-1.35-.706-2.145zm20.234 2.584L29.77 31.337l1.868-1.33l3.127.433l3.123-.433zM7.233 14.096c0-3.68 2.992-6.673 6.67-6.673s6.673 2.993 6.673 6.673s-2.995 6.671-6.673 6.671a6.678 6.678 0 0 1-6.67-6.671M34.707 51.06H19.342a1.498 1.498 0 0 1-1.497-1.498v-13.46c0-.824.669-1.495 1.497-1.495h2.995c.825 0 1.497.671 1.497 1.495v7.476h10.874zm6.397 3.404a2.58 2.58 0 0 1-2.581 2.579a2.58 2.58 0 0 1-2.582-2.579V43.039a2.583 2.583 0 0 1 5.163 0zm-1.089-14.722l-11.273-1.858a2.582 2.582 0 0 1 .839-5.094l11.273 1.859a2.577 2.577 0 0 1 2.127 2.964a2.584 2.584 0 0 1-2.966 2.128zm11.739 9.82a1.5 1.5 0 0 1-1.497 1.498h-7.915v-7.482h3.423v-7.476c0-.824.672-1.495 1.495-1.495h2.997c.824 0 1.497.671 1.497 1.495z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item><a
                                    href="{{ route('calendars') }}">calendars</a></span>
                        </button>

                    </li>
                </ul>

                <div class="pt-2 space-y-2">
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                        aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
                        <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item> <a
                                href="/Dashboard/Profile">Profile</a></span>
                    </button>
                    {{-- <ul id="dropdown-auth" class="hidden py-2 space-y-2">
                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-blue-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            <a href="/Dashboard/Profile"
                                class="p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-2 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile</a>
                        </li>

                        <li class="flex items-center">
                            <svg class="h-6 w-6 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                                <line x1="19" y1="7" x2="19" y2="10"/>
                                <line x1="19" y1="14" x2="19" y2="14.01"/>
                            </svg>
                            <a href="/Dashboard/blogPage" class="p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-2 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Update Profile</a>
                        </li>

                    </ul> --}}
                    </li>



                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex dark:bg-gray-800"
            sidebar-bottom-menu>
            <a href="#"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                    </path>
                </svg>
            </a>
            <a href="settings/index.html" data-tooltip-target="tooltip-settings"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <div id="tooltip-settings" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Settings page
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-dropdown-toggle="language-dropdown"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                    <path fill="#b22234" d="M0 0h7410v3900H0z" />
                    <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                        stroke-width="300" />
                    <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                    <g fill="#fff">
                        <g id="d">
                            <g id="c">
                                <g id="e">
                                    <g id="b">
                                        <path id="a"
                                            d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                        <use xlink:href="#a" y="420" />
                                        <use xlink:href="#a" y="840" />
                                        <use xlink:href="#a" y="1260" />
                                    </g>
                                    <use xlink:href="#a" y="1680" />
                                </g>
                                <use xlink:href="#b" x="247" y="210" />
                            </g>
                            <use xlink:href="#c" x="494" />
                        </g>
                        <use xlink:href="#d" x="988" />
                        <use xlink:href="#c" x="1976" />
                        <use xlink:href="#e" x="2470" />
                    </g>
                </svg>
            </button>

            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700"
                id="language-dropdown">
                <ul class="py-1" role="none">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-us" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                        <path fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)" />
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-de" viewBox="0 0 512 512">
                                    <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                    <path d="M0 0h512v170.7H0z" />
                                    <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                </svg>
                                Deutsch
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-it" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#fff" d="M0 0h512v512H0z" />
                                        <path fill="#009246" d="M0 0h170.7v512H0z" />
                                        <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                    </g>
                                </svg>
                                Italiano
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                    viewBox="0 0 512 512">
                                    <defs>
                                        <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                    </defs>
                                    <path fill="#de2910" d="M0 0h512v512H0z" />
                                    <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                        xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                    <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                        xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                                </svg>
                                中文 (繁體)
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
