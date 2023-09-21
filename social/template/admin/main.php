<div class="wrap">
    <h1>Plugin controller</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, dolores!</p>
    <hr>
    <form action="" method="post">
        <!-- Instgram -->
        <h1>Instgram</h1>
            <label for="instgram">Active
            <input name="instgram" type="checkbox" <?php  echo isset($instgram_status) && intval($instgram_status)  > 0 ? "checked":"" ;?> >
        </label>
        <!-- telegram -->
         <h1>Telegram</h1>
            <label for="instgram">Active
            <input name="telegram" type="checkbox" <?php echo isset($telegram_status) && intval($telegram_status) > 0  ? "checked":"" ;?> >
        </label>
        <!-- GMAIL -->
         <h1>Gmail</h1>
            <label for="instgram">Active
            <input name="gmail" type="checkbox" <?php echo isset($gmail_status) && intval($gmail_status) > 0? "checked":"" ;?> >
        </label>
        <br>
        <button class="button button-primary" type="submit" name="saveSetting">Submit</button>
    </form?>    
</div>
