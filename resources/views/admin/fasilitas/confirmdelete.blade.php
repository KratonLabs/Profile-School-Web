<div id="myFasilitas{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Konfirmasi Hapus Fasilitas</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus Fasilitas <strong>{{$item->nama}}</strong> ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Kembali</button>
                <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Ya, hapus!" class="btn btn-danger shadow-none">
                </form>
            </div>
        </div>
    </div>
</div>
