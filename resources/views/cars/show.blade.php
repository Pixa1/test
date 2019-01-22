<tbody>
  <tr>
    <td>{{$car->marka}}</th>
    <td>{{$car->model}}</td>
    <td>{{$car->color}}</td>
    <td>{{$car->reg}}</td>
    <td>
      <a href="{!! action('CarsController@edit',$car->id) !!}" class="btn btn-info btn-sm btn-">Edit</a>
    </td> 
  </tr>
</tbody>