@extends('layout.master_layout')
@section('content')
<div class="container mt-5" id="app">
    <div class="row d-flex justify-content-center">
        <form class="col-sm-6" enctype="multipart/form-data" @submit.prevent="save">
            <div class="form-group">
                <label for="example1">Username</label>
                <input v-model="username" type="text" class="form-control" id="example1"  placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="example3">Name</label>
                <input v-model="name" type="text" class="form-control" id="example3"  placeholder="name">
            </div>
            <div class="form-group">
                <label for="example2">Password</label>
                <input v-model="password" type="password" class="form-control" id="example2" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Age</label>
                <select v-model="age"  class="form-control" id="exampleFormControlSelect2">
                    <option value=""></option>
                    <?php $ages = range(10,85); ?>
                    @foreach($ages  as $age )
                    <option value="{{$age}}">{{$age}}</option>
                      @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="textarea">Biography</label>
                <textarea v-model="bio" name="" id=""  rows="6" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="file" @change="uploadImage" name="image" id="file">
            </div>

            <button type="submit"  class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-sm-6">

            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">username</th>
                    <th> Image</th>
                    <th scope="col">Edite</th>

                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <th scope="row" v-text="user.username"></th>
                    <th><img :src="/images/+user.image" alt=""> </th>
                    <td><button @click="setnew(user.id)" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"> <li class="fa fa-pen"></li> </button> </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edite username</h4>
                </div>
                <div class="row ml-4 mb-3">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="example1">Username</label>
                            <input v-model="new_user" type="text" class="form-control" id="example1"  placeholder="Username">
                        </div>

                        <button class="btn btn-info" @click="update_username">Update</button>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>
@endsection

@section('js')
    <script src="{{asset('assets/js/index.js')}}"></script>
@endsection
