<html>

<head>
	<title>Form</title>
</head>

<body>
	<div>
		<table height="450" align="center" border="0" cellpadding="5" cellspacing="0" width="650">
			<form method="post" action="contactengine.php">
				<tr>
					<td width="150"><table>
						<tr height="30"><td  align="right">
							<label for="Name">Name:</label>
						</td></tr>
						
						<tr height="30"><td  align="right">
							<label for="FatherName">Father's Name:</label>
						</td></tr>
						
						<tr height="30"><td  align="right">
							<label for="MotherName">Mother's Name:</label>
						</td></tr>
						
						<tr height="30"><td  align="right">
							<label for="Date of birth">Date of birth:</label>
						</td></tr>
						
						<tr height="30"><td align="right">
							<label for="Email" >Email:</label>
						</td></tr>
						
						<tr height="30"><td align="right">
							<label for="fileToUpload" >Current Photograph:</label>
						</td></tr>
						
						<tr height="30"><td>
						</td></tr>
					</table></td>
					

					<td  width="480"><table>
						<tr height="30"><td>
							<select name="title" id="title">
								<option value="Mr.">Mr.</option>
								<option value="Ms.">Ms.</option>
							</select>
							<input type="text" name="FName" id="FName" size="16" />
							<input type="text" name="MName" id="MName" size="16" />
							<input type="text" name="LName" id="LName" size="16" />
						</td></tr>
						
						<tr height="30"><td>
							<input type="text" name="FatherName" id="FatherName" size="16" />
						</td></tr>
						
						<tr height="30"><td>
							<input type="text" name="MotherName" id="MotherName" size="16" />
						</td></tr>
						
						<tr height="30"><td>
							<select name="dobday" id="dobday">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="23">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							
							<select name="dobmon" id="dobmon">
								<option value="01">January</option>
								<option value="02">February</option>
								<option value="03">March</option>
								<option value="04">April</option>
								<option value="05">May</option>
								<option value="06">June</option>
								<option value="07">July</option>
								<option value="08">August</option>
								<option value="09">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
							
							<select name="dobyear" id="dobyear">
								<option value="01">1980</option>
								<option value="02">1981</option>
								<option value="03">1982</option>
								<option value="04">1983</option>
								<option value="05">1984</option>
								<option value="06">1985</option>
								<option value="07">1986</option>
								<option value="08">1987</option>
								<option value="09">1988</option>
								<option value="10">1989</option>
								<option value="11">1990</option>
								<option value="12">1991</option>
								<option value="13">1992</option>
								<option value="14">1993</option>
								<option value="15">1994</option>
								<option value="16">1995</option>
								<option value="17">1996</option>
								<option value="18">1997</option>
								<option value="19">1998</option>
								<option value="20">1999</option>
								<option value="23">2000</option>
								<option value="22">2001</option>
								<option value="23">2002</option>
								<option value="24">2003</option>
								<option value="25">2004</option>
								<option value="26">2005</option>
								<option value="27">2006</option>
								<option value="28">2007</option>
								<option value="29">2008</option>
								<option value="30">2009</option>
								<option value="31">2010</option>
						</td></tr>
						
						<tr height="30"><td>
							<input type="text" name="Email" id="Email" size="16" />
						</td></tr>
						
						<tr height="30"><td>
							<input type="file" name="fileToUpload" id="fileToUpload">(.jpg format <1 TB)
						</td></tr>
						
						<tr height="30"><td>
							<input name="submit" value="submit" type="submit">
						</td></tr>
					</table></td>
				</tr>
			</form>
		</table>
	</div>
</body>

</html>