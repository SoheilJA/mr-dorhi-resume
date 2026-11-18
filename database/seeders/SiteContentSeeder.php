<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::firstOrCreate(['group' => 'hero'], ['data' => [
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

        SiteSetting::firstOrCreate(['group' => 'about'], ['data' => [
            'index_label' => ['fa' => 'درباره', 'en' => 'About'],
            'title' => [
                'fa' => 'تجربه‌ای که به ساختن مسیرهای بهتر می‌انجامد.',
                'en' => 'Experience that builds better paths.',
            ],
            'lead' => [
                'fa' => 'علی درحی مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکاست؛ جایی که تجربه سال‌ها مدیریت اجرایی در صنعت، امروز در خدمت رشد کسب‌وکارهاست.',
                'en' => 'Ali Dorhi is CEO of Chabok Sazan Arka, an organizational consulting company where years of industrial executive experience now serve the growth of businesses.',
            ],
            'p2' => [
                'fa' => 'او حدود دو دهه در سمت‌های اجرایی و عملیاتی صنعت فعالیت کرده و با برندهای مطرح ملی و بین‌المللی همکاری داشته است. از سال ۱۳۹۸، فعالیت رسمی خود را در حوزه مشاوره و آموزش — بازاریابی، فروش و مدیریت — آغاز کرده و تجربه‌اش را در اختیار کسب‌وکارهای متعددی قرار داده است.',
                'en' => 'He has spent some two decades in executive and operational roles across industry, collaborating with leading national and international brands. In 2019 he formally began consulting and training in marketing, sales, and management — and has since shared that experience with numerous businesses.',
            ],
            'p3' => [
                'fa' => 'رسالت او، کمک و همراهی کسب‌وکارهای ایران در ایجاد ساختار صحیح و ارتقای عملکرد سازمانی است؛ با رویکردی که خودش سه اصل آن را چنین توصیف می‌کند:',
                'en' => 'His mission is to help Iranian businesses build sound structures and elevate organizational performance, with an approach he describes in three principles:',
            ],
            'stat_number' => 20,
            'stat_suffix' => '+',
            'stat_label' => [
                'fa' => 'سال تجربه اجرایی و عملیاتی در حوزه صنعت',
                'en' => 'Years of Executive & Operational Experience in Industry',
            ],
            'principles' => [
                [
                    'title' => ['fa' => 'ساده، اما عملگرا', 'en' => 'Simple, yet practical'],
                    'desc' => ['fa' => 'آنچه می‌آموزد و می‌آموزاند، علمی و تجربه‌شده است.', 'en' => 'What he learns and teaches is scientific and proven in the field.'],
                ],
                [
                    'title' => ['fa' => 'ساده، اما رشدآفرین', 'en' => 'Simple, yet growth-creating'],
                    'desc' => ['fa' => 'کسب‌وکارهای متعددی با آموزش‌های او به رشد رسیده‌اند.', 'en' => 'Numerous businesses have grown through his training.'],
                ],
                [
                    'title' => ['fa' => 'ساده، اما ساختاریافته', 'en' => 'Simple, yet structured'],
                    'desc' => ['fa' => 'آموزش‌های او در جهت ساختار صحیح و ارتقای سازمانی است.', 'en' => 'His teaching is aimed at sound structure and organizational advancement.'],
                ],
            ],
            'strip_caption' => [
                'fa' => 'قاب همراهی — ثبت لحظاتی چند، در کنار مجموعه‌ها',
                'en' => 'Frames of collaboration — moments alongside teams and businesses',
            ],
        ]]);
    }
}
