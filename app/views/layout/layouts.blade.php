<!DOCTYPE html>
<html>

@include('layout.head')


<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">

		@include('layout.header')

		@include('layout.sidebarLeft')

		@include('layout.content')

		@include('layout.footer')

		<div class="control-sidebar-bg"></div>
	</div>
</body>

@include('layout.scripts')


</html>
