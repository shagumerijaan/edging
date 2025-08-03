<div class="widget recent_posts">
   <h3 class="widget-title">Services</h3>
   <ul>
      <li>
         <a href="<?=$webRoot;?>builders-cleaning">Builders Cleaning</a>
      </li>
      <li>
         <a href="<?=$webRoot;?>window-cleaning">Window Cleaning</a>
      </li>
      <li>
         <a href="<?=$webRoot;?>house-cleaning">House Cleaning</a>
      </li>
      <li>
         <a href="<?=$webRoot;?>domestic-cleaning">Domestic Cleaning</a>
      </li>
      <li>
         <a href="<?=$webRoot;?>commercial-cleaning">Commercial Cleaning</a>
      </li>
      <li>
         <a href="<?=$webRoot;?>spring-cleaning">Spring Cleaning</a>
      </li>
      <li>
         <a href="<?=$webRoot;?>covid-19-deep-cleaning">Covid 19 Deep Cleaning</a>
      </li>
	  <li>
         <a href="<?=$webRoot;?>sanitising">Sanitising</a>
      </li>
       <li>
         <a href="<?=$webRoot;?>pressure-washing">Pressure Washing</a>
      </li>
   </ul>
</div>
<div class="qoute-title-area">
   <h3>Lets Talk About The Project</h3>
</div>
<div class="qoute-form-area">
	<?php if(isset($msg)){ echo $msg; } ?>
   <form method="POST" action="" name="myform">
      <p>
         <label>Name*</label>
         <input type="text" name="name" id="contact_name" placeholder="Type your name" required>
      </p>
      <p>
         <label>Email*</label>
         <input type="email" name="email" id="contact_email" placeholder="Type your email" required>
      </p>      
      <p>
         <label>Phone*</label>
         <input type="text" name="phone" id="contact_phone" placeholder="Type your phone" required restrict="A-Z\a-z\0-9">
      </p>
      <p>
         <label>Services*</label>
         <select name="services" required>
			<option value="">Select</option>
			<option value="Builders Cleaning">Builders Cleaning</option>
			<option value="Window Cleaning">Window Cleaning</option>
			<option value="House Cleaning">House Cleaning</option>
			<option value="Domestic Cleaning">Domestic Cleaning</option>
			<option value="Commercial Cleaning">Commercial Cleaning</option>
			<option value="Spring Cleaning">Spring Cleaning</option>
			<option value="Covid 19 Deep Cleaning">Covid 19 Deep Cleaning</option>
			<option value="Sanitising">Sanitising</option>
			<option value="Sanitising">Pressure Washing</option>

		 </select>
      </p>
	  <p> 
         <label for="subject">Location*</label>
         <input type="text" name="location" id="contact_subject" placeholder="Location" required restrict="A-Z\a-z\0-9">
      </p>
      <p>
         <label>Message*</label>
         <textarea name="message" id="contact_message" placeholder="Type your message" required restrict="A-Z\a-z\0-9"></textarea>
      </p>
      <p> 
      <div id="contact_send_status"></div>
      </p>
      <input type="submit" name="submit" value="ASK ME">
   </form>
</div>