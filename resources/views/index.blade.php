@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="card card-tasks">
            <div class="card-header ">
                <h3 class="title d-inline">Notícias</h3>
                <div class="card-btt-register  d-inline ">
                    <a href="{{url('noticias/create')}}">
                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-simple-add"></i>
                            <p class="text-right d-inline">Novo</p>
                        </button>
                    </a>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                        <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#pablo">Action</a>
                        <a class="dropdown-item" href="#pablo">Another action</a>
                        <a class="dropdown-item" href="#pablo">Something else</a>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-full-width table-responsive">
                    @csrf
                    <table class="table">
                        <tbody>
                            @Foreach($news as $news)
                                @php
                                $user=$news->find($news->id)->relUsers;
                                @endphp
                                <tr>
                                    <td>
                                        <a href="{{url("noticias/$news->id")}}">
                                            <p class="title">{{$news->theme}}</p>
                                        </a>
                                        <!--<p class="text-muted">@php echo $news->text @endphp</p>-->
                                        <p class="text-muted">{{$user->name}}</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{url("noticias/$news->id/edit")}}">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="{{url("noticias/$news->id")}}" class="js-del">
                                             <i class="tim-icons icon-trash-simple"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>  
                    </table>
                </div>
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
