<?php

	require_once('header.php');
?>

	<div id="featured-wrapper">
		<div class="">
			<form id="packers-details" action="http://geniusremovals.com.au/quotes/" method="post">
				<hr>
				<div class="row user-details">
					<center>
						<h2>Free No-obligation Quote!</h2>
					</center>
					<div class="col-md-4">
						<label for="name" class="inp">
							<input type="text" id="name" name="name" placeholder=" " required="" class="valid" aria-invalid="false">
							<span class="label">Name</span>
							<span class="border"></span>
						</label>
						<!-- <span id="name-error" class="help-block">
                            <label id="name-error" class="error" for="name">Name is required</label>
                        </span> -->
					</div>
					<div class="col-md-4">
						<label for="email" class="inp">
							<input type="text" id="email" name="email" placeholder=" " required="" class="valid" aria-invalid="false">
							<span class="label">E-mail</span>
							<span class="border"></span>
						</label>
					</div>
					<div class="col-md-4">
						<label for="datepicker" class="inp">
							<input type="date" id="datepicker" name="pickup" placeholder=" " required="" class="valid" aria-invalid="false">
							<span class="label">Moving Date</span>
							<span class="border"></span>
						</label>
					</div>
					<div class="col-md-4">
						<label for="phone" class="inp">
							<input type="number" id="phone" name="phone" placeholder=" " required="" class="valid" aria-invalid="false">
							<span class="label">Home Phone</span>
							<span class="border"></span>
						</label>
					</div>
					<div class="col-md-4">
						<label for="mobile" class="inp">
							<input type="number" id="mobile" name="mobile" placeholder=" " class="valid" aria-invalid="false">
							<span class="label">Mobile Phone</span>
							<span class="border"></span>
						</label>
					</div>
					<div class="col-md-4">
						<label for="work_phone" class="inp">
							<input type="number" id="work_phone" name="work_phone" placeholder=" " class="valid" aria-invalid="false">
							<span class="label">Work Phone</span>
							<span class="border"></span>
						</label>
					</div>
					<div class="col-md-4">
						<label for="day_to_call" class="inp">
							<input type="text" id="day_to_call" name="day_to_call" placeholder=" " class="valid" aria-invalid="false">
							<span class="label">Day/Time To Call</span>
							<span class="border"></span>
						</label>
					</div>
					<div class="col-md-4">
						<select id="mySelect" data-show-content="true" class="form-control" name="preferred_contact" required="" aria-invalid="false">
							<option disabled="" selected="" value="">Preferred method of contact</option>
							<option data-content="E-mail">E-mail</option>
							<option data-content="Work Phone">Work Phone</option>
							<option data-content="Home Phone">Home Phone</option>
							<option data-content="Mobile Phone">Mobile Phone</option>
						</select>
					</div>
				</div>
				<hr>
				<div class="row top-buffer">
					<div class="col-md-6">
						<div class="form-group">
							<label for="pickup_address">Pick Up Address</label>
							<textarea class="form-control" id="pickup_address" name="pickup_address" rows="5" required="" aria-invalid="false"></textarea>
						</div>
						<div class="form-group">
							<label for="pickup_access">Pick-Up Accessability:</label>
							<select class="form-control" name="pickup_access" id="pickup_access" required="" aria-invalid="false">
								<option name="ground level">Ground level</option>
								<option name="stairs">Stairs</option>
								<option name="lift">Lift</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="delivery_address">Delivery Address</label>
							<textarea class="form-control" id="delivery_address" name="delivery_address" rows="5" required="" aria-invalid="false"></textarea>
						</div>
						<div class="form-group">
							<label for="delivery_access">Delivery Accessability:</label>
							<select class="form-control" name="delivery_access" id="delivery_access" required="" aria-invalid="false">
								<option name="ground level">Ground level</option>
								<option name="stairs">Stairs</option>
								<option name="lift">Lift</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="heard_by">How did you hear about us?</label>
							<select class="form-control" name="heard_by" id="heard_by">
								<option name="yellow pages">Yellow Pages</option>
								<option name="white pages">White Pages</option>
								<option name="internet">Internet</option>
								<option name="returning customer">Returning customer</option>
								<option name="referral">Referral</option>
								<option name="other">Other</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<center>
							<p style="text-decoration: underline;">
								<strong>TYPE QUANTITIES IN BOXES.</strong>
							</p>
						</center>
					</div>
				</div>

				<div class="row bedroom">
					<p style="margin-left: 15px;">
						<strong>Bedrooms...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="queen_ens">Queen Ensemble</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="queen_ens" name="queen_ens" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="double_ens">Double Ensemble</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="double_ens" name="double_ens" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="single_ens">Single Ensemble</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="single_ens" name="single_ens" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="queen_slats">Queen Slats Bed</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="queen_slats" name="queen_slats" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="double_slats">Double Slats Bed</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="double_slats" name="double_slats" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="single_slats">Single Slats Bed</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="single_slats" name="single_slats" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="water_beds">Water Beds</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="water_beds" name="water_beds" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedside_tables">Bedside Tables</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedside_tables" name="bedside_tables" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bunks">Bunks</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bunks" name="bunks" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bed_heads">Bed Heads</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bed_heads" name="bed_heads" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bed_ends">Bed Ends</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bed_ends" name="bed_ends" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dressing_tables">Dressing Tables</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dressing_tables" name="dressing_tables" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dutches_mirrors">Dutches/Mmirrors</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dutches_mirrors" name="dutches_mirrors" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wardrobes">Wardrobes</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wardrobes" name="wardrobes" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="chairs">Chairs</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="chairs" name="chairs" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="blanket_boxes">Blanket Boxes</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="blanket_boxes" name="blanket_boxes" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="chests">Chests</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="chests" name="chests" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="chest_drawers">Chest of Drawers</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="chest_drawers" name="chest_drawers" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="robe_insert">Robe Insert</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="robe_insert" name="robe_insert" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lowboy">Lowboy</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lowboy" name="lowboy" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="tv_small">TV , Small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="tv_small" name="tv_small" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="tv_lge">TV , Large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="tv_lge" name="tv_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="tv_med">TV , Medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="tv_med" name="tv_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="cot">Cot</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="cot" name="cot" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="fan">Fan</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="fan" name="fan" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="foot_stool">Foot Stool</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="foot_stool" name="foot_stool" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="tallboy">Tallboy</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="tallboy" name="tallboy" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bookcase">BookCase</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bookcase" name="bookcase" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedroom_stereo_sm">Stereo Small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedroom_stereo_sm" name="bedroom_stereo_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedroom_stereo_med">Stereo Medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedroom_stereo_med" name="bedroom_stereo_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedroom_stereo_lge">Stereo Large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedroom_stereo_lge" name="bedroom_stereo_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedroom_computer">Computer</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedroom_computer" name="bedroom_computer" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedroom_computer_desk">Computer Desk</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedroom_computer_desk" name="bedroom_computer_desk" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="desk_hutch">Desk/Hutch</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="desk_hutch" name="desk_hutch" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bedside_lamp">Bedside Lamp</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bedside_lamp" name="bedside_lamp" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
				</div>
				<hr>
				<div class="row lounge">
					<p style="margin-left: 15px;">
						<strong>Lounge Room...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="seater_3">3 Seater</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="seater_3" name="seater_3" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="seater_2">2 Seater</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="seater_2" name="seater_2" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="sofa_beds">Sofa Beds</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="sofa_beds" name="sofa_beds" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="futons">Futons</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="futons" name="futons" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="rockers">Rockers</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="rockers" name="rockers" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="coffee_table_sm">Coffee Table ,Small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="coffee_table_sm" name="coffee_table_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="coffee_table_lge">Coffee Table ,Large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="coffee_table_lge" name="coffee_table_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="recliners">Recliners</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="recliners" name="recliners" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="magazine_racks">Magazine Racks</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="magazine_racks" name="magazine_racks" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="nest_tables">Nest Tables</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="nest_tables" name="nest_tables" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bookcase_sm">Bookcase ,Small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bookcase_sm" name="bookcase_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bookcase_lge">Bookcase , Large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bookcase_lge" name="bookcase_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bookcase_med">Bookcase Medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bookcase_med" name="bookcase_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="china_cabinet">China Cabinet</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="china_cabinet" name="china_cabinet" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="sideboard">Sideboard</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="sideboard" name="sideboard" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wall_unit_sm">Wall Unit, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wall_unit_sm" name="wall_unit_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wall_unit_med">Wall Unit, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wall_unit_med" name="wall_unit_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wall_unit_lge">Wall Unit, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wall_unit_lge" name="wall_unit_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="cnr_unit_sm">Corner Unit, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="cnr_unit_sm" name="cnr_unit_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="cnr_unit_med">Corner Unit, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="cnr_unit_med" name="cnr_unit_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="cnr_unit_lge">Corner Unit, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="cnr_unit_lge" name="cnr_unit_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lamp_stand">Lamp Stand</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lamp_stand" name="lamp_stand" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lounge_tv_sm">TV,small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lounge_tv_sm" name="lounge_tv_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lounge_tv_med">TV,medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lounge_tv_med" name="lounge_tv_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lounge_tv_lge">TV, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lounge_tv_lge" name="lounge_tv_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lounge_stereo_sm">Stero, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lounge_stereo_sm" name="lounge_stereo_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lounge_stereo_med">Stero, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lounge_stereo_med" name="lounge_stereo_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="lounge_stereo_lge">Stero, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="lounge_stereo_lge" name="lounge_stereo_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="vcr">VCR</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="vcr" name="vcr" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dvd">DVD</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dvd" name="dvd" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>



					</div>
				</div>

				<hr>
				<div class="row family">
					<p style="margin-left: 15px;">
						<strong>Family Room...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_table_sm">Table, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_table_sm" name="family_table_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_table_med">Table, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_table_med" name="family_table_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_table_lge">Table, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_table_lge" name="family_table_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_chairs_sm">Chairs, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_chairs_sm" name="family_chairs_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_chairs_lge">Chairs, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_chairs_lge" name="family_chairs_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_bar_stools">Bar Stools</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_bar_stools" name="family_bar_stools" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_buffet_hutch">Buffet/Hutch</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_buffet_hutch" name="family_buffet_hutch" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_bookcase_sm"> Bookcase, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_bookcase_sm" name="family_bookcase_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_bookcase_med">Bookcase, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_bookcase_med" name="family_bookcase_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_bookcase_lge"> Bookcase, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_bookcase_lge" name="family_bookcase_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_computer"> Computer</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_computer" name="family_computer" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="family_computer_desk">Computer Desk</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="family_computer_desk" name="family_computer_desk" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>
				</div>
				<hr>
				<div class="row kitchen">
					<p style="margin-left: 15px;">
						<strong>Kitchen/Dining...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="fridge_sm">Refrigerator, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="fridge_sm" name="fridge_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="fridge_med">Refrigerator, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="fridge_sm" name="fridge_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="fridge_lge">Refrigerator, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="fridge_lge" name="fridge_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="freezer_chest">Freezer Chest</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="freezer_chest" name="freezer_chest" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="freezer_upright">Freezer Upright</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="freezer_upright" name="freezer_upright" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dishwasher">Dishwasher</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dishwasher" name="dishwasher" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="microwave">Microwave</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="microwave" name="microwave" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="microwave_cab">Microwave Cabinet</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="microwave_cab" name="microwave_cab" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="pantry_single">Pantry Single Door</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="pantry_single" name="pantry_single" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="pantry_double">Pantry Double Door</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="pantry_double" name="pantry_double" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
				</div>
				<hr>
				<div class="row office">
					<p style="margin-left: 15px;">
						<strong>Office...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_desk">Desk, standard</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_desk" name="office_desk" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_chair">Office Chair</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_chair" name="office_chair" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="filing_cab_2_dr">2 Drawer Filing Cabinet</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="filing_cab_2_dr" name="filing_cab_2_dr" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="filing_cab_3_dr">3 Drawer Filing Cabinet</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="filing_cab_3_dr" name="filing_cab_3_dr" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="filing_cab_4_dr">4 Drawer Filing Cabinet</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="filing_cab_4_dr" name="filing_cab_4_dr" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_bookcase_sm">Bookcase, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_bookcase_sm" name="office_bookcase_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_bookcase_med">Bookcase, medium</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_bookcase_med" name="office_bookcase_med" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_bookcase_lge">Bookcase, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_bookcase_lge" name="office_bookcase_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>




					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_computer">Computer</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_computer" name="office_computer" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="office_computer_desk">Computer Desk</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="office_computer_desk" name="office_computer_desk" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>




					</div>
				</div>
				<hr>
				<div class="row laundry">
					<p style="margin-left: 15px;">
						<strong>Laundry...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="washer">Washer</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="washer" name="washer" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dryer">Dryer</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dryer" name="dryer" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="linen_cup_single">Linen Cupboard Single</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="linen_cup_single" name="linen_cup_single" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="linen_cup_double">Linen Cupboard Double</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="linen_cup_double" name="linen_cup_double" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row garage">
					<p style="margin-left: 15px;">
						<strong>Garage...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="mowers">Mowers</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="mowers" name="mowers" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="edger">Edger</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="edger" name="edger" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wheelbarrow">Wheelbarrow</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wheelbarrow" name="wheelbarrow" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="air_comp">Air Compressor</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="air_comp" name="air_comp" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="drill_press">Drill Press</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="drill_press" name="drill_press" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="ladders">Ladders</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="ladders" name="ladders" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="tool_box">Tool Box</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="tool_box" name="tool_box" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bikes_adult">Bikes, adult</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bikes_adult" name="bikes_adult" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bikes_child"> Bikes, child</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bikes_child" name="bikes_child" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="golf_bag">Golf bags</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="golf_bag" name="golf_bag" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="golf_buggy">Golf Buggy</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="golf_buggy" name="golf_buggy" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="garden_tools">Garden Tools</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="garden_tools" name="garden_tools" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="gym_set"> Gym Set</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="gym_set" name="gym_set" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="exe_bike">Exercise Bike</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="exe_bike" name="exe_bike" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="workbench">Workbench</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="workbench" name="workbench" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>



					</div>
				</div>
				<hr>
				<div class="row outdoor">
					<p style="margin-left: 15px;">
						<strong>Outdoor...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bbq_sm">BBQ, small</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bbq_sm" name="bbq_sm" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="bbq_lge">BBQ, large</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="bbq_lge" name="bbq_lge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="swing_set">Swing Set</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="swing_set" name="swing_set" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="plastic_table">Plastic Table</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="plastic_table" name="plastic_table" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="plastic_chairs">Plastic Chairs</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="plastic_chairs" name="plastic_chairs" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wooden_table">Wooden Table</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wooden_table" name="wooden_table" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="wooden_chairs"> Wooden Chairs</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="wooden_chairs" name="wooden_chairs" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="iron_table">Wrought Iron Table</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="iron_table" name="iron_table" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="iron_chairs"> Wrought Iron Chairs</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="iron_chairs" name="iron_chairs" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="pvc_lounge">PVC Lounge</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="pvc_lounge" name="pvc_lounge" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="swing_seat">Swing Seat</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="swing_seat" name="swing_seat" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="garden_seat">Garden Seat</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="garden_seat" name="garden_seat" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dog_kennel"> Dog Kennel</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dog_kennel" name="dog_kennel" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="dog_bed">Dog Bed</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="dog_bed" name="dog_bed" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="trampoline">Trampoline</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="trampoline" name="trampoline" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="pp_table">Ping Pong Table</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="pp_table" name="pp_table" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>
				</div>
				<hr>
				<div class="row other-items">
					<p style="margin-left: 15px;">
						<strong>Other Items...</strong>
					</p>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="portable_robe">Portable Robe</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="portable_robe" name="portable_robe" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="tea_chest">Tea Chest Box</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="tea_chest" name="tea_chest" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="book_wine_box">Book-Wine Box</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="book_wine_box" name="book_wine_box" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="pot_plants">Pot Plants</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="pot_plants" name="pot_plants" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="garden_ornaments">Garden Ornaments</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="garden_ornaments" name="garden_ornaments" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="sew_machine"> Sewing Machine</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="sew_machine" name="sew_machine" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="sew_table">Sewing Table</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="sew_table" name="sew_table" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>


					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="sew_cabinet">Sewing Cabinet</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="sew_cabinet" name="sew_cabinet" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-9 col-sm-9 col-md-9" for="overlocker">Overlocker</label>
							<div class="controls col-xs-3 col-sm-3 col-md-3">
								<input type="number" id="overlocker" name="overlocker" class="quantity form-control" oninput="maxLengthCheck(this)" maxlength="2" min="1" max="99">
							</div>
						</div>




					</div>
				</div>

				<div class="row top-buffer">
					<div class="col-md-4">
						<div class="form-group">
							<label for="extra_items">Please list items not included above</label>
							<textarea class="form-control" id="extra_items" name="extra_items" rows="5"></textarea>
						</div>

					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="to_be_dismantled">Please list items to be dismantled</label>
							<textarea class="form-control" id="to_be_dismantled" name="to_be_dismantled" rows="5"></textarea>
						</div>

					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="larger_items">Please list items larger than normal</label>
							<textarea class="form-control" id="larger_items" name="larger_items" rows="5"></textarea>
						</div>

					</div>
				</div>
				<div class="row top-buffer">
					<div class="col-md-12">
						<div class="smalltext">
							NOTE: Dalby Removals respects your privacy and only collects your name and e-mail address when you contact us, either via
							this form or by e-mail. We do not sell, rent or otherwise share your personal information with any
							third party.

						</div>
						<br>

						<div class="col-md-12">
							<center>
								<input class="submit btn btn-submit-qoute btn-box-shadow" type="submit" value="Submit Quote">
							</center>
						</div>

					</div>
				</div>
			</form>
		</div>
	</div>



<?php

	require_once('footer.php');
?>
