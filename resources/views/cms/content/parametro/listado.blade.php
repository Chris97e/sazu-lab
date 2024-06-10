<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Registros encontrados</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>#</th>
          <th>Llave publica</th>
          <th>Llave secreta</th>
          <th>Desde</th>
          <th>Hacia</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datos as $parametro)
          <tr>
            <td>{{ $parametro->id }}</td>
            <td>{{ $parametro->public_key }}</td>
            <td>{{ $parametro->secret_key }}</td>
            <td>{{ $parametro->from }}</td>
            <td>{{ $parametro->to }}</td>
            <td>
              <button type="button" class="btn btn-primary btn-icon" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('cms/parametro/' . $parametro->id . '/edit') }}"><i
                    class="bx bx-edit-alt me-1"></i> Editar</a>
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