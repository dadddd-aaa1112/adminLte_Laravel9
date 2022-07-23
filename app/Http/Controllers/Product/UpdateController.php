<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product) {
        $data = $request->validated();
        $tags = $data['tags'];
        $colors = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product->tags()->sync($tags);
        $product->colors()->sync($colors);
        $product->update($data);

        return view('product.show', compact('product'));

    }
}
