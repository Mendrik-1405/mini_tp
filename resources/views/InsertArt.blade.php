@extends('master')

@section('title', 'ajout d\'article')

@section('content')
<div class="container-fluid">
                    <div class="row">
                            <div class="col-md-9">
                                  <div class="card">

                                          <form class="form-horizontal" action="/insert" method="post" enctype="multipart/form-data">
                                          @csrf
                                                <div class="card-body">
                                                      <h4 class="card-title">Nouveau article</h4>
                                                <div class="form-group row">
                                                        @error('error')
                                                                {{$message}}
                                                        @enderror
                                                        <label for="fname" class="col-sm-2 text-end control-label col-form-label">Titre</label>
                                                        <div class="col-sm-9">
                                                                <input type="text" name="titre" class="form-control" id="fname" placeholder="Titre" required/>
                                                        </div>

                                                        <label for="fname2" class="col-sm-2 text-end control-label col-form-label">Résume</label>
                                                        <div class="col-sm-9">
                                                                <input type="text" name="resum" class="form-control" id="fname2" placeholder="Resume"required/>
                                                        </div>

                                                        <label for="fname2" class="col-sm-2 text-end control-label col-form-label">image</label>
                                                        <div class="col-sm-9">
                                                                <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                                            name="img" accept=".jpg,.jpeg,.png" required>
                                                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                                                            file...</label>
                                                                    </div>
                                                        </div>

                                                        <label for="contenu" class="col-sm-2 text-end control-label col-form-label">Contenu</label>
                                                        <div class="col-sm-9">
                                                                <textarea cols="80" class="ckeditor" id="contenu" name="contenu"></textarea>
                                                        </div>

                                                        <div class="col-sm-7">
                                                                <input class="btn btn-success float-end text-white" type="submit" value="inserer"/>
                                                        </div>
                                                </div>
                                          </form>

                                  </div>
                            </div>
                    </div>
            </div>
@endsection