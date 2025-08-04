AI Blog Generator
This Laravel app uses the OpenAI API to generate blog posts based on a user-provided title and selected tone. It was built for the CS 85 Module 12 assignment at Santa Monica College.

Features
Form to enter a blog title

Dropdown to select tone (professional, casual, humorous, inspirational)

AI-generated blog post displayed in the same view

Laravel service layer used to handle API logic

Tailwind CSS for styling

Setup Instructions
Requirements
PHP 8.2+

Composer

Laravel 12+

OpenAI API key

Installation (Windows)
Clone the repo:

bash
git clone https://github.com/Baptiste-Williams/blog-ai-generator.git
cd blog-ai-generator
Install dependencies:

bash
composer install
Copy .env.example to .env and add your OpenAI key:

OPENAI_API_KEY=your_openai_key_here
OPENAI_API_URL=https://api.openai.com/v1
OPENAI_MODEL=gpt-3.5-turbo
Generate app key:

bash
php artisan key:generate
Serve the app:

bash
php artisan serve
Visit http://localhost:8000/ai-form

How to Get an OpenAI API Key
Go to platform.openai.com

Sign in and navigate to the API Keys section

Create a new key and paste it into your .env file

Reflection
How did the AI output change when you modified the tone or role in your prompt? Changing the tone made a noticeable difference.

 Professional tone was more formal and structured, while humorous tone used playful language. It showed how prompt engineering can shape the voice of the output.

What would you improve about the API integration for a production app? 

I would add better error logging, a retry mechanism, and maybe caching for repeated prompts. I’d also sanitize input more strictly.


What’s one thing you learned about Laravel that you hadn’t used before?

 I learned how to use a service layer to separate API logic from the controller. It made the code cleaner and easier to maintain.