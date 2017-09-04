<div class="container-fluid">
    <div class="card">
        <div class="card-header">Share Something</div>
        <div class="card-block">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label>Share Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea type="text" name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
                <a class="btn btn-danger" href="<?php echo ROOT_URL . 'shares'; ?>">Cancel</a>
            </form>
        </div>
    </div>
</div>