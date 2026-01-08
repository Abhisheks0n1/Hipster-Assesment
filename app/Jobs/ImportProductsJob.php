<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ImportProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $chunk;

    public function __construct(array $chunk)
    {
        $this->chunk = $chunk;
    }

    public function handle(): void
    {
        foreach ($this->chunk as $row) {
            if (empty($row['name'])) continue; 

            $validator = Validator::make($row, [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'stock' => 'integer|min:0',
            ]);

            if ($validator->fails()) {
                
                continue;
            }

            Product::create([
                'name' => $row['name'],
                'description' => $row['description'] ?? null,
                'price' => $row['price'],
                'image' => $row['image'] ?? 'default.png',
                'category' => $row['category'] ?? null,
                'stock' => $row['stock'] ?? 0,
            ]);
        }
    }
}