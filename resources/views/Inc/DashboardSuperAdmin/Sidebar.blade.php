<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

    <aside id="sidebar"
        class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
        aria-label="Sidebar">
        <div
            class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <div
                    class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
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
                            <a href="/dashboardSuperAdmin"
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 64 64">
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
                                aria-controls="dropdown-crud" data-collapse-toggle="dropdown-crud">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 64 64">
                                    <path fill="#24389e"
                                        d="M30.825 14.252h1.959v-1.629h1.63v-1.958h-1.63V9.03h-1.959v1.635h-1.63v1.958h1.63z" />
                                    <path fill="#24389e"
                                        d="M55.132.673H8.558C3.994.673.282 4.386.282 8.951v46.567c0 4.565 3.713 8.279 8.276 8.279h46.574c4.564 0 8.276-3.713 8.276-8.279V8.951c0-4.564-3.712-8.278-8.276-8.278M31.818 7.938c2.794 0 7.37 1.175 9.922 3.963l-3.435 6.592a8.175 8.175 0 0 0-6.486-3.187a8.167 8.167 0 0 0-6.432 3.122l-3.502-6.38c2.949-2.948 7.019-4.11 9.934-4.11zm6.295 15.304a6.302 6.302 0 0 1-6.305 6.297a6.297 6.297 0 0 1 0-12.594a6.302 6.302 0 0 1 6.305 6.297M19.545 36.789c.572-1.999 3.099-5.544 7.47-5.565l9.824.009c4.273.105 6.749 3.581 7.314 5.557l3.615 11.962h-5.297l-2.307-7.895H38.55l2.293 7.895h-18l2.303-7.895h-1.613l-2.302 7.895h-5.372l3.685-11.963zm35.827 18.963H8.253v-4.483h47.118z" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Doctor</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-crud" class="space-y-2 py-2 hidden ">
                                <li>
                                    <a href="{{ route('medecin_super_admin.index') }}"
                                        class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">List
                                        Doctor</a>
                                </li>
                                <li>
                                    <a href="{{ route('User_super_admin.index') }}"
                                        class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">Users</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-Operation" data-collapse-toggle="dropdown-Operation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 64 64">
                                    <path fill="#24389e"
                                        d="M55.815.629H8.459C4.392.629.587 4.444.587 8.509v47.342c0 4.065 3.822 7.901 7.887 7.901h47.341c4.069 0 7.896-3.815 7.896-7.878V8.513c0-4.065-3.827-7.884-7.895-7.884zM33.88 7.975a5.18 5.18 0 0 1 4.718 3.039h-2.941a1.851 1.851 0 0 0-1.796-1.402c-.871 0-1.598.599-1.8 1.402h-2.9a5.185 5.185 0 0 1 4.718-3.039zm-5.098 4.262h3.394a1.854 1.854 0 0 0 3.367 0h3.436c.053.298.087.603.087.918a5.181 5.181 0 0 1-5.185 5.178a5.183 5.183 0 0 1-5.185-5.178c0-.315.032-.62.087-.918zM7.785 20.41c-1.839-3.363-.994-7.468 1.812-9.863l-.932-1.706a.318.318 0 0 1 .127-.435l2.329-1.269a.318.318 0 0 1 .434.128l.934 1.704c3.531-1.058 7.444.447 9.281 3.812l-4.513 2.464a2.823 2.823 0 0 1-4.956 2.704L7.787 20.41zm13.92 22.294a4.682 4.682 0 0 1-4.686 4.678a4.682 4.682 0 0 1-4.686-4.678a4.681 4.681 0 0 1 4.686-4.676a4.682 4.682 0 0 1 4.686 4.676m17.013 12.531H12.271v-4.709c0-.867.702-1.57 1.569-1.57h24.878zm0-7.852H26.451a3.88 3.88 0 0 1-3.878-3.875a3.878 3.878 0 0 1 3.878-3.875h12.267zm-1.094-11.949a1.963 1.963 0 0 1 .558-2.72l4.919-3.241l-1.387-3.818h-1.918l1.127 3.098l-3.735 2.461a3.74 3.74 0 0 0-1.613 2.383a3.742 3.742 0 0 0 .544 2.829c.224.334.494.618.797.861h-5.169c.303-.243.575-.527.797-.861a3.729 3.729 0 0 0 .543-2.829a3.734 3.734 0 0 0-1.613-2.384l-3.733-2.461l1.122-3.098h-1.916l-1.384 3.818l4.918 3.241a1.962 1.962 0 1 1-2.161 3.274l-6.196-4.082c-1.073-.729-.97-1.819-.773-2.303l2.635-7.503c.509-1.414 1.493-2.519 4.263-2.519h12.167c2.772 0 3.754 1.104 4.265 2.519l2.636 7.503c.196.485.297 1.574-.775 2.303l-6.194 4.082a1.967 1.967 0 0 1-2.722-.554zm18.024 19.801H40.46v-15.7h15.188z" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                    sidebar-toggle-item>Operation</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-Operation" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="/dashboardSuperAdmin/ListesOperations"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Listes
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
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                    sidebar-toggle-item>Cliniques</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-Cliniques" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="/DashboardSuperAdmin/cliniques"
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
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                    sidebar-toggle-item>Articles</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-Posts" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="/DashboardSuperAdmin/blogPage"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Listes
                                        Blog</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-Reclamation" data-collapse-toggle="dropdown-Reclamation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 64 64">
                                    <path fill="#2f25c1"
                                        d="M55.504.48H8.721C4.137.48.407 4.21.407 8.795v46.78c0 4.586 3.729 8.316 8.314 8.316h46.783c4.584 0 8.315-3.73 8.315-8.316V8.795c0-4.585-3.731-8.315-8.315-8.315M53.67 28.451c0 1.596-1.308 2.892-2.916 2.892c-1.61 0-2.916-1.295-2.916-2.892s1.305-2.892 2.916-2.892c1.609 0 2.916 1.294 2.916 2.892m-2.798-9.274l1.109.061a4.035 4.035 0 0 1-4.243 3.802l.06-1.108a2.921 2.921 0 0 0 3.074-2.756zm-3.108-3.92l1.094-.189a4.035 4.035 0 0 1-3.28 4.659l-.19-1.093a2.923 2.923 0 0 0 2.376-3.377m-3.912-3.119l1.024-.43a4.035 4.035 0 0 1-2.145 5.276l-.432-1.023a2.923 2.923 0 0 0 1.554-3.822zM39.34 9.977l.9-.649a4.035 4.035 0 0 1-.903 5.625l-.65-.9a2.925 2.925 0 0 0 .654-4.075zm-7.223-.899a3.807 3.807 0 1 1 .005 7.615a3.807 3.807 0 0 1-.005-7.615m-10.333 1.219a4.035 4.035 0 0 1 3.523 4.478l-1.103-.131a2.923 2.923 0 0 0-2.553-3.244zm-2.84 9.092l-1.047.366a2.922 2.922 0 0 0-3.717-1.796l-.365-1.048a4.034 4.034 0 0 1 5.129 2.479zm-2.243 3.256l-.939.593a2.922 2.922 0 0 0-4.025-.913l-.592-.941a4.035 4.035 0 0 1 5.556 1.261m-3.771 2.546a2.896 2.896 0 0 1 2.895 2.896a2.897 2.897 0 0 1-2.895 2.893a2.895 2.895 0 0 1 0-5.789m1.621 6.719c-.023 2.887-.636 3.268-1.681 3.268c-1.051 0-1.61-.382-1.634-3.268zm5.833 12.67c0 .7-.552 1.269-1.252 1.269a1.267 1.267 0 0 1-1.263-1.269v-8.083h-1.058v10.182H8.928V36.496H7.88v8.083c0 .7-.567 1.269-1.266 1.269c-.7 0-1.249-.569-1.249-1.269v-8.966c0-2.045 1.825-3.703 3.872-3.703h1.245c0 2.72.784 4.022 2.057 4.022v3.26a1 1 0 0 0-.607.922a.99.99 0 0 0 .998.996c.554 0 .998-.456.998-1.01c0-.413-.253-.769-.611-.922V35.92c1.213 0 2.035-1.193 2.035-4.01h1.309c2.045 0 3.723 1.658 3.723 3.704zm.377-27.741a2.927 2.927 0 0 0-3.218-2.586l-.12-1.104a4.037 4.037 0 0 1 4.442 3.569l-1.103.121zm20.453 17.203a1.64 1.64 0 0 1-3.278 0l-.006-11.078h-.963v30.041c0 1.186-.961 2.147-2.148 2.147s-2.148-.961-2.148-2.147V34.4H31.57v18.605a2.15 2.15 0 0 1-4.299 0V22.964h-.967l-.002 11.078a1.64 1.64 0 0 1-3.278 0V21.793c0-2.697 1.93-4.226 4.574-4.226h9.043c2.642 0 4.574 1.528 4.574 4.226v12.249zm17.43 10.776c-.652.186-1.319-.142-1.491-.74l-2.231-7.792l-1.091-.002l2.983 10.394h-12.12l2.981-10.394l-1.089.002l-2.232 7.792c-.17.598-.838.927-1.49.74c-.654-.187-1.067-.758-.848-1.505l2.296-7.993c.919-3.196 3.592-3.096 3.592-3.096h5.701s2.675-.1 3.592 3.096l2.294 7.993c.221.747-.192 1.318-.846 1.505z" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                    sidebar-toggle-item>Reclamation</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-Reclamation" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="/dashboardSuperAdmin/Reclamation"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Listes
                                        De Reclamation</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    {{-- <div class="pt-2 space-y-2">

                        <a href="https://github.com/themesberg/flowbite-admin-dashboard/issues" target="_blank"
                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 64 64">
                                <path fill="#2f25c1"
                                    d="M56.277 20.663a7.294 7.294 0 1 1-14.588 0a7.294 7.294 0 0 1 14.588 0M3.292 6.261V19.49H1.314a.677.677 0 0 1-.679-.678V1.742c0-.578.431-1.048 1.022-1.048h8.747c.59 0 1.022.469 1.022 1.046v1.002h13.523c.378 0 .68.303.68.676v3.838H14.085V6.251c0-.577-.432-1.046-1.024-1.046H4.317c-.592 0-1.024.477-1.024 1.056z" />
                                <path fill="#2f25c1"
                                    d="M30.946 27.5a.676.676 0 0 1-.68.676H6.631a.676.676 0 0 1-.679-.677v-17.07c0-.578.431-1.048 1.022-1.048h8.745c.592 0 1.024.469 1.024 1.046v1.002h13.523c.377 0 .68.303.68.676zm-10.484-9.719v-4.026h-4.028v4.026h-4.027v4.028h4.027v4.027h4.028v-4.027h4.027v-4.028zM56.19 29.836a7.311 7.311 0 0 1 7.317 7.31l.015 26.733H38.978V41.718h-.994l-4.526 6.753c-.737 1.005-2.233 1.492-3.426 1.492H19.406a3.197 3.197 0 0 1-3.198-3.193c0-1.76 1.433-3.15 3.198-3.15h9.665l6.705-10.138c1.606-2.452 4.748-3.637 7.277-3.637l13.136-.008z" />
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Administrateur Profile</span>
                        </a>
                    </div> --}}
                </div>
            </div>

        </div>
    </aside>

    <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
