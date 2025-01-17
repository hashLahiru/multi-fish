@extends('admin.layout.app')

@section('title', 'View Message')

@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <h2>{{ $message->subject ?? 'No Subject' }}</h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <h5>
                        <span class="float-right font-normal">{{ $message->created_at->format('h:i A d M Y') }}</span>
                        <span class="font-normal">Email: </span>{{ $message->email }}<br>
                        <span class="font-normal">Phone: </span>{{ $message->phone ?? 'N/A' }}
                    </h5>
                </div>
            </div>
            <div class="mail-box">
                <div class="mail-body">
                    <p>{{ $message->message }}</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="text-right mt-3">
                <a href="{{ route('admin.messages') }}" class="btn btn-primary">Back to Inbox</a>
            </div>
        </div>
    </div>
</div>
@endsection