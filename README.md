# ContractManager

A web application for managing contracts built with PHP, MySQL, and Tailwind CSS.

## Development Setup

This project is configured to work with GitHub Codespaces for easy development.

### Getting Started with Codespaces

1. Click the "Code" button and select "Create codespace on main"
2. Wait for the Codespace to build (this includes PHP 8.2, MySQL 8.0, and Node.js)
3. The MySQL database `contractmanager` will be created automatically
4. Start the PHP development server:
   ```bash
   php -S 0.0.0.0:8000 -t public
   ```

### Local Development

If you prefer to develop locally, you'll need:
- PHP 8.2 or higher
- MySQL 8.0 or higher
- Node.js (for Tailwind CSS)
- Composer (for PHP dependencies)

### Database Configuration

- **Host**: localhost
- **Port**: 3306
- **Database**: contractmanager
- **Username**: root
- **Password**: root

### Tailwind CSS Setup

Install Tailwind CSS and build your styles:

```bash
npm install -D tailwindcss
npx tailwindcss init
npx tailwindcss -i ./src/input.css -o ./public/css/output.css --watch
```

## Project Structure

```
ContractManager/
├── .devcontainer/
│   └── devcontainer.json
├── .vscode/
│   └── settings.json
├── public/
│   ├── index.php
│   └── css/
├── src/
│   └── input.css
├── config/
│   └── database.php
└── README.md
```

## License

MIT
