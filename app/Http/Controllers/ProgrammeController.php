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
