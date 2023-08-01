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
            'value' => 'info@travel-agency.lcoal',
        ]);
        Setting::create([
            'key' => SettingKeys::CONTACT_PHONE_NUMBER,
            'value' => '+1 905 961 9420',
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
