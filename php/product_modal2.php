
<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img id="item_image" src="" class="img-responsive"  >
                    </div>
					
					    <div class="modal-body col-md-6">
					
					    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						
						<div class="product_content">
						            
						
						<h3 class="modal-title" id="item_name" style="margin-bottom:10px;"></h3>
				

                        <div class="rating" style="margin-bottom:8px;">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
						
                        	<p class="text" id="description" style="text-align:justify;
	text-justify:inter-word;"></p>
                       
					    <h3 class="cost" id="item_price" style="margin-bottom:15px;"><span class="glyphicon glyphicon-usd"></span></h3>
					   
					   
					   
					   <form method = "post" action="order.php">
                        <div class="row">
                         
       
                            <!-- end col -->
                            <div class="col-md-4 col-sm-12">
                                <select style ="width:80px" class="form-control" name="select" id="select" required="required">
                                    <option value="" selected="" disabled="disabled">QTY</option>
                                    <option value="<?php echo 1 ?>">1</option>
                                    <option value="<?php echo 2 ?>">2</option>
                                    <option value="<?php echo 3 ?>">3</option>
                                </select>
                            </div>
                            <!-- end col -->
                        </div>

<br />

                        <div class="space-ten"></div>
                        <div class="btn-ground">
						
                       	  	
		<button type="submit" class="identifyingClass2 btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" id="button" disabled="disabled"></span> Buy Now</button>
         
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>