<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Nombre</label>
    <div class="col-md-9">
            <input type="numeric" class="form-control" placeholder="Ingresa tu nombre" id="cliente" name="cliente" required required pattern="[a-zA-Z ]{3,240}" title="Letras. Tamaño máximo: 240" >
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Departamento</label>
    <div class="col-md-9">
        <select class="form-control" name="id_departamento" id="id_departamento" required>								
            <option value="" selected>Seleccione</option>
                @foreach($departamentos as $d)
                    <option value="{{$d->id}}">{{$d->nombre}}</option>    
                @endforeach 
        </select>
    </div>
</div>



<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Municipio</label>
    <div class="col-md-9">
        <select class="form-control dynamic" id="id_municipio" name="id_municipio" required>
            <option value="0" disabled="true" selected="true">Municipios</option>
        </select>        
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Dirección</label>
    <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Dirección" id="direccion" name="direccion" required  pattern="[A-Za-z0-9 -,]{5,240}"
            title="Letras y números. Tamaño máximo: 240">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Correo Electrónico</label>
    <div class="col-md-9">
            <input type="email" class="form-control" placeholder="Ingresa tu correo" id="correo" name="correo" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Teléfono</label>
    <div class="col-md-9">
            <input type="tel" class="form-control" placeholder="Ingresa tu número de telefono" id="telefono" name="telefono" required pattern="[0-9]{8,8}"
            title="Solo números. Tamaño máximo: 8">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="des">Método de pago</label>
    <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Método de pago" value="Contraentrega" disabled readonly>
    </div>
</div>




<div class="modal-footer">
    <input  type="submit" name="submit" value="Confirmar pedido" class="btn btn-secondary" style="font-size: 11px;
    letter-spacing: 1px;text-transform: uppercase;color: #fff;border: none;padding: 10px 17px;background: #000;" id="btsubmit" />									
    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="    font-size: 11px;
    letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:red ;">Cancelar</button>

    
</div>
