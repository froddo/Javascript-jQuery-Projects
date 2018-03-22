<?php foreach ($chat as $value) : ?>
    <li class="shout" data-id="<?php echo $value->id; ?>"><span><?php echo $value->created_at; ?> - </span><strong><?php echo $value->name; ?></strong>: <?php echo $value->message; ?> </li>
<?php endforeach; ?>