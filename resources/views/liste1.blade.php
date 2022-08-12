<div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">numero</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tuteurs as $tuteur)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$tuteurs->nom}}</td>
            <td>{{$tuteurs->prenom}}</td>
            <td>{{$tuteurs->email}}</td>
            <td>{{$tuteurs->numero}}</td>
            <td>{{$tuteurs->created_at}}</td>
            <td>
                <a href="" class="btn btn-info">Editer</a>
                <a href="" class="btn btn-danger" onclick="">Suprimer</a>

                <form id="" action="" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>




        
       
    @endsection