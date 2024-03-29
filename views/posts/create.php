<?php $this->layout('layouts/default', ['title' => 'My blog']) ?>

<h2>Create a new article</h2>

<?php if (!empty($_SESSION['error'])) : ?>
    <div class="error"><?= $_SESSION['error'] ?></div>
<?php endif ?>

<a href="/">
    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
    </svg>
</a>

<form action="/" method="post">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="media text-muted pt-3">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="form-row">
                        <label>Titre de l'article :</label>
                        <?php require __DIR__ . "/_form.php" ?>
                        <br>
                        <button type="submit" class="btn btn-info" style="color: white" >create</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</form>