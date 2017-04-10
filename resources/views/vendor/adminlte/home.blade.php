@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Laman Utama
@endsection

@section('contentheader_title')
	Laman Utama
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
				<section class="content-header">
  	  <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
   	 </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-desktop"></i> @yield('contentheader_title', '')</a></li> 
      
      
    </ol>
	</section>

	<br>
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Selamat Datang</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
					
				        @if ($alert = Session::get('alert-success'))
				  <div class="alert alert-success" id="alert">
				      {{ $alert }}
				  </div>
				@endif
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

		
		</div>
	</div>
@endsection
