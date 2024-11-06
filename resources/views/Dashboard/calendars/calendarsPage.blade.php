<!doctype html>
<html lang="en" class="dark">

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@include('Inc.Dashboard.Head')


<body class="bg-gray-50 dark:bg-gray-800">


@include('Inc.Dashboard.NavDash')


<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

    @include('Inc.Dashboard.sidebar')

    <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
    <br>
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900 ">

        <main>
            <div class="px-4 pt-6">



                <div class="bg-white p-8">
                    <div class="flex justify-between items-center mb-6"><h1 class="text-2xl font-semibold">15 July 2022,
                            Monday</h1>
                        <div class="flex space-x-2"><input
                                class="flex h-10 w-full border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 border rounded-md"
                                placeholder="Search">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Day
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Week
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Month
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                + Create Event
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-6">
                        <div>
                            <div class="rdp p-3 rounded-md border">
                                <div class="flex flex-col sm:flex-row space-y-4 sm:space-x-4 sm:space-y-0">
                                    <div class="space-y-4 rdp-caption_start rdp-caption_end">
                                        <div class="flex justify-center pt-1 relative items-center">
                                            <div class="text-sm font-medium" aria-live="polite" role="presentation"
                                                 id="react-day-picker-18">March 2024
                                            </div>
                                            <div class="space-x-1 flex items-center">
                                                <button name="previous-month" aria-label="Go to previous month"
                                                        class="rdp-button_reset rdp-button inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input hover:bg-accent hover:text-accent-foreground h-7 w-7 bg-transparent p-0 opacity-50 hover:opacity-100 absolute left-1"
                                                        type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="h-4 w-4">
                                                        <path d="m15 18-6-6 6-6"></path>
                                                    </svg>
                                                </button>
                                                <button name="next-month" aria-label="Go to next month"
                                                        class="rdp-button_reset rdp-button inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input hover:bg-accent hover:text-accent-foreground h-7 w-7 bg-transparent p-0 opacity-50 hover:opacity-100 absolute right-1"
                                                        type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="h-4 w-4">
                                                        <path d="m9 18 6-6-6-6"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <table class="w-full border-collapse space-y-1" role="grid"
                                               aria-labelledby="react-day-picker-18">
                                            <thead class="rdp-head">
                                            <tr class="flex">
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Sunday">Su
                                                </th>
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Monday">Mo
                                                </th>
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Tuesday">Tu
                                                </th>
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Wednesday">We
                                                </th>
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Thursday">Th
                                                </th>
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Friday">Fr
                                                </th>
                                                <th scope="col"
                                                    class="text-muted-foreground rounded-md w-9 font-normal text-[0.8rem]"
                                                    aria-label="Saturday">Sa
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="rdp-tbody">
                                            <tr class="flex w-full mt-2">
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">25
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">26
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">27
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">28
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">29
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">1
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">2
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="flex w-full mt-2">
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">3
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">4
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">5
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">6
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">7
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">8
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">9
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="flex w-full mt-2">
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">10
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">11
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">12
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">13
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">14
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">15
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">16
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="flex w-full mt-2">
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">17
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">18
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">19
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">20
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">21
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">22
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">23
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="flex w-full mt-2">
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">24
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">25
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">26
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">27
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">28
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">29
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100"
                                                        role="gridcell">30
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="flex w-full mt-2">
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 bg-accent text-accent-foreground"
                                                        role="gridcell">31
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">1
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">2
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">3
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">4
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">5
                                                    </div>
                                                </td>
                                                <td class="text-center text-sm p-0 relative [&amp;:has([aria-selected])]:bg-accent first:[&amp;:has([aria-selected])]:rounded-l-md last:[&amp;:has([aria-selected])]:rounded-r-md focus-within:relative focus-within:z-20"
                                                    role="presentation">
                                                    <div
                                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 p-0 font-normal aria-selected:opacity-100 text-muted-foreground opacity-50"
                                                        role="gridcell">6
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="grid grid-cols-7 gap-4">
                                <div class="col-span-1 bg-gray-100 p-4 rounded-md">
                                    <div class="bg-orange-200 p-2 rounded-md mb-2"><p class="text-sm">Dart Game</p>
                                        <p class="text-xs">22:00 - 23:00</p></div>
                                    <div class="bg-red-200 p-2 rounded-md"><p class="text-sm">Doctor's Visit</p>
                                        <p class="text-xs">14:00 - 16:00</p></div>
                                </div>
                                <div class="col-span-6">
                                    <div class="bg-blue-200 p-2 rounded-md mb-2"><p class="text-sm">Design Review</p>
                                        <p class="text-xs">14:00 - 16:00</p></div>
                                    <div class="bg-purple-200 p-2 rounded-md mb-2"><p class="text-sm">Dinner with Alpha
                                            Team</p>
                                        <p class="text-xs">21:00 - 22:00</p></div>
                                    <div class="bg-green-200 p-2 rounded-md mb-2"><p class="text-sm">Family Trip to a
                                            beach and Resort</p>
                                        <p class="text-xs">09:00 - 18:00</p></div>
                                    <div class="bg-purple-200 p-2 rounded-md mb-2"><p class="text-sm">Grocery</p>
                                        <p class="text-xs">17:00 - 19:00</p></div>
                                    <div class="bg-purple-200 p-2 rounded-md"><p class="text-sm">Client Meetup</p>
                                        <p class="text-xs">22:00 - 23:00</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('Inc.Dashboard.footer')

    </div>

</div>


@include('Inc.Dashboard.scripts')
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</body>

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:34 GMT -->
</html>
