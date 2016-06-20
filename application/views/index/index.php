<script>
    $(document).ready(function() {
        $('.searchByTag').submit(function(e){
            e.preventDefault();

            var tag = $.trim($('#tag').val());

            if(!tag){
                $('.search-error').text('Search box is empty!');
                $('.search-error').show().delay(2000).fadeOut();
            }else{
                location.href = '<?= URL ?>search/tag/'+tag;
            }
        });
    });
</script>

<form class="searchByTag">
    <div class="row">
        <div class="center-block">
            <h2>Type some tag for search ...</h2>

            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" id="tag" class="form-control input-lg" placeholder="Pandora" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-lg" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                </div>
            </div>

            <div class="alert alert-danger search-error"></div>
        </div>
    </div>
</form>