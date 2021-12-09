<?php 
 $pageTitle ="Model Details ";
 $page="Details";
 include './inc/header.php';

if(isset($_GET['pid'])){
$id = $_GET['pid'];
$model = $models[$id];
}

?>

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 ">
                    <div class="sketchfab-embed-wrapper "> <iframe  frameborder="0"
                                allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                                allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                                execution-while-out-of-viewport execution-while-not-rendered web-share height="500"
                                width="500"
                                src="https://sketchfab.com/models/<?= $model['img']?>/embed?autospin=0&autostart=1&ui_hint=0">
                            </iframe> </div>
                            
</div>
                    <div class="col-md-6">
                        <h1 class="display-5 text-primary "><?= $model['title']?></h1>

                        <p class="lead"><?= $model['description']?></p>
                        <div class="d-flex">

                        
                        <a class="btn btn-outline-primary" href="https://sketchfab.com/models/<?= $model['img']?>/embed?autospin=0&autostart=1&ui_hint=0">See full screen</a>


                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Related items section-->


        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <hr>
            <div class="row ">
            <?php foreach( array_slice($models ,0,4,true)  as $id => $model): ?>

            <div class="col-lg-3 col-md-6 my-3">

                <div class="card">
                    <div class="ca">
                        <div class="sketchfab-embed-wrapper"> <iframe  frameborder="0"
                                allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                                allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                                execution-while-out-of-viewport execution-while-not-rendered web-share height="200"
                                width="250"
                                src="https://sketchfab.com/models/<?= $model['img']?>/embed?autospin=0&autostart=1&ui_hint=0">
                            </iframe> </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-primary"><?= $model['title']?></h5>

                        <a class="btn btn-outline-primary" href="details.php?pid=<?=$id?>" target="_blank">see more</a>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            </div>
        </section>
        
    </body>
</html>
<?php
?>