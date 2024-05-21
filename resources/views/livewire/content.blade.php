<div class="row">
    {{-- <livewire:counter />  --}}
    @foreach ($contents as $content)
        <div class="col-md-4">

            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="card-title font-16 mt-0">{{ $content->judul }}</h4>
                    {{-- <h6 class="card-subtitle font-14 text-muted">Support card subtitle</h6> --}}
                </div>
                <img class="img-fluid" width="1200px" height="500px" src="{{ asset('images/' . $content->foto) }}"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{ $content->deskripsi }}</p>
                    <a href="/admin/delete-content/{{ $content->id }}"
                        onclick="tanya = confirm('Anda Yakin Akan Menghapus Data ?');
                                    if (tanya == true) return true;
                                    else return false;"
                        class="btn btn-sm btn-danger">Hapus</a>
                    <a href="#edit{{ $content->id }}" data-toggle="modal" class="btn btn-sm btn-success">Edit</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $contents->links() }}
