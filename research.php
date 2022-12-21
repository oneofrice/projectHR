<?php
require_once "header.php";
include "logic/logic.php";
$city = getCity();
$enrollment = getEnrollment();
$edu_level = getEduLevel();
$major = getMajor();
$experience = getExperience();
$company_t = getCompanyT();
$company_s = getCompanyS();
$last_job = getLastJob();
?>
<div class="container-fluid header-space">
	<div class="row">
		<div class="col-md-4 left-text">
			<h1 class="sh2 text-dev">Please enter your contact details for analysis. This data will help determine whether you are
				suitable for a particular position.</h1>
			<div>
				<img src="images/2.png" class="img-dev">
			</div>
		</div>
		<div class="col-md-4 right-text">
			<form id="dataForm" method="post" action="research.php" class="ajax">
				<div class="block-right">
					<div class="label label-color">Select a city from the list</div>
					<select name="city" id="city" class="val select select-border">
						<option disabled selected><img src="images/list.png">Select from list</option>
						<?php foreach($city as $City) : ?>
							<option value="<?php echo $City; ?>"><?php echo $City; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a enrollment from the list</div>
					<select name="enrollment" id="enrollment" class="val select select-border">
						<option disabled selected>Select from list</option>
						<?php foreach($enrollment as $Enrlmnt) : ?>
							<option value="<?php echo $Enrlmnt; ?>"><?php echo $Enrlmnt; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a edu_level from the list</div>
					<select name="edu_level" id="edu_level" class="val select select-border">
						<option disabled selected>Select from list</option>
						<?php foreach($edu_level as $edu_lvl) : ?>
							<option value="<?php echo $edu_lvl; ?>"><?php echo $edu_lvl; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a major from the list</div>
					<select name="major" id="major" class="val select select-border">
						<option disabled selected>Select from list</option>
						<?php foreach($major as $mjr) : ?>
							<option value="<?php echo $mjr; ?>"><?php echo $mjr; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a experience from the list</div>
					<select name="experience" id="experience" class="val select select-border">
						<option disabled selected>Select from list</option>
						<?php foreach($experience as $exp) : ?>
							<option value="<?php echo $exp; ?>"><?php echo $exp; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a company_t from the list</div>
					<select name="company_t" id="company_t" class="val select select-border">
						<option disabled selected>Select from list</option>
						<?php foreach($company_t as $c_t) : ?>
							<option value="<?php echo $c_t; ?>"><?php echo $c_t; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a company_s from the list</div>
					<select name="company_s" id="company_s" class="val select select-border">
						<option disabled selected>Select from list</option>
						<?php foreach($company_s as $c_s) : ?>
							<option value="<?php echo $c_s; ?>"><?php echo $c_s; ?></option>
						<?php endforeach; ?>
					</select>
					<div class="label label-color">Select a last_job from the list</div>
					<select name="last_job" class="val select select-border" id="last_job">
						<option disabled selected>Select from list</option>
						<?php foreach($last_job as $l_job) : ?>
							<option value="<?php echo $l_job; ?>"><?php echo $l_job; ?></option>
						<?php endforeach; ?>
					</select>
                    <div class="label label-color">Enter the development index of city</div>
					<input class="val select select-border" type="text" placeholder=" development index" id="city_index" required>
                    <div class="label label-color">Input a training hours</div>
					<input class="val select select-border" type="text" placeholder=" training hours" id="training_hours" required>
					<div class="label label-color">Select a gender</div>
					<div class="check radio-margin" >
						<input name="checkbox" id="gender" class="form-check-input" type="radio" value="Female">
						<label class="form-check-label" for="gender">Female</label>
						<input name="checkbox" id="gender" class="form-check-input" type="radio" value="Male">
						<label class="form-check-label" for="gender">Male</label>
						<input name="checkbox" id="gender" class="form-check-input" type="radio" value="Other">
						<label class="form-check-label" for="gender">Other</label>
					</div>
					<div class="label label-color">Select a rel_experience</div>
					<div class="form-check radio-margin">
						<input name="checkbox1" id="rel_experience" class="form-check-input" type="radio" value="Has relevent experience">
						<label class="form-check-label" for="rel_experience">Has relevent experience</label>
					</div>
					<div class="form-check radio-margin" >
						<input name="checkbox1" id="rel_experience" class="form-check-input" type="radio" value="No relevent experience">
						<label class="form-check-label" for="rel_experience">No relevent experience</label>
					</div>
					<div>
						<button class="but send-button"  type="button" id="submit_btn" name="submit_btn">Send
							<img src="images/Vector.png"></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"?>

