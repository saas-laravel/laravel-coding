<?php

namespace Database\Factories;

use App\Models\User;
use Modules\Settings\Models\Setting;
use Modules\Settings\Enums\SettingType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Setting>
 */
class SettingFactory extends Factory
{
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'value' => fake()->name(),
            'type' => fake()->randomElement(SettingType::cases()),
        ];
    }

}
