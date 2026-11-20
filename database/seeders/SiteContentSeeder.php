<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use App\Support\ImageUpload;

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

        // عکس‌های بخش درباره
        $about = SiteSetting::firstOrNew(['group' => 'about']);
        $aboutData = $about->data ?? [];

        if (!array_key_exists('photos', $aboutData)) {
            $photos = [
                ['photo-03.webp', 'جلسه کاری و ضبط محتوا در کنار مجموعه‌ها', 'Working session and content recording with client teams'],
                ['photo-05.webp', 'گروه همراهی در یک جلسه مشاوره', 'Consulting session with a client group'],
                ['photo-08.webp', 'کارگاه آموزشی با حضور مدیران', 'Training workshop with managers'],
            ];

            $aboutData['photos'] = array_map(fn(array $p): array => [
                'image' => ImageUpload::convert(public_path('images/' . $p[0]), 'about', 1000, 750),
                'alt' => ['fa' => $p[1], 'en' => $p[2]],
            ], $photos);

            $about->data = $aboutData;
            $about->save();
        }

        // بخش همراهان
        if (!SiteSetting::where('group', 'collab')->exists()) {
            $logos = fn(array $ids): array => array_map(
                fn(int $id): string => ImageUpload::convert(public_path(sprintf('logos/logo-%02d.png', $id)), 'logos', 256),
                $ids,
            );

            SiteSetting::create(['group' => 'collab', 'data' => [
                'index_label' => ['fa' => 'همراهان', 'en' => 'Collaborations'],
                'title' => ['fa' => 'مجموعه‌هایی که در کنارشان بوده‌ام.', 'en' => 'The organizations I have worked alongside.'],
                'sub' => [
                    'fa' => 'همراهی‌ها در دو سطح متفاوت اما مکمل انجام شده است؛ بعضی مجموعه‌ها از دل عملیات و اجرا، و بعضی از مسیر مشاوره.',
                    'en' => 'Collaboration has happened on two complementary levels: some through operations and execution, others through consulting.',
                ],
                'count_word' => ['fa' => 'مجموعه', 'en' => 'organizations'],
                'op_label' => ['fa' => 'همراهی اجرایی و عملیاتی', 'en' => 'Operational & Executive Collaboration'],
                'co_label' => ['fa' => 'همراهی مشاوره‌ای', 'en' => 'Consulting Collaboration'],
                'op_logo_alt' => [
                    'fa' => 'لوگوی مجموعهٔ همراه — همراهی اجرایی و عملیاتی',
                    'en' => 'Partner logo — operational & executive collaboration',
                ],
                'co_logo_alt' => [
                    'fa' => 'لوگوی مجموعهٔ همراه — همراهی مشاوره‌ای',
                    'en' => 'Partner logo — consulting collaboration',
                ],
                'op_logos' => $logos([15, 17, 23, 32, 33, 10]),
                'co_logos' => $logos([11, 12, 13, 14, 16, 18, 19, 20, 21, 22, 24, 25, 26, 27, 28, 29, 30, 31, 34, 35, 1, 2, 3, 4, 5, 6, 7, 8, 9]),
            ]]);
        }


        if (!SiteSetting::where('group', 'insights')->exists()) {
            $make = fn(string $type, string $cover, string $url, array $title, ?array $excerpt = null): array => [
                'type' => $type,
                'cover' => ImageUpload::convert(public_path('media/' . $cover), 'insights', 900, 563),
                'video_source' => 'link',
                'url' => $url,
                'title' => $title,
                'excerpt' => $excerpt ?? ['fa' => '', 'en' => ''],
            ];

            SiteSetting::create(['group' => 'insights', 'data' => [
                'index_label' => ['fa' => 'دیدگاه‌ها', 'en' => 'Insights'],
                'title' => ['fa' => 'دیدگاه‌ها و روایت‌ها.', 'en' => 'Insights & perspectives.'],
                'sub' => [
                    'fa' => 'گزیده‌ای از ویدئوها و مقالات درباره رشد سازمانی، مدیریت فروش و سلامت مالی کسب‌وکار.',
                    'en' => 'A selection of videos and articles on organizational growth, sales management, and the financial health of businesses.',
                ],
                'tag_video' => ['fa' => 'ویدئو', 'en' => 'Video'],
                'tag_article' => ['fa' => 'مقاله', 'en' => 'Article'],
                'watch' => ['fa' => 'مشاهده', 'en' => 'Watch'],
                'read' => ['fa' => 'خواندن', 'en' => 'Read'],
                'view_all' => ['fa' => 'مشاهده همه محتواها', 'en' => 'View all content'],
                'view_all_url' => 'https://dorhi.ir/contents/',
                'items' => [
                    $make('video', 'video-crisis.webp',
                        'https://dorhi.ir/%d8%a8%d8%ad%d8%b1%d8%a7%d9%86-%d8%ac%d9%86%da%af%d8%8c%d8%aa%d8%ac%d8%b1%d8%a8%db%8c%d8%a7%d8%aa-%d8%b4%d8%ae%d8%b5%db%8c-%d8%ac%d9%86%d8%a7%d8%a8-%d9%85%d9%87%d9%86%d8%af%d8%b3-%d8%af%d8%b1%d8%ad/',
                        ['fa' => 'بحران جنگ؛ تجربیات شخصی', 'en' => 'War Crisis: Personal Experiences']),
                    $make('video', 'video-growth.webp',
                        'https://dorhi.ir/%d8%b1%d9%88%d8%a7%db%8c%d8%aa-%d8%b1%d8%b4%d8%af/',
                        ['fa' => 'روایت رشد', 'en' => 'The Narrative of Growth']),
                    $make('video', 'video-receivables.webp',
                        'https://dorhi.ir/%da%a9%d9%86%d8%aa%d8%b1%d9%84-%d9%85%d8%b7%d8%a7%d9%84%d8%a8%d8%a7%d8%aa-%d8%b3%d8%aa%d9%88%d9%86-%d9%81%d9%82%d8%b1%d8%a7%d8%aa-%d8%b3%d9%84%d8%a7%d9%85%d8%aa-%d9%85%d8%a7%d9%84%db%8c-%d8%af%d8%b1/',
                        [
                            'fa' => 'کنترل مطالبات؛ ستون فقرات سلامت مالی در شرکت‌های پخش و توزیع',
                            'en' => 'Receivables Control: The Backbone of Financial Health in Distribution Companies',
                        ]),
                    $make('video', 'video-capital.webp',
                        'https://dorhi.ir/%d8%b3%d8%b1%d9%85%d8%a7%db%8c%d8%aa%d9%88%d9%86-%d8%b1%d9%88-%d9%86%d8%a7%d8%a8%d9%88%d8%af-%d9%86%da%a9%d9%86%db%8c%d9%86/',
                        ['fa' => 'سرمایتان را نابود نکنید', 'en' => "Don't Destroy Your Capital"]),
                    $make('article', 'article-change.webp',
                        'https://dorhi.ir/change-in-business/',
                        ['fa' => 'پیش‌نیازهای تغییر در کسب‌وکار', 'en' => 'Prerequisites for Change in Business'],
                        [
                            'fa' => 'یکی از دغدغه‌های اصلی در جلسات با صاحبان سرمایه و بنگاه‌های اقتصادی، بررسی میزان تغییری است که کسب‌وکارها لازم دارند.',
                            'en' => 'One of the main concerns in meetings with investors and enterprises is assessing how much change a business actually needs.',
                        ]),
                    $make('article', 'article-productivity.webp',
                        'https://dorhi.ir/%d8%a8%d9%87%d8%b1%d9%87-%d9%88%d8%b1%db%8c-%d9%88-%d9%85%d9%81%d9%87%d9%88%d9%85-%d8%a2%d9%86-%d8%af%d8%b1-%d9%85%d8%af%db%8c%d8%b1%db%8c%d8%aa/',
                        ['fa' => 'بهره‌وری و مفهوم آن در مدیریت', 'en' => 'Productivity and Its Meaning in Management'],
                        [
                            'fa' => 'بهره‌وری سازمانی دیدگاهی فکری است که می‌خواهد وضعیت موجود را به بهترین شکل ممکن بهبود ببخشد.',
                            'en' => 'Organizational productivity is a mindset that seeks to improve the current state of affairs in the best possible way.',
                        ]),
                ],
            ]]);
        }

        SiteSetting::firstOrCreate(['group' => 'seo'], ['data' => [
            'site_name' => ['fa' => 'علی درحی', 'en' => 'Ali Dorhi'],
            'title' => [
                'fa' => 'علی درحی | مشاور و مدرس کسب‌وکار — مدیرعامل چابک‌سازان آرکا',
                'en' => 'Ali Dorhi | Business Consultant & Trainer — CEO, Chabok Sazan Arka',
            ],
            'description' => [
                'fa' => 'وب‌سایت رسمی علی درحی؛ مشاور و مدرس کسب‌وکار و مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکا. ۲۰ سال تجربه اجرایی و عملیاتی در صنعت؛ مشاوره سازمانی، بازاریابی، فروش و مدیریت.',
                'en' => 'Official website of Ali Dorhi — business consultant, trainer, and CEO of Chabok Sazan Arka, an organizational consulting company. 20 years of executive and operational experience in industry; consulting in marketing, sales, and management.',
            ],
            'job_title' => ['fa' => 'مشاور و مدرس کسب‌وکار', 'en' => 'Business Consultant & Trainer'],
            'org_name' => ['fa' => 'چابک‌سازان آرکا', 'en' => 'Chabok Sazan Arka'],
            'city' => ['fa' => 'مشهد', 'en' => 'Mashhad'],
            'region' => ['fa' => 'خراسان رضوی', 'en' => 'Khorasan Razavi'],
            'knows_about' => [
                'fa' => ['توسعه سازمانی', 'استراتژی بازاریابی', 'مدیریت فروش', 'مدیریت کسب‌وکار', 'افزایش بهره‌وری', 'تفکر سیستمی'],
                'en' => ['Organizational Development', 'Marketing Strategy', 'Sales Management', 'Business Management', 'Productivity Improvement', 'Systems Thinking'],
            ],
        ]]);
    }
}
