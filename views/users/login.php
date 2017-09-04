<div class="container-fluid">
    <div class="card">
        <div class="card-header">Login to Shareboard</div>
        <div class="card-block">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="Login"/>
            </form>
        </div>
    </div>
</div>