# Run Project

Sur vscode avec WSL2+docker et remote containers
ouvrir project dans container

```bash
composer install
yarn 
cp .env.example .env
php artisan key:generate
php artisan migrate

# dev APP_ENV=local
yarn dev
php artisan serve

# prod APP_ENV=production
yarn build
php artisan serve

```
