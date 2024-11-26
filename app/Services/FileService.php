<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService {
  private $disk;

  public function __construct(string $basePath) {
    $this->disk = Storage::build([
      'driver' => 'local',
      'root' => base_path($basePath),
    ]);
  }

  public function fileExists(string $path): bool {
    return $this->disk->exists($path);
  }

  public function getFileContent(string $file): string {
    if (!$this->disk->exists($file)) {
      throw new \Exception("File not found: {$file}");
    }
    return $this->disk->get($file);
  }

  public function saveFileContent(string $file, string $content): bool {
    if (!$this->disk->put($file, $content)) {
      throw new \Exception("Failed to save file: {$file}");
    }
    return true;
  }

  public function renameFile(string $currentPath, string $newPath): bool {
    if (!$this->disk->exists($currentPath)) {
      throw new \Exception("File not found for renaming: {$currentPath}");
    }
    return $this->disk->move($currentPath, $newPath);
  }

  public function deleteFile(string $file): bool {
    if (!$this->disk->exists($file)) {
      throw new \Exception("File not found for deletion: {$file}");
    }
    return $this->disk->delete($file);
  }
}