<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - JIMPay</title>
    <meta name="description" content="Kopkar JIM Mobile App">
    <meta name="keywords" content="kopkar jim, jimpay, joperasi karyawan jbi, kampung inggris, kampung inggris lc, kampung inggris pare" />
    <link rel="icon" type="image/png" href="{{ asset ('assets') }}//img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('assets') }}//img/icon/192x192.png">
    <link rel="stylesheet" href="{{ asset ('assets') }}//css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body style="background-color:#e9ecef;">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Capsule -->
    <div id="jimApp">
        <div class="section" id="user-section">
            <div id="user-detail">
                <div class="avatar">
                    <img src="{{ asset ('assets') }}//img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
                </div>
                <div id="user-info">

                    <h2 id="user-name">{{ Auth::user()->first_name }} || {{ Auth::user()->member_id }}</h2>
                    <span id="user-role">@rupiah ($wallets)</span>
                </div>
            </div>
        </div>

        <div class="section" id="menu-section">
            <div class="card">
                <div class="card-body text-center">
                    <div class="list-menu">
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="" class="green" style="font-size: 40px;">
                                    <ion-icon name="scan-outline"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                <span class="text-center">Scan</span>
                            </div>
                        </div>
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="{{ route('user.topup.index') }}" class="danger" style="font-size: 40px;">
                                    <ion-icon name="duplicate-outline"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                <span class="text-center">Topup</span>
                            </div>
                        </div>
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="{{route('user.transfer.index')}}" class="warning" style="font-size: 40px;">
                                    <ion-icon name="bluetooth-outline"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                <span class="text-center">Transfer</span>
                            </div>
                        </div>
                        <div class="item-menu text-center">
                            <div class="menu-icon">
                                <a href="{{route('user.riwayat-transaksi.index')}}" class="orange" style="font-size: 40px;">
                                    <ion-icon name="document-attach-outline"></ion-icon>
                                </a>
                            </div>
                            <div class="menu-name">
                                Riwayat
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt-2" id="jimApp-section">
            <div class="todayjimApp">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">

                                <div class="list-menu">
                                    <div class="item-menu text-center">
                                        <div class="menu-icon">
                                            <a href="{{route('user.sim-wajib.index')}}" class="green" style="font-size: 40px;">
                                                <ion-icon name="bookmark-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="menu-name">
                                            <span class="text-center">Simp Wajib</span>
                                        </div>
                                    </div>
                                    <div class="item-menu text-center">
                                        <div class="menu-icon">
                                            <a href="{{route('user.sim-sukarela.index')}}" class="danger" style="font-size: 40px;">
                                                <ion-icon name="wallet-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="menu-name">
                                            <span class="text-center">Simp Sukarela</span>
                                        </div>
                                    </div>
                                    <div class="item-menu text-center">
                                        <div class="menu-icon">
                                            <a href="{{route('user.tabungan.index')}}" class="green" style="font-size: 40px;">
                                                <ion-icon name="save-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="menu-name">
                                            <span class="text-center">Tabungan</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-menu">
                                    <div class="item-menu text-center">
                                        <div class="menu-icon">
                                            <a href="{{route('user.paylater.index')}}" class="danger" style="font-size: 40px;">
                                                <ion-icon name="card-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="menu-name">
                                            <span class="text-center">Paylater</span>
                                        </div>
                                    </div>
                                    <div class="item-menu text-center">
                                        <div class="menu-icon">
                                            <a href="{{route('user.pembiayaan.index')}}" class="warning" style="font-size: 40px;">
                                                <ion-icon name="cash-outline"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="menu-name">
                                            <span class="text-center">Pembiayaan</span>
                                        </div>
                                    </div>
                                    <div class="item-menu text-center">
                                        <div class="menu-icon">
                                            <a href="{{route('user.produk.index')}}" class="warning" style="font-size: 40px;">
                                                <ion-icon name="calendar-number"></ion-icon>
                                            </a>
                                        </div>
                                        <div class="menu-name">
                                            <span class="text-center">Semua</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rekapjimApp">
                <div class="row">
                    <div class="col-6">
                        <div class="card gradasigreen">
                            <div class="card-body">
                                <div class="jimAppcontent">
                                    <div class="iconjimApp">
                                        <ion-icon name="arrow-down-circle"></ion-icon>
                                    </div>
                                    <div class="jimAppdetail">
                                        <h4 class="jimApptitle">Total Masuk</h4>
                                        <span>@rupiah ($totalHistoryIn)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="#" class="text-center" style="font-size: 25px;">
                                <div class="action-button">
                                    Show All
                                </div>
                            </a> -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card gradasired">
                            <div class="card-body">
                                <div class="jimAppcontent">
                                    <div class="iconjimApp">
                                        <ion-icon name="arrow-up-circle"></ion-icon>
                                    </div>
                                    <div class="jimAppdetail">
                                        <h4 class="jimApptitle">Total Keluar</h4>
                                        <span>@rupiah ($totalHistoryOut)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jimApptab mt-1">
                <div class="tab-pane fade show active" id="pilled" role="tabpanel">
                    <ul class="nav nav-tabs style1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#history" role="tab">
                                Riwayat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#shu" role="tab">
                                SHU
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-1" style="margin-bottom:100px;">
                    <div class="tab-pane fade show active" id="history" role="tabpanel">
                        <ul class="listview image-listview">
                            @forelse ($histories as $history)
                            <li>
                                <div class="item">
                                    @if ($history->type == 'deposit')
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="arrow-down"></ion-icon>
                                    </div>
                                    @else
                                    <div class="icon-box bg-danger">
                                        <ion-icon name="arrow-up"></ion-icon>
                                    </div>
                                    @endif
                                    <div class="in">
                                        <div>{{ $history->meta['description'] ?? 'Tidak Ada Keterangan' }}</div>
                                        @if ($history->type == 'deposit')
                                        <span class="badge badge-primary">@rupiah ($history->amount)</span>
                                        @else
                                        <span class="badge badge-danger">@rupiah ($history->amount)</span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @empty
                            <li>
                                <div class="item">
                                    <div class="in">
                                        <div>belum ada transaksi masuk</div>
                                    </div>
                                </div>
                            </li>
                            @endforelse
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="shu" role="tabpanel">
                        <ul class="listview image-listview">
                            <li>
                                <div class="item">
                                    <img src="{{ asset ('assets') }}//img/sample/avatar/avatar1.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Sabar Yes!</div>
                                        <span class="text-muted">Masih Dihitung</span>
                                    </div>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="item">
                                    <img src="{{ asset ('assets') }}//img/sample/avatar/avatar1.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Emelda Scandroot</div>
                                        <span class="badge badge-primary">3</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <img src="{{ asset ('assets') }}//img/sample/avatar/avatar1.jpg" alt="image" class="image">
                                    <div class="in">
                                        <div>Henry Bove</div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- * App Capsule -->




    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset ('assets') }}//js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="{{ asset ('assets') }}//js/lib/popper.min.js"></script>
    <script src="{{ asset ('assets') }}//js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset ('assets') }}//js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ asset ('assets') }}//js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Base Js File -->
    <script src="{{ asset ('assets') }}//js/base.js"></script>
</body>

</html>