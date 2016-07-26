<div class="col-xs-12 col-sm-3">
    <div class="tag-block">
        <div class="title-block text-center">
            Tag
        </div>
        <div class="list-tags">
            <?php if ( function_exists('wp_tag_cloud') ){ ?>
                <ul class="list-unstyled">
                    <li>
                        <?php wp_tag_cloud('number=0&orderby=name&order=ASC'); ?>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>