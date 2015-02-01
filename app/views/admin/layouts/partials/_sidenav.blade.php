<div id="sidebar" class="sidebar responsive">

	<ul class="nav nav-list">

		@if ($currentRoute == 'admin/dogs') <li class="active"> @else <li> @endif

			{{ link_to_route('admin.dogs.index', 'Dogs', null) }}

			<b class="arrow"></b>
		</li>

		@if ($currentRoute == 'admin/puppies') <li class="active"> @else <li> @endif

			{{ link_to_route('admin.puppies.index', 'Puppies', null) }}

			<b class="arrow"></b>
		</li>

		@if ($currentRoute == 'admin/blogposts') <li class="active"> @else <li> @endif

			{{ link_to_route('admin.blogposts.index', 'Blog Posts', null) }}

			<b class="arrow"></b>
		</li>

		@if ($currentRoute == 'admin/account') <li class="active"> @else <li> @endif

			<a href="/admin/account">Account Settings</a>

			<b class="arrow"></b>
		</li>
		
	</ul>

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>