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
            'title'       => 'Lad os klare opgaven for dig',
            'body'        => 'Planlægningen af dit bryllup bør være fyldt med glæde, ikke stress. I vores bryllupssalon tager vi os af alle detaljer – fra dekoration og design til koordinering og catering – så du bare kan nyde din særlige dag. Vores dedikerede team sørger for, at alt forløber problemfrit og skaber en atmosfære af skønhed,
kærlighed og fest. Læn dig tilbage, slap af, og lad os forvandle dine drømme til en uforglemmelig oplevelse.',
            'slug'        => 'Lad-os-klare-opgaven-for-dig',
            'view_count'  => 10,
            'type'        => PageTypeEnum::ABOUT_US->value,
            'languages'   => [
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
    ],

    'sliders' => [
        [
            'subtitle'    => 'october 9',
            'title'       => 'David & Mary',
            'description' => 'skal giftes. Gem datoen',
            'published'   => true,
            'languages'   => [
                'da',
            ],
            'image'       => public_path('assets/img/hero/hero_1_1.png'),
        ],
        [
            'subtitle'    => 'december 12',
            'title'       => 'John & Sara',
            'description' => 'skal giftes. Gem datoen',
            'published'   => true,
            'languages'   => [
                'da',
            ],
            'image'       => public_path('assets/img/hero/hero_1_2.png'),
        ],
    ],

    'portfolios' => [
        [
            'title'       => 'Årets bedste ukrudtsrydning',
            'body'        => '
<p><strong>St&oslash;rste udvikling af marketingstrategi</strong></p>
<p>Benchmark funktionelle produkter holistisk for fremragende metoder til forbedring. Visualiser problemfrit innovativ parathed under omfattende initiativer. Frig&oslash;r fuldst&aelig;ndigt problemfri data via end-to-end-tjenester. Frig&oslash;r kontinuerligt virtuelle e-mails gennem magnetiske kernevirksomheder. Engager distribuerede elementer interaktivt via fokuserede tilpasninger. Fremstil dynamisk fremragende innovation til fremadrettet teknologi. F&aring; intrinsisk indflydelse p&aring; styrkede scenarier.</p>
<p><strong>Projektets udfordring</strong></p>
<p>Interaktiv engagement i distribuerede tilpasninger via fokuserede tilpasninger. Dynamisk fremstilling af fremragende, fremadrettet teknologi. Intrinsisk p&aring;virkning af styrkede scenarier efter omkostningseffektiv outsourcing. Synergistisk produktivering af pandemisk e-handel i stedet for avancerede e-handlere. Frig&oslash;relse af friktionsfri data via tjenester. Kontinuerlig frig&oslash;relse af virtuelle e-handlere gennem magnetiske kernekompetencer.</p>
',
            'published'   => true,
            'slug'        => 'Årets-bedste-ukrudtsrydning',
            'languages'   => [
                'da',
            ],
            'view_count'  => 3,
            'seo_options' => [
                'title'       => 'Årets bedste ukrudtsrydning',
                'description' => null,
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'image'       => public_path('assets/img/portfolio/portfolio1_1.png'),
        ],
        [
            'title'       => 'Årets bedste ukrudtsrydning',
            'body'        => '
<p><strong>St&oslash;rste udvikling af marketingstrategi</strong></p>
<p>Benchmark funktionelle produkter holistisk for fremragende metoder til forbedring. Visualiser problemfrit innovativ parathed under omfattende initiativer. Frig&oslash;r fuldst&aelig;ndigt problemfri data via end-to-end-tjenester. Frig&oslash;r kontinuerligt virtuelle e-mails gennem magnetiske kernevirksomheder. Engager distribuerede elementer interaktivt via fokuserede tilpasninger. Fremstil dynamisk fremragende innovation til fremadrettet teknologi. F&aring; intrinsisk indflydelse p&aring; styrkede scenarier.</p>
<p><strong>Projektets udfordring</strong></p>
<p>Interaktiv engagement i distribuerede tilpasninger via fokuserede tilpasninger. Dynamisk fremstilling af fremragende, fremadrettet teknologi. Intrinsisk p&aring;virkning af styrkede scenarier efter omkostningseffektiv outsourcing. Synergistisk produktivering af pandemisk e-handel i stedet for avancerede e-handlere. Frig&oslash;relse af friktionsfri data via tjenester. Kontinuerlig frig&oslash;relse af virtuelle e-handlere gennem magnetiske kernekompetencer.</p>
',
            'published'   => true,
            'slug'        => 'Årets-bedste-ukrudtsrydning-2',
            'languages'   => [
                'da',
            ],
            'view_count'  => 12,
            'seo_options' => [
                'title'       => 'Årets bedste ukrudtsrydning',
                'description' => null,
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'image'       => public_path('assets/img/portfolio/portfolio1_2.png'),
        ],
        [
            'title'       => 'Årets bedste ukrudtsrydning',
            'body'        => '
<p><strong>St&oslash;rste udvikling af marketingstrategi</strong></p>
<p>Benchmark funktionelle produkter holistisk for fremragende metoder til forbedring. Visualiser problemfrit innovativ parathed under omfattende initiativer. Frig&oslash;r fuldst&aelig;ndigt problemfri data via end-to-end-tjenester. Frig&oslash;r kontinuerligt virtuelle e-mails gennem magnetiske kernevirksomheder. Engager distribuerede elementer interaktivt via fokuserede tilpasninger. Fremstil dynamisk fremragende innovation til fremadrettet teknologi. F&aring; intrinsisk indflydelse p&aring; styrkede scenarier.</p>
<p><strong>Projektets udfordring</strong></p>
<p>Interaktiv engagement i distribuerede tilpasninger via fokuserede tilpasninger. Dynamisk fremstilling af fremragende, fremadrettet teknologi. Intrinsisk p&aring;virkning af styrkede scenarier efter omkostningseffektiv outsourcing. Synergistisk produktivering af pandemisk e-handel i stedet for avancerede e-handlere. Frig&oslash;relse af friktionsfri data via tjenester. Kontinuerlig frig&oslash;relse af virtuelle e-handlere gennem magnetiske kernekompetencer.</p>
',
            'published'   => true,
            'slug'        => 'Årets-bedste-ukrudtsrydning-3',
            'languages'   => [
                'da',
            ],
            'view_count'  => 7,
            'seo_options' => [
                'title'       => 'Årets bedste ukrudtsrydning',
                'description' => null,
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'image'       => public_path('assets/img/portfolio/portfolio1_3.png'),
        ],
    ],

    'teams' => [
        [
            'name'      => 'Javad Nouri',
            'slug'      => 'javad-nouri',
            'job'       => 'Teknisk direktør',
            'special'   => true,
            'body'      => '
<p>Javad leder udviklingen af vores digitale infrastruktur og sikrer, at teknologi og strategi går hånd i hånd. Med sin baggrund inden for kunstig intelligens og softwarearkitektur bringer han innovation til hvert projekt.</p>
',
            'languages' => ['da'],
            'config'    => [
                'social_media' => [
                    'youtube'  => 'https://youtube.com/@javadnouri',
                    'facebook' => 'https://facebook.com/javad.nouri',
                    'twitter'  => 'https://x.com/javad_nouri',
                    'linkedin' => 'https://linkedin.com/in/javad-nouri',
                ],
                'info'         => [
                    'experience' => '+10 years',
                    'mobile'     => '9156545665',
                    'email'      => 'junkbox.483@mailinator.com',
                ]
            ],
            'image'     => public_path('assets/img/team/team2.png'),
        ],
        [
            'name'      => 'Sara Rahimi',
            'slug'      => 'sara-rahimi',
            'job'       => 'Projektleder',
            'special'   => true,
            'body'      => '
<p>Sara koordinerer tværfaglige teams og sørger for, at hvert projekt leveres med præcision og passion. Hendes fokus på brugeroplevelse gør hende til bindeleddet mellem kunder og udviklingsteamet.</p>
',
            'languages' => ['da'],
            'config'    => [
                'social_media' => [
                    'youtube'  => 'https://youtube.com/@sararproduct',
                    'facebook' => 'https://facebook.com/sara.rahimi.pm',
                    'twitter'  => 'https://x.com/sara_product',
                    'linkedin' => 'https://linkedin.com/in/sara-rahimi',
                ],
                'info'         => [
                    'experience' => '+20 years',
                    'mobile'     => '9156545665',
                    'email'      => 'tempuser-2025@yopmail.com',
                ]
            ],
            'image'     => public_path('assets/img/team/team1.png'),
        ],
        [
            'name'      => 'Mehdi Farzad',
            'slug'      => 'mehdi-farzad',
            'job'       => 'Backend-udvikler',
            'special'   => true,
            'body'      => '
<p>Mehdi bygger stabile og skalerbare serverløsninger, der håndterer komplekse processer med lethed. Han brænder for ren kode og pålidelighed i hver linje, han skriver.</p>
',
            'languages' => ['da'],
            'config'    => [
                'social_media' => [
                    'youtube'  => 'https://youtube.com/@farzadbackend',
                    'facebook' => 'https://facebook.com/mehdi.farzad.dev',
                    'twitter'  => 'https://x.com/mehdi_farzad',
                    'linkedin' => 'https://linkedin.com/in/mehdi-farzad',
                ],
                'info'         => [
                    'experience' => '+15 years',
                    'mobile'     => '9156545665',
                    'email'      => 'throwaway.alpha@guerrillamail.com',
                ]
            ],
            'image'     => public_path('assets/img/team/team3.png'),
        ],
        [
            'name'      => 'Elina Moradi',
            'slug'      => 'elina-moradi',
            'job'       => 'Frontend-udvikler',
            'special'   => false,
            'body'      => '
<p>Elina skaber smukke og responsive brugergrænseflader med fokus på elegance, ydeevne og tilgængelighed. Hendes designs kombinerer æstetik og funktionalitet på højeste niveau.</p>
',
            'languages' => ['da'],
            'config'    => [
                'social_media' => [
                    'youtube'  => 'https://youtube.com/@elinacodes',
                    'facebook' => 'https://facebook.com/elina.moradi',
                    'twitter'  => 'https://x.com/elina_moradi',
                    'linkedin' => 'https://linkedin.com/in/elina-moradi',
                ],
                'info'         => [
                    'experience' => '+13 years',
                    'mobile'     => '9156545665',
                    'email'      => 'disposable.test@10minutemail.com',
                ]
            ],
            'image'     => public_path('assets/img/team/team4.png'),
        ],
        [
            'name'      => 'Sofie Andersen',
            'slug'      => 'Sofie-Andersen',
            'job'       => 'Mobiludvikler',
            'special'   => false,
            'body'      => '
<p>Sofie udvikler moderne mobilapps med høj ydeevne og brugervenlighed. Hans ekspertise i Flutter sikrer, at vores applikationer fungerer perfekt på både iOS og Android.</p>
',
            'languages' => ['da'],
            'config'    => [
                'social_media' => [
                    'youtube'  => 'https://youtube.com/@hosseinflutter',
                    'facebook' => 'https://facebook.com/hossein.karimi',
                    'twitter'  => 'https://x.com/hossein_karimi',
                    'linkedin' => 'https://linkedin.com/in/hossein-karimi',
                ],
                'info'         => [
                    'experience' => '+30 years',
                    'mobile'     => '9156545665',
                    'email'      => 'spamcatcher.one@temp-mail.org',
                ]
            ],
            'image'     => public_path('assets/img/team/team5.png'),
        ],
        [
            'name'      => 'Neda Tavakoli',
            'slug'      => 'neda-tavakoli',
            'job'       => 'UX/UI Designer',
            'special'   => false,
            'body'      => '
<p>Neda står for den visuelle retning og brugeroplevelsen i vores projekter. Hun kombinerer kreativitet med analytisk tænkning for at skabe intuitive og smukke interfaces.</p>
',
            'languages' => ['da'],
            'config'    => [
                'social_media' => [
                    'youtube'  => 'https://youtube.com/@nedadesign',
                    'facebook' => 'https://facebook.com/neda.tavakoli',
                    'twitter'  => 'https://x.com/neda_tavakoli',
                    'linkedin' => 'https://linkedin.com/in/neda-tavakoli',
                ],
                'info'         => [
                    'experience' => '+17 years',
                    'mobile'     => '9156545665',
                    'email'      => 'sample+junk001@gmail.com',
                ]
            ],
            'image'     => public_path('assets/img/team/team6.png'),
        ],
    ],

    'faqs' => [
        [
            'title'        => 'Hvordan kan vi booke bryllupssalen?',
            'description'  => 'Du kan nemt booke vores bryllupssal via vores online reservationsformular eller ved at kontakte os direkte på telefon eller e-mail. Vi anbefaler at reservere i god tid, da populære datoer hurtigt bliver optaget.',
            'category_id'  => 2,
            'favorite'     => true,
            'ordering'     => 1,
            'languages'    => ['da'],
            'published'    => true,
            'published_at' => now(),
        ],
        [
            'title'        => 'Hvor mange gæster kan salen rumme?',
            'description'  => 'Vores sal kan komfortabelt rumme op til 250 gæster til middag og op til 350 personer til receptioner. Vi tilbyder også fleksible opsætninger afhængig af arrangementets størrelse.',
            'category_id'  => 2,
            'favorite'     => true,
            'ordering'     => 1,
            'languages'    => ['da'],
            'published'    => true,
            'published_at' => now(),
        ],
        [
            'title'        => 'Er der parkeringsmuligheder for gæsterne?',
            'description'  => 'Ja, vi har gratis parkering til rådighed for både brudepar og gæster. Der er også mulighed for handicapvenlige parkeringspladser tæt på indgangen.',
            'category_id'  => 2,
            'favorite'     => true,
            'ordering'     => 1,
            'languages'    => ['da'],
            'published'    => true,
            'published_at' => now(),
        ],
        [
            'title'        => 'Kan vi selv medbringe mad og drikke?',
            'description'  => 'Som udgangspunkt tilbyder vi vores egen professionelle catering, men hvis du ønsker at medbringe egen mad eller drikkevarer, kan dette aftales mod et mindre gebyr og efter godkendelse fra vores team.',
            'category_id'  => 2,
            'favorite'     => true,
            'ordering'     => 1,
            'languages'    => ['da'],
            'published'    => true,
            'published_at' => now(),
        ],
        [
            'title'        => 'Har I samarbejde med fotografer, blomsterdekoratører eller musikere?',
            'description'  => 'Ja! Vi samarbejder med flere professionelle leverandører, som kan hjælpe med alt fra blomster og musik til foto og video. Vi deler gerne vores anbefalinger med dig.',
            'category_id'  => 2,
            'favorite'     => true,
            'ordering'     => 1,
            'languages'    => ['da'],
            'published'    => true,
            'published_at' => now(),
        ],
    ],
];
