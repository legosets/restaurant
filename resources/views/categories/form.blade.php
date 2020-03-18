@extends("legocms::admin.layouts.form")

@section('form__content')

@formField('text', [
    'name' => 'author',
    'label' => 'Author'
])

@formField('textarea', [
    'name' => 'description',
    'label' => 'Description'
])
    
@endsection