## Fortify Documentation

### Install fortify

```markdown
composer require laravel/fortify
```

### Vendor Publish  : Fortify Service Provider
`Laravel\Fortify\FortifyServiceProvider`

```markdown
php artisan vendor:publish
```

### Migrate
```markdown
php artisan migrate
```

### Added Service Provider in `config/app.php`
```markdown
App\Providers\FortifyServiceProvider::class 
```

### Enable Features in `config\fortify.php`

### Enable Renders in here:
` App\Providers\FortifyServiceProvider.php `

```markdown

Fortify::loginView(function () {
        return view('auth.login');
    });
```











#### Tricks
### Compact Route List
```markdown
php artisan route:list -c
```

### Load Specific Route List 
```markdown
php artisan route:list --name=register
```

