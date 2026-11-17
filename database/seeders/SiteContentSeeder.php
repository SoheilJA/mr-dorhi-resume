<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::updateOrCreate(['group' => 'hero'], ['data' => [
            'eyebrow' => [
                'fa' => 'مشاور و مدرس کسب‌وکار · مدیرعامل چابک‌سازان آرکا',
                'en' => 'Business Consultant & Trainer · CEO, Chabok Sazan Arka',
            ],
            'title_line1' => ['fa' => 'ساختار درست،', 'en' => 'Strong structures'],
            'title_line2_pre' => ['fa' => 'مسیر', 'en' => 'create'],
            'title_line2_accent' => ['fa' => 'رشد پایدار', 'en' => 'sustainable'],
            'title_line3' => ['fa' => 'کسب‌وکار است.', 'en' => 'business growth.'],
            'desc' => [
                'fa' => 'آنچه علی درحی می‌آموزد و می‌آموزاند، علمی و تجربه‌شده است؛ آمیزه‌ای که از دل ۲۰ سال تجربه اجرایی و عملیاتی در حوزه صنعت و همکاری با برندهای مطرح ملی و بین‌المللی به دست آمده است.',
                'en' => 'What Ali Dorhi learns and teaches is both scientific and field-tested — the distillation of 20 years of executive and operational experience in industry, working alongside leading national and international brands.',
            ],
            'cta_primary' => ['fa' => 'رزرو جلسه مشاوره', 'en' => 'Book a Consultation'],
            'cta_secondary' => ['fa' => 'آشنایی با مسیر حرفه‌ای', 'en' => 'Explore the Journey'],
            'meta_exp_label' => ['fa' => 'تجربه حرفه‌ای', 'en' => 'Professional Experience'],
            'meta_exp_value' => ['fa' => '+۲۰ سال اجرایی و عملیاتی', 'en' => '20+ Years Executive & Operational'],
            'meta_loc_label' => ['fa' => 'محل برگزاری جلسات', 'en' => 'Consultation Sessions'],
            'meta_loc_value' => ['fa' => 'مشهد، ایران', 'en' => 'Mashhad, Iran'],
            'portrait_alt' => [
                'fa' => 'پرتره علی درحی، مشاور کسب‌وکار',
                'en' => 'Portrait of Ali Dorhi, business consultant',
            ],
            'portrait_caption' => [
                'fa' => 'علی درحی — مشاور سازمانی و مدیرعامل چابک‌سازان آرکا',
                'en' => 'Ali Dorhi — Organizational Consultant & CEO of Chabok Sazan Arka',
            ],
            'scroll' => ['fa' => 'اسکرول کنید', 'en' => 'Scroll'],
        ]]);
    }
}
