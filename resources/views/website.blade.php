<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGHC</title>
    <link rel="stylesheet" href="{{URL::asset('assets/admin/css/mycustomstyle.css')}}">
</head>

<body>
    <nav class="mb-3">
        <a href="{{url('/admin')}}">الادمن</a>
    </nav>

    @foreach($allSections as $section)
        <section class="my-2 sectionStyle @if($section->display == 'no') @php echo 'display_none' @endphp @else echo 'display' @endphp  @endif">
            <h2>قسم رقم: {{$section->id}}</h2>
            <h3>ترتيب القسم: {{$section->arrange}}</h3>
            <h4>عرض القسم: {{$section->display}}</h4>


        </section>
    @endforeach

</body>

</html>