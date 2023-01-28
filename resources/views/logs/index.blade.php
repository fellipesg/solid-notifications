<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Subscriber</th>
        <th>Notification Type</th>
        <th>Message</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($logs as $log)
        <tr>
            <td>{{ $log->id }}</td>
            <td>{{ $log->category }}</td>
            <td>{{ $log->subscriber }}</td>
            <td>{{ $log->notification_type }}</td>
            <td>{{ $log->message }}</td>
            <td>{{ $log->created_at }}</td>
            <td>{{ $log->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
