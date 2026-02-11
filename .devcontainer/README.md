# PHP Development Container

This devcontainer configuration provides a complete PHP development environment with MySQL database support and phpMyAdmin.

## What's Included

### PHP & Tools
- **PHP 8.3** (latest stable)
- **Composer** (dependency management)
- **PHPUnit** (testing framework)
- **PHP_CodeSniffer** (code style checker)
- **PHP-CS-Fixer** (code formatter)
- **Xdebug** (debugging support)

### PHP Extensions
- php-cli
- php-pdo
- php-mysql (pdo_mysql & mysqli)

### Database
- **MySQL 8.0** (separate container)
- **phpMyAdmin** (web-based database management)
- Persistent volume for data
- Pre-configured database: `devdb`

### Frontend & Development
- **Node.js & npm**
- **Tailwind CSS**
- **Live Server**

### VS Code Extensions
- **Intelephense** (PHP language server)
- **Better Comments**
- **GitHub Copilot**
- **Tailwind CSS IntelliSense**
- **PHP Debug** (Xdebug integration)

### Other Tools
- Git
- MySQL Client
- Docker support

## Port Forwarding

- **8000**: PHP Built-in Server
- **8080**: Live Server
- **8081**: phpMyAdmin (auto-opens in browser)
- **3306**: MySQL Database
- **9003**: Xdebug

## phpMyAdmin Access

Once your Codespace starts, phpMyAdmin will be available at port **8081** and should automatically open in your browser.

**Login Credentials:**
- **Username**: `devuser` (or `root` for root access)
- **Password**: `devpassword` (or `rootpassword` for root)

You can also access it manually by clicking on the "Ports" tab in VS Code and opening port 8081.

## Database Connection

```php
$host = getenv('DB_HOST') ?: '127.0.0.1';
$db   = getenv('DB_DATABASE') ?: 'devdb';
$user = getenv('DB_USERNAME') ?: 'devuser';
$pass = getenv('DB_PASSWORD') ?: 'devpassword';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $pass);
```

### Credentials
- **Root Password**: `rootpassword`
- **Database**: `devdb`
- **User**: `devuser`
- **Password**: `devpassword`

## Usage

### Start PHP Built-in Server
```bash
php -S 0.0.0.0:8000
```

### Run PHPUnit Tests
```bash
phpunit
```

### Start Live Server
```bash
live-server --port=8080 --host=0.0.0.0
```

### Check Code Style
```bash
phpcs --standard=PSR12 src/
```

### Fix Code Style
```bash
php-cs-fixer fix src/
```

### Connect to MySQL via CLI
```bash
mysql -h 127.0.0.1 -u devuser -pdevpassword devdb
```

### Access phpMyAdmin
Open port 8081 in your browser or click the notification when the Codespace starts.

## Architecture

This setup uses **3 separate containers**:
1. **app**: PHP development environment with all tools
2. **db**: MySQL 8.0 server with persistent storage
3. **phpmyadmin**: Web-based database management interface

All containers share the same network stack for seamless connectivity.

## Notes

- The workspace is mounted at `/workspaces`
- MySQL data persists in a Docker volume named `mysql-data`
- All containers share the same network stack for optimal connectivity
- Composer dependencies are installed automatically after container creation
- phpMyAdmin automatically opens when the Codespace is ready
