<?php

namespace controllers;

use components\App;
use components\web\AbstractSecuredController;
use models\Permission;

/**
 * Class PermissionsController
 * @package controllers
 */
class PermissionsController extends AbstractSecuredController
{
    public function actionList()
    {
        $permissions = Permission::findAll();

        return $this->render('list', [
            'permissions' => $permissions
        ]);
    }

    public function actionCreate()
    {
        if (App::getInstance()->request->getIsPost()) {
            $permission = new Permission();
            $permission->insert($_POST);

            $this->redirect('/permissions/list');
        }

        return $this->render('create');
    }

    public function actionUpdate()
    {
        $model = Permission::findOne(['id' => $_GET['id']]);
        if ($model && App::getInstance()->request->getIsPost()) {
            $model->update($_POST);
            $this->redirect('/permissions/list');
        }

        return $this->render('update', ['permission' => $model]);
    }

    public function actionDelete()
    {
        $model = Permission::findOne(['id' => $_GET['id']]);
        if ($model) {
            $model->delete();
        }

        $this->redirect('/permissions/list');
    }
}
