<?php

use App\Enums\CategoryTypeEnum;
use App\Enums\PageTypeEnum;
use App\Enums\SeoRobotsMetaEnum;

return [
    'blogs' => [
        [
            'title'         => 'Almindelige smartphoneproblemer og deres løsninger',
            'description'   => 'Lær om de mest almindelige mobiltelefonproblemer, og hvordan du hurtigt kan løse dem.',
            'body'          => '
<p>Smartphones er blevet en uundværlig del af vores hverdag. Men ligesom alle tekniske enheder er de modtagelige for defekter. De mest almindelige problemer er revnede skærme, svage batterier og vandskader. Skærme går ofte i stykker på grund af fald, mens batterier mister strøm over tid. Vandskader opstår ofte på grund af uforsigtighed i hverdagen.</p>

<p>Heldigvis kan disse skader normalt repareres hurtigt. Med professionelle reservedele og erfarne teknikere vil din smartphone blive som ny igen. <em>Det er vigtigt ikke at forsinke reparationer</em>, da små problemer ofte bliver værre.</p>
',
            'slug'          => 'Almindelige-smartphoneproblemer-og-løsninger',
            'published'     => true,
            'published_at'  => now(),
            'user_id'       => 2,
            'category_id'   => 1,
            'view_count'    => 2,
            'comment_count' => 1,
            'wish_count'    => 2,
            'languages'     => [
                'da',
            ],
            'seo_options'   => [
                'title'       => 'Almindelige smartphoneproblemer og deres løsninger',
                'description' => 'Lær om de mest almindelige mobiltelefonproblemer, og hvordan du hurtigt kan løse dem.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'path'          => public_path('assets/img/blog/blog_1_1.png'),
            'tags'          => [
                'mobil', 'tablet', 'iPhone', 'iPad', 'Android',
            ],
        ],
        [
            'title'         => 'Hvorfor det er bedre at reparere din telefon end at købe en ny',
            'description'   => 'Opdag fordelene ved at reparere din smartphone i forhold til at købe en ny.',
            'body'          => '
<p>Mange brugere står over for spørgsmålet: <strong>Reparation eller nyt køb?</strong> Det kan ofte betale sig at få din smartphone repareret. For det første sparer du penge, da reparationer normalt er betydeligt billigere end en ny enhed. For det andet bidrager du til <em>Miljøbeskyttelse</em>, ved at undgå elektronisk affald.</p>

<p>En reparation forlænger levetiden på din enhed betydeligt, især når der anvendes originale eller premium reservedele. Derudover bevarer du dine gemte data og behøver ikke at vænne dig til et nyt system. Derfor er en reparation ofte det mere bæredygtige og økonomiske valg.</p>
',
            'slug'          => 'Mobiltelefonreparation-er-bedre-end-at-købe-en-ny',
            'published'     => true,
            'published_at'  => now(),
            'user_id'       => 3,
            'category_id'   => 1,
            'view_count'    => 2,
            'comment_count' => 1,
            'wish_count'    => 2,
            'languages'     => [
                'da',
            ],
            'seo_options'   => [
                'title'       => 'Hvorfor det er bedre at reparere din telefon end at købe en ny',
                'description' => 'Opdag fordelene ved at reparere din smartphone i forhold til at købe en ny.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'path'          => public_path('assets/img/blog/blog_1_2.png'),
            'tags'          => [
                'iPad', 'Android',
            ],
        ],
        [
            'title'         => 'Tips til at passe på din smartphone for at få en længere levetid',
            'description'   => 'Med disse enkle tips vil din smartphone forblive funktionel og pålidelig i længere tid.',
            'body'          => '
<p>En smartphone følger os hver dag – det er endnu vigtigere at passe ordentligt på den. Brug altid en <strong>beskyttelsesdæksel</strong> og <strong>skudsikkert glas</strong>, For at undgå at skærmen beskadiges, må batteriet ikke oplades kontinuerligt til 100%, men i stedet mellem 20% og 80% for at forlænge dets levetid.</p>

<p>Pas på ikke at udsætte din enhed for ekstreme temperaturer, da varme og kulde kan belaste batteriet. Fast <em>Softwareopdateringer</em> også sikre sikkerhed og bedre ydeevne.</p>

<p>Med disse enkle foranstaltninger sparer du ikke kun på reparationsomkostninger, men du vil også have glæde af din smartphone i længere tid.</p>
',
            'slug'          => 'smartphone-plejetips-længere-levetid',
            'published'     => true,
            'published_at'  => now(),
            'user_id'       => 3,
            'category_id'   => 1,
            'view_count'    => 2,
            'comment_count' => 1,
            'wish_count'    => 2,
            'languages'     => [
                'da',
            ],
            'seo_options'   => [
                'title'       => 'Tips til at passe på din smartphone for at få en længere levetid',
                'description' => 'Med disse enkle tips vil din smartphone forblive funktionel og pålidelig i længere tid.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'path'          => public_path('assets/img/blog/blog_1_3.png'),
            'tags'          => [
                'tablet', 'iPhone',
            ],
        ],
    ],

    'categories' => [
        [
            'title'       => 'Laravel',
            'slug'        => 'laravel',
            'description' => 'Laravel ist ein beliebtes und mächtiges Framework für die Webentwicklung mit der PHP-Sprache, das auf der MVC-Architektur (Model-View-Controller) basiert.',
            'body'        => 'Dieses Framework wurde mit dem Ziel entwickelt, die Entwicklung von Webanwendungen zu vereinfachen und bietet Funktionen wie einfaches Routing, Datenbankmanagement mit Eloquent ORM, Warteschlangensystem, Authentifizierung, E-Mail-Versand und die Blade-Template-Engine für Entwickler. Laravel macht mit seiner schönen Syntax und professionellen Tools die Entwicklung von kleinen bis großen Projekten schneller und angenehmer.',
            'seo_options' => [
                'title'       => 'Laravel',
                'description' => 'Laravel ist ein beliebtes und mächtiges Framework für die Webentwicklung mit der PHP-Sprache, das auf der MVC-Architektur (Model-View-Controller) basiert.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::INDEX_FOLLOW,
            ],
            'type'        => CategoryTypeEnum::BLOG->value,
            'ordering'    => 1,
            'parent_id'   => null,
            'created_at'  => now(),
            'updated_at'  => now(),
            'languages'   => [
                'da',
            ],
            'path'        => public_path('test/category/laravel-cat.png'),
        ],
        [
            'title'       => 'Faq Category',
            'slug'        => 'faq-category',
            'description' => 'Laravel ist ein beliebtes und mächtiges Framework für die Webentwicklung mit der PHP-Sprache, das auf der MVC-Architektur (Model-View-Controller) basiert.',
            'body'        => 'Dieses Framework wurde mit dem Ziel entwickelt, die Entwicklung von Webanwendungen zu vereinfachen und bietet Funktionen wie einfaches Routing, Datenbankmanagement mit Eloquent ORM, Warteschlangensystem, Authentifizierung, E-Mail-Versand und die Blade-Template-Engine für Entwickler. Laravel macht mit seiner schönen Syntax und professionellen Tools die Entwicklung von kleinen bis großen Projekten schneller und angenehmer.',
            'seo_options' => [
                'title'       => 'Faq Category',
                'description' => 'Laravel ist ein beliebtes und mächtiges Framework für die Webentwicklung mit der PHP-Sprache, das auf der MVC-Architektur (Model-View-Controller) basiert.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::INDEX_FOLLOW,
            ],
            'type'        => CategoryTypeEnum::FAQ->value,
            'ordering'    => 2,
            'parent_id'   => null,
            'created_at'  => now(),
            'updated_at'  => now(),
            'languages'   => [
                'da',
            ],
            'path'        => public_path('test/category/laravel.jpg'),
        ],
    ],

    'pages' => [
        [
            'title'      => 'Lad os klare opgaven for dig',
            'body'       => 'Planlægningen af dit bryllup bør være fyldt med glæde, ikke stress. I vores bryllupssalon tager vi os af alle detaljer – fra dekoration og design til koordinering og catering – så du bare kan nyde din særlige dag. Vores dedikerede team sørger for, at alt forløber problemfrit og skaber en atmosfære af skønhed,
kærlighed og fest. Læn dig tilbage, slap af, og lad os forvandle dine drømme til en uforglemmelig oplevelse.',
            'slug'       => 'Lad-os-klare-opgaven-for-dig',
            'view_count' => 10,
            'type'       => PageTypeEnum::ABOUT_US->value,
            'languages'  => [
                'da',
            ],
            'seo_options' => [
                'title'       => 'Lad os klare opgaven for dig',
                'description' => 'Planlægningen af dit bryllup bør være fyldt med glæde, ikke stress. I vores bryllupssalon tager vi os af alle detaljer – fra dekoration og design til koordinering og catering – så du bare kan nyde din...',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::INDEX_FOLLOW,
            ],
            'images'      => [
                public_path('assets/img/normal/about_4-2.png')
            ],
        ],
    ]
];
