@extends('layouts.home')

@section('content')
        <!-- jQuery Library -->
<script type="text/javascript" src="{{asset("materialize/js/jquery-1.11.2.min.js")}}"></script>
<script type="text/javascript" src="{{asset("materialize/js/scripts.js")}}"></script>
<!-- START CONTENT -->
<section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Dashboard</h5>
                    <a class="modal-trigger waves-effect waves-light btn right" href="{{url('alert')}}">Alert All Region</a>
                    <!-- Modal Alert -->
                    <div id="modal3" class="modal">
                        <div class="modal-content">
                            <p>Are you sure to alert all region?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
                            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->


    <!--card widgets start-->
    <div id="card-widgets">
        <div class="row">
            <div class="col s12 m6 l5">
                <ul id="task-card" class="collection with-header">
                    <li class="collection-header cyan">
                        <h4 class="task-card-title">34 Kantor PROVINSI</h4>
                        <p class="task-card-date">NO GROUPING APPLIED</p>
                    </li>
                    <li class="collection-item dismissable">
                        <div class="treeview">
                            <ul class="tree hoverable">
                                @foreach ($provinsi as $list)
                                    <li><img src="materialize/images/<?php
                                        if($list->status == 1) echo "Small-Down.gif";
                                        else echo "Small-up-unknown-noblink.gif";
                                        ?>" alt="materialize logo"><span class="folder">
                                            <a href="{{url("history/".$list->id)}}"> {{$list->id}} {{$list->name}}</a>
                                            <a <?php if($list->status==1) {?> href="{{url('alert/'.$list->id)}} <?php }?>"><span
                                             <?php if($list->status==0) {?> class="btn btn-small waves-effect waves-light green new badge green"> confirmed
                                             <?php }else {?> class="btn btn-small waves-effect waves-light red new badge red"> alert <?php }?>
                                    </span></a></span></li>
                                    @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col s12 m6 l6">
                <ul id="task-card" class="collection with-header">
                    <li class="collection-header cyan">
                        <h4 class="task-card-title">508 Kantor DUKCAPIL</h4>
                        <p class="task-card-date">GROUPED BY PROVINSI</p>
                    </li>
                    <li class="collection-item">
                        <div class="listControl">
                            <a class="expandList">Expand All</a>
                            <a class="collapseList">Collapse All</a>
                        </div>
                        <ul class="expList">
                            @foreach($provinsi as $list)

                                <li> <span class="folder" style="white-space: nowrap;"><img src="<?php
                                        if($kabstat[$list->id] == 1) echo asset('materialize/images/Small-Up.gif');
                                        else if ($kabstat[$list->id] == 2) echo asset('materialize/images/Small-Down.gif');
                                        else echo asset('materialize/images/Small-Warning.gif');
                                        ?>" alt="materialize logo">{{$list->name}}</span>
                                    <?php if(!empty($kabupaten[$list->id])){?>
                                            <ul class="tree hoverable">
                                                @foreach($kabupaten[$list->id] as $rows)
                                            <li><img src="<?php
                                    if($rows->status == 1) echo asset('materialize/images/Small-Down.gif');
                                    else echo asset('materialize/images/Small-Up.gif');
                                    ?>" alt="materialize logo">
                                    <span class="folder">  <a onclick="location.href='{{url("history/".$rows->id)}}'">{{$rows->id}} {{$rows->name}}</a>
                                        <a <?php if($rows->status==1) {?>  onclick="location.href='{{url('alert/'.$rows->id)}}' <?php }?>"><span
                                    <?php if($rows->status==0) {?> class="btn btn-small waves-effect waves-light green new badge green"> confirmed
                                    <?php }else {?> class="btn btn-small waves-effect waves-light red new badge red"> alert
                                    <?php }?>
                                            </span></a></span>
                                            </li>
                                                         
                                        @endforeach

                                    </ul><?php }?>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php
//            $username = 'helpdesk';
//            $password = 'adminduk';
//
//            $context = stream_context_create(array(
//                'http' => array(
//                    'header'  => "Authorization: Basic " . base64_encode("$username:$password")
//                )
//            ));
//            $url = 'http://118.97.77.78/Orion/Login.aspx?';
//            $data = file_get_contents($url, true, $context);
//            echo $data
    ?>
    <script type="text/javascript" src="{{asset("materialize/js/plugins.js")}}"></script>

</section>


@endsection