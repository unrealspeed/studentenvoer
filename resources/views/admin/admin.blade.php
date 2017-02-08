@extends('layouts.app')

@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recepten toevoegen</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('recnaam') ? ' has-error' : '' }}">
                            <label for="recnaam" class="col-md-4 control-label">Recept naam</label>

                            <div class="col-md-6">
                                <input id="recnaam" type="text" class="form-control" name="recnaam" value="{{ old('recnaam') }}" required autofocus>

                                @if ($errors->has('recnaam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('recnaam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('recsoort') ? ' has-error' : '' }}">
                            <label for="recsoort" class="col-md-4 control-label">Ontbijt/Lunch/Diner</label>

                            <div class="col-md-6">
                                <input id="recsoort" type="text" class="form-control" name="recsoort" value="{{ old('recsoort') }}" required autofocus>

                                @if ($errors->has('recsoort'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('recsoort') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ingredienten') ? ' has-error' : '' }}">
                            <label for="ingredienten" class="col-md-4 control-label">Ingredienten</label>

                            <div class="col-md-6">
                                <input id="ingredienten" type="text" class="form-control" name="ingredienten" value="{{ old('ingredienten') }}" required autofocus>

                                @if ($errors->has('ingredienten'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ingredienten') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kcal') ? ' has-error' : '' }}">
                            <label for="kcal" class="col-md-4 control-label">Kcal</label>

                            <div class="col-md-6">
                                <input id="kcal" type="text" class="form-control" name="kcal" value="{{ old('kcal') }}" required autofocus>

                                @if ($errors->has('kcal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kcal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('stappen') ? ' has-error' : '' }}">
                            <label for="stappen" class="col-md-4 control-label">Stappen</label>

                            <div class="col-md-6">
                                <input id="stappen" type="text" class="form-control" name="stappen" value="{{ old('stappen') }}" required autofocus>

                                @if ($errors->has('stappen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stappen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </head>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Opslaan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
