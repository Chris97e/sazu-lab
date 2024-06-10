<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Texto</th>
            <th>URL</th>
            <th>Estado</th>
            <th>ubicacion</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datos as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->titulo}}</td>
              <td>{{$item->descripcion}}</td>
              <td>{{$item->texto_sobrepuesto}}</td>
              <td>{{$item->url_img}}</td>
              <td>
                @if ($item->estado == 1)
                  Habilitado
                @elseif($item->estado == 0)
                  Inhabilitado
                @endif
              </td>
              <td>{{$item->ubicacion}}</td>
              <td>
                <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                    class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('cms/slider/' . $item->id . '/edit') }}"><i
                      class="bx bx-edit-alt me-1"></i> Editar</a>
                  <form action="{{ route('cms.slider.destroy', ['slider' => $item->id]) }}" method="POST"
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
