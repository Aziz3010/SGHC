<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGHC 2</title>
    <link rel="stylesheet" href="{{URL::asset('assets/admin/css/websiteTwo.css')}}">
</head>

<body>
    <nav class="mb-3">
        <a href="{{url('/admin')}}">الادمن</a>
    </nav>


    <main>

        @if($allSections['0']['sectionName'] == 'header')
        @php $arrange0 = $allSections['0']['arrange'] @endphp
        @php $display0 = $allSections['0']['display'] @endphp
        <section id="0" class="header" style="order: {{$arrange0}} ; display: @if($display0 == 'yes') block @else none @endif">
            <h3>one: header</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ipsam!</p>
        </section>
        @endif


        @if($allSections['1']['sectionName'] == 'reviews')
        @php $arrange1 = $allSections['1']['arrange'] @endphp
        @php $display1 = $allSections['1']['display'] @endphp
        <section id="1" class="reviews" style="order: {{$arrange1}} ; display: @if($display1 == 'yes') block @else none @endif">
            <h3>two: reviews</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ipsam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ipsam!</p>
        </section>

        @if($allSections['2']['sectionName'] == 'comments')
        @php $arrange2 = $allSections['2']['arrange'] @endphp
        @php $display2 = $allSections['2']['display'] @endphp
        <section id="2" class="comments" style="order: {{$arrange2}} ; display: @if($display2 == 'yes') block @else none @endif">
            <h3>there: comments</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ipsam!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, ipsam!</p>
        </section>
    </main>
    @endif


    </main>
    @endif

</body>

</html>