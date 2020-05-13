<!-- TODO: treba skontat kako ucitat css normalno (u root main stavit ../) -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Share something</h5>
        <h6 class="card-subtitle mb-2 text-muted">Share anything</h6>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <input type="text" placeholder="Title..." name="title" class="form-control">
                <input type="text" placeholder="Body..." name="body" class="form-control">
                <input type="text" placeholder="Link..." name="link" class="form-control">

                <input type="submit" value="Submit" name="submit" class="btn btn-success">
                <a href="<?php echo ROOT_PATH; ?>share" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>