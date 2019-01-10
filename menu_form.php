<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form </h3>
		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
						</div>
						<div class="col-sm-2">
							<p class="help-block">Your help text!</p>
						</div>
					</div>
					<div class="form-group">
						<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
						<div class="col-sm-8">
							<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
						<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
							<option>Lorem ipsum dolor sit amet.</option>
							<option>Dolore, ab unde modi est!</option>
							<option>Illum, fuga minus sit eaque.</option>
							<option>Consequatur ducimus maiores voluptatum minima.</option>
						</select></div>
					</div>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>