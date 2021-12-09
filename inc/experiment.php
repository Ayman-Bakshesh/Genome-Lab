<section>
<div class="container-fluid px-5 ">
<h1 class="text-center py-5 display-5" style="color: #3a388e;">Experiments</h1>

    <div class="row">
    <?php foreach($experiments as $id => $experiment): ?>

    <div class="col-2 p-2">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $experiment['title']?></h5>
            <p class="card-text"><?= $experiment['description']?></p>
            <a class="btn btn-outline-primary" href="ex-model.php?pid=<?=$id?>">see more</a>
        </div>
        </div>
    </div>
    <?php endforeach; ?>

    </div>

    </div>
</section>