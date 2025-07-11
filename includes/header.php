<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>IdWeek 2025 | Annual Meeting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/flatpickr.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top transparent" id="mainNavbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <h1>IdWeek 2025</h1>
    </a>
    <button class="navbar-toggler mobile-toggler" type="button" id="mobileToggle">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-none d-lg-flex" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-center gap-3">
        <li class="nav-item"><a class="nav-link rolling-text" href="index.php"><i class="fa-solid fa-house me-2"></i>Home</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="about-us.php"><i class="fa-solid fa-eject me-2"></i> About</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="registration.php"><i class="fa-regular fa-registered me-2"></i> Register</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="housing.php"><i class="fa-solid fa-hotel me-2"></i>Housing</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="contact-us.php"><i class="fa-solid fa-address-book me-2"></i>Contact</a></li>
        <li class="nav-item">
          <button type="button" class="btn btn-slide-fill" data-bs-toggle="modal" data-bs-target="#exampleModal">Group Registration</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Mobile Side Menu -->
<div class="mobile-menu" id="mobileMenu">
  <button class="close-btn" id="closeMobile">×</button>
  <ul>
    <li><a href="index.php"><i class="fa-solid fa-house me-2"></i> Home</a></li>
    <li><a href="about-us.php"><i class="fa-solid fa-eject me-2"></i> About</a></li>
    <li><a href="registration.php"><i class="fa-regular fa-registered me-2"></i>Register</a></li>
    <li><a href="housing.php"><i class="fa-solid fa-hotel me-2"></i>Housing</a></li>
    <li><a href="contact-us.php"><i class="fa-solid fa-address-book me-2"></i>Contact</a></li>
    <li>
      <button type="button" class="btn btn-slide-fill" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Group Registration
      </button>
    </li>
  </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="groupform">
      <div class="modal-body">
        <div class="form-section">
          <button type="button" class="btn-close white" data-bs-dismiss="modal" aria-label="Close"></button>
          <h2 class="text-center mb-4">Group Registration</h2>
           <form action="thanks.php" name="form3" id="form3" method="post" class="form" onsubmit="return group_frm();">
            <div class="form-row row">
              <!-- Full Name -->
              <div class="col-12 form-group position-relative">
                <div class="input-wrapper">
                  <i class="fas fa-user form-control-icon"></i>
                  <input type="text" name="Name" id="txtNameGroup" class="form-control with-icon" placeholder="Full Name" required>
                  <div class="invalid-feedback">Full Name is required.</div>
                </div>
              </div>

              <!-- Email -->
              <div class="col-12 form-group position-relative">
                    <div class="input-wrapper">
                      <i class="fas fa-envelope form-control-icon"></i>
                      <input type="email" name="Email" id="txtEmails" class="form-control with-icon" placeholder="Enter Email Address" required>
                    </div>
                  </div>

                  <!-- Confirm Email -->
                    <div class="col-12 form-group position-relative">
                <div class="input-wrapper">
                  <i class="fas fa-envelope form-control-icon"></i>
                  <input type="email" name="Email" id="regigroup" class="form-control with-icon" placeholder="Re Enter Email Address" required>
                <div id="email-error" class="invalid-feedback">Emails do not match.</div>
                </div>
              </div>

              <!-- Contact Number -->
              <div class="col-12 form-group position-relative">
                <div class="input-wrapper">
                  <i class="fas fa-phone form-control-icon"></i>
                  <input type="text" name="Mobile" id="txtMobileGroup" class="form-control with-icon" placeholder="Contact Number" required>
                </div>
              </div>

              <!-- Occupation -->
              <div class="col-12 form-group position-relative">
                <div class="input-wrapper">
                  <i class="fas fa-briefcase form-control-icon"></i>
                  <input type="text" name="Occupation" id="txtoccupationGroup" class="form-control with-icon" placeholder="Occupation" required>
                </div>
              </div>

              <!-- Country -->
              <div class="col-md-6 form-group position-relative">
                <div class="input-wrapper">
                  <i class="fas fa-globe form-control-icon"></i>
                  <select class="form-control with-icon" name="Country" id="txtcountryGroup" required>
                    <option value="" selected="selected" disabled="">Select Country</option>
                    <optgroup label="North America">
                      <option value="US">United States</option>
                      <option value="UM">United States Minor Outlying Islands</option>
                      <option value="CA">Canada</option>
                      <option value="Mexico">Mexico</option>
                      <option value="AI">Anguilla</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AW">Aruba</option>
                      <option value="BS">Bahamas</option>
                      <option value="BB">Barbados</option>
                      <option value="BZ">Belize</option>
                      <option value="BM">Bermuda</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CU">Cuba</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="SV">El Salvador</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GT">Guatemala</option>
                      <option value="HT">Haiti</option>
                      <option value="HN">Honduras</option>
                      <option value="JM">Jamaica</option>
                      <option value="MQ">Martinique</option>
                      <option value="MS">Montserrat</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NI">Nicaragua</option>
                      <option value="PA">Panama</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="VI">US Virgin Islands</option>
                    </optgroup>
                    <optgroup label="South America">
                      <option value="AR">Argentina</option>
                      <option value="BO">Bolivia</option>
                      <option value="BR">Brazil</option>
                      <option value="CL">Chile</option>
                      <option value="CO">Colombia</option>
                      <option value="EC">Ecuador</option>
                      <option value="FK">Falkland Islands (Malvinas)</option>
                      <option value="GF">French Guiana</option>
                      <option value="GY">Guyana</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="SR">Suriname</option>
                      <option value="UY">Uruguay</option>
                      <option value="VE">Venezuela</option>
                    </optgroup>
                    <optgroup label="Europe">
                      <option value="GB">United Kingdom</option>
                      <option value="AL">Albania</option>
                      <option value="AD">Andorra</option>
                      <option value="AT">Austria</option>
                      <option value="BY">Belarus</option>
                      <option value="BE">Belgium</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BG">Bulgaria</option>
                      <option value="HR">Croatia (Hrvatska)</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="FR">France</option>
                      <option value="GI">Gibraltar</option>
                      <option value="DE">Germany</option>
                      <option value="GR">Greece</option>
                      <option value="VA">Holy See (Vatican City State)</option>
                      <option value="HU">Hungary</option>
                      <option value="IT">Italy</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MK">Macedonia</option>
                      <option value="MT">Malta</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="ME">Montenegro</option>
                      <option value="NL">Netherlands</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="RO">Romania</option>
                      <option value="SM">San Marino</option>
                      <option value="RS">Serbia</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="ES">Spain</option>
                      <option value="UA">Ukraine</option>
                      <option value="DK">Denmark</option>
                      <option value="EE">Estonia</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FI">Finland</option>
                      <option value="GL">Greenland</option>
                      <option value="IS">Iceland</option>
                      <option value="IE">Ireland</option>
                      <option value="LV">Latvia</option>
                      <option value="LT">Lithuania</option>
                      <option value="NO">Norway</option>
                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="TR">Turkey</option>
                    </optgroup>
                    <optgroup label="Asia">
                      <option value="AF">Afghanistan</option>
                      <option value="AM">Armenia</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BT">Bhutan</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="BN">Brunei Darussalam</option>
                      <option value="KH">Cambodia</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="GE">Georgia</option>
                      <option value="HK">Hong Kong</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IL">Israel</option>
                      <option value="JP">Japan</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KP">Korea, Democratic People's Republic of</option>
                      <option value="KR">Korea, Republic of</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Lao</option>
                      <option value="LB">Lebanon</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="MN">Mongolia</option>
                      <option value="MM">Myanmar (Burma)</option>
                      <option value="NP">Nepal</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PH">Philippines</option>
                      <option value="QA">Qatar</option>
                      <option value="RU">Russian Federation</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SG">Singapore</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TH">Thailand</option>
                      <option value="TP">East Timor</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VN">Vietnam</option>
                      <option value="YE">Yemen</option>
                    </optgroup>
                    <optgroup label="Australia / Oceania">
                      <option value="AS">American Samoa</option>
                      <option value="AU">Australia</option>
                      <option value="CK">Cook Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="PF">French Polynesia (Tahiti)</option>
                      <option value="GU">Guam</option>
                      <option value="KB">Kiribati</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="FM">Micronesia, Federated States of</option>
                      <option value="NR">Nauru</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NU">Niue</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="PW">Palau</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PN">Pitcairn</option>
                      <option value="WS">Samoa</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TV">Tuvalu</option>
                      <option value="VU">Vanuatu</option>
                      <option value="WF">Wallis and Futuna Islands</option>
                    </optgroup>
                    <optgroup label="Africa">
                      <option value="DZ">Algeria</option>
                      <option value="AO">Angola</option>
                      <option value="BJ">Benin</option>
                      <option value="BW">Botswana</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="CM">Cameroon</option>
                      <option value="CV">Cape Verde</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo</option>
                      <option value="CD">Congo, the Democratic Republic of the</option>
                      <option value="DJ">Djibouti</option>
                      <option value="EG">Egypt</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="ET">Ethiopia</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GH">Ghana</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="CI">Cote d'Ivoire (Ivory Coast)</option>
                      <option value="KE">Kenya</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="ML">Mali</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="NA">Namibia</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="RE">Reunion</option>
                      <option value="RW">Rwanda</option>
                      <option value="ST">Sao Tome and Principe</option>
                      <option value="SH">Saint Helena</option>
                      <option value="SN">Senegal</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="SS">South Sudan</option>
                      <option value="SD">Sudan</option>
                      <option value="SZ">Swaziland</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TG">Togo</option>
                      <option value="TN">Tunisia</option>
                      <option value="UG">Uganda</option>
                      <option value="EH">Western Sahara</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </optgroup>
                    <option value="AQ">Antarctica</option>
                  </select>
                </div>
              </div>

              <!-- Delegates -->
              <div class="col-md-6 form-group position-relative">
                <div class="input-wrapper delic">
                  <i class="fas fa-users form-control-icon"></i>
                  <select class="form-control with-icon" name="Delegates" id="txtdelegatesGroup" required>
                    <option value="" selected="selected" disabled="">No. of Delegates</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
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
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="25+">25+</option>
                  </select>
                </div>
              </div>

              <!-- Address -->
              <div class="col-12 form-group position-relative">
                <div class="input-wrapper addy">
                  <i class="fas fa-home form-control-icon"></i>
                  <textarea class="form-control with-icon" name="Address" id="txtaddressGroup" rows="2" placeholder="Address" required></textarea>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="col-12 text-center">
                <button type="submit" class="playbtn">
                  Submit Registration
                  <span></span><span></span><span></span><span></span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- JS -->
<script>
  const navbar = document.getElementById('mainNavbar');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileToggle = document.getElementById('mobileToggle');
  const closeMobile = document.getElementById('closeMobile');

  // Scroll behavior for navbar
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
    navbar.classList.toggle('transparent', window.scrollY <= 50);
  });

  // Mobile menu open/close
  mobileToggle.addEventListener('click', () => {
    mobileMenu.classList.add('active');
  });

  closeMobile.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
  });
</script>


  


