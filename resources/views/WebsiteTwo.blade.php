<!DOCTYPE html>
<!--
Template Name: Trealop
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>Trealop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{URL::asset('assets/front/layout/styles/layout.css')}}">
</head>

<body id="top">
    <nav class="mb-3">
        <a href="{{url('/admin')}}">الادمن</a>
    </nav>
    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <div class="fl_left">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
                    <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
            <div class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><a href="index.html"><i class="fas fa-home"></i></a></li>
                    <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
                    <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
                    <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
                    <li id="searchform">
                        <div>
                            <form action="#" method="post">
                                <fieldset>
                                    <legend>Quick Search:</legend>
                                    <input type="text" placeholder="Enter search term&hellip;">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    <!-- ################################################################################################ -->
    @if($allSections['0']['sectionName'] == 'section1')
    @php $arrange0 = $allSections['0']['arrange'] @endphp
    @php $display0 = $allSections['0']['display'] @endphp
    <div id="section1" class="wrapper row1" style="order: {{$arrange0}} ; display: @if($display0 == 'yes') block @else none @endif">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <h1><a href="index.html">Trealop</a></h1>
                <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="clear">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="pages/gallery.html">Gallery</a></li>
                            <li><a href="pages/full-width.html">Full Width</a></li>
                            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                            <li><a href="pages/font-icons.html">Font Icons</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Level 2</a></li>
                            <li><a class="drop" href="#">Level 2 + Drop</a>
                                <ul>
                                    <li><a href="#">Level 3</a></li>
                                    <li><a href="#">Level 3</a></li>
                                    <li><a href="#">Level 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Level 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Link Text</a></li>
                    <li><a href="#">Link Text</a></li>
                    <li><a href="#">Link Text</a></li>
                    <li><a href="#">Link Text</a></li>
                </ul>
                <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>
    @endif
    <!-- ################################################################################################ -->
    @if($allSections['1']['sectionName'] == 'section2')
    @php $arrange1 = $allSections['1']['arrange'] @endphp
    @php $display1 = $allSections['1']['display'] @endphp
    <div id="section2" class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/01.png'); order: {{$arrange1}} ; display: @if($display1 == 'yes') block @else none @endif">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <p>Eu leo curabitur eleifend sapien</p>
                <h3 class="heading">Sed eros nullam quis ligula</h3>
                <p>Elementum lectus varius aliquet quisque fringilla est in porttitor</p>
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn" href="#">Ultricies dui orci</a></li>
                        <li><a class="btn inverse" href="#">Mollis libero quis</a></li>
                    </ul>
                </footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    @endif
    <!-- ################################################################################################ -->
    @if($allSections['2']['sectionName'] == 'section3')
    @php $arrange2 = $allSections['2']['arrange'] @endphp
    @php $display2 = $allSections['2']['display'] @endphp
    <div id="section3" class="wrapper row2" style="order: {{$arrange2}} ; display: @if($display2 == 'yes') block @else none @endif">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading">Sagittis lacus neque ut lorem integer</h6>
                <p>Elementum nisi ac volutpat vestibulum enim mi tincidunt eros</p>
            </div>
            <ul class="nospace group prices">
                <li class="one_third">
                    <article><i class="fas fa-deaf red"></i>
                        <h6 class="heading">Condimentum</h6>
                        <p>Sed porttitor justo magna odio sed lacus nunc consequat sem vel metus imperdiet lacinia suspendisse aliquet mi sed</p>
                        <p><sup>&euro;</sup><strong>80</strong><em>pcm</em></p>
                        <footer><a class="btn" href="#">Details</a></footer>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fas fa-dolly green"></i>
                        <h6 class="heading">Suscipit</h6>
                        <p>Justo in tortor quis dui in purus pede luctus eget condimentum ac bibendum in justo nam condimentum congue risus</p>
                        <p><sup>&euro;</sup><strong>100</strong><em>pcm</em></p>
                        <footer><a class="btn" href="#">Details</a></footer>
                    </article>
                </li>
                <li class="one_third">
                    <article><i class="fas fa-hands blue"></i>
                        <h6 class="heading">Dignissim</h6>
                        <p>Aliquam auctor nisl nec diam ornare nam molestie massa quis pede vestibulum fringilla risus in metus nullam egestas</p>
                        <p><sup>&euro;</sup><strong>125</strong><em>pcm</em></p>
                        <footer><a class="btn" href="#">Details</a></footer>
                    </article>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    @endif
    <!-- ################################################################################################ -->
    @if($allSections['3']['sectionName'] == 'section4')
    @php $arrange3 = $allSections['3']['arrange'] @endphp
    @php $display3 = $allSections['3']['display'] @endphp
    <div id="section4" class="wrapper coloured" style="order: {{$arrange3}} ; display: @if($display3 == 'yes') block @else none @endif">
        <article class="hoc cta clear">
            <!-- ################################################################################################ -->
            <h6 class="three_quarter first">Velit tristique sem vehicula laoreet nullam elementum</h6>
            <footer class="one_quarter"><a class="btn" href="#">Ipsum pharetra leo</a></footer>
            <!-- ################################################################################################ -->
        </article>
    </div>
    @endif
    <!-- ################################################################################################ -->
    @if($allSections['4']['sectionName'] == 'section5')
    @php $arrange4 = $allSections['4']['arrange'] @endphp
    @php $display4 = $allSections['4']['display'] @endphp
    <div id="section5" class="wrapper row3" style="order: {{$arrange4}} ; display: @if($display4 == 'yes') block @else none @endif">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <section id="introblocks">
                <div class="sectiontitle">
                    <h6 class="heading">Augue pretium felis faucibus porttitor</h6>
                    <p>Metus nisl vitae ipsum integer vestibulum suspendisse potenti</p>
                </div>
                <ul class="nospace group">
                    <li class="one_third first">
                        <article><a href="#"><i class="fas fa-microphone-slash"></i></a>
                            <h6 class="heading">Class aptent taciti</h6>
                            <p>Sociosqu ad litora torquent per conubia nostra per inceptos himenaeos nullam tempus erat [&hellip;]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-seedling"></i></a>
                            <h6 class="heading">Id tortor etiam orci</h6>
                            <p>Justo lobortis in consequat ut ornare vel tellus nulla elementum velit pretium ultricies [&hellip;]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-ship"></i></a>
                            <h6 class="heading">Tristique nibh turpis</h6>
                            <p>Fermentum dui sit amet consequat felis arcu quis pede curabitur elit lacus consectetuer vel [&hellip;]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </article>
                    </li>
                </ul>
            </section>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    @endif
    <!-- ################################################################################################ -->
    @if($allSections['5']['sectionName'] == 'section6')
    @php $arrange5 = $allSections['5']['arrange'] @endphp
    @php $display5 = $allSections['5']['display'] @endphp
    <div id="section6" class="wrapper row2" style="order: {{$arrange5}} ; display: @if($display5 == 'yes') block @else none @endif">
        <section id="latest" class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading">Vestibulum nec pharetra eu nisl</h6>
                <p>Sed auctor purus vel aliquet dignissim lectus nunc semper lorem</p>
            </div>
            <ul class="nospace group">
                <li class="one_third">
                    <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
                        <figcaption>Porta facilisis</figcaption>
                    </figure>
                </li>
                <li class="one_third">
                    <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
                        <figcaption>Tellus lectus nec</figcaption>
                    </figure>
                </li>
                <li class="one_third">
                    <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
                        <figcaption>Pede suspendisse</figcaption>
                    </figure>
                </li>
            </ul>
            <footer class="block center"><a class="btn" href="#">Tortor molestie</a></footer>
            <!-- ################################################################################################ -->
        </section>
    </div>
    @endif
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{URL::asset('assets/front/layout/scripts/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/front/layout/scripts/jquery.backtotop.js')}}"></script>
    <script src="{{URL::asset('assets/front/layout/scripts/jquery.mobilemenu.js')}}"></script>
</body>

</html>