<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">From Flickr
            <small>using "<?= $this->tag ?>" tag</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<?php foreach($this->data as $items): ?>
    <div class="row">
        <?php foreach($items as $item): ?>
            <div class="col-md-4 portfolio-item">
                <h5>
                    <a href="<?= $item['link'] ?>" target="_blank"><?= $item['title'] ?></a>
                </h5>

                <a href="<?= $item['link'] ?>" target="_blank">
                    <img class="img-responsive" src="<?= $item['img'] ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- /.row -->
<?php endforeach; ?>