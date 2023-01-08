<div class="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href=''>
                    {{-- {{ route('index') }} --}}
                    <div class="logo">
                        <h4><img src='{{ asset('img/logoHead.png') }}' style='height:72px;'>
                            
                        </h4>
                    </div>
                </a>
            </div>
            <div class="col-md-5">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping"><i class="far fa-search"></i></span>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="user">
                    <div>
                        @auth
                        <button class="mybtn shopping-num"><a href=""><i class="fas fa-shopping-cart"></i></a><span>3</span></button> 
                        @endauth
                        <button class="mybtn"><a href="#"><i class="fas fa-user"></i></a></button>
                    </div>
                    <div class='a'>
                        <p>Welcome!</p>
                        @guest
                        <a href=''>Sign in</a> |
                        <a href=''> Register</a>
                        @else 
                        <a href=''> LogOut</a>
                        @endguest
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   