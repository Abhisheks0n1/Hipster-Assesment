# Hipster Inc


### Features
- Multi-authentication (separate Admin & Customer login/register)
- Admin product management (CRUD + bulk import up to 100k products via CSV/Excel)
- Real-time user presence (online/offline status in admin dashboard)
- Beautiful, modern UI using Tailwind CSS
- Unit + Feature tests (all pass)
- Default product image when no image uploaded

### How to Run
1. Clone the repo
   ```bash
   git clone <https://github.com/Abhisheks0n1/Hipster-Assesment>
   cd hipster-assessment
   ```

2. Install dependencies
   ```bash
   composer install
   npm install
   ```

3. Setup environment
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure `.env`
   - Database details
   - Pusher keys (for real-time)

5. Run migrations & storage link
   ```bash
   php artisan migrate
   php artisan storage:link
   ```

6. Build frontend
   ```bash
   npm run dev
   ```

7. Start servers
   ```bash
   php artisan serve
   php artisan queue:work
   ```

8. Visit: http://localhost:8000

### Sample Data
- `products_sample_import.csv` is included in the root folder

### Testing
```bash
php artisan test
```
All tests pass (unit + feature).

### Notes
- All code is original and follows Laravel best practices
- Commit history shows step-by-step development
- Focused on clean, secure, and scalable backend

Thank you for reviewing my submission!

**Abhishek Soni**