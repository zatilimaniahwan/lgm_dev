@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Selenggara Pekebun
@endsection

@section('contentheader_title')
	Selenggara Pekebun
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
        <li><a href="#"><i class="fa fa-users"></i> @yield('contentheader_title', '')</a></li> 
      
      
    </ol>
  </section>
			<br><br>
      <div class="col col-md-8 well">
        <table class="table xtable">
            <tbody><tr>
                <td>Nama Pekebun</td>
                <td><input type="text" name="com_name" class="form-control" value=""></td>
                <td>No Kad Pengenalan</td>
                <td><input type="text" name="ref_no" class="form-control" value=""></td>
            </tr>
            <tr>
                <td>No Kad Pat G</td>
                <td><input type="text" name="app_name" class="form-control" value=""></td>
               <!-- <td>Jenis Permohonan</td>
                <td>
                    <select class="form-control" name="appli_type">
                    <option value="0" selected="">--Sila Pilih--</option>
                    <option value="L1">Lesen Baru</option>
                    <option value="L2">Pembaharuan Lesen</option>
                    <option value="L4">Salinan Penduaan Lesen</option>
                    <option value="L5">Perubahan Maklumat Lesen</option>
                    </select>                
                    </td>-->
            </tr>
            <tr>

                <td><input type="submit" value="Cari" class="btn btn-primary"></td>
            </tr>
        </tbody></table>
    </div>
			 <table class="table table-bordered">
       		 <thead>
        		<th width="5%">Bil</th>
        		<th>Nama</th>
       			 <th>No Kad</th>
       			<th>Kad Pengenalan</th>
       			  <th width="5%">Pautan</th>
        		</thead>
 		@foreach ($cards as $card)
        <tr>
            <td >{{$card->cardId}}</td>
            <td>{{$card->member['memberName']}}</td>
            <td>{{$card->cardNo}}</td>
           <td>{{$card->member['memberIC']}}</td>
            <td  ><a href="{{ url('member/'.$card->memberId )}}" class="btn bg-maroon"  data-toggle="tooltip" title="Papar Maklumat Pekebun"><i class="fa fa-search"></i></a></td>
        </tr>
    @endforeach
    </table>
			
		</div>
	</div>
	<?php echo $cards->render(); ?>
@endsection
