<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .bg-image {
      /* The image used */
      background-image: url("iubfront.jpg");

      /* Add the blur effect */
      filter: blur(8px);
      -webkit-filter: blur(8px);

      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* Position text in the middle of the page/image */
    .bg-text {
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      border: 3px solid #f1f1f1;
      border-radius: 10px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 20%;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  include "verification.php";
  ?>
  <div class="bg-image"></div>

  <div class="bg-text">
    <div class="bg-white bg-opacity-0 rounded-lg p-8 max-w-md mx-auto">
      <form method="POST">
      <h1 class="text-gray-800 font-bold text-2xl mb-1">SPMS 4.0</h1>
              <?php if ($error_msg != '') {
                  echo "<div class='text-red-500 text-sm mb-3'>$error_msg</div>";
              } ?>
        <div class="mb-4">
          <label class="block text-blue-700 font-bold mb-2" for="userID">
            User ID
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Enter user ID">
        </div>
        <div class="mb-6">
          <label class="block text-blue-700 font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Enter password">
        </div>
        <div class="flex items-center justify-center">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" >
            Log In
          </button>
        </div>
      </form>
    </div>

  </div>

</body>

</html>