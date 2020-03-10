<?php

namespace controllers;

use components\App;
use components\web\AbstractSecuredController;
use models\Permission;
use models\Role;

/**
 * Class RolesController
 * @package controllers
 */
class RolesController extends AbstractSecuredController
{
    public function actionList()
    {
        $roles = Role::findAll();
        return $this->render('list', ['roles' => $roles]);
    }

    public function actionCreate()
    {
        if (App::getInstance()->request->getIsPost()) {
            $role = new Role();
            $role->insert($_POST);

            $this->redirect('/roles/list');
        }

        $permissions = Permission::findAll();
        return $this->render('create', ['permissions' => $permissions]);
    }

    public function actionUpdate()
    {
        $model = Role::findOne(['id' => $_GET['id']]);
        if ($model && App::getInstance()->request->getIsPost()) {
            $model->update($_POST);
            $this->redirect('/roles/list');
        }

        return $this->render('update', ['role' => $model]);
    }

    public function actionDelete()
    {
        $model = Role::findOne(['id' => $_GET['id']]);
        if ($model) {
            $model->delete();
        }

        $this->redirect('/roles/list');
    }
}
