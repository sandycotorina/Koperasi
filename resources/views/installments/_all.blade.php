<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NIK</th>
            <th scope="col">Nama anggota</th>
            <th scope="col">Jenis pinjaman</th>
            <th scope="col">Total pinjaman</th>
            <th scope="col">Total angsuran</th>
            <th scope="col">Lama angsuran</th>
            <th scope="col">Tanggal Angsuran</th>
            @role('bendahara')
                <th scope="col">Angsuran</th>
            @endrole
        </tr>
    </thead>
    <tbody>

            {{-- jika data kosong --}}
            <tr>
                <td colspan="9">
                    Data belum tersedia
                </td>
            </tr>

        

    </tbody>
</table>
