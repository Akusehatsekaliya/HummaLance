<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService
{
  private $disk;

  public function __construct(string $basePath)
  {
    $this->disk = Storage::build([
      'driver' => 'local',
      'root' => base_path($basePath),
    ]);
  }

  public function fileExists(string $path): bool
  {
    return $this->disk->exists($path);
  }

  public function getFolderFiles(string $file): array
  {
    if (!$this->disk->exists($file)) {
      throw new \Exception("File not found: {$file}");
    }
    return $this->disk->allFiles($file);
  }

  public function getLastModified(string $file): ?string
  {
    if (!$this->disk->exists($file)) {
      throw new \Exception("File not found: {$file}");
    }

    $timestamp = $this->disk->lastModified($file);

    return date('Y-m-d H:i:s', $timestamp);
  }


  public function duplicateFolder(string $source, string $destination): bool
  {
    if (!$this->disk->exists($source)) {
      throw new \Exception(message: "Folder not found: {$source}");
    }

    $files = $this->disk->allFiles($source);

    if (!$this->disk->makeDirectory($destination)) {
      return false;
    }

    foreach ($files as $file) {
      $relativePath = str_replace($source . '/', '', $file);
      $destinationPath = $destination . '/' . $relativePath;

      $this->disk->makeDirectory(dirname($destinationPath));

      if (!$this->disk->copy($file, $destinationPath)) {
        return false;
      }
    }

    return true;
  }

  public function deleteFolder(string $folder): bool
  {
    if (!$this->disk->exists($folder)) {
      throw new \Exception("Folder not found: {$folder}");
    }

    $this->disk->deleteDirectory($folder);

    return !$this->disk->exists($folder);
  }



  public function getFileContent(string $file): string
  {
    if (!$this->disk->exists($file)) {
      throw new \Exception("File not found: {$file}");
    }
    return $this->disk->get($file);
  }

  public function saveFileContent(string $file, string $content): bool
  {
    if (!$this->disk->put($file, $content)) {
      throw new \Exception("Failed to save file: {$file}");
    }
    return true;
  }

  public function renameFile(string $currentPath, string $newPath): bool
  {
    if (!$this->disk->exists($currentPath)) {
      throw new \Exception("File not found for renaming: {$currentPath}");
    }
    return $this->disk->move($currentPath, $newPath);
  }

  public function deleteFile(string $file): bool
  {
    if (!$this->disk->exists($file)) {
      throw new \Exception("File not found for deletion: {$file}");
    }
    return $this->disk->delete($file);
  }
}