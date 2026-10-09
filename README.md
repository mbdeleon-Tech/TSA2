# TSA2 Tasks for Today Management System

TSA2 extends the TSA1 CodeIgniter application with validated task CRUD, soft deletion, and login protection for management actions.

## Demo login

- Username: `marco.deleon`
- Password: `Northstar123!`

Public pages are `/`, `/tasks`, `/profile`, and `/about`. Authenticated management pages are `/tasks/new` and `/tasks/edit/{id}`; deletion archives a task instead of removing it.

This CodeIgniter 4 application is the IT0049 Technical Summative Assessment 1. It demonstrates a database-backed task dashboard with four distinct pages: a date-filtered Welcome page, a complete Task List, a single-user Profile page, and a static About page.

## Pages

- `/` queries only tasks whose `task_date` equals the current date.
- `/tasks` queries every task and orders the results by date.
- `/profile` displays the one demo user record.
- `/about` identifies the developer and explains the MVC flow.

## Database

The required schema and sample data are available in `database/tsa1_tasks.sql`. The project also includes `CreateTsa1Tables` and `Tsa1Seeder` for migration and seeding workflows.

The seed data contains eight tasks across four dates, including three tasks for 2026-10-09, and exactly one demo user.

## Local setup

1. Run `composer install`.
2. Create a MySQL database and configure `.env`.
3. Import `database/tsa1_tasks.sql`, or run `php spark migrate` followed by `php spark db:seed Tsa1Seeder`.
4. Run `php spark serve` and open `http://localhost:8080`.

## Student

- Marco Arsenio B. De Leon
- Section TC33
- Professor: Mr. Von Erick Magbitang
