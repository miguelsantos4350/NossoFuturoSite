@extends('distribution.layout')

@section('content')


    <div class="container">
        <div class="row">

                <div class="wrap">

                <h1>Upload de Imagens</h1><br>
                <p class="text-big">Aqui poderá carregar imagens para a galeria, ou para o seu artigo ou quiz. </p><br><br>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if(is_countable($images) && count($images) > 0)
                        <div class="row">
                            <div class="col-md-8">
                                <strong>Imagem Original:</strong>
                            </div>
                            <div class="col-md-4">
                                <strong>Pré-visualização:</strong>
                            </div>
                            @foreach($images as $img)
                                <div class="col-md-8">
                                    <img src="/images/{{$img->path}}" style="width:400px" />
                                </div>
                                <div class="col-md-4">
                                    <img src="/images/thumbs/{{$img->path}}"  />
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Tem alguns problemas com o seu ficheiro.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ URL::to('/images') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <input type="file" name="upload" required>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Upload</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
    </div>

@endsection