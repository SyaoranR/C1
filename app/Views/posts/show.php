<div class="container">
    <div class='p-5 m-5 bg-light rounded border shadow'>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/posts" data-toggle="tooltip" title="Posts">Posts</a></li>                
                <li class="breadcrumb-item active" aria-current="page"><?= $data['post']->title ?></li>
            </ol>
        </nav>

        <div class="card text-center">
            <div class="card-header bg-secondary text-white font-weight-bold">
                <?= $data['post']->title ?>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $data['post']->txt ?></p>
            </div>
            <div class="card-footer text-muted">
                <small>
                    Written by: <b><?= $data['user']->username ?></b> em <?= Check::brDate($data['post']->created_at) ?>                    
                </small>
            </div>

            <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="<?= URL . '/posts/edit/' . $data['post']->id ?>" class="btn btn-sm btn-primary"data-toggle="tooltip" title="Edit Post  <?= $data['post']->title ?>"> Edit</a>
                    </li>
                    <li class="list-inline-item">
                            <form action="<?= URL . '/posts/exclude/' . $data['post']->id ?>" method="POST"> <input type="submit" class="btn btn-sm btn-danger" value="Erase" data-toggle="tooltip" title="Delete Post  <?= $data['post']->title ?>"> 
                        </form>
                    </li>
                </ul>
            <?php endif ?>
            
        </div>
    </div>
</div>