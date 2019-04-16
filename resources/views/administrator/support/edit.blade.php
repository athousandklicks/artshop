@extends('admin-layout')

@section('title', '| Edit Support Option')

@section('content')

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Edit Support Option</h2>
                </div>

                <div class="cart-table clearfix">
                            
                            {!!Form::model($supports, ['route'=>['support.update', $supports->id], 'method' => 'PUT', 'onsubmit' => 'return ConfirmSave()'])!!}

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Edit Support Option']) }}
                                </div>
                            </div> 

                            <div class="col-md-12 mb-3">
                                {{Form::submit('Save Change', ['class'=>'class="btn amado-btn w-100'])}}
                                </div>   
                        </div>
            </div>

        </div>
    </div>
</div>

@endsection
<script type="text/javascript">
    @include('admin-partials.confirm_delete')
</script>