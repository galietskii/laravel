<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $banners = [
            ['img'=>'images/1.png',
                'title'=>'denouncing pleasure',
                'description'=>'<p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>'],
            ['img'=>'images/2.png',
             'title'=>'denouncing pleasure',
             'description'=>'<p>Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur.</p>'],
            ['img'=>'images/3.png',
             'title'=>'denouncing pleasure',
             'description'=>'<p>Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur.</p>'],
        ];
        $banner_bottoms = [
            ['text'=>'<div class="banner-bottom-grids">
                <div class="col-md-5 banner-bottom-grid wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>vel illum qui dolorem eum</h2>
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.</p>
                    <div class="more">
                        <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                    </div>
                </div>
                <div class="col-md-7 banner-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="banner-bottom-grid1">
                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                        <div class="banner-bottom-grid-pos">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress1">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <div class="progress progress2">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>'],
            ['text'=>'<div class="banner-bottom-grids">
            <div class="col-md-6 banner-bottom-grid-1 wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="banner-bottom-grid-11">
                    <img src="images/2.jpg" alt=" " class="img-responsive" />
                    <div class="banner-bottom-grid-11-pos">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.Quis autem vel eum iure reprehenderit qui in ea voluptate
                            velit esse quam nihil molestiae consequatur.</p>
                        <div class="more m1">
                            <a href="single.html" class="hvr-curl-bottom-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 banner-bottom-grid-1 wow fadeInLeftBig" data-wow-duration="1500ms" data-wow-delay="100ms">
                <h3>Excepteur sint occaecat cupidatat non proident</h3>
            </div>
            <div class="clearfix"> </div>
        </div>']
        ];
        return view('pages.home.index',compact('banners','banner_bottoms'));
    }

    public function mail()
    {
        return view('pages.mail.index');
    }
}
