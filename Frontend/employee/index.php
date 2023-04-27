<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
              <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                  </svg>
               </button>
                <img src="logo.png" class="h-8 mr-3" alt=" Logo" />
                <span class="material-icons-outlined">menu</span>
              </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                  <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                      <span class="sr-only">Open user menu</span>
                      <img class="w-8 h-8 rounded-full" s alt="user photo">
                    </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                      <p class="text-sm text-gray-900 dark:text-white" role="none">
                        Larissa Weems
                      </p>
                      <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        
                      </p>
                    </div>
                    <ul class="py-1" role="none">
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </nav>
      
      <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
         <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <div class="flex items-center">
                <img src="Larissa.jpg" alt="" class="h-12 w-12 m-2 rounded-full">
                <p>
                    Larissa Weems
                </p>
            </div>
            <ul class="space-y-2 font-medium">
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="home.png" alt="" class="w-8 h-8">
                     <span class="ml-3">Home</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="form.png" alt="" class="w-8 h-8">
                     <span class="flex-1 ml-3 whitespace-nowrap">Registration</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="user-avatar.png" alt="" class="w-8 h-8">
                     <span class="flex-1 ml-3 whitespace-nowrap">Academics</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="voting.png" alt="" class="w-8 h-8">
                     <span class="flex-1 ml-3 whitespace-nowrap">Administration</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="input.png" alt="" class="w-8 h-8">
                     <span class="flex-1 ml-3 whitespace-nowrap">Admission</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="user.png" alt="" class="w-8 h-8">
                     <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img src="turn-off.png" alt="" class="w-8 h-8">
                     <span class="flex-1 ml-3 whitespace-nowrap">Sign out</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>
      
      <div class="p-4 sm:ml-64">
         <div class="p-4  border-gray-200 rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-1 gap-4 mb-4">
               <div class="flex items-left justify-left h-24 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-xl text-green-400 dark:text-gray-500">Course for Summer</p>
               </div>
            <div class="grid grid-cols-4 gap-4 mb-4">
               <div class="flex rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <img src="setting.png" alt="" class="w-8 h-8">
                  <p class="text-xl text-black-400 dark:text-gray-500">CO</p>
               </div>
               <div class="flex rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <img src="chart.png" alt="" class="w-8 h-8">
                  <p class="text-xl text-black-400 dark:text-gray-500">PO</p>
               </div>
               <div class="flex rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <img src="bottom.png" alt="" class="w-8 h-8">
                  <p class="text-xl text-black-400 dark:text-gray-500">CLO</p>
               </div>
               <div class="flex rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <img src="widget.png" alt="" class="w-8 h-8">
                  <p class="text-xl text-black-400 dark:text-gray-500">PLO</p>
               </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">Attendance</p>
            </div>
            <div class="flex h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">Semesteer wise result</p>
             </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
               <div class="flex bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">Offer courses</p>
               </div>
               
            </div>
         </div>
      </div>
      
 
    
  </body>
  </html>
    
        