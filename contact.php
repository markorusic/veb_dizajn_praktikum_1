<?php
$page_title = "Kontakt";
$page_description = "";
include('partials/header.php'); ?>
    <!-- main container -->
    <main id="contact">
        <div class="container p-5">
            <h2 class="uc nice-font">Kontaktirajte nas!</h2>
            <ul class="list-reset social-links">
                <li><a href="#" target="_blank"><i class="fa fa-2x fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-2x fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-2x fa-twitter"></i></a></li>
            </ul>
            <hr>
            <form>
                <div class="form-group">
                    <label for="contact-email">Vaša Email adresa</label>
                    <input type="email" class="form-control input" required id="contact-email" aria-describedby="emailHelp" placeholder="Unesite email">
                </div>
                <div class="form-group">
                    <label for="contact-msg">Vaša poruka</label>
                    <textarea name="msg" required id="contact-msg" class="form-control textarea" cols="30" rows="10" placeholder="Napišite nam nesto lepo!"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary-my btn-lg">Pošalji</button>
                </div>
            </form>            
        </div>
    </main>
    <!-- main container ends -->

<?php include('partials/footer.php'); ?>