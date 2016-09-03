<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dawn Career Institute</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">
<link href='css/quickform-styles.css' rel='stylesheet' type='text/css' />
</head>

<body class="preview-version">
<form name="quick-form" id="quick-form" action="postform.php" method="post">
  <div id="form-title"> <img src="images/form-title.jpg" alt="" /> </div>
  <!-- CLOSING FORM TITLE -->
  
  <div id="form-fields">
    <div class="form-row">
      <select id="LocationID" name="LocationID">
        <option selected="selected" value="">Location of Interest</option>
      </select>
      <br />
    </div>
    <div class="form-row">
      <select id="CurriculumID" name="CurriculumID">
        <option selected="selected" value="">Please select</option>
      </select>
      <br />
    </div>
    <div class="form-row">
      <input name="firstname" id="firstname" type="text" title="First Name"/>
      <br />
    </div>
    <div class="form-row">
      <input name="lastname" id="lastname" type="text" title="Last Name"/>
      <br />
    </div>
    <!-- CLOSING ROW -->
    
    <div class="form-row">
      <input name="email" id="email" type="text" title="Email"/>
      <br />
    </div>
    <div class="form-row">
      <input name="dayphone" id="dayphone" class="phone-input" type="text" title="Phone Number" />
      <br />
    </div>
    <div class="form-row">
      <select id="prompted" name="prompted">
        <option value="">What prompted your visit?</option>
        <option value="television">Television</option>
        <option value="radio">Radio</option>
        <option value="newspaper">Newspaper</option>
        <option value="referral">Referral</option>
        <option value="hs_representative">HS Representative</option>
        <option value="searching_online">Searching Online</option>
      </select>
      <br />
    </div>
    <!-- CLOSING ROW --> 
    
    <!-- CLOSING ROW -->
    	<input type="hidden" name="formId" id="formId" value="4462" />
        <input type="hidden" name="EmailSubject" id="EmailSubject" value=""/>
        <input type="hidden" name="EmailFrom" id="EmailFrom" value="" />
        <input type="hidden" name="CurriculumName" id="CurriculumName" value="" />
        <input type="hidden" name="returntourl" id="returntourl" value="http://www.google.com" />
        <!--<input type="hidden" name="EmailCC" id="EmailCC" value="" />
        <input type="hidden" name="EmailBCC" id="EmailBCC" value="" />-->
        <input type="hidden" name="EmailCC" id="EmailCC" value="sivashankar.kuppusamy@plattform.com,Christina.Schafer@plattform.com,Sarah.Martin@plattform.com,Matt.Griffin@plattform.com,Megan.McClure@plattform.com,Dineshbabu.Ramakrishnarao@qfor.com" />

    <div class="form-row">
      <p class="express-consent">Clicking the “Request Info” button below constitutes your express written consent to be called and/or texted by Regent University at the number(s) you provided, regarding furthering your education. You understand that these calls may be generated using an automated technology.</p>
    </div>
    <div class="submit-container">
      <input name="submit" id="submit" type="submit" value="" />
    </div>    
    <div class="form-row">
      <p class="privacy">Privacy Policy</p>
    </div>
  </div>
  <!-- CLOSING FORM FIELDS -->
  
  <div class="clear"></div>
  <!-- CLOSING CLEAR -->
  
</form>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script type="text/javascript" src="scripts/plugins.js"></script> 
<script type="text/javascript" src="scripts/plattform-scripts.js"></script> 
<script type="text/javascript" src="scripts/ajaxrequest.js"></script>
</body>
</html>