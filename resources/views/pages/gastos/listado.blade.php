@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Filtros</h3>
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Nº Piso</label>
                                    <select class="form-control" id="exampleSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Tipo</label>
                                    <select class="form-control" id="exampleSelect1">
                                        <option>Comida</option>
                                        <option>IT</option>
                                        <option>Servicios</option>
                                        <option>Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title"></h3>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Piso</th>
                                <th>Responsable</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Telefonos</td>
                                <td>Compra de telefonos</td>
                                <td>4</td>
                                <td>Juan Belga</td>
                                <td>$356,250</td>
                                <td>2018/05/20</td>
                            </tr>
                            <tr>
                                <td>Comida</td>
                                <td>Comida reunion</td>
                                <td>2</td>
                                <td>Ricado Saenz</td>
                                <td>$5000</td>
                                <td>2018/04/20</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('javascript')
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
    @endsection
@endsection
