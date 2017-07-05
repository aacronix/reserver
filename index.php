<?php


include_once(dirname(__FILE__) . '/classes/system/CMSFactory.php');

use system\CMSFactory;

error_reporting(E_ALL);

ini_set('max_execution_time', 600);
ini_set('memory_limit', '1024M');


//

?>

<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $("#cms-send-form").submit(function (event) {
            var $selectedCms = $('#cms-selector').val();
            if ($selectedCms != 'undefined') {
                $.ajax({
                    method: "POST",
                    url: "ajax/get-cms-access-data.php",
                    data: {cms_type: $selectedCms}
                })
                    .done(function (data) {
                        data = JSON.parse(data);
                        $('#InputHost').val(data.host);
                        $('#InputUser').val(data.login);
                        $('#InputPassword').val(data.password);
                        $('#InputDatabase').val(data.dbName);
                    });
            }
            event.preventDefault();
        });

        $("#db-dump-form").submit(function (event) {
            var $host = $('#InputHost').val();
            var $login = $('#InputUser').val();
            var $password = $('#InputPassword').val();
            var $dbName = $('#InputDatabase').val();

            if ($host.length > 0 && $login.length > 0 && $password.length > 0 && $dbName.length > 0)
                $.ajax({
                    method: "POST",
                    url: "ajax/create-db-dump.php",
                    data: {host: $host, login: $login, password: $password, dbName: $dbName}
                })
                    .done(function (data) {
                    });
            event.preventDefault();
        });

        $('#site-dump').on("click", function () {
            $.ajax({
                url: "ajax/create-site-dump.php"
            })
                .done(function (data) {
                });
        })
    });

</script>

<form role="form" action="" method="post" id="cms-send-form">
    <div class="form-group">
        <label for="InputPath">Какая CMS?</label>
        <select name="cmsSelector" id="cms-selector" class="form-control" required>
            <option value="undefined">Я не знаю</option>
            <option value="bitrix">Bitrix</option>
            <option value="wp">WordPress</option>
            <option value="joomla">Joomla</option>
            <option value="drupal4">Drupal 4</option>
            <option value="drupal5">Drupal 5</option>
            <option value="drupal6">Drupal 6</option>
            <option value="drupal7">Drupal 7</option>
            <option value="drupal8">Drupal 8</option>
            <option value="ms">MadeSimple</option>
            <option value="modxe">MODx Evolution</option>
            <option value="modxr">MODx Revolution</option>
            <option value="typo36">TYPO3 ver.6</option>
            <option value="typo37">TYPO3 ver.7</option>
            <option value="typo38">TYPO3 ver.8, всё так же как и в 7, но это не точно (пока не добавлено)</option>
            <option value="umi">UMI.CMS</option>
            <option value="hostcms5">HostCMS5 (пока не добавлено)</option>
            <option value="hostcms6">HostCMS6</option>
            <option value="netcat">Netcat (пока не добавлено)</option>
            <option value="ural">Ural CMS (пока не добавлено)</option>
        </select>
        <button type="submit" name="cmsSelectAction" value="selectEvent"
                class="btn btn-default btn-lg btn-success download-bt">
            Попробовать вытянуть доступы
        </button>
    </div>
</form>

<form action="" method="post" id="db-dump-form">
    <div class="form-group">
        <label for="InputHost">Host</label>
        <input type="text" name="host" class="form-control" id="InputHost" required placeholder="localhost"
               value="">
    </div>
    <div class="form-group">
        <label for="InputUser">User</label>
        <input type="text" name="user" class="form-control" id="InputUser" required placeholder="username"
               value="">
    </div>
    <div class="form-group">
        <label for="InputPassword">Password</label>
        <input type="text" name="password" class="form-control" id="InputPassword" placeholder="password" required
               value="">
    </div>
    <div class="form-group">
        <label for="InputDatabase">Database</label>
        <input type="text" name="database" class="form-control" id="InputDatabase" required placeholder="database"
               value="">
    </div>
    <button type="submit" name="backupAction" value="backupDatabase" class="btn btn-default">Создать бекап БД
    </button>
</form>

<a href="javascript:void(0)" id="site-dump">Сделать дамп сайта</a>