<?php
    include 'partials/header.php'; 
    include "partials/db.php";

    if (isset($_POST['submit'])){
        $title = mysqli_real_escape_string($db,$_POST['title']);
        $link = mysqli_real_escape_string($db,$_POST['link']);
        
        $query="insert into links(title, link) values('$title','$link')";
        mysqli_query($db,$query);
       
        $last_id = $db->insert_id;
        
    }
                        
?>

    <!-- form stated  -->
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 border border-indigo-600 shadow-lg sm:rounded-tl-3xl sm:rounded-br-3xl sm:px-10">
                    <div class="pb-2">
                        <?php
                           if(!$title == null && !$link == null ){
                             echo "<p class='text-blue-600'><b>"."bio.php?ID=". $last_id."</b></p>";
                           }
                        ?>
                    </div>
                    <form class="space-y-6" action="index.php" method="POST">
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
    include 'partials/footer.php';

   
?>