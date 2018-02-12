<head>
    <link rel="stylesheet" type="text/css" href="/public/assets/css/default.css">
</head>
<tbody>
  <div>
      <table id="items_table">
        <tr class="item_header">
          <th></th>
          <th><p>Name<p></th>
          <th><p>Damage</p></th>
          <th><p>Protection</p></th>
          <th><p>Weight</p></th>
        </tr>
    {accessories}
        <tr class="item_row" >
          <td><img class="draggable drag-drop " src="{imagepath}" width="100dp"/></td>
          <td><h4>{name}</h4></td>
          <td><p>{damage}</p></td>
          <td><p>{protection}</p></td>
          <td><p>{weight}</p></td>
        </tr>
      </div>
    {/accessories}
    </table>
  </div>
</tbody>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>