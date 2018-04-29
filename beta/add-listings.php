<!DOCTYPE html>

<?php
  require_once('php/header_listings.php');
  //require_once('db/unirent_functions.php');
  include('db/session.php');

  // print UniRent header
  do_unirent_header('Novo item | UniRent');

  // connect to UniRent DB
  //$conn = db_connect();
?>

    <!-- Dashboard header -->
    <section class="navbar-dashboard-area">
      <nav class="navbar navbar-default lightHeader navbar-dashboard" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-dash">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-dash">
            <ul class="nav navbar-nav mr0">
              <li class="active">
                <a href="listings.php"><i aria-hidden="true"></i> <?php echo  "Bem vindo: " . $login_session; ?></a>
              </li>
              <li><a href="#"><i class="fa fa-tachometer icon-dash" aria-hidden="true"></i> Dashboard</a></li>
              <li class="dropdown singleDrop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul icon-dash" aria-hidden="true"></i> Aluguéis <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="#">Meus aluguéis</a></li>
                  <li><a href="#">Adicionar um aluguel</a></li>
                  <li><a href="#">Editar meus aluguéis</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="#" class="scrolling"><i class="fa fa-star-o" aria-hidden="true"></i> Alugados</a>
              </li>
            </ul>
            <div class="row adjustRow">
              <div class="pull-right col-xs-12 col-sm-4">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="icon-listy icon-search-2"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </section>


<!-- Dashboard breadcrumb section -->
<div class="section dashboard-breadcrumb-section bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Inserir um novo item (bem)</h2>
        <ol class="breadcrumb">
          <li><a href="listings.php">Home</a></li>
          <li class="active">Minha conta</li>
        </ol>
      </div>
    </div>
  </div>
</div>


<!-- DASHBOARD ORDERS SECTION -->
<section class="clearfix bg-dark listingSection">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form action="" method="" class="listing__form">
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>About</h3>
							<p>Não nos responsabilizamos por quaisquer danos causados pelo uso deste website ou pela publicação de itens (bens) de aqui. Por favor, use o nosso site a seu próprio critério e exercer bom senso, bem como o bom senso ao anunciar negócios aqui.</p>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="listingTitle">Listing Title</label>
									<input type="text" class="form-control" id="listingTitle" placeholder="Listing Title">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="listingCategory">Category</label>
									<div class="contactSelect">
										<select name="guiest_id9" id="guiest_id9" class="select-drop">
											<option value="0">All Category</option>
											<option value="1">Restaurant</option>
											<option value="2">Bar</option>
											<option value="3">Cafe</option>
										</select>
									</div>
								</div>
								<div class="form-group col-xs-12">
									<label for="discribeTheListing">Discribe the listing</label>
									<textarea class="form-control" rows="3" placeholder="Discribe the listing"></textarea>
								</div>
								<div class="form-group col-xs-12">
									<label for="addTags">Tags</label>
									<input type="text" class="form-control" id="addTags" placeholder="Add Tags">
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Contact</h3>
							<p>We are not responsible for any damages caused by the use of this website, or by posting business listings here. Please use our site at your own discretion and exercise good judgement as well as common sense when advertising business here.</p>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="listingRegion">Listing Region</label>
									<div class="contactSelect">
										<select name="guiest_id19" id="guiest_id19" class="select-drop">
											<option value="0">All Region</option>
											<option value="1">London</option>
											<option value="2">Canada</option>
											<option value="3">New York</option>
										</select>
									</div>
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="listingAddress">Listing Address</label>
									<input type="text" class="form-control" id="listingAddress" placeholder="Listing Address">
								</div>

								<div class="form-group col-sm-6 col-sm-push-6 col-xs-12">
									<div class="mapArea">
										<div class="clearfix">
											<div id="map-canvas"></div>
										</div>
										<span class="help-block">Enter the exact address or drag the map marker to position</span>
									</div>
								</div>

								<div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
									<label for="listingPhone">Listing Phone</label>
									<input type="text" class="form-control" id="listingPhone" placeholder="546 - 545 - 2546">
								</div>

								<div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
									<label for="listingEmail">Listing Email</label>
									<input type="text" class="form-control" id="listingEmail" placeholder="hello@example.com">
								</div>

								<div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
									<label for="listingWebsite">Listing Website</label>
									<input type="text" class="form-control" id="listingWebsite" placeholder="http://">
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Gallery</h3>
							<p>We are not responsible for any damages caused by the use of this website, or by posting business listings here. Please use our site at your own discretion and exercise good judgement as well as common sense when advertising business here.</p>
							<div class="row">
								<div class="form-group col-xs-12">
									<div class="imageUploader text-center">
										<div class="file-upload">
											<div class="upload-area">
												<input type="file" name="img[]" class="file">
												<button class="browse" type="button">Click or Drag images here</button>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group col-xs-12">
									<label for="videoUrl">Video URL</label>
									<input type="text" class="form-control" id="videoUrl" placeholder="http://">
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Social</h3>
							<p>We are not responsible for any damages caused by the use of this website, or by posting business listings here. Please use our site at your own discretion and exercise good judgement as well as common sense when advertising business here.</p>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="linkedUrl">Linked in URL</label>
									<input type="text" class="form-control" id="linkedUrl" placeholder="http://linkedin.com/listty">
								</div>

								<div class="form-group col-sm-6 col-xs-12">
									<label for="facebookUrl">Facebook URL</label>
									<input type="text" class="form-control" id="facebookUrl" placeholder="http://facebook.com/listty">
								</div>

								<div class="form-group col-sm-6 col-xs-12">
									<label for="twitterUrl">Twitter URL</label>
									<input type="text" class="form-control" id="twitterUrl" placeholder="http://twitter.com/listty">
								</div>

								<div class="form-group col-sm-6 col-xs-12">
									<label for="youtubeUrl">You Tube URL</label>
									<input type="text" class="form-control" id="youtubeUrl" placeholder="http://youtube.com/listty">
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Opening Hours</h3>
							<p>Example: 10.00am - 5.00pm or 10.00 - 17.00</p>
							<div class="row">
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="mondayTime">Monday</label>
									<input type="text" class="form-control" id="mondayTime" placeholder="10.00am - 5.00pm">
								</div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="tuesdayTime">Tuesday</label>
									<input type="text" class="form-control" id="tuesdayTime" placeholder="10.00am - 5.00pm">
								</div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="wednesdayTime">Wednesday</label>
									<input type="text" class="form-control" id="wednesdayTime" placeholder="10.00am - 5.00pm">
								</div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="thrusdayTime">Thrusday</label>
									<input type="text" class="form-control" id="thrusdayTime" placeholder="10.00am - 5.00pm">
								</div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="fridayTime">Friday</label>
									<input type="text" class="form-control" id="fridayTime" placeholder="10.00am - 5.00pm">
								</div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="saturdayTime">Saturday</label>
									<input type="text" class="form-control" id="saturdayTime" placeholder="10.00am - 5.00pm">
								</div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="sundayTime">Sunday</label>
									<input type="text" class="form-control" id="sundayTime" placeholder="Closed">
								</div>
							</div>
						</div>
					</div>
					<div class="form-footer text-center">
						<button type="submit" class="btn-submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?php
  // disconnect to UniRent DB
  //$conn->close();

  require_once('php/footer_listings.php');

  // print UniRent header
  do_unirent_footer();
?>
