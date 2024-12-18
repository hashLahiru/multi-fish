@extends('admin.layout.app')

@section('title', 'Messages')

@section('content')
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <h2>Unread ({{ $unreadCount }})</h2>
            </div>
            <div class="mail-box">
                <table id="messagesTable" class="table table-hover" style="padding-left: 10px; padding-right: 10px;">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr class="{{ $message->status == 'read' ? 'read' : 'unread' }}">
                                <td class="check-mail">
                                    <input type="checkbox" class="i-checks" />
                                </td>
                                <td>
                                    <a href="{{ route('admin.messages.show', $message->id) }}">{{ $message->name }}</a>
                                </td>
                                <td>
                                    <a
                                        href="{{ route('admin.messages.show', $message->id) }}">{{ Str::limit($message->message, 50) }}</a>
                                </td>
                                <td>{{ $message->created_at->format('h:i A') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
