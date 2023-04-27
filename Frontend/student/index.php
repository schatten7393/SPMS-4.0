<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>Student Dashboard</title>
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
               <img src="logo.png" class="h-8 mr-3" alt=" Logo" />
            </div>
         </div>
   </nav>
   <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
      <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
         <div class="flex items-center">
            <img src="jjk.jpg" alt="" class="h-12 w-12 m-2 rounded-full">
            <p>
               <?php
               include '../connetion.php';
               $sql = "SELECT * FROM `curr_user`;";
               $result = mysqli_query($conn, $sql);
               $userID = mysqli_fetch_assoc($result)['userID'];

               $sql = "SELECT * FROM `student` WHERE `studentID`=$userID;";
               $result = mysqli_query($conn, $sql);
               $userName = mysqli_fetch_assoc($result);
               echo $userName['firstName'] . ' ' . $userName['lastName'];
               ?>
            </p>
         </div>
         <ul class="space-y-2 font-medium">
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="material-icons-outlined">home</span>
                  <span class="ml-3">Home</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="material-icons-outlined">app_registration</span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Registration</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="material-icons-outlined">manage_accounts</span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Services</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="material-icons-outlined">how_to_vote</span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Faculty Evaluation</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="material-icons-outlined">people</span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <span class="material-icons-outlined">settings_power</span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Sign out
                  </span>
               </a>

            </li>
         </ul>
      </div>
   </aside>

   <div class="p-4 sm:ml-64">
      <div class="p-4  border-gray-200 rounded-lg dark:border-gray-700 mt-14">
         <div class="grid grid-cols-1 gap-4 mb-4">
            <div class="flex items-left justify-left h-24 rounded bg-gray-50 dark:bg-gray-800">
               <p class="text-xl text-green-400 dark:text-gray-500">Student info</p>
            </div>
            <div class="grid grid-cols-4 gap-4 mb-4">
               <div class="px-4 rounded bg-gray-50 h-48 dark:bg-gray-800">
                  <h1 class="font-bold text-center mb-2">
                     CO stats
                  </h1>
                  <form action="" method="post">
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700" for="course">
                           course:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="course" id="course" type="text" placeholder="Enter course">
                     </div>
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700 " for="semester">
                           Semester:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="semester" id="semester" type="text" placeholder="Enter semester">
                     </div>
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700" for="year">
                           Year:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="year" id="year" type="text" placeholder="Enter year">
                     </div>
                     <div class="flex justify-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit" type="submit" onclick="drawStuff()" >
                           Submit
                        </button>
                     </div>
                  </form>
               </div>
               <div class="px-4 rounded bg-gray-50 h-48 dark:bg-gray-800">
                  <h1 class="font-bold text-center mb-2">
                     Course Outline
                  </h1>
                  <form action="" method="post">
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700" for="course">
                           course:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="course" id="course" type="text" placeholder="Enter course">
                     </div>
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700 " for="semester">
                           Semester:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="semester" id="semester" type="text" placeholder="Enter semester">
                     </div>
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700" for="year">
                           Year:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="year" id="year" type="text" placeholder="Enter year">
                     </div>
                     <div class="flex justify-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submitoutline" type="submit">
                           Submit
                        </button>
                     </div>
                  </form>
               </div>
               <div class="px-4 rounded bg-gray-50 h-48 dark:bg-gray-800">
                  <h1 class="font-bold text-center mb-2">
                     Question Bank
                  </h1>
                  <form action="" method="post">
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700" for="course">
                           course:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="course" id="course" type="text" placeholder="Enter course">
                     </div>
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700 " for="semester">
                           Semester:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="semester" id="semester" type="text" placeholder="Enter semester">
                     </div>
                     <div class="mb-4 flex ">
                        <label class="block text-gray-700" for="year">
                           Year:
                        </label>
                        <input class="appearance-none border rounded w-full mx-3  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="year" id="year" type="text" placeholder="Enter year">
                     </div>
                     <div class="flex justify-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit" type="submit" onclick="<?php ?>">
                           Submit
                        </button>
                     </div>
                  </form>
               </div>
               <div class="px-4 rounded bg-gray-50 h-48 dark:bg-gray-800">
                  <h1 class="font-bold text-center mb-2">
                     PLO
                  </h1>
                  <form action="" method="post">
                     <div class="flex justify-center items-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit" type="submit" onclick="<?php ?>">
                           view PLO Stats
                        </button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mb-4">
               <div class=" flex h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800" id="dis">
               <div id="top_x_div" style="width: 900px; height: 500px;"></div>
                  <?php
                  include "../connetion.php";
                  if (isset($_POST['submit'])) {
                     $course = $_POST['course'];
                     $semester = $_POST['semester'];
                     $year = $_POST['year'];
                     $y = (int)($year);
                     $sql = "SELECT sectionID, marksObtained FROM student_section 
                        where studentID = $userID AND
                        sectionID in (SELECT sectionID FROM section 
                        WHERE courseID = '$course' AND semester = '$semester' AND year = $year);";
                     $result = mysqli_query($conn, $sql);
                     $result = mysqli_query($conn, $sql);
                     $sectionID = mysqli_fetch_assoc($result);
                     echo $sectionID['marksObtained'];
                  }
                  if (isset($_POST['submitoutline'])) {
                     $name = $_POST['course'];
                     // Display form data
                     echo "<p>Name: $name</p>";
                  }
                  ?>

               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          ["CO1", 97],
          ["CO2", 97],
          ["CO3", 97],
          ["CO4", 97]

        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Courese outcome',
                   subtitle: 'based on backlog data' },
          bars: 'vartical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

</body>

</html>