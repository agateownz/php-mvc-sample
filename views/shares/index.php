<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <a class="btn btn-success btn-share" href="<?php echo ROOT_URL . 'shares/add' ?>">Share Something</a>
    <?php endif; ?>
    
    <?php foreach($viewModel as $item) : ?>
        <div class="card">
            <div class="card-block">
                <h3 class="card-title"><?php echo $item['title']; ?></h3>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['create_date']; ?> </h6>
                <hr/>
                <p class="card-text"><?php echo $item['body']; ?></p>
                <br/>
                <a class="btn btn-primary" href="<?php echo $item['link']; ?>" target="_blank" class="card-link">Go To Source</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>