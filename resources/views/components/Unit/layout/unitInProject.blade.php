<div class="container-fluid p-0" data-bs-spy="scroll" data-bs-target="#unitProject" data-bs-offset="50">
    <div class="row g-4 mt-3 text-center" id="unitPJ">
        <div class="col-sm-12 text-center">
            <span class="fnt-30">
                <strong>
                    <span style="color: #EC161D">ยูนิต</span>ในโครงการ
                </strong>
            </span>
        </div>
        <div class="col-sm-12 fnt-20 d-flex justify-content-end" style="color: #999;padding-right:30px">
            ราคา : <button class="fillter" data-type="down" data-filter="value">น้อย - มาก
                <div class="text-start p-0" style="margin-top: 3px;margin-left:3px">
                    <i class="bi bi-arrow-up-short"></i>
                </div>
            </button>
        </div>
    </div>
</div>
<div class="container-fluid p-0" style="margin-bottom: 55px;">
    <div class="row justify-content-center cardUnit">
        @php
            $count = 0;
            // dd($cardUnit);
        @endphp
        {{-- @foreach (range(1, 3) as $index) --}}
        @foreach ($cardUnit['ResultData']['FavoritesInfoList']['unitList'] as $item)
            @php
                $count = $count + 1;
                $countCard = 'card' . $count;
                $ImgLogo = $item['ImgLogo'];
                $Img = $item['Img'];
                $UnitNo = $item['unit'];
                $ProjectName = $item['Name'];
                $UnitPlanName = $item['space'];
                $Reserve = $item['reserve'];
                $Price = $item['sell'];
                $PriceFull = $item['full'];
                $Event = $item['event'];
                $Icon1 = $item['icon1'];
                $Icon1Detail = $item['icon1Detail'];
                $Icon2 = $item['icon2'];
                $Icon2Detail = $item['icon2Detail'];
                $Time = $item['time'];
                $view = $item['view'];
            @endphp
            {{-- @if ($count > 3)
                <div hidden>
                    @include('components.components-all.card-reserve')
                </div>
            @else --}}
            @include('components.components-all.card-reserve')
            {{-- @endif --}}
        @endforeach
        {{-- @if ($count > 3) --}}
        {{-- @endif --}}
    </div>
    <div class="row justify-content-center mt-4 ">
        <div class="col-lg-2 col-sm-5 col-6 p-0 fnt-20">
            <a href="" style="color: #554C4F">
                <div class="row" id="loadMore">
                    <div class="col-8 text-end p-0 me-1 fnt-24">โหลดเพิ่มเติม </div>
                    <div class="col-3 text-start p-0" style="margin-top: 6px;margin-left:6px">
                        <i class="bi bi-arrow-clockwise"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".card-reserve").slice(0, 3).show();
        $("#loadMore").on("click", function(e) {
            console.log("click");
            e.preventDefault();
            $(".card-reserve:hidden").slice(0, 3).slideDown();
            if ($(".card-reserve:hidden").length == 0) {
                $("#loadMore").hide();
            }
        });
    });
    const sorter = btn => {
        console.log("click");
        const cards = [...document.querySelectorAll('.card-reserve')]
        const container = document.querySelector('.cardUnit')
        let deck = []
        let btnDisabled = document.querySelector('.fillter')
        const filter = id => id.dataset.filter
        const type = id => id.dataset.type

        cards.forEach(el => {
            const from = id => el.querySelector(id).innerText
            let card = {
                val: from('.sale'),
                name: from('.name'),
                card: el
            }
            deck.push(card)
            el.remove()
        })


        if (btnDisabled) {
            btnDisabled.classList.toggle('fillter')
            if (btn == btnDisabled)
                btnDisabled.dataset.type = type(btnDisabled) == 'down' ? 'up' : 'down'
            btnDisabled.innerText = `Sort by ${filter(btnDisabled)}-${type(btnDisabled)}!`
        }
        const icons = `<div class="text-start p-0" style="margin-top: 3px;margin-left:3px"><i class="bi bi-arrow-up-short"></i></div>`;
        if(type(btnDisabled)=='down'){
            btn.innerHTML = `มาก - น้อย`+icons;
        }else{
            btn.innerHTML = `น้อย - มาก`+icons;
        }
        btn.classList.toggle('fillter')
        deck.sort((a, b) => {
            if (filter(btn) == 'value')
                return type(btn) == "up" ? a.val - b.val : b.val - a.val
        })
        deck.forEach(el => container.append(el.card))
    }

    document.querySelectorAll('.fillter').forEach(btn =>
        btn.addEventListener('click', e => sorter(e.currentTarget)))
</script>
<style>
    .card-reserve {
        display: none;
    }
</style>
