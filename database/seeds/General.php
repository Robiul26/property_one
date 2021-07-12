<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Media\Models\MediaFile;

class General extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Setting header,footer
        $menu_items_en = array(
            array(
                'name'       => 'Home',
                'url'        => '/',
                'item_model' => 'custom',
                'model_name' => 'Custom',
                'children'   => array(),
            ),
            array(
                'name'       => 'Property',
                'url'        => '#',
                'item_model' => 'custom',
                'model_name' => 'Custom',
                'children'   => array(
                    array(
                        'name'       => 'Property List',
                        'url'        => '/property',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                        'children'   => array(
                            array(
                                'name'       => 'Property List V1',
                                'url'        => '/property?layout=1',
                                'item_model' => 'custom',
                                'model_name' => 'Custom',
                                'children'   => array(),
                            ),
                            array(
                                'name'       => 'Property List V2',
                                'url'        => '/property?layout=2',
                                'item_model' => 'custom',
                                'model_name' => 'Custom',
                                'children'   => array(),
                            ),
                        ),
                    ),
                    array(
                        'name'       => 'Property Detail',
                        'url'        => '/property/renovated-apartment-1',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                        'children'   => array(
                            array(
                                'name'       => 'Property Detail V1',
                                'url'        => '/property/renovated-apartment-1?layout=1',
                                'item_model' => 'custom',
                                'model_name' => 'Custom',
                                'children'   => array(),
                            ),
                            array(
                                'name'       => 'Property Detail V2',
                                'url'        => '/property/renovated-apartment-1?layout=2',
                                'item_model' => 'custom',
                                'model_name' => 'Custom',
                                'children'   => array(),
                            ),
                            array(
                                'name'       => 'Property Detail V3',
                                'url'        => '/property/renovated-apartment-1?layout=3',
                                'item_model' => 'custom',
                                'model_name' => 'Custom',
                                'children'   => array(),
                            ),
                            array(
                                'name'       => 'Property Detail V4',
                                'url'        => '/property/renovated-apartment-1?layout=4',
                                'item_model' => 'custom',
                                'model_name' => 'Custom',
                                'children'   => array(),
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'name'       => 'Agencies',
                'url'        => '#',
                'item_model' => 'custom',
                'model_name' => 'Custom',
                'children'   => array(
                    [

                        'name'       => 'Agencies',
                        'url'        => '/agency',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                    ],
                    array(
                        'name'       => 'Agency Detail',
                        'url'        => '/agency/real-estate-experts',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                        'children'   => array(),
                    ),
                    [
                        'name'       => 'Agent List',
                        'url'        => '/agent',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                    ],
                    array(
                        'name'       => 'Agent Detail',
                        'url'        => '/agent/1',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                        'children'   => array(),
                    ),
                ),
            ),
            array(
                'name'       => 'Page',
                'url'        => '#',
                'item_model' => 'custom',
                'model_name' => 'Custom',
                'children'   => array(
                    [
                        'name'       => 'News',
                        'url'        => '/news',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                    ],
                    array(
                        'name'       => 'News Detail',
                        'url'        => '/news/city-spotlight-philadelphia',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                    ),
                    array(
                        'name'       => 'Contact',
                        'url'        => '/contact',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                        'children'   => array(
                        ),
                    ),
                    array(
                        'name'       => 'About',
                        'url'        => '/page/about-us',
                        'item_model' => 'custom',
                        'model_name' => 'Custom',
                        'children'   => array(),
                    ),
                ),
            ),
        );
        DB::table('core_menus')->insert([
            'name'        => 'Main Menu',
            'items'       => json_encode($menu_items_en),
            'create_user' => '1',
            'created_at'  => date("Y-m-d H:i:s")
        ]);
        DB::table('core_menus')->insert([
            'name'        => 'Footer Menu',
            'items'       => json_encode($menu_items_en),
            'create_user' => '1',
            'created_at'  => date("Y-m-d H:i:s")
        ]);

        DB::table('core_settings')->insert(
            [
                [
                    'name'  => 'menu_locations',
                    'val'   => '{"primary":1,"footer":2}',
                    'group' => "general",
                ],
                [
                    'name'  => 'admin_email',
                    'val'   => 'contact@findhousedev.com',
                    'group' => "general",
                ], [
                    'name'  => 'email_from_name',
                    'val'   => 'FindHouse',
                    'group' => "general",
                ], [
                    'name'  => 'email_from_address',
                    'val'   => 'contact@findhousedev.com',
                    'group' => "general",
                ],
                [
                    'name'  => 'logo_id',
                    'val'   => MediaFile::findMediaByName("logo")->id,
                    'group' => "general",
                ],
                [
                    'name'  => 'logo_id_mb',
                    'val'   => MediaFile::findMediaByName("logo")->id,
                    'group' => "general",
                ],
                [
                    'name'  => 'logo_id_tran',
                    'val'   => MediaFile::findMediaByName("logo_trans")->id,
                    'group' => "general",
                ],
                [
                    'name'  => 'site_favicon',
                    'val'   => MediaFile::findMediaByName("favicon")->id,
                    'group' => "general",
                ],
                [
                    'name'  => 'topbar_left_text',
                    'val'   => '<div class="socials">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
</div>
<span class="line"></span>
<a href="mailto:contact@findhousedev.com">contact@findhousedev.com</a>',
                    'group' => "general",
                ],
                [
                    'name'  => 'footer_text_left',
                    'val'   => '© Findhouse. Made with love',
                    'group' => "general",
                ],
                [
                    'name'  => 'footer_text_right',
                    'val'   => '',
                    'group' => "general",
                ],
                [
                    'name'  => 'list_widget_footer',
                    'val'   => '{"1":{"title" : "About Site", "size" : "3", "content" : "<p>\r\n We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.\r\n </p>"},"2":{"title":"COMPANY","size":"3","content":"<ul>\r\n    <li><a href=\"#\">About Us<\/a><\/li>\r\n    <li><a href=\"#\">Community Blog<\/a><\/li>\r\n    <li><a href=\"#\">Rewards<\/a><\/li>\r\n    <li><a href=\"#\">Work with Us<\/a><\/li>\r\n    <li><a href=\"#\">Meet the Team<\/a><\/li>\r\n<\/ul>"},
                    "3":{"title":"SUPPORT","size":"3","content":"<ul>\r\n    <li><a href=\"#\">Account<\/a><\/li>\r\n    <li><a href=\"#\">Legal<\/a><\/li>\r\n    <li><a href=\"#\">Contact<\/a><\/li>\r\n    <li><a href=\"#\">Affiliate Program<\/a><\/li>\r\n    <li><a href=\"#\">Privacy Policy<\/a><\/li>\r\n<\/ul>"},
                    "4":{"title":"Follow us","size":"3","content":"<ul class=\"mb30\">\r\n\t\t\t\t\t\t\t<li class=\"list-inline-item footer-social-icon\"><a href=\"#\"><i class=\"fa fa-facebook\"><\/i><\/a><\/li>\r\n\t\t\t\t\t\t\t<li class=\"list-inline-item footer-social-icon\"><a href=\"#\"><i class=\"fa fa-twitter\"><\/i><\/a><\/li>\r\n\t\t\t\t\t\t\t<li class=\"list-inline-item footer-social-icon\"><a href=\"#\"><i class=\"fa fa-instagram\"><\/i><\/a><\/li>\r\n\t\t\t\t\t\t\t<li class=\"list-inline-item footer-social-icon\"><a href=\"#\"><i class=\"fa fa-pinterest\"><\/i><\/a><\/li>\r\n\t\t\t\t\t\t\t<li class=\"list-inline-item footer-social-icon\"><a href=\"#\"><i class=\"fa fa-dribbble\"><\/i><\/a><\/li>\r\n\t\t\t\t\t\t\t<li class=\"list-inline-item footer-social-icon\"><a href=\"#\"><i class=\"fa fa-google\"><\/i><\/a><\/li>\r\n\t\t\t\t\t\t<\/ul>\r\n<h4>Subscribe<\/h4>\r\n<form class=\"footer_mailchimp_form\">\r\n\t\t\t\t\t\t \t<div class=\"form-row align-items-center\">\r\n\t\t\t\t\t\t\t    <div class=\"col-auto\">\r\n\t\t\t\t\t\t\t    \t<input type=\"email\" name=\"email\" class=\"form-control mb-2\" id=\"inlineFormInput\" placeholder=\"Your email\">\r\n\t\t\t\t\t\t\t    <\/div>\r\n\t\t\t\t\t\t\t    <div class=\"col-auto\">\r\n\t\t\t\t\t\t\t    \t<button type=\"submit\" class=\"btn btn-primary mb-2\"><i class=\"fa fa-angle-right\"><\/i><\/button>\r\n\t\t\t\t\t\t\t    <\/div>\r\n\t\t\t\t\t\t  \t<\/div>\r\n\t\t\t\t\t\t <div class=\"form-mess\"><\/div> <\/form>"}}',
                    'group' => "general",
                ],
                [
                    'name'  => 'contact_banner',
                    'val'   => MediaFile::findMediaByName("contact_banner")->id,
                    'group' => "general",
                ],
                [
                    'name'  => 'list_info_contact',
                    'val' => '[{"title" : "Contact Us","content" : "<p>\r\n Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst. \r\n <\/p>"},{"title" : "Address","content" : "<p>\r\n 2301 Ravenswood Rd Madison, WI 53711 \r\n <\/p>"},{"title" : "Phone","content" : "<p>\r\n (315) 905-2321 \r\n <\/p>"},{"title" : "Mail","content" : "<p>\r\n <a href=\"#\" class=\"icofont-facebook\">\r\n traitimanhnholeviem@gmail.com \r\n<\/a>\r\n <\/p>"},{"title" : "Skype","content" : "<p>\r\n findhouse.com \r\n <\/p>"}]',
                    'group' => "general",
                ],
                [
                    'name'  => 'map_contact_lat',
                    'val'   => '36.401066',
                    'group' => "general",
                ],
                [
                    'name'  => 'map_contact_long',
                    'val'   => '-88.312292',
                    'group' => "general",
                ],
                [
                    'name'  => 'map_contact_zoom',
                    'val'   => '8',
                    'group' => "general",
                ],

                [
                    'name'  => 'contact_partners_title',
                    'val'   => 'Become a Real Estate Agent',
                    'group' => "general",
                ],

                [
                    'name'  => 'contact_partners_sub_title',
                    'val'   => 'We only work with the best companies around the globe',
                    'group' => "general",
                ],

                [
                    'name'  => 'contact_partners_button_text',
                    'val'   => 'Register',
                    'group' => "general",
                ],


                [
                    'name'  => 'contact_partners_button_link',
                    'val'   => '#',
                    'group' => "general",
                ],

                [
                    'name'  => 'list_widget_footer_ja',
                    'val'   => '[{"title":"\u52a9\u3051\u304c\u5fc5\u8981\uff1f","size":"3","content":"<div class=\"contact\">\r\n        <div class=\"c-title\">\r\n            \u304a\u96fb\u8a71\u304f\u3060\u3055\u3044\r\n        <\/div>\r\n        <div class=\"sub\">\r\n            + 00 222 44 5678\r\n        <\/div>\r\n    <\/div>\r\n    <div class=\"contact\">\r\n        <div class=\"c-title\">\r\n            \u90f5\u4fbf\u7269\r\n        <\/div>\r\n        <div class=\"sub\">\r\n            hello@yoursite.com\r\n        <\/div>\r\n    <\/div>\r\n    <div class=\"contact\">\r\n        <div class=\"c-title\">\r\n            \u30d5\u30a9\u30ed\u30fc\u3059\u308b\r\n        <\/div>\r\n        <div class=\"sub\">\r\n            <a href=\"#\">\r\n                <i class=\"icofont-facebook\"><\/i>\r\n            <\/a>\r\n            <a href=\"#\">\r\n                <i class=\"icofont-twitter\"><\/i>\r\n            <\/a>\r\n            <a href=\"#\">\r\n                <i class=\"icofont-youtube-play\"><\/i>\r\n            <\/a>\r\n        <\/div>\r\n    <\/div>"},{"title":"\u4f1a\u793e","size":"3","content":"<ul>\r\n    <li><a href=\"#\">\u7d04, \u7565<\/a><\/li>\r\n    <li><a href=\"#\">\u30b3\u30df\u30e5\u30cb\u30c6\u30a3\u30d6\u30ed\u30b0<\/a><\/li>\r\n    <li><a href=\"#\">\u5831\u916c<\/a><\/li>\r\n    <li><a href=\"#\">\u3068\u9023\u643a<\/a><\/li>\r\n    <li><a href=\"#\">\u30c1\u30fc\u30e0\u306b\u4f1a\u3046<\/a><\/li>\r\n<\/ul>"},{"title":"\u30b5\u30dd\u30fc\u30c8","size":"3","content":"<ul>\r\n    <li><a href=\"#\">\u30a2\u30ab\u30a6\u30f3\u30c8<\/a><\/li>\r\n    <li><a href=\"#\">\u6cd5\u7684<\/a><\/li>\r\n    <li><a href=\"#\">\u63a5\u89e6<\/a><\/li>\r\n    <li><a href=\"#\">\u30a2\u30d5\u30a3\u30ea\u30a8\u30a4\u30c8\u30d7\u30ed\u30b0\u30e9\u30e0<\/a><\/li>\r\n    <li><a href=\"#\">\u500b\u4eba\u60c5\u5831\u4fdd\u8b77\u65b9\u91dd<\/a><\/li>\r\n<\/ul>"},{"title":"\u8a2d\u5b9a","size":"3","content":"<ul>\r\n<li><a href=\"#\">\u8a2d\u5b9a1<\/a><\/li>\r\n<li><a href=\"#\">\u8a2d\u5b9a2<\/a><\/li>\r\n<\/ul>"}]',
                    'group' => "general",
                ],
                [
                    'name' => 'page_contact_title',
                    'val' => "We'd love to hear from you",
                    'group' => "general",
                ],
                [
                    'name' => 'page_contact_sub_title',
                    'val' => "Send us a message and we'll respond as soon as possible",
                    'group' => "general",
                ],
                [
                    'name' => 'page_contact_desc',
                    'val' => "<!DOCTYPE html><html><head></head><body><h3>FindHouse</h3><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Tell. + 00 222 444 33</p><p>Email. hello@yoursite.com</p><p>1355 Market St, Suite 900San, Francisco, CA 94103 United States</p></body></html>",
                    'group' => "general",
                ],
                [
                    'name' => 'page_contact_image',
                    'val' => MediaFile::findMediaByName("bg_contact")->id,
                    'group' => "general",
                ]
            ]
        );

        $banner_home_mix = MediaFile::findMediaByName("home-mix")->id;
        $image_home_mix_1 = MediaFile::findMediaByName("image_home_mix_1")->id;
        $image_home_mix_2 = MediaFile::findMediaByName("image_home_mix_2")->id;
        $image_home_mix_3 = MediaFile::findMediaByName("image_home_mix_3")->id;
        $avatar = MediaFile::findMediaByName("avatar")->id;
        $avatar_2 = MediaFile::findMediaByName("avatar-2")->id;
        $avatar_3 = MediaFile::findMediaByName("avatar-3")->id;
        // Setting Home Page
        DB::table('core_templates')->insert([
            'title'       => 'Home Page',
            'content'     => '[{"type":"form_search_all_service","name":"Form Search All Service","model":{"service_types":["hotel","space","tour","car","event"],"title":"Find Your Dream Home","sub_title":"From as low as $10 per day with limited time offer discounts.","bg_image":'.$banner_home_mix.',"attr_show":5,"attr_hide":[6],"hide_form_search":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"list_property","name":"Property: List Items","model":{"title":"Featured Properties","desc":"Handpicked properties by our team.","number":12,"style":"carousel","location_id":"","order":"id","order_by":"desc","is_featured":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"list_locations","name":"List Locations","model":{"title":"Find Properties in These Cities","desc":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","number":4,"layout":"style_4","order":"id","order_by":"asc","to_location_detail":"","custom_ids":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"offer_block","name":"Offer Block","model":{"list_item":[{"_active":true,"title":"Trusted By Thousands","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.\nthe best prices on","background_image":'.$image_home_mix_1.',"link_title":"See Deals","link_more":"#","featured_text":"HOLIDAY SALE","featured_icon":"flaticon-high-five"},{"_active":true,"title":"Wide Renge Of Properties","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.\n\n","background_image":'.$image_home_mix_2.',"link_title":"Sign Up","link_more":"/register","featured_icon":"flaticon-home-1"},{"_active":true,"title":"Financing Made Easy","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.","background_image":'.$image_home_mix_3.',"link_title":"Sign Up","link_more":"/register","featured_text":null,"featured_icon":"flaticon-profit"}]},"component":"RegularBlock","open":true,"is_container":false},{"type":"testimonial","name":"List Testimonial","model":{"title":"Testimonials","list_item":[{"_active":false,"name":"Eva Hicks","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. ","number_star":5,"avatar":'.$avatar.'},{"_active":false,"name":"Donald Wolf","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. ","number_star":6,"avatar":'.$avatar_2.'},{"_active":false,"name":"Charlie Harrington","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.","number_star":5,"avatar":'.$avatar_3.'}],"desc":"Here could be a nice sub title"},"component":"RegularBlock","open":true,"is_container":false},{"type":"list_news","name":"News: List Items","model":{"title":"Articles & Tips","desc":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","number":3,"category_id":"","order":"id","order_by":"desc"},"component":"RegularBlock","open":true,"is_container":false},{"type":"call_to_action","name":"Call To Action","model":{"title":"Become a Real Estate Agent","sub_title":"We only work with the best companies around the globe","link_title":"Register Now","link_more":"#","bg_color":""},"component":"RegularBlock","open":true,"is_container":false}]',
            'create_user' => '1',
            'created_at'  => date("Y-m-d H:i:s")
        ]);
        DB::table('core_template_translations')->insert([
            'origin_id'   => '1',
            'locale'      => 'ja',
            'title'       => 'Home Page',
            'content'     => '[{"type":"form_search_all_service","name":"Form Search All Service","model":{"service_types":["hotel","space","tour","car","event"],"title":"Find Your Dream Home","sub_title":"From as low as $10 per day with limited time offer discounts.","bg_image":'.$banner_home_mix.',"attr_show":5,"attr_hide":[6],"hide_form_search":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"list_property","name":"Property: List Items","model":{"title":"Featured Properties","desc":"Handpicked properties by our team.","number":12,"style":"carousel","location_id":"","order":"id","order_by":"desc","is_featured":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"list_locations","name":"List Locations","model":{"title":"Find Properties in These Cities","desc":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","number":4,"layout":"style_4","order":"id","order_by":"asc","to_location_detail":"","custom_ids":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"offer_block","name":"Offer Block","model":{"list_item":[{"_active":true,"title":"Trusted By Thousands","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.\nthe best prices on","background_image":'.$image_home_mix_1.',"link_title":"See Deals","link_more":"#","featured_text":"HOLIDAY SALE","featured_icon":"flaticon-high-five"},{"_active":true,"title":"Wide Renge Of Properties","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.\n\n","background_image":'.$image_home_mix_2.',"link_title":"Sign Up","link_more":"/register","featured_icon":"flaticon-home-1"},{"_active":true,"title":"Financing Made Easy","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.","background_image":'.$image_home_mix_3.',"link_title":"Sign Up","link_more":"/register","featured_text":null,"featured_icon":"flaticon-profit"}]},"component":"RegularBlock","open":true,"is_container":false},{"type":"testimonial","name":"List Testimonial","model":{"title":"Testimonials","list_item":[{"_active":false,"name":"Eva Hicks","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. ","number_star":5,"avatar":'.$avatar.'},{"_active":false,"name":"Donald Wolf","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. ","number_star":6,"avatar":'.$avatar_2.'},{"_active":false,"name":"Charlie Harrington","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.","number_star":5,"avatar":'.$avatar_3.'}],"desc":"Here could be a nice sub title"},"component":"RegularBlock","open":true,"is_container":false},{"type":"list_news","name":"News: List Items","model":{"title":"Articles & Tips","desc":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","number":3,"category_id":"","order":"id","order_by":"desc"},"component":"RegularBlock","open":true,"is_container":false},{"type":"call_to_action","name":"Call To Action","model":{"title":"Become a Real Estate Agent","sub_title":"We only work with the best companies around the globe","link_title":"Register Now","link_more":"#","bg_color":""},"component":"RegularBlock","open":true,"is_container":false}]',
            'create_user' => '1',
            'created_at'  => date("Y-m-d H:i:s")
        ]);
        //PAGE ABOUT US
        $about_image_video = MediaFile::findMediaByName("about-image-video")->id;
        $partners_1 = MediaFile::findMediaByName("partners-1")->id;
        $partners_2 = MediaFile::findMediaByName("partners-2")->id;
        $partners_3 = MediaFile::findMediaByName("partners-3")->id;
        $partners_4 = MediaFile::findMediaByName("partners-4")->id;
        $team_1 = MediaFile::findMediaByName("team-1")->id;
        $team_2 = MediaFile::findMediaByName("team-2")->id;
        $team_3 = MediaFile::findMediaByName("team-3")->id;
        $team_4 = MediaFile::findMediaByName("team-4")->id;
        DB::table('core_templates')->insert([
            'title'       => 'About us',
            'content'     => '[{"type":"info_about_us","name":"Info about us","model":{"title":"Our Mission Is To FindHouse","content":"<p><strong>Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</strong></p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante sit amet velit.</p>\n<p>Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar. Donec et libero ligula. Vivamus semper at orci at placerat.Placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla quae alias tempora.</p>","name":"About Us","image_video":67,"link_video":"https://www.youtube.com/watch?v=R7xbhKIiw4Y","list_item":[{"_active":true,"name":"Customers to date","value":"80,123","featured_icon":"flaticon-user"},{"_active":true,"name":"In home sales","value":"$74 Billion","featured_icon":"flaticon-home"},{"_active":true,"name":"In saving","value":"$468 Million","featured_icon":"flaticon-transfer"}]},"is_container":false,"component":"RegularBlock"},{"type":"offer_block","name":"Offer Block","model":{"list_item":[{"_active":true,"title":"Trusted By Thousands","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.\nthe best prices on","background_image":20,"link_title":"See Deals","link_more":"#","featured_text":"HOLIDAY SALE","featured_icon":"flaticon-high-five"},{"_active":true,"title":"Wide Renge Of Properties","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.\n\n","background_image":21,"link_title":"Sign Up","link_more":"/register","featured_icon":"flaticon-home-1"},{"_active":true,"title":"Financing Made Easy","desc":"Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.","background_image":22,"link_title":"Sign Up","link_more":"/register","featured_text":null,"featured_icon":"flaticon-profit"}]},"component":"RegularBlock","open":true,"is_container":false},{"type":"testimonial","name":"List Testimonial","model":{"title":"Testimonials","list_item":[{"_active":false,"name":"Eva Hicks","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. ","number_star":5,"avatar":1},{"_active":false,"name":"Donald Wolf","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. ","number_star":6,"avatar":2},{"_active":false,"name":"Charlie Harrington","desc":"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.","number_star":5,"avatar":3}],"desc":"Here could be a nice sub title","sub_title":""},"component":"RegularBlock","open":true,"is_container":false},{"type":"our_team","name":"Our Team","model":{"title":"Our Team","list_item":[{"_active":false,"name":"Jennifer Barton","type":"Broker","avatar":58},{"_active":false,"name":"Kathleen Myers","type":"Broker","avatar":59},{"_active":false,"name":"Mariusz Ciesla","type":"Broker","avatar":60},{"_active":false,"name":"Kathleen Myers","type":"Agent","avatar":61}],"desc":"Lorem ipsum dolor sit amet, consectetur adipiscing elit"},"component":"RegularBlock","open":true,"is_container":false},{"type":"partners","name":"Our Partners","model":{"title":"Our Partners","desc":"We only work with the best companies around the globe","list_item":[{"_active":true,"avatar":62},{"_active":true,"avatar":63},{"_active":true,"avatar":64},{"_active":true,"avatar":65},{"_active":true,"avatar":66}]},"component":"RegularBlock","open":true}]',
            'create_user' => '1',
            'created_at'  => date("Y-m-d H:i:s")
        ]);

        DB::table('core_pages')->insert([
            'title'       => 'Home Page',
            'slug'        => 'home-page',
            'template_id' => '1',
            'create_user' => '1',
            'status'      => 'publish',
            'created_at'  => date("Y-m-d H:i:s")
        ]);
        DB::table('core_pages')->insert([
            'title'       => 'About Us',
            'slug'        => 'about-us',
            'template_id' => '2',
            'create_user' => '1',
            'status'      => 'publish',
            'created_at'  => date("Y-m-d H:i:s")
        ]);
        DB::table('core_settings')->insert([
                [
                    'name'  => 'home_page_id',
                    'val'   => '1',
                    'group' => "general",
                ],
                [
                    'name'  => 'page_contact_title',
                    'val'   => "We'd love to hear from you",
                    'group' => "general",
                ],
                [
                    'name'  => 'page_contact_title_ja',
                    'val'   => "あなたからの御一報をお待ち",
                    'group' => "general",
                ],
                [
                    'name'  => 'page_contact_sub_title',
                    'val'   => "Send us a message and we'll respond as soon as possible",
                    'group' => "general",
                ],
                [
                    'name'  => 'page_contact_sub_title_ja',
                    'val'   => "私たちにメッセージを送ってください、私たちはできるだ",
                    'group' => "general",
                ],
                [
                    'name'  => 'page_contact_desc',
                    'val'   => "<!DOCTYPE html><html><head></head><body><h3>FindHouse</h3><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Tell. + 00 222 444 33</p><p>Email. hello@yoursite.com</p><p>1355 Market St, Suite 900San, Francisco, CA 94103 United States</p></body></html>",
                    'group' => "general",
                ],
                [
                    'name'  => 'page_contact_image',
                    'val'   => MediaFile::findMediaByName("bg_contact")->id,
                    'group' => "general",
                ]
            ]);
        // Setting Currency
        DB::table('core_settings')->insert([
                [
                    'name'  => "currency_main",
                    'val'   => "usd",
                    'group' => "payment",
                ],
                [
                    'name'  => "currency_format",
                    'val'   => "left",
                    'group' => "payment",
                ],
                [
                    'name'  => "currency_decimal",
                    'val'   => ",",
                    'group' => "payment",
                ],
                [
                    'name'  => "currency_thousand",
                    'val'   => ".",
                    'group' => "payment",
                ],
                [
                    'name'  => "currency_no_decimal",
                    'val'   => "0",
                    'group' => "payment",
                ],
                [
                    'name'  => "extra_currency",
                    'val'   => '[{"currency_main":"eur","currency_format":"left","currency_thousand":".","currency_decimal":",","currency_no_decimal":"2","rate":"0.902807"},{"currency_main":"jpy","currency_format":"right_space","currency_thousand":".","currency_decimal":",","currency_no_decimal":"0","rate":"0.00917113"}]',
                    'group' => "payment",
                ]
            ]);
        //MAP
        DB::table('core_settings')->insert([
                [
                    'name'  => 'map_provider',
                    'val'   => 'gmap',
                    'group' => "advance",
                ],
                [
                    'name'  => 'size_unit',
                    'val'   => 'ft',
                    'group' => "advance",
                ],
                [
                    'name'  => 'map_gmap_key',
                    'val'   => '',
                    'group' => "advance",
                ]
            ]);
        // Payment Gateways
        DB::table('core_settings')->insert([
                [
                    'name'  => "g_offline_payment_enable",
                    'val'   => "1",
                    'group' => "payment",
                ],
                [
                    'name'  => "g_offline_payment_name",
                    'val'   => "Offline Payment",
                    'group' => "payment",
                ]
            ]);
        // Settings general
        DB::table('core_settings')->insert([
                [
                    'name'  => "date_format",
                    'val'   => "m/d/Y",
                    'group' => "general",
                ],
                [
                    'name'  => "site_title",
                    'val'   => "FindHouse",
                    'group' => "general",
                ],
            ]);
        // Email general
        DB::table('core_settings')->insert([
                [
                    'name'  => "site_timezone",
                    'val'   => "UTC",
                    'group' => "general",
                ],
                [
                    'name'  => "site_title",
                    'val'   => "FindHouse",
                    'group' => "general",
                ],
                [
                    'name'  => "email_header",
                    'val'   => '<h1 class="site-title" style="text-align: center">FindHouse</h1>',
                    'group' => "general",
                ],
                [
                    'name'  => "email_footer",
                    'val'   => '<p class="" style="text-align: center">&copy; 2019 FindHouse. All rights reserved</p>',
                    'group' => "general",
                ],
                [
                    'name'  => "enable_mail_user_registered",
                    'val'   => 1,
                    'group' => "user",
                ],
                [
                    'name'  => "user_content_email_registered",
                    'val'   => '<h1 style="text-align: center">Welcome!</h1>
                    <h3>Hello [first_name] [last_name]</h3>
                    <p>Thank you for signing up with FindHouse! We hope you enjoy your time with us.</p>
                    <p>Please click button to verify your email address!</p>
                    <p>[button_verify]</p>
                    <p>Regards,</p>
                    <p>FindHouse</p>',
                    'group' => "user",
                ],
                [
                    'name'  => "admin_enable_mail_user_registered",
                    'val'   => 1,
                    'group' => "user",
                ],
                [
                    'name'  => "admin_content_email_user_registered",
                    'val'   => '<h3>Hello Administrator</h3>
                    <p>We have new registration</p>
                    <p>Full name: [first_name] [last_name]</p>
                    <p>Email: [email]</p>
                    <p>Regards,</p>
                    <p>FindHouse</p>',
                    'group' => "user",
                ],
                [
                    'name'  => "user_content_email_forget_password",
                    'val'   => '<h1>Hello!</h1>
                    <p>You are receiving this email because we received a password reset request for your account.</p>
                    <p style="text-align: center">[button_reset_password]</p>
                    <p>This password reset link expire in 60 minutes.</p>
                    <p>If you did not request a password reset, no further action is required.
                    </p>
                    <p>Regards,</p>
                    <p>FindHouse</p>',
                    'group' => "user",
                ]
            ]);
        // Email Setting
        DB::table('core_settings')->insert([
                [
                    'name'  => "email_driver",
                    'val'   => "log",
                    'group' => "email",
                ],
                [
                    'name'  => "email_host",
                    'val'   => "smtp.mailgun.org",
                    'group' => "email",
                ],
                [
                    'name'  => "email_port",
                    'val'   => "587",
                    'group' => "email",
                ],
                [
                    'name'  => "email_encryption",
                    'val'   => "tls",
                    'group' => "email",
                ],
                [
                    'name'  => "email_username",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_password",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_mailgun_domain",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_mailgun_secret",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_mailgun_endpoint",
                    'val'   => "api.mailgun.net",
                    'group' => "email",
                ],
                [
                    'name'  => "email_postmark_token",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_ses_key",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_ses_secret",
                    'val'   => "",
                    'group' => "email",
                ],
                [
                    'name'  => "email_ses_region",
                    'val'   => "us-east-1",
                    'group' => "email",
                ],
                [
                    'name'  => "email_sparkpost_secret",
                    'val'   => "",
                    'group' => "email",
                ],
            ]);
        // Email Setting
        DB::table('core_settings')->insert([
            [
                'name'  => "booking_enquiry_type",
                'val'   => "booking_and_enquiry",
                'group' => "enquiry",
            ],
            [
                'name'  => "booking_enquiry_enable_mail_to_vendor",
                'val'   => "1",
                'group' => "enquiry",
            ],
            [
                'name'  => "booking_enquiry_mail_to_vendor_content",
                'val'   => "<h3>Hello [vendor_name]</h3>
                            <p>You get new inquiry request from [email]</p>
                            <p>Name :[name]</p>
                            <p>Emai:[email]</p>
                            <p>Phone:[phone]</p>
                            <p>Content:[note]</p>
                            <p>Service:[service_link]</p>
                            <p>Regards,</p>
                            <p>FindHouse</p>
                            </div>",
                'group' => "enquiry",
            ],
            [
                'name'  => "booking_enquiry_enable_mail_to_admin",
                'val'   => "1",
                'group' => "enquiry",
            ],
            [
                'name'  => "booking_enquiry_mail_to_admin_content",
                'val'   => "<h3>Hello Administrator</h3>
                            <p>You get new inquiry request from [email]</p>
                            <p>Name :[name]</p>
                            <p>Emai:[email]</p>
                            <p>Phone:[phone]</p>
                            <p>Content:[note]</p>
                            <p>Service:[service_link]</p>
                            <p>Vendor:[vendor_link]</p>
                            <p>Regards,</p>
                            <p>FindHouse</p>",
                'group' => "enquiry",
            ],
        ]);
        // Vendor setting
        DB::table('core_settings')->insert([
                [
                    'name'  => "vendor_enable",
                    'val'   => "1",
                    'group' => "agent",
                ],
                [
                    'name'  => "vendor_commission_type",
                    'val'   => "percent",
                    'group' => "agent",
                ],
                [
                    'name'  => "vendor_commission_amount",
                    'val'   => "10",
                    'group' => "agent",
                ],
                [
                    'name'  => "vendor_role",
                    'val'   => "1",
                    'group' => "agent",
                ],
                [
                    'name'  => "role_verify_fields",
                    'val'   => '{"phone":{"name":"Phone","type":"text","roles":["1","2","3"],"required":null,"order":null,"icon":"fa fa-phone"},"id_card":{"name":"ID Card","type":"file","roles":["1","2","3"],"required":"1","order":"0","icon":"fa fa-id-card"},"trade_license":{"name":"Trade License","type":"multi_files","roles":["1","3"],"required":"1","order":"0","icon":"fa fa-copyright"}}',
                    'group' => "agent",
                ],
            ]);
        DB::table('core_settings')->insert([
                'name'  => 'enable_mail_vendor_registered',
                'val'   => '1',
                'group' => 'agent'
            ]);
        DB::table('core_settings')->insert([
                'name'  => 'vendor_content_email_registered',
                'val'   => '<h1 style="text-align: center;">Welcome!</h1>
                            <h3>Hello [first_name] [last_name]</h3>
                            <p>Thank you for signing up with FindHouse! We hope you enjoy your time with us.</p>
                            <p>Please click button to verify your email address!</p>
                            <p>[button_verify]</p>
                            <p>Regards,</p>
                            <p>FindHouse</p>',
                'group' => 'agent'
            ]);
        DB::table('core_settings')->insert([
                'name'  => 'admin_enable_mail_vendor_registered',
                'val'   => '1',
                'group' => 'agent'
            ]);
        DB::table('core_settings')->insert([
                'name'  => 'admin_content_email_vendor_registered',
                'val'   => '<h3>Hello Administrator</h3>
                            <p>An user has been registered as Vendor. Please check the information bellow:</p>
                            <p>Full name: [first_name] [last_name]</p>
                            <p>Email: [email]</p>
                            <p>Registration date: [created_at]</p>
                            <p>You can approved the request here: [link_approved]</p>
                            <p>Regards,</p>
                            <p>FindHouse</p>',
                'group' => 'agent'
            ]);
        //            Cookie agreement
        DB::table('core_settings')->insert([
                [
                    'name'  => "cookie_agreement_enable",
                    'val'   => "1",
                    'group' => "advance",
                ],
                [
                    'name'  => "cookie_agreement_button_text",
                    'val'   => "Got it",
                    'group' => "advance",
                ],
                [
                    'name'  => "cookie_agreement_content",
                    'val'   => "<p>This website requires cookies to provide all of its features. By using our website, you agree to our use of cookies. <a href='#'>More info</a></p>",
                    'group' => "advance",
                ],
            ]);
        // Invoice setting
        DB::table('core_settings')->insert([
                [
                    'name'  => 'logo_invoice_id',
                    'val'   => MediaFile::findMediaByName("logo")->id,
                    'group' => "booking",
                ],
                [
                    'name'  => "invoice_company_info",
                    'val'   => "<p><span style=\"font-size: 14pt;\"><strong>FindHouse Company</strong></span></p>
                                <p>Ha Noi, Viet Nam</p>
                                <p>www.findhousedev.com</p>",
                    'group' => "booking",
                ],
            ]);
    }
}
