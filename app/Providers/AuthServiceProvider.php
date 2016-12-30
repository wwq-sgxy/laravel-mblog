<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * 应用程序的策略映射
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        User::class  => UserPolicy::class
    ];

    /**
     * 注册任意认证 / 授权服务
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
