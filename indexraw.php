<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/styles1.css" type="text/css" rel="stylesheet" media="all">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
</head>
<body>
<section class="register">
  <div class="register-full">
    <div class="register-right">
      <div class="register-in">
        <h1>Member details update</h1>
        <div class="register-form">
          <form action="logout.html" method="post">
            <div class="fields-grid">
              <?php include('errors.php'); ?>
              <div class="styled-input">
                <input type="text" name="Yourname" required="" value="Rtr.">
                <label>Rotractor Name</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="email" name="Email" required="">
                <label>Email</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="tel" name="mobile_no" required="">
                <label>Phone Number</label>
                <span></span> </div>
				
				 <div class="content-wthree2">
                <div class="grid-w3layouts1">
                  <div class="w3-agile1">
                    <label class="rating">Gender<span></span></label>
                    <ul>
                      <li>
                        <input type="radio" id="a-option" name="selector1">
                        <label for="a-option">Male</label>
                        <div class="check"></div>
                      </li>
                      <li>
                        <input type="radio" id="b-option" name="selector1">
                        <label for="b-option">Female</label>
                        <div class="check">
                          <div class="inside"></div>
                        </div>
                      </li>
					  <li>
                        <input type="radio" id="c-option" name="selector1">
                        <label for="c-option">other</label>
                        <div class="check">
                          <div class="inside"></div>
                        </div>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
<!--
              <div class="styled-input">
                <h2>Sex :</h2>
                <input type="radio" name="gender" value="male" checked>
                Male
                <input type="radio" name="gender" value="female">
                Female
				<input type="radio" name="gender" value="trnasgender">
                Other</div>
-->
              <div class="styled-input">
                <input type="text" name="username" required="">
                <label>Username</label>
                <span></span> </div>
              <!--
              <div class="styled-input">
                <label>Email</label>
                <input type="email" name="Email" value="">
              </div>
-->
              <div class="styled-input">
                <input type="password" name="password_1" required="">
                <label>Password</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="password" name="password_2" required="">
                <label>Confirm password</label>
                <span></span> </div>
<!--
              <div class="styled-input">
                <input type="date" name="date_of_birth" value="" required="">
                <label>Date of birth</label>
                <span></span> </div>
-->
			  <div class="styled-input">
                <input class="date" id="datepicker1" name="date_of_birth" type="text" value="Date of birth" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date of birth';}" required="">
                <span></span> </div>
<!--
              <div class="styled-input">
                <input type="text" name="gender" value="" required="">
                <label>Gender</label>
                <span></span> </div>
-->
              <!--
              <div class="styled-input">
                <input type="number" name="mobile_no" value="" required="">
                <label>Mobile number</label>
              </div>
-->
              <div class="styled-input">
                <input type="text" name="blood_group" value="" required="">
                <label>Blood group</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="address" value="" required="">
                <label>Address</label>
                <span></span></div>
              <div class="styled-input">
                <input class="date" id="datepicker" name="Text" type="text" value="Date of Joining" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date of Joining';}" required="">
                <span></span> </div>
              <!--
              <div class="styled-input">
                <label>Date of Joining</label>
                <input type="date" name="date_of_joining" value="">
              </div>
-->
              <div class="styled-input">
                <input type="text" name="hobbies" value="" required="">
                <label>Hobbies</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="interested_in" value="" required="">
                <label>Interested in</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="passion" value="" required="">
                <label>Passion</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="games_interested_in" value="" required="">
                <label>Games interested in</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="running_any_NGO" value="" required="">
                <label>Running any NGO</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="youtube_channel" value="" required="">
                <label>Running any youtube channel</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="profession" value="" required="">
                <label>Profession</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="institute_name" value="" required="">
                <label>College name </label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="department" value="" required="">
                <label>Department </label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="scienceand_technology" value="" required="">
                <label>Interested in scienc and technology</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="start_ups" value="" required="">
                <label>Any startups</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="text" name="musical_instrument" value="" required="">
                <label>Any musical instrument</label>
                <span></span> </div>
				<br>
              <div class="styled-input">
                <input type="file" name="address_proof" value="">
				  <br></br>
                <label>Address proof</label>
				
				
                <span></span> </div>
              <div class="styled-input">
                <input type="file" name="id_proof" value="">
				  <br></br>
                <label>Id proof</label>
                <span></span> </div>
              <div class="styled-input">
                <input type="file" name="personal_photo" value="">
                <label>Personal Photo</label>
				 <br>
                <span></span> </div>
<!--
              <div class="styled-input">
                <select id="category0" required="">
                  <option value="">Specialization*</option>
                  <option value="">Cardiology</option>
                  <option value="">Heart Surgery</option>
                  <option value="">Skin Care</option>
                  <option value="">Body Check-up</option>
                  <option value="">Numerology</option>
                  <option value="">Diagnosis</option>
                  <option value="">Others</option>
                </select>
                <span></span> </div>
              <div class="styled-input">
                <select id="category1" required="">
                  <option value="">Specialization*</option>
                  <option value="">Cardiology</option>
                  <option value="">Heart Surgery</option>
                  <option value="">Skin Care</option>
                  <option value="">Body Check-up</option>
                  <option value="">Numerology</option>
                  <option value="">Diagnosis</option>
                  <option value="">Others</option>
                </select>
                <span></span> </div>
-->
<!--
              <div class="styled-input">
                <select id="category2" name="select1" required="">
                  <option value="">Choose Hospital*</option>
                  <option value="">Hospital 1</option>
                  <option value="">Hospital 2</option>
                  <option value="">Hospital 3</option>
                  <option value="">Hospital 4</option>
                  <option value="">Hospital 5</option>
                </select>
                <span></span> </div>
-->
<!--
              <div class="styled-input">
                <input class="date" id="datepicker" name="Text" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
              </div>
-->
<!--
              <div class="content-wthree2">
                <div class="grid-w3layouts1">
                  <div class="w3-agile1">
                    <label class="rating">blabla<span>*</span></label>
                    <ul>
                      <li>
                        <input type="radio" id="a-option" name="selector1">
                        <label for="a-option">Yes </label>
                        <div class="check"></div>
                      </li>
                      <li>
                        <input type="radio" id="b-option" name="selector1">
                        <label for="b-option">No</label>
                        <div class="check">
                          <div class="inside"></div>
                        </div>
                      </li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
-->
<!--
              <div class="styled-input">
                <label class="list">If yes,Please list it<span></span></label>
                <textarea></textarea>
                <span></span> </div>
-->
              <input type="submit" name="submit" value="Submit">
              <div class="clear"> </div>
            </div>
          </form>
        </div>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="clear"> </div>
  </div>
  <p class="agile-copyright">© Manibharathi <a href="" target="_blank">mani146</a></p>
</section>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
<script src="js/jquery-ui.js"></script> 
<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
</body>
</html>
