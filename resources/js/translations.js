/**
 * Ali Dorhi — Personal Brand Website
 * Structured translation system (fa = default, en = secondary)
 *
 * Every visible string in the UI exists here. The Persian text is also
 * written directly into index.html so the page is fully readable (and
 * indexable) before JavaScript runs; this module powers the language switch.
 */

export const SITE = {
  phoneDisplay: '+98 939 538 9820',
  phoneHref: 'tel:+989395389820',
  email: 'ali.dorhi@gmail.com',
  instagram: 'https://www.instagram.com/alidorhi.ir',
  instagramHandle: '@alidorhi.ir',
  booking: 'https://dorhi.ir/counseling/',
  academy: 'https://dorhi.ir/specialized_academy/',
  toolbox: 'https://dorhi.ir/shop/',
  allContents: 'https://dorhi.ir/contents/',
};

export const translations = {
  /* ======================================================================
     PERSIAN (default)
     ====================================================================== */
  fa: {
    meta: {
      title: 'علی درحی | مشاور و مدرس کسب‌وکار — مدیرعامل چابک‌سازان آرکا',
      description:
        'وب‌سایت رسمی علی درحی؛ مشاور و مدرس کسب‌وکار و مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکا. ۲۰ سال تجربه اجرایی و عملیاتی در صنعت؛ مشاوره سازمانی، بازاریابی، فروش و مدیریت.',
    },
    a11y: {
      skip: 'پرش به محتوای اصلی',
      mainNav: 'ناوبری اصلی',
      toggleMenu: 'باز و بسته کردن منو',
      closeMenu: 'بستن منو',
      mobileMenu: 'منوی موبایل',
      langSwitch: 'انتخاب زبان',
      langFa: 'فارسی',
      langEn: 'انگلیسی',
    },
    preloader: {
      mark: 'علی درحی',
      monogram: 'ع.د',
      caption: 'dorhi.ir',
    },
    nav: {
      about: 'درباره',
      expertise: 'تخصص‌ها',
      journey: 'مسیر حرفه‌ای',
      collaborations: 'همراهان',
      insights: 'دیدگاه‌ها',
      contact: 'تماس',
      cta: 'رزرو مشاوره',
      home: 'علی درحی — صفحه نخست',
    },
    brand: {
      name: 'علی درحی',
    },
    hero: {
      eyebrow: 'مشاور و مدرس کسب‌وکار · مدیرعامل چابک‌سازان آرکا',
      titleLine1: 'ساختار درست،',
      titleLine2pre: 'مسیر',
      titleLine2accent: 'رشد پایدار',
      titleLine3: 'کسب‌وکار است.',
      desc: 'آنچه علی درحی می‌آموزد و می‌آموزاند، علمی و تجربه‌شده است؛ آمیزه‌ای که از دل ۲۰ سال تجربه اجرایی و عملیاتی در حوزه صنعت و همکاری با برندهای مطرح ملی و بین‌المللی به دست آمده است.',
      ctaPrimary: 'رزرو جلسه مشاوره',
      ctaSecondary: 'آشنایی با مسیر حرفه‌ای',
      metaExpLabel: 'تجربه حرفه‌ای',
      metaExpValue: '+۲۰ سال اجرایی و عملیاتی',
      metaLocLabel: 'محل برگزاری جلسات',
      metaLocValue: 'مشهد، ایران',
      portraitAlt: 'پرتره علی درحی، مشاور کسب‌وکار',
      portraitCaption: 'علی درحی — مشاور سازمانی و مدیرعامل چابک‌سازان آرکا',
      scroll: 'اسکرول کنید',
    },
    overview: {
      index: '۰۱ — درباره',
      title: 'تجربه‌ای که به ساختن مسیرهای بهتر می‌انجامد.',
      lead: 'علی درحی مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکاست؛ جایی که تجربه سال‌ها مدیریت اجرایی در صنعت، امروز در خدمت رشد کسب‌وکارهاست.',
      p2: 'او حدود دو دهه در سمت‌های اجرایی و عملیاتی صنعت فعالیت کرده و با برندهای مطرح ملی و بین‌المللی همکاری داشته است. از سال ۱۳۹۸، فعالیت رسمی خود را در حوزه مشاوره و آموزش — بازاریابی، فروش و مدیریت — آغاز کرده و تجربه‌اش را در اختیار کسب‌وکارهای متعددی قرار داده است.',
      p3: 'رسالت او، کمک و همراهی کسب‌وکارهای ایران در ایجاد ساختار صحیح و ارتقای عملکرد سازمانی است؛ با رویکردی که خودش سه اصل آن را چنین توصیف می‌کند:',
      statNumber: '۲۰+',
      statLabel: 'سال تجربه اجرایی و عملیاتی در حوزه صنعت',
      principles: [
        { title: 'ساده، اما عملگرا', desc: 'آنچه می‌آموزد و می‌آموزاند، علمی و تجربه‌شده است.' },
        { title: 'ساده، اما رشدآفرین', desc: 'کسب‌وکارهای متعددی با آموزش‌های او به رشد رسیده‌اند.' },
        { title: 'ساده، اما ساختاریافته', desc: 'آموزش‌های او در جهت ساختار صحیح و ارتقای سازمانی است.' },
      ],
      stripCaption: 'قاب همراهی — ثبت لحظاتی چند، در کنار مجموعه‌ها',
      photoAlt: [
        'جلسه کاری و ضبط محتوا در کنار مجموعه‌ها',
        'گروه همراهی در یک جلسه مشاوره',
        'کارگاه آموزشی با حضور مدیران',
      ],
    },
    expertise: {
      index: '۰۲ — تخصص‌ها',
      title: 'حوزه‌هایی که تجربه در آن‌ها به نتیجه می‌رسد.',
      sub: 'تمرکز بر آنچه در جلسات واقعی کسب‌وکار، بارها آزموده و اجرایی شده است.',
      items: [
        {
          title: 'توسعه ساختاری سازمان',
          desc: 'طراحی و استقرار ساختارهایی که سازمان را برای رشد پایدار آماده می‌کند؛ از شفاف‌سازی نقش‌ها تا فرایندهای درست.',
        },
        {
          title: 'بازاریابی و استراتژی فروش',
          desc: 'تدوین مسیرهای عملی بازاریابی و فروش، بر پایه تجربه واقعی بازار — نه نسخه‌های تکراری.',
        },
        {
          title: 'مدیریت کسب‌وکار',
          desc: 'همراهی مدیران در تصمیم‌ها و چالش‌های اداره کسب‌وکار؛ از نگاه سیستمی تا نتیجه‌گرایی صحیح.',
        },
        {
          title: 'افزایش بهره‌وری',
          desc: 'بهبود عملکرد سازمان با نگاه دقیق به فرایندها، منابع و انگیزهٔ انسانی.',
        },
        {
          title: 'تفکر سیستمی',
          desc: 'نگاه کل‌نگر به سازمان برای یافتن ریشه‌ها، نه صرفاً نشانه‌ها.',
        },
        {
          title: 'اجرا و عملیاتی‌سازی اهداف',
          desc: 'تبدیل اهداف کلان به برنامه‌های اجرایی قابل پیگیری و نتیجه‌محور.',
        },
      ],
    },
    journey: {
      index: '۰۳ — مسیر حرفه‌ای',
      title: 'از دل صنعت، تا مشاورهٔ کسب‌وکارها.',
      sub: 'مسیری که با تجربه ساخته شده است؛ بدون شتابزدگی و با تکیه بر عمل.',
      phases: [
        {
          tag: 'دو دهه تجربه',
          title: 'در دل صنعت',
          desc: 'فعالیت اجرایی و عملیاتی در حوزه صنعت و همکاری با برندهای مطرح ملی و بین‌المللی؛ دوره‌ای که بستر اصلی دانش امروز اوست.',
        },
        {
          tag: '۱۳۹۸',
          title: 'آغاز رسمی مشاوره و آموزش',
          desc: 'شروع رسمی فعالیت مشاوره و آموزش در بازاریابی، فروش و مدیریت، و در اختیار گذاشتن تجربه‌ها به کسب‌وکارها.',
        },
        {
          tag: 'رسالت',
          title: 'همراهی کسب‌وکارهای ایران',
          desc: 'کمک به کسب‌وکارها برای ایجاد ساختار صحیح و ارتقای سازمانی؛ مسیری که امروز نیز با همان دقت ادامه دارد.',
        },
        {
          tag: 'امروز',
          title: 'چابک‌سازان آرکا',
          desc: 'مدیرعامل شرکت مشاوره سازمانی چابک‌سازان آرکا؛ مشاوره، آموزش و توسعه سازمانی در کنار مجموعه‌هایی که به رشد رسیده‌اند.',
        },
      ],
    },
    collab: {
      index: '۰۴ — همراهان',
      title: 'مجموعه‌هایی که در کنارشان بوده‌ام.',
      sub: 'همراهی‌ها در دو سطح متفاوت но اتفاقاً مکمل انجام شده است؛ بعضی مجموعه‌ها از دل عملیات و اجرا، و بعضی از مسیر مشاوره.',
      opLabel: 'همراهی اجرایی و عملیاتی',
      opCount: '۶ مجموعه',
      coLabel: 'همراهی مشاوره‌ای',
      coCount: '۲۹ مجموعه',
      logoAlt: 'لوگوی مجموعهٔ همکار',
      logoAltOp: 'لوگوی مجموعهٔ همراه — همراهی اجرایی و عملیاتی',
      logoAltCo: 'لوگوی مجموعهٔ همراه — همراهی مشاوره‌ای',
    },
    insights: {
      index: '۰۵ — دیدگاه‌ها',
      title: 'دیدگاه‌ها و روایت‌ها.',
      sub: 'گزیده‌ای از ویدئوها و مقالات درباره رشد سازمانی، مدیریت فروش و سلامت مالی کسب‌وکار.',
      tagVideo: 'ویدئو',
      tagArticle: 'مقاله',
      watch: 'مشاهده',
      read: 'خواندن',
      viewAll: 'مشاهده همه محتواها',
      featuredAlt: 'ویدئوی «بحران جنگ، تجربیات شخصی»',
      items: [
        {
          title: 'بحران جنگ؛ تجربیات شخصی',
          type: 'video',
          alt: 'ویدئوی بحران جنگ و تجربیات شخصی علی درحی',
        },
        {
          title: 'روایت رشد',
          type: 'video',
          alt: 'ویدئوی روایت رشد',
        },
        {
          title: 'کنترل مطالبات؛ ستون فقرات سلامت مالی در شرکت‌های پخش و توزیع',
          type: 'video',
          alt: 'ویدئو درباره کنترل مطالبات و سلامت مالی',
        },
        {
          title: 'سرمایتان را نابود نکنید',
          type: 'video',
          alt: 'ویدئو درباره حفظ سرمایه کسب‌وکار',
        },
        {
          title: 'پیش‌نیازهای تغییر در کسب‌وکار',
          type: 'article',
          desc: 'یکی از دغدغه‌های اصلی در جلسات با صاحبان سرمایه و بنگاه‌های اقتصادی، بررسی میزان تغییری است که کسب‌وکارها لازم دارند.',
          alt: 'مقاله پیش‌نیازهای تغییر در کسب‌وکار',
        },
        {
          title: 'بهره‌وری و مفهوم آن در مدیریت',
          type: 'article',
          desc: 'بهره‌وری سازمانی دیدگاهی فکری است که می‌خواهد وضعیت موجود را به بهترین شکل ممکن بهبود ببخشد.',
          alt: 'مقاله بهره‌وری و مفهوم آن در مدیریت',
        },
      ],
    },
    contact: {
      index: '۰۶ — تماس و مشاوره',
      title: 'برای ساختن مسیر رشد، گفتگو را آغاز کنیم.',
      desc: 'اگر به دنبال ساختارمند کردن کسب‌وکار و بهبود عملکرد سازمان هستید، از یک گفتگو آغاز کنید. جلسات مشاوره به‌صورت حضوری در مشهد و آنلاین برگزار می‌شود.',
      phoneLabel: 'تلفن',
      emailLabel: 'ایمیل',
      locLabel: 'دفتر و جلسات حضوری',
      locValue: 'مشهد، خراسان رضوی',
      igLabel: 'اینستاگرام',
      consultTitle: 'رزرو جلسه مشاوره',
      consultSub: 'جلسات تخصصی کسب‌وکار در بازاریابی، فروش و مدیریت.',
      inPersonTitle: 'جلسه حضوری',
      inPersonSub: 'در مشهد برگزار می‌شود',
      onlineTitle: 'جلسه آنلاین',
      onlineSub: 'از هرجا که هستید',
      cta: 'رزرو از صفحه مشاوره',
      otherLabel: 'مسیرهای دیگر',
      academyTitle: 'آکادمی تخصصی',
      academySub: 'دوره‌های آموزشی کسب‌وکار',
      toolboxTitle: 'جعبه ابزار رشد',
      toolboxSub: 'محصولات و ابزارهای عملی',
    },
    footer: {
      role: 'مشاور و مدرس کسب‌وکار · مدیرعامل چابک‌سازان آرکا',
      quick: 'دسترسی سریع',
      social: 'شبکه‌های اجتماعی',
      instagram: 'اینستاگرام',
      copyright: 'کلیه حقوق این وب‌سایت محفوظ و متعلق به مجموعه چابک‌سازان آرکا است.',
      design: 'dorhi.ir',
    },
  },

  /* ======================================================================
     ENGLISH (secondary — professionally localized, not machine-translated)
     ====================================================================== */
  en: {
    meta: {
      title: 'Ali Dorhi | Business Consultant & Trainer — CEO, Chabok Sazan Arka',
      description:
        'Official website of Ali Dorhi — business consultant, trainer, and CEO of Chabok Sazan Arka, an organizational consulting company. 20 years of executive and operational experience in industry; consulting in marketing, sales, and management.',
    },
    a11y: {
      skip: 'Skip to main content',
      mainNav: 'Main navigation',
      toggleMenu: 'Toggle menu',
      closeMenu: 'Close menu',
      mobileMenu: 'Mobile menu',
      langSwitch: 'Select language',
      langFa: 'Persian',
      langEn: 'English',
    },
    preloader: {
      mark: 'Ali Dorhi',
      monogram: 'AD',
      caption: 'dorhi.ir',
    },
    nav: {
      about: 'About',
      expertise: 'Expertise',
      journey: 'Journey',
      collaborations: 'Collaborations',
      insights: 'Insights',
      contact: 'Contact',
      cta: 'Book a Consultation',
      home: 'Ali Dorhi — Home',
    },
    brand: {
      name: 'Ali Dorhi',
    },
    hero: {
      eyebrow: 'Business Consultant & Trainer · CEO, Chabok Sazan Arka',
      titleLine1: 'Strong structures',
      titleLine2pre: 'create',
      titleLine2accent: 'sustainable',
      titleLine3: 'business growth.',
      desc: 'What Ali Dorhi learns and teaches is both scientific and field-tested — the distillation of 20 years of executive and operational experience in industry, working alongside leading national and international brands.',
      ctaPrimary: 'Book a Consultation',
      ctaSecondary: 'Explore the Journey',
      metaExpLabel: 'Professional Experience',
      metaExpValue: '20+ Years Executive & Operational',
      metaLocLabel: 'Consultation Sessions',
      metaLocValue: 'Mashhad, Iran',
      portraitAlt: 'Portrait of Ali Dorhi, business consultant',
      portraitCaption: 'Ali Dorhi — Organizational Consultant & CEO of Chabok Sazan Arka',
      scroll: 'Scroll',
    },
    overview: {
      index: '01 — About',
      title: 'Experience that builds better paths.',
      lead: 'Ali Dorhi is CEO of Chabok Sazan Arka, an organizational consulting company where years of industrial executive experience now serve the growth of businesses.',
      p2: 'He has spent some two decades in executive and operational roles across industry, collaborating with leading national and international brands. In 2019 he formally began consulting and training in marketing, sales, and management — and has since shared that experience with numerous businesses.',
      p3: 'His mission is to help Iranian businesses build sound structures and elevate organizational performance, with an approach he describes in three principles:',
      statNumber: '20+',
      statLabel: 'Years of Executive & Operational Experience in Industry',
      principles: [
        { title: 'Simple, yet practical', desc: 'What he learns and teaches is scientific and proven in the field.' },
        { title: 'Simple, yet growth-creating', desc: 'Numerous businesses have grown through his training.' },
        { title: 'Simple, yet structured', desc: 'His teaching is aimed at sound structure and organizational advancement.' },
      ],
      stripCaption: 'Frames of collaboration — moments alongside teams and businesses',
      photoAlt: [
        'Working session and content recording with client teams',
        'Consulting session with a client group',
        'Training workshop with managers',
      ],
    },
    expertise: {
      index: '02 — Expertise',
      title: 'Where experience turns into results.',
      sub: 'A focus on what has been tested and executed, repeatedly, in real business settings.',
      items: [
        {
          title: 'Organizational Development',
          desc: 'Designing and establishing structures that prepare an organization for sustainable growth — from clear roles to sound processes.',
        },
        {
          title: 'Marketing & Sales Strategy',
          desc: 'Practical marketing and sales pathways grounded in real market experience — not recycled formulas.',
        },
        {
          title: 'Business Management',
          desc: 'Supporting executives through the decisions and challenges of running a business — from systems thinking to proper result orientation.',
        },
        {
          title: 'Productivity Improvement',
          desc: 'Enhancing organizational performance through a close look at processes, resources, and human motivation.',
        },
        {
          title: 'Systems Thinking',
          desc: 'A holistic view of the organization that finds root causes — not just symptoms.',
        },
        {
          title: 'Operational Execution',
          desc: 'Turning ambitious goals into executable, trackable, result-driven plans.',
        },
      ],
    },
    journey: {
      index: '03 — Journey',
      title: 'From the heart of industry to business consulting.',
      sub: 'A path built on experience — unhurried, grounded in practice.',
      phases: [
        {
          tag: 'Two Decades',
          title: 'Inside Industry',
          desc: 'Executive and operational roles across the industrial sector, collaborating with leading national and international brands — the foundation of his expertise today.',
        },
        {
          tag: '2019',
          title: 'Official Start of Consulting & Training',
          desc: 'Formally began consulting and training in marketing, sales, and management — putting his experience at the service of businesses.',
        },
        {
          tag: 'The Mission',
          title: 'Alongside Iranian Businesses',
          desc: 'Helping businesses build sound structures and advance organizationally — a path he continues with the same care today.',
        },
        {
          tag: 'Today',
          title: 'Chabok Sazan Arka',
          desc: 'CEO of the organizational consulting company Chabok Sazan Arka — consulting, training, and organizational development alongside businesses that have grown.',
        },
      ],
    },
    collab: {
      index: '04 — Collaborations',
      title: 'The organizations I have worked alongside.',
      sub: 'Collaboration has happened on two complementary levels: some through operations and execution, others through consulting.',
      opLabel: 'Operational & Executive Collaboration',
      opCount: '6 organizations',
      coLabel: 'Consulting Collaboration',
      coCount: '29 organizations',
      logoAlt: 'Partner organization logo',
      logoAltOp: 'Partner logo — operational & executive collaboration',
      logoAltCo: 'Partner logo — consulting collaboration',
    },
    insights: {
      index: '05 — Insights',
      title: 'Insights & perspectives.',
      sub: 'A selection of videos and articles on organizational growth, sales management, and the financial health of businesses.',
      tagVideo: 'Video',
      tagArticle: 'Article',
      watch: 'Watch',
      read: 'Read',
      viewAll: 'View all content',
      featuredAlt: 'Video — “War Crisis: Personal Experiences”',
      items: [
        {
          title: 'War Crisis: Personal Experiences',
          type: 'video',
          alt: 'Video about the war crisis and personal experiences of Ali Dorhi',
        },
        {
          title: 'The Narrative of Growth',
          type: 'video',
          alt: 'Video — The Narrative of Growth',
        },
        {
          title: 'Receivables Control: The Backbone of Financial Health in Distribution Companies',
          type: 'video',
          alt: 'Video about receivables control and financial health',
        },
        {
          title: "Don't Destroy Your Capital",
          type: 'video',
          alt: 'Video about protecting business capital',
        },
        {
          title: 'Prerequisites for Change in Business',
          type: 'article',
          desc: 'One of the main concerns in meetings with investors and enterprises is assessing how much change a business actually needs.',
          alt: 'Article — Prerequisites for Change in Business',
        },
        {
          title: 'Productivity and Its Meaning in Management',
          type: 'article',
          desc: 'Organizational productivity is a mindset that seeks to improve the current state of affairs in the best possible way.',
          alt: 'Article — Productivity and Its Meaning in Management',
        },
      ],
    },
    contact: {
      index: '06 — Contact & Consultation',
      title: "Let's start a conversation about sustainable growth.",
      desc: 'If you are looking to bring structure to your business and improve organizational performance, it begins with a conversation. Consultation sessions are held in person in Mashhad and online.',
      phoneLabel: 'Phone',
      emailLabel: 'Email',
      locLabel: 'Office & In-person Sessions',
      locValue: 'Mashhad, Khorasan Razavi',
      igLabel: 'Instagram',
      consultTitle: 'Book a Consultation Session',
      consultSub: 'Specialized business sessions in marketing, sales, and management.',
      inPersonTitle: 'In Person',
      inPersonSub: 'Held in Mashhad',
      onlineTitle: 'Online',
      onlineSub: 'From wherever you are',
      cta: 'Book via the Consultation Page',
      otherLabel: 'Other Paths',
      academyTitle: 'Specialized Academy',
      academySub: 'Business training courses',
      toolboxTitle: 'Growth Toolbox',
      toolboxSub: 'Practical products & tools',
    },
    footer: {
      role: 'Business Consultant & Trainer · CEO, Chabok Sazan Arka',
      quick: 'Quick Links',
      social: 'Social',
      instagram: 'Instagram',
      copyright: 'All rights reserved — Chabok Sazan Arka Group.',
      design: 'dorhi.ir',
    },
  },
};

/** Operational (executive) and consulting logo ids, preserved from dorhi.ir */
export const LOGO_GROUPS = {
  operational: [15, 17, 23, 32, 33, 10],
  consulting: [
    11, 12, 13, 14, 16, 18, 19, 20, 21, 22, 24, 25, 26, 27, 28, 29, 30, 31, 34,
    35, 1, 2, 3, 4, 5, 6, 7, 8, 9,
  ],
};

/** Insights media data — links point to the original content on dorhi.ir */
export const MEDIA = {
  featured: {
    img: 'media/video-crisis.webp',
    url: 'https://dorhi.ir/%d8%a8%d8%ad%d8%b1%d8%a7%d9%86-%d8%ac%d9%86%da%af%d8%8c%d8%aa%d8%ac%d8%b1%d8%a8%db%8c%d8%a7%d8%aa-%d8%b4%d8%ae%d8%b5%db%8c-%d8%ac%d9%86%d8%a7%d8%a8-%d9%85%d9%87%d9%86%d8%af%d8%b3-%d8%af%d8%b1%d8%ad/',
  },
  items: [
    {
      img: 'media/video-growth.webp',
      url: 'https://dorhi.ir/%d8%b1%d9%88%d8%a7%db%8c%d8%aa-%d8%b1%d8%b4%d8%af/',
      key: 'insights.items.1',
    },
    {
      img: 'media/video-receivables.webp',
      url: 'https://dorhi.ir/%da%a9%d9%86%d8%aa%d8%b1%d9%84-%d9%85%d8%b7%d8%a7%d9%84%d8%a8%d8%a7%d8%aa-%d8%b3%d8%aa%d9%88%d9%86-%d9%81%d9%82%d8%b1%d8%a7%d8%aa-%d8%b3%d9%84%d8%a7%d9%85%d8%aa-%d9%85%d8%a7%d9%84%db%8c-%d8%af%d8%b1/',
      key: 'insights.items.2',
    },
    {
      img: 'media/video-capital.webp',
      url: 'https://dorhi.ir/%d8%b3%d8%b1%d9%85%d8%a7%db%8c%d8%aa%d9%88%d9%86-%d8%b1%d9%88-%d9%86%d8%a7%d8%a8%d9%88%d8%af-%d9%86%da%a9%d9%86%db%8c%d9%86/',
      key: 'insights.items.3',
    },
    {
      img: 'media/article-change.webp',
      url: 'https://dorhi.ir/change-in-business/',
      key: 'insights.items.4',
    },
    {
      img: 'media/article-productivity.webp',
      url: 'https://dorhi.ir/%d8%a8%d9%87%d8%b1%d9%87-%d9%88%d8%b1%db%8c-%d9%88-%d9%85%d9%81%d9%87%d9%88%d9%85-%d8%a2%d9%86-%d8%af%d8%b1-%d9%85%d8%af%db%8c%d8%b1%db%8c%d8%aa/',
      key: 'insights.items.5',
    },
  ],
};
