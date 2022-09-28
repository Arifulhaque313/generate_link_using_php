<?php
    session_start();
    $user_id = $_SESSION['id'];

    if($user_id) {
    include 'partials/header.php'; 
    include "partials/db.php";

    $id = $_GET["ID"];
    $search_link = "select * from links where id = '$id'";

    $result = mysqli_query($db,$search_link);
    $link_count = mysqli_num_rows($result);

    if($link_count){
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $link = $row['link'];
    }
?>
    <div class="text-center my-20">
        <p class="text-2xl text-black font-bold">Please wait</p>
        <p class="text-base text-black font-bold">You will redirect in 1 sec</p>
    </div>
     <script>
         setTimeout(function(){
            
            window.location.href = "<?php echo $link;?>";
         }, 1000);
      </script>
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