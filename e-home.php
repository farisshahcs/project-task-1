
<?php
ob_start();
?>

<div class="p-3 text-white text-center">
    <h1 class="display-5 mb-3">Welcome to</h1>
</div>

<div class="mb-4">
    <img src="images/Extase_Banner.jpg" alt="Banner Image" class="img-fluid w-100 rounded shadow">
</div>

<hr>

<div class="row align-items-center">

    <div class="col-md-8">
        <div class="p-3 text-white text-justify" style="height: 200px; overflow: auto;">
            <p class="lead">At Extase, we sell high-quality pruning shears to suit all of your needs, 
                ranging from basic garden tasks to more advanced pruning requirements, we have it all!
                Discover our wide range of pruning shears, each designed with precision and durability in mind.
                Our products are crafted from premium materials, ensuring long-lasting performance and reliability.
                As the saying goes, "A gardener is only as good as their tools," and at Extase, 
                we believe in providing the best tools for your gardening journey.
            </p>
        </div>
        
    </div>

    <div class="col-md-4 text-center">
        <img src="images/PS12.jpg" alt="PS12" class="img-fluid rounded shadow">
    </div>

</div>

<?php
$content = ob_get_clean();
require_once 'c0-layout.php';
?>
