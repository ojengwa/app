<p class="notice">Your database configuration file is <?php echo  file_exists(APP . 'Config' . DS.'database.php') ?' present.' . $filePresent = ' ' : ' not present.'; ?></p>
<?php if (!empty($filePresent)):?>
<?php $db = ConnectionManager::getInstance(); ?>
<?php $connected = $db->getDataSource('default'); ?>
<p class="notice">Cake<?php echo $connected->isConnected() ? ' is able to' : ' is not able to';?> connect to the database.</p>
<br />
<?php endif; ?>
<h1>Sweet, "Cakebin" got Baked by CakePHP!</h1>
<h2>Editing this Page</h2>
<p>
To change the content of this page, edit: /Volumes/Home/var/www/_rdos/cakebin/views/pages/home.thtml.<br />
To change its layout, edit: /Volumes/Home/var/www/_rdos/cakebin/views/layouts/default.thtml.<br />
You can also add some CSS styles for your pages at: /Volumes/Home/var/www/_rdos/cakebin/webroot/css/.
</p>