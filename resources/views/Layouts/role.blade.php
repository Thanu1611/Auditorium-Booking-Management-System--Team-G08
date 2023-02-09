<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UOJ Auditorium</title>
    <link rel="icon" type="image/x-icon" href="https://adaderanaenglish.s3.amazonaws.com/1510059114-jaffna-university-reopen.jpg">
    <script src="https://cdn.tailwindcss.com/"></script>
  </head>

  <body>
    <nav class="fixed z-30 w-full bg-white border-b-2 border-indigo-600">
      <div class="px-6 py-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button class="p-2 text-gray-600 rounded cursor-pointer lg:hidden ">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
            <div class="flex items-center text-3xl font-bold"> 
              <span class="text-blue-900"><b>Auditorium Booking Management System</b></span>
            </div>
          </div>
            <div class="relative inline-block ">
            <span class="mx-1">Auditorium_Name</span>
              <!-- Dropdown toggle button -->
              <button
                class="relative flex items-center p-2 text-sm text-gray-600 bg-white border border-transparent rounded-md focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:text-white dark:bg-gray-800 focus:outline-none">
                <span class="mx-1">Admin_Name</span>
                <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                    fill="currentColor"></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div class="absolute right-0 z-20 w-56 mt-2 overflow-hidden bg-white rounded-md">
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="pt-12 lg:flex">
      <div class="flex flex-col w-full px-4 py-8 overflow-y-auto border-b lg:border-r lg:h-screen lg:w-64">


        <div class="flex flex-col justify-between mt-6">
          <aside>
            <ul>
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200"href="{{route('add_book')}}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="40" height="40"
                  viewBox="0 0 24 24">
                  <path d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 11 7 L 11 11 L 7 11 L 7 13 L 11 13 L 11 17 L 13 17 L 13 13 L 17 13 L 17 11 L 13 11 L 13 7 L 11 7 z"></path>
                </svg>

                  <span class="mx-4 font-medium">Add Booking</span>
                </a>
              </li>
              
              <li>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="{{route('view_book')}}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="40" height="40"
                  viewBox="0 0 80 80">
                  <path d="M 15 9 L 15 71 L 65 71 L 65 23.585938 L 50.414063 9 Z M 17 11 L 49 11 L 49 25 L 63 25 L 63 69 L 17 69 Z M 51 12.414063 L 61.585938 23 L 51 23 Z M 22 13 C 21.449219 13 21 13.449219 21 14 C 21 14.550781 21.449219 15 22 15 C 22.550781 15 23 14.550781 23 14 C 23 13.449219 22.550781 13 22 13 Z M 22 17 C 21.449219 17 21 17.449219 21 18 C 21 18.550781 21.449219 19 22 19 C 22.550781 19 23 18.550781 23 18 C 23 17.449219 22.550781 17 22 17 Z M 22 21 C 21.449219 21 21 21.449219 21 22 C 21 22.550781 21.449219 23 22 23 C 22.550781 23 23 22.550781 23 22 C 23 21.449219 22.550781 21 22 21 Z M 22 25 C 21.449219 25 21 25.449219 21 26 C 21 26.550781 21.449219 27 22 27 C 22.550781 27 23 26.550781 23 26 C 23 25.449219 22.550781 25 22 25 Z M 22 29 C 21.449219 29 21 29.449219 21 30 C 21 30.550781 21.449219 31 22 31 C 22.550781 31 23 30.550781 23 30 C 23 29.449219 22.550781 29 22 29 Z M 22 33 C 21.449219 33 21 33.449219 21 34 C 21 34.550781 21.449219 35 22 35 C 22.550781 35 23 34.550781 23 34 C 23 33.449219 22.550781 33 22 33 Z M 28 34 L 28 36 L 55 36 L 55 34 Z M 22 37 C 21.449219 37 21 37.449219 21 38 C 21 38.550781 21.449219 39 22 39 C 22.550781 39 23 38.550781 23 38 C 23 37.449219 22.550781 37 22 37 Z M 28 40 L 28 42 L 51 42 L 51 40 Z M 22 41 C 21.449219 41 21 41.449219 21 42 C 21 42.550781 21.449219 43 22 43 C 22.550781 43 23 42.550781 23 42 C 23 41.449219 22.550781 41 22 41 Z M 22 45 C 21.449219 45 21 45.449219 21 46 C 21 46.550781 21.449219 47 22 47 C 22.550781 47 23 46.550781 23 46 C 23 45.449219 22.550781 45 22 45 Z M 28 46 L 28 48 L 55 48 L 55 46 Z M 22 49 C 21.449219 49 21 49.449219 21 50 C 21 50.550781 21.449219 51 22 51 C 22.550781 51 23 50.550781 23 50 C 23 49.449219 22.550781 49 22 49 Z M 28 52 L 28 54 L 51 54 L 51 52 Z M 22 53 C 21.449219 53 21 53.449219 21 54 C 21 54.550781 21.449219 55 22 55 C 22.550781 55 23 54.550781 23 54 C 23 53.449219 22.550781 53 22 53 Z M 22 57 C 21.449219 57 21 57.449219 21 58 C 21 58.550781 21.449219 59 22 59 C 22.550781 59 23 58.550781 23 58 C 23 57.449219 22.550781 57 22 57 Z M 22 61 C 21.449219 61 21 61.449219 21 62 C 21 62.550781 21.449219 63 22 63 C 22.550781 63 23 62.550781 23 62 C 23 61.449219 22.550781 61 22 61 Z M 22 65 C 21.449219 65 21 65.449219 21 66 C 21 66.550781 21.449219 67 22 67 C 22.550781 67 23 66.550781 23 66 C 23 65.449219 22.550781 65 22 65 Z"></path>
                  </svg>

                  <span class="mx-4 font-medium">View Booking</span>
                </a>
              </li>
            </ul>

          </aside>
         
        </div>
        
      </div>
      <div style="margin-left:100px; margin-right:100px;">
      @yield('content')
      </div>
  </body>

</html>
