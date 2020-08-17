@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{__('Dashboard')}}</div>

                    <div class="card-body">
                        {{-- {{__('Your application\'s dashboard.')}} --}}
                        <ul>
                            <li><a href="/horizon">Horizon</a></li>
                            <li><a href="/mailcoach">Mailcoach</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</home>
@endsection
