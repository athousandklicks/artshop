@extends('admin-layout')

@section('title', '| Is Art Work Framed?')

@section('content')

<div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Is Art Work Framed?</h2>
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
                                    @foreach ($frames as $frame)
                                    <tr>
                                        <td class="cart_product_img">
                                            <h5>{{ $frame->id }}</h5>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>{{ $frame->name }}</h5>
                                        </td>
                                        <td class="price">
                                            <a href="{{route('frame.edit', $frame->id)}}" class="fa fa-edit"></a>
                                        </td>
                                        <td class="qty">
                                            {!!Form::open(['route' => ['frame.destroy', $frame->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
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
                            <h5>Add Art frame</h5>
                            <div class="clearbottom"></div>

                            {!! Form::open(['route' => 'frame.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter frame Option'])}}
                                </div>
                            </div> 

                            <div class="col-md-12 mb-3">
                                {{Form::submit('Add', ['class'=>'class="btn amado-btn w-100'])}}
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