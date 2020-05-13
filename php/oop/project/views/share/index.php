<div>
    <?php
    if (isset($_SESSION['is_logged_in'])) { ?>
        <a class="btn btn-success btn-share" href="<?php echo ROOT_URL; ?>share/add">Share</a>
    <?php } ?>
    <?php
    //iz share modela
    foreach ($viewModel as $item) : ?>
        <div class="card">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <p><?php echo $item['body']; ?></p>
            <a href="<?php echo $item['link']; ?>" class="brn btn-default">Visit</a>
        </div>
        <hr>
    <?php endforeach; ?>
</div>