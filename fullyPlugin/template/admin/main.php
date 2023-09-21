<div class="wrap">
    <h1>Pluggin Controll</h1>
    <form action="" method="post">
        <label for="pluginActicate">Active plugin</label>
            <input type="checkbox" name="pluginActivate"
            <?php isset($current_plugin_status) && intval($current_plugin_status) > 0 ? "checked" : "";?> />
        <div>
            <button class="button button-primary" name="saveSetting" type="submit">Save</button>
        </div>
    </form>
</div>