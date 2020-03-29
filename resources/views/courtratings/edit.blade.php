@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Courtrating
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($courtrating, ['route' => ['courtratings.update', $courtrating->id], 'method' => 'patch']) !!}

                        @include('courtratings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection