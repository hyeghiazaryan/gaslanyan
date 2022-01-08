<?php
function pageContacts(){
?>
<div class="form-bg">
    <div>
        If you like my work and would like to contact me in person, I'd be happy to get in touch.
    </div>
    <div class="small-text"><span class="aster">*</span>All fields are required.</div> 

            <?= $output ?>
         
               <input class="form-size" id="usr" type="text" name="name" value="<?= $name ?>" placeholder="Your Name">
          
               <input class="form-size" id="email" type="text" name="email" value="<?= $email ?>" placeholder="Your Email">
          
               <textarea class="form-size" id="message" name="message" placeholder="Your Message"><?= $message ?></textarea>
               
               <input style="background-color: lightskyblue; padding: 10px; display: block;" type="text" placeholder="I'm not a robot">
  

        <button type="submit" id="submit">submit</button>
        <button type="button" id="cancel" onclick="clearContactForm()">cancel</button>
        <input type="hidden" name="emailPosted" value="1" /><!-- comment -->
</div>        
        <?php } ?>