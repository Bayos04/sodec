<?php
$title = "Accueil";
ob_start();
?>
	<div class="container-fluid">
		<?php
		require "src/View/includes/breadcrumb.php";
		?>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">James Smith</h5>
						<h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i class="ti ti-map-pin me-1 fs-5"></i>Albania</h6>
						<p class="card-text pt-2">
							Some quick example text to build on the card title and make up the bulk of the card's content.
						</p>
						<a href="#" class="card-link">Follow</a>
						<a href="#" class="card-link">View profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Michael Smith</h5>
						<h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i class="ti ti-map-pin me-1 fs-5"></i>Belize</h6>
						<p class="card-text pt-2">
							Some quick example text to build on the card title and make up the bulk of the card's content.
						</p>
						<a href="#" class="card-link">Follow</a>
						<a href="#" class="card-link">View profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Maria Hernandez</h5>
						<h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i class="ti ti-map-pin me-1 fs-5"></i>Colombia</h6>
						<p class="card-text pt-2">
							Some quick example text to build on the card title and make up the bulk of the card's content.
						</p>
						<a href="#" class="card-link">Follow</a>
						<a href="#" class="card-link">View profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">David Margaret</h5>
						<h6 class="card-subtitle mb-2 text-muted d-flex align-items-center"><i class="ti ti-map-pin me-1 fs-5"></i>Egypt</h6>
						<p class="card-text pt-2">
							Some quick example text to build on the card title and make up the bulk of the card's content.
						</p>
						<a href="#" class="card-link">Follow</a>
						<a href="#" class="card-link">View profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
$page = ob_get_clean();
include "src/View/sample.php";