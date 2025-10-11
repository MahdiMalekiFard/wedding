<?php

namespace App\View\Composers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Slider;
use App\Models\Team;
use App\Models\User;
use App\Services\Permissions\PermissionsService;
use Illuminate\View\View;

class NavbarComposer
{
    public function compose(View $view): void
    {
        $user = auth()->user();

        $userMgmt = [
            'icon'     => 's-users',
            'title'    => trans('_menu.user_management'),
            'access'   => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(User::class, 'Store', 'Index')),
            'sub_menu' => [
                [
                    'icon'       => 's-list-bullet',
                    'route_name' => 'admin.user.index',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.user.all'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(User::class, 'Index')),
                ],
                [
                    'icon'       => 's-user-plus',
                    'route_name' => 'admin.user.create',
                    'params'     => [],
                    'title'      => trans('_menu.user.create'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(User::class, 'Store')),
                ],
            ],
        ];

        $categoryMgmt = [
            'icon'     => 's-squares-2x2',
            'title'    => trans('_menu.category_management'),
            'access'   => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Category::class, 'Store', 'Index')),
            'sub_menu' => [
                [
                    'icon'       => 's-list-bullet',
                    'route_name' => 'admin.category.index',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.category.all'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Category::class, 'Index')),
                ],
                [
                    'icon'       => 's-plus-circle',
                    'route_name' => 'admin.category.create',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.category.create'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Category::class, 'Store')),
                ],
            ],
        ];

        $blogMgmt = [
            'icon'     => 's-book-open',
            'title'    => trans('_menu.blog_management'),
            'access'   => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Blog::class, 'Store', 'Index')),
            'sub_menu' => [
                [
                    'icon'       => 's-list-bullet',
                    'route_name' => 'admin.blog.index',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.blog.all'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Blog::class, 'Index')),
                ],
                [
                    'icon'       => 's-plus-circle',
                    'route_name' => 'admin.blog.create',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.blog.create'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Blog::class, 'Store')),
                ],
            ],
        ];

        $portfolioMgmt = [
            'icon'     => 's-briefcase',
            'title'    => trans('_menu.portfolio_management'),
            'access'   => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Portfolio::class, 'Store', 'Index')),
            'sub_menu' => [
                [
                    'icon'       => 's-list-bullet',
                    'route_name' => 'admin.portfolio.index',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.portfolio.all'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Portfolio::class, 'Index')),
                ],
                [
                    'icon'       => 's-plus-circle',
                    'route_name' => 'admin.portfolio.create',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.portfolio.create'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Portfolio::class, 'Store')),
                ],
            ],
        ];

        $pageMgmt = [
            'icon'     => 'lucide.layers',
            'title'    => trans('_menu.page_management'),
            'access'   => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Page::class, 'Store', 'Index')),
            'sub_menu' => [
                [
                    'icon'       => 's-list-bullet',
                    'route_name' => 'admin.page.index',
                    'exact'      => true,
                    'params'     => [],
                    'title'      => trans('_menu.page.all'),
                    'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Page::class, 'Index')),
                ],
                [
                    'icon'           => 's-plus-circle',
                    'route_name'     => 'admin.page.create',
                    'noWireNavigate' => true,
                    'exact'          => true,
                    'params'         => [],
                    'title'          => trans('_menu.page.create'),
                    'access'         => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Page::class, 'Store')),
                ],
            ],
        ];

        $menus = [
            [
                'icon'       => 's-home',
                'params'     => [],
                'exact'      => true,
                'title'      => trans('_menu.dashboard', locale: app()->getFallbackLocale()),
                'route_name' => 'admin.dashboard',
            ],

            // Folder: People
            [
                'icon'     => 's-folder',
                'title'    => 'People',
                'sub_menu' => [
                    $userMgmt,
                    [
                        'icon'       => 's-user-group',
                        'title'      => trans('_menu.teams'),
                        'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Team::class, 'Store', 'Index')),
                        'route_name' => 'admin.team.index',
                    ],
                ],
            ],

            // Folder: Content
            [
                'icon'     => 's-folder',
                'title'    => 'Content',
                'sub_menu' => [
                    $categoryMgmt,
                    $blogMgmt,
                    $portfolioMgmt,
                    $pageMgmt,
                    [
                        'icon'       => 's-banknotes',
                        'title'      => trans('_menu.sliders'),
                        'access'     => $user->hasAnyPermission(PermissionsService::generatePermissionsByModel(Slider::class, 'Store', 'Index')),
                        'route_name' => 'admin.slider.index',
                    ],
                ],
            ],
        ];

        $view->with('navbarMenu', $menus);
    }

    private function hasAccessGroup(User $user, array $array): bool
    {
        $result = [];
        foreach ($array as $model => $permissions) {
            $result[] = $user->hasAnyPermission(PermissionsService::generatePermissionsByModel($model, $permissions));
        }

        return in_array(true, $result, true);
    }
}
