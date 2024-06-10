<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            {{-- <th>Id Cards</th> --}}
            <th>Titulo</th>
            {{-- <th>Descripcion</th> --}}
            <th>Imagen</th>
            {{-- <th>Created At</th>
                <th>Updated At</th> --}}
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $item)
            <tr>
              <td>{{ $item->id }}</td>
              {{-- <td>{{ $item->id_cards }}</td> --}}
              <td>{{ $item->titulo }}</td>
              {{-- <td>{{ $item->descripcion }}</td> --}}
              <td><img src="{{ asset($item->imagen) }}" style="max-width: 200px" /></td> {{-- <td>{{ $item->imagen }}</td> --}}
              {{-- <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td> --}}
              <td>
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>

                <div class="dropdown-menu">

                  <a class="dropdown-item"
                    href="{{ url('cms/contenidos/' . $id_cards . '/' . $item->id . '/edit') }}"><i
                      class="bx bx-edit-alt me-1"></i> Editar</a>

                  <form
                    action="{{ route('cms.contenidos.destroy', ['cards' => $id_cards, 'contenidos' => $item->id]) }}"
                    method="POST" onsubmit="return check_confirm();">
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
<!--/ Bordered Table -->

<hr class="my-5">
