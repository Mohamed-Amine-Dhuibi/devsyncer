<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSyncer - Find Projects, Learn, and Grow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-indigo-600">DevSyncer</div>
            <div class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-indigo-600">Home</a>
                <a href="{{url('/projects')}}" class="text-gray-600 hover:text-indigo-600">Projects</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">About</a>
                @if (Route::has('login'))
                    @auth
                    <a href="{{url('/dashboard')}}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Dashboard</a>
                    @else
                        <a href="{{url('/register')}}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Sign Up</a>

                        <span class="text-gray-600 hover:text-indigo-600">|</span>
                        @if (Route::has('register'))
                        <a href="{{url('/login')}}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Sign in</a>

                        @endif
                    @endauth
            @endif

            </div>
        </nav>
    </header>

    <main>
        <section class="bg-indigo-700 text-white py-20">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Find Projects. Learn. Grow.</h1>
                <p class="text-xl mb-8">Join DevSyncer to discover exciting projects, contribute, and enhance your skills in real-world scenarios.</p>
                <a href="#" class="bg-white text-indigo-700 px-6 py-3 rounded-md font-semibold hover:bg-gray-100">Get Started</a>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Why Choose DevSyncer?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Discover Projects</h3>
                        <p class="text-gray-600">Browse through a wide range of projects across various technologies and domains.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Skill-based Matching</h3>
                        <p class="text-gray-600">Find projects that align with your skills or the technologies you want to learn.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Learn by Doing</h3>
                        <p class="text-gray-600">Gain hands-on experience by contributing to real projects and collaborating with others.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">How It Works</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                        <h3 class="font-semibold mb-2">Create Profile</h3>
                        <p class="text-gray-600">Sign up and showcase your skills and interests.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                        <h3 class="font-semibold mb-2">Explore Projects</h3>
                        <p class="text-gray-600">Browse through available projects or post your own.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                        <h3 class="font-semibold mb-2">Apply or Match</h3>
                        <p class="text-gray-600">Apply to projects or get matched based on your profile.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                        <h3 class="font-semibold mb-2">Contribute & Learn</h3>
                        <p class="text-gray-600">Work on projects, gain experience, and grow your skills.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-8">Ready to Start Your Journey?</h2>
                <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-indigo-700">Join DevSyncer Today</a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">DevSyncer</h3>
                    <p class="text-gray-400">Connecting developers with exciting projects to learn and grow together.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Projects</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400">
                <p>&copy; 2023 DevSyncer. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
