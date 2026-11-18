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

        SiteSetting::firstOrCreate(['group' => 'expertise'], ['data' => [
            'index_label' => ['fa' => 'تخصص‌ها', 'en' => 'Expertise'],
            'title' => ['fa' => 'حوزه‌هایی که تجربه در آن‌ها به نتیجه می‌رسد.', 'en' => 'Where experience turns into results.'],
            'sub' => [
                'fa' => 'تمرکز بر آنچه در جلسات واقعی کسب‌وکار، بارها آزموده و اجرایی شده است.',
                'en' => 'A focus on what has been tested and executed, repeatedly, in real business settings.',
            ],
            'items' => [
                [
                    'icon' => 'structure',
                    'title' => ['fa' => 'توسعه ساختاری سازمان', 'en' => 'Organizational Development'],
                    'desc' => [
                        'fa' => 'طراحی و استقرار ساختارهایی که سازمان را برای رشد پایدار آماده می‌کند؛ از شفاف‌سازی نقش‌ها تا فرایندهای درست.',
                        'en' => 'Designing and establishing structures that prepare an organization for sustainable growth — from clear roles to sound processes.',
                    ],
                ],
                [
                    'icon' => 'growth',
                    'title' => ['fa' => 'بازاریابی و استراتژی فروش', 'en' => 'Marketing & Sales Strategy'],
                    'desc' => [
                        'fa' => 'تدوین مسیرهای عملی بازاریابی و فروش، بر پایه تجربه واقعی بازار — نه نسخه‌های تکراری.',
                        'en' => 'Practical marketing and sales pathways grounded in real market experience — not recycled formulas.',
                    ],
                ],
                [
                    'icon' => 'compass',
                    'title' => ['fa' => 'مدیریت کسب‌وکار', 'en' => 'Business Management'],
                    'desc' => [
                        'fa' => 'همراهی مدیران در تصمیم‌ها و چالش‌های اداره کسب‌وکار؛ از نگاه سیستمی تا نتیجه‌گرایی صحیح.',
                        'en' => 'Supporting executives through the decisions and challenges of running a business — from systems thinking to proper result orientation.',
                    ],
                ],
                [
                    'icon' => 'speed',
                    'title' => ['fa' => 'افزایش بهره‌وری', 'en' => 'Productivity Improvement'],
                    'desc' => [
                        'fa' => 'بهبود عملکرد سازمان با نگاه دقیق به فرایندها، منابع و انگیزهٔ انسانی.',
                        'en' => 'Enhancing organizational performance through a close look at processes, resources, and human motivation.',
                    ],
                ],
                [
                    'icon' => 'network',
                    'title' => ['fa' => 'تفکر سیستمی', 'en' => 'Systems Thinking'],
                    'desc' => [
                        'fa' => 'نگاه کل‌نگر به سازمان برای یافتن ریشه‌ها، نه صرفاً نشانه‌ها.',
                        'en' => 'A holistic view of the organization that finds root causes — not just symptoms.',
                    ],
                ],
                [
                    'icon' => 'target',
                    'title' => ['fa' => 'اجرا و عملیاتی‌سازی اهداف', 'en' => 'Operational Execution'],
                    'desc' => [
                        'fa' => 'تبدیل اهداف کلان به برنامه‌های اجرایی قابل پیگیری و نتیجه‌محور.',
                        'en' => 'Turning ambitious goals into executable, trackable, result-driven plans.',
                    ],
                ],
            ],
        ]]);

        SiteSetting::firstOrCreate(['group' => 'journey'], ['data' => [
            'index_label' => ['fa' => 'مسیر حرفه‌ای', 'en' => 'Journey'],
            'title' => ['fa' => 'از دل صنعت، تا مشاورهٔ کسب‌وکارها.', 'en' => 'From the heart of industry to business consulting.'],
            'sub' => [
                'fa' => 'مسیری که با تجربه ساخته شده است؛ بدون شتابزدگی و با تکیه بر عمل.',
                'en' => 'A path built on experience — unhurried, grounded in practice.',
            ],
            'phases' => [
                [
                    'tag' => ['fa' => 'دو دهه تجربه', 'en' => 'Two Decades'],
                    'title' => ['fa' => 'در دل صنعت', 'en' => 'Inside Industry'],
                    'desc' => [
                        'fa' => 'فعالیت اجرایی و عملیاتی در حوزه صنعت و همکاری با برندهای مطرح ملی و بین‌المللی؛ دوره‌ای که بستر اصلی دانش امروز اوست.',
                        'en' => 'Executive and operational roles across the industrial sector, collaborating with leading national and international brands — the foundation of his expertise today.',
                    ],
                ],
                [
                    'tag' => ['fa' => '۱۳۹۸', 'en' => '2019'],
                    'title' => ['fa' => 'آغاز رسمی مشاوره و آموزش', 'en' => 'Official Start of Consulting & Training'],
                    'desc' => [
                        'fa' => 'شروع رسمی فعالیت مشاوره و آموزش در بازاریابی، فروش و مدیریت، و در اختیار گذاشتن تجربه‌ها به کسب‌وکارها.',
                        'en' => 'Formally began consulting and training in marketing, sales, and management — putting his experience at the service of businesses.',
                    ],
                ],
                [
                    'tag' => ['fa' => 'رسالت', 'en' => 'The Mission'],
                    'title' => ['fa' => 'همراهی کسب‌وکارهای ایران', 'en' => 'Alongside Iranian Businesses'],
                    'desc' => [
                        'fa' => 'کمک به کسب‌وکارها برای ایجاد ساختار صحیح و ارتقای سازمانی؛ مسیری که امروز نیز با همان دقت ادامه دارد.',
                        'en' => 'Helping businesses build sound structures and advance organizationally — a path he continues with the same care today.',
                    ],
                ],
                [
                    'tag' => ['fa' => 'امروز', 'en' => 'Today'],
                    'title' => ['fa' => 'چابک‌سازان آرکا', 'en' => 'Chabok Sazan Arka'],
                    'desc' => [
                        'fa' => 'مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکا؛ مشاوره، آموزش و توسعه سازمانی در کنار مجموعه‌هایی که به رشد رسیده‌اند.',
                        'en' => 'CEO of the organizational consulting company Chabok Sazan Arka — consulting, training, and organizational development alongside businesses that have grown.',
                    ],
                ],
            ],
        ]]);

        SiteSetting::firstOrCreate(['group' => 'general'], ['data' => [
            'brand_name' => ['fa' => 'علی درحی', 'en' => 'Ali Dorhi'],
            'nav_about' => ['fa' => 'درباره', 'en' => 'About'],
            'nav_expertise' => ['fa' => 'تخصص‌ها', 'en' => 'Expertise'],
            'nav_journey' => ['fa' => 'مسیر حرفه‌ای', 'en' => 'Journey'],
            'nav_collab' => ['fa' => 'همراهان', 'en' => 'Collaborations'],
            'nav_insights' => ['fa' => 'دیدگاه‌ها', 'en' => 'Insights'],
            'nav_contact' => ['fa' => 'تماس', 'en' => 'Contact'],
            'nav_cta' => ['fa' => 'رزرو مشاوره', 'en' => 'Book a Consultation'],
            'booking_url' => 'https://dorhi.ir/counseling/',
            'phone' => '+98 939 538 9820',
            'email' => 'ali.dorhi@gmail.com',
            'instagram' => 'alidorhi.ir',
            'footer_role' => [
                'fa' => 'مشاور و مدرس کسب‌وکار · مدیرعامل چابک‌سازان آرکا',
                'en' => 'Business Consultant & Trainer · CEO, Chabok Sazan Arka',
            ],
            'footer_copyright' => [
                'fa' => 'کلیه حقوق این وب‌سایت محفوظ و متعلق به مجموعه چابک‌سازان آرکا است.',
                'en' => 'All rights reserved — Chabok Sazan Arka Group.',
            ],
        ]]);

        SiteSetting::firstOrCreate(['group' => 'contact'], ['data' => [
            'index_label' => ['fa' => 'تماس و مشاوره', 'en' => 'Contact & Consultation'],
            'title' => [
                'fa' => 'برای ساختن مسیر رشد، گفتگو را آغاز کنیم.',
                'en' => "Let's start a conversation about sustainable growth.",
            ],
            'desc' => [
                'fa' => 'اگر به دنبال ساختارمند کردن کسب‌وکار و بهبود عملکرد سازمان هستید، از یک گفتگو آغاز کنید. جلسات مشاوره به‌صورت حضوری در مشهد و آنلاین برگزار می‌شود.',
                'en' => 'If you are looking to bring structure to your business and improve organizational performance, it begins with a conversation. Consultation sessions are held in person in Mashhad and online.',
            ],
            'phone_label' => ['fa' => 'تلفن', 'en' => 'Phone'],
            'email_label' => ['fa' => 'ایمیل', 'en' => 'Email'],
            'loc_label' => ['fa' => 'دفتر و جلسات حضوری', 'en' => 'Office & In-person Sessions'],
            'loc_value' => ['fa' => 'مشهد، خراسان رضوی', 'en' => 'Mashhad, Khorasan Razavi'],
            'ig_label' => ['fa' => 'اینستاگرام', 'en' => 'Instagram'],
        ]]);
    }
}
