<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS--Payment Details</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.min.css">
    <script src="bootstrap/fontawesome/js/fontawesome.min.js"></script>
    
    
</head>
<body>
<div class="wrapper">
       <div class="sidebar">
           <h2>Admin</h2>
           <p>Sweet Coffee</p>
           <ul>
           <li><a href="#"><i class="fas fa-home"></i> dashboard</a></li>
           <li><a href="register.php"><i class="fas fa-user"></i> register a users</a></li>
           <li><a href="payment.php"><i class="fas fa-address-card"></i> payments details</a></li>
           <li><a href="#"><i class="fas fa-blog"></i> blog comments</a></li>
           <li><a href="#"><i class="fas fa-inbox"></i>contact message</a></li>

           </ul>
        </div>

   <div class="main_content">
       <div class="header">
           <h3>Welcome </h3>
           <p>mubarak bala  id no:b23c4</p>
           <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>    
       </div>
       <div class="info">
               <div>
                   <h2>Sweet Coffee</h2>
                   <p>A cup of coffee with us will make your day.</p>
               </div>
               <div class="pay">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="card-header" style="text-align: center">Payment Details</h3>
                      <form action="payment.php" method="">
                        <div class="form-group">
                        <input type="txt" name="name_card" placeholder="Name on the card">
                        </div>
                        <div class="form-group">
                        <input type="txt" name="cardno" placeholder="Number on the card">
                        </div>
                        <div class="form-group">
                        <input type="txt" name="cvv" placeholder="Enter card Cvv">
                      </div>
                        <div class="form-group">
                        <input type="submit" name="submitbtn" value="save" class="btn btn-success">
                        </div>
                      </form> 
                      </div>

                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-header">
                            <h3>Post news</h3>
                            <div>
                                <form>
                                  <div class="card-body">
                                  <div class="form-group">
                      <input type="txt" name="title" placeholder="story title">
                             </div>
                             <div class="form-group">
                               <input type="text" name="news" placeholder="Write news updates">
                             </div>
                             <input type="submit" name="update" value="post news" class="btn btn-success">
                        </div>
                                </form>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                 
               </div>
             
        </div>     
   </div> 
 </div>


<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>