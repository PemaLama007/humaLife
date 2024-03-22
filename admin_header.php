<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   <div class="flex">

      <a href="admin_page.php" class="logo">Huma<span>Admin</span></a>

      <nav class="navbar">
         <a href="admin_page.php"><i class="fa-solid fa-rectangle-list"></i> Dashboard</a>
         <a href="admin_products.php"><i class="fa-solid fa-boxes-stacked"></i> Products</a>
         <a href="admin_orders.php"><i class="fa-solid fa-box"></i> Orders</a>
         <a href="admin_users.php"><i class="fa-solid fa-user"></i> Users</a>
         <a href="admin_contacts.php"><i class="fa-solid fa-envelope"></i> Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class=""><i class="fa-solid fa-right-from-bracket"></i></div>
      </div>

      <div class="account-box">
         <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
      </div>

   </div>

</header>