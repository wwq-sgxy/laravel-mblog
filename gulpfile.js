const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir 资产管理器
 |--------------------------------------------------------------------------
 |
 | Elixir 提供干净、流畅的 API，用于为你的 Laravel 应用程序定义
 | 基本的 Gulp 任务。默认时，将编译应用程序的 Sass 文件和厂商资源
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');
});
