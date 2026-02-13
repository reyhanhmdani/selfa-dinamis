<?php

namespace App\Observers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryObserver
{
    /**
     * Handle the Gallery "updating" event.
     * Hapus file lama jika field 'image_path' berubah.
     */
    public function updating(Gallery $gallery): void
    {
        // Cek apakah field 'image_path' berubah
        if ($gallery->isDirty('image_path') && $gallery->getOriginal('image_path')) {
            // Hapus file lama dari storage
            Storage::disk('public')->delete($gallery->getOriginal('image_path'));
        }
    }

    /**
     * Handle the Gallery "deleted" event.
     * Hapus file saat record dihapus.
     */
    public function deleted(Gallery $gallery): void
    {
        if ($gallery->image_path) {
            Storage::disk('public')->delete($gallery->image_path);
        }
    }
}
