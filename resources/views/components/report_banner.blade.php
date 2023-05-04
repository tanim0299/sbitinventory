@php
$data = DB::table('website_infos')->where('id',1)->first();
@endphp
<center><img src="{{asset('WebsiteInfo/img')}}/{{$data->banner}}" id="header_image" class="img-fluid"></center>
