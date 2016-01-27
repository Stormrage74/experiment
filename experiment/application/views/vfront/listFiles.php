
<ul>
<?php foreach ($data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>


<p><?php echo anchor('front/verify', 'back to menu'); ?></p>
