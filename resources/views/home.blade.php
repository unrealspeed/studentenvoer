@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
              @include('search',['url'=>'home','link'=>'home'])
                <div class="panel-heading" align="right"><h3>{{ $rec->total() }} recepten gevonden</div>
                <div class="panel-body">
                    <ul class="list-group">
                      @foreach ($rec as $recs)
                        <li class="list-group-item" style="margin-top:20px">
                          <span style="margin-left:10px">
                            <b>Recept: </b>{{ $recs->recnaam }}
                          </span><br>
                          <span style="margin-left:10px">
                            <b>Soort: </b>{{ $recs->recsoort }}
                          </span>
                          <span style="margin-left:10px"><br>
                              <b>Ingredienten: </b>{{ substr("$recs->ingredienten",0,30) }}... <a href="{{ url('recepten/'.$recs->id) }}">(lees meer)</a>
                              <a href="{{ url('recepten/'.$recs->id) }}">
                              <button class="btn btn-xs btn-primary" style="float: right">
                                Bekijk recept
                              </button>
                              </a>
                          </span>
                        </li>
                      @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
