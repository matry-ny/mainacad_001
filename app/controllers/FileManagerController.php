<?php

namespace controllers;

use components\App;
use components\web\AbstractSecuredController;
use helpers\ArraysHelper;
use models\FileManager;

/**
 * Class FileManagerController
 * @package controllers
 */
class FileManagerController extends AbstractSecuredController
{
    public function actionCreateDir()
    {
        $this->getModel()->createDirectory($_POST['dirName']);

        $this->redirect('/');
    }

    public function actionUploadFile()
    {
        $this->getModel()->uploadFile(
            $_FILES['attachement']['tmp_name'],
            $_FILES['attachement']['name']
        );

        $this->redirect('/');
    }

    public function actionUploadManyFiles()
    {
        $files = ArraysHelper::reArrayFiles($_FILES['attachements']);
        foreach ($files as $file) {
            $this->getModel()->uploadFile($file['tmp_name'], $file['name']);
        }

        $this->redirect('/');
    }

    /**
     * @return FileManager
     */
    private function getModel() : FileManager
    {
        return new FileManager(App::getInstance()->getUser());
    }
}
