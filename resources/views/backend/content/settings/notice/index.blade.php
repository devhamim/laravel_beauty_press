@extends('backend.layouts.app')

@section('title', 'Mixed Settings')

@php
$required = html()
    ->span('*')
    ->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>

.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
@php
$multis=DB::table('notices')->where('is_active',1)->orwhere('is_active',0)->get();
@endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
              
                </div>
                <div class="card-body">
                   <form class="form-horizontal" action="{{ route('admin.setting.notice.store') }}" enctype="multipart/form-data" method="POST">  
                   @csrf
                   <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="multiimage[]" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title[]"  class="form-control">
                   
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="default" class="form-control" col="10" row="3" name="description[]"></textarea>

                  
                </div>

            <div class="table-responsive">  
                <!-- <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="file" name="multiimage[]" placeholder="multiimage" class="form-control name_list" /></td>  
                        <td><input type="text" name="title[]" placeholder="title" class="form-control name_list" /></td>
                        <td><textarea  class="form-control" col="10" row="3" name="description[]"></textarea></td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>   -->
                <button  type="submit"  class="btn btn-info">Submit</button>
                <!--<input value="Submit" />  -->
            </div>


         </form>  
                   
                </div>
            </div>
        </div>
        


 
      
    </div>
    
    <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
           <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Active/Deactive</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($multis as $multi)
            <tr>
            <td><img src="{{ asset('/setting/banner/'.$multi->image) }}" style="height: 100px"></td>
                <td>{{$multi->title}}</td>
              
                <td>@if($multi->is_active == 1)
                     <button class="btn btn-sm btn-primary">Active</button>
                    @elseif($multi->is_active == 0)
                    <button class="btn btn-sm btn-danger">Deactive</button>
                    @endif
                </td>
               
               
                <td>
                    <a href="/admin/setting/notice/edit/{{$multi->id}}" class="btn btn-primary btn-sm editProduct">Edit</a>
                  
                </td>
            </tr>
       @endforeach
      
        </tbody>
  
    </table>
    </div>
    </div>
        </div>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="multiimage[]" placeholder="multiimage" class="form-control name_list" /></td><td><input type="text" name="title[]" placeholder="Title" class="form-control name_list" /></td><td><textarea class="form-control" col="10" row="3" name="description[]"></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


    }); 
    
    tinymce.init({
  selector: 'textarea#default'
});
</script>



@endsection




@push('after-scripts')
  {{ script('assets/js/jscolor.js') }}


@endpush
