<?php
    session_start();
    $user_id = $_SESSION['id'];
    $limit = $_SESSION['limit'];

    if($user_id) {
    include 'partials/header.php'; 
    include "partials/db.php";

    if (isset($_POST['submit'])){
        $title = mysqli_real_escape_string($db,$_POST['title']);
        $link = mysqli_real_escape_string($db,$_POST['link']);
        
        $count_link = "select * from links where user_id ='$user_id'";

        $result = mysqli_query($db,$count_link);
        $link_count = mysqli_num_rows($result);

        if($link_count >= $limit){
            ?>
                <script>
                    alert("Your limit has been finished");
                    window.location.href="login.php";
                </script>
            <?php
            
        }

        else{
            $query="insert into links(title,user_id, link) values('$title','$user_id','$link')";
            mysqli_query($db,$query);
        
            $last_id = $db->insert_id;

            $left_limit = ($limit - $link_count)-1;
        }

        
        
    }
                        
?>

    <!-- form stated  -->
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 border border-indigo-600 shadow-lg sm:rounded-tl-3xl sm:rounded-br-3xl sm:px-10">
                    <div class="pb-2">
                        <?php
                           if(!$title == null && !$link == null ){
                             echo "<p class='text-blue-600'><b>".$_SERVER['HTTP_HOST']."/"."bio.php?ID=". $last_id."<br>"."</br></p>";
                             echo "<p class='text-blue-600'><b>"."You Have Only ".$left_limit." link left"."</b></p>";
                           }
                        ?>
                    </div>
                    <form class="space-y-6" action="generatelink.php" method="POST">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <div class="mt-1">
                                <input required id="title" name="title" type="title" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="link" class="block text-sm font-medium text-gray-700">Link</label>
                            <div class="mt-1">
                                <textarea required name="link" id="" cols="30" rows="4" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"></textarea>
                            </div>
                        </div>
                        <div>
                        <button type="submit" name="submit"  class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create Protected Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- form end  --> 



<?php 
    }
    else{
        echo "you are not authenticate";
        ?>
         <script>
         setTimeout(function(){
            
            window.location.href = "login.php";
         }, 5000);
      </script>
      <?php
    }

include 'partials/footer.php';?>