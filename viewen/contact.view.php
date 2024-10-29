<?php
require 'layout/header.php'; ?>

    <main class="mainindex">
        <div class="zwart">
            <img src="../viewen/css/plaatjes/blackandwhite.jpg" alt="bergen" class="img">
        </div>


        <div class="schrijven container" >
            <h1>Contacteer Ons</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input type="naam" id="naam" name="naam" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht:</label>
                    <textarea id="bericht" name="bericht" rows="5" required></textarea>
                </div>
                <button type="submit">Verzend</button>
            </form>
        </div>
    </main>


<?php require 'layout/footer.php';

?>