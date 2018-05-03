<?php include_once('template.php');
error_reporting(~E_NOTICE); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!--<div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1444877466744-dc2f2af2b931?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5a1447e8db4c8125f711640db0190032&auto=format&fit=crop&w=1280&h=300&q=80">
            </div>-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1456428199391-a3b1cb5e93ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=eac7867573ceb666d69ad7bb77d75eaa&auto=format&fit=crop&w=1280&h=300&q=80">
            </div>
            <!--<div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=79f96121806d64f986dc5e5d9308afb1&auto=format&fit=crop&w=1280&h=300&q=80">
            </div>-->
        </div>
        <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>-->
        </a>
    </div>
    
        <div class="jumbotron">
            <div class="container text-center">
                <h3 class="font-weight-normal">Check devices status</h3>
                <p class="lead">Type your fix No. here</p>
                <div class="form-group form-contrpl-lg">
                    <div class="col-10 col-xs-12 col-md-7 mx-auto">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Ex. HDD0048">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <script>
    function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			}
    </script>