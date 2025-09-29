<?php

use App\Enums\CategoryTypeEnum;
use App\Enums\SeoRobotsMetaEnum;

return [
    'blogs' => [
        [
            'title'         => 'Häufige Smartphone-Probleme und ihre Lösungen',
            'description'   => 'Erfahren Sie, welche Handyprobleme am häufigsten auftreten und wie sie schnell behoben werden können.',
            'body'          => '
<p>Smartphones sind aus unserem Alltag nicht mehr wegzudenken. Doch wie jedes technische Gerät sind auch sie anfällig für Defekte. Die häufigsten Probleme sind <strong>gesprungene Displays</strong>, <strong>schwache Akkus</strong> und <strong>Wasserschäden</strong>. Ein Displaybruch passiert oft durch Stürze, während Akkus mit der Zeit an Leistung verlieren. Wasserschäden entstehen häufig durch Unachtsamkeit im Alltag.</p>

<p>Zum Glück können diese Schäden in der Regel schnell behoben werden. Mit professionellen Ersatzteilen und erfahrenen Technikern wird Ihr Smartphone wieder wie neu. <em>Wichtig ist, Reparaturen nicht hinauszuzögern</em>, da sich kleine Probleme oft verschlimmern.</p>
',
            'slug'          => 'haeufige-smartphone-probleme-und-loesungen',
            'published'     => true,
            'published_at'  => now(),
            'user_id'       => 2,
            'category_id'   => 1,
            'view_count'    => 2,
            'comment_count' => 1,
            'wish_count'    => 2,
            'languages'     => [
                'en',
            ],
            'seo_options'   => [
                'title'       => 'Häufige Smartphone-Probleme und ihre Lösungen',
                'description' => 'Erfahren Sie, welche Handyprobleme am häufigsten auftreten und wie sie schnell behoben werden können.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'path'          => public_path('assets/images/blog/01.jpg'),
            'tags'          => [
                'mobile', 'tablet', 'iPhone', 'iPad', 'Android',
            ],
        ],
        [
            'title'         => 'Warum eine Handyreparatur besser ist als ein Neukauf',
            'description'   => 'Entdecken Sie die Vorteile einer Reparatur gegenüber dem Kauf eines neuen Smartphones.',
            'body'          => '
<p>Viele Nutzer stehen vor der Frage: <strong>Reparatur oder Neukauf?</strong> Oft lohnt es sich, das Smartphone reparieren zu lassen. Zum einen sparen Sie bares Geld, da Reparaturen meist deutlich günstiger sind als ein neues Gerät. Zum anderen leisten Sie einen Beitrag zum <em>Umweltschutz</em>, indem Sie Elektroschrott vermeiden.</p>

<p>Eine Reparatur verlängert die Lebensdauer Ihres Geräts erheblich, besonders wenn Original- oder Premium-Ersatzteile verwendet werden. Zudem behalten Sie Ihre gespeicherten Daten und müssen sich nicht an ein neues System gewöhnen. Deshalb ist eine Reparatur häufig die nachhaltigere und wirtschaftlichere Wahl.</p>
',
            'slug'          => 'handyreparatur-besser-als-neukauf',
            'published'     => true,
            'published_at'  => now(),
            'user_id'       => 3,
            'category_id'   => 1,
            'view_count'    => 2,
            'comment_count' => 1,
            'wish_count'    => 2,
            'languages'     => [
                'en',
            ],
            'seo_options'   => [
                'title'       => 'Warum eine Handyreparatur besser ist als ein Neukauf',
                'description' => 'Entdecken Sie die Vorteile einer Reparatur gegenüber dem Kauf eines neuen Smartphones.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'path'          => public_path('assets/images/blog/02.jpg'),
            'tags'          => [
                'iPad', 'Android',
            ],
        ],
        [
            'title'         => 'Tipps zur Pflege Ihres Smartphones für eine längere Lebensdauer',
            'description'   => 'Mit diesen einfachen Tipps bleibt Ihr Smartphone länger funktionsfähig und zuverlässig.',
            'body'          => '
<p>Ein Smartphone begleitet uns täglich – umso wichtiger ist es, es richtig zu pflegen. Verwenden Sie immer eine <strong>Schutzhülle</strong> und <strong>Panzerglas</strong>, um Displaybrüche zu vermeiden. Laden Sie den Akku nicht permanent bis 100 %, sondern zwischen 20 % und 80 %, um die Lebensdauer zu erhöhen.</p>

<p>Achten Sie darauf, Ihr Gerät nicht extremen Temperaturen auszusetzen, da Hitze und Kälte den Akku stark belasten können. Regelmäßige <em>Software-Updates</em> sorgen zudem für Sicherheit und bessere Leistung.</p>

<p>Mit diesen einfachen Maßnahmen sparen Sie nicht nur Reparaturkosten, sondern haben auch länger Freude an Ihrem Smartphone.</p>
',
            'slug'          => 'smartphone-pflege-tipps-laengere-lebensdauer',
            'published'     => true,
            'published_at'  => now(),
            'user_id'       => 3,
            'category_id'   => 1,
            'view_count'    => 2,
            'comment_count' => 1,
            'wish_count'    => 2,
            'languages'     => [
                'en',
            ],
            'seo_options'   => [
                'title'       => 'Tipps zur Pflege Ihres Smartphones für eine längere Lebensdauer',
                'description' => 'Mit diesen einfachen Tipps bleibt Ihr Smartphone länger funktionsfähig und zuverlässig.',
                'canonical'   => null,
                'old_url'     => null,
                'redirect_to' => null,
                'robots_meta' => SeoRobotsMetaEnum::NOINDEX_FOLLOW,
            ],
            'path'          => public_path('assets/images/blog/03.jpg'),
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
                'en',
            ],
            'path'        => public_path('images/test/categories/laravel-cat.png'),
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
                'en',
            ],
            'path'        => public_path('images/test/categories/laravel-cat.png'),
        ],
    ],
];
