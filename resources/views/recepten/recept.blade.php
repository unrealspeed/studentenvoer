@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row">
                  <div class="panel panel-default">
                  <div class="panel-heading" align="center"><h3>Recept: {{ $rec->recnaam }}</div>
                  <div class="panel-body">
                    <div class="panel-heading">
                          <span>
                            <h4><b>INFORMATIE</b></h4>
                            <span class="pullright clearfix"><b>Recept naam:</b> {{ $rec->recnaam }}</span>
                            <span class="pullright clearfix"><b>Soort:</b> {{ $rec->recsoort }}</span>
                            <span class="pullright clearfix"><b>Ingredienten:</b> {{ $rec->ingredienten }}</span>
                            <span class="pullright clearfix"><b>Kcal:</b> {{ $rec->kcal }}</span>
                          </span>
                          <h4><b>STAPPEN PLAN</b></h4>
                          <span>
                            {{ $rec->stappen }}
                          </span>
                    </div>
                  </div>
                </div>
                <div>
                  <center>
                  <input type="button" class="btn btn-xs btn-primary" style="font-size: 16px" value="Terug" onclick="history.back(-1)" />
                  @if (Auth::user())
                  <a href="{{URL::to('/delete/'.$rec->id) }}"><input type="button" class="btn btn-xs btn-primary" style="font-size: 16px" value="Verwijder"></a>
                  @endif
                  </center>
                </div>
              </div>
            </div>
@endsection
