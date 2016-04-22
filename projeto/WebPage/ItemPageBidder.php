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
      <link href="css/OnlineAuctionItemPageBidder.css" rel="stylesheet">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- jQuery -->
      <script src="js/jquery.js"></script>
      <script>
         var i = 0;
         
         var counterBack = setInterval(function(){
           i+=2;
           if(i<=100){
               $('.progress-bar').css('width', i+'%');
               $('#ProgressStatus').text(i +"%");
           } else {
           clearTimeout(counterBack);
           }
         }, 1000);
         
         function startTimer(duration, display) {
         var timer = duration, minutes, seconds;
         setInterval(function () {
        if( i<=100){
            if(i >= 90 && i <=94){
                $("#AlertStyle").removeClass("panel panel-success").addClass("panel panel-warning");
				$(".panel-body").css('background-color','#fdfaee');}
         minutes = parseInt(timer / 60, 10)
         seconds = parseInt(timer % 60, 10);
         
         minutes = minutes < 10 ? "0" + minutes : minutes;
         seconds = seconds < 10 ? "0" + seconds : seconds;
         
         display.text(minutes + ":" + seconds);
         
         if (--timer < 0) {
           timer = duration;
         }
     }else if(i>100 && i<=104){
        i = 105; //codigo todo trolha mas depois vai ser mudado! ;)
        $("#AlertStyle").removeClass("panel panel-warning").addClass("panel panel-danger");
        $(".panel-heading").text("Auction closed!");
		$(".panel-body").css('background-color','#f7ebeb');
		$("#bidAction").css('display','none');
     }
         }, 1000);
         }
         
         jQuery(function ($) {
         var fiveMinutes = 49,
         display = $('#time');
         startTimer(fiveMinutes, display);
         });
         
      </script>
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
      <!-- Page Content -->
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="text-center">
                  <p class="lead">André Fagotinho Maia</p>
               </div>
               <div class="thumbnail">
                  <img src="images/users/maia.jpg" style="width:500px;height:360px" alt="iphone6s">
               </div>
               <div class="list-group">
                  <a href="#" class="list-group-item">
                     <p class="text-center">User rating:</p>
                     <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                           <span class="glyphicon glyphicon-star"></span>
                           <span class="glyphicon glyphicon-star"></span>
                           <span class="glyphicon glyphicon-star"></span>
                           <span class="glyphicon glyphicon-star"></span>
                           <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                     </div>
                  </a>
                  <a href="#" class="list-group-item">
                     <p class="glyphicon glyphicon-user"> André Costa Maia</p>
                  </a>
                  <a href="#" class="list-group-item">
                     <p class="fa fa-venus-mars"> Male</p>
                  </a>
                  <a href="#" class="list-group-item">
                     <p class="glyphicon glyphicon-envelope"> andrefagotinhomaia@gmail.com</p>
                  </a>
                  <a href="#" class="list-group-item">
                     <p class="glyphicon glyphicon-earphone"> 919856475</p>
                  </a>
                  <a href="#" class="list-group-item">
                     <p>Total sales: 10</p>
                  </a>
               </div>
               <!--<div class="list-group">
                  <a href="#" class="list-group-item active">Category 1</a>                   <a
                  href="#" class="list-group-item">Category 2</a>                   <a href="#"
                  class="list-group-item">Category 3</a>                   </div>-->
            </div>
            <div class="col-md-9">
               <div
                  class="thumbnail">
                  <h4 class="text-center"
                     id="ItemName">iPhone 6s</h4>
               </div>
               <div
                  class="thumbnail">
                  <div id="myCarousel" class="carousel
                     slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                        <li data-
                           target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner" role="listbox">
                        <div
                           class="item active">                            <img
                           src="images/ProductsImages/iphone6s-1.jpg" alt="iphone6s"></div>
                        <div class="item">
                           <img src="images/ProductsImages/iphone6s-2.jpg" alt="iphone6s">
                        </div>
                        <div class="item">
                           <img src="images/ProductsImages/iphone6s-3.jpg" alt="iphone6s">
                        </div>
                        <div class="item">
                           <img src="images/ProductsImages/iphone6s-4.jpg" alt="iphone6s">
                        </div>
                     </div>
                     <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                        </a>                   
                  </div>
                  <div class="caption-full">
                     <!-- <h4 class="pull-
                        right">92.75€</h4> --> 
                    <strong>Item description:</strong><br>                  
                     <p>The iPhone 6S and iPhone 6S Plus (stylized as iPhone 6s and iPhone 6s Plus) are smartphones designed by Apple Inc. The devices are part of the iPhone series and were announced on September 9, 2015, at the Bill Graham Civic Auditorium in San Francisco by Apple Inc. CEO Tim Cook. The iPhone 6S and iPhone 6S Plus jointly serve as successors to the iPhone 6 and iPhone 6 Plus of 2014. The iPhone 6S and iPhone 6S Plus are the performance versions over their respective predecessors, featuring improved hardware specifications, including 3D Touch, a force-sensitive touchscreen; upgraded rear-facing and front-facing cameras; a faster processor; a new chassis made of a stronger 7000 series aluminium alloy;second-generation fingerprint recognition Touch ID; improved LTE and Wi-Fi connectivity; and a new rose gold finish in addition to the space gray, silver, and gold finishes found on the previous models, while maintaining an identical design. The devices ship with iOS 9 preinstalled. As of September 28, 2015, 13 million iPhone 6S and 6S Plus models have been sold, setting a new first-weekend sales record, up from the 10 million iPhone 6 and 6 Plus units sold the previous year.                      
                     </p>
                  </div> 
            </div>

			<div class="panel-group">
					<div class="panel panel-success " id="AlertStyle">
					<div class="panel-heading">
						<div class="inline-form">
							<strong>Alert! </strong>Auction closes in <span id="time">00:50</span> minutes!
						</div>
					</div>
					<div class="panel-body">
					<div class="form-group">
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"style="width:0%">
								<p id="ProgressStatus">0</p><!-- Auction closes in <span id="time">00:30</span> minutes!-->
							</div>
						</div>
                            <!-- Código para fazer as bids-->
                  <div class="text-center" id="bidAction">
                    <form class="form-inline">
                    <div class="pull-left">
                    </div>
                        <div class="form-group">
                            <label class="sr-only" for="AmountInput">Amount</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon" id="sizing-addon1">Current bid: 98.75€</span>
                                <input type="text" class="form-control" id="AmountInput" aria-describedby="sizing-addon1" placeholder="Amount e.g 2.56">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Make Bid!</button>
                    </form>
                 </div>

							
							
							
                        </div>
					</div>
				</div>
				  
				  
				 
               </div>
         </div>
      </div>
      <!-- /.container -->
      <div class="container">
         <hr>
         <!-- Footer -->
         <footer>
            <div class="row">
               <div class="col-lg-12">
                  <p>Copyright &copy; Your Website 2014</p>
               </div>
            </div>
         </footer>
      </div>
      <!-- /.container -->
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