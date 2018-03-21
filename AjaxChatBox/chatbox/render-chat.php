<?php foreach ($chat as $value) : ?>
    <li class="shout"><span><?php echo $value->created_at; ?> - </span><strong><?php echo $value->name; ?></strong>: <?php echo $value->message; ?> </li>
<?php endforeach; ?>