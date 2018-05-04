<?php include_once('template.php');
error_reporting(~E_NOTICE); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- <img class="d-block w-100" src="https://images.unsplash.com/photo-1456428199391-a3b1cb5e93ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=eac7867573ceb666d69ad7bb77d75eaa&auto=format&fit=zoom&w=1280&h=300&q=80"> -->
            <!-- snow -->
            <img class="d-block w-100" src="https://images.unsplash.com/photo-1453306458620-5bbef13a5bca?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4a2ecb093c96c69ec20be4729219c081&auto=format&fit=crop&w=1280&h=350&q=80">
        </div>
    </div>
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
