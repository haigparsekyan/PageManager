<?php

namespace Backpack\PageManager\app\Http\Controllers\Admin;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\PageManager\app\Http\Requests\PageRequest as StoreRequest;
use Backpack\PageManager\app\Http\Requests\PageRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

class BlocksCrudController extends CrudController
{

    public function setup()
    {
        $modelClass = config('backpack.pagemanager.page_model_block_class', 'Backpack\PageManager\app\Models\Block');
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel($modelClass);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/blocks');
        $this->crud->setEntityNameStrings('block', 'blocks');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();
        $this->crud->setColumns(['title']);

        /*
        |--------------------------------------------------------------------------
        | FIELDS
        |--------------------------------------------------------------------------
        */


        /*
        |--------------------------------------------------------------------------
        | BUTTONS
        |--------------------------------------------------------------------------
        */
    }

    // -----------------------------------------------
    // Overwrites of CrudController
    // -----------------------------------------------

//    // Overwrites the CrudController store() method to add template usage.
    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

//    // Overwrites the CrudController edit() method to add template usage.
//    public function edit($id, $template = false)
//    {
//
//
//        return parent::edit($id);
//    }

    // Overwrites the CrudController update() method to add template usage.
//    public function update(UpdateRequest $request)
//    {
//        $this->addDefaultPageFields(\Request::input('template'));
//        $this->useTemplate(\Request::input('template'));
//
//        return parent::updateCrud();
//    }

    // -----------------------------------------------
    // Methods that are particular to the PageManager.
    // -----------------------------------------------


}
