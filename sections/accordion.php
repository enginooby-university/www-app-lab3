<div id="cool-accordion">
    <div class="card">

        <div class="card-header" id="heading1">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                    aria-controls="collapse1">
                    Breadcrumb
                </button>
            </h5>
        </div>
        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#cool-accordion">
            <div class="card-body"><?php include "sections/breadcrumb.php";?></div>
        </div>

        <div class="card-header" id="heading2">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
                    aria-controls="collapse2">
                    Carousel
                </button>
            </h5>
        </div>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#cool-accordion">
            <div class="card-body"><?php include "sections/carousel.php";?></div>
        </div>

    </div>
</div>