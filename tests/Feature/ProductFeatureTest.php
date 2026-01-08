<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Admin;
use App\Jobs\ImportProductsJob;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Queue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test; 

class ProductFeatureTest extends TestCase
{
    use RefreshDatabase;
    #[Test]
    public function bulk_import_queues_job()
    {
        Queue::fake();

        $admin = Admin::factory()->create();

        $fakeFile = UploadedFile::fake()->createWithContent('products.csv', "name,description,price,image,category,stock\nTest,Desc,10.99,,Electronics,100");

        $response = $this->actingAs($admin, 'admin')
            ->post('/admin/products/import', [
                'file' => $fakeFile,
            ]);

        $response->assertStatus(302);

        Queue::assertPushed(ImportProductsJob::class);
    }
}