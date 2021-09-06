@php
    $listfooter=[
        "dc comics" => ['characters','comics','movies','TV','games','videos','news'],
        "dc" => ['term of use','privacy policy(New)','ad choice','advertising','jobs','subscription','talent workshops','CPSC certificates','ratings','shop help','conctact us'],
        "sites" => ['DC','MAD magazine','DC Kids','DC universe','DC power visa'],
        "shop" => ['shop DC', 'Shop DC collectibles']
        ];
@endphp


<footer>
    <div class="footer-up">
        <ul>
            <li>
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital comics">
                <h4>digital comics</h4>
            </li>
            <li>
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merchandise">
                <h4>dc merchandise</h4>
            </li>
            <li>
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscriptions">
                <h4>subscription</h4>
            </li>
            <li>
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="shop locator">
                <h4>comic shop locator</h4>
            </li>
            <li>
                <img class="last-img" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="dc power visa">
                <h4>dc power visa</h4>
            </li>
        </ul>
    </div>
    <div class="footer-center">
        <div class="footer-center-box">
            <div class="footer-center-left">
                @foreach($listfooter as $k => $list)
                    @if($k != "shop")
                        <ul>
                            <li><h3>{{$k}}</h3></li>
                            @foreach($list as $lis)
                                <li><a href="#">{{$lis}}</a></li>
                            @endforeach
                        </ul>
                    @else
                        <ul class="last">
                            <li><h3>{{$k}}</h3></li>
                            @foreach($list as $lis)
                                <li><a href="#">{{$lis}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
                <div class="footer-center-bottom">
                    All Site Content >TM and 2020 DC Entertainment, unless otherwise <span>noted here.</span> All right reserved. <span>Coockies settings</span>
                </div>
            </div>
            <div class="footer-center-right"></div>



        </div>
       
    </div>

</footer>