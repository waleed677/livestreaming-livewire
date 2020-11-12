 @if($switch)
 <div class="card mt-3">
    <div class="card-body">

<div class="row">
    <div class="col-md-5 m-3 topGreen center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="col-md-5 m-3 topGreen">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>


<div class="row m-3">
    <div class="col-md-12">

        <div class="input-group mb-3">

            <input wire:model.debounce.500ms='search' type="text" name="search" class="form-control input-lg" placeholder="Youtube Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-danger" wire:click="searchVideo()">Search</button>
            </div>

          </div>
          @error('search') <span class="text-danger error">{{ $message }}</span>@enderror
          {{-- {{ $video }}
                @foreach($video as $videos)
        <p>hello</p>
                @endforeach --}}
          {{-- <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WPrBRxG_nIU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div> --}}
    </div>
</div>
    </div>
</div>
@endif


