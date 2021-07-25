<table>
    <thead>
        <tr>
                                                        <th>NO</th>
                                                        <th>NAMA</th>
                                                        <th>EMAIL</th>
                                                        <th>NO TELEPON/WA</th>
                                                        <th>ALAMAT</th>
                                                        <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($tamu as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->telph }}</td>
            <td>{{ $data->addrs }}</td>
            <td>{{ $data->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
