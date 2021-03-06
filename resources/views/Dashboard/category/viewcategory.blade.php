@extends('Dashboard/layouts/dashboarlayout')
@section('title')category/all @stop
@section('contents')
<h2>all cateroy is listed here/ &nbsp; &nbsp; &nbsp; <a href="{{  url('category/create')  }}">add  new Category</a></h2>
<hr>
@if(Session::has('success'))
<div class="alert alert-success ">
  <h4>{{ Session::get('success') }}</h4>
</div>
@endif
@if(count($categorylist) > 0)
<table class="table table-hover table-bordered">
	<thead>
		<th>s.n</th>
		<th>category_name</th>
		<th>category_description</th>
		<th>created_at</th>
		<th>update_at</th>
		<th>action</th>
	</thead>
	<tbody>
		<?php   $i=1; ?>
		@foreach($categorylist as $category)
		<tr>
			<td> {{ $i++}}</td>
			<td> {{  $category->category_name  }} </td>
			<td> {{  $category->catgory_description}} </td>
			<td> {{  $category->created_at}} </td>
			<td> {{  $category->updated_at }} </td>
			<td width="220">
				<a href="category/{{$category->id }}/edit"><button type="button" class="btn btn-primary">edit</button></a>
				<a style="display:inline-block;">
					<form  method="post" action="category/{{ $category->id }}">
						{!! csrf_field()!!}
						{!! method_field('delete')!!}
						<input type="submit" value="delete" class="btn btn-danger delete">
					</form>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<h3> currently there is no item in category list</h3>
@endif

<script>

	 $(document).ready(function ()
	 {  
	   $('.delete').on('click', function(e) 
	   {
	 	$confirmation=confirm("Are you sure to delete");
	 	if($confirmation)
	 	{ return true; }
	 	else { e.preventDefault(); return false; }
	      e.preventDefault();
	    });
     });
</script>
{!! $categorylist->render() !!}
@stop
