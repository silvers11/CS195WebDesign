<?php
	$pagetitle="Contact Us";
	include '../header.htm';
	
	//email handling script goes here
	$name = $_POST['firstlastname'];
    $email = $_POST['emailaddress'];
    $phone = $_POST['phone'];
    $web = $_POST['web'];
    $message = $_POST['message'];
    $from = $_POST['firstlastname']; 
    $to = 'silverss@onid.oregonstate.edu'; 
    $subject = '[OSU Mens Ultimate] question';
    $human = $_POST['human'];
	$class = $_POST['class'];
	$experience = $_POST['experience'];
    $body = "From: $name\n 
             Email: $email\n 
             Telephone: $phone\n 
             Website: $web\n 
			 best describes you: $class\n
			 years experience: $experience\n
             Message:\n $message";
    
        if ($_POST['submit']) {
        if ($name != '' && $email != '') {
            if ($human == '4') {                 
                if (mail ($to, $subject, $body, $from)) { 
                echo '<p class="confirmation">Your message has been sent!</p>';
            } else { 
                echo '<p class="tryagain">Something went wrong. Please try again.</p>'; 
            } 
        } else if ($_POST['submit'] && $human != '4') {
            echo '<p class="tryagain">Please try answering the anti-spam question again. </p>';
        }
        } else {
            echo '<p class="tryagain">Please fill in all required fields.</p>';
        }
    }
?>


<p>Use this form to contact a club officer.</p>
<p>Instructions: Use keystrokes: Control-Option-<i>n</i> (Mac) or Alt-Shift-<i>n</i> (Windows, Linux) the accesskey for each field is circled in the name.
Use arrow keys to move through lists and the space bar for selecting. * indicates required field.
</p>

<form action="index.php" method="post">
	
	<fieldset>
		<legend>Contact Information</legend>
		<label for="firstlastname">First and Last <kbd>N</kbd>ame*</label>
		<input name="firstlastname" id="firstlastname" type="text" tabindex="1" accesskey="n" required autofocus placeholder="First and Last name" />
		
		<label for="emailaddress"><kbd>E</kbd>mail*</label>
		<input name="emailaddress" id="emailaddress" type="email" tabindex="2" accesskey="e" required placeholder="name@domain.com" />
		
		<label for="phone"><kbd>P</kbd>hone Number</label>
		<input name="phone" id="phone" type="tel" tabindex="3" accesskey="p" placeholder="(000)-000-0000" />
		
		<label for="web">Your <kbd>W</kbd>ebsite</label>
		<input name="web" id="web" type="url" tabindex="4" accesskey="w" placeholder="http://...." />
		
	</fieldset>
	
	<fieldset>
		<legend><kbd>M</kbd>essage*</legend>
		<label for="message">no HTML; text-only please.</label>
		<textarea name="message" id="message" tabindex="5" accesskey="m" required placeholder="Your Message" ></textarea>
		
	</fieldset>
	
	<fieldset>
		<legend>Additonal information</legend>
				 
			
			<p>Which of these best describes you?</p>
			<label for="perspective">
			<input  id="perspective" name="class" type="radio" value="Perspective Student" tabindex="6" accesskey="s" />
			Perspective <kbd>S</kbd>tudent</label>

			<label for="current">
			<input  id="current"  name="class" type="radio" value="Current OSU Student" tabindex="7" accesskey="c" />
			<kbd>C</kbd>urrent OSU Student</label>

			<label for="alumnus">
			<input  id="alumnus"    name="class" type="radio" value="OSU Alumnus" tabindex="8" accesskey="a" />
			OSU <kbd>A</kbd>lumnus</label>
			
			<label for="other">
			<input id="other" type="radio" name="class" value="other" tabindex="9" accesskey="o" /><kbd>O</kbd>ther</label>
			
			
			
			<label for="experience">Experience playing Ultimate</label>
			<select name="experience" id="experience" tabindex="10" >
			  <option>years:</option>
			  <option value="No experience">no experience</option>
			  <option value="< 1 year">Less than 1 year</option>
			  <option value="1-2 years">1-2 years</option>
			  <option value="3-5 years">3-5 years</option>
			  <option value="6+ years">6+ years</option>
			</select>
		
		
	</fieldset>
	
	<fieldset>
		<legend>send the message</legend>
		<p>To help prevent spam, <kbd>a</kbd>nswer this mathematical equation*</p>
		<label for="human">What is 2+2  ?</label>
		<input name="human" id="human" required tabindex="11" accesskey="a" />
		
		<label for="submit">Submi<kbd>t</kbd>:</label>
		<input name="submit" id="submit" type="submit" value="Pass the Message" tabindex="12" accesskey="t" />
		
		
		<label for="reset"><kbd>R</kbd>eset the form:</label>
		<input name="reset" id="reset" type="reset" value="reset" tabindex="13" accesskey="r" />
	</fieldset>

</form>


<?php include '../footer.htm'; ?>