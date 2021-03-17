<?php 
  ob_start();
  session_start();
  include 'libs/funcs.php';
  include 'class/database.php';
?>



<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

     
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php 
              $page= $_GET['view']??'tongquan';
              $path = 'pages/'.$page.'.php';
              if(file_exists($path))
                include $path;
              else{
                include 'pages/404.php';
              }
            ?>       
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

  <?php include 'widgets/footer.php' ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>
 
 <style>
  
 #myBtn {
     display: none;
     position: fixed;
     bottom: 10px;
     right: 43px;
     z-index: 99;
     font-size: 18px;
     border: none;
     outline: none;
     background-color: red;
     color: white;
     cursor: pointer;
     padding: 15px;
     border-radius: 4px;
     transition: width 2s, height 2s, background-color 2s, transform 2s;
 }
  
 #myBtn:hover {
   background-color: #555;
   transform: rotate(180deg);
   
 }
 </style>
  
  
 <script>
 // When the user scrolls down 20px from the top of the document, show the button
 window.onscroll = function() {scrollFunction()};
  
 function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         document.getElementById("myBtn").style.display = "block";
     } else {
         document.getElementById("myBtn").style.display = "none";
     }
 }
  
 // When the user clicks on the button, scroll to the top of the document
 function topFunction() {
     document.body.scrollTop = 0;
     document.documentElement.scrollTop = 0;
 }
 </script>
  <!-- modal -->


  <?php include 'widgets/script.php' ?>

</body>

</html>
<?php ob_end_flush(); ?>