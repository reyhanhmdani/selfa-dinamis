<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class NewsObserver
{
    /**
     * Handle the News "updating" event.
     * Hapus file lama jika field 'image' atau 'content' berubah.
     */
    public function updating(News $news): void
    {
        // 1. Hapus thumbnail lama jika diganti
        if ($news->isDirty('image') && $news->getOriginal('image')) {
            Storage::disk('public')->delete($news->getOriginal('image'));
            Log::info('NewsObserver: Deleted old thumbnail', [
                'file' => $news->getOriginal('image'),
            ]);
        }

        // 2. Hapus inline images yang dihapus dari RichEditor content
        if ($news->isDirty('content')) {
            $this->cleanupRemovedInlineImages(
                $news->getOriginal('content') ?? '',
                $news->content ?? '',
            );
        }
    }

    /**
     * Handle the News "deleted" event.
     * Hapus semua file terkait saat record dihapus.
     */
    public function deleted(News $news): void
    {
        // 1. Hapus thumbnail
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
            Log::info('NewsObserver: Deleted thumbnail on record delete', [
                'file' => $news->image,
            ]);
        }

        // 2. Hapus semua inline images dari content
        $this->deleteAllInlineImages($news->content ?? '');
    }

    /**
     * Extract semua URL gambar dari HTML content.
     * Mencari pattern: /storage/news-content/filename.ext
     *
     * @return array<string> List of relative paths (e.g., "news-content/foto.jpg")
     */
    private function extractImagePaths(string $htmlContent): array
    {
        if (empty($htmlContent)) {
            return [];
        }

        $paths = [];

        // Match src="/storage/news-content/..." atau src="http.../storage/news-content/..."
        preg_match_all(
            '/\/storage\/(news-content\/[^\s"\'<>]+)/i',
            $htmlContent,
            $matches,
        );

        if (! empty($matches[1])) {
            $paths = array_unique($matches[1]);
        }

        return $paths;
    }

    /**
     * Bandingkan old vs new content, hapus gambar yang sudah tidak dipakai.
     */
    private function cleanupRemovedInlineImages(string $oldContent, string $newContent): void
    {
        $oldImages = $this->extractImagePaths($oldContent);
        $newImages = $this->extractImagePaths($newContent);

        // Gambar yang ada di old tapi TIDAK ada di new = orphan → hapus
        $removedImages = array_diff($oldImages, $newImages);

        foreach ($removedImages as $imagePath) {
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
                Log::info('NewsObserver: Deleted removed inline image', [
                    'file' => $imagePath,
                ]);
            }
        }
    }

    /**
     * Hapus SEMUA inline images dari content (saat record dihapus).
     */
    private function deleteAllInlineImages(string $htmlContent): void
    {
        $images = $this->extractImagePaths($htmlContent);

        foreach ($images as $imagePath) {
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
                Log::info('NewsObserver: Deleted inline image on record delete', [
                    'file' => $imagePath,
                ]);
            }
        }
    }
}
