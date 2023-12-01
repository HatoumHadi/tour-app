<?php

namespace Database\Seeders;

use App\Definitions\SettingKeys;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key' => SettingKeys::FACEBOOK_LINK,
            'value' => '#',
        ]);
        Setting::create([
            'key' => SettingKeys::CONTACT_EMAIL,
            'value' => 'hady_hatoum@hotmail.com',
        ]);
        Setting::create([
            'key' => SettingKeys::CONTACT_PHONE_NUMBER,
            'value' => '+961 76032297',
        ]);
        Setting::create([
            'key' => SettingKeys::INSTAGRAM_LINK,
            'value' => '#',
        ]);
        Setting::create([
            'key' => SettingKeys::LINKED_IN_LINK,
            'value' => '#',
        ]);
        Setting::create([
            'key' => SettingKeys::TWITTER_LINK,
            'value' => '#',
        ]);
    }
}
