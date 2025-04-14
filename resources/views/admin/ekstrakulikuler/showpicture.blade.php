<div id="myPicture{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Gambar Ekstrakulikuler saat ini</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <img src="{{ asset('img/ekstrakulikuler/'. $data->gambar) }}" class="img-fluid" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Kembali</button>
            </div>
        </div>
    </div>
  </div>
  