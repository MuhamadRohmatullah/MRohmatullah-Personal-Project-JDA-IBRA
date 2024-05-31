@extends('partial.layouts.app')

@section('title', 'edit user')


@section('content')
<div class="container-fluid m-4">
<form action="{{ route('watch.update', ['watch' => $watch['id']]) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Posting Acara Nobar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-4 padding-0">
                            <img src="{{asset($watch["image"])}}" alt="" style="width : 100px">
                            <label for="" class="form-label">Gambar postingan</label>
                            <input class="form-control" type="file" name="gambar1" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Input Your name" value="{{$watch["name"]}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Competition</label>
                    <input type="text" name="competition" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" value="{{$game["competition"]}}">
                </div>
                <div class="mb-3">
                    <label for="inputDate" class="form-label">Date of Watch</label>
                    <input type="date" name="date" id="inputDate" class="form-control" aria-describedby="passwordHelpBlock" value="{{$watch["date"]}}">
                </div>
                <div class="mb-3">
                    <label for="inputDate" class="form-label">Date of Match</label>
                    <input type="datetime-local" name="match_date" id="inputDate" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $game["kickoff"] }}">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                               
                                <input class="form-check-input" type="radio" name="free_paid" id="flexRadioDefault1" value="free">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Free
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="free_paid" id="flexRadioDefault2" value="pay">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Pay
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$status["price"]}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Person</label>
                    <input type="text" name="person" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$status["person"]}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Seat</label>
                    <input type="text" name="seat" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$watch["seat"]}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Home team</label>
                    <input type="text" name="home" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$game["home_team"]}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Away team</label>
                    <input type="text" name="away" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$game["away_team"]}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Location</label>
                    <textarea class="form-control" name="location_name" id="exampleFormControlTextarea1" rows="3" >{{$location["name"]}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Alamat</label>
                    <input type="text" name="addres" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$location["addres"]}}">
                </div>
                <div class="col-4 padding-0">
                    <label for="" class="form-label">Foto Lokasi</label>
                    <img src="{{asset($location["photo"])}}" alt="" style="width : 100px">
                    <input class="form-control" type="file" name="gambarLok" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Link in maps</label>
                    <input type="text" name="location_link" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="{{$location["location_link"]}}">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center mb-2">
                    <input type="submit" class="btn btn-primary" style="width : 100%;" />
                </div>
            </div>
    </form>
</div>
@endsection