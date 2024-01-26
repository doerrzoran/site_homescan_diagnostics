# Create a new Symfony project named "backend"
symfony new --webapp backend

# Configure the database in the .env file
# Replace username, password, host, port, and app with your actual database credentials
DATABASE_URL=mysql://username:password@host:port/app?serverVersion=10.11.2-MariaDB&charset=utf8mb4

# Create the database
symfony console doctrine:database:create

# Generate a new entity
symfony console make:entity

# Create a new migration based on changes in the entity
symfony console make:migration

# Apply the generated migration to the database
symfony console make:migration:migrate

# Generate a new controller
symfony console make:controller

# Install NelmioCorsBundle
composer require nelmio/cors-bundle

# Configure NelmioCorsBundle in .\config\packages\nelmio_cors.yaml

# Replace '^/controller' with your actual path
paths:
    '^/controller':
        origin_regex: true
        allow_origin: ['*']
        allow_headers: ['Content-Type', 'Authorization']
        allow_methods: ['GET', 'POST']
        max_age: 3600


# Start the Symfony development server
symfony server:start


# Create a new React project using Vite
npm create vite@latest frontend

# Change to the frontend directory
cd frontend

# Install a specific version of Vite (replace with your desired version)
npm install vite@4.4.0

# Start the development server for the React app
npm run dev
