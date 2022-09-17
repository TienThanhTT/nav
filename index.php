<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS.css">
    <title>Document</title>
</head>
<body>


    

    <div class="container">
        <?php
         include 'connect.php';
         include 'xuly.php';
         
         ?>

         <img src="./img/header2.JPG" alt="" width="100%" height="350px">
      
            <ul class="header me-auto mb-2 mb-lg-0 ">
                <?php foreach ($arr as $key => $item){
                if ($item['parent'] == 0){
                    ?>
                    <li>
                    <?php
                    
                    echo '<a class="nav-link nav-item d-flex justify-content-center  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"" href="">' .$item['name']. '</a>' ;
                    ?>

                    <?php
                    unset($arr[$key]);
                    $parent=$item['id'];
                    ?>
                    <ul class="header_child dropdown-menu">
                        <?php
                            foreach ($arr as $key1 => $item1){
                                
                            if( $item1['parent']==$item['id']){       
                        ?>
                        <li>
                            <?php
                            $link = './trangphu/' . $item1['link'];
                            echo '<a href="'.$link.'" class = "nav-link dropdown-item d-flex justify-content-start ">'.$item1['name'].'</a>';
                            ?>
                        </li>      
                        <?php }?> 
                    <?php }?> 
                    </ul>
                    </li>
                <?php }?>  
            <?php }?>  
            <button type="button" class="btn btn-link px-3 me-2">
            
            </button>
            </ul>

            <?php
    session_start();
    
  if($_SESSION['username']){
    echo "Xin chào <b>" . $_SESSION['username'];
    echo '<a href="">Đăng xuất</a>';
    unset($_SESSION['username']);
  }
  else{
    echo 'Bạn chưa đăng nhập </br>';
    echo '<a href="./dangnhap/login.php">Login</a>';
  }
  
    
?>

            
      
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>