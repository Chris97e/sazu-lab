<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>#</th>
          <th>Ubicacion</th>
          <th>Identificador</th>
          <th>Descripcion</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datos as $texto)
          <tr>
            <td>{{ $texto->id }}</td>
            <td>{{ $texto->ubicacion }}</td>
            <td>{{ $texto->identificador }}</td>
            <td>{{ substr(strip_tags($texto->descripcion), 0, 70) }} ...</td>
            <td>
              <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('cms/textos/' . $texto->id . '/edit') }}"><i
                    class="bx bx-edit-alt me-1"></i> Editar</a>
                <form action="{{ route('cms.textos.destroy', ['texto' =>  $texto->id ]) }}" method="POST"
                      onsubmit="return check_confirm();">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item btn-outline-danger"><i class="bx bx-trash me-1"></i>
                    Eliminar</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<hr class="my-5">