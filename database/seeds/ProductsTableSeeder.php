<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\Product::create([
            "name"         => "Sony KD55X720E 55-Inch 4k Ultra HD Smart LED TV (2017 Model)",
            "slug"         => "sony-kd55x720e-55-inch-4k-ultra-hd-smart-led-tv-2017-model",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Dimensions (W x H x D): TV without stand: 48.8" x 28.5" x 2.4", TV with stand: 48.8" x 30.7" x 10"</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Smart functionality gives you access to your favorite apps and content. With YouTube and Netflix buttons built into the remote, you are one click away from endless entertainment.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Pairs 4K Ultra HD picture clarity with the contrast, color, and detail of High Dynamic Range (HDR) for the most lifelike picture.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Edge-lit LED produces good picture quality with sleek slim design.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">60Hz native refresh rate plus Motionflow XR allows fast moving action scenes to be seen with virtually no motion blur</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Inputs: 3 – HDMI, 3 - USB2.0, 1 – Component/Composite Hybrid, 1 – Composite</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">In the box: Mini-plug Video Adapter, Remote Control (RMT-TX300U), Batteries (R03), AC Power Cord (US, 2pin, Pigtail, Straight), Operating Instructions, Quick Setup Guide / Supplement CUE (GA), Table Top Stand (Separate, assemble required)</span></li></ul>',
            "price"        => 698,
            "quantity"     => 10,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 1,
            "user_id"      => 1,
            "category_id"  => 1,
            "brand_id"     => 1,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Sony XBR55X900E 55-Inch 4K Ultra HD Smart LED TV (2018 Model)",
            "slug"         => "sony-xbr55x900e-55-inch-4k-ultra-hd-smart-led-tv-2018-model",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Dimensions (W x H x D): TV without stand: 48.4" x 27.9" x 2.4", TV with stand: 48.4" x 30.5" x 10.3"</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Smart functionality gives you access to your favorite apps and content using Sony’s Android TV.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Pairs 4K Ultra HD picture clarity with the contrast, color, and detail of High Dynamic Range (HDR) for the most lifelike picture.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Full-array local dimming technology, you get enhanced controlled contrast and incredible brightness in a stunningly slim design.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Voice-control your TV with Amazon Alexa compatibility</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">120Hz native refresh rate plus Motionflow XR gives you fast moving action scenes with virtually no motion blur</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Inputs: 4 – HDMI, 2 - USB2.0, 1 – USB3.0, 1 – Component/Composite Hybrid, 1 – Composite</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">In the box: Voice Remote Control (RMF-TX200U), Batteries (R03), AC Power Adaptor (ACDP-240E01), IR Blaster (1-849-161-12), Operating Instructions, Quick Setup Guide / Supplement CUE (GA), Table Top Stand (Separate, assembly required), AC Power Cord (US 2pin Pigtail (flat blades) Polarity)</span></li></ul>',
            "price"        => 998,
            "quantity"     => 5,
            "is_android"   => 0,
            "is_threeD"    => 1,
            "photo_id"     => 2,
            "user_id"      => 2,
            "category_id"  => 1,
            "brand_id"     => 1,
            "condition_id" => 2
        ]);

        \App\Product::create([
            "name"         => "Sony XBR55X800E 55-Inch 4K Ultra HD Smart LED TV (2018 Model)",
            "slug"         => "sony-xbr55x800e-55-inch-4k-ultra-hd-smart-led-tv-2018-model",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Dimensions (W x H x D): TV without stand: 48 5/8 x 28 1/4 x 2 1/4 Inch, TV with stand: 48 5/8 x 30 1/2 x 10 Inches.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Smart functionality gives you access to your favorite apps and content using Sony’s Android TV.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Pairs 4K Ultra HD picture clarity with the contrast, color, and detail of High Dynamic Range (HDR) for the most lifelike picture.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Edge-lit LED produces great picture quality with sleek slim design.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Voice-control your TV with Amazon Alexa compatibility.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">60Hz native refresh rate plus Motionflow XR gives you great motion for all types of content.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Inputs: 4 – HDMI, 2 - USB2.0, 1 – USB3.0, 1 – Component/Composite Hybrid, 1 – Composite.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Includes: AC power adapter; IR Blaster; Operating Instructions; Quick Setup Guide; Table Top Stand &amp; Voice Remote Control.</span></li></ul>',
            "price"        => 690,
            "quantity"     => 7,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 3,
            "user_id"      => 2,
            "category_id"  => 1,
            "brand_id"     => 1,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Samsung Electronics UN55MU6300 55-Inch 4K Ultra HD Smart LED TV (2017 Model)",
            "slug"         => "samsung-electronics-un55mu6300-55-inch-4k-ultra-hd-smart-led-tv-2017-model",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">4X more pixels than Full HD means you’re getting 4X the resolution, so you’ll clearly see the difference.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">See vibrant and pure color for a realistic experience.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">OneRemote automatically detects and controls all your connected devices and content with no manual programming required*.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Smooth action on fast-moving content with Motion Rate 120</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Please note the differences between the MU6300 and the MU630D. MU6300: Black cabinet, 450 nits HDR sustained brightness, Mega Dynamic Contrast MU630D: Dark Titan cabinet, 430 nits HDR sustained brightness, Ultra Dynamic Contrast</span></li></ul>',
            "price"        => 200,
            "quantity"     => 15,
            "is_android"   => 1,
            "is_threeD"    => 0,
            "photo_id"     => 4,
            "user_id"      => 1,
            "category_id"  => 1,
            "brand_id"     => 2,
            "condition_id" => 3
        ]);

        \App\Product::create([
            "name"         => "Samsung Electronics UN55MU8000 55-Inch 4K Ultra HD Smart LED TV (2017 Model)",
            "slug"         => "samsung-electronics-un55mu8000-55-inch-4k-ultra-hd-smart-led-tv-2017-model",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">An extreme step up in color with a billion more shades than regular 4K UHD.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">See extreme contrast between the darkest darks and the lightest lights, plus expanded color and depth.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">See what you’ve been missing, even in dark scenes. Bezel Width-3 Bezel (less 70)</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Enjoy smooth, crisp action, even in the fastest scenes, bringing sports and fast-moving content to life.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Please note the differences between the MU8000 and the MU800D. MU8000: Gray cabinet, 500 nits HDR sustained brightness, Mega Dynamic Contrast MU800D: Dark Titan cabinet, 470 nits HDR sustained brightness, Ultra Dynamic Contrast</span></li></ul>',
            "price"        => 1560,
            "quantity"     => 6,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 5,
            "user_id"      => 3,
            "category_id"  => 1,
            "brand_id"     => 2,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Samsung Galaxy S9 Unlocked Smartphone",
            "slug"         => "samsung-galaxy-s9-unlocked-smartphone",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Super Speed Dual Pixel Camera</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Infinity Display: edge-to-edge immersive screen, enhancing your entertainment experience*</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">IP68 rating: withstands splashes, spills, and rain so it can take a dip, worry-free***</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Internal Memory 64 GB. Expandable Storage up to 400GB****</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Fast Wireless Charging: Avoid the wires and power up quickly by placing your phone on a Fast Wireless Charger</span></li></ul>',
            "price"        => 720,
            "quantity"     => 21,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 6,
            "user_id"      => 1,
            "category_id"  => 2,
            "brand_id"     => 2,
            "condition_id" => 2
        ]);

        \App\Product::create([
            "name"         => "Huawei P10 Lite (WAS-LX1A) 32GB Sapphire Blue, Dual Sim, 5.2\", 4GB RAM",
            "slug"         => "huawei-p10-lite-was-lx1a-32gb-sapphire-blue-dual-sim-52-4gb-ram",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Model: WAS-LX1A, Display: 5.2 inch, FHD LCD screen, 1.21 mm edges, 1920 x 1080 with high color gamut, High contrast 1500:1. CPU: Kirin 658, 16nm Octa-core (4 × 2.1GHz + 4 x 1.7GHz) + i5 co-processor, OS: Android™ 7.0 Nougat, Memory: 4GB RAM + 32GB ROM, Camera: Rear: 12MP, 1/2.8 inch sensor and 1.25 µm single pixel, Front: 8MP, PDAF and CAF 0.3s mixed focus. Sensors: Fingerprint sensor Gravity sensor, Optical sensor, Distance sensor, Gyroscope ,Compass/.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Unlocked cell phones are compatible with GSM carrier such as AT&amp;T and T-Mobile, but are not compatible with CDMA carriers such as Verizon and Sprint.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Please check if your GSM cellular carrier supports the bands for this model before purchasing, LTE may not be available in all regions: Main SIM card: FDD LTE: Band 1/3/7/8/20, UMTS (WCDMA) / HSPA+ / DC-HSDPA: Band 1/2/5/8, GSM / EDGE: 850/900/1800/1900 MHz, Secondary SIM card: GSM: 850/900/1800/1900 MHz.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">This device may not include a US warranty as some manufacturers do not honor warranties for international items. Please contact the seller for specific warranty information.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">The box contains: Your new device, USB cable, Charger, Documentation.</span></li></ul>',
            "price"        => 270,
            "quantity"     => 30,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 7,
            "user_id"      => 1,
            "category_id"  => 2,
            "brand_id"     => 3,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Huawei Mate 10 ALP-L29 64GB Black, Dual SIM, 5.9\", Dual 20 MP +12 MP, GSM Unlocked International Model",
            "slug"         => "huawei-mate-10-alp-l29-64gb-black-dual-sim-59-dual-20-mp-12-mp-gsm-unlocked-international-model",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Display: 5.9 inches IPS LCD, OS: Android 8.0 (Oreo) | EMUI 8.0, Camera: Dual 20 MP +12 MP, Memory: 64 GB, 4 GB RAM | microSD, up to 256 GB (uses SIM 2 slot). Fingerprint Sensor, CPU: HUAWEI Kirin 970, Octa-Core CPU (4 x Cortex A73 2.36 GHz + 4 x Cortex A53 1.8 GHz) + i7 co-processor, Mali-G72 MP12 GPU.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Unlocked cell phones are compatible with GSM carriers such as AT&amp;T and T-Mobile, but are not compatible with CDMA carriers such as Verizon and Sprint.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Please check if your GSM cellular carrier supports the bands for this model before purchasing, LTE may not be available in all countries: SIM1:FDD-LTE: Band 1 / 2 / 3 / 4 / 5 / 6 / 7 / 8 / 9 / 12 / 17 / 18 / 19 / 20 / 26 / 28, TD-LTE: Band 34 / 38 / 39 / 40, UMTS (WCDMA) / HSPA+ / DC-HSDPA: Band 1 / 2 / 4 / 5 / 6 / 8 / 19, TD-SCDMA: Band 34 / 39, GSM / EDGE: 850 / 900 / 1800 / 1900 MHz.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">This device may not include a US warranty as some manufacturers do not honor warranties for international items. Please contact the seller for specific warranty information.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">The box contains: Your new device, USB cable, Earphones, Charger (may be foreign), Documentation.</span></li></ul>',
            "price"        => 589,
            "quantity"     => 12,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 8,
            "user_id"      => 1,
            "category_id"  => 2,
            "brand_id"     => 3,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Sony Xperia XA2 Ultra Factory Unlocked Phone - 6\" Screen - 32GB - Silver",
            "slug"         => "sony-xperia-xa2-ultra-factory-unlocked-phone-6-screen-32gb-silver",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Large 6” edge-to-edge full HD display (1080P) with curved 2.5D Corning Gorilla glass.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">23 MP Main Camera with 1/2.3" Exmor RS for mobile image sensor and 24mm wide-angle F2.0 lens, 4K video recording, and 120fps slow motion video</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">16MP Exmor RS front-facing Camera, optical image stabilizer (OIS), and smart selfie flash. Additional 8MP Exmor R front-facing Camera with 120-degree super-wide-angle lens</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Qualcomm Snapdragon 630 Octa-core processor. Always-on fingerprint sensor, 3,580 mAh battery, and SmartAmp for more immersive sound.</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Unlocked and compatible with GSM/LTE carriers utilizing GSM network such as AT&amp;T, T-Mobile, Straight Talk, MetroPCS, Cricket wireless, simple mobile, and others</span></li></ul>',
            "price"        => 100,
            "quantity"     => 7,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 9,
            "user_id"      => 3,
            "category_id"  => 2,
            "brand_id"     => 1,
            "condition_id" => 3
        ]);

        \App\Product::create([
            "name"         => "Samsung Notebook 9 NP900X5N-X01US 15.0\" Traditional Laptop (Light Titan)",
            "slug"         => "samsung-notebook-9-np900x5n-x01us-150-traditional-laptop-light-titan",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Newest 7th-gen Intel Core i7 processor</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">256GB SSD Storage, 16GB Memory</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">15-Inches Full HD Display (1920x1080), Backlit Keyboard</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Fast Charging (20-min Charge for 2.1 Hours of Use) or USB-C charging for power on the go</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Powerful NVIDIA GeForce 940MX Graphics</span></li></ul>',
            "price"        => 1501,
            "quantity"     => 9,
            "is_android"   => 0,
            "is_threeD"    => 1,
            "photo_id"     => 10,
            "user_id"      => 1,
            "category_id"  => 3,
            "brand_id"     => 2,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Sony VAIO Pro SVP13213CXB 13.3-Inch Core i5 Touchscreen Ultrabook (Carbon Black)",
            "slug"         => "sony-vaio-pro-svp13213cxb-133-inch-core-i5-touchscreen-ultrabook-carbon-black",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Intel Core i5-4200U</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">4 GB DDR3</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">128 GB Solid-State Drive</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">13.3-Inch Touch-Enabled Screen</span></li></ul>',
            "price"        => 250,
            "quantity"     => 5,
            "is_android"   => 0,
            "is_threeD"    => 0,
            "photo_id"     => 11,
            "user_id"      => 1,
            "category_id"  => 3,
            "brand_id"     => 1,
            "condition_id" => 3
        ]);

        \App\Product::create([
            "name"         => "Samsung ArchAngel GTX 1050 Ti Gaming Computer Desktop PC FX-6300 3.50 GHz 6-Core, GTX 1050 Ti 4GB, 8GB DDR3, 1TB HDD, 24X DVD, Wi-Fi USB, Windows 10 Pro 64-bit, White (GTX 1050 Ti Version)",
            "slug"         => "samsung-archangel-gtx-1050-ti-gaming-computer-desktop-pc-fx-6300-350-ghz-6-core-gtx-1050-ti-4gb-8gb-ddr3-1tb-hdd-24x-dvd-wi-fi-usb-windows-10-pro-64-bit-white-gtx-1050-ti-version",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">AMD FX-6300 3.50GHz / 4.1 Turbo 6-Core | 1 TB 7200RPM Hard Drive | AMD 970 Chipset Gaming Motherboard (Not Generic Motherboard)</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">8GB Gaming Memory DDR3 1866 MHz with Heat Spreader (Not Generic Memory) | 24X DVD ±RW Optical | Genuine Windows Professional 10 64-bit</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">GTX 1050 Ti 4GB GDDR5 Graphics Card | 1 x DL-DVI, 1 x Display Port 1.4, 1 x HDMI 2.0b | 9 x USB (7 X USB 2.0; 2 X USB3.0)</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Wi-Fi Ready | No bloatware | Free Keyboard &amp; Mouse | Monitor Not Included | 430 Watt High Performance Power Supplies</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">1 Year Warranty on Parts and Labor | Lifetime Free Technical Support | Assemble in the USA</span></li></ul>',
            "price"        => 699,
            "quantity"     => 14,
            "is_android"   => 0,
            "is_threeD"    => 1,
            "photo_id"     => 12,
            "user_id"      => 1,
            "category_id"  => 4,
            "brand_id"     => 2,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Sony Gamer Xtreme GXIVR8020A4 Desktop Gaming PC (Intel i5-7400 3.0GHz, AMD RX 580 4GB, 8GB DDR4 RAM, 1TB 7200RPM HDD, WiFi, Win 10 Home), Black - VR Ready",
            "slug"         => "sony-gamer-xtreme-gxivr8020a4-desktop-gaming-pc-intel-i5-7400-30ghz-amd-rx-580-4gb-8gb-ddr4-ram-1tb-7200rpm-hdd-wifi-win-10-home-black-vr-ready",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">System: Intel Core i5-7400 3.0GHz | Intel B250 Express Chipset | 8GB DDR4 | 1TB HDD | Genuine Windows 10 Home 64-bit</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Graphics: AMD Radeon RX 580 4GB Video Card | 1 x HDMI | 1 x DisplayPort</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Connectivity: 5 x USB 3.1 | 2 x USB 2.0 | 1 x RJ-45 Network Ethernet 10/100/1000 | 802.11AC Wi-Fi | Audio: 7.1 Channel | Keyboard and Mouse</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Special Feature: 802.11 AC Wi-Fi</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Warranty: 1 Year Parts &amp; Labor Warranty | Free Lifetime Tech Support</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">NOTE: Refer the Instructional Video from image section before use which is highly essential.</span></li></ul>',
            "price"        => 780,
            "quantity"     => 20,
            "is_android"   => 0,
            "is_threeD"    => 1,
            "photo_id"     => 13,
            "user_id"      => 2,
            "category_id"  => 4,
            "brand_id"     => 1,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Sony SmartWatch US version 1 Android Bluetooth USB Retail Box",
            "slug"         => "sony-smartwatch-us-version-1-android-bluetooth-usb-retail-box",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Read all your texts, emails or social media updates; control your smartphone\'s music and much more</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Multi-touch color 1.3-Inch OLED display</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">When a call, message or other notification comes in, your Sony SmartWatch acts as an Android remote and gently vibrates on your wrist to let you know.</span></li></ul>',
            "price"        => 20,
            "quantity"     => 47,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 14,
            "user_id"      => 3,
            "category_id"  => 5,
            "brand_id"     => 1,
            "condition_id" => 3
        ]);

        \App\Product::create([
            "name"         => "Huawei Band 2 Pro All-in-One Activity Tracker Smart Fitness Wristband | GPS | Multi-Sport Mode| Heart Rate | Sleep Monitor | 5ATM Waterproof, Black",
            "slug"         => "huawei-band-2-pro-all-in-one-activity-tracker-smart-fitness-wristband-gps-multi-sport-mode-heart-rate-sleep-monitor-5atm-waterproof-black",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Built-in GPS and continuous heart rate: monitor your heart rate and track your workout routes without your phone</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Scientific sleep tracking: keep track of light, deep and REM sleep stages to make your sleep truly restful; PMOLED display</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">5ATM water-resistance: support all day wear, rain, and even a swim in the pool, which allows you to dive into becoming a better you</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Professional running Coach: One press to start the workout app instantly and get workout data such as recovery time and Vo2 Max. Operation System: Android 4.4+/iOS 8.0+</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Long battery life: a single charge gives you 21 days of normal usage. Workout mode can last 4-5 hours (per-second hr. monitoring + GPS on)</span></li></ul>',
            "price"        => 60,
            "quantity"     => 32,
            "is_android"   => 1,
            "is_threeD"    => 1,
            "photo_id"     => 15,
            "user_id"      => 1,
            "category_id"  => 5,
            "brand_id"     => 3,
            "condition_id" => 1
        ]);

        \App\Product::create([
            "name"         => "Samsung Galaxy Tab E 9.6\"; 16 GB Wifi Tablet (Black) SM-T560NZKUXAR",
            "slug"         => "samsung-galaxy-tab-e-96-16-gb-wifi-tablet-black-sm-t560nzkuxar",
            "description"  => '<ul class="a-unordered-list a-vertical a-spacing-none" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(148, 148, 148); padding: 0px; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 13px;"><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">1.5 GB RAM memory</span></li><li style="list-style: disc; word-wrap: break-word; margin: 0px;"><span class="a-list-item" style="color: rgb(17, 17, 17);">Resolution: 800 x 1280 pixels (157 PPI pixel density)</span></li></ul>',
            "price"        => 130,
            "quantity"     => 11,
            "is_android"   => 1,
            "is_threeD"    => 0,
            "photo_id"     => 16,
            "user_id"      => 2,
            "category_id"  => 6,
            "brand_id"     => 2,
            "condition_id" => 2
        ]);


    }


}
