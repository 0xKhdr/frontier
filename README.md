# Frontier

<p align="center">
  <strong>🚀 A Modular Laravel Starter Kit for Enterprise Applications</strong>
</p>

<p align="center">
  <a href="#installation">Installation</a> •
  <a href="#packages">Packages</a> •
  <a href="#quick-start">Quick Start</a> •
  <a href="#commands">Commands</a> •
  <a href="#development">Development</a>
</p>

---

**Frontier** is a Laravel meta-package that bootstraps your application with battle-tested architectural patterns through an interactive CLI installer.

## ✨ Key Features

| Feature | Description |
|---------|-------------|
| **Interactive Installer** | Beautiful CLI powered by Laravel Prompts |
| **Modular Design** | Install only what you need |
| **Repository Caching** | Built-in caching layer for repositories |
| **Module Support** | Works with internachi/modular |
| **Strict Types** | All packages use `declare(strict_types=1)` |
| **Pest Testing** | Modern testing framework included |

---

## 📦 Packages

| Package | Description | Key Features |
|---------|-------------|--------------|
| **frontier** | Meta-package installer | Interactive component selection |
| **frontier/action** | Action pattern | Single-purpose classes, Eloquent actions, module support |
| **frontier/repository** | Repository pattern | CRUD abstraction, **caching decorator**, interface generation |
| **frontier/modular** | Modular architecture | internachi/modular integration (Note: This package is a wrapper around [internachi/modular](https://github.com/InterNACHI/modular) with no extra features for now) |

---

## 🚀 Installation

### Full Installation

```bash
composer require frontier/frontier
php artisan frontier:install
```

### Individual Packages

```bash
composer require frontier/action
composer require frontier/repository
composer require frontier/modular
```

---

## 📚 Quick Start

### Action Pattern

```bash
php artisan frontier:action CreateUser
php artisan frontier:action CreateUser --module=user-management
```

```php
use Frontier\Actions\BaseAction;

class CreateUser extends BaseAction
{
    public function handle(array $data): User
    {
        return User::create($data);
    }
}

// Usage
$user = CreateUser::exec($data);
```

### Repository Pattern

```bash
php artisan frontier:repository UserRepositoryEloquent
php artisan frontier:repository-cache UserRepositoryCache
```

```php
use Frontier\Repositories\BaseRepository;

class UserRepositoryEloquent extends BaseRepository
{
}
```

```php
// Binding in ServiceProvider
$this->app->bind(UserRepository::class, function ($app) {
    return new UserRepositoryCache(
        new UserRepositoryEloquent(new User())
    );
});

// Usage
$users = $this->users->retrieve();           // Automatically cached
$users->refreshCache()->retrieve();          // Force refresh
```

### Module System

```bash
php artisan make:module user-management
php artisan make:model User --module=user-management
```

---

## 📝 Artisan Commands

### Frontier Core

```bash
php artisan frontier:install
```

### Action Package

```bash
php artisan frontier:action {name}
php artisan frontier:action {name} --module
php artisan frontier:action {name} --module=xyz
```

### Repository Package

```bash
php artisan frontier:repository {name}
php artisan frontier:cacheable-repository {name}
php artisan frontier:repository-interface {name}
php artisan frontier:repository-action {name}
```

### Module Package

```bash
php artisan make:module {name}
php artisan modules:list
php artisan modules:sync
php artisan make:* --module={name}
```

---

## 🏗️ Architecture

```
┌─────────────────────────────────────────────────────────────────────┐
│                         frontier/frontier                            │
│                     (Interactive Installer)                          │
└──────────────────────────────┬──────────────────────────────────────┘
                               │
         ┌─────────────────────┼─────────────────────┐
         ▼                     ▼                     ▼
┌─────────────────┐  ┌─────────────────┐  ┌─────────────────┐
│ frontier/action │  │frontier/repository│ │ frontier/modular │
│                 │  │                   │ │                 │
│ • BaseAction    │  │ • BaseRepository  │ │ • internachi/   │
│ • EloquentAction│  │ • BaseRepositoryCache│ │   modular       │
│ • Eloquent/*    │  │ • Repository      │ │   integration   │
│                 │  │   Contract        │ └─────────────────┘
└─────────────────┘  └─────────────────┘
```

---

## 🛠️ Development

All packages follow consistent development practices:

```bash
composer test          # Run tests (Pest)
composer lint          # Fix code style (Pint)
composer lint:test     # Check code style
composer rector        # Apply refactorings
composer rector:dry    # Preview refactorings
```

---

## 🔧 Requirements

- PHP >= 8.2
- Laravel 10.x, 11.x, or 12.x

---

## 🤝 Contributing

1. Follow PSR-12 coding standards
2. Use Laravel Pint for code styling
3. Write tests using Pest
4. Add strict types to all PHP files

---

## 📄 License

MIT License - see [LICENSE](LICENSE) for details.

---

## 👤 Author

**Mohamed Khedr** — [0xkhdr@gmail.com](mailto:0xkhdr@gmail.com)

---

<p align="center">
  Made with ❤️ for the Laravel community
</p>
