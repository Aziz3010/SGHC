@extends('layouts.admin')

@section('page_title')
تعديل الاقسام
@endsection

@section('main_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title w-100 m-0">تعديل الاقسام</h3>
            </div>

            <div class="card-body">
                @if(count($sectionsArrange) > 0)
                @foreach($sectionsArrange as $section)
                <form action="{{url('/admin/settingsTwo/rearrange')}}" method="POST">
                    @csrf
                    
                    <div class="form_groupp">
                        <p class="mb-0">القسم {{$section->id}}</p>
                        
                        <input type="hidden" name="sectionID" value="{{$section->id}}">
                        <input type="hidden" name="sectionName" value="{{$section->sectionName}}">
                        <div>
                            <select name="arrange" id="arrange{{$section->id}}">
                                <option value="0">إختر الترتيب</option>
                                @foreach($sectionsArrange as $sec)
                                <option @if($section->arrange == $sec->id ) @php echo "selected" @endphp @endif value="{{$sec->id}}">{{$sec->id}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex">
                            <p class="mb-0">عرض القسم؟</p>
                            <div>
                                <label class="mx-3" for="yesDisplay{{$section->id}}">نعم</label>
                                <input @if($section->display === "yes") @php echo "checked" @endphp @else null @endif  class="mb-0" type="radio" value="yes" id="yesDisplay{{$section->id}}" name="display">

                                <label class="mx-3" for="noDisplay{{$section->id}}">لا</label>
                                <input @if($section->display === "no") @php echo "checked" @endphp @else null @endif  class="mb-0" type="radio" value="no" id="noDisplay{{$section->id}}" name="display">
                            </div>
                        </div>

                        <button type="submit" class="btn bg-primary">حفظ التعديل</button>
                    </div>
                </form>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection