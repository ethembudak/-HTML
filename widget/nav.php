<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header col-sm-2 col-md-2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" title="Mopaş"></a><!-- Logo -->
    </div>

		<!-- Search -->
		<?php include 'widget/search.php';?>

		<!-- Nav Menu -->
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
					<a href="#" title="Üye Ol" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Üye Ol</a>
				</li>
        <li>
					<a href="#" title="Giriş Yap"><span class="glyphicon glyphicon-log-in"></span> Giriş Yap</a>
				</li>
        <li>
					<a href="#" title="Sepetim" class="cart-link"><span class="glyphicon glyphicon-shopping-cart"></span> Sepetim</a>
				</li>
      </ul>
    </div><!-- end -->

  </div>
</nav>

<!-- Modal Üye Ol -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal Content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>