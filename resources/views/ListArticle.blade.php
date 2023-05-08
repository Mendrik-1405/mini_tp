@extends('master')

@section('description','listes IA')

@section('keywords','IA')


@section('title', 'listes des intelligences artificielles')

@section('content')
<div class="container-fluid">
    <div class="row el-element-overlay">
        <?php foreach ($art as $row){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="data:image/png;base64,<?php echo $row['image'] ;?>"
                                alt="<?php echo $row['titre'] ;?>" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline el-link"
                                            href="/Article/description-<?php echo $row['slug'] ;?>-<?php echo $row['id'] ;?>"><i class="mdi mdi-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="mb-0"><?php echo $row['titre'] ;?></h4> <span class="text-muted"><?php echo $row['resum'] ;?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
@endsection
