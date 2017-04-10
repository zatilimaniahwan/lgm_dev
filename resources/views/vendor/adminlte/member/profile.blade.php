@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Profil Pekebun
@endsection

@section('contentheader_title')
	Profil Pekebun  
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
        <li><a href="#"><i class="fa fa-users"></i> Selenggara Pekebun</a></li> 
             <li><a href="#"><i class="fa fa-users"></i> @yield('contentheader_title', '')</a></li> 
      
      
    </ol>
  </section>
			<br><br>
    <div class="col-md-10">
	 <a href="{{url('member')}}" class="btn bg-navy"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
    <br><br>
     <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#asas" data-toggle="tab" aria-expanded="true">Maklumat Asas</a></li>
              <li class=""><a href="#kebun" data-toggle="tab" aria-expanded="false">Maklumat Kebun</a></li>
              <li class=""><a href="#kad" data-toggle="tab" aria-expanded="false">Maklumat Kad</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="asas">
                 
      <legend>Maklumat Asas</legend>
        <table class="table">
            <tbody>

                <tr><td>  <img class="profile-user-img img-responsive img-circle" src="{{ Gravatar::get($user->email) }}" alt="User profile picture"></td></tr>
            <tr>
            
                <td>Nama Penuh</td>
                <td>{{$card->member['memberName']}}</td>
                <td>No Kad Pengenalan</td>
                <td> {{$card->member['memberIC']}}</td>
            </tr>
            <tr>
            
                <td>Alamat</td>
                <td>{{$card->member['memberAddr1']}}, {{$card->member['memberAddr2']}},{{$card->member['memberAddr3']}},{{$card->member['memberZipCode']}} {{$card->member['memberCity']}}</t</td>
                <td>Bandar</td>
                <td>{{$card->member['sex']}}</td>
            </tr>
             <tr>
            
                <td>Alamat</td>
                <td>{{$card->member['memberAddr1']}}, {{$card->member['memberAddr2']}},{{$card->member['memberAddr3']}},{{$card->member['memberZipCode']}} {{$card->member['memberCity']}}</t</td>
                <td>Jantina</td>
                <td>{{$card->member['sex']}}</td>
            </tr>
          
        </tbody></table>
   
           
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="kebun">
                <!-- The timeline -->
               
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
              
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
             
             
             

         
     
			</div>
		</div>
	</div>

@endsection
