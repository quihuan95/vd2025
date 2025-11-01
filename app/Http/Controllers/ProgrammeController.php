<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProgrammeController extends Controller
{
  /**
   * Display the programme agenda page
   */
  public function agenda(Request $request)
  {
    $images = $this->getProgrammeImages();

    return view('pages.programme.agenda', compact('images'));
  }

  /**
   * Display Posters page with hierarchical sections
   */
  public function posters(Request $request)
  {
    // Now returns a flat array of image URLs
    $images = $this->getPosterSections();

    return view('pages.programme.posters', compact('images'));
  }

  /**
   * Get programme images from the images/programme folder
   */
  private function getProgrammeImages()
  {
    $images = [];
    $programmePath = public_path('images/programme');

    // Check if directory exists
    if (!File::exists($programmePath)) {
      return $images;
    }

    // Get all files from the programme directory
    $files = File::files($programmePath);

    foreach ($files as $file) {
      $filename = $file->getFilename();
      $extension = strtolower($file->getExtension());

      // Only include image files
      if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        $images[] = [
          'filename' => $filename,
          'path' => 'images/programme/' . $filename,
          'url' => asset('images/programme/' . $filename),
          'size' => $this->getFileSize($file->getPathname())
        ];
      }
    }

    // Sort images by filename
    usort($images, function ($a, $b) {
      return strcmp($a['filename'], $b['filename']);
    });

    return $images;
  }

  /**
   * Get all image URLs from a given public relative folder path.
   * Example: getImagesFromFolder('images/posters')
   * Returns: array of string URLs only
   */
  public function getImagesFromFolder(string $relativeFolderPath, array $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp']): array
  {
    $relativeFolderPath = trim($relativeFolderPath, "/\\");
    $folderPath = public_path($relativeFolderPath);

    if (!File::exists($folderPath)) {
      return [];
    }

    $images = [];
    $files = File::files($folderPath);


    foreach ($files as $file) {
      $extension = strtolower($file->getExtension());
      if (in_array($extension, $allowedExtensions, true)) {
        $filename = $file->getFilename();
        $relative = $relativeFolderPath . '/' . $filename;
        $images[] = [
          'filename' => $filename,
          'url' => asset($relative),
        ];
      }
    }

    usort($images, fn($a, $b) => strcmp($a['filename'], $b['filename']));

    // Return only URLs
    return array_map(fn($i) => $i['url'], $images);
  }

  /**
   * Scan public/images/posters and group images by section (subfolders)
   */
  private function getPosterSections(): array
  {
    $path_doc_1 = 'images/posters/FILE DỌC/TỆP 1';
    $path_doc_2 = 'images/posters/FILE DỌC/TỆP 2';
    $path_doc_3 = 'images/posters/FILE DỌC/TỆP 3';
    $path_ngang_1 = 'images/posters/FILE NGANG/tệp 1';
    $path_ngang_2 = 'images/posters/FILE NGANG/tệp 2';
    $path_ngang_3 = 'images/posters/FILE NGANG/tệp 3';

    $images_doc_1 = $this->getImagesFromFolder($path_doc_1);
    $images_doc_2 = $this->getImagesFromFolder($path_doc_2);
    $images_doc_3 = $this->getImagesFromFolder($path_doc_3);
    $images_ngang_1 = $this->getImagesFromFolder($path_ngang_1);
    $images_ngang_2 = $this->getImagesFromFolder($path_ngang_2);
    $images_ngang_3 = $this->getImagesFromFolder($path_ngang_3);

    // dd($path_doc_1);

    $result = [
      'vertical' => [
        ...$images_doc_1,
        ...$images_doc_2,
        ...$images_doc_3,
      ],
      'horizontal' => [
        ...$images_ngang_1,
        ...$images_ngang_2,
        ...$images_ngang_3,
      ]
    ];

    return $result;
  }

  /**
   * Get file size in human readable format
   */
  private function getFileSize($filepath)
  {
    $bytes = File::size($filepath);
    $units = ['B', 'KB', 'MB', 'GB'];

    for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
      $bytes /= 1024;
    }

    return round($bytes, 2) . ' ' . $units[$i];
  }

  /**
   * API endpoint to get programme images (optional)
   */
  public function getImages()
  {
    $images = $this->getProgrammeImages();

    return response()->json([
      'success' => true,
      'data' => $images,
      'count' => count($images)
    ]);
  }
}
