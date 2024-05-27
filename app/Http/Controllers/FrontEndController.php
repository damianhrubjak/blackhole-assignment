<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class FrontEndController extends Controller
{
    public function home(): Response
    {
        $realEstates = [];
        for ($i = 0; $i < 24; $i++) {
            $realEstates[] = [
                'image' => asset('/images/real-estates/real-estate-' . fake()->numberBetween(1, 12) . '.jpg'),
                'price' => fake()->randomFloat(2, 100000, 2500000),
                'address' => fake()->address(),
                'bathrooms' => fake()->randomDigitNotNull(),
                'bedrooms' => fake()->randomDigitNotNull(),
                'area' => fake()->randomFloat(2, 500, 2500),
            ];
        }

        return response()->view('pages.home', ['real_estates' => $realEstates]);
    }
}
