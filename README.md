# Laravel Job Hiring Page

 my first hands one expirence with the laravel framework 
A simple and professional job hiring platform built with **Laravel**, 
allowing companies to post jobs and candidates to apply seamlessly.

---

## Table of Contents

- [About](#about)  
- [Features](#features)  
- [Installation](#installation)  
- [Usage](#usage)  
- [Contributing](#contributing)  
- [License](#license)  

---

## About

This project is a **job hiring web application** developed using Laravel.  
It enables:

- Companies to post job openings.  
- Job seekers to browse and apply for jobs.  
- Admins to manage listings and applications.  

It's designed for simplicity, scalability, and ease of use.

---

## Features

- Create, edit, and delete job postings.  
- Browse and search available jobs.  
- Apply for jobs with resume submission.  
- Admin panel to manage jobs and applications.  
- User authentication and role-based access (Admin, Company, Candidate).  

---

## Installation

Follow these steps to set up the project locally:

```bash
# Clone the repository
git clone https://github.com/CAjmnz/laravel-job-hiring-page-of-.git

# Navigate to the project folder
cd laravel-job-hiring-page-of-

# Install PHP dependencies
composer install

# Install Node.js dependencies (for frontend assets)
npm install
npm run dev

# Copy the environment file and generate app key
cp .env.example .env
php artisan key:generate

# Set up your database credentials in .env file

# Run migrations and seeders
php artisan migrate --seed

# Start the development server
php artisan serve
