<div class="wrap">
    <h1>Pluggin Controll</h1>
    <form action="" method="post">
        <label for="pluginActicate">Active plugin</label>
            <input type="checkbox" name="pluginActivate"
                <?php echo $currentOption ? "checked":"" ?>
            >

        <div>
            <button class="button button-primary" name="" type="submit">Save</button>
        </div>

    </form>
</div>