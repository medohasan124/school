@include('admin.layout.header') 
@include('admin.layout.slider') 


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('head')
    <div class="content-header">
      	<div class="container-fluid">
			@yield('content')
		</div>
	</div>
</div>

@include('admin.layout.footer') 