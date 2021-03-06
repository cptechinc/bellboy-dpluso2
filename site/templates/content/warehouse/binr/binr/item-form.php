<div class="form-group">
	<a href="<?= $page->parent->url; ?>" class="btn btn-primary not-round">
		<i class="fa fa-arrow-left" aria-hidden="true"></i> Return to BINR Menu
	</a>
</div>
<form action="<?= $page->parent->child('name=redir')->url; ?>" method="post" class="allow-enterkey-submit">
    <input type="hidden" name="action" value="inventory-search">
    <input type="hidden" name="page" value="<?= $page->fullURL->getUrl(); ?>">
    <label>Scan Barcode, UPC, Item ID, or  Lot / Serial #</label>
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" name="scan" placeholder="Barcode, UPC, Item ID, Lot / Serial #" type="text">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-emerald not-round">Submit</button>
            </span>
        </div>
    </div>
</form>
