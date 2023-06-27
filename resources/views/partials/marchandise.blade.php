<div class="container-fluid bg-primary py-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="march-container">
                @foreach($marchandises as $marchandise)
                    <div class="marchandise">
                        <img src="{{ Vite::asset($marchandise['image']) }}" alt="">
                        <div class="div">
                            <small>{{ $marchandise['name'] }}</small>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .march-container {
        display: flex;
        justify-content: space-between;
        align-content: center;
        max-width: 75rem;
        margin: 0 auto;
    }

    .marchandise {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        margin: 0 2rem;
    }

    .marchandise img {
        width: 70px;
        height: 100px;
    }
</style>




