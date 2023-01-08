# ecommerce-laravel-9
### install breeze 
   - composer require laravel/breeze --dev
   - php artisan breeze:install
   - php artisan migrate
   - npm install
   - npm run dev

### Admin middleware
   - php artisan make:middleware Admin
   - inside the handle function :
         if(!Auth::user()->role == '1'){
            return redirect('/');
        }
        return $next($request); 
   - we declare this middleware in the kernel
   - in AuthenticatedSessionController => in store function we comment this line 
            (return redirect()->intended(RouteServiceProvider::HOME);)
         instead we write : 
         if(Auth::user()->role == '1'){
            return redirect('/dashboard')->with('status', 'welcome to Dashboard!');
         }else{
               return redirect('/')->with('status', 'Logged in successfuly!');
         }
   - put ur middleware in a specifique route in the web.php
   
