<?php  
 /** 
 * Template Name: Contact Page
 */  
   
 get_header();  
   
  // Here is your custom form whatever you want to add field.  
?>

<main class="topnav-space">
         <!-- CONTACT FORM -->
      <section class="section">
        <div class="contact__container">
          <div class="contact__text">
            <p>No matter how far along you are, if you desire some professional support for yourself and your newborn, do get in touch for a free, no-obligation virtual consultation. You can enquire about my services by completing the form below.</p>
            <p>I offer my support mainly in South West & South East London, though I am often able to travel further, please get in touch to find out more about my availability.</p>
          </div>
          <div class="contact-form">
            <form action="https://formsubmit.co/robynlnalty@gmail.com" method="POST">
              <div class="contact-form__inputs">
                <div class="contact-form--left">
                  <input type="text" name="name" placeholder="Name" required>
                  <input type="text" name="pronouns" placeholder="Pronouns" required>
                  <input type="email" name="email" placeholder="Email" required>
                  <input type="hidden" name="_next" value="thankyou.html">
                </div>
                <div class="contact-form--right">
                  <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                </div>
              </div>
              <button class="btn btn--dark" type="submit">Send</button>
            </form>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
<?php wp_footer(); ?>