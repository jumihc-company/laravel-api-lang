<?php
/**
 * User: YL
 * Date: 2020/07/01
 */

namespace Jmhc\ApiLang;

use Illuminate\Support\ServiceProvider;

class JmhcServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $apiTranslationsDir;

    public function boot()
    {
        $this->apiTranslationsDir = __DIR__ . '/../resources/lang';

        // 加载语言
        $this->loadTranslationsFrom($this->apiTranslationsDir, 'jmhc-api-lang');

        // 发布文件
        $this->publishFiles();
    }

    /**
     * 发布文件
     */
    protected function publishFiles()
    {
        // 发布语言文件
        $this->publishes([
            $this->apiTranslationsDir => resource_path('lang/vendor/jmhc-api-lang'),
        ], 'jmhc-api-lang');
    }
}
