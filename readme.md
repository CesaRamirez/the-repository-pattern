# The Repository Pattern

The repository pattern introduces a repository interface, which defines how the application and the data sources should communicate.

## Installation

### Step 1

> To run this project, you must have PHP 7 installed as a prerequisite.

Begin by cloning this repository to your machine, and installing all Composer & NPM dependencies.

```bash
git clone git@github.com:cesaramirez/the-repository-pattern.git
```
```bash
cd the-repository-pattern && composer install && yarn
```
```bash
cp .env.example .env 
```
```bash
php artisan key:generate
```
```bash
php artisan migrate --seed
```
```bash
npm run dev
```