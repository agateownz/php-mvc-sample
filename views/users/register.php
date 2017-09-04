<div class="container-fluid">
    <div class="card">
        <div class="card-header">Register User</div>
        <div class="card-block">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </form>
        </div>
    </div>
</div>