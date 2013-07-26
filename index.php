<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>
<link type="text/css" href="styles.css" rel="stylesheet"  />
<script type="text/javascript" src="validation.js"></script>
</head>

<body>
<div id="container"> 
  <!--Header element-->
  <div id="header"> 
    <!--php include statement-->
    <?php include 'header.php'; ?>
  </div>
  
  <!--Section element-->
  <div id="section"> 
    <!--form element-->
    <form name="form" method="post" action="formprocess.php" onsubmit="return validateForm();">
      <fieldset>
        <!--form name-->
        <legend>Client-side and server-side validation</legend>
        
        <!--text field-->
        <div id="row">
          <label for="name">Name:</label>
          <input type="text" name="name" size="40" 
    	maxlength="40" placeholder="Please type your name" />
          <br />
        </div>
        
        <!--radio button-->
        <div id="row">
          <label for="gender">Gender:</label>
          <input type="radio" name="gender" value="male" />
          Male
          <input type="radio" name="gender" value="female" />
          Female<br />
        </div>
        
        <!--checkbox-->
        <div id="row">
          <label>Interest:</label>
          <input type="checkbox" name="interest" value="science" />
          Science
          <input type="checkbox" name="interest" value="art" />
          Art
          <input type="checkbox" name="interest" value="sport" />
          Sport<br />
        </div>
        
        <!--drop-down list-->
        <div id="row">
          <label>Age:</label>
          <select id="age" name="age">
            <option value="">Select Age</option>
            <option value="0-20">under 20</option>
            <option value="21-40">21-40</option>
            <option value="41-60">41-60</option>
            <option value="60+">over 60</option>
          </select>
          <br />
        </div>
        
        <!--textarea-->
        <div id="row">
          <label>Comments:</label>
          <textarea rows="3" cols="31" name="comments" placeholder="Please type your comments"></textarea>
          <br />
        </div>
        
        <!--buttons-->
        <div id="submit">
          <input type="submit" name="submit" value="Submit" />
          <input type="reset" namre="reset" value="Reset" />
        </div>
      </fieldset>
    </form>
  </div>
  
  <!--Footer element-->
  <div id="footer"> 
    <!--php include statement-->
    <?php include 'footer.php'; ?>
  </div>
</div>
</body>
</html>
