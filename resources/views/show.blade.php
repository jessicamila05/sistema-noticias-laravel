@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        @csrf
        <div class="card ">
            @php
                $user=$news->find($news->id)->relUsers;
            @endphp
            <div class="card-header ">
              <h4 class="card-title">{{$news->theme}}</h4> 
            </div> 
            <div class="card-body "> 
                <string>
                    @php 
                        echo $news->text
                    @endphp
                </string>
                {{$user->name}}</br>
                <br/><br/>
                <div class="col text-center">
                    <a href="{{url("noticias/$news->id/edit")}}">
                        <button type="button" class="btn btn-primary">
                            <i class="tim-icons icon-pencil"></i>
                            Editar
                        </button>
                    </a>
                    <a href="{{url("noticias/$news->id")}}" class="js-del">
                        <button type="button" class="btn btn-danger">
                            <i class="tim-icons icon-trash-simple"></i>
                            Deletar
                        </button>
                    </a>                   
                </div>
                <br/>
            </div>    
        </div>
    </div>
@endsection

@push('js')
   
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
