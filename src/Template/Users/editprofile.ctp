            <!-- START PAGE CONTENT WRAPPER -->
            <div class="page-content-wrapper ">
              <!-- START PAGE CONTENT -->
              <div class="content ">
                <div class="social-wrapper">
                  <div class="social " data-pages="social">
                  <div class="container">
                    <h3 class="m-t-50">Edit Profile</h3>
                  <!-- START PANEL -->
                  <div class="panel panel-transparent">
                  <div class="panel-body">
                    <form id="form-project" role="form" autocomplete="off">
                      <h4>Basic Information</h4>
                      <div class="form-group-attached">
                        <div class="row clearfix">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>First name</label>
                              <input type="text" class="form-control" name="firstName" value="<?= $user['first_name']?>" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Last name</label>
                              <input type="text" class="form-control" name="lastName" value="<?= $user['last_name']?>">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default form-group-default-select2">
                              <label class="">Gender</label>
                              <select class="full-width" data-placeholder="Select" data-init-plugin="select2">
                                  <option <?php if($user['gender'] == 'm' ){?>selected="selected"<?php } ?> value="m">Male</option>
                                  <option <?php if($user['gender'] == 'f' ){?>selected="selected"<?php } ?> value="f">Female</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label class="">About Me</label>
                              <textarea class="form-control" name="aboutme" id="aboutme"><?= $user['brief_info'] ?></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label class="">Birthdate</label>
                              <input type="email" id="datepicker-component2" value="<?= $user['dob'] ?>" placeholder="Pick a date" name="dob" class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Languages Known</label>
                              <input type="text" class="autonumeric form-control" value="<?= $user['languages'] ?>" data-a-sep="," name="languages">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label class="">What makes me cool</label>
                              <textarea class="form-control" name="profile_status" id="aboutme"><?= $user['profile_status'] ?></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label>Referred By?</label>
                              <input type="text" class="form-control" value="<?= $user['referal'] ?>" name="referal">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <!-- START PANEL -->
                            <div class="form-group form-group-default">
                                <label class="dropzone-label">Profile Picture</label>
                                <div class="tools">
                                  <a class="collapse" href="javascript:;"></a>
                                  <a class="config" data-toggle="modal" href="#grid-config"></a>
                                  <a class="reload" href="javascript:;"></a>
                                  <a class="remove" href="javascript:;"></a>
                                </div>
                              <div class="no-scroll no-padding" id="dropzone-avatar">
                                <form action="/file-upload" class="dropzone no-margin">
                                  <div class="fallback">
                                    <input name="file" type="file" multiple/>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <!-- END PANEL -->
                          </div>
                          <div class="col-md-6">
                            <!-- START PANEL -->
                            <div class="form-group form-group-default">
                                <label class="dropzone-label">Cover Picture</label>
                                <div class="tools">
                                  <a class="collapse" href="javascript:;"></a>
                                  <a class="config" data-toggle="modal" href="#grid-config"></a>
                                  <a class="reload" href="javascript:;"></a>
                                  <a class="remove" href="javascript:;"></a>
                                </div>
                              <div class="no-scroll no-padding" id="dropzone-coverpic">
                                <form action="/file-upload" class="dropzone no-margin">
                                  <div class="fallback">
                                    <input name="file" type="file" />
                                  </div>
                                </form>
                              </div>
                            </div>
                            <!-- END PANEL -->
                          </div>
                      </div>
                    </div>

                      <h4 class="m-t-10">Contact Information</h4>
                      <div class="form-group-attached">
                        <div class="row clearfix">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Mobile Number </label>
                              <input type="text" class="form-control" value="<?= $user['mobile'] ?>" name="mobile" id="phone">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Landline Number </label>
                              <input type="text" class="form-control" value="<?= $user['landline'] ?>" name="landline" id="phone">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Address </label>
                              <textarea class="form-control" value="<?= $user['address'] ?>" name="address" id="aboutme"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label>City/Town </label>
                              <input type="text" class="form-control" value="<?= $user['city_town'] ?>" name="city_town">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>ZIP code</label>
                              <input type="text" class="form-control" value="<?= $user['zipcode'] ?>" name="zipcode">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>State</label>
                              <input type="text" class="form-control" value="<?= $user['state'] ?>" name="state">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label>Country </label>
                              <select class="full-width" data-init-plugin="select2">
                              <option selected="selected" value="">Select a Country</option>
                              <option value="COM_COMMUNITY_LANG_NAME_AFGHANISTAN">Afghanistan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ALANDISLANDS">Åland Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ALBANIA">Albania</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ALGERIA">Algeria</option>
                              <option value="COM_COMMUNITY_LANG_NAME_AMERICANSAMOA">American Samoa</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ANDORRA">Andorra</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ANGOLA">Angola</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ANGUILLA">Anguilla</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ANTARCTICA">Antarctica</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ANTIGUAANDBARBUDA">Antigua And Barbuda</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ARGENTINA">Argentina</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ARMENIA">Armenia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ARUBA">Aruba</option>
                              <option value="COM_COMMUNITY_LANG_NAME_AUSTRALIA">Australia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_AUSTRIA">Austria</option>
                              <option value="COM_COMMUNITY_LANG_NAME_AZERBAIJAN">Azerbaijan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BAHAMAS">Bahamas</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BAHRAIN">Bahrain</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BANGLADESH">Bangladesh</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BARBADOS">Barbados</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BELARUS">Belarus</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BELGIUM">Belgium</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BELIZE">Belize</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BENIN">Benin</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BERMUDA">Bermuda</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BHUTAN">Bhutan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BOLIVIAPLURINATIONALSTATEOF">Bolivia, PLURINATIONAL STATE OF</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BOSNIAANDHERZEGOVINA">Bosnia And Herzegovina</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BOTSWANA">Botswana</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BOUVETISLAND">Bouvet Island</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BRAZIL">Brazil</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BRITISHINDIANOCEANTERRITORY">British Indian Ocean Territory</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BRUNEIDARUSSALAM">Brunei Darussalam</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BULGARIA">Bulgaria</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BURKINAFASO">Burkina Faso</option>
                              <option value="COM_COMMUNITY_LANG_NAME_BURUNDI">Burundi</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CAMBODIA">Cambodia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CAMEROON">Cameroon</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CANADA">Canada</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CAPEVERDE">Cape Verde</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CAYMANISLANDS">Cayman Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CENTRALAFRICANREPUBLIC">Central African Republic</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CHAD">Chad</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CHILE">Chile</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CHINA">China</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CHRISTMASISLAND">Christmas Island</option>
                              <option value="COM_COMMUNITY_LANG_NAME_COCOSKEELINGISLANDS">Cocos (KEELING) Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_COLOMBIA">Colombia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_COMOROS">Comoros</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CONGO">Congo</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CONGOTHEDEMOCRATICREPUBLICOFTHE">Congo, The Democratic Republic Of The</option>
                              <option value="COM_COMMUNITY_LANG_NAME_COOKISLANDS">Cook Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_COSTARICA">Costa Rica</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CROATIA">Croatia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CTEDIVOIRE">CÃ”te D'Ivoire</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CUBA">Cuba</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CYPRUS">Cyprus</option>
                              <option value="COM_COMMUNITY_LANG_NAME_CZECHREPUBLIC">Czech Republic</option>
                              <option value="COM_COMMUNITY_LANG_NAME_DENMARK">Denmark</option>
                              <option value="COM_COMMUNITY_LANG_NAME_DJIBOUTI">Djibouti</option>
                              <option value="COM_COMMUNITY_LANG_NAME_DOMINICA">Dominica</option>
                              <option value="COM_COMMUNITY_LANG_NAME_DOMINICANREPUBLIC">Dominican Republic</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ECUADOR">Ecuador</option>
                              <option value="COM_COMMUNITY_LANG_NAME_EGYPT">Egypt</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ELSALVADOR">El Salvador</option>
                              <option value="COM_COMMUNITY_LANG_NAME_EQUATORIALGUINEA">Equatorial Guinea</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ERITREA">Eritrea</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ESTONIA">Estonia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ETHIOPIA">Ethiopia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FALKLANDISLANDSMALVINAS">Falkland Islands (MALVINAS)</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FAROEISLANDS">Faroe Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FIJI">Fiji</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FINLAND">Finland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FRANCE">France</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FRENCHGUIANA">French Guiana</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FRENCHPOLYNESIA">French Polynesia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_FRENCHSOUTHERNTERRITORIES">French Southern Territories</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GABON">Gabon</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GAMBIA">Gambia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GEORGIA">Georgia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GERMANY">Germany</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GHANA">Ghana</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GIBRALTAR">Gibraltar</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GREECE">Greece</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GREENLAND">Greenland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GRENADA">Grenada</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUADELOUPE">Guadeloupe</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUAM">Guam</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUATEMALA">Guatemala</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUERNSEY">Guernsey</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUINEA">Guinea</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUINEABISSAU">Guinea-Bissau</option>
                              <option value="COM_COMMUNITY_LANG_NAME_GUYANA">Guyana</option>
                              <option value="COM_COMMUNITY_LANG_NAME_HAITI">Haiti</option>
                              <option value="COM_COMMUNITY_LANG_NAME_HEARDISLANDANDMCDONALDISLANDS">Heard Island And Mcdonald Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_HOLYSEEVATICANCITYSTATE">Holy See (VATICAN CITY STATE)</option>
                              <option value="COM_COMMUNITY_LANG_NAME_HONDURAS">Honduras</option>
                              <option value="COM_COMMUNITY_LANG_NAME_HONGKONG">Hong Kong</option>
                              <option value="COM_COMMUNITY_LANG_NAME_HUNGARY">Hungary</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ICELAND">Iceland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_INDIA">India</option>
                              <option value="COM_COMMUNITY_LANG_NAME_INDONESIA">Indonesia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_IRANISLAMICREPUBLICOF">Iran, Islamic Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_IRAQ">Iraq</option>
                              <option value="COM_COMMUNITY_LANG_NAME_IRELAND">Ireland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ISLEOFMAN">Isle Of Man</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ISRAEL">Israel</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ITALY">Italy</option>
                              <option value="COM_COMMUNITY_LANG_NAME_JAMAICA">Jamaica</option>
                              <option value="COM_COMMUNITY_LANG_NAME_JAPAN">Japan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_JERSEY">Jersey</option>
                              <option value="COM_COMMUNITY_LANG_NAME_JORDAN">Jordan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KAZAKHSTAN">Kazakhstan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KENYA">Kenya</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KIRIBATI">Kiribati</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KOREADEMOCRATICPEOPLESREPUBLICOF">Korea, Democratic People's Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KOREAREPUBLICOF">Korea, Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KUWAIT">Kuwait</option>
                              <option value="COM_COMMUNITY_LANG_NAME_KYRGYZSTAN">Kyrgyzstan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LAOPEOPLESDEMOCRATICREPUBLIC">Lao People's Democratic Republic</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LATVIA">Latvia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LEBANON">Lebanon</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LESOTHO">Lesotho</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LIBERIA">Liberia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LIBYANARABJAMAHIRIYA">Libyan Arab Jamahiriya</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LIECHTENSTEIN">Liechtenstein</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LITHUANIA">Lithuania</option>
                              <option value="COM_COMMUNITY_LANG_NAME_LUXEMBOURG">Luxembourg</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MACAO">Macao</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MACEDONIATHEFORMERYUGOSLAVREPUBLICOF">Macedonia, The Former Yugoslav Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MADAGASCAR">Madagascar</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MALAWI">Malawi</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MALAYSIA">Malaysia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MALDIVES">Maldives</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MALI">Mali</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MALTA">Malta</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MARSHALLISLANDS">Marshall Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MARTINIQUE">Martinique</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MAURITANIA">Mauritania</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MAURITIUS">Mauritius</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MAYOTTE">Mayotte</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MEXICO">Mexico</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MICRONESIAFEDERATEDSTATESOF">Micronesia, Federated States Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MOLDOVAREPUBLICOF">Moldova, Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MONACO">Monaco</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MONGOLIA">Mongolia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MONTENEGRO">Montenegro</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MONTSERRAT">Montserrat</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MOROCCO">Morocco</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MOZAMBIQUE">Mozambique</option>
                              <option value="COM_COMMUNITY_LANG_NAME_MYANMAR">Myanmar</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NAMIBIA">Namibia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NAURU">Nauru</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NEPAL">Nepal</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NETHERLANDS">Netherlands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NETHERLANDSANTILLES">Netherlands Antilles</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NEWCALEDONIA">New Caledonia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NEWZEALAND">New Zealand</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NICARAGUA">Nicaragua</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NIGER">Niger</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NIGERIA">Nigeria</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NIUE">Niue</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NORFOLKISLAND">Norfolk Island</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NORTHERNMARIANAISLANDS">Northern Mariana Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_NORWAY">Norway</option>
                              <option value="COM_COMMUNITY_LANG_NAME_OMAN">Oman</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PAKISTAN">Pakistan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PALAU">Palau</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PALESTINIANTERRITORYOCCUPIED">Palestinian Territory, Occupied</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PANAMA">Panama</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PAPUANEWGUINEA">Papua New Guinea</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PARAGUAY">Paraguay</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PERU">Peru</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PHILIPPINES">Philippines</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PITCAIRN">Pitcairn</option>
                              <option value="COM_COMMUNITY_LANG_NAME_POLAND">Poland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PORTUGAL">Portugal</option>
                              <option value="COM_COMMUNITY_LANG_NAME_PUERTORICO">Puerto Rico</option>
                              <option value="COM_COMMUNITY_LANG_NAME_QATAR">Qatar</option>
                              <option value="COM_COMMUNITY_LANG_NAME_REUNION">Reunion</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ROMANIA">Romania</option>
                              <option value="COM_COMMUNITY_LANG_NAME_RUSSIANFEDERATION">Russian Federation</option>
                              <option value="COM_COMMUNITY_LANG_NAME_RWANDA">Rwanda</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTBARTHELEMY">Saint Barthelemy</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTHELENAASCENSIONANDTRISTANDACUNHA">Saint Helena, Ascension And Tristan Da Cunha</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTKITTSANDNEVIS">Saint Kitts And Nevis</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTLUCIA">Saint Lucia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTMARTIN">Saint Martin</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTPIERREANDMIQUELON">Saint Pierre And Miquelon</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAINTVINCENTANDTHEGRENADINES">Saint Vincent And The Grenadines</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAMOA">Samoa</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SANMARINO">San Marino</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAOTOMEANDPRINCIPE">Sao Tome And Principe</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SAUDIARABIA">Saudi Arabia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SENEGAL">Senegal</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SERBIA">Serbia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SEYCHELLES">Seychelles</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SIERRALEONE">Sierra Leone</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SINGAPORE">Singapore</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SLOVAKIA">Slovakia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SLOVENIA">Slovenia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SOLOMONISLANDS">Solomon Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SOMALIA">Somalia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SOUTHAFRICA">South Africa</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SOUTHGEORGIAANDTHESOUTHSANDWICHISLANDS">South Georgia And The South Sandwich Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SPAIN">Spain</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SRILANKA">Sri Lanka</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SUDAN">Sudan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SURINAME">Suriname</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SVALBARDANDJANMAYEN">Svalbard And Jan Mayen</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SWAZILAND">Swaziland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SWEDEN">Sweden</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SWITZERLAND">Switzerland</option>
                              <option value="COM_COMMUNITY_LANG_NAME_SYRIANARABREPUBLIC">Syrian Arab Republic</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TAIWANPROVINCEOFCHINA">Taiwan, Province Of China</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TAJIKISTAN">Tajikistan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TANZANIAUNITEDREPUBLICOF">Tanzania, United Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_THAILAND">Thailand</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TIMORLESTE">Timor-Leste</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TOGO">Togo</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TOKELAU">Tokelau</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TONGA">Tonga</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TRINIDADANDTOBAGO">Trinidad And Tobago</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TUNISIA">Tunisia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TURKEY">Turkey</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TURKMENISTAN">Turkmenistan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TURKSANDCAICOSISLANDS">Turks And Caicos Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_TUVALU">Tuvalu</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UGANDA">Uganda</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UKRAINE">Ukraine</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UNITEDARABEMIRATES">United Arab Emirates</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UNITEDKINGDOM">United Kingdom</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UNITEDSTATES">United States</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UNITEDSTATESMINOROUTLYINGISLANDS">United States Minor Outlying Islands</option>
                              <option value="COM_COMMUNITY_LANG_NAME_URUGUAY">Uruguay</option>
                              <option value="COM_COMMUNITY_LANG_NAME_UZBEKISTAN">Uzbekistan</option>
                              <option value="COM_COMMUNITY_LANG_NAME_VANUATU">Vanuatu</option>
                              <option value="COM_COMMUNITY_LANG_NAME_VENEZUELABOLIVARIANREPUBLICOF">Venezuela, Bolivarian Republic Of</option>
                              <option value="COM_COMMUNITY_LANG_NAME_VIETNAM">Vietnam</option>
                              <option value="COM_COMMUNITY_LANG_NAME_VIRGINISLANDSBRITISH">Virgin Islands, British</option>
                              <option value="COM_COMMUNITY_LANG_NAME_VIRGINISLANDSUS">Virgin Islands, U.S.</option>
                              <option value="COM_COMMUNITY_LANG_NAME_WALLISANDFUTUNA">Wallis And Futuna</option>
                              <option value="COM_COMMUNITY_LANG_NAME_WESTERNSAHARA">Western Sahara</option>
                              <option value="COM_COMMUNITY_LANG_NAME_YEMEN">Yemen</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ZAMBIA">Zambia</option>
                              <option value="COM_COMMUNITY_LANG_NAME_ZIMBABWE">Zimbabwe</option>
                            </select>
                          </div>
                        </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label>Personal Website</label>
                              <input type="text" class="form-control" value="<?= $user['user_web']?>" name="user_web">
                            </div>
                          </div>
                        </div>
                      </div>
                      <h4 class="m-t-10">Industry</h4>
                      <div class="form-group-attached">
                        <div class="row clearfix">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default form-group-default-select2">
                              <label>Industry Type </label>
                              <select class="full-width" data-placeholder="Select Industry Type" data-init-plugin="select2" name="industry">
                                  <option value="AK">Creative</option>
                                  <option value="HI">Education</option>
                                  <option value="CA">Finance</option>
                                  <option value="NV">Gaming</option>
                                  <option value="OR">Medical</option>
                                  <option value="WA">Technical</option>
                              </select>
                            </div>                    
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Company Name </label>
                              <input type="text" class="form-control" value="<?= $user['company_name']?>" name="company_name" id="company-name">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Title </label>
                              <input type="text" class="form-control" name="position" value="<?= $user['position']?>" id="job-title">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label>Company Website</label>
                              <input type="text" class="form-control" value="<?= $user['company_web']?>" name="company_web">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label class="">Current Needs</label>
                              <textarea class="form-control" name="current_needs" id="aboutme"><?= $user['current_needs']?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <h4 class="m-t-10">Social</h4>
                      <div class="form-group-attached">
                        <div class="row clearfix">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Facebook URL </label>
                              <input type="text" class="form-control" name="fb_link" value="<?= $user['fb_link']?>" id="url">
                            </div>                    
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Twitter URL </label>
                              <input type="text" class="form-control" name="twitter_link" value="<?= $user['twitter_link']?>" id="url">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default required">
                              <label>LinkedIn URL </label>
                              <input type="text" class="form-control" name="linkedin_link" value="<?= $user['linkedin_link']?>" id="url">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Google Plus URL </label>
                              <input type="text" class="form-control" name="google_plus_link" value="<?= $user['google_plus_link']?>" >
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="pull-left">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                          <label for="checkbox-agree">I hereby certify that the information above is true and accurate
                          </label>
                        </div>
                      </div>
                      <br>
                      <button class="btn btn-success" type="submit">Save Changes</button>
                      <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                    </form>
                  </div>
                </div>
                <!-- END PANEL -->
              </div>
            </div>              
          </div>              
        </div> 
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->