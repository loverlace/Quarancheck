<?php
if (User::loggedIn()) {

	if ($userStatus == "admin") {
?>
		<div class='sidebar'>
			<div class='sidebar-area'>
				<div class='row' style='margin-bottom: 20px;'>
					<div class='col-md-6'>
						<div class='user-profile'>
							<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' />
						</div>
					</div>
					<div class='col-md-6'>
						<div class='user-names'>
							<?php echo "$userFirstName";  ?>
						</div>

						<div class='user-role'>
							<?php echo "$userRole";  ?>
						</div>
					</div>
				</div>
				<ul class='sidebar-menu'>
					<li><a href='index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png' /> Dashboard</a></li>
					<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/ic_account_box_white_24dp.png' /> Profile</a></li>
					<li><a href='patients.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png' /> Patients Book</a></li>
					<li><a href='add-doctors.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png' /> Add Doctor & Police</a></li>
					<li><a href='doctors-record.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png' /> Doctors and Police Records</a></li>
					<!--<li><a href='appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  /> Appointment</a></li>-->
					<!--<li><a href='enquiry.php'><img class='sidebar-menu-icon' src='images/ic_help_outline_white_24dp.png'  /> Enquiry</a></li>-->
					<li><a href='add-outbreak.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png' /> Add Outbreaks</a></li>
					<li><a href='outbreaks.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png' /> Likely Outbreaks</a></li>
					<li><a href='covid.php'><img class='sidebar-menu-icon' src='images/ic_error_outline_white_24dp.png' /> Add Reports</a></li>
					<li><a href='reports.php'><img class='sidebar-menu-icon' src='images/ic_receipt_white_24dp.png' />Covid-19 Reports</a></li>
				</ul>
			</div>
		</div>
	<?php
		// END OF THE ADMIN
	} else if ($userStatus == "doctor") {
	?>

		<div class='sidebar'>
			<div class='sidebar-area'>
				<div class='row' style='margin-bottom: 20px;'>
					<div class='col-md-6'>
						<div class='user-profile'>
							<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' />
						</div>
					</div>
					<div class='col-md-6'>
						<div class='user-names'>
							<?php echo "$userFirstName";  ?>
						</div>

						<div class='user-role'>
							<?php echo "$userRole";  ?>
						</div>
					</div>
				</div>
				<ul class='sidebar-menu'>
					<li><a href='index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png' /> Dashboard</a></li>
					<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/ic_account_box_white_24dp.png' /> Profile</a></li>
					<li><a href='patients.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png' /> Patients Book</a></li>
					<li><a href='set-calendar.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png' />Set Calendar</a></li>
					<li><a href='new-patient.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png' /> Add Patient</a></li>
					<li><a href='doc-message.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png' /> Message</a></li>
					<li><a href='appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png' /> Messages</a></li>
					<!--<li><a href='enquiry.php'><img class='sidebar-menu-icon' src='images/ic_help_outline_white_24dp.png'  /> Enquiry</a></li>-->
					<li><a href='outbreaks.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png' /> Likely Outbreaks</a></li>
					<!--<li><a href='covid.php'><img class='sidebar-menu-icon' src='images/ic_error_outline_white_24dp.png'  /> Covid-19</a></li>-->
					<li><a href='reports.php'><img class='sidebar-menu-icon' src='images/ic_receipt_white_24dp.png' /> Covid-19 Reports</a></li>
				</ul>
			</div>
		</div>


	<?php

		// END OF THE ADMIN
	} else if ($userStatus == "police") {
	?>

		<div class='sidebar'>
			<div class='sidebar-area'>
				<div class='row' style='margin-bottom: 20px;'>
					<div class='col-md-6'>
						<div class='user-profile'>
							<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' />
						</div>
					</div>
					<div class='col-md-6'>
						<div class='user-names'>
							<?php echo "$userFirstName";  ?>
						</div>

						<div class='user-role'>
							<?php echo "$userRole";  ?>
						</div>
					</div>
				</div>
				<ul class='sidebar-menu'>
					<li><a href='index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png' /> Dashboard</a></li>
					<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/ic_account_box_white_24dp.png' /> Profile</a></li>
					<li><a href='patients.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png' /> Patients Book</a></li>
					<li><a href='new-patient.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png' /> Add Patient</a></li>
					<li><a href='outbreaks.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png' /> Likely Outbreaks</a></li>
					<li><a href='reports.php'><img class='sidebar-menu-icon' src='images/ic_receipt_white_24dp.png' /> Covid-19 Reports</a></li>
				</ul>
			</div>
		</div>

	<?php
	} 
}else if (Patient::isPatientIn()) {
	?>

		<div class='sidebar'>
			<div class='sidebar-area'>
				<div class='row' style='margin-bottom: 20px;'>
					<div class='col-md-6'>
						<div class='user-profile'>
							<img src='images/3678443 - ambulance fast fast hospital.png' class='img-responsive' style='max-height: 80px;' />
						</div>
					</div>
					<div class='col-md-6'>
						<div class='user-names'>
							<?php echo Patient::getP($_SESSION['patient'], "name");  ?>
						</div>

						<div class='user-role'>
							<?php echo "Patient";  ?>
						</div>
					</div>
				</div>
				<ul class='sidebar-menu'>
					<li><a href='patient-data.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png' /> Your Data</a></li>
					<li><a href='patient_calendar.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png' />Set Calendar</a></li>
					<li><a href='book-appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png' /> Message</a></li>
					<li><a href='p-sent-appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png' />Sent Messages</a></li>
					<li><a href='p-reply-appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png' />Notifications</a></li>
					<!-- <li><a href='appointments.php'><img class='sidebar-menu-icon' src='images/ic_alarm_white_24dp.png'  /> Messages</a></li> -->
					<li><a href='logout.php'><img class='sidebar-menu-icon' src='images/ic_group_work_white_24dp.png' /> Logout</a></li>
				</ul>
			</div>
		</div>

<?php
}
