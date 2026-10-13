<?php

namespace Tests\Feature;

use App\Filament\Resources\KbtkFeeResource;
use App\Filament\Resources\KbtkGalleryResource;
use App\Filament\Resources\PonpesFeeResource;
use App\Filament\Resources\PonpesGalleryResource;
use App\Filament\Resources\SdFeeResource;
use App\Filament\Resources\SdGalleryResource;
use App\Models\AdmissionFee;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FilamentDivisionResourcesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_admin_can_access_all_division_resources(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@selfa.sch.id'],
            [
                'name' => 'Administrator Test',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]
        );

        $this->actingAs($admin);

        // Fee resources per division
        $this->get('/admin/kbtk-fees')->assertSuccessful();
        $this->get('/admin/sd-fees')->assertSuccessful();
        $this->get('/admin/ponpes-fees')->assertSuccessful();

        // Gallery resources per division
        $this->get('/admin/kbtk-galleries')->assertSuccessful();
        $this->get('/admin/sd-galleries')->assertSuccessful();
        $this->get('/admin/ponpes-galleries')->assertSuccessful();

        // Central / global resources
        $this->get('/admin/admission-waves')->assertSuccessful();
        $this->get('/admin/news')->assertSuccessful();
        $this->get('/admin/users')->assertSuccessful();
    }

    public function test_division_queries_are_strictly_scoped(): void
    {
        // Assert Fee queries
        $this->assertEquals(
            ['kbtk'],
            KbtkFeeResource::getEloquentQuery()->pluck('program_type')->unique()->values()->all()
        );

        $this->assertEquals(
            ['sd'],
            SdFeeResource::getEloquentQuery()->pluck('program_type')->unique()->values()->all()
        );

        $this->assertEquals(
            ['ponpes'],
            PonpesFeeResource::getEloquentQuery()->pluck('program_type')->unique()->values()->all()
        );

        Gallery::create([
            'title' => 'Sample KB-TK',
            'image_path' => 'galleries/test-kbtk.jpg',
            'type' => 'kbtk',
            'is_active' => true,
            'sort_order' => 1,
        ]);
        Gallery::create([
            'title' => 'Sample SD',
            'image_path' => 'galleries/test-sd.jpg',
            'type' => 'sd',
            'is_active' => true,
            'sort_order' => 1,
        ]);
        Gallery::create([
            'title' => 'Sample Ponpes',
            'image_path' => 'galleries/test-ponpes.jpg',
            'type' => 'ponpes',
            'is_active' => true,
            'sort_order' => 1,
        ]);

        $this->assertEquals(
            ['kbtk'],
            KbtkGalleryResource::getEloquentQuery()->pluck('type')->unique()->values()->all()
        );

        $this->assertEquals(
            ['sd'],
            SdGalleryResource::getEloquentQuery()->pluck('type')->unique()->values()->all()
        );

        $this->assertEquals(
            ['ponpes'],
            PonpesGalleryResource::getEloquentQuery()->pluck('type')->unique()->values()->all()
        );
    }
}
