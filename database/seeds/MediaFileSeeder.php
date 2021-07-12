<?php

use Illuminate\Database\Seeder;

class MediaFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //general
        DB::table('media_files')->insert([
            ['file_name' => 'avatar', 'file_path' => 'demo/general/avatar.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'avatar-2', 'file_path' => 'demo/general/avatar-2.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'avatar-3', 'file_path' => 'demo/general/avatar-3.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'avatar-4', 'file_path' => 'demo/general/avatar-4.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'avatar-5', 'file_path' => 'demo/general/avatar-5.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'contact_banner', 'file_path' => 'demo/general/inner-pagebg.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'ico_adventurous', 'file_path' => 'demo/general/ico_adventurous.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'ico_localguide', 'file_path' => 'demo/general/ico_localguide.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'ico_maps', 'file_path' => 'demo/general/ico_maps.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'ico_paymethod', 'file_path' => 'demo/general/ico_paymethod.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'logo', 'file_path' => 'demo/general/header-logo2.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'logo_trans', 'file_path' => 'demo/general/header-logo.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'bg_contact', 'file_path' => 'demo/general/bg-contact.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'favicon', 'file_path' => 'demo/general/favicon.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ['file_name' => 'thumb-vendor-register', 'file_path' => 'demo/general/thumb-vendor-register.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'bg-video-vendor-register1', 'file_path' => 'demo/general/bg-video-vendor-register1.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'ico_chat_1', 'file_path' => 'demo/general/ico_chat_1.svg', 'file_type' => 'image/svg', 'file_extension' => 'svg'],
            ['file_name' => 'ico_friendship_1', 'file_path' => 'demo/general/ico_friendship_1.svg', 'file_type' => 'image/svg', 'file_extension' => 'svg'],
            ['file_name' => 'ico_piggy-bank_1', 'file_path' => 'demo/general/ico_piggy-bank_1.svg', 'file_type' => 'image/svg', 'file_extension' => 'svg'],
            ['file_name' => 'home-mix', 'file_path' => 'demo/general/home-mix.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'image_home_mix_1', 'file_path' => 'demo/general/image_home_mix_1.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'image_home_mix_2', 'file_path' => 'demo/general/image_home_mix_2.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'image_home_mix_3', 'file_path' => 'demo/general/image_home_mix_3.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
        ]);

        //Property
        DB::table('media_files')->insert([
            ['file_name' => 'banner-search-property', 'file_path' => 'demo/general/home-mix.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'banner-search-property-2', 'file_path' => 'demo/general/home-mix.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
        ]);
        for ($i=1 ; $i <= 13 ; $i++){
            DB::table('media_files')->insert([
                ['file_name' => 'property-'.$i, 'file_path' => 'demo/property/property-'.$i.'.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ]);
        }
        for ($i=1 ; $i <= 5 ; $i++){
            DB::table('media_files')->insert([
                ['file_name' => 'property-gallery-'.$i, 'file_path' => 'demo/property/gallery/property-gallery-'.$i.'.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ]);
        }


        for ($i=1 ; $i <= 3 ; $i++){
            DB::table('media_files')->insert([
                ['file_name' => 'property-single-'.$i, 'file_path' => 'demo/property/property-'.$i.'.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ]);
        }
        for ($i=1 ; $i <= 6 ; $i++){
            DB::table('media_files')->insert([
                ['file_name' => 'icon-property-box-'.$i, 'file_path' => 'demo/property/property-'.$i.'.jpg', 'file_type' => 'image/png', 'file_extension' => 'jpg'],
            ]);
        }

        //agencies
        for ($i=1 ; $i <= 6 ; $i++){
            DB::table('media_files')->insert([
                ['file_name' => 'agencies-'.$i, 'file_path' => 'demo/agencies/agencies-'.$i.'.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ]);
        }

        //team
        for ($i = 1; $i <= 4; $i++) {
            DB::table('media_files')->insert([
                ['file_name' => 'team-'.$i, 'file_path' => 'demo/team/'.$i.'.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ]);
        }
        //Partners
        for ($i = 1; $i <= 5; $i++) {
            DB::table('media_files')->insert([
                ['file_name' => 'partners-'.$i, 'file_path' => 'demo/partners/'.$i.'.png', 'file_type' => 'image/png', 'file_extension' => 'png'],
            ]);
        }
        //about us
        DB::table('media_files')->insert([
            ['file_name' => 'about-image-video', 'file_path' => 'demo/about/1.jpg', 'file_type' => 'image/jpg', 'file_extension' => 'jpg'],
        ]);

        //Location
        DB::table('media_files')->insert([
            ['file_name' => 'location-1', 'file_path' => 'demo/location/location-1.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'location-2', 'file_path' => 'demo/location/location-2.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'location-3', 'file_path' => 'demo/location/location-3.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'location-4', 'file_path' => 'demo/location/location-4.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'location-5', 'file_path' => 'demo/location/location-5.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'banner-location-1', 'file_path' => 'demo/location/banner-detail/banner-location-1.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'trip-idea-1', 'file_path' => 'demo/location/trip-idea/trip-idea-1.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'trip-idea-2', 'file_path' => 'demo/location/trip-idea/trip-idea-2.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],

        ]);

        //News
        DB::table('media_files')->insert([
            ['file_name' => 'news-1', 'file_path' => 'demo/news/news-1.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-2', 'file_path' => 'demo/news/news-2.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-3', 'file_path' => 'demo/news/news-3.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-4', 'file_path' => 'demo/news/news-4.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-5', 'file_path' => 'demo/news/news-5.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-6', 'file_path' => 'demo/news/news-6.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-7', 'file_path' => 'demo/news/news-7.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
            ['file_name' => 'news-banner', 'file_path' => 'demo/news/news-banner.jpg', 'file_type' => 'image/jpeg', 'file_extension' => 'jpg'],
        ]);
    }
}
