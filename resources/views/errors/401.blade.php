@extends('admin.template.main')
@section('title')
Access denied
@endsection
@section('content')
<div class="section blue-grey darken-3">
    <div class="section">
        <div class="section blue-grey darken-3">
            <div class="section">
                <div class="section blue-grey darken-3">
                    <div class="section">
                        <div class="section blue-grey darken-3">
                            <div class="section">
                                <div class="section blue-grey darken-3">
                                    <div class="row">
                                        <div class="col s12 m8 l8 offset-l2 offset-m2">
                                            <div class="card blue-grey darken-1">
                                                <div class="card-content white-text">
                                                    <span class="card-title"><h1 class="center white-text"><i class="material-icons large red-text">lock_outline</i><br> Acceso Denegado</h1></span>
                                                    <p class="center">Acceso denegado para este usuario</p>
                                                </div>
                                                <div class="card-action">
                                                    <a href="{{url('/admin/home') }}" class="center btn red">Volver al inicio</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection