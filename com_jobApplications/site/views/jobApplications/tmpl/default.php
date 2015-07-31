<?php

/*
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

?>

<style>

	/* CUSTOM FIELDS */ 

	.cfdiv_text, .cfdiv_select {
	 padding: 0;
	 margin-bottom: 0;
	}

	.longTextBox {
		width: 620px;
	}

	.shortTextBox {
		width: 220px;
	}

	@media (max-width: 1199px) {
		.longTextBox {
			width: 220px;
		}
	}

	/* LIGHT BOX */ 

	#lightbox {
		position: absolute;
		top: 0;
		left: 50%;
		width: 500px;
		margin-left: -250px;
		background: #fff;
		z-index: 1001;
		display: none;
	}
	#lightbox-shadow {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #000;
		filter: alpha(opacity=75);
		-moz-opacity: 0.75;
		-khtml-opacity: 0.75;
		opacity: 0.75;
		z-index: 1000;
		display: none;
	}


/* CHRONOFORM STYLE HERE */ 



</style>

<script>

var x = document.cookie;
console.log("suie");
console.log(x);

</script>


<div class="row">

	<div class="container">

	<?php $link = "index.php?option=com_jobApplications&view=applicationController"; ?>

	<form action="<?php echo $link; ?>" method="POST"> 
		
		<div class="ccms_form_element cfdiv_header" id="autoID-963496dfab96dca73824e5b5e63dc230_container_div" style="">
		<h2 class="title"><a>Job Application</a></h2>
		</div>

		<!-- 
		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="name_container_div" style="">
			 <label for="name">Job ID: </label>
			 <input placeholder="<?php echo $_COOKIE["jobCode"]; ?>" id="jobID" maxlength="150" size="30" class="shortTextBox" title="" type="text" container_id="0" value="" name="name" readonly />
			 <div class="clear"></div>
			 <div id="error-message-name"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="name_container_div" style="">
			 <label for="name">Job Title: </label>
			 <input placeholder="<?php echo $_COOKIE["jobTitle"]; ?>" id="jobTitle" maxlength="150" size="30" class="shortTextBox" title="" type="text" container_id="0" value="" name="name" readonly />
			 <div class="clear"></div>
			 <div id="error-message-name"></div>
			</div>
		</div>
		--> 

		<div class="clear"></div>
		<p style="margin-left:30px;">Please complete the necessary fields below:</p>
		<div class="clear"></div>
		

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="name_container_div" style="">
			 <label for="name">First Name: </label>
			 <input placeholder="John" id="name" maxlength="150" size="30" class="shortTextBox validate['required']" title="" type="text" container_id="0" value="" name="fname" />
			 <div class="clear"></div>
			 <div id="error-message-name"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="last_name_container_div" style="">
			 <label for="last_name">Last Name: </label>
			 <input id="last_name" maxlength="150" size="30" class="shortTextBox validate['required']" title="" type="text" container_id="0" value="" name="lname" />
			 <div class="clear"></div>
			 <div id="error-message-last_name"></div>
			</div>
		</div>

		<div class="span9">
			<div class="ccms_form_element cfdiv_text" id="email_container_div" style="">
			 <label for="email">Email: </label>
			 <input placeholder="JohnDoe@email.com" id="email" maxlength="150" size="150" class=" validate['required','email'] longTextBox" title="" type="text" container_id="0" value="" name="email" />
			 <div class="clear"></div>
			 <div id="error-message-email"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="phone_container_div" style="">
			 <label for="phone">Contact Number: </label>
			 <input placeholder="987-765-4321" id="phone" maxlength="150" size="30" class="shortTextBox validate['phone']" title="" type="text" container_id="0" value="" name="phoneNumber" />
			 <div class="clear"></div>
			 <div id="error-message-phone"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="fax_container_div" style="">
			<label for="phone2">Other Number: </label>
			<input placeholder="987-765-4321" id="phone2" maxlength="150" size="30" class="shortTextBox validate['phone']" title="" type="text" container_id="0" value="" name="otherNumber" />
			<div class="clear"></div>
		    <div id="error-message-phone"></div>
			</div>
		</div>

		<div class="span9">
			<div class="ccms_form_element cfdiv_text" id="address1_container_div" style="">
			<label for="address1">Address: </label>
			<input placeholder="987 - Street Name" id="address1" maxlength="150" size="30" class="longTextBox" title="" type="text" container_id="0" value="" name="address" />
			<div class="clear"></div>
			<div id="error-message-address1"></div>
			</div>
		</div>

		<!-- 
		<div class="span9">
			<div class="ccms_form_element cfdiv_text" id="address2_container_div" style="">
			 <label for="address2"> </label>
			 <input id="address2" maxlength="150" size="30" class="" title="" type="text" container_id="0" value="" name="address2" />
			 <div class="clear"></div>
			 <div id="error-message-address2"></div>
			</div>
		</div>
		-->

		<div class="span4">
			<div class="ccms_form_element cfdiv_select" id="country_container_div" style="">
			 <label for="country">Country: </label>
			 <select size="1" id="country" class="" title="" container_id="0" name="country">
			 <option value="" selected="selected">Choose Country</option>
			 <option value="">--</option>
			 <option value="CA">Canada</option>
			 <option value="US">United States</option>
			 <option value="">--</option>
			 <option value="AF">Afghanistan</option>
			 <option value="AL">Albania</option>
			 <option value="DZ">Algeria</option>
			 <option value="AS">American Samoa</option>
			 <option value="AD">Andorra</option>
			 <option value="AO">Angola</option>
			 <option value="AI">Anguilla</option>
			 <option value="AQ">Antarctica</option>
			 <option value="AG">Antigua and Barbuda</option>
			 <option value="AR">Argentina</option>
			 <option value="AM">Armenia</option>
			 <option value="AW">Aruba</option>
			 <option value="AU">Australia</option>
			 <option value="AT">Austria</option>
			 <option value="AZ">Azerbaijan</option>
			 <option value="BS">Bahamas</option>
			 <option value="BH">Bahrain</option>
			 <option value="BD">Bangladesh</option>
			 <option value="BB">Barbados</option>
			 <option value="BY">Belarus</option>
			 <option value="BE">Belgium</option>
			 <option value="BZ">Belize</option>
			 <option value="BJ">Benin</option>
			 <option value="BM">Bermuda</option>
			 <option value="BT">Bhutan</option>
			 <option value="BO">Bolivia</option>
			 <option value="BA">Bosnia and Herzegowina</option>
			 <option value="BW">Botswana</option>
			 <option value="BV">Bouvet Island</option>
			 <option value="BR">Brazil</option>
			 <option value="IO">British Indian Ocean Territory</option>
			 <option value="BN">Brunei Darussalam</option>
			 <option value="BG">Bulgaria</option>
			 <option value="BF">Burkina Faso</option>
			 <option value="BI">Burundi</option>
			 <option value="KH">Cambodia</option>
			 <option value="CM">Cameroon</option>
			 <option value="CV">Cape Verde</option>
			 <option value="KY">Cayman Islands</option>
			 <option value="CF">Central African Republic</option>
			 <option value="TD">Chad</option>
			 <option value="CL">Chile</option>
			 <option value="CN">China</option>
			 <option value="CX">Christmas Island</option>
			 <option value="CC">Cocos (Keeling) Islands</option>
			 <option value="CO">Colombia</option>
			 <option value="KM">Comoros</option>
			 <option value="CG">Congo</option>
			 <option value="CK">Cook Islands</option>
			 <option value="CR">Costa Rica</option>
			 <option value="CI">Cote D'Ivoire</option>
			 <option value="HR">Croatia</option>
			 <option value="CU">Cuba</option>
			 <option value="CY">Cyprus</option>
			 <option value="CZ">Czech Republic</option>
			 <option value="DK">Denmark</option>
			 <option value="DJ">Djibouti</option>
			 <option value="DM">Dominica</option>
			 <option value="DO">Dominican Republic</option>
			 <option value="TP">East Timor</option>
			 <option value="EC">Ecuador</option>
			 <option value="EG">Egypt</option>
			 <option value="SV">El Salvador</option>
			 <option value="GQ">Equatorial Guinea</option>
			 <option value="ER">Eritrea</option>
			 <option value="EE">Estonia</option>
			 <option value="ET">Ethiopia</option>
			 <option value="FK">Falkland Islands (Malvinas)</option>
			 <option value="FO">Faroe Islands</option>
			 <option value="FJ">Fiji</option>
			 <option value="FI">Finland</option>
			 <option value="FR">France</option>
			 <option value="FX">France, MEtropolitan</option>
			 <option value="GF">French Guiana</option>
			 <option value="PF">French Polynesia</option>
			 <option value="TF">French Southern Territories</option>
			 <option value="GA">Gabon</option>
			 <option value="GM">Gambia</option>
			 <option value="GE">Georgia</option>
			 <option value="DE">Germany</option>
			 <option value="GH">Ghana</option>
			 <option value="GI">Gibraltar</option>
			 <option value="GR">Greece</option>
			 <option value="GL">Greenland</option>
			 <option value="GD">Grenada</option>
			 <option value="GP">Guadeloupe</option>
			 <option value="GU">Guam</option>
			 <option value="GT">Guatemala</option>
			 <option value="GN">Guinea</option>
			 <option value="GW">Guinea-bissau</option>
			 <option value="GY">Guyana</option>
			 <option value="HT">Haiti</option>
			 <option value="HM">Heard and Mc Donald Islands</option>
			 <option value="HN">Honduras</option>
			 <option value="HK">Hong Kong</option>
			 <option value="HU">Hungary</option>
			 <option value="IS">Iceland</option>
			 <option value="IN">India</option>
			 <option value="ID">Indonesia</option>
			 <option value="IR">Iran (Islamic Republic of)</option>
			 <option value="IQ">Iraq</option>
			 <option value="IE">Ireland</option>
			 <option value="IL">Israel</option>
			 <option value="IT">Italy</option>
			 <option value="JM">Jamaica</option>
			 <option value="JP">Japan</option>
			 <option value="JO">Jordan</option>
			 <option value="KZ">Kazakhstan</option>
			 <option value="KE">Kenya</option>
			 <option value="KI">Kiribati</option>
			 <option value="KP">Korea, Democratic People's Republic of</option>
			 <option value="KR">Korea, Republic of</option>
			 <option value="KW">Kuwait</option>
			 <option value="KG">Kyrgyzstan</option>
			 <option value="LA">Lao People's Democratic Republic</option>
			 <option value="LV">Latvia</option>
			 <option value="LB">Lebanon</option>
			 <option value="LS">Lesotho</option>
			 <option value="LR">Liberia</option>
			 <option value="LY">Libyan Arab Jamahiriya</option>
			 <option value="LI">Liechtenstein</option>
			 <option value="LT">Lithuania</option>
			 <option value="LU">Luxembourg</option>
			 <option value="MO">Macau</option>
			 <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
			 <option value="MG">Madagascar</option>
			 <option value="MW">Malawi</option>
			 <option value="MY">Malaysia</option>
			 <option value="MV">Maldives</option>
			 <option value="ML">Mali</option>
			 <option value="MT">Malta</option>
			 <option value="MH">Marshall Islands</option>
			 <option value="MQ">Martinique</option>
			 <option value="MR">Mauritania</option>
			 <option value="MU">Mauritius</option>
			 <option value="YT">Mayotte</option>
			 <option value="MX">Mexico</option>
			 <option value="FM">Micronesia, Federated States of</option>
			 <option value="MD">Moldova, Republic of</option>
			 <option value="MC">Monaco</option>
			 <option value="MN">Mongolia</option>
			 <option value="MS">Montserrat</option>
			 <option value="MA">Morocco</option>
			 <option value="MZ">Mozambique</option>
			 <option value="MM">Myanmar</option>
			 <option value="NA">Namibia</option>
			 <option value="NR">Nauru</option>
			 <option value="NP">Nepal</option>
			 <option value="NL">Netherlands</option>
			 <option value="AN">Netherlands Antilles</option>
			 <option value="NC">New Caledonia</option>
			 <option value="NZ">New Zealand</option>
			 <option value="NI">Nicaragua</option>
			 <option value="NE">Niger</option>
			 <option value="NG">Nigeria</option>
			 <option value="NU">Niue</option>
			 <option value="NF">Norfolk Island</option>
			 <option value="MP">Northern Mariana Islands</option>
			 <option value="NO">Norway</option>
			 <option value="OM">Oman</option>
			 <option value="PK">Pakistan</option>
			 <option value="PW">Palau</option>
			 <option value="PA">Panama</option>
			 <option value="PG">Papua New Guinea</option>
			 <option value="PY">Paraguay</option>
			 <option value="PE">Peru</option>
			 <option value="PH">Philippines</option>
			 <option value="PN">Pitcairn</option>
			 <option value="PL">Poland</option>
			 <option value="PT">Portugal</option>
			 <option value="PR">Puerto Rico</option>
			 <option value="QA">Qatar</option>
			 <option value="RE">Reunion</option>
			 <option value="RO">Romania</option>
			 <option value="RU">Russian Federation</option>
			 <option value="RW">Rwanda</option>
			 <option value="KN">Saint Kitts and Nevis</option>
			 <option value="LC">Saint Lucia</option>
			 <option value="VC">Saint Vincent and the Grenadines</option>
			 <option value="WS">Samoa</option>
			 <option value="SM">San Marino</option>
			 <option value="ST">Sao Tome and Principe</option>
			 <option value="SA">Saudi Arabia</option>
			 <option value="SN">Senegal</option>
			 <option value="SC">Seychelles</option>
			 <option value="SL">Sierra Leone</option>
			 <option value="SG">Singapore</option>
			 <option value="SK">Slovakia (Slovak Republic)</option>
			 <option value="SI">Slovenia</option>
			 <option value="SB">Solomon Islands</option>
			 <option value="SO">Somalia</option>
			 <option value="ZA">South Africa</option>
			 <option value="GS">South Georgia and the South Sandwich Islands</option>
			 <option value="ES">Spain</option>
			 <option value="LK">Sri Lanka</option>
			 <option value="SH">St. Helena</option>
			 <option value="PM">St. Pierre and Miquelon</option>
			 <option value="SD">Sudan</option>
			 <option value="SR">Suriname</option>
			 <option value="SJ">Svalbard and Jan Mayen Islands</option>
			 <option value="SZ">Swaziland</option>
			 <option value="SE">Sweden</option>
			 <option value="CH">Switzerland</option>
			 <option value="SY">Syrian Arab Republic</option>
			 <option value="TW">Taiwan, Province of China</option>
			 <option value="TJ">Tajikistan</option>
			 <option value="TZ">Tanzania, United Republic of</option>
			 <option value="TH">Thailand</option>
			 <option value="TG">Togo</option>
			 <option value="TK">Tokelau</option>
			 <option value="TO">Tonga</option>
			 <option value="TT">Trinidad and Tobago</option>
			 <option value="TN">Tunisia</option>
			 <option value="TR">Turkey</option>
			 <option value="TM">Turkmenistan</option>
			 <option value="TC">Turks and Caicos Islands</option>
			 <option value="TV">Tuvalu</option>
			 <option value="UG">Uganda</option>
			 <option value="UA">Ukraine</option>
			 <option value="AE">United Arab Emirates</option>
			 <option value="GB">United Kingdom</option>
			 <option value="UM">United States Minor Outlying Islands</option>
			 <option value="UY">Uruguay</option>
			 <option value="UZ">Uzbekistan</option>
			 <option value="VU">Vanuatu</option>
			 <option value="VA">Vatican City State (Holy See)</option>
			 <option value="VE">Venezuela</option>
			 <option value="VN">Viet Nam</option>
			 <option value="VG">Virgin Islands (British)</option>
			 <option value="VI">Virgin Islands (U.S.)</option>
			 <option value="WF">Wallis and Futuna Islands</option>
			 <option value="EH">Western Sahara</option>
			 <option value="YE">Yemen</option>
			 <option value="YU">Yugoslavia</option>
			 <option value="ZR">Zaire</option>
			 <option value="ZM">Zambia</option>
			 <option value="ZW">Zimbabwe</option>
			 </select>
			 <div class="clear"></div>
			 <div id="error-message-country"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_select" id="state_province_container_div" style="">
			 <label for="state_province">State / Province:</label>
			 <select size="1" id="state_province" class="" title="" container_id="0" name="state_province">
			 <option value="" selected="selected">Choose State / Province</option>
			 <option value="">--</option>
			 <option value="AB">Alberta</option>
			 <option value="BC">British Columbia</option>
			 <option value="MB">Manitoba</option>
			 <option value="NB">New Brunswick</option>
			 <option value="NF">Newfoundland</option>
			 <option value="NT">Northwest Territories</option>
			 <option value="NS">Nova Scotia</option>
			 <option value="ON">Ontario</option>
			 <option value="PE">Prince Edward Island</option>
			 <option value="QC">Quebec</option>
			 <option value="SK">Saskatchewan</option>
			 <option value="YT">Yukon</option>
			 <option value="">--</option>
			 <option value="AL">Alabama</option>
			 <option value="AK">Alaska</option>
			 <option value="AS">American Samoa</option>
			 <option value="AZ">Arizona</option>
			 <option value="AR">Arkansas</option>
			 <option value="CA">California</option>
			 <option value="CO">Colorado</option>
			 <option value="CT">Connecticut</option>
			 <option value="DE">Delaware</option>
			 <option value="DC">District of Columbia</option>
			 <option value="FM">Fed. States of Micronesia</option>
			 <option value="FL">Florida</option>
			 <option value="GA">Georgia</option>
			 <option value="GU">Guam</option>
			 <option value="HI">Hawaii</option>
			 <option value="ID">Idaho</option>
			 <option value="IL">Illinois</option>
			 <option value="IN">Indiana</option>
			 <option value="IA">Iowa</option>
			 <option value="KS">Kansas</option>
			 <option value="KY">Kentucky</option>
			 <option value="LA">Louisiana</option>
			 <option value="ME">Maine</option>
			 <option value="MH">Marshall Islands</option>
			 <option value="MD">Maryland</option>
			 <option value="MA">Massachusetts</option>
			 <option value="MI">Michigan</option>
			 <option value="MN">Minnesota</option>
			 <option value="MS">Mississippi</option>
			 <option value="MO">Missouri</option>
			 <option value="MT">Montana</option>
			 <option value="NE">Nebraska</option>
			 <option value="NV">Nevada</option>
			 <option value="NH">New Hampshire</option>
			 <option value="NJ">New Jersey</option>
			 <option value="NM">New Mexico</option>
			 <option value="NY">New York</option>
			 <option value="NC">North Carolina</option>
			 <option value="ND">North Dakota</option>
			 <option value="MP">Northern Mariana Is.</option>
			 <option value="OH">Ohio</option>
			 <option value="OK">Oklahoma</option>
			 <option value="OR">Oregon</option>
			 <option value="PW">Palau</option>
			 <option value="PA">Pennsylvania</option>
			 <option value="PR">Puerto Rico</option>
			 <option value="RI">Rhode Island</option>
			 <option value="SC">South Carolina</option>
			 <option value="SD">South Dakota</option>
			 <option value="TN">Tennessee</option>
			 <option value="TX">Texas</option>
			 <option value="UT">Utah</option>
			 <option value="VT">Vermont</option>
			 <option value="VA">Virginia</option>
			 <option value="VI">Virgin Islands</option>
			 <option value="WA">Washington</option>
			 <option value="WV">West Virginia</option>
			 <option value="WI">Wisconsin</option>
			 <option value="WY">Wyoming</option>
			 <option value="">--</option>
			 <option value="OT">Other</option>
			 </select>
			 <div class="clear"></div>
			 <div id="error-message-state_province"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="zip_postal_container_div" style="">
			 <label for="zip_postal">Zip / Postal: </label>
			 <input placeholder="98765" id="zip_postal" maxlength="150" size="30" class="shortTextBox" title="" type="text" container_id="0" value="" name="zipCode" />
			 <div class="clear"></div>
			 <div id="error-message-zip_postal"></div>
			</div>
		</div>

		<div class="span4">
			<div class="ccms_form_element cfdiv_text" id="city_town_container_div" style="">
			 <label for="city_town">City / Town: </label>
			 <input placeholder="Vancouver" id="city_town" maxlength="150" size="30" class="shortTextBox" title="" type="text" container_id="0" value="" name="city_town" />
			 <div class="clear"></div>
			 <div id="error-message-city_town"></div>
			</div>
		</div>
 
		<div class="span9"> <p> By pressing 'Submit' you agree that all submitted information above is correct and you agree to Thompson Creek Metals Terms of Policy. </p> </div> 
					
		<div class="span9 center">
			<div class="" id="autoID-18eb268ba3a0ed8b1523f86079c325c5_container_div" style="text-align:left">
			 <input name="Submit" class="btn" value="Submit" type="submit" container_id="0" />
			 <div class="clear"></div>
			 <div id="error-message-Submit"></div>
			</div>
		</div>
		
	</form>
	</div> <!-- container --> 

</div> <!-- row --> 