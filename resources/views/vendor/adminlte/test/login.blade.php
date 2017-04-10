@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Pat</b>G</a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> Sila masukkan Email dan Kata Laluan </p>
        <form action="{{ url('/signin') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <!-- <login-input-field
                    name="{{ config('auth.providers.users.field','name') }}"
                    domain="{{ config('auth.defaults.domain','') }}"
                    ></login-input-field>-->
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
               <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
           <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="userpwd"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
             <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Passcode" name="passcode"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input style="display:none;" type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Log Masuk</button>
                </div><!-- /.col -->
            </div>
        </form>

        @if ($alert = Session::get('alert-danger'))
  <div class="alert alert-danger" id="alert">
      {{ $alert }}
  </div>
@endif

        <!--<a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
        <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>-->

    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
 
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });

         $(document).ready(function(){
        setTimeout(function() {
          $('#alert').fadeOut('slow');
        }, 900); // <-- time in milliseconds
    });
    </script>
</body>

@endsection
