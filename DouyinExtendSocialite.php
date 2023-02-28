<?php

namespace SocialiteProviders\Douyin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DouyinExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('douyin', Provider::class);
    }
}
