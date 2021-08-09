<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md" style="background-color: lightgrey;">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>THE BANK OF SPAIN</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center" style="background-color: lightgreen;">
                <img src="img\bank.jpg" style="margin-top: 9px;">
              </div>
            </div>

      
          <br>
          <br>
          <br>
          <h3 class="action" ><span style="font-family: 'monospace', serif">SELECT THE OPERATION TO PERFORM</h3></span>
          <br><br>
            <div class="column activity text-center">
                  
                  <div class="col-md act">
                    <img src="img\transacction1.jpg" style="width: 20%;">
                    
                    <br>
                    <br>
                    <br>
                    <a href="transfermoney.php"><button>View all customers to transfer money</button></a>
                  </div>
                    <br>
                    <br>

                  
                    <div class="col-md act">
                    <img src="img\hi.jpg" style="width: 20%;">
                    <br>
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                 </div>
                  
            </div>
           
      </div>
      <br>
      <footer class="text-center mt-5 py-2">
        <br>
        <p><b>Simple Banking System made by Avantika Dixit</b> <br> </p><br>
        <div id="contact" style="background-color: lightpink;">
  <h2>Contact Me</h2>
     <form action="mailto:avantikadixit25@gmail.com">
      <input type="text" name="yourname" placeholder="Your Name" />
        <input type="email" name="email" placeholder="Your Email" />
<button type="submit">SEND</button>
</form><br>
<h4>You can contact us at our social media handles</h4>
On Instagram: 
<h4>
<a href="https://www.instagram.com/accounts/login/">avanti_here</a><br></h4>
On Linked In:<h4>
<a href="https://www.linkedin.com/in/avantika-dixit-9666791b3"> Avantika Dixit</a></h4></div>
      </footer>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>