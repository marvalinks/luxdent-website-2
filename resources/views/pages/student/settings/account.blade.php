@extends('layouts.app')

@section('links')
    <style>
        .jki{
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="row pg-nav">
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-icon-fixed"><span class="icon-menu-circle"></span> Back</a>
    </div>
    <div class="row">
        @if (auth()->user()->profile)
        <form action="{{route('student.my.account')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <h3>My Profile</h3>
                    <div class="bock">
                        @if (auth()->user()->photo_url)
                        <div class="form-group">
                                <img class="jki" src="{{auth()->user()->photo_url}}" />
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Fullname <span class="req">*</span></label>
                            <input required class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email address <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="email" value="{{auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input class="form-control" type="text" name="telephone" value="{{auth()->user()->telephone}}">
                        </div>
                        <div class="form-group">
                            <label>Profile photo</label>
                            <input class="form-control" type="file" name="photo">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-icon-fixed">
                                <span class="icon-arrow-up-circle"></span> Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <form action="{{route('student.complete.profile')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <h3>Complete your account registration</h3>
                    <div class="bock">
                        <h4>Personal Info</h4>
                        <div class="form-group">
                            <label>Telephone <span class="req">*</span></label>
                            <input required class="form-control" type="text" name="telephone">
                        </div>
                        <div class="form-group">
                            <label>Address <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label>Date of birth</label>
                            <input class="form-control" required type="date" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Nationality <span class="req">*</span></label>
                            <select class="form-control" name="nationality" required aria-invalid="false">
                                <option value="British">British</option>
                                <option value="Afghan">Afghan</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Algerian">Algerian</option>
                                <option value="American">American</option>
                                <option value="Andorran">Andorran</option>
                                <option value="Angolan">Angolan</option>
                                <option value="Anguillan">Anguillan</option>
                                <option value="Argentine">Argentine</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Australian">Australian</option>
                                <option value="Austrian">Austrian</option>
                                <option value="Azerbaijani">Azerbaijani</option>
                                <option value="Bahamian">Bahamian</option>
                                <option value="Bahraini">Bahraini</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="Barbadian">Barbadian</option>
                                <option value="Belarusian">Belarusian</option>
                                <option value="Belgian">Belgian</option>
                                <option value="Belizean">Belizean</option>
                                <option value="Beninese">Beninese</option>
                                <option value="Bermudian">Bermudian</option>
                                <option value="Bhutanese">Bhutanese</option>
                                <option value="Bolivian">Bolivian</option>
                                <option value="Botswanan">Botswanan</option>
                                <option value="Brazilian">Brazilian</option>
                                <option value="British" selected>British</option>
                                <option value="British Virgin Islander">British Virgin Islander</option>
                                <option value="Bruneian">Bruneian</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Burkinan">Burkinan</option>
                                <option value="Burmese">Burmese</option>
                                <option value="Burundian">Burundian</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Cameroonian">Cameroonian</option>
                                <option value="Canadian">Canadian</option>
                                <option value="Cape Verdean">Cape Verdean</option>
                                <option value="Cayman Islander">Cayman Islander</option>
                                <option value="Central African">Central African</option>
                                <option value="Chadian">Chadian</option>
                                <option value="Chilean">Chilean</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Citizen of Antigua and Barbuda">Citizen of Antigua and Barbuda</option>
                                <option value="Citizen of Bosnia and Herzegovina">Citizen of Bosnia and Herzegovina</option>
                                <option value="Citizen of Guinea-Bissau">Citizen of Guinea-Bissau</option>
                                <option value="Citizen of Kiribati">Citizen of Kiribati</option>
                                <option value="Citizen of Seychelles">Citizen of Seychelles</option>
                                <option value="Citizen of the Dominican Republic">Citizen of the Dominican Republic</option>
                                <option value="Citizen of Vanuatu">Citizen of Vanuatu</option>
                                <option value="Colombian">Colombian</option>
                                <option value="Comoran">Comoran</option>
                                <option value="Congolese (Congo)">Congolese (Congo)</option>
                                <option value="Congolese (DRC)">Congolese (DRC)</option>
                                <option value="Cook Islander">Cook Islander</option>
                                <option value="Costa Rican">Costa Rican</option>
                                <option value="Croatian">Croatian</option>
                                <option value="Cuban">Cuban</option>
                                <option value="Cymraes">Cymraes</option>
                                <option value="Cymro">Cymro</option>
                                <option value="Cypriot">Cypriot</option>
                                <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Djiboutian">Djiboutian</option>
                                <option value="Dominican">Dominican</option>
                                <option value="Dutch">Dutch</option>
                                <option value="East Timorese">East Timorese</option>
                                <option value="Ecuadorean">Ecuadorean</option>
                                <option value="Egyptian">Egyptian</option>
                                <option value="Emirati">Emirati</option>
                                <option value="English">English</option>
                                <option value="Equatorial Guinean">Equatorial Guinean</option>
                                <option value="Eritrean">Eritrean</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Ethiopian">Ethiopian</option>
                                <option value="Faroese">Faroese</option>
                                <option value="Fijian">Fijian</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Finnish">Finnish</option>
                                <option value="French">French</option>
                                <option value="Gabonese">Gabonese</option>
                                <option value="Gambian">Gambian</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Ghanaian">Ghanaian</option>
                                <option value="Gibraltarian">Gibraltarian</option>
                                <option value="Greek">Greek</option>
                                <option value="Greenlandic">Greenlandic</option>
                                <option value="Grenadian">Grenadian</option>
                                <option value="Guamanian">Guamanian</option>
                                <option value="Guatemalan">Guatemalan</option>
                                <option value="Guinean">Guinean</option>
                                <option value="Guyanese">Guyanese</option>
                                <option value="Haitian">Haitian</option>
                                <option value="Honduran">Honduran</option>
                                <option value="Hong Konger">Hong Konger</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelandic">Icelandic</option>
                                <option value="Indian">Indian</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Iranian">Iranian</option>
                                <option value="Iraqi">Iraqi</option>
                                <option value="Irish">Irish</option>
                                <option value="Israeli">Israeli</option>
                                <option value="Italian">Italian</option>
                                <option value="Ivorian">Ivorian</option>
                                <option value="Jamaican">Jamaican</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Jordanian">Jordanian</option>
                                <option value="Kazakh">Kazakh</option>
                                <option value="Kenyan">Kenyan</option>
                                <option value="Kittitian">Kittitian</option>
                                <option value="Kosovan">Kosovan</option>
                                <option value="Kuwaiti">Kuwaiti</option>
                                <option value="Kyrgyz">Kyrgyz</option>
                                <option value="Lao">Lao</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lebanese">Lebanese</option>
                                <option value="Liberian">Liberian</option>
                                <option value="Libyan">Libyan</option>
                                <option value="Liechtenstein citizen">Liechtenstein citizen</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Luxembourger">Luxembourger</option>
                                <option value="Macanese">Macanese</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Malagasy">Malagasy</option>
                                <option value="Malawian">Malawian</option>
                                <option value="Malaysian">Malaysian</option>
                                <option value="Maldivian">Maldivian</option>
                                <option value="Malian">Malian</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Marshallese">Marshallese</option>
                                <option value="Martiniquais">Martiniquais</option>
                                <option value="Mauritanian">Mauritanian</option>
                                <option value="Mauritian">Mauritian</option>
                                <option value="Mexican">Mexican</option>
                                <option value="Micronesian">Micronesian</option>
                                <option value="Moldovan">Moldovan</option>
                                <option value="Monegasque">Monegasque</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Montenegrin">Montenegrin</option>
                                <option value="Montserratian">Montserratian</option>
                                <option value="Moroccan">Moroccan</option>
                                <option value="Mosotho">Mosotho</option>
                                <option value="Mozambican">Mozambican</option>
                                <option value="Namibian">Namibian</option>
                                <option value="Nauruan">Nauruan</option>
                                <option value="Nepalese">Nepalese</option>
                                <option value="New Zealander">New Zealander</option>
                                <option value="Nicaraguan">Nicaraguan</option>
                                <option value="Nigerian">Nigerian</option>
                                <option value="Nigerien">Nigerien</option>
                                <option value="Niuean">Niuean</option>
                                <option value="North Korean">North Korean</option>
                                <option value="Northern Irish">Northern Irish</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Omani">Omani</option>
                                <option value="Pakistani">Pakistani</option>
                                <option value="Palauan">Palauan</option>
                                <option value="Palestinian">Palestinian</option>
                                <option value="Panamanian">Panamanian</option>
                                <option value="Papua New Guinean">Papua New Guinean</option>
                                <option value="Paraguayan">Paraguayan</option>
                                <option value="Peruvian">Peruvian</option>
                                <option value="Pitcairn Islander">Pitcairn Islander</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Prydeinig">Prydeinig</option>
                                <option value="Puerto Rican">Puerto Rican</option>
                                <option value="Qatari">Qatari</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Rwandan">Rwandan</option>
                                <option value="Salvadorean">Salvadorean</option>
                                <option value="Sammarinese">Sammarinese</option>
                                <option value="Samoan">Samoan</option>
                                <option value="Sao Tomean">Sao Tomean</option>
                                <option value="Saudi Arabian">Saudi Arabian</option>
                                <option value="Scottish">Scottish</option>
                                <option value="Senegalese">Senegalese</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Sierra Leonean">Sierra Leonean</option>
                                <option value="Singaporean">Singaporean</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovenian">Slovenian</option>
                                <option value="Solomon Islander">Solomon Islander</option>
                                <option value="Somali">Somali</option>
                                <option value="South African">South African</option>
                                <option value="South Korean">South Korean</option>
                                <option value="South Sudanese">South Sudanese</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Sri Lankan">Sri Lankan</option>
                                <option value="St Helenian">St Helenian</option>
                                <option value="St Lucian">St Lucian</option>
                                <option value="Stateless">Stateless</option>
                                <option value="Sudanese">Sudanese</option>
                                <option value="Surinamese">Surinamese</option>
                                <option value="Swazi">Swazi</option>
                                <option value="Swedish">Swedish</option>
                                <option value="Swiss">Swiss</option>
                                <option value="Syrian">Syrian</option>
                                <option value="Taiwanese">Taiwanese</option>
                                <option value="Tajik">Tajik</option>
                                <option value="Tanzanian">Tanzanian</option>
                                <option value="Thai">Thai</option>
                                <option value="Togolese">Togolese</option>
                                <option value="Tongan">Tongan</option>
                                <option value="Trinidadian">Trinidadian</option>
                                <option value="Tristanian">Tristanian</option>
                                <option value="Tunisian">Tunisian</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Turkmen">Turkmen</option>
                                <option value="Turks and Caicos Islander">Turks and Caicos Islander</option>
                                <option value="Tuvaluan">Tuvaluan</option>
                                <option value="Ugandan">Ugandan</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Uruguayan">Uruguayan</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vatican citizen">Vatican citizen</option>
                                <option value="Venezuelan">Venezuelan</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Vincentian">Vincentian</option>
                                <option value="Wallisian">Wallisian</option>
                                <option value="Welsh">Welsh</option>
                                <option value="Yemeni">Yemeni</option>
                                <option value="Zambian">Zambian</option>
                                <option value="Zimbabwean">Zimbabwean</option>
                            </select>                            
                        </div>
                    </div>
                    <div class="bock">
                        <h4>Employer Detail</h4>
                        <div class="form-group">
                            <label>Employer <span class="req">*</span></label>
                            <input required class="form-control" type="text" name="telephone">
                        </div>
                        <div class="form-group">
                            <label>Employer name <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label>Contact Telephone</label>
                            <input class="form-control" required type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Contact Email</label>
                            <input class="form-control" required type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Practice Manager Name</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Practice Manager Email</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Your Work Address</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Your Work City/Town</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Your Work Post Code</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Your Employers Post Code</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bock">
                        <h4>Your Education Background</h4>
                        <div class="form-group">
                            <label>Subject/Qualification <span class="req">*</span></label>
                            <input required class="form-control" type="text" name="telephone">
                        </div>
                        <div class="form-group">
                            <label>Place of study/Institution <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label>Grade attained / Result</label>
                            <input class="form-control" required type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Start date (mm/dd/yyyy)</label>
                            <input class="form-control" required type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>End date (mm/dd/yyyy)</label>
                            <input class="form-control" type="text" name="dob" value="">
                        </div>
                    </div>
                    <div class="bock">
                        <h4>Professional Membership and Registration</h4>
                        <div class="form-group">
                            <label>Professional Body <span class="req">*</span></label>
                            <input required class="form-control" type="text" name="telephone">
                        </div>
                        <div class="form-group">
                            <label>Registration/Membership Type <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label>Registration/Membership No</label>
                            <input class="form-control" required type="text" name="dob" value="">
                        </div>
                        <div class="form-group">
                            <label>Expiry date (mm/dd/yyyy)</label>
                            <input class="form-control" required type="text" name="dob" value="">
                        </div>
                    </div>
                    <div class="bock">
                        <h4>Transfer Details</h4>
                        <div class="form-group">
                            <label>Are you transferring from another cpurse provider? <span class="req">*</span></label>
                            <select name="" class="form-control">
                                <option value="">-choose-</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Have you taken any dental exams <span class="req">*</span></label>
                            <select name="" class="form-control">
                                <option value="">-choose-</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Have you completed any RoE / Roc <span class="req">*</span></label>
                            <select name="" class="form-control">
                                <option value="">-choose-</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Are you already registered with NEBDN <span class="req">*</span></label>
                            <select name="" class="form-control">
                                <option value="">-choose-</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="bock">
                        <h4>Payment Terms</h4>
                        <p>
                            You are agreeing to make an initial payment to Lux dent. You will be charged 
                            <strong>(amount paid)</strong> Today. Please note that subscriptions paid to Lux Dent
                            cannot be cancelled. If Payment fails, your student account will be frozen immediately.
                        </p>
                    </div>
                    <div class="bock">
                        <h4>Data Protection</h4>
                        <p>
                            The personal data/information you have supplied to Lux Dent will only be used for the purpose of 
                            your admission and academic progress only. This data will be handled and stored to protect your privacy
                            and will not be shared to any third party
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-icon-fixed">
                    <span class="icon-arrow-up-circle"></span> Complete registration
                </button>
            </div>
        </form> 
        @endif
    </div>
        
@endsection