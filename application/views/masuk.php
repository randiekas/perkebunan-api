<!-- Dark mode not enabled -->
<!DOCTYPE html>
<html>
<head>
    <title>Masuk</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- <div class="fb-login-button" >Login with Facebook</div> -->
    <div class="min-h-screen flex items-center justify-center bg-blue-100 py-12 px-4 sm:px-6 lg:px-8">
        <img class="object-cover" src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1327&q=80" style="border:20px;margin:50px;float:left;width:500px;height: 500px;">
        <hr>
        <div class="max-w-md w-full space-y-8">
            <div>
                
                <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">Sign in to your account</h2>
                
            </div>
            <form action="<?=base_url("index.php/aplikasi/masuk")?>" class="mt-8 space-y-6" method="post">
                
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label class="sr-only" for="email-address">Username</label> 
                        <input autocomplete="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" id="email-address" name="username" placeholder="Username" required="" type="text">
                    </div>
                    <div>
                        <label class="sr-only" for="password">Password</label> 
                        <input autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" id="password" name="password" placeholder="Password" required="" type="password">
                    </div>
                </div>
                
                <div>
                    <button aria-required="true" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" id="signin" type="submit"><span class="absolute left-0 inset-y-0 flex items-center pl-3 text-white"><!-- Heroicon name: lock-closed -->
                     <svg aria-hidden="true" class="h-5 w-5 text-blue-50 group-hover:text-blue-400 text-white" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" fill-rule="evenodd"></path></svg></span> Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"><img class="w-10 h-10 text-white p-2 bg-white-500 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png"> <span class="ml-3 text-xl">Aplikasi</span></a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 randiekas@gmail.com — </p>
            
        </div>
    </footer>
</body>
</html>