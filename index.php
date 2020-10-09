<?php
    include 'include/connection.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Soumit's Insta Link Manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- nav -->

<main class="bg-gray-100 bg-opacity-25">

  <div class="lg:w-8/12 lg:mx-auto mb-8">

    <header class="flex flex-wrap items-center p-4 md:py-8">

      <div class="md:w-3/12 md:ml-16">
        <!-- profile image -->
        <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                     border-2 border-pink-600 p-1" src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80" alt="profile">
      </div>

      <!-- profile meta -->
      <div class="w-8/12 md:w-7/12 ml-4">
        <div class="md:flex md:flex-wrap md:items-center mb-4">
          <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
            silicontech_bbs
          </h2>

          <!-- follow button -->
          <a href="https://www.instagram.com/silicontech_bbs" class="bg-blue-500 px-2 py-1 
                        text-white font-semibold text-sm rounded block text-center 
                        sm:inline-block block" target="_blank">Follow</a>
        </div>

        <!-- post, following, followers list for medium screens -->
        <ul class="hidden md:flex space-x-8 mb-4">
          <li>
            <span class="font-semibold">1082</span>
            followers
          </li>
          <li>
            <span class="font-semibold">0</span>
            following
          </li>
        </ul>

        <!-- user meta form medium screens -->
        <div class="hidden md:block">
          <h1 class="font-semibold">Silicon Institute of Technology, Bhubaneswar</h1>
          <span>Official account of Silicon Institute of Technology, Bhubaneswar</span>
          <p><a href = "https://www.silicon.ac.in" target="_blank"><font color = "00376B"><b>www.silicon.ac.in</b></font></a></p>
        </div>

      </div>

      <!-- user meta form small screens -->
      <div class="md:hidden text-sm my-2">
        <h1 class="font-semibold">Silicon Institute of Technology, Bhubaneswar</h1>
        <span>Official account of Silicon Institute of Technology, Bhubaneswar</span>
          <p><a href = "https://www.silicon.ac.in" target="_blank"><font color = "00376B"><b>www.silicon.ac.in</b></font></a></p>
      </div>

    </header>

    <!-- posts -->
    <div class="px-px md:px-3">

      <!-- user following for mobile only -->
      <ul class="flex md:hidden justify-around space-x-8 border-t 
                text-center p-2 text-gray-600 leading-snug text-sm">

          <li>
            <span class="font-semibold">1082</span>
            followers
          </li>
          <li>
            <span class="font-semibold">0</span>
            following
          </li>
      </ul>
      <!-- flexbox grid -->
      <div class="flex flex-wrap -mx-px md:-mx-3">

        <!-- column -->
        <?php
            $query = "SELECT * from links WHERE stat='1' ORDER BY id DESC";
            $queryresult = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($queryresult)){
        ?>
        <div class="w-1/3 p-px md:px-3">
          <!-- post 1-->
          <?php
                                if(($row['linktype']==0) || ($row['linktype']==1)){
                                    ?><a href="https://<?php echo $row['link']; ?>" target="_blank"><?php
                                }
                                if($row['linktype']==2){
                                    ?><a href="mailto:<?php echo $row['link']; ?>" target="_blank"><?php
                                }
          ?>
            <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
              <!-- post image-->
              <img class="w-full h-full absolute left-0 top-0 object-cover" src="<?php echo $row['imagelink'] ?>" alt="<?php echo $row['alttext'] ?>">
              <!-- overlay-->
              <div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                left-0 top-0 hidden">
                <div class="flex justify-center items-center 
                                    space-x-4 h-full">
                  <span class="p-2">
                    <b><?php echo $row['linktext'] ?></b>
                  </span>
                </div>
              </div>

            </article>
          </a>
        </div>
        <?php
            }
        ?>

      </div>
    </div>
  </div>
</main>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
