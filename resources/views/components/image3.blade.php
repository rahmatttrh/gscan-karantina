<div class="modal modal-blur fade" id="modal-image3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full-width modal-dialog-centered " role="document">
        <div class="modal-content border">
        <div class="modal-header">
            <h5 class="modal-title text-secondary">Detail Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('img/xray/3.jpg')}})">
                <img src="{{asset('img/xray/3.jpg')}}" />
            </figure> -->
            <img class="w-100" src="http:{{$image}}" />
            {{-- <figure id="magnifying_area">
                <img id="magnifying_img"  src="{{asset('img/xray/1.jpeg')}}" />
            </figure> --}}
        </div>
        </div>
    </div>
</div>