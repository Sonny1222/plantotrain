	<?php
		include ("head.php");
		include ("header.php");
		include ("makeform.php");
	?>
	


<div id='main' class='center'><!--all actual content-->

	<h1>Create Your Plans</h1>
	
	<div id='form'>
		<table width="500px" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<form name="runnerdata" method="post" action="trainingplan.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
							<tr>
								<td colspan="4" id='formname'>Input Your Current Data</td>								
							</tr>
							<tr></tr>
							<tr>
								<td width="300">Race Distance:</td>
								<td width="50">&nbsp;</td>
								<td width="50">&nbsp;</td>
								<td width="50">
									<select name="distance">
										<option value="1500">1500 Meters</option>
										<option value="mile">1 Mile</option>
										<option value="5k">5 Kilometer</option>
										<option value="5mile">5 Miles</option>
										<option value="10k">10 Kilometer</option>
										<option value="10mile">10 Mile</option>
										<option value="half">Half Marathon</option>
										<option value="full">Full Marathon</option>
									</select>
								</td>
							</tr>
							
							<tr>
								<td>Race Time (H:M:S):</td>
								<td>
									<select name="hours">
										<?php
											times();
										?>
									</select>
								</td>
								<td>
									<select name="minutes">
										<?php
											times();
										?>
									</select>
								</td>
								<td>
									<select name="seconds">
										<?php
											times();
										?>
									</select>	
								</td>
							</tr>
							
							<tr>
								<td>Highest Weekly Mileage:</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>
									<select name="mileage">
										<?php
											miles();
										?>
									</select>
								</td>
							</tr>
							
							<tr>
								<td>Race Date:</td>
								<td>
									<select name="month">
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</td>
								<td>
									<select name="day">
										<?php
											days();
										?>
									</select>
								</td>
								<td>
									<select name="year">
										<?php
											years();
										?>
									</select>
								</td>
							</tr>
							
							<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit" value="Plan"></td>
							</tr>
						</table>
					</td>
				</form>
			</tr>
		</table>
	</div><!--end form-->

</div><!--end main-->
<?php
	include ("footer.php");
?>