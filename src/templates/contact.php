<section class="contact" id="contact">

    <h3 <?php if(WebsiteController::getSuccess() || WebsiteController::getErrors()) {echo 'style="display: none"';}?>>Contacter - moi</h3>

    <a class="backto" href="https://kevinlebot.com" <?php if(WebsiteController::getSuccess() || WebsiteController::getErrors()) {echo 'style="display: flex"';}?>>
        <i class="fa-solid fa-arrow-left"></i>
        <p> Revenir au site </p>
    </a>
    

    <div class="blocContact" id="blocContact" <?php if(WebsiteController::getSuccess() || WebsiteController::getErrors()) {echo 'style="display: none"';}?>>
        <h4>Une question ? un projet ?</h4>
        <p>Contact - moi pour pouvoir discuter de votre projet et voir ce qu'il est possible de faire.</p>
        <a class="btn" id="contactBtn">Clique ici</a>
    </div>

    <div class="formbloc" id="form" <?php if(WebsiteController::getSuccess() || WebsiteController::getErrors()) {echo 'style="display: flex"';}?>>
        <div class="coor">
            <div>
                <i class="fa-regular fa-envelope"></i>
                <span></span>
                <p>Email</p>
            </div>
            <p>kevin.lebot@hotmail.fr</p>
            <ul>
                <li><a href="https://www.linkedin.com/in/kevin-l-8a5399132/"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://github.com/kevinlbt"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="https://www.instagram.com/kevin_lbt/"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>

        <div class="errorContact">
            <?php foreach(WebsiteController::getErrors() as $error) : ?>
              <p id="" ><?php  echo $error; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="success">
            <p class="green"><?php echo WebsiteController::getSuccess() ?></p>
        </div>

        <form method="POST">
            <i class="fa-solid fa-circle-xmark" id="cross"></i>
            <label for="name">Nom</label>
            <div>
                <input type="text" name="name" id="name" placeholder=" nom" class="inputS" >
                <input type="text" name="firstname" placeholder=" prénom" class="inputS">
            </div>
            <label for="email" class="">Email</label>
            <input type="email" name="email" id="email" class="inputB" placeholder=" example@example.com">
            <label for="subject" class="">Sujet</label>
            <input type="text" name="subject" id="subject" class="inputB" placeholder=" site internet">
            <label for="textarea" class="">Message</label>
            <textarea name="message" id="textarea" cols="70" class="textArea"></textarea>
            <button id="formButtonDisabled" <?php if(isset($_SESSION["formSend"]) && $_SESSION["formSend"] === true) { echo "disabled";} ?> type="submit" class="btn">Envoyer</button>
        </form>
    </div>

</section>