@extends('admin-layout')

@section('title', '| Edit Art Work in Gallery')

@section('stylesheets')
{!! Html::style('css/select2.min.css') !!}
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}
<script>
  tinymce.init({
      selector: 'textarea', // change this value according to your HTML
      plugins: [
      'advlist autolink lists link image charmap preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code',
      'insertdatetime media nonbreaking table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
      ],
      toolbar: 'codesample | bold italic sizeselect fontselect fontsizeselect | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | insertfile undo redo | forecolor backcolor emoticons | code',
      fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

  });
</script>
@endsection

@section('content')

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Edit Art Work Details</h2>
                    </div>

                    {!!Form::model($products, ['route'=>['product.update', $products->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            {{Form::text('sku', null, ['readonly', 'class' => 'form-control', 'placeholder'=>'Product ID'])}}
                        </div>

                        <div class="col-md-12 mb-3">
                            {{Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Art Title'])}}
                        </div>

                        <div class="col-md-12 mb-3">
                            {{Form::text('artist', null, ['class' => 'form-control', 'placeholder'=>'Name of the Artist'])}}
                        </div>

                               
                                <div class="col-md-12 mb-3">
                                    {{Form::text('brief_description', null, ['class' => 'form-control', 'placeholder'=>'Brief Description e.g. (Painting, Oil on Wood Panel; Photograph, Archival Ink Jet)'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::text('price', null, ['class' => 'form-control', 'placeholder'=>'Price'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::text('year_created', null, ['class' => 'form-control', 'placeholder'=>'Year Created e.g. 2017 '])}}
                                </div>

                                
                                <div class="col-md-6 mb-3">
                                    {{Form::select('framed', $_frames, null, ['placeholder'=>'Is Art work Framed?'])}}
                                </div>    

                                <div class="col-md-6 mb-3">
                                    {{Form::select('hangable', $_hangs, null, ['placeholder'=>'Ready to Hang'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::select('signed', $_signs, null, ['placeholder'=>'Is Art work Signed?'])}}
                                </div>    

                                <div class="col-md-6 mb-3">
                                    {{Form::select('signature_location', $_sign_locations, null, ['placeholder'=>'Select Signature Location'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::select('support_type', $_supports, null, ['placeholder'=>'Art Work Support Type'])}}
                                </div> 

                                <div class="col-md-6 mb-3">
                                    {{Form::select('type', $_types, null, ['placeholder'=>'Art Type'])}}
                                </div>


                                <div class="col-md-6 mb-3">
                                    {{Form::text('height', null, ['class' => 'form-control', 'placeholder'=>'Height e.g. 9.8 inch (25.0 cm)'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::text('width', null, ['class' => 'form-control', 'placeholder'=>'Width e.g. 9.8 inch (25.0 cm)'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::text('depth', null, ['class' => 'form-control', 'placeholder'=>'Depth e.g. 0.2 inch (0.5 cm)'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::text('weight', null, ['class' => 'form-control', 'placeholder'=>'Weight 0.3 kg (0.7 lbs)'])}}
                                </div>

                                 <div class="col-md-6 mb-3">
                                    {{ Form::label('tags', 'Tags:') }}
                        
                                    {{ Form::select('tags[]', $tags2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}                    
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{ Form::label('styles', 'Styles:') }}
                                    {{ Form::select('styles[]', $styles2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }} 
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{ Form::label('subjects', 'Subjects:') }}
                                    {{ Form::select('subjects[]', $subjects2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }} 
                                </div>

                           

                                <div class="col-md-6 mb-3">
                                    {{ Form::label('mediums', 'Mediums:') }}
                                    {{ Form::select('mediums[]', $mediums2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }} 
                                </div>
 
                                <div class="col-md-6 mb-3">
                                    {{Form::text('city', null, ['class' => 'form-control', 'placeholder'=>'City e.g. Abuja'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::select('country', $_countries, null, ['placeholder'=>'Select Country'])}}
                                </div>

                                <div class="col-md-12 mb-3">
                                    {{ Form::label('full_description', 'Full Description:') }}
                                    {{Form::textarea('full_description', null, ['class' => 'form-control', 'placeholder'=>'Full Description'])}}
                                </div>

                                   {{--   <div class="col-md-6 mb-3">
                                    {{ Form::label('types', 'Types:') }}
                                    {{ Form::select('types[]', $types2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }} 
                                </div> --}}

                            </div>

                        </div>
                        <div class="clearbottom"></div>
                        <h2>Add Art Work Images</h2>
                        <div class="cart-summary2">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_front', '1. Full Front View')}}
                                    {{Form::file('image_front', ['class'=>'form-control'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_back', '2. Full Back View')}}
                                    {{Form::file('image_back', ['class'=>'form-control'])}}
                                </div>


                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_leftside', '3. Left Side View')}}
                                    {{Form::file('image_leftside', ['class'=>'form-control'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_rightside', '4. Right Side View')}}
                                    {{Form::file('image_rightside', ['class'=>'form-control'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_hanged', 'Image Hanged')}}
                                    {{Form::file('image_hanged', ['class'=>'form-control'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_gallery', 'Image in Gallery')}}
                                    {{Form::file('image_gallery', ['class'=>'form-control'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_1', 'Optional Image 1')}}
                                    {{Form::file('image_1', ['class'=>'form-control'])}}
                                </div>

                                <div class="col-md-6 mb-3">
                                    {{Form::label('image_2', 'Optional Image 2')}}
                                    {{Form::file('image_2', ['class'=>'form-control'])}}
                                </div>
                            </div>
                        </div>

                        <div class="clearbottom"></div>
                        <h2>Add Art Work Video</h2>
                        <div class="cart-summary2">

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{Form::label('video', 'Promo Video')}}
                                {{Form::text('video', null, ['class' => 'form-control', 'placeholder'=>'Add Promo Video Youtube Link'])}}
                                </div>
                            </div>
                        </div>        

                        <div class="clearbottom"></div>
                                <div class="col-md-12 mb-3">
                                    {{Form::submit('Update Art Work Details', ['class'=>'btn amado-btn mb-15'])}}
                                </div>

                                {!! Form::close() !!}
                    </div>
                    
                </div>
            </div>
        </div>


        @endsection

        @section('scripts')

        {!! Html::script('js/select2.min.js') !!}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> --}}

        <script type="text/javascript">
            $('.select2-multi').select2();
        </script>

        @endsection