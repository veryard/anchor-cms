<?php function extendSidebar($active = null) {?>
<ul class="list">
    <li<?php if($active == 'pagetypes'):?> class="active"<?php endif;?>>
        <a href="<?php echo Uri::to('admin/extend/pagetypes'); ?>">
            <strong><?php echo __('extend.pagetypes'); ?></strong>
            <span><?php echo __('extend.pagetypes_desc'); ?></span>
        </a>
    </li>
    <li<?php if($active == 'customfields'):?> class="active"<?php endif;?>>
        <a href="<?php echo Uri::to('admin/extend/fields'); ?>">
            <strong><?php echo __('extend.fields'); ?></strong>
            <span><?php echo __('extend.fields_desc'); ?></span>
        </a>
    </li>
    <li<?php if($active == 'variables'):?> class="active"<?php endif;?>>
        <a href="<?php echo Uri::to('admin/extend/variables'); ?>">
            <strong><?php echo __('extend.variables'); ?></strong>
            <span><?php echo __('extend.variables_desc'); ?></span>
        </a>
    </li>
    <li<?php if($active == 'settings'):?> class="active"<?php endif;?>>
        <a href="<?php echo Uri::to('admin/extend/metadata'); ?>">
            <strong><?php echo __('metadata.metadata'); ?></strong>
            <span><?php echo __('metadata.metadata_desc'); ?></span>
        </a>
    </li>
</ul>
<?php }