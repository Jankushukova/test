@extends('layouts.admin')
@section('content')
@include('admin.brand.insert')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

        <div class="row justify-content-end">
            <div class="col-1">
                <button class="btn btn-info rounded-circle"  data-toggle="modal" data-target="#brandInsertModal">+</button>
            </div>
        </div>
        <h2>Brands</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Create Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                @foreach($brands as $brand)
                <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->brand}}</td>
                    <td>{{$brand->created_at}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('admin.updateBrand',['id'=>$brand->id])}}"> Update</a>
                        <form action="{{route('admin.brand', ['id'=>$brand->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit"> Delete</button>

                        </form>


                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection

