<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Online Auction- Where business happens!</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/OnlineAuctionUserPage.css" rel="stylesheet">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
      <link rel="icon" href="images/bidme.png"/>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
      </style>
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li>
                     <img src="images/bidme.png" alt="BidMeLogo" style="width:120px;height:50px;">
                  </li>
                  <li>
                     <form class="navbar-form navbar-left" role="search" id="cenas">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="form-group">
                           <select class="selectpicker" data-live-search="true" >
                              <option selected="selected">All Categories</option>
                              <option>Antiques</option>
                              <option>Art</option>
                              <option>Baby</option>
                              <option>Books</option>
                              <option>Business &amp; Industrial</option>
                              <option>Cameras &amp; Photo</option>
                              <option>Cell Phones &amp; Accessories</option>
                              <option>Clothing, Shoes &amp; Accessories</option>
                              <option>Coins &amp; Paper Money</option>
                              <option>Collectibles</option>
                              <option>Computers/Tablets &amp; Networking</option>
                              <option>Consumer Electronics</option>
                              <option>Crafts</option>
                              <option>Dolls &amp; Bears</option>
                              <option>DVDs &amp; Movies</option>
                              <option>eBay Motors</option>
                              <option>Entertainment Memorabilia</option>
                              <option>Gift Cards &amp; Coupons</option>
                              <option>Health &amp; Beauty</option>
                              <option>Home &amp; Garden</option>
                              <option>Jewelry &amp; Watches</option>
                              <option>Music</option>
                              <option>Musical Instruments &amp; Gear</option>
                              <option>Pet Supplies</option>
                              <option>Pottery &amp; Glass</option>
                              <option>Real Estate</option>
                              <option>Specialty Services</option>
                              <option>Sporting Goods</option>
                              <option>Sports Mem, Cards &amp; Fan Shop</option>
                              <option>Stamps</option>
                              <option>Tickets &amp; Experiences</option>
                              <option>Toys &amp; Hobbies</option>
                              <option>Travel</option>
                              <option>Video Games &amp; Consoles</option>
                              <option>Everything Else</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-default">Make Search!</button>
                     </form>
                  </li>
                  <li>
                     <p class="navbar-text">Already have an account?</p>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <b>Login</b> 
                     <span class="caret"></span>
                     </a>
                     <ul id="login-dp" class="dropdown-menu">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 Login via
                                 <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                 </div>
                                 or
                                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                       <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox"> keep me logged-in
                                       </label>
                                    </div>
                                 </form>
                              </div>
                              <div class="bottom text-center">
                                 New here ? <a href="#"><b>Join Us</b></a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <!-- Main -->
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <hr>
               <ul class="nav nav-stacked">
               <a href="#"><strong><i class="glyphicon glyphicon-list" id="opt" ></i> Options </strong></a>
               <ul class="nav nav-stacked collapse in" id="userMenu">
                  <!-- <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li> -->
                  <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
                  <!-- <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li> -->
                  <li><a href="#"><i class="glyphicon glyphicon-user"></i> Staff List</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
               </ul>
               </ul>
            </div>
            <!-- /col-3 -->
            <div class="col-sm-9">
               <div class="row">
                  <!-- center left-->
                  <div class="col-md-6">
                     <hr>
                     <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-primary col-sm-3">
                        <i class="glyphicon glyphicon-plus"></i>
                        <br> New auction
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                        <i class="glyphicon glyphicon-cog"></i>
                        <br> Edit profile
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                        <i class="glyphicon glyphicon-question-sign"></i>
                        <br> Help
                        </a>
                     </div>
                     <!-- <div class="well">Inbox Messages <span class="badge pull-right">3</span></div> -->
                     <hr>
                     <div class="panel-heading">
                        <div class="panel-title">
                           <h4> <b> Featured auctions </b> </h4>
                        </div>
                     </div>
                     <div class="panel-body">
                        <div class="col-xs-4 text-center"><img src="http://thumbs.buscape.com.br/celular-e-smartphone/smartphone-apple-iphone-5s-16gb-desbloqueado_200x200-PU85fdd_1.jpg" class="img-circle img-responsive" alt="Error">
                        <label> iphone </label>
                        </div>
                        
                        <div class="col-xs-4 text-center"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSQvtC5fy47I3QvTGmTCf_Ihhpi2mAYw6ZwOfZylFrfc4nu-vxr" class="img-circle img-responsive" alt="Error">

                        <label> ps3 slim </label> </div>
                        <div class="col-xs-4 text-center"><img src="http://i57.tinypic.com/35i6n3o.png" class="img-circle img-responsive" alt="Error"> 
                        <label> pineapple </label> </div>
                     </div>
                     <!--/tabs-->
                  </div>
                  <!--/col-->
                  <div class="col-md-6">
                     <div class="row">
                        <div class="panel-heading">
                           <h3>My information</h3>
                        </div>
                        <div class="col-sm-4">
                           <img src="images/bidme.png" alt="BidMeLogo" style="width:120px;height:120px;">
                        </div>
                        <div class="col-sm-4">
                           <h4> <b> Name </b></h4>
                           <p> user_name <p>
                           <h4> <b> Country </b> </h4>
                           <p> country </p>
                           <h4> <b> Signing year </b> </h4>
                           <p> 2010</p>
                        </div>
                     </div>
                     <hr>
                     <div class="table-responsive">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Auction</th>
                                 <th>Participants</th>
                                 <th>State</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td> <b> 1. iphone </b></td>
                                 <td>70</td>
                                 <td>sold</td>
                              </tr>
                              <tr>
                                 <td> <b> 2. ps3 slim </b> </td>
                                 <td>56</td>
                                 <td>sold</td>
                              </tr>
                              <tr>
                                 <td> <b> 3. pineapple </b> </td>
                                 <td>4</td>
                                 <td>not sold</td>
                              </tr>
                              <tr>
                                 <td>..</td>
                                 <td>..</td>
                                 <td>..</td>
                              </tr>
                              <tr>
                                 <td>..</td>
                                 <td>..</td>
                                 <td>..</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!--/col-span-6-->
               </div>
               <!--/row-->
            </div>
            <!--/col-span-9-->
         </div>
      </div>
      
      <div class="container">
         <hr>
         <!-- Footer -->
         <footer>
            <div class="row">
               <div class="col-lg-12">
                  <p>Copyright &copy; BidMe-OnlineAuction Limited &reg; </p>
               </div>
            </div>
         </footer>
      </div>
      <!-- /Main -->
      <!-- /.modal -->
      <!-- script references -->
      <script src="js/scripts.js"></script> 
      <!-- jQuery -->
      <script src="js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
      <!-- (Optional) Latest compiled and minified JavaScript translation files -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/i18n/defaults-*.min.js"></script>
   </body>
</html>