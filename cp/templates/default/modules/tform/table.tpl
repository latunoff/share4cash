/*<div class="st">
    <div class="st_h">
        {head{<div>{VALUE}</div>}head}
    </div>
    {body{<div class="st_b">
        {row{<div>{VALUE}</div>}row}
    </div>}body}
</div>*/
<table id="table" class="table table-bordered">
<thead>
    <tr>
        {head{<th>{VALUE}</th>}head}
    </tr>
</thead>
    {body{<tr>
        {row{<td>{VALUE}</td>}row}
    </tr>}body}
</table>

<script type="text/javascript">
  $('#table').dynatable();
</script>