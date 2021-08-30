@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        @csrf
        <div class="card">
            <div class="card-header ">
                <h2 class="title d-inline">@if(isset($news))Editar @else Cadastrar @endif</h2>  
            </div>
            <div class="card-body">
                @if(isset($news))
                    <form name="formEdit" id="formEdit" method="post" action="{{url("noticias/$news->id")}}">
                    @method('PUT')
                @else
                    <form name="formCard" id="formCard" method="post" action="{{url('noticias')}}">
                @endif
                @csrf
                    <div class="formImp col-md-10">
                        <div class="col">
                            <input type="text" class="form-control" name="theme" id="theme" placeholder="theme"  value="{{$news->theme ?? ''}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputSelect"></label>
                            <select class="form-control" name="user_id" id="user_id" required>
                                <option selected value="{{$news->relUsers->id ?? ''}}">{{$news->relUsers->name ?? 'Autor(a)'}}</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="formImp col-md-20">
                        <div class="col">
                        <textarea class="form-control" type="text" id="text" name="text" placeholder="Texto" value="{{$news->text ?? ''}}" required>{{$news->text ?? ''}}</textarea>
                        </div>
                            <!-- Include the ckeditor -->
                            <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace( 'text' );
                                var objEditor = CKEDITOR.instances["text"];
                                alert(objEditor1.getData());
                            </script>
                        </div>
                        <br/>
                        <div class="col text-center">
                            <input class="btn btn-primary" type="submit" value="@if(isset($news)) Editar @else Cadastrar @endif">
                        </div>
                    </div>
                </form>
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
