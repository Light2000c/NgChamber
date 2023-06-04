<div class= >
    <div class="container">
        <div class="" style="margin-bottom: 30px; margin-top: 20px;">
            <h4 class="" style="font-size: 25px;">Latest<span class="text-theme-color-2"> News</span></h4>
        </div>
        <div class="row" style="margin-bottom: 100px;">
    
                @foreach ($news as $new)
                <div class="col-md-3">
                   <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); height: 200px; padding: 10px; border-radius: 10px; margin-bottom: 10px; display:flex; justify-content:space-between; flex-direction:column;">
                    <div>
                        <h5 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px;">{{ Str::words($new->title, 13) }}</h5>
                    </div>

                    <div class="" style="display: flex; justify-content: end;">
                        <a href="{{ route('news-details', $new) }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 14px; text-align: right; font-weight: bold; color: #4D7902;">view <i class="fa fa-arrow-right" style="margin-left: 4px;"></i></a>
                     </div>
                   </div>
                  </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
