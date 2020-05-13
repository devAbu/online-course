<!-- TODO: treba skontat kako ucitat css normalno (u root main stavit ../) -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Login</h5>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <input type="email" placeholder="Email..." name="email" class="form-control">
                <input type="password" placeholder="Password..." name="password" class="form-control">

                <input type="submit" value="Submit" name="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>