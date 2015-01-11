@section('navigation')
  <li>{{ link_to_route('accueil', 'Accueil', null, ($actif == 0)? array('class' => 'actif'): null) }}</li>
@stop