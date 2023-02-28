# TikTok

```bash
composer require jhchan314/douyin
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'douyin' => [
  'client_id' => env('DOUYIN_CLIENT_ID'),
  'client_secret' => env('DOUYIN_CLIENT_SECRET'),
  'redirect' => env('DOUYIN_REDIRECT_URI')
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        \Jhchan314\Douyin\DouyinExtendSocialite::class.'@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('douyin')->redirect();
```

# Returned User Fields

- id
- union_id
- name
- avatar

# Reference

- [TikTok Login Kit](https://developers.tiktok.com/doc/login-kit-web)
