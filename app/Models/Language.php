<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $fillable = ["name", "code"];

    protected static function boot()
    {
        parent::boot();

        $fileService = new FileService('lang');

        static::saved(function (Model $model) use ($fileService) {
            if (isset($model->changes["code"])) {
                $originalCode = $model->getOriginal("code");
                $fileService->renameFile("$originalCode.json", "$model->code.json");
            } elseif (!$fileService->fileExists("$model->code.json")) {
                $defaultContents = $fileService->getFileContent("default.json");
                $fileService->saveFileContent("$model->code.json", $defaultContents);
            }
        });

        static::deleted(function (Model $model) use ($fileService) {
            $file = "$model->code.json";
            $fileService->deleteFile($file);
        });
    }
}