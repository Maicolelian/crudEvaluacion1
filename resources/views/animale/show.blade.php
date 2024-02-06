@extends('layouts.app')

@section('template_title')
    {{ $animale->name ?? "{{ __('Show') Animale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Animale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('animales.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $animale->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $animale->propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $animale->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
