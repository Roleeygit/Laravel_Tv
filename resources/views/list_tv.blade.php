<a href="/new-tv"><button>Új</button></a>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Meret</th>
        <th>Tipus</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $tvs as $tv )
         <tr>
           <td>{{ $tv->id }}</td>
           <td>{{ $tv->name }}</td>
           <td>{{ $tv->size }}</td>
           <td>{{ $tv->type->type }}</td>
         </tr>
      @endforeach
    </tbody>
  </table>