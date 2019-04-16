@extends('admin-layout')

@section('title', '| Add Art Type')

@section('content')

<div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Types of Art Work</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                    <tr>
                                        <td class="cart_product_img">
                                            <h5>{{ $type->id }}</h5>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>{{ $type->name }}</h5>
                                        </td>
                                        <td class="price">
                                            <a href="{{route('type.edit', $type->id)}}" class="fa fa-edit"></a>
                                        </td>
                                        <td class="qty">
                                            {!!Form::open(['route' => ['type.destroy', $type->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
                                            !!}

        {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => '',])!!} 
                                    
            {!!Form::close()!!}
                                        </td>

                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Add Art Type</h5>
                            <div class="clearbottom"></div>

                            {!! Form::open(['route' => 'type.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Type of Art'])}}
                                </div>
                            </div> 

                            <div class="col-md-12 mb-3">
                                {{Form::submit('Add Art Type', ['class'=>'class="btn amado-btn w-100'])}}
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