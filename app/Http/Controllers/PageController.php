<?php

namespace App\Http\Controllers;

use App\Models\AdmissionFee;
use App\Models\AdmissionWave;
use App\Models\Gallery;
use App\Models\News;
use App\Models\SchoolProfile;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $news = News::published()
            ->latest('published_at')
            ->take(5)
            ->get();

        $admissionWave = AdmissionWave::active()->latest('id')->first();
        $admissionFees = AdmissionFee::published()->get();
        $profile = SchoolProfile::where('division', 'general')->first();

        return view('home', compact('news', 'admissionWave', 'admissionFees', 'profile'));
    }

    public function sd(): View
    {
        $galleries = Gallery::active()
            ->ofType('sd')
            ->orderBy('sort_order')
            ->latest()
            ->get();

        $admissionWave = AdmissionWave::active()->latest('id')->first();
        $admissionFee = AdmissionFee::published()->where('program_type', 'sd')->first();
        $news = News::published()->latest('published_at')->take(5)->get();
        $profile = SchoolProfile::where('division', 'sd')->first();

        return view('programs.sd', compact('galleries', 'admissionWave', 'admissionFee', 'news', 'profile'));
    }

    public function ponpes(): View
    {
        $galleries = Gallery::active()
            ->ofType('ponpes')
            ->orderBy('sort_order')
            ->latest()
            ->get();

        $admissionWave = AdmissionWave::active()->latest('id')->first();
        $admissionFee = AdmissionFee::published()->where('program_type', 'ponpes')->first();
        $news = News::published()->latest('published_at')->take(5)->get();
        $profile = SchoolProfile::where('division', 'ponpes')->first();

        return view('programs.ponpes', compact('galleries', 'admissionWave', 'admissionFee', 'news', 'profile'));
    }

    public function kbtk(): View
    {
        $galleries = Gallery::active()
            ->ofType('kbtk')
            ->orderBy('sort_order')
            ->latest()
            ->get();

        $admissionWave = AdmissionWave::active()->latest('id')->first();
        $admissionFee = AdmissionFee::published()->where('program_type', 'kbtk')->first();
        $news = News::published()->latest('published_at')->take(5)->get();
        $profile = SchoolProfile::where('division', 'kbtk')->first();

        return view('programs.kbtk', compact('galleries', 'admissionWave', 'admissionFee', 'news', 'profile'));
    }

    public function berita(): View
    {
        $news = News::published()
            ->latest('published_at')
            ->paginate(9);

        return view('berita.index', compact('news'));
    }

    public function beritaShow(string $slug): View
    {
        $news = News::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedNews = News::published()
            ->where('id', '!=', $news->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('berita.show', compact('news', 'relatedNews'));
    }
}
