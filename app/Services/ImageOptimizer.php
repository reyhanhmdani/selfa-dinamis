<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageOptimizer
{
    /**
     * Compress dan convert gambar ke WebP.
     *
     * @param  UploadedFile  $file  File yang diupload
     * @param  string  $directory  Target directory di disk public
     * @param  int  $maxWidth  Lebar maksimum (px)
     * @param  int  $quality  Kualitas WebP (1-100)
     */
    public static function optimize(
        UploadedFile $file,
        string $directory,
        int $maxWidth = 1200,
        int $quality = 85,
    ): string {
        $manager = new ImageManager(new Driver());
        $image = $manager->read($file->getPathname());

        // Hanya resize kalau lebih besar dari maxWidth
        if ($image->width() > $maxWidth) {
            $image->scaleDown(width: $maxWidth);
        }

        // Generate filename: slug + random + .webp
        $filename = Str::random(20) . '.webp';
        $path = $directory . '/' . $filename;

        // Encode ke WebP dan simpan
        $encoded = $image->toWebp($quality);

        Storage::disk('public')->put($path, (string) $encoded);

        return $path;
    }
}
