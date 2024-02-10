<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="index.php" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="index.php" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
                    <a href="pricing.php" class="text-sm font-semibold leading-6 text-gray-900">Pricing</a>
                    <a href="quiz.php" class="text-sm font-semibold leading-6 text-gray-900">Quiz Template</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</header>

    <div class="container mx-auto py-8 ">
        <h1 class="text-3xl font-bold mb-4" style="text-align:center; margin-top:100px;">Laravel Quiz</h1>

        <div class="max-w-2xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="participate_name">
                <h3>Participate Name: Come From Backend</h3>
            </div>
            <div class="exam_title" style="position:absolute">
                <h3>Exam Title : Come from Backend</h3>
            </div>
            <div class="exam_time" style="text-align:right">
                <h3>Time: 30 Minutes</h3>
            </div>
            <hr>
            <br>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="quizTitle">
                        Please Writer here Quiz Title
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="quizTitle" type="text" placeholder="Enter quiz title">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        What is the command to create a new Laravel project?
                    </label>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="radio" name="question3" value="option1">
                        <label class="text-sm" for="question3">laravel new</label>
                    </div>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="radio" name="question3" value="option2">
                        <label class="text-sm" for="question3"> create-laravel</label>
                    </div>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="radio" name="question3" value="option3">
                        <label class="text-sm" for="question3">new-project</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Which database used in Laravel?
                    </label>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="checkbox" id="option1" value="option1">
                        <label class="text-sm" for="option1">MySQL</label>
                    </div>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="checkbox" id="option2" value="option2">
                        <label class="text-sm" for="option2">MongoDB</label>
                    </div>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="checkbox" id="option3" value="option3">
                        <label class="text-sm" for="option3">PostgreSQL</label>
                    </div>
                    <div class="flex items-center">
                        <input class="mr-2 leading-tight" type="checkbox" id="option3" value="option3">
                        <label class="text-sm" for="option4">SQLite</label>
                    </div>

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="question1">
                        Write command to generate a new middleware in Laravel?
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="question1" type="text" placeholder="Enter short text question">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="question2">
                        What is the name of the command that is used to generate a new model in Laravel? Please
                        Explain(Between 500 Words)
                    </label>
                    <textarea
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="question2" placeholder="Enter long text question"></textarea>
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-gray-800 py-4 text-center text-white">
      <p>&copy; 2024 Interactive care Platform. All rights reserved.</p>
    </footer>
</body>

</html>


