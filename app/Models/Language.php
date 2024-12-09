<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $fillable = ["name", "locale"];

    protected static function boot()
    {
        parent::boot();

        $fileService = new FileService('lang');

        static::saved(function (Model $model) use ($fileService) {
            if (isset($model->changes["locale"])) {
                $originalLocale = $model->getOriginal("locale");
                $fileService->renameFile("$originalLocale.json", "$model->locale.json");
            } elseif (!$fileService->fileExists("$model->locale.json")) {
                $defaultContents = $fileService->getFileContent("default.json");
                if ($fileService->duplicateFolder("default", $model->locale)) {
                    $fileService->saveFileContent("$model->locale.json", $defaultContents);
                }
            }
        });

        static::deleted(function (Model $model) use ($fileService) {
            $file = "$model->locale.json";
            $fileService->deleteFile($file);
            $fileService->deleteFolder($model->locale);
        });
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
