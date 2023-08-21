@if (session()->has('error'))
        <div class="col-4 p-4 border bg-light" style="
        position: fixed;
        bottom: 40px;
        right: 50px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <p class="text-capitalize m-0 px-3 text-muted">{{session('error')}}</p>
        </div>
    @endif
