<nav class="navbar navbar-blue navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>			
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="nav-center">
			<a href="<?php echo $mainurl; ?>"><img src="assets/img/logo-white.png"/></a>
		</div>       
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php
					foreach($navbar as $x => $x_value) {

						if (!empty($x_value["active"])) {
							$class = $x_value["active"];
						} else {
							$class = "";
						}

						if (!empty($x_value["url"])) {
							$url = $x_value["url"];
						} else {
							$url = $x;
						}

						if ($x == $activeTab) {
							$class = "current";
						}

						if (!empty($x_value["submenu"])) {
							echo "<li class='" . $class . "'>";
								echo "<a class='animate'>" . $x . " <i class='fa fa-caret-down'></i></a>";
								foreach($x_value["submenu"][0] as $y => $y_value) {
									echo "<li><a href='" . $url . "'>" . $x_value["submenu"][0][1] . "</a></li>";
								}
							echo "</li>";
							
						} else {
							echo "<li class='" . $class . "'><a class='animate' href='$url'>";
							echo $x;
							echo "</a></li>";
						}
					}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
					foreach($navbar2 as $x => $x_value) {

						if (!empty($x_value["active"])) {
							$class = $x_value["active"];
						} else {
							$class = "";
						}

						if (!empty($x_value["url"])) {
							$url = $x_value["url"];
						} else {
							$url = $x;
						}

						if ($x == $activeTab) {
							$class = "current";
						}

						if (!empty($x_value["submenu"])) {
							echo "<li class='" . $class . "'>";
								echo "<a class='animate'>" . $x . " <i class='fa fa-caret-down'></i></a>";
								foreach($x_value["submenu"][0] as $y => $y_value) {
									echo "<li><a href='" . $url . "'>" . $x_value["submenu"][0][1] . "</a></li>";
								}
							echo "</li>";
							
						} else {
							echo "<li class='" . $class . "'><a class='animate' href='$url'>";
							echo $x;
							echo "</a></li>";
						}
					}
				?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<div class="wrapper">
