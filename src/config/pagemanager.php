<?php

return [
    // Change this class if you wish to extend PageCrudController
    'admin_controller_class' => 'Backpack\PageManager\app\Http\Controllers\Admin\PageCrudController',

    // Change this class if you wish to extend the Page model
    'page_model_class'       => 'Backpack\PageManager\app\Models\Page',

    // Change this class if you wish to extend BlocksCrudController
    'admin_controller_blocks_class' => 'Backpack\PageManager\app\Http\Controllers\Admin\BlocksCrudController',

    // Change this class if you wish to extend the Block model
    'page_model_block_class'       => 'Backpack\PageManager\app\Models\Block',
];
