<!DOCTYPE html>
<html>

<head>
    <title>User Data</title>
    <style>
    table,
    td {
        border: 1px;
        solid black;
    }

    td {
        padding: 5px;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: white;
        background: black;
        text-align: center;
        border: none
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
		<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
        
</head>

<body style="background-image: linear-gradient(to right, #000000, #660066, #ffb3ff);">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="input-group">
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i> Star Way User <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <span class="input-group-addon" style="background:none; border:none;padding-top:15px;color:white">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Add users start-->
    <h3 style="text-align:center;color:#ffffff">Create Account</h3>
    <form name="userinput" method="post" data-toggle="validator" oninput='confirmPassword.setCustomValidity(confirmPassword.value != password.value ? "Passwords do not match." : "")'>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fullname" type="text" class="form-control" name="name" placeholder="Full Name"
                            required>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email address"
                            required>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i
                                        class="glyphicon glyphicon glyphicon-earphone"></i></span>
                                <select class="form-control" id="exampleFormControlSelect1" id="countryCode" name="countryCode">
                                    <option id="DZ" value="213">Algeria (+213)</option>
                                    <option id="AD" value="376">Andorra (+376)</option>
                                    <option id="AO" value="244">Angola (+244)</option>
                                    <option id="AI" value="1264">Anguilla (+1264)</option>
                                    <option id="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                    <option id="AR" value="54">Argentina (+54)</option>
                                    <option id="AM" value="374">Armenia (+374)</option>
                                    <option id="AW" value="297">Aruba (+297)</option>
                                    <option id="AU" value="61">Australia (+61)</option>
                                    <option id="AT" value="43">Austria (+43)</option>
                                    <option id="AZ" value="994">Azerbaijan (+994)</option>
                                    <option id="BS" value="1242">Bahamas (+1242)</option>
                                    <option id="BH" value="973">Bahrain (+973)</option>
                                    <option id="BD" value="880">Bangladesh (+880)</option>
                                    <option id="BB" value="1246">Barbados (+1246)</option>
                                    <option id="BY" value="375">Belarus (+375)</option>
                                    <option id="BE" value="32">Belgium (+32)</option>
                                    <option id="BZ" value="501">Belize (+501)</option>
                                    <option id="BJ" value="229">Benin (+229)</option>
                                    <option id="BM" value="1441">Bermuda (+1441)</option>
                                    <option id="BT" value="975">Bhutan (+975)</option>
                                    <option id="BO" value="591">Bolivia (+591)</option>
                                    <option id="BA" value="387">Bosnia Herzegovina (+387)</option>
                                    <option id="BW" value="267">Botswana (+267)</option>
                                    <option id="BR" value="55">Brazil (+55)</option>
                                    <option id="BN" value="673">Brunei (+673)</option>
                                    <option id="BG" value="359">Bulgaria (+359)</option>
                                    <option id="BF" value="226">Burkina Faso (+226)</option>
                                    <option id="BI" value="257">Burundi (+257)</option>
                                    <option id="KH" value="855">Cambodia (+855)</option>
                                    <option id="CM" value="237">Cameroon (+237)</option>
                                    <option id="CA" value="1">Canada (+1)</option>
                                    <option id="CV" value="238">Cape Verde Islands (+238)</option>
                                    <option id="KY" value="1345">Cayman Islands (+1345)</option>
                                    <option id="CF" value="236">Central African Republic (+236)</option>
                                    <option id="CL" value="56">Chile (+56)</option>
                                    <option id="CN" value="86">China (+86)</option>
                                    <option id="CO" value="57">Colombia (+57)</option>
                                    <option id="KM" value="269">Comoros (+269)</option>
                                    <option id="CG" value="242">Congo (+242)</option>
                                    <option id="CK" value="682">Cook Islands (+682)</option>
                                    <option id="CR" value="506">Costa Rica (+506)</option>
                                    <option id="HR" value="385">Croatia (+385)</option>
                                    <option id="CU" value="53">Cuba (+53)</option>
                                    <option id="CY" value="90392">Cyprus North (+90392)</option>
                                    <option id="CY" value="357">Cyprus South (+357)</option>
                                    <option id="CZ" value="42">Czech Republic (+42)</option>
                                    <option id="DK" value="45">Denmark (+45)</option>
                                    <option id="DJ" value="253">Djibouti (+253)</option>
                                    <option id="DM" value="1809">Dominica (+1809)</option>
                                    <option id="DO" value="1809">Dominican Republic (+1809)</option>
                                    <option id="EC" value="593">Ecuador (+593)</option>
                                    <option id="EG" value="20">Egypt (+20)</option>
                                    <option id="SV" value="503">El Salvador (+503)</option>
                                    <option id="GQ" value="240">Equatorial Guinea (+240)</option>
                                    <option id="ER" value="291">Eritrea (+291)</option>
                                    <option id="EE" value="372">Estonia (+372)</option>
                                    <option id="ET" value="251">Ethiopia (+251)</option>
                                    <option id="FK" value="500">Falkland Islands (+500)</option>
                                    <option id="FO" value="298">Faroe Islands (+298)</option>
                                    <option id="FJ" value="679">Fiji (+679)</option>
                                    <option id="FI" value="358">Finland (+358)</option>
                                    <option id="FR" value="33">France (+33)</option>
                                    <option id="GF" value="594">French Guiana (+594)</option>
                                    <option id="PF" value="689">French Polynesia (+689)</option>
                                    <option id="GA" value="241">Gabon (+241)</option>
                                    <option id="GM" value="220">Gambia (+220)</option>
                                    <option id="GE" value="7880">Georgia (+7880)</option>
                                    <option id="DE" value="49">Germany (+49)</option>
                                    <option id="GH" value="233">Ghana (+233)</option>
                                    <option id="GI" value="350">Gibraltar (+350)</option>
                                    <option id="GR" value="30">Greece (+30)</option>
                                    <option id="GL" value="299">Greenland (+299)</option>
                                    <option id="GD" value="1473">Grenada (+1473)</option>
                                    <option id="GP" value="590">Guadeloupe (+590)</option>
                                    <option id="GU" value="671">Guam (+671)</option>
                                    <option id="GT" value="502">Guatemala (+502)</option>
                                    <option id="GN" value="224">Guinea (+224)</option>
                                    <option id="GW" value="245">Guinea - Bissau (+245)</option>
                                    <option id="GY" value="592">Guyana (+592)</option>
                                    <option id="HT" value="509">Haiti (+509)</option>
                                    <option id="HN" value="504">Honduras (+504)</option>
                                    <option id="HK" value="852">Hong Kong (+852)</option>
                                    <option id="HU" value="36">Hungary (+36)</option>
                                    <option id="IS" value="354">Iceland (+354)</option>
                                    <option id="IN" value="91">India (+91)</option>
                                    <option id="ID" value="62">Indonesia (+62)</option>
                                    <option id="IR" value="98">Iran (+98)</option>
                                    <option id="IQ" value="964">Iraq (+964)</option>
                                    <option id="IE" value="353">Ireland (+353)</option>
                                    <option id="IL" value="972">Israel (+972)</option>
                                    <option id="IT" value="39">Italy (+39)</option>
                                    <option id="JM" value="1876">Jamaica (+1876)</option>
                                    <option id="JP" value="81">Japan (+81)</option>
                                    <option id="JO" value="962">Jordan (+962)</option>
                                    <option id="KZ" value="7">Kazakhstan (+7)</option>
                                    <option id="KE" value="254">Kenya (+254)</option>
                                    <option id="KI" value="686">Kiribati (+686)</option>
                                    <option id="KP" value="850">Korea North (+850)</option>
                                    <option id="KR" value="82">Korea South (+82)</option>
                                    <option id="KW" value="965">Kuwait (+965)</option>
                                    <option id="KG" value="996">Kyrgyzstan (+996)</option>
                                    <option id="LA" value="856">Laos (+856)</option>
                                    <option id="LV" value="371">Latvia (+371)</option>
                                    <option id="LB" value="961">Lebanon (+961)</option>
                                    <option id="LS" value="266">Lesotho (+266)</option>
                                    <option id="LR" value="231">Liberia (+231)</option>
                                    <option id="LY" value="218">Libya (+218)</option>
                                    <option id="LI" value="417">Liechtenstein (+417)</option>
                                    <option id="LT" value="370">Lithuania (+370)</option>
                                    <option id="LU" value="352">Luxembourg (+352)</option>
                                    <option id="MO" value="853">Macao (+853)</option>
                                    <option id="MK" value="389">Macedonia (+389)</option>
                                    <option id="MG" value="261">Madagascar (+261)</option>
                                    <option id="MW" value="265">Malawi (+265)</option>
                                    <option id="MY" value="60">Malaysia (+60)</option>
                                    <option id="MV" value="960">Maldives (+960)</option>
                                    <option id="ML" value="223">Mali (+223)</option>
                                    <option id="MT" value="356">Malta (+356)</option>
                                    <option id="MH" value="692">Marshall Islands (+692)</option>
                                    <option id="MQ" value="596">Martinique (+596)</option>
                                    <option id="MR" value="222">Mauritania (+222)</option>
                                    <option id="YT" value="269">Mayotte (+269)</option>
                                    <option id="MX" value="52">Mexico (+52)</option>
                                    <option id="FM" value="691">Micronesia (+691)</option>
                                    <option id="MD" value="373">Moldova (+373)</option>
                                    <option id="MC" value="377">Monaco (+377)</option>
                                    <option id="MN" value="976">Mongolia (+976)</option>
                                    <option id="MS" value="1664">Montserrat (+1664)</option>
                                    <option id="MA" value="212">Morocco (+212)</option>
                                    <option id="MZ" value="258">Mozambique (+258)</option>
                                    <option id="MN" value="95">Myanmar (+95)</option>
                                    <option id="NA" value="264">Namibia (+264)</option>
                                    <option id="NR" value="674">Nauru (+674)</option>
                                    <option id="NP" value="977">Nepal (+977)</option>
                                    <option id="NL" value="31">Netherlands (+31)</option>
                                    <option id="NC" value="687">New Caledonia (+687)</option>
                                    <option id="NZ" value="64">New Zealand (+64)</option>
                                    <option id="NI" value="505">Nicaragua (+505)</option>
                                    <option id="NE" value="227">Niger (+227)</option>
                                    <option id="NG" value="234">Nigeria (+234)</option>
                                    <option id="NU" value="683">Niue (+683)</option>
                                    <option id="NF" value="672">Norfolk Islands (+672)</option>
                                    <option id="NP" value="670">Northern Marianas (+670)</option>
                                    <option id="NO" value="47">Norway (+47)</option>
                                    <option id="OM" value="968">Oman (+968)</option>
                                    <option id="PW" value="680">Palau (+680)</option>
                                    <option id="PA" value="507">Panama (+507)</option>
                                    <option id="PG" value="675">Papua New Guinea (+675)</option>
                                    <option id="PY" value="595">Paraguay (+595)</option>
                                    <option id="PE" value="51">Peru (+51)</option>
                                    <option id="PH" value="63">Philippines (+63)</option>
                                    <option id="PL" value="48">Poland (+48)</option>
                                    <option id="PT" value="351">Portugal (+351)</option>
                                    <option id="PR" value="1787">Puerto Rico (+1787)</option>
                                    <option id="QA" value="974">Qatar (+974)</option>
                                    <option id="RE" value="262">Reunion (+262)</option>
                                    <option id="RO" value="40">Romania (+40)</option>
                                    <option id="RU" value="7">Russia (+7)</option>
                                    <option id="RW" value="250">Rwanda (+250)</option>
                                    <option id="SM" value="378">San Marino (+378)</option>
                                    <option id="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                    <option id="SA" value="966">Saudi Arabia (+966)</option>
                                    <option id="SN" value="221">Senegal (+221)</option>
                                    <option id="CS" value="381">Serbia (+381)</option>
                                    <option id="SC" value="248">Seychelles (+248)</option>
                                    <option id="SL" value="232">Sierra Leone (+232)</option>
                                    <option id="SG" value="65">Singapore (+65)</option>
                                    <option id="SK" value="421">Slovak Republic (+421)</option>
                                    <option id="SI" value="386">Slovenia (+386)</option>
                                    <option id="SB" value="677">Solomon Islands (+677)</option>
                                    <option id="SO" value="252">Somalia (+252)</option>
                                    <option id="ZA" value="27">South Africa (+27)</option>
                                    <option id="ES" value="34">Spain (+34)</option>
                                    <option id="LK" value="94">Sri Lanka (+94)</option>
                                    <option id="SH" value="290">St. Helena (+290)</option>
                                    <option id="KN" value="1869">St. Kitts (+1869)</option>
                                    <option id="SC" value="1758">St. Lucia (+1758)</option>
                                    <option id="SD" value="249">Sudan (+249)</option>
                                    <option id="SR" value="597">Suriname (+597)</option>
                                    <option id="SZ" value="268">Swaziland (+268)</option>
                                    <option id="SE" value="46">Sweden (+46)</option>
                                    <option id="CH" value="41">Switzerland (+41)</option>
                                    <option id="SI" value="963">Syria (+963)</option>
                                    <option id="TW" value="886">Taiwan (+886)</option>
                                    <option id="TJ" value="7">Tajikstan (+7)</option>
                                    <option id="TH" value="66">Thailand (+66)</option>
                                    <option id="TG" value="228">Togo (+228)</option>
                                    <option id="TO" value="676">Tonga (+676)</option>
                                    <option id="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                    <option id="TN" value="216">Tunisia (+216)</option>
                                    <option id="TR" value="90">Turkey (+90)</option>
                                    <option id="TM" value="7">Turkmenistan (+7)</option>
                                    <option id="TM" value="993">Turkmenistan (+993)</option>
                                    <option id="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                    <option id="TV" value="688">Tuvalu (+688)</option>
                                    <option id="UG" value="256">Uganda (+256)</option>
                                    <option id="GB" value="44">UK (+44)</option>
                                    <option id="UA" value="380">Ukraine (+380)</option>
                                    <option id="AE" value="971">United Arab Emirates (+971)</option>
                                    <option id="UY" value="598">Uruguay (+598)</option>
                                    <option id="US" value="1">USA (+1)</option>
                                    <option id="UZ" value="7">Uzbekistan (+7)</option>
                                    <option id="VU" value="678">Vanuatu (+678)</option>
                                    <option id="VA" value="379">Vatican City (+379)</option>
                                    <option id="VE" value="58">Venezuela (+58)</option>
                                    <option id="VN" value="84">Vietnam (+84)</option>
                                    <option id="VG" value="84">Virgin Islands - British (+1284)</option>
                                    <option id="VI" value="84">Virgin Islands - US (+1340)</option>
                                    <option id="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                    <option id="YE" value="969">Yemen (North)(+969)</option>
                                    <option id="YE" value="967">Yemen (South)(+967)</option>
                                    <option id="ZM" value="260">Zambia (+260)</option>
                                    <option id="ZW" value="263">Zimbabwe (+263)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <input id="mobile" type="text" class="form-control" maxlength="10" name="mobile"  
                                placeholder="Phone number">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                            required>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="confirmPassword" type="password" class="form-control" name="confirmPassword"
                            placeholder="Confirm password" required>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="text-align:center;">
                    <input type="submit" name="save" value="Create Account" class="btn btn-primary createacc" />
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="text-align:center;">
                    <h5 style="color:#ffffff">Have an account?<a href="<?php echo site_url('Login/login/');  ?>"> Log In</a></h5>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

    </form>
    <!-- Add users end-->

    <script type="text/javascript">
    $(".createacc").click(function() {
        // if(document.getElementsByName("confirmPassword").value ){
        //     alert("You Have Successfully Created an Account");
        // }

    });

    </script>


    <div class="footer page-footer font-small blue pt-4">
        <hr style="visibility:hidden">
        <p>© 2020 Copyright <a href="#"> Janadhi Uyanhewa </a></p>
    </div>
    <!-- Footer -->
</body>

</html>