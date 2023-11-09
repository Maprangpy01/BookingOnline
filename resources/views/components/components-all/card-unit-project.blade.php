<div class="card" style="width: 160px;min-width:160px;margin:15px 6px">
    <div class="image-container">
        <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%" class="image-card">
        <div class="fnt-20" style="position:absolute;top:77px;left:5px;">
            <div class="tag-yellow">
                #PROTIDSPEEDX3
            </div>
        </div>
    </div>
    <div class="card-body p-2" style="line-height: 22px">
        <span class="mb-0 fnt-20 text-gray1" style="line-height: 1px">{{$ProjectName}}</span><br>
        <span class="text-gray1">ยูนิต : {{$UnitNo}}</span><br>
        <span class="text-red">{{$Price}}</span>
        <del class="text-gray">{{$PriceFull}}</del>
    </div>
    
</div>