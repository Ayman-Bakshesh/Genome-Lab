<?php
    include './inc/header.php';
    include './inc/nav.php';
    
if(isset($_GET['pid'])){
    $id = $_GET['pid'];
    $experiment = $experiments[$id];
    }
    
?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"><?= $experiment['title']?></h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
        </p>
      </div>
    </div>
  </section>

  <section style="overflow: hidden;" class="album bg-light">
    <div class="container-fluid px-5 ">
        <h1 class="text-center py-5 display-5" style="color: #3a388e;">Models</h1>
        <div class="row ">
            
        <?php foreach($models as $id => $model): ?>
            <div class="col-lg-3 col-md-6 my-3">

                <div class="card">
                    <div class="ca">
                        <div class="sketchfab-embed-wrapper"> <iframe  frameborder="0"
                                allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                                allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                                execution-while-out-of-viewport execution-while-not-rendered web-share height="320"
                                width="435"
                                src="https://sketchfab.com/models/<?= $model['img']?>/embed?autospin=0&autostart=1&ui_hint=0">
                            </iframe> </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-primary"><?= $model['title']?></h5>
                        <p class="card-text"><?= $model['description']?></p>

                        <a class="btn btn-outline-primary" href="details.php?pid=<?=$id?>" target="_blank">see more</a>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
</section>