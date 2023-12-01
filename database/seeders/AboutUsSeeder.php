<?php

namespace Database\Seeders;

use App\Definitions\AboutUsType;
use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::create([
            'key' => 'header',
            'value' => 'about_us/banners/header.png',
            'type' => AboutUsType::BANNER,
        ]);
        AboutUs::create([
            'key' => 'title',
            'value' => 'About Us',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'intro-title',
            'value' => 'About us',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'intro-description',
            'value' => 'We Are The World Best Transport insurance agency Company Since 2000',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'intro-image',
            'value' => 'about_us/images/intro-image.png',
            'type' => AboutUsType::IMAGE,
        ]);
        AboutUs::create([
            'key' => 'first-card-title',
            'value' => 'Best services',
            'icon' => 'about_us/icons/world.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'first-card-description',
            'value' => 'Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit. Incididunt ut dolore.',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'second-card-title',
            'value' => 'Trusted payment',
            'icon' => 'about_us/icons/money.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'second-card-description',
            'value' => 'Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit. Incididunt ut dolore.',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'third-card-title',
            'value' => 'Top facility',
            'icon' => 'about_us/icons/star.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'third-card-description',
            'value' => 'Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit. Incididunt ut dolore.',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'forth-card-title',
            'value' => 'Awesome deals',
            'icon' => 'about_us/icons/offer.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'forth-card-description',
            'value' => 'Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit. Incididunt ut dolore.',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'middle-banner',
            'value' => 'about_us/banners/middle-banner.png',
            'type' => AboutUsType::BANNER,
        ]);
        AboutUs::create([
            'key' => 'middle-title',
            'value' => 'Have you any questions? Get A Consultant',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'middle-description',
            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ' .
                'labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ' .
                'aliquip ex ea commodo consequat',
            'type' => AboutUsType::TEXT
        ]);
        AboutUs::create([
            'key' => 'first-badge',
            'value' => '2348',
            'icon' => 'about_us/icons/greeting.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'first-badge-label',
            'value' => 'Partners',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'second-badge',
            'value' => '1748',
            'icon' => 'about_us/icons/bank.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'second-badge-label',
            'value' => 'Listed property',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'third-badge',
            'value' => '4287',
            'icon' => 'about_us/icons/marker.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'third-badge-label',
            'value' => 'Destinations',
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'forth-badge',
            'value' => '40',
            'icon' => 'about_us/icons/calendar.png',
            'icon_enabled' => true,
            'type' => AboutUsType::TEXT,
        ]);
        AboutUs::create([
            'key' => 'forth-badge-label',
            'value' => 'Booking',
            'type' => AboutUsType::TEXT,
        ]);
    }
}
