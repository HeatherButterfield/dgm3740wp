  </main>
</div>

<div class="footerWrapper">
  <footer>
      <div class="footerSection">
        <h3>Contact Us</h3>
        <a href="https://www.google.com/maps/place/Classic+Skating+%26+Fun+Center/@40.2931898,-111.697047,17z/data=!3m1!4b1!4m5!3m4!1s0x874d9ac6daee9bbb:0xcd106807b51c2a60!8m2!3d40.2931898!4d-111.6948583">250 State St, Orem, UT 84058</a>
        <h3>Phone</h3>
        <a id="headerTel" href="tel:123-456-7890">123-456-7890</a>
        <h3>Hours of Operation</h3>
        <p>Monday-Friday  9am-5pm</p>
      </div>
      <div class="footerSection">
        <h3>Newsletter</h3>
        <p>Subscribe to our newsletter to stay up to date with our amazing deals</p>
        <form>
          <input type="email" name="email" required>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
      <div class="footerSection">
        <h3>Why Cabot Cruises?</h3>
        <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacations including discounted cruises.</p>
      </div>
  </footer>
  <div class="social">
    <div class="socialSection">
      <i class="fab fa-facebook-f fa-3x"></i>
      <i class="fab fa-instagram fa-3x"></i>
      <i class="fab fa-twitter fa-3x"></i>
      <i class="fab fa-linkedin-in fa-3x"></i>
      <i class="fab fa-pinterest-p fa-3x"></i>
    </div>
    <p class="copy">&copy; Heather Butterfield 2020 <a href="https://heatherbutterfield.com/portfolio/">Portfolio</a></p>
  </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/toggleMenu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: true
  });
});
const href = window.location.href.split('/');
const page = href[href.length-1];
if (page === 'index.php') {
  document.querySelector('.home').classList.add('current-menu-item');
}
else if (page === 'cruise.php') {
  document.querySelector('.cruise').classList.add('current-menu-item');
}
else if (page === 'book.php') {
  document.querySelector('.book').classList.add('current-menu-item');
}
else if (page === 'agent1.php') {
  document.querySelector('.agentMain').classList.add('current-menu-item');
}
else if (page === 'agent2.php') {
  document.querySelector('.agentMain').classList.add('current-menu-item');
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "LocalBusiness",
"name": "Cabot Cruises",
"address": {
  "@type": "PostalAddress",
  "streetAddress": "250 State St",
  "addressLocality": "Orem",
  "addressRegion": "UT",
  "postalCode": "84058",
  "addressCountry": "US"
},
"telephone": "1234567890",
"openingHours": "Mo-Fr 09:00-17:00"
}
</script>
</body>
</html>
