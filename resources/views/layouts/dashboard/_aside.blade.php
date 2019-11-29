<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            
			<li><a href="{{route('dashboard.welcome')}}"><i class="fa fa-th"><span>@lang('site.dashboard')</span></i>
				</a>
			</li>
		@if(auth()->user()->hasPermission('read_users'))	
			<li><a href="{{route('dashboard.users.index')}}"><i class="fa fa-th"><span>@lang('site.users')</span></i>
				</a>
			</li>
			@endif
			
@if(auth()->user()->hasPermission('read_categories'))	
			<li><a href="{{route('dashboard.categories.index')}}"><i class="fa fa-th"><span>@lang('site.categories')</span></i>
				</a>
			</li>
			@endif
		
		@if(auth()->user()->hasPermission('read_products'))	
			<li><a href="{{route('dashboard.products.index')}}"><i class="fa fa-th"><span>@lang('site.products')</span></i>
				</a>
			</li>
			@endif
			
			@if(auth()->user()->hasPermission('read_clients'))	
			<li><a href="{{route('dashboard.clients.index')}}"><i class="fa fa-th"><span>@lang('site.clients')</span></i>
				</a>
			</li>
			@endif
		</ul>
    </section>

</aside>

