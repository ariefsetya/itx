<div>
    <header class="app-bar fixed-top navy" data-role="appbar">
        <div class="container">
            <a href="/" class="app-bar-element branding"><img src="http://www.hotfm.org.uk/trainz_logo.png" style="height: 28px; display: inline-block; margin-right: 10px;"> Indonesian Trainz X</a>

            <ul class="app-bar-menu small-dropdown">
                <li><a href="{{url('')}}">Beranda</a></li>
                @if(0)
                <li data-flexorderorigin="0" data-flexorder="1" class="">
                    <a href="#" class="dropdown-toggle">Kereta</a>
                    <ul class="d-menu" data-role="dropdown" data-no-close="true" style="display: none;">
                        <li>
                            <a href="" class="dropdown-toggle">Lokomotif</a>
                            <ul class="d-menu" data-role="dropdown">
                            @foreach(\App\Kereta::where('jenis','lokomotif')->where('open','1')->whereStatus(!'Private')->groupBy('subjenis')->get() as $row)
                                <li><a href="{{route('lokomotif',[$row->subjenis])}}">{{$row->subjenis}}</a></li>
                            @endforeach
                            @if(sizeof(\App\Kereta::where('jenis','lokomotif')->where('open','1')->whereStatus(!'Private')->groupBy('subjenis')->get())==0)
                            <li><a href="#">Belum ada konten</a></li>
                            @endif
                            </ul>
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle">Kereta</a>
                            <ul class="d-menu" data-role="dropdown">
                            @foreach(\App\Kereta::where('jenis','kereta')->where('open','1')->whereStatus(!'Private')->groupBy('subjenis')->get() as $row)
                                <li><a href="{{route('kereta',[$row->subjenis])}}">{{$row->subjenis}}</a></li>
                            @endforeach
                            @if(sizeof(\App\Kereta::where('jenis','kereta')->where('open','1')->whereStatus(!'Private')->groupBy('subjenis')->get())==0)
                            <li><a href="#">Belum ada konten</a></li>
                            @endif
                            </ul>
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle">Gerbong</a>
                            <ul class="d-menu" data-role="dropdown">
                            @foreach(\App\Kereta::where('jenis','gerbong')->where('open','1')->whereStatus(!'Private')->groupBy('subjenis')->get() as $row)
                                <li><a href="{{route('gerbong',[$row->subjenis])}}">{{$row->subjenis}}</a></li>
                            @endforeach
                            @if(sizeof(\App\Kereta::where('jenis','gerbong')->where('open','1')->whereStatus(!'Private')->groupBy('subjenis')->get())==0)
                            <li><a href="#">Belum ada konten</a></li>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                <li data-flexorderorigin="1" data-flexorder="2" class="">
                    <a href="#" class="dropdown-toggle">Rute</a>
                    <ul class="d-menu" data-role="dropdown" data-no-close="true" style="display: none;">
                        <li><a href="{{route('rute',['free'])}}">Freeware</a></li>
                        <li><a href="{{route('rute',['plu'])}}">Private Limited User</a></li>
                        <li><a href="{{route('rute',['pay'])}}">Payware</a></li>
                    </ul>
                </li>
                @if(1)
                <li data-flexorderorigin="2" data-flexorder="3" class="">
                    <a href="#" class="dropdown-toggle">Objek</a>
                    <ul class="d-menu" data-role="dropdown" data-no-close="true" style="display: none;">
                        <li><a href="{{route('objek',['free'])}}">Freeware</a></li>
                        <li><a href="{{route('objek',['plu'])}}">Private Limited User</a></li>
                        <li><a href="{{route('objek',['pay'])}}">Payware</a></li>
                    </ul>
                </li>
                @endif

                <li data-flexorderorigin="3" data-flexorder="4" class="active-container">
                    <a href="#" class="dropdown-toggle">Community</a>
                    <ul class="d-menu" data-role="dropdown" data-no-close="true" style="display: none;">
                        <li><a target="_blank" href="https://www.facebook.com/groups/337639216389364/">Indonesian Trainz Simulator</a></li>
                        <li data-flexorderorigin="2" data-flexorder="3" class="">
                            <a href="#" class="dropdown-toggle">Friends List</a>
                            <ul class="d-menu" data-role="dropdown" data-no-close="true" style="display: none;">
                            @foreach(\App\User::whereUrl(!null)->whereBrand(!null)->whereStatus('3')->get() as $row)
                                <li><a href="{{route('gerbong',[$row->subjenis])}}">{{$row->subjenis}}</a></li>
                            @endforeach
                            @if(sizeof(\App\User::whereUrl(!null)->whereBrand(!null)->whereStatus('3')->get())==0)
                            <li><a href="#">Belum ada daftar</a></li>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('terms')}}">Terms of Service</a></li>
            </ul>

            <span class="app-bar-pull"></span>

        <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
    </header>
</div>