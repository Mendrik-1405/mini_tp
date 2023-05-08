@extends('master')

@section('description')
<?php echo$art[0]['resum'] ;?>
@endsection

@section('keywords')
<?php echo$art[0]['titre'] ;?>
@endsection

@section('title')
<?php echo$art[0]['titre'] ;?>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="data:image/png;base64,<?php echo $art[0]['image'] ;?>" class="img-fluid" alt="<?php echo$art[0]['titre'] ;?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($art[0]['titre']);?></h5>
                                <?php echo ($art[0]['contenu']);?>
                            </div>
                        </div>
                    </div>
        </div>
</div>
@endsection